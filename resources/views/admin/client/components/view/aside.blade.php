<!--begin::Sidebar-->
<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
    <!--begin::Card-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Card body-->
        <div class="card-body pt-15">
            <!--begin::Summary-->
            <div class="d-flex flex-center flex-column mb-5">
                <!--begin::Avatar-->
                <div class="symbol symbol-100px symbol-circle mb-7">
                    <img src="{{asset("storage/". $client->company_logo)}}" alt="Profile Image">
                </div>
                <!--end::Avatar-->
                <!--begin::Name-->
                <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ $client->user->getFullName() }}</a>
                <!--end::Name-->
                <!--begin::Position-->
                <div class="mb-9">
                    <!--begin::Badge-->
                    <div class="badge badge-lg badge-light-primary d-inline">{{ $client->user->role->label }}</div>
                    <!--begin::Badge-->
                </div>
                <!--end::Position-->
                <!--begin::Info-->
                <div class="fw-bolder mb-3">
                    Requests
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of requests, approved and pending." data-bs-original-title="" title=""></i>
                </div>

                <div class="d-flex flex-wrap flex-center">
                    <!--begin::Stats-->
                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                        <div class="fs-4 fw-bolder text-gray-700">
                            <span class="w-75px">{{ count($client->requests->where('status', \App\Models\Request::REQUEST_REJECTED_STATUS)) }}</span>
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                            <span class="svg-icon svg-icon-3 svg-icon-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <div class="fw-bold text-muted">Rejected</div>
                    </div>
                    <!--end::Stats-->
                    <!--begin::Stats-->
                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                        <div class="fs-4 fw-bolder text-gray-700">
                            <span class="w-50px">{{ count($client->requests->where('status', \App\Models\Request::REQUEST_PENDING_STATUS)) }}</span>
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                            <span class="svg-icon svg-icon-3 svg-icon-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <div class="fw-bold text-muted">Pending</div>
                    </div>
                    <!--end::Stats-->
                    <!--begin::Stats-->
                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                        <div class="fs-4 fw-bolder text-gray-700">
                            <span class="w-50px">{{ count($client->requests->where('status', \App\Models\Request::REQUEST_APPROVED_STATUS)) }}</span>
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                            <span class="svg-icon svg-icon-3 svg-icon-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <div class="fw-bold text-muted">Approved</div>
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Summary-->
            <!--begin::Details toggle-->
            <div class="d-flex flex-stack fs-4 py-3">
                <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details"
                     role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
                    <span class="ms-2 rotate-180">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                                            </span></div>
                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title=""
                      data-bs-original-title="Edit employee details">
                    <a href="{{ route('admin.client.edit', $client->id) }}" data-id="{{ $client->id }}" class="btn btn-sm btn-light-primary">Edit</a>
                </span>
            </div>
            <!--end::Details toggle-->
            <div class="separator separator-dashed my-3"></div>
            <!--begin::Details content-->
            <div id="kt_customer_view_details" class="collapse show">
                <div class="py-5 fs-6">
                    <!--begin::Badge-->
                    <div class="badge badge-light-{{ $client->user->status == \App\Models\User::STATUS_ACTIVE ? 'success' : 'danger' }} d-inline">
                       {{ $client->user->status == \App\Models\User::STATUS_ACTIVE  ? \App\Models\User::STATUS_ACTIVE : \App\Models\User::STATUS_DISABLE }}
                    </div>
                    <!--begin::Badge-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Username</div>
                    <div class="text-gray-600">{{ $client->user->user_name }}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Email</div>
                    <div class="text-gray-600">
                        <a href="mailto:{{$client->user->email}}" class="text-gray-600 text-hover-primary">{{$client->user->email}}</a>
                    </div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Phone</div>
                    <div class="text-gray-600">{{ $client->user->phone }}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Created At</div>
                    <div class="text-gray-600">{{ $client->user->created_at->format('m-d-Y H:i:s') }}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Last Login</div>
                    <div class="text-gray-600">{{ ($client->user->last_login) ? \Carbon\Carbon::parse($client->user->last_login)->format('m-d-Y H:i:s') : '---' }}</div>
                    <!--begin::Details item-->
                </div>
            </div>
            <!--end::Details content-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Sidebar-->
