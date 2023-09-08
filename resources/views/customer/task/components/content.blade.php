<!--begin::Content-->
<div class="col-xl-6">
    @if(isset($task))
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
            <!--begin::Card header-->
            <div class="card-header pt-7" id="kt_chat_contacts_header">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                    <span class="svg-icon svg-icon-1 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black"></path>
                            <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <h2>{{ $task->subject }}</h2>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar gap-3">
                    <!--begin::Action menu-->
                    <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="10" y="10" width="4" height="4" rx="2" fill="black"></rect>
                                <rect x="17" y="10" width="4" height="4" rx="2" fill="black"></rect>
                                <rect x="3" y="10" width="4" height="4" rx="2" fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true" style="">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="javascript:void(0);" class="menu-link px-3">Edit</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="javascript:void(0);" class="menu-link px-3 text-danger" id="kt_contact_delete" data-kt-redirect="#">Delete</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Action menu-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-5">
                <!--begin::Profile-->
                <div class="d-flex flex-row justify-content-between gap-7 align-items-center">
                    <div class="d-flex flex-row gap-2">
                        <div>
                            <div class="fw-bolder text-muted">Priority</div>
                            <div class="fw-bolder fs-5">
                                <span class="badge
                                {{ ($task->priority == \App\Models\Task::LOW_PRIORITY) ? 'badge-light-primary' :
                                (($task->priority == \App\Models\Task::MEDIUM_PRIORITY) ? 'badge-light-warning' : 'badge-light-danger')   }}
                                ">{{ ucfirst($task->priority)  }}</span>
                            </div>
                        </div>

                        <div class="ms-5">
                            <div class="fw-bolder text-muted">Status</div>
                            <div class="fw-bolder fs-5">
                                <span class="badge
                                {{ ($task->status == \App\Models\Task::NOT_STARTED_STATUS) ? 'badge-light-danger' :
                                (($task->priority == \App\Models\Task::IN_PROGRESS_STATUS) ? 'badge-light-primary' : 'badge-light-success')   }}
                                ">{{ ucfirst(str_replace('_', ' ', $task->status))  }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <div class="">
                            <label class="form-label" for="">Update Status</label>
                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Update Status" data-hide-search="true">>
                                <option></option>
                                <option value="1">Not Started</option>
                                <option value="2">In Progress</option>
                                <option value="2">Completed</option>
                            </select>
                        </div>
                    </div>

                </div>
                <!--end::Profile-->
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-bold mt-6 mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_contact_view_general">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-4 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->General
                        </a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_task_sub_task">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen056.svg-->
                            <span class="svg-icon svg-icon-4 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Sub Tasks
                        </a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="tab-content" id="">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade active show" id="kt_contact_view_general" role="tabpanel">
                        <!--begin::Additional details-->
                        <div class="d-flex flex-column gap-5 mt-7">
                            <!--begin::Company name-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Group</div>
                                <div class="fw-bolder fs-5">{{ $task->task_group_id }}</div>
                            </div>
                            <!--end::Company name-->
                            <!--begin::City-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Service</div>
                                <div class="fw-bolder fs-5">{{ $task->service_id }}</div>
                            </div>
                            <!--end::City-->
                            <!--begin::Country-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Created By</div>
                                <div class="fw-bolder fs-5">---</div>
                            </div>

                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Date/ Due Date</div>
                                <div class="fw-bolder fs-5">{{ $task->start_date }} <br> {{ $task->due_date }}</div>
                            </div>
                            <!--end::Country-->
                            <!--begin::Notes-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Description</div>
                                <p>{{ $task->description }}</p>
                            </div>
                            <!--end::Notes-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Attachments</div>
                                <p class="text-danger">No attachment found!</p>
                            </div>

                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Comment</div>
                                <textarea class="form-control" rows="3"></textarea>
                                <button class="btn w-25 btn-sm btn-primary">Add Comment</button>
                            </div>
                        </div>
                        <!--end::Additional details-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_task_sub_task" role="tabpanel">
                        <!--begin::Timeline-->
                        <div class="timeline-label">
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-warning fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Content-->
                                <div class="timeline-content d-flex">
                                    <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                                    <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                    <a href="#" class="text-primary">#XF-2356</a>.</div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                    <a href="#" class="text-primary">#XF-2356</a>.</div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Timeline-->
                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end::Tab content-->
            </div>
            <!--end::Card body-->
        </div>
    @else
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
        <!--begin::Card body-->
        <div class="card-body p-0">
            <!--begin::Wrapper-->
            <div class="card-px text-center py-20 my-10">
                <!--begin::Title-->
                <h2 class="fs-2x fw-bolder">Task Management</h2>
                <!--end::Title-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Illustration-->
            <div class="text-center px-4">
                <img class="mw-100 mh-200px" alt="" src="{{ asset('assets/media/illustrations/sketchy-1/5.png') }}">
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Card body-->
    </div>
    @endif
</div>
<!--end::Content-->
