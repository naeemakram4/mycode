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

class ClientController extends Controller
{
    public function index()
    {
        $pageTitle = 'Clients';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add Client',
            'route' => route('admin.client.create')
        ];

        $clients = Client::with('user')->latest()->get();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'clients' => $clients
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
        //
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
