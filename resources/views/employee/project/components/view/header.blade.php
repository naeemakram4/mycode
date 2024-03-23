<!--begin::Details-->
<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
    <!--begin::Image-->
    <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
        @if($project->logo)
            <img class="mw-50px mw-lg-75px" src="{{ asset('storage/'. $project->logo) }}" alt="image">
        @else
            <img class="mw-50px mw-lg-75px" src="{{ asset('assets/media/logos/avatar.png') }}" alt="image">
        @endif
    </div>
    <!--end::Image-->
    <!--begin::Wrapper-->
    <div class="flex-grow-1">
        <!--begin::Head-->
        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
            <!--begin::Details-->
            <div class="d-flex flex-column">
                <!--begin::Status-->
                <div class="d-flex align-items-center mb-1">
                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">{{ $project->name }}</a>

                    @if($project->status == \App\Models\Project::COMPLETED_STATUS)
                        <span class="badge badge-light-success me-auto">{{ ucfirst($project->status) }}</span>
                    @elseif($project->status == \App\Models\Project::ACTIVE_STATUS)
                        <span class="badge badge-light-primary me-auto">{{ ucfirst($project->status) }}</span>
                    @elseif($project->status == \App\Models\Project::INACTIVE_STATUS)
                        <span class="badge badge-light-danger me-auto">{{ ucfirst($project->status) }}</span>
                    @elseif($project->status == \App\Models\Project::PENDING_STATUS)
                        <span class="badge badge-light-warning me-auto">{{ ucfirst($project->status) }}</span>
                    @elseif($project->status == \App\Models\Project::TO_DO_STATUS)
                        <span class="badge badge-light-info me-auto">{{ ucfirst($project->status) }}</span>
                    @endif
                </div>
                <!--end::Status-->
                <!--begin::Description-->
                <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">{{ $project->description }}</div>
                <!--end::Description-->
            </div>
            <!--end::Details-->
            <!--begin::Actions-->
            <div class="d-flex mb-4">
                <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Task</a>
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="bi bi-three-dots fs-3"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a task name for future usage and reference" aria-label="Specify a task name for future usage and reference"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                            <!--end::Input-->
                                            <!--end::Label-->
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Head-->
        <!--begin::Info-->
        <div class="d-flex flex-wrap justify-content-start">
            <!--begin::Stats-->
            <div class="d-flex flex-wrap">
                <!--begin::Stat-->
                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                    <!--begin::Number-->
                    <div class="d-flex align-items-center">
                        <div class="fs-4 fw-bolder">{{ \Carbon\Carbon::parse($project->start_date)->format('d M, Y') }}</div>
                    </div>
                    <!--end::Number-->
                    <!--begin::Label-->
                    <div class="fw-bold fs-6 text-gray-400">Start Date</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
                <!--begin::Stat-->
                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                    <!--begin::Number-->
                    <div class="d-flex align-items-center">
                        <div class="fs-4 fw-bolder">{{ \Carbon\Carbon::parse($project->due_date)->format('d M, Y') }}</div>
                    </div>
                    <!--end::Number-->
                    <!--begin::Label-->
                    <div class="fw-bold fs-6 text-gray-400">Due Date</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
                <!--begin::Stat-->
                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                    <!--begin::Number-->
                    <div class="d-flex align-items-center">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                        <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
                                <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="fs-4 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="75">75</div>
                    </div>
                    <!--end::Number-->
                    <!--begin::Label-->
                    <div class="fw-bold fs-6 text-gray-400">Open Tasks</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
            </div>
            <!--end::Stats-->
            <!--begin::Users-->
            <div class="symbol-group symbol-hover mb-3">
{{--                @foreach($project->employees as $employee)--}}
{{--                    <!--begin::User-->--}}
{{--                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="{{ $employee->user->getFullName() }}">--}}
{{--                        <span class="symbol-label bg-{{ config('houmanity.settings.symbol_label_colors')[$employee->user->getNameFirstLetter()] }} text-inverse-warning fw-bolder">{{ $employee->user->getNameFirstLetter() }}</span>--}}
{{--                    </div>--}}
{{--                    <!--begin::User-->--}}
{{--                @endforeach--}}
            </div>
            <!--end::Users-->
        </div>
        <!--end::Info-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Details-->
