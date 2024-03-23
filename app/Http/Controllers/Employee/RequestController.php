<?php
declare(strict_types=1);

namespace App\Http\Controllers\Employee;

use App\Events\RequestGeneratedEvent;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\RequestType;
use App\Traits\FileHandling;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class RequestController extends Controller
{
    use FileHandling;

    public function index(Request $request)
    {
        $pageTitle = 'Requests';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'New Request',
            'route' => route('employee.request.create'),
        ];

        if ($request->ajax()) {
            $data = \App\Models\Request::whereHas('client.employees', function ($builder) {
                return $builder->where('id', Auth::user()->employee->id);
            })->latest();

            return Datatables::eloquent($data)
                ->addColumn('client', function ($data) {
                    return $data->client->user->getFullName();
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
                ->rawColumns(['id', 'ticket_id', 'client', 'subject', 'request_type', 'status', 'created_at'])
                ->make(true);
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'requestTypes' => RequestType::get(),
            'status' => \App\Models\Request::getAllRequestStatus()
        ];

        return view('employee.request.index', $viewParams);
    }

    public function create()
    {
        $pageTitle = 'New Request';
        $breadcrumbs = [['text' => 'Requests', 'url' => '/employee/request'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'requestTypes' => RequestType::get(),
            'clients' => Client::whereHas('employees', function($builder) { return $builder->where('id', Auth::user()->employee->id);})->get(),
        ];

        return view('employee.request.create', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'request_client' => 'required',
            'request_type' => 'required',
            'request_subject' => 'required',
            'request_description' => 'nullable'
        ]);

        if ($request->file('request_file')) {
            // Uploading request file/image
            $requestFile = $this->uploadObject(config('houmanity.filehandling.storage.requests'), $request->file('request_file'));
        }

        //Generating Ticket ID
        $totalRequests = \App\Models\Request::get()->count();
        $totalRequests = $totalRequests + 1;
        $generateTicketId = date('ymds')."-".str_pad(strval($totalRequests),5,'0', STR_PAD_LEFT);

        // Creating new record
        $clientRequest = new \App\Models\Request();
        $clientRequest->ticket_id = $generateTicketId;
        $clientRequest->client()->associate($validatedData['request_client']);
        $clientRequest->requestType()->associate($validatedData['request_type']);
        $clientRequest->subject = $validatedData['request_subject'];
        $clientRequest->file = $requestFile ?? null;
        $clientRequest->description = $validatedData['request_description'];

        if ($clientRequest->save()) {
//            event(new RequestGeneratedEvent());

            Session::flash('successMessage', 'A new request has been generated!');
            return redirect()->route('employee.request.index');
        }

        return redirect()->back()
            ->withErrors('Try again, Failed to generate new request!');
    }

    public function show(string $id)
    {
        $request = \App\Models\Request::with('requestType', 'client.user')
            ->whereId($id)
            ->first();

        if ($request) {
            return response()->json($request);
        }
        return response()->json([
            'error' => 'Invalid request'
        ], 404);
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
