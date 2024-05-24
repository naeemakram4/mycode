<!--begin::Col-->
<div class="col-md-4 col-lg-12 col-xl-4">
    <!--begin::Col header-->
    <div class="mb-9">
        <div class="d-flex flex-stack">
            <div class="fw-bolder fs-4">{{ str_replace('_',' ', \App\Models\Task::IN_PROGRESS_STATUS) }}
                <span class="fs-6 text-gray-400 ms-2">{{ $project->tasks->filter(function($task) { return $task->status == \App\Models\Task::IN_PROGRESS_STATUS; })->count() }}</span></div>
            <!--begin::Menu-->
            <div>
                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                            </g>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--begin::Menu 1-->
{{--                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed670a7ac">--}}
{{--                    <!--begin::Header-->--}}
{{--                    <div class="px-7 py-5">--}}
{{--                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>--}}
{{--                    </div>--}}
{{--                    <!--end::Header-->--}}
{{--                    <!--begin::Menu separator-->--}}
{{--                    <div class="separator border-gray-200"></div>--}}
{{--                    <!--end::Menu separator-->--}}
{{--                    <!--begin::Form-->--}}
{{--                    <div class="px-7 py-5">--}}
{{--                        <!--begin::Input group-->--}}
{{--                        <div class="mb-10">--}}
{{--                            <!--begin::Label-->--}}
{{--                            <label class="form-label fw-bold">Status:</label>--}}
{{--                            <!--end::Label-->--}}
{{--                            <!--begin::Input-->--}}
{{--                            <div>--}}
{{--                                <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed670a7ac" data-allow-clear="true" data-select2-id="select2-data-16-5olj" tabindex="-1" aria-hidden="true">--}}
{{--                                    <option data-select2-id="select2-data-18-7dff"></option>--}}
{{--                                    <option value="1">Approved</option>--}}
{{--                                    <option value="2">Pending</option>--}}
{{--                                    <option value="2">In Process</option>--}}
{{--                                    <option value="2">Rejected</option>--}}
{{--                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-bgxw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-5tq3-container" aria-controls="select2-5tq3-container"><span class="select2-selection__rendered" id="select2-5tq3-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                            </div>--}}
{{--                            <!--end::Input-->--}}
{{--                        </div>--}}
{{--                        <!--end::Input group-->--}}
{{--                        <!--begin::Input group-->--}}
{{--                        <div class="mb-10">--}}
{{--                            <!--begin::Label-->--}}
{{--                            <label class="form-label fw-bold">Member Type:</label>--}}
{{--                            <!--end::Label-->--}}
{{--                            <!--begin::Options-->--}}
{{--                            <div class="d-flex">--}}
{{--                                <!--begin::Options-->--}}
{{--                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="1">--}}
{{--                                    <span class="form-check-label">Author</span>--}}
{{--                                </label>--}}
{{--                                <!--end::Options-->--}}
{{--                                <!--begin::Options-->--}}
{{--                                <label class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">--}}
{{--                                    <span class="form-check-label">Customer</span>--}}
{{--                                </label>--}}
{{--                                <!--end::Options-->--}}
{{--                            </div>--}}
{{--                            <!--end::Options-->--}}
{{--                        </div>--}}
{{--                        <!--end::Input group-->--}}
{{--                        <!--begin::Input group-->--}}
{{--                        <div class="mb-10">--}}
{{--                            <!--begin::Label-->--}}
{{--                            <label class="form-label fw-bold">Notifications:</label>--}}
{{--                            <!--end::Label-->--}}
{{--                            <!--begin::Switch-->--}}
{{--                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">--}}
{{--                                <label class="form-check-label">Enabled</label>--}}
{{--                            </div>--}}
{{--                            <!--end::Switch-->--}}
{{--                        </div>--}}
{{--                        <!--end::Input group-->--}}
{{--                        <!--begin::Actions-->--}}
{{--                        <div class="d-flex justify-content-end">--}}
{{--                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>--}}
{{--                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>--}}
{{--                        </div>--}}
{{--                        <!--end::Actions-->--}}
{{--                    </div>--}}
{{--                    <!--end::Form-->--}}
{{--                </div>--}}
                <!--end::Menu 1-->
            </div>
            <!--end::Menu-->
        </div>
        <div class="h-3px w-100 bg-primary"></div>
    </div>
    <!--end::Col header-->
    @foreach($project->tasks->filter(function ($item) { return $item->status == \App\Models\Task::IN_PROGRESS_STATUS;}) as $task)
        <!--begin::Card-->
        <div class="card mb-6 mb-xl-9">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Header-->
                <div class="d-flex flex-stack mb-3">
                    <!--begin::Badge-->
                    <div class="badge badge-light">{{ $task->service->label }}</div>
                    <!--end::Badge-->
                    <!--begin::Menu-->
                    <div>
                        <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="{{ route('admin.task.edit', $task->id) }}" id="taskSettings" data-id="{{ $task->id }}" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            {{--                            <!--begin::Menu item-->--}}
                            {{--                            <div class="menu-item px-3 my-1">--}}
                            {{--                                <a href="#" class="menu-link px-3">Delete</a>--}}
                            {{--                            </div>--}}
                            {{--                            <!--end::Menu item-->--}}
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Header-->
                <!--begin::Title-->
                <div class="mb-2">
                    <a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">{{ $task->subject }}</a>
                </div>
                <!--end::Title-->
                <!--begin::Content-->
                <div class="fs-6 fw-bold text-gray-600 mb-5">{{ $task->description }}</div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-stack flex-wrapr">
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover my-1">
                        @foreach($task->employees as $employee)
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="{{ $employee->user->getFullName() }}">
                                <span class="symbol-label bg-{{ config('houmanity.settings.symbol_label_colors')[$employee->user->getNameFirstLetter()] }} text-inverse-warning fw-bolder">{{ $employee->user->getNameFirstLetter() }}</span>
                            </div>
                        @endforeach
                    </div>
                    <!--end::Users-->
                    <!--begin::Stats-->
                    <div class="d-flex my-1">
                        <!--begin::Stat-->
                        <div class="border border-dashed border-gray-300 rounded py-2 px-3">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="black"></path>
                                                    <path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="black"></path>
                                                </svg>
                                            </span>
                            <!--end::Svg Icon-->
                            <span class="ms-1 fs-7 fw-bolder text-gray-600">0</span>
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black"></path>
                                                    <rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
                                                    <rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                            <!--end::Svg Icon-->
                            <span class="ms-1 fs-7 fw-bolder text-gray-600">0</span>
                        </div>
                        <!--end::Stat-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    @endforeach
</div>
<!--end::Col-->
