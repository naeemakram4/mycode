<div class="row g-6 g-xl-9">
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Graph-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">Overview</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Label-->
                    <label class="col-lg-4 fs-5 fw-bold">Project Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <p class="fs-6">{{ $project->name }}</p>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Label-->
                    <label class="col-lg-4 fs-5 fw-bold">Project Description</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <p class="fs-6">{{ $project->description }}</p>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Label-->
                    <label class="col-lg-4 fs-5 fw-bold">Client</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <p class="fs-6">
                            {{ $project->client->user->getFullName() }} <br>
                            <span class="fw-bold">Company :</span> {{ $project->client->company_name }}
                        </p>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Label-->
                    <label class="col-lg-4 fs-5 fw-bold">Date</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <p class="fs-6">
                            <span class="fw-bold">Start Date :</span>{{ $project->start_date }} <br>
                            <span class="fw-bold">Due Date :</span> {{ $project->due_date }}
                        </p>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Label-->
                    <label class="col-lg-4 fs-5 fw-bold">Created at</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <p class="fs-6">
                            {{ $project->created_at }} <br>
                            <span class="fw-bold">Last Updated at :</span> {{ $project->updated_at }}
                        </p>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Graph-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Summary-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">Tasks Summary</h3>
                    <div class="fs-6 fw-bold text-gray-400">{{ $project->tasks->where('status', '!=', \App\Models\Task::COMPLETED_STATUS)->where('due_date', '<', \Carbon\Carbon::today())->count() }} Overdue Tasks</div>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <a href="{{ route('admin.project.task', $project->id) }}" class="btn btn-light btn-sm">View Tasks</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9 pt-5">
                <!--begin::Wrapper-->
                <div class="d-flex flex-wrap">
                    <!--begin::Chart-->
                    <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                        <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                            <span class="fs-2qx fw-bolder">{{ $project->tasks->count() }}</span>
                            <span class="fs-6 fw-bold text-gray-400">Total Tasks</span>
                        </div>
                        <canvas id="project_overview_chart" style="display: block; box-sizing: border-box; height: 175px; width: 175px;" width="350" height="350"></canvas>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Labels-->
                    <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                            <div class="bullet bg-warning me-3"></div>
                            <div class="text-gray-400">{{ str_replace('_',' ',\App\Models\Task::YET_TO_STATUS) }}</div>
                            <div class="ms-auto fw-bolder text-gray-700">{{ $project->tasks->where('status', \App\Models\Task::YET_TO_STATUS)->count() }}</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                            <div class="bullet bg-primary me-3"></div>
                            <div class="text-gray-400">{{ str_replace('_',' ',\App\Models\Task::IN_PROGRESS_STATUS) }}</div>
                            <div class="ms-auto fw-bolder text-gray-700">{{ $project->tasks->where('status', \App\Models\Task::IN_PROGRESS_STATUS)->count() }}</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                            <div class="bullet bg-success me-3"></div>
                            <div class="text-gray-400">{{ str_replace('_',' ',\App\Models\Task::COMPLETED_STATUS) }}</div>
                            <div class="ms-auto fw-bolder text-gray-700">{{ $project->tasks->where('status', \App\Models\Task::COMPLETED_STATUS)->count() }}</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-bold align-items-center">
                            <div class="bullet bg-danger me-3"></div>
                            <div class="text-gray-400">Overdue</div>
                            <div class="ms-auto fw-bolder text-gray-700">{{ $project->tasks->where('status', '!=', \App\Models\Task::COMPLETED_STATUS)->where('due_date', '<', \Carbon\Carbon::today())->count() }}</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Wrapper-->
                @if($project->tasks->where('status', '!=', \App\Models\Task::COMPLETED_STATUS)->where('due_date', '<', \Carbon\Carbon::today())->count() > 0)
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-danger rounded border-danger border border-dashed p-6">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-bold">
                            <div class="fs-6 text-gray-700">
                                <span class="fs-4 fw-bold text-danger">Alert!</span> <br>
                                <p>There are {{ $project->tasks->where('status', '!=', \App\Models\Task::COMPLETED_STATUS)->where('due_date', '<', \Carbon\Carbon::today())->count() }} Overdue tasks, Please look into tasks section to proceed with the overdue tasks. </p>
                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
                @endif
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Summary-->
    </div>
    <!--end::Col-->
</div>
