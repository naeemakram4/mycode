<!--begin::Stats-->
<div class="row g-6 g-xl-9">
    {{-- Project section --}}
    <div class="col-lg-6 col-xxl-4">
        <!--begin::Card-->
        <div class="card h-100">
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Heading-->
                <div class="fs-2hx fw-bolder">{{ count($projects) }}</div>
                <div class="fs-4 fw-bold text-gray-400 mb-7">Current Projects</div>
                <!--end::Heading-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-wrap">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                        <canvas id="kt_project_list_chart" style="display: block; box-sizing: border-box; height: 99.3833px; width: 99.3833px;" width="89" height="89"></canvas>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Labels-->
                    <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                        @foreach($chartLabelAndData as $key => $value)
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                            @if($key == \App\Models\Project::ACTIVE_STATUS)
                                <div class="bullet bg-primary me-3"></div>
                            @elseif($key == \App\Models\Project::COMPLETED_STATUS)
                                <div class="bullet bg-success me-3"></div>
                            @elseif($key == \App\Models\Project::TO_DO_STATUS)
                                <div class="bullet bg-info me-3"></div>
                            @endif
                            <div class="text-gray-400">{{ $key }}</div>
                            <div class="ms-auto fw-bolder text-gray-700">{{ $value }}</div>
                        </div>
                        <!--end::Label-->
                        @endforeach
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>

    {{-- Project Task section --}}
    <div class="col-lg-6 col-xxl-4">
        <!--begin::Budget-->
        <div class="card h-100">
            <div class="card-body p-9">
                <div class="fs-2hx fw-bolder">{{ count($tasks) }}</div>
                <div class="fs-4 fw-bold text-gray-400 mb-7">Total Tasks</div>
                <div class="fs-6 d-flex justify-content-between mb-4">
                    <div class="fw-bold">Yet to start</div>
                    <div class="d-flex fw-bolder">{{ count($tasks->where('status', \App\Models\Task::YET_TO_STATUS)) }}</div>
                </div>
                <div class="separator separator-dashed"></div>
                <div class="fs-6 d-flex justify-content-between my-4">
                    <div class="fw-bold">In Progress</div>
                    <div class="d-flex fw-bolder">{{ count($tasks->where('status', \App\Models\Task::IN_PROGRESS_STATUS)) }}</div>
                </div>
                <div class="separator separator-dashed"></div>
                <div class="fs-6 d-flex justify-content-between mt-4">
                    <div class="fw-bold">Completed</div>
                    <div class="d-flex fw-bolder">{{ count($tasks->where('status', \App\Models\Task::COMPLETED_STATUS)) }}</div>
                </div>
            </div>
        </div>
        <!--end::Budget-->
    </div>

</div>
<!--end::Stats-->
