<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientService;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $pageTitle = 'Clients';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add Client',
            'route' => route('admin.client.create')
        ];

        if ($request->ajax()) {
            $data = Client::latest();

            return Datatables::eloquent($data)
                ->addColumn('company', function ($data) {
                    return '<div class="symbol symbol-50px w-50px bg-light">
                                <img src="/assets/media/logos/favicon.png" alt="image" class="p-3">
                            </div>
                            <a href="' . route('admin.client.show', $data->id) . '">' . $data->company_name . '</a>';
                })
                ->addColumn('client', function ($data) {
                    return $data->user->getFullName() . '<br>' . $data->user->email;
                })
                ->addColumn('status', function ($data) {
                    if ($data->user->status == \App\Models\User::STATUS_ACTIVE) {
                        return '<span class="badge badge-light-success fw-bolder me-auto px-4 py-3">' . ucfirst($data->user->status) . '</span>';
                    } elseif ($data->user->status == \App\Models\User::STATUS_DISABLE) {
                        return '<span class="badge badge-light-danger fw-bolder me-auto px-4 py-3">' . ucfirst($data->user->status) . '</span>';
                    } else {
                        return '';
                    }
                })
                ->editColumn('website', function ($data) {
                    return '<a href="//' . $data->website . '" task="_blank">' . $data->website . '</a>';
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('date_range') != '') {
                        $dates = explode("-", $request->get('date_range'));
                        $dateStart = date('Y-m-d', strtotime($dates[0]));
                        $dateEnd = date('Y-m-d', strtotime($dates[1]));
                        $instance->whereBetween('created_at', [$dateStart . " 00:00:00", $dateEnd . " 23:59:59"]);
                    }

                    if ($request->get('status') == \App\Models\User::STATUS_ACTIVE
                        || $request->get('status') == \App\Models\User::STATUS_DISABLE) {
                        $instance->whereHas('user', function ($builder) use ($request) {
                            return $builder->where('status', $request->get('status'));
                        });
                    }

                    if (!empty($request->get('search_company'))) {
                        $companyName = $request->get('search_company');
                        $instance->where('company_name', 'like', '%'. $companyName . '%');
                    }
                })
                ->rawColumns(['id', 'company', 'client', 'website', 'status'])
                ->make(true);
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'status' => User::allStatus()
        ];

        return view('admin.client.index', $viewParams);
    }

    public function create()
    {
        $pageTitle = 'Create Client';
        $breadcrumbs = [['text' => 'Clients', 'url' => '\admin\client'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'services' => Service::get(),
        ];

        return view('admin.client.create', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'user_name' => 'required|string|unique:users',
            'phone' => 'required|string|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'company_name' => 'required|string'
        ]);

        $user = new User();
        $user->role_id = Role::CLIENT_ROLE;
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->user_name = $validatedData['user_name'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->status = ($request->status == "on") ? 1 : 0;
        $user->email_verified_at = Carbon::now();
        $user->save();

        $client = new Client();
        $client->user()->associate($user);
        $client->company_name = $validatedData['company_name'];
        $client->website = $request->website;
        $client->address = $request->address;
        $client->city = $request->city;
        $client->state = $request->state;
        $client->postal_code = $request->postal_code;
        if ($client->save()) {
            if ($request->client_services !== null) {
                foreach ($request->client_services as $key => $client_service) {
                    ClientService::create([
                        'client_id' => $client->id,
                        'service_id' => $client_service['service_id'],
                        'start_date' => $client_service['start_date']
                    ]);
                }
            }

            Session::flash('successMessage', 'A new client has been create successfully!');
            return redirect()->route('admin.client.index');
        }

        return redirect()->back()
            ->withInput()->withErrors('Failed to create new record, Try again!');
    }

    public function show(Client $client)
    {
        $pageTitle = 'Client Details';
        $breadcrumbs = [['text' => 'clients', 'url' => '/admin/client'], ['text' => $pageTitle]];

        if ($client) {
            $viewParams = [
                'pageTitle' => $pageTitle,
                'breadcrumbs' => $breadcrumbs,
                'client' => $client,
            ];

            return view('admin.client.view', $viewParams);
        }

        return redirect()->back()
            ->withErrors('Invalid Data!');
    }

    public function edit(Client $client)
    {
        $pageTitle = 'Update Client';
        $breadcrumbs = [['text' => 'clients', 'url' => '/admin/client'], ['text' => $pageTitle]];

        if ($client) {
            $viewParams = [
                'pageTitle' => $pageTitle,
                'breadcrumbs' => $breadcrumbs,
                'services' => Service::get(),
                'client' => $client,
            ];

            return view('admin.client.edit', $viewParams);
        }

        return redirect()->back()
            ->withErrors('Invalid Data!');
    }

    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'user_name' => 'required|string|unique:users,user_name,' . $client->user_id,
            'phone' => 'required|string|max:10',
            'email' => 'required|email|unique:users,email,' . $client->user_id,
            'new_password' => 'nullable|min:8',
            'company_name' => 'required|string'
        ]);

        $user = User::where('id', $client->user_id)->first();
        if ($user && $client) {
            $user->first_name = $validatedData['first_name'];
            $user->last_name = $validatedData['last_name'];
            $user->user_name = $validatedData['user_name'];
            $user->phone = $validatedData['phone'];
            $user->email = $validatedData['email'];
            if ($request->has('new_password') && $request->new_password != null) {
                $user->password = Hash::make($request->new_password);
            }
            $user->status = ($request->status == "on") ? User::STATUS_ACTIVE : User::STATUS_DISABLE;
            $user->save();

            $client->company_name = $validatedData['company_name'];
            $client->website = $request->website;
            $client->address = $request->address;
            $client->city = $request->city;
            $client->state = $request->state;
            $client->postal_code = $request->postal_code;
            if ($client->save()) {
                if ($request->client_services !== null) {
                    $existingServices = [];
                    foreach ($client->services as $value) {
                        $existingServices[] = $value->pivot->id;
                    }

                    $comingServices = [];
                    foreach ($request->client_services as $value) {
                        $comingServices [] = $value['client_service_table_id'];
                    }

                    $ServicesToBeRemoved = array_diff($existingServices, $comingServices);

                    // If there are Spare parts to removed from product.
                    if (!empty($ServicesToBeRemoved)) {
                        ClientService::whereIn('id', $ServicesToBeRemoved)->delete();
                    }

                    foreach ($request->client_services as $key => $service) {
                        if ($service['client_service_table_id'] == null) {
                            ClientService::create([
                                'client_id' => $client->id,
                                'service_id' => $service['service_id'],
                                'start_date' => $service['start_date']
                            ]);
                        }

                        if (count($client->services) > 0) {
                            ClientService::where('id', $service['client_service_table_id'])->update([
                                'service_id' => $service['service_id'],
                                'start_date' => $service['start_date']
                            ]);
                        }
                    }
                }

                Session::flash('successMessage', 'Client details has been update successfully!');
                return redirect()->route('admin.client.index');
            }
        }
        return redirect()->back()
            ->withInput()->withErrors('Failed to update, Try again!');
    }

    public function destroy(Client $client)
    {
        //
    }
}
