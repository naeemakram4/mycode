<!--begin::Sidebar-->
<div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
    <!--begin::Contacts-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header pt-7" id="kt_chat_contacts_header">
            <h3>Task Details</h3>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5" id="kt_chat_contacts_body">
            <!--begin::Profile-->
            <div class="d-flex flex-row justify-content-between gap-7 align-items-center">
                <div class="d-flex flex-row gap-2">
                    <div>
                        <div class="fw-bolder text-muted">Priority</div>
                        <div class="fw-bolder fs-5">
                            <span class="badge badge-light-primary" >{{ $task->priority }}</span>
                        </div>
                    </div>

                    <div class="ms-5">
                        <div class="fw-bolder text-muted">Status</div>
                        <div class="fw-bolder fs-5">
                            <span class="badge badge-light-dark">{{ str_replace('_', ' ', $task->status) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Profile-->

            <!--begin::Additional details-->
            <div class="d-flex flex-column gap-5 mt-7">
                <div class="d-flex flex-column gap-1">
                    <div class="fw-bolder text-muted">Subject</div>
                    <div class="fw-bolder fs-5">{{ $task->subject }}</div>
                </div>
                <!--begin::City-->
                <div class="d-flex flex-column gap-1">
                    <div class="fw-bolder text-muted">Service</div>
                    <div class="fw-bolder fs-5">{{ $task->service->label }}</div>
                </div>
                <!--end::City-->
                <!--begin::Country-->
                <div class="d-flex flex-column gap-1">
                    <div class="fw-bolder text-muted">Created at</div>
                    <div class="fw-bolder fs-5">{{ \Carbon\Carbon::parse($task->created_at)->format('m-d-Y') }}</div>
                </div>

                <div class="d-flex flex-column gap-1">
                    <div class="fw-bolder text-muted">Due Date</div>
                    <div class="fw-bolder fs-5" id="drawerDueDate">{{ \Carbon\Carbon::parse($task->due_date)->format('m-d-Y') }}</div>
                </div>
                <!--end::Country-->
                <!--begin::Notes-->
                <div class="d-flex flex-column gap-1">
                    <div class="fw-bolder text-muted">Description</div>
                    <p id="drawerDescription">{{ $task->description }}</p>
                </div>

            </div>
            <!--end::Additional details-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Contacts-->
</div>
<!--end::Sidebar-->
