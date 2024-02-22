<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use App\Models\LeadManagement;
use App\Models\LeadManagementType;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LeadManagementController extends Controller
{
    public function index()
    {
        $pageTitle = 'Lead Management';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Create New Lead',
            'route' => route('admin.lead-management.create')
        ];

        $leads = LeadManagement::latest()->get();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'leads' => $leads
        ];

        return view('admin.lead.index', $viewParams);
    }

    public function create()
    {
        $pageTitle = 'Create New Lead';
        $breadcrumbs = [['text' => 'Lead Management', 'url' => '/admin/lead-management'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'leadStatus' => LeadManagement::getAllStatus(),
            'seoAuditStatus' => LeadManagement::getAllSeoStatus(),
            'services' => Service::get(),
            'leadManagementTypes' => LeadManagementType::get(),
            'clients' => Client::get(),
            'employees' => Employee::get()
        ];

        return view('admin.lead.create', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'service' => 'required',
            'lead_type' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);

        $lead = new LeadManagement();
        $lead->service()->associate($validatedData['service']);
        $lead->leadManagementType()->associate($validatedData['lead_type']);
        $lead->lead_value = $request->lead_value;
        $lead->company = $request->company;
        $lead->position = $request->position;
        $lead->website = $request->website;
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->contact = $request->phone;
        $lead->address = $request->address;
        $lead->city = $request->city;
        $lead->state = $request->state;
        $lead->postal_code = $request->postal_code;
        $lead->status = $validatedData['status'];
        $lead->note = $request->note;

        $lead->is_seo_audit = ($request->is_seo_audit == 'on') ? 1 : 0;
        if ($request->is_seo_audit == 'on') {
            $lead->seo_audit_date = $request->seo_audit_date;
            $lead->seo_audit_status = $request->seo_audit_status;
        }

        if ($lead->save()) {
            $lead->employees()->sync($request->employees);

            Session::flash('successMessage', 'A new client has been create successfully!');
            return redirect()->route('admin.lead-management.index');
        }

        return redirect()->back()
            ->withInput()->withErrors('Failed to create new lead, Try again!');
    }

    public function show(LeadManagement $leadManagement)
    {
        //
    }

    public function edit(LeadManagement $leadManagement)
    {
        //
    }

    public function update(Request $request, LeadManagement $leadManagement)
    {
        //
    }

    public function destroy(LeadManagement $leadManagement)
    {
        //
    }
}
