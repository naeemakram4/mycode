<!--begin::Navs-->
<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (request()->url() == route('admin.report.project')) ? 'active' : '' }}"
           href="{{ route('admin.report.project') }}">
            Project
        </a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (request()->url() == route('admin.report.task')) ? 'active' : '' }}"
           href="{{ route('admin.report.task') }}">
            Task
        </a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (request()->url() == route('admin.report.invoice')) ? 'active' : '' }}"
           href="{{ route('admin.report.invoice') }}">
            Invoice
        </a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (request()->url() == route('admin.report.lead')) ? 'active' : '' }}"
           href="{{ route('admin.report.lead') }}">
            Lead
        </a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (request()->url() == route('admin.report.customer')) ? 'active' : '' }}"
           href="{{ route('admin.report.customer') }}">
            Customer
        </a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (request()->url() == route('admin.report.proposal')) ? 'active' : '' }}"
           href="{{ route('admin.report.proposal') }}">
            Proposal
        </a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (request()->url() == route('admin.report.followup')) ? 'active' : '' }}"
           href="{{ route('admin.report.followup') }}">
            Followup
        </a>
    </li>
    <!--end::Nav item-->

</ul>
<!--begin::Navs-->
