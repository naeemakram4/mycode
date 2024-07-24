<div class="modal fade" id="kt_modal_view_clients" tabindex="-1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Browse Clients</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out
                        <a href="{{ route('admin.client.index') }}" class="link-primary fw-bolder">Clients Directory</a>.</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Users-->
                <div class="mb-15">
                    <!--begin::List-->
                    <div class="mh-375px scroll-y me-n7 pe-7">
                        @foreach($clients as $client)
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <a href="{{ route('admin.client.show', $client->id) }}">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-{{ config('mycode.settings.symbol_label_colors')[$client->user->getNameFirstLetter()] }}
                                            text-{{ config('mycode.settings.symbol_label_colors')[$client->user->getNameFirstLetter()] }} fw-bold">{{ $client->user->getNameFirstLetter() }}</span>
                                        </div>
                                    </a>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="{{ route('admin.client.show', $client->id) }}" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">{{ $client->user->getFullName() }}
                                        </a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-bold text-muted">
                                            <a href="mailto:{{ $client->user->email }}">{{ $client->user->email }}</a>
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bolder text-dark">{{ rand(1,10) }}</div>
                                        <div class="fs-7 text-muted">Projects</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                        @endforeach
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
