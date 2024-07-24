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
                <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-sm btn-bg-light btn-active-color-primary me-3">Edit</a>
                <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Task</a>
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
                        <div class="fs-4 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="75">{{ $project->tasks->count() }}</div>
                    </div>
                    <!--end::Number-->
                    <!--begin::Label-->
                    <div class="fw-bold fs-6 text-gray-400">Total Tasks</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
            </div>
            <!--end::Stats-->
            <!--begin::Users-->
            <div class="symbol-group symbol-hover mb-3">
                @foreach($project->employees as $employee)
                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="{{ $employee->user->getFullName() }}">
                        <span class="symbol-label bg-{{ config('mycode.settings.symbol_label_colors')[$employee->user->getNameFirstLetter()] }} text-inverse-warning fw-bolder">{{ $employee->user->getNameFirstLetter() }}</span>
                    </div>
                    <!--begin::User-->
                @endforeach
            </div>
            <!--end::Users-->
        </div>
        <!--end::Info-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Details-->
