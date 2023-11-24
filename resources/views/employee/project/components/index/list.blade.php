<div class="d-flex flex-wrap flex-stack my-5">
    <!--begin::Heading-->
    <h2 class="fs-2 fw-bold my-2">{{ $pageTitle }}</h2>
    <!--end::Heading-->
</div>

<div class="row g-6 g-xl-9">
    @foreach($projects as $project)
        <div class="col-md-6 col-xl-4">
            <!--begin::Card-->
            <a href="{{ route('employee.project.show', $project->id) }}" class="card border-hover-primary">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-9">
                    <!--begin::Card Title-->
                    <div class="card-title m-0">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px w-50px bg-light">
                            <img src="{{ asset('assets/media/logos/favicon.png') }}" alt="image" class="p-3">
                        </div>
                        <!--end::Avatar-->
                    </div>
                    <!--end::Car Title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        @if($project->status == \App\Models\Project::COMPLETED_STATUS)
                            <span class="badge badge-light-success fw-bolder me-auto px-4 py-3">{{ ucfirst($project->status) }}</span>
                        @elseif($project->status == \App\Models\Project::ACTIVE_STATUS)
                            <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">{{ ucfirst($project->status) }}</span>
                        @elseif($project->status == \App\Models\Project::INACTIVE_STATUS)
                            <span class="badge badge-light-danger fw-bolder me-auto px-4 py-3">{{ ucfirst($project->status) }}</span>
                        @elseif($project->status == \App\Models\Project::PENDING_STATUS)
                            <span class="badge badge-light-warning fw-bolder me-auto px-4 py-3">{{ ucfirst($project->status) }}</span>
                        @elseif($project->status == \App\Models\Project::TO_DO_STATUS)
                            <span class="badge badge-light-info fw-bolder me-auto px-4 py-3">{{ ucfirst($project->status) }}</span>
                        @endif
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end:: Card header-->
                <!--begin:: Card body-->
                <div class="card-body p-9">
                    <!--begin::Name-->
                    <div class="fs-3 fw-bolder text-dark">{{ $project->name }}</div>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">{{ $project->description }}</p>
                    <!--end::Description-->
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap mb-5">
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                            <div class="fs-6 text-gray-800 fw-bolder">{{ $project->start_date }}</div>
                            <div class="fw-bold text-gray-400">Start Date</div>
                        </div>
                        <!--begin::Due-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                            <div class="fs-6 text-gray-800 fw-bolder">{{ $project->due_date }}</div>
                            <div class="fw-bold text-gray-400">Due Date</div>
                        </div>
                        <!--end::Due-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Progress-->
                    <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="" data-bs-original-title="This project 50% completed">
                        <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!--end::Progress-->
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover">
                        @foreach($project->employees as $employee)
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="{{ $employee->user->getFullName() }}">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bolder">{{ $employee->user->getNameFirstLetter() }}</span>
                        </div>
                        <!--begin::User-->
                        @endforeach
                    </div>
                    <!--end::Users-->
                </div>
                <!--end:: Card body-->
            </a>
            <!--end::Card-->
        </div>
    @endforeach
</div>
