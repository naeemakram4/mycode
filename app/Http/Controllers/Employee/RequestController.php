<?php
declare(strict_types=1);

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        $pageTitle = 'Requests';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Generate New Request',
            'route' => route('employee.request.create'),
        ];

        if ($request->ajax()) {
            $data = \App\Models\Request::whereHas('client.employees', function ($builder) {
                return $builder->where('id', Auth::user()->employee->id);
            })->latest();

            return Datatables::eloquent($data)
                ->editColumn('id', function ($data) {
                    return '<a href="javascript:void(0);" id="kt_drawer_example_dismiss_button">' . $data->id . '</a>';
                })
                ->addColumn('client', function ($data) {
                    return $data->client->user->getFullName();
                })
                ->editColumn('created_at', function ($data) {
                    return Carbon::parse($data->created_at)->format('m-d-Y');
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == \App\Models\Request::REQUEST_APPROVED_STATUS) {
                        return '<span class="badge badge-light-success fw-bolder me-auto px-4 py-3">' . ucfirst($data->status) . '</span>';
                    } elseif ($data->status == \App\Models\Request::REQUEST_REJECTED_STATUS) {
                        return '<span class="badge badge-light-danger fw-bolder me-auto px-4 py-3">' . ucfirst($data->status) . '</span>';
                    } elseif ($data->status == \App\Models\Request::REQUEST_PENDING_STATUS) {
                        return '<span class="badge badge-light-warning fw-bolder me-auto px-4 py-3" >' . ucfirst($data->status) . ' </span>';
                    } else {
                        return '';
                    }
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('date_range') != '') {
                        $dates = explode("-", $request->get('date_range'));
                        $dateStart = date('Y-m-d', strtotime($dates[0]));
                        $dateEnd = date('Y-m-d', strtotime($dates[1]));
                        $instance->whereBetween('created_at', [$dateStart . " 00:00:00", $dateEnd . " 23:59:59"]);
                    }

                    if ($request->get('status') == \App\Models\Request::REQUEST_APPROVED_STATUS
                        || $request->get('status') == \App\Models\Request::REQUEST_REJECTED_STATUS
                        || $request->get('status') == \App\Models\Request::REQUEST_PENDING_STATUS) {
                        $instance->where('status', $request->get('status'));
                    }
                })
                ->rawColumns(['id', 'client', 'subject', 'status', 'created_at'])
                ->make(true);
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'status' => \App\Models\Request::getAllRequestStatus()
        ];

        return view('employee.request.index', $viewParams);
    }

    public function create()
    {
        $pageTitle = 'Generate New Request';
        $breadcrumbs = [['text' => 'Requests', 'url' => '/employee/request'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'clients' => Client::whereHas('employees', function($builder) { return $builder->where('id', Auth::user()->employee->id);})->get(),
        ];

        return view('employee.request.create', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required|string',
            'description' => 'nullable'
        ]);

        $clientRequest = new \App\Models\Request();
        $clientRequest->client()->associate(Auth::user()->client->id);
        $clientRequest->subject = $validatedData['subject'];
        $clientRequest->description = $validatedData['description'];

        if ($clientRequest->save()) {
            Session::flash('successMessage', 'A new request has been generated!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Try again, Failed to generate new request!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
