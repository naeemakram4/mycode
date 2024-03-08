<!--begin::Nav-->
<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ request()->url() == route('employee.project.show', $project->id) ? 'active' : '' }}" href="{{ route('employee.project.show', $project->id) }}">Overview</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ request()->url() == route('employee.project.task', $project->id) ? 'active' : '' }}" href="{{ route('employee.project.task', $project->id) }}">Tasks</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6" href="javascript:void(0);">Files</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6" href="javascript:void(0);">Activity</a>
    </li>
    <!--end::Nav item-->
</ul>
<!--end::Nav-->
