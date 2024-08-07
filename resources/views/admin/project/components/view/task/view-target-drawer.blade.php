<!--begin::View component-->
<div
    id="kt_drawer_example_dismiss"
    class="bg-white"
    data-kt-drawer="true"
    data-kt-drawer-activate="true"
    data-kt-drawer-toggle="#kt_drawer_example_dismiss_button"
    data-kt-drawer-close="#kt_drawer_example_basic_close"
    data-kt-drawer-width="600px"
>

    <div class="card shadow-none rounded-0 w-100">
        <div class="card-header">
            <h5 class="card-title fw-bold">Task Details</h5>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close" data-kt-drawer-dismiss="true">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>

        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Profile-->
            <div class="d-flex flex-row justify-content-between gap-7 align-items-center">
                <div class="d-flex flex-row gap-2">
                    <div>
                        <div class="fw-bolder text-muted">Priority</div>
                        <div class="fw-bolder fs-5">
                            <span class="badge badge-light-primary" id="drawerPriority">High</span>
                        </div>
                    </div>

                    <div class="ms-5">
                        <div class="fw-bolder text-muted">Status</div>
                        <div class="fw-bolder fs-5">
                                <span class="badge badge-light-dark" id="drawerStatus">Yet To Start</span>
                        </div>
                    </div>
                </div>

                <form action="{{ route('admin.task.update.task.status') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="d-flex flex-column gap-2">
                        <div class="">
                            <label class="form-label" for="">Update Status</label>
                            <select class="form-select form-select-solid" name="drawer_task_status_update" id="drawerUpdateStatus" >
                                <option></option>
                                @foreach(\App\Models\Task::allTaskStatus() as $status)
                                    <option value="{{ $status}}"> {{ str_replace('_', ' ',$status)  }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="task_id" id="drawerTaskId">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </form>

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

            </ul>
            <!--end:::Tabs-->
            <!--begin::Tab content-->
            <div class="tab-content" id="">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade active show" id="kt_contact_view_general" role="tabpanel">
                    <!--begin::Additional details-->
                    <div class="d-flex flex-column gap-5 mt-7">
                        <!--begin::City-->
                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Service</div>
                            <div class="fw-bolder fs-5" id="drawerService"></div>
                        </div>
                        <!--end::City-->
                        <!--begin::Country-->
                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Created at</div>
                            <div class="fw-bolder fs-5" id="drawerCreatedBy">---</div>
                        </div>

                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Due Date</div>
                            <div class="fw-bolder fs-5" id="drawerDueDate">---</div>
                        </div>
                        <!--end::Country-->
                        <!--begin::Notes-->
                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Description</div>
                            <p id="drawerDescription">This is a dummy project's target description. This is a dummy project's target description. This is a dummy project's target description.</p>
                        </div>

                    </div>
                    <!--end::Additional details-->
                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end::Tab content-->
        </div>
        <!--end::Card body-->
    </div>
</div>
<!--end::View component-->
