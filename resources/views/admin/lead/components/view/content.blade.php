<!--begin::Content-->
<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
    <!--begin::Card-->
    <div class="card card-flush pt-3 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2 class="fw-bolder">Referral Details</h2>
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <a href="{{ route('admin.lead-management.create') }}" class="btn btn-light-primary">Add New Lead</a>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-3">
            <!--begin::Section-->
            <div class="mb-10">
                <!--begin::Title-->
                <h5 class="mb-4">Contact Details:</h5>
                <!--end::Title-->
                <!--begin::Details-->
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="flex-equal me-5">
                        <!--begin::Details-->
                        <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                            <!--begin::Row-->
                            <tbody>
                            <tr>
                                <td class="text-gray-400 min-w-175px w-175px">Contact Name:</td>
                                <td class="text-gray-800 min-w-200px">
                                    <span class="text-gray-800 text-hover-primary">{{ $lead->name }}</span>
                                </td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr>
                                <td class="text-gray-400">Email/ Number:</td>
                                <td class="text-gray-800">{{ $lead->email }} <br> {{ $lead->contact }}</td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr>
                                <td class="text-gray-400">Position:</td>
                                <td class="text-gray-800">{{ $lead->position }}</td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr>
                                <td class="text-gray-400">Company:</td>
                                <td class="text-gray-800">{{ $lead->company }}</td>
                            </tr>

                            <tr>
                                <td class="text-gray-400">Website:</td>
                                <td class="text-gray-800">
                                    <a href="//{{ $lead->website }}" target="_blank">{{ $lead->website }}</a>
                                </td>
                            </tr>
                            <!--end::Row-->
                            </tbody></table>
                        <!--end::Details-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="flex-equal">
                        <!--begin::Details-->
                        <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                            <!--begin::Row-->
                            <tbody><tr>
                                <td class="text-gray-400 min-w-175px w-175px">Address:</td>
                                <td class="text-gray-800 min-w-200px">
                                    <span class="text-gray-800 text-hover-primary"> {{ $lead->address }}</span>
                                </td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr>
                                <td class="text-gray-400">City/ State:</td>
                                <td class="text-gray-800">{{ $lead->city }}/ {{ $lead->state }}</td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr>
                                <td class="text-gray-400">Postal Code:</td>
                                <td class="text-gray-800">{{ $lead->postal_code }}</td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr>
                                <td class="text-gray-400">Note:</td>
                                <td class="text-warning">{{ $lead->note }}</td>
                            </tr>
                            <!--end::Row-->

                            </tbody>
                        </table>
                        <!--end::Details-->
                    </div>
                    <!--end::Row-->
                </div>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="mb-0">
                <!--begin::Title-->
                <h5 class="mb-4">SEO Audit:
                    @if($lead->is_seo_audit == 1)
                        <span class="badge badge-light-success me-2">Request</span>
                    @else
                        <span class="badge badge-light-danger me-2">Not Request</span>
                    @endif
                </h5>
                <!--end::Title-->

                @if($lead->is_seo_audit == 1)
                    <div class="d-flex flex-wrap py-5">
                        <!--begin::Row-->
                        <div class="flex-equal me-5">
                            <!--begin::Details-->
                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                <!--begin::Row-->
                                <tbody>
                                <tr>
                                    <td class="text-gray-400 min-w-175px w-175px">Audit Date:</td>
                                    <td class="text-gray-800 min-w-200px">
                                        <span class="text-gray-800 text-hover-primary">{{ \Carbon\Carbon::parse($lead->seo_audit_date)->format('m-d-Y')  }}</span>
                                    </td>
                                </tr>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <tr>
                                    <td class="text-gray-400">Audit Status:</td>
                                    <td class="text-gray-800">
                                        <span class="badge badge-light-info me-2">{{ ucfirst(str_replace('_', ' ', $lead->seo_audit_status)) }}</span>
                                    </td>
                                </tr>
                                <!--end::Row-->
                                </tbody>
                            </table>
                            <!--end::Details-->
                        </div>
                        <!--end::Row-->
                    </div>
                @endif

            </div>
            <!--end::Section-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->


    <!--begin::Card-->
    <div class="card card-flush pt-3 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Assigned Employees</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-2">
            <!--begin::Tab Content-->
            <div id="kt_referred_users_tab_content" class="tab-content">
                <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_1" class="tab-pane fade show active" role="tabpanel">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                            <!--begin::Thead-->
                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                <tr class="text-start text-gray-400">
                                    <th class="min-w-100px">Name</th>
                                    <th class="min-w-100px">Email/ Number</th>
                                    <th class="min-w-100px">Total Assigned Leads</th>
                                    <th class="min-w-100px">Status</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                            @foreach($lead->employees as $employee)
                                <tr>
                                <td>
                                    <a href="{{ route('admin.employee.show', $employee->id) }}" class="text-gray-600 text-hover-primary">{{ $employee->user->getFullName() }}</a>
                                </td>
                                <td class="text-gray-600">{{ $employee->user->email }} <br> {{ $employee->user->phone }}</td>
                                <td class="text-gray-600">{{ $employee->leadManagements->count() }}</td>
                                <td>
                                    @if($employee->user->status == \App\Models\User::STATUS_ACTIVE)
                                        <span class="badge badge-light-success">{{\App\Models\User::STATUS_ACTIVE}}</span>
                                    @else
                                        <span class="badge badge-light-danger">{{\App\Models\User::STATUS_DISABLE}}</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_2" class="tab-pane fade" role="tabpanel">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                            <!--begin::Thead-->
                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                            <tr class="text-start text-gray-400">
                                <th class="min-w-100px">Order ID</th>
                                <th class="min-w-100px">Amount</th>
                                <th class="min-w-100px">Status</th>
                                <th class="min-w-125px">Date</th>
                                <th class="w-100px">Invoice</th>
                            </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                </td>
                                <td class="text-danger">$-1.30</td>
                                <td>
                                    <span class="badge badge-light-warning">Pending</span>
                                </td>
                                <td>May 30, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                </td>
                                <td class="text-success">$204.00</td>
                                <td>
                                    <span class="badge badge-light-success">Approved</span>
                                </td>
                                <td>Apr 22, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                </td>
                                <td class="text-success">$31.00</td>
                                <td>
                                    <span class="badge badge-light-success">Approved</span>
                                </td>
                                <td>Feb 09, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                </td>
                                <td class="text-success">$52.00</td>
                                <td>
                                    <span class="badge badge-light-warning">Pending</span>
                                </td>
                                <td>Nov 01, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                </td>
                                <td class="text-danger">$-0.80</td>
                                <td>
                                    <span class="badge badge-light-danger">Rejected</span>
                                </td>
                                <td>Jan 04, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_3" class="tab-pane fade" role="tabpanel">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                            <!--begin::Thead-->
                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                            <tr class="text-start text-gray-400">
                                <th class="min-w-100px">Order ID</th>
                                <th class="min-w-100px">Amount</th>
                                <th class="min-w-100px">Status</th>
                                <th class="min-w-125px">Date</th>
                                <th class="w-100px">Invoice</th>
                            </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                </td>
                                <td class="text-success">$31.00</td>
                                <td>
                                    <span class="badge badge-light-warning">Pending</span>
                                </td>
                                <td>Feb 09, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                </td>
                                <td class="text-success">$52.00</td>
                                <td>
                                    <span class="badge badge-light-success">Approved</span>
                                </td>
                                <td>Nov 01, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                </td>
                                <td class="text-danger">$-0.80</td>
                                <td>
                                    <span class="badge badge-light-success">Approved</span>
                                </td>
                                <td>Jan 04, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                </td>
                                <td class="text-success">$5.00</td>
                                <td>
                                    <span class="badge badge-light-danger">Rejected</span>
                                </td>
                                <td>Sep 15, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                </td>
                                <td class="text-success">$38.00</td>
                                <td>
                                    <span class="badge badge-light-danger">Rejected</span>
                                </td>
                                <td>Nov 01, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_4" class="tab-pane fade" role="tabpanel">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                            <!--begin::Thead-->
                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                            <tr class="text-start text-gray-400">
                                <th class="min-w-100px">Order ID</th>
                                <th class="min-w-100px">Amount</th>
                                <th class="min-w-100px">Status</th>
                                <th class="min-w-125px">Date</th>
                                <th class="w-100px">Invoice</th>
                            </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                </td>
                                <td class="text-success">$38.00</td>
                                <td>
                                    <span class="badge badge-light-info">In progress</span>
                                </td>
                                <td>Nov 01, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                </td>
                                <td class="text-danger">$-2.60</td>
                                <td>
                                    <span class="badge badge-light-danger">Rejected</span>
                                </td>
                                <td>Oct 24, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                </td>
                                <td class="text-success">$38.00</td>
                                <td>
                                    <span class="badge badge-light-warning">Pending</span>
                                </td>
                                <td>Nov 01, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                </td>
                                <td class="text-danger">$-2.60</td>
                                <td>
                                    <span class="badge badge-light-info">In progress</span>
                                </td>
                                <td>Oct 24, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                </td>
                                <td class="text-success">$31.00</td>
                                <td>
                                    <span class="badge badge-light-warning">Pending</span>
                                </td>
                                <td>Feb 09, 2020</td>
                                <td class="">
                                    <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                </td>
                            </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Tab panel-->
            </div>
            <!--end::Tab Content-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Content-->
