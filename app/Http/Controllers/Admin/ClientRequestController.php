<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use App\Models\RequestType;
use App\Traits\FileHandling;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class ClientRequestController extends Controller
{
    use FileHandling;
    public function index(Request $request)
    {
        $pageTitle = 'Requests';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'New Request',
            'route' => route('admin.request.create'),
        ];

        if ($request->ajax()) {
            $data = \App\Models\Request::latest();

            return Datatables::eloquent($data)
                ->addColumn('client', function ($data) {
                    return $data->client->user->getFullName();
                })
                ->addColumn('employee', function ($data) {
                    return ($data->employee != null) ? $data->employee->user->getFullName() . '</br>' . $data->employee->user->email : 'Admin';
                })
                ->editColumn('created_at', function ($data) {
                    return Carbon::parse($data->created_at)->format('m-d-Y');
                })
                ->addColumn('request_type', function ($data) {
                    return '<span class="badge badge-light-dark fw-bolder me-auto px-4 py-3">' . $data->requestType->label . '</span>';
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
                ->addColumn('action', function ($data) {
                    return '<a href="' . route('admin.request.edit', $data->id) . '" class="btn btn-sm btn-primary me-3">Update</a>';
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('date_range') != '') {
                        $dates = explode("-", $request->get('date_range'));
                        $dateStart = date('Y-m-d', strtotime($dates[0]));
                        $dateEnd = date('Y-m-d', strtotime($dates[1]));
                        $instance->whereBetween('created_at', [$dateStart . " 00:00:00", $dateEnd . " 23:59:59"]);
                    }

                    if ($request->get('request_type') != '') {
                        $instance->where('request_type_id', $request->get('request_type'));
                    }

                    if ($request->get('status') == \App\Models\Request::REQUEST_APPROVED_STATUS
                        || $request->get('status') == \App\Models\Request::REQUEST_REJECTED_STATUS
                        || $request->get('status') == \App\Models\Request::REQUEST_PENDING_STATUS) {
                        $instance->where('status', $request->get('status'));
                    }
                })
                ->rawColumns(['id', 'ticket_id', 'client', 'employee', 'subject', 'request_type', 'status', 'created_at', 'action'])
                ->make(true);
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'requestTypes' => RequestType::get(),
            'status' => \App\Models\Request::getAllRequestStatus()
        ];

        return view('admin.request.index', $viewParams);
    }

    public function create()
    {
        $pageTitle = 'New Request';
        $breadcrumbs = [['text' => 'Requests', 'url' => '/admin/request'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'requestTypes' => RequestType::get(),
            'clients' => Client::get(),
            'employees' => Employee::get()
        ];

        return view('admin.request.create', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'request_client' => 'required',
            'request_type' => 'required',
            'request_subject' => 'required',
            'request_description' => 'nullable',
            'assignee_employee' => 'nullable'
        ]);

        if ($request->file('request_file')) {
            // Uploading request file/image
            $requestFile = $this->uploadObject(config('houmanity.filehandling.storage.requests'), $request->file('request_file'));
        }

        //Generating Ticket ID
        $totalRequests = \App\Models\Request::get()->count();
        $totalRequests = $totalRequests + 1;
        $generateTicketId = date('ymds') . "-" . str_pad(strval($totalRequests), 5, '0', STR_PAD_LEFT);

        // Creating new record
        $clientRequest = new \App\Models\Request();
        $clientRequest->ticket_id = $generateTicketId;
        $clientRequest->client()->associate($validatedData['request_client']);
        $clientRequest->employee()->associate($validatedData['assignee_employee']);
        $clientRequest->requestType()->associate($validatedData['request_type']);
        $clientRequest->subject = $validatedData['request_subject'];
        $clientRequest->file = $requestFile ?? null;
        $clientRequest->description = $validatedData['request_description'];

        if ($clientRequest->save()) {
//            event(new RequestGeneratedEvent());

            Session::flash('successMessage', 'A new request has been generated!');
            return redirect()->route('admin.request.index');
        }

        return redirect()->back()
            ->withErrors('Try again, Failed to generate new request!');
    }

    public function edit($id)
    {
        $pageTitle = 'Update Request';
        $breadcrumbs = [['text' => 'Requests', 'url' => '/admin/request'], ['text' => $pageTitle]];

        $request = \App\Models\Request::whereId($id)->first();

        if ($request) {
            $viewParams = [
                'pageTitle' => $pageTitle,
                'breadcrumbs' => $breadcrumbs,
                'request' => $request,
                'employees' => Employee::get()
            ];

            return view('admin.request.edit', $viewParams);
        }

        return redirect()->back()
            ->withErrors('Invalid data provided, Try again!');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'request_subject' => 'required',
        ]);

        $clientRequest = \App\Models\Request::whereId($id)->first();
        if ($clientRequest) {
            $clientRequest->subject = $validatedData['request_subject'];
            $clientRequest->description = $request->request_description;
            $clientRequest->status = $request->status;
            $clientRequest->employee()->associate($request->update_employee);

            if ($clientRequest->save()) {
                Session::flash('successMessage', 'Request has been updated successsfully!');
                return redirect()->back();
            }
        }

        return redirect()->back()
            ->withErrors('Invalid data, Try again!');
    }

    public function show(string $id)
    {
        $request = \App\Models\Request::with('requestType', 'employee.user')
            ->whereId($id)
            ->first();

        if ($request) {
            return response()->json($request);
        }
        return response()->json([
            'error' => 'Invalid request'
        ], 404);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'request_status' => 'required'
        ]);

        $clientRequest = \App\Models\Request::whereId($id)->first();

        if ($clientRequest) {
            $clientRequest->update([
                'status' => $request->request_status
            ]);

            Session::flash('successMessage', 'Request status has been updated successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Invalid data!');
    }
}
