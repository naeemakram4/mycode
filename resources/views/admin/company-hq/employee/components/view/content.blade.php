<div class="flex-lg-row-fluid ms-lg-15">
    <!--begin:::Tabs-->
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Overview</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_clients">Clients</a>
        </li>
        <!--end:::Tab item-->
    </ul>
    <!--end:::Tabs-->
    <!--begin:::Tab content-->
    <div class="tab-content" id="myTabContent">
        <!--begin:::Tab pane-->
        <div class="tab-pane fade active show" id="kt_user_view_overview_tab" role="tabpanel">
            <!--begin::Tasks-->
            <div class="card card-flush mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h2 class="mb-1">Employee's Tasks</h2>
                        <div class="fs-6 fw-bold text-muted">Total 25 tasks in backlog</div>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
                            <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="black"></path>
                                    <rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="black"></rect>
                                    <rect x="7" y="13" width="10" height="2" rx="1" fill="black"></rect>
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add Task</button>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Details-->
                        <div class="fw-bold ms-5">
                            <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Create FureStibe branding logo</a>
                            <!--begin::Info-->
                            <div class="fs-7 text-muted">Due in 1 day
                                <a href="#">Karina Clark</a></div>
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
                            <form class="form px-7 py-5 fv-plugins-bootstrap5 fv-plugins-framework" data-kt-menu-id="kt-users-tasks-form">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid select2-hidden-accessible" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true" data-select2-id="select2-data-10-ms3y" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-12-nrza"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="3">In Process</option>
                                        <option value="4">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-dsci" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-task_status-l4-container" aria-controls="select2-task_status-l4-container"><span class="select2-selection__rendered" id="select2-task_status-l4-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                        <span class="indicator-label">Apply</span>
                                        <span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Details-->
                        <div class="fw-bold ms-5">
                            <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Schedule a meeting with FireBear CTO John</a>
                            <!--begin::Info-->
                            <div class="fs-7 text-muted">Due in 3 days
                                <a href="#">Rober Doe</a></div>
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
                            <form class="form px-7 py-5 fv-plugins-bootstrap5 fv-plugins-framework" data-kt-menu-id="kt-users-tasks-form">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid select2-hidden-accessible" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true" data-select2-id="select2-data-13-dtwo" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-15-e76c"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="3">In Process</option>
                                        <option value="4">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-irra" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-task_status-4q-container" aria-controls="select2-task_status-4q-container"><span class="select2-selection__rendered" id="select2-task_status-4q-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                        <span class="indicator-label">Apply</span>
                                        <span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Details-->
                        <div class="fw-bold ms-5">
                            <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">9 Degree Project Estimation</a>
                            <!--begin::Info-->
                            <div class="fs-7 text-muted">Due in 1 week
                                <a href="#">Neil Owen</a></div>
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
                            <form class="form px-7 py-5 fv-plugins-bootstrap5 fv-plugins-framework" data-kt-menu-id="kt-users-tasks-form">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid select2-hidden-accessible" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true" data-select2-id="select2-data-16-m3cq" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-18-lrnx"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="3">In Process</option>
                                        <option value="4">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-5b7z" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-task_status-pk-container" aria-controls="select2-task_status-pk-container"><span class="select2-selection__rendered" id="select2-task_status-pk-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                        <span class="indicator-label">Apply</span>
                                        <span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Details-->
                        <div class="fw-bold ms-5">
                            <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Dashboard UI &amp; UX for Leafr CRM</a>
                            <!--begin::Info-->
                            <div class="fs-7 text-muted">Due in 1 week
                                <a href="#">Olivia Wild</a></div>
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
                            <form class="form px-7 py-5 fv-plugins-bootstrap5 fv-plugins-framework" data-kt-menu-id="kt-users-tasks-form">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid select2-hidden-accessible" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true" data-select2-id="select2-data-19-h0nq" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-21-2d2h"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="3">In Process</option>
                                        <option value="4">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-hoga" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-task_status-wt-container" aria-controls="select2-task_status-wt-container"><span class="select2-selection__rendered" id="select2-task_status-wt-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                        <span class="indicator-label">Apply</span>
                                        <span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Details-->
                        <div class="fw-bold ms-5">
                            <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
                            <!--begin::Info-->
                            <div class="fs-7 text-muted">Due in 2 weeks
                                <a href="#">Sean Bean</a></div>
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
                            <form class="form px-7 py-5 fv-plugins-bootstrap5 fv-plugins-framework" data-kt-menu-id="kt-users-tasks-form">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid select2-hidden-accessible" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true" data-select2-id="select2-data-22-pdwp" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-24-inzn"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="3">In Process</option>
                                        <option value="4">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-23-ih6m" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-task_status-0j-container" aria-controls="select2-task_status-0j-container"><span class="select2-selection__rendered" id="select2-task_status-0j-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                        <span class="indicator-label">Apply</span>
                                        <span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Tasks-->
        </div>
        <!--end:::Tab pane-->
        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="kt_user_view_clients" role="tabpanel">
            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Assigned Clients</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 pb-5">
                    <!--begin::Table-->
                    <div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed gy-5 dataTable no-footer">
                                <!--begin::Table head-->
                                <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                                <!--begin::Table row-->
                                <tr class="text-start text-muted text-uppercase gs-0">
                                    <th class="" rowspan="1" colspan="1">ID</th>
                                    <th class="min-w-100px" rowspan="1" colspan="1">Name</th>
                                    <th class="min-w-100px" rowspan="1" colspan="1">Company Name</th>
                                    <th class="min-w-100px" rowspan="1" colspan="1">Website</th>
                                    <th class="" rowspan="1" colspan="1">Status</th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fs-6 fw-bold text-gray-600">
                                <!--begin::Table row-->

                                @foreach($employee->clients as $client)
                                <!--end::Table row-->
                                    <tr>
                                        <td>
                                            <a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $client->id }}</a>
                                        </td>
                                        <td>{{ $client->user->first_name .' '. $client->user->last_name}}</td>
                                        <td>{{ $client->company_name }}</td>
                                        <td>{{ $client->website }}</td>
                                        <td>
                                            @if($client->user->status == \App\Models\User::STATUS_ACTIVE)
                                                <span class="badge badge-light-success">{{ \App\Models\User::STATUS_ACTIVE }}</span>
                                            @else
                                                <span class="badge badge-light-danger">{{ \App\Models\User::STATUS_DISABLE }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end:::Tab pane-->
    </div>
    <!--end:::Tab content-->
</div>
