<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RequestType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ClientRequestController extends Controller
{
    public function index(Request $request)
    {
        $pageTitle = 'Requests';
        $breadcrumbs = [['text' => $pageTitle]];

        if ($request->ajax()) {
            $data = \App\Models\Request::latest();

            return Datatables::eloquent($data)
                ->editColumn('id', function ($data) {
                    return '<a href="javascript:void(0);" id="kt_drawer_example_dismiss_button">' . $data->id . '</a>';
                })
                ->addColumn('client', function ($data) {
                    return $data->client->user->getFullName();
                })
                ->addColumn('employee', function ($data) {
                    return ($data->employee != null) ? $data->employee->user->getFullName() .'</br>'. $data->employee->user->email : 'Admin';
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
                ->rawColumns(['id', 'ticket_id', 'client', 'employee', 'subject', 'request_type', 'status', 'created_at'])
                ->make(true);
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'requestTypes' => RequestType::get(),
            'status' => \App\Models\Request::getAllRequestStatus()
        ];

        return view('admin.request.index', $viewParams);
    }
}
