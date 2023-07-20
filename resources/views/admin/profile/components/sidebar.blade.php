<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
    <!--begin::Card-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Summary-->
            <!--begin::User Info-->
            <div class="d-flex flex-center flex-column py-5">
                <!--begin::Avatar-->
                <div class="symbol symbol-100px symbol-circle mb-7">
                    @php $image=URL::asset("settings/".Auth::user()->image); @endphp
                    @if (!blank(Auth::user()->image))
                        <img id="image" src="{{ $image }}" alt="avatar">
                    @else
                        <img src="{{ URL::asset('settings/top-menu-cooco-logo.png') }}" alt="avatar">
                    @endif
                </div>
                <!--end::Avatar-->
                <!--begin::Name-->
                <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ auth()->user()->name }}</a>
                <!--end::Name-->
                <!--begin::Position-->
                <div class="mb-9">
                    <!--begin::Badge-->
                    <div class="badge badge-lg badge-light-primary d-inline">Administrator</div>
                    <!--begin::Badge-->
                </div>
                <!--end::Position-->
            </div>
            <!--end::User Info-->
            <!--end::Summary-->
            <!--begin::Details toggle-->
            <div class="d-flex flex-stack fs-4 py-3">
                <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
                    <span class="ms-2 rotate-180">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    </span>
                </div>
            </div>
            <!--end::Details toggle-->
            <div class="separator"></div>
            <!--begin::Details content-->
            <div id="kt_user_view_details" class="collapse show">
                <div class="pb-5 fs-6">
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Last Login</div>
                    <div class="text-gray-600">{{ auth()->user()->last_login_at }}</div>
                    <!--begin::Details item-->

                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Last Updated At</div>
                    <div class="text-gray-600">{{ auth()->user()->updated_at }}</div>
                    <!--begin::Details item-->

                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Last Login IP</div>
                    <div class="text-gray-600">127.0.0.1</div>
                    <!--begin::Details item-->
                </div>
            </div>
            <!--end::Details content-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
