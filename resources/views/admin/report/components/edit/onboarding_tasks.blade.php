<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">On Boarding Tasks</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Card Body-->
    <div class="card-body">
        <div class="row">
            @foreach ($vendors as $vendor)
                <div class="col-md-6 mt-5">
                    <div class="accordion" id="kt_accordion_1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="kt_accordion_1_header_1">
                                <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#vendor_{{ $vendor->VendorKey }}_accordion" aria-expanded="true"
                                    aria-controls="vendor_{{ $vendor->VendorKey }}_accordion">
                                    @if ($vendor->isAllTaskCompleted($account->AccountKey))
                                        <i class="fas fa-check-circle fa-2x me-5 text-primary"></i>
                                    @else
                                        <i class="fas fa-check-circle fa-2x me-5 text-muted"></i>
                                    @endif
                                    {{ $vendor->Name }}
                                </button>
                            </h2>
                            <div id="vendor_{{ $vendor->VendorKey }}_accordion" class="accordion-collapse collapse show"
                                aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
                                <div class="accordion-body">
                                    <div class="row mb-5">
                                        @forelse ($vendor->tasks as $key => $task)
                                            <div class="col-md-12 mb-4 task-box">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <b>
                                                            {{ $task->Name }}
                                                        </b>
                                                    </div>
                                                    <div class="col-4 text-end">
                                                        <input class="form-check-input" type="checkbox" disabled
                                                            {{ $task->isCompleted($account->AccountKey, $vendor->VendorKey) ? 'checked' : '' }}
                                                            id="vendor_{{ $vendor->VendorKey }}_task_{{ $task->TaskKey }}_checkbox">
                                                        <a data-bs-toggle="collapse"
                                                            href="#vendor_{{ $vendor->VendorKey }}_task_{{ $task->TaskKey }}"
                                                            role="button" class="ms-5" aria-expanded="false"
                                                            aria-controls="vendor_{{ $vendor->VendorKey }}_task_{{ $task->TaskKey }}">
                                                            <i class="bi bi-arrow-down"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="collapse mt-2"
                                                    id="vendor_{{ $vendor->VendorKey }}_task_{{ $task->TaskKey }}">
                                                    <div class="card card-body">
                                                        {{ $task->Comments }}
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-md-12">
                                                <div class="text-muted">
                                                    No Task Found
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--end::details View-->


<style>
    .task-box {
        background-color: #f3f6f9;
        padding: 1rem;
        border-radius: 1rem;
    }
</style>
