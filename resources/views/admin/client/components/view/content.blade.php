<div class="flex-lg-row-fluid ms-lg-15">
    <!--begin:::Tabs-->
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#request_tab">Requests</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#service_tab">Client Services</a>
        </li>
        <!--end:::Tab item-->
    </ul>
    <!--end:::Tabs-->
    <!--begin:::Tab content-->
    <div class="tab-content" id="myTabContent">
        <!--begin:::Tab pane-->
        <div class="tab-pane fade active show" id="request_tab" role="tabpanel">
            <!--begin::Tasks-->
            <div class="card card-flush mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h2 class="mb-1">Requests</h2>
                        <div class="fs-6 fw-bold text-muted">Total {{ count($client->requests) }} requests in backlog</div>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column">
                    @foreach($client->requests as $request)
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Details-->
                        <div class="fw-bold ms-5">
                            <a href="javascript:void(0);" class="fs-5 fw-bolder text-dark text-hover-primary">{{ $request->subject }}</a>
                            @if($request->status == \App\Models\Request::REQUEST_APPROVED_STATUS)
                                <div class="badge badge-lg badge-light-success d-inline">{{ $request->status }}</div>
                            @elseif($request->status == \App\Models\Request::REQUEST_PENDING_STATUS)
                                <div class="badge badge-lg badge-light-warning d-inline">{{ $request->status }}</div>
                            @elseif($request->status == \App\Models\Request::REQUEST_REJECTED_STATUS)
                                <div class="badge badge-lg badge-light-danger d-inline">{{ $request->status }}</div>
                            @endif
                            <!--begin::Info-->
                            <div class="fs-7 text-muted">Request type: {{ $request->requestType->label }}</div>
                            <div class="fs-7 text-muted">
                                Employee: {{ ($request->employee_id != '') ? $request->employee->user->getFullName() : '---' }}
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Task menu-->

                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Update Status</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <form action="" class="form px-7 py-5 fv-plugins-bootstrap5 fv-plugins-framework" data-kt-menu-id="kt-users-tasks-form">
                                @csrf
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid" name="request_status" data-kt-select2="true" data-placeholder="Select status" data-hide-search="true" tabindex="-1" aria-hidden="true">
                                        <option></option>
                                        @foreach(\App\Models\Request::getAllRequestStatus() as $status)
                                            <option value="{{ $status }}" {{ ($request->status == $status) ? 'selected' : '' }}>{{ $status }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                        <span class="indicator-label">Apply</span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                                <div></div></form>
                            <!--end::Form-->
                        </div>
                        <!--end::Task menu-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Item-->
                    @endforeach
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Tasks-->
        </div>
        <!--end:::Tab pane-->
        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="service_tab" role="tabpanel">
            <!--begin::Tasks-->
            <div class="card card-flush mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h2 class="mb-1">Services</h2>
                        <div class="fs-6 fw-bold text-muted">Total {{ count($client->services) }} services</div>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column">
                    @foreach($client->services as $service)
                        <!--begin::Item-->
                        <div class="d-flex align-items-center position-relative mb-7">
                            <!--begin::Label-->
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                            <!--end::Label-->
                            <!--begin::Details-->
                            <div class="fw-bold ms-5">
                                <span class="fs-5 fw-bolder text-dark">{{ $service->label }}</span>
                                <!--begin::Info-->
                                <div class="fs-7 text-muted">Start Date: {{ Carbon\Carbon::parse($service->pivot->start_date)->format('d-m-Y') }}</div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Item-->
                    @endforeach
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Tasks-->
        </div>
        <!--end:::Tab pane-->
    </div>
    <!--end:::Tab content-->
</div>
