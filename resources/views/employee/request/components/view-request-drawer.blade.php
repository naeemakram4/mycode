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
            <h5 class="card-title fw-bold">Request Details</h5>
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
            <!--begin::Tab content-->
            <div class="tab-content" id="">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade active show" id="kt_contact_view_general" role="tabpanel">
                    <!--begin::Additional details-->
                    <div class="d-flex flex-column gap-5 mt-3">
                        <div class="d-flex flex-stack gap-1">
                            <div class="d-flex flex-column">
                                <div class="fw-bolder text-muted">Request Type</div>
                                <div class="fw-bolder fs-5">
                                    <span class="badge badge-light-dark" id="drawerRequestType"></span>
                                </div>
                            </div>
                            <div class="ms-5">
                                <div class="fw-bolder text-muted">Status</div>
                                <div class="fw-bolder fs-5">
                                    <span class="badge badge-light-primary" id="drawerRequestStatus"></span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Ticket ID</div>
                            <div class="fw-bold fs-6" id="drawerRequestTicketID"></div>
                        </div>

                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Created At</div>
                            <div class="fw-bold fs-6" id="drawerRequestDate"></div>
                        </div>

                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Client</div>
                            <div class="fw-bold fs-6">
                                <span id="drawerRequestClientName"></span> <br>
                                <span id="drawerRequestClientEmail"></span>
                            </div>
                        </div>
                        <div class="separator my-5"></div>


                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Subject</div>
                            <div class="fw-bolder fs-5" id="drawerRequestSubject"></div>
                        </div>

                        <div class="d-flex flex-column gap-1">
                            <div class="fw-bolder text-muted">Description</div>
                            <p id="drawerRequestDescription"></p>
                        </div>
                    </div>
                    <!--end::Additional details-->
                </div>
                <!--end:::Tab pane-->
                <div class="separator my-10"></div>
                <div class="d-flex flex-column gap-1">
                    <div class="fw-bolder text-muted">Attachments</div>
                    <p class="text-danger">No attachment found!</p>
                </div>
            </div>
            <!--end::Tab content-->
        </div>
        <!--end::Card body-->
    </div>
</div>
<!--end::View component-->
