<!--begin::Stats-->
<div class="row g-6 g-xl-9">
    {{-- Project section --}}
    <div class="col-lg-6 col-xxl-4">
        <!--begin::Card-->
        <div class="card h-100">
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Heading-->
                <div class="fs-2hx fw-bolder">237</div>
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
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                            <div class="bullet bg-primary me-3"></div>
                            <div class="text-gray-400">Active</div>
                            <div class="ms-auto fw-bolder text-gray-700">30</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                            <div class="bullet bg-success me-3"></div>
                            <div class="text-gray-400">Completed</div>
                            <div class="ms-auto fw-bolder text-gray-700">45</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-bold align-items-center">
                            <div class="bullet bg-gray-300 me-3"></div>
                            <div class="text-gray-400">Yet to start</div>
                            <div class="ms-auto fw-bolder text-gray-700">25</div>
                        </div>
                        <!--end::Label-->
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
                <div class="fs-2hx fw-bolder">329</div>
                <div class="fs-4 fw-bold text-gray-400 mb-7">Total Tasks</div>
                <div class="fs-6 d-flex justify-content-between mb-4">
                    <div class="fw-bold">Avg. Project Tasks</div>
                    <div class="d-flex fw-bolder">65</div>
                </div>
                <div class="separator separator-dashed"></div>
                <div class="fs-6 d-flex justify-content-between my-4">
                    <div class="fw-bold">Completed Tasks</div>
                    <div class="d-flex fw-bolder">40</div>
                </div>
                <div class="separator separator-dashed"></div>
                <div class="fs-6 d-flex justify-content-between mt-4">
                    <div class="fw-bold">Pending Tasks</div>
                    <div class="d-flex fw-bolder">92</div>
                </div>
            </div>
        </div>
        <!--end::Budget-->
    </div>

    {{-- Clients section --}}
    <div class="col-lg-6 col-xxl-4">
        <!--begin::Clients-->
        <div class="card h-100">
            <div class="card-body p-9">
                <!--begin::Heading-->
                <div class="fs-2hx fw-bolder">{{ count($clients) }}</div>
                <div class="fs-4 fw-bold text-gray-400 mb-7">Our Clients</div>
                <!--end::Heading-->
                <!--begin::Users group-->
                <div class="symbol-group symbol-hover mb-9">
                    @foreach($clients as $key => $client)
                        @if($key <= 7)
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="{{ $client->user->getFullName() }}">
                                <span class="symbol-label bg-{{ config('houmanity.settings.symbol_label_colors')[$client->user->getNameFirstLetter()] }} text-inverse-warning fw-bolder">{{ $client->user->getNameFirstLetter() }}</span>
                            </div>
                        @endif
                    @endforeach

                    @if(count($clients) > 8)
                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_clients">
                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bolder">+{{ count($clients) - 8 }}</span>
                        </a>
                    @endif
                </div>
                <!--end::Users group-->
                <!--begin::Actions-->
                <div class="d-flex">
                    <a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_clients">All Clients</a>
                    <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Invite New</a>
                </div>
                <!--end::Actions-->
            </div>
        </div>
        <!--end::Clients-->
    </div>
</div>
<!--end::Stats-->
