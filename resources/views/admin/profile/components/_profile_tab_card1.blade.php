<!--begin::Card-->
<div class="card pt-4 mb-6 mb-xl-9">
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title">
            <h2>Profile</h2>
        </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    @if(Session::has('alert'))
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{Session::get('alert') }}</p>
    @endif
    <!--begin::Card body-->
    <div class="card-body pt-0 pb-5">
        <form class="form" method="POST" action="{{ route('save.profile') }}" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="hidden_id" value="{{ $user->id }}">

            <div class="text-center">
                @php $image = URL::asset("settings/".$user->image); @endphp
                @if (!blank($user->image))
                    @php $image = $image; @endphp
                @else
                    @php $image = URL::asset('settings/top-menu-cooco-logo.png'); @endphp
                @endif
                <input type="hidden" name="uploded_image" value="{{ $user->image }}">
                <img id="preview-image-before-upload" class="br-50" src="{{ $image }}"
                     alt="" style="height: 100px; width:100px;">
            </div>
            <!--begin::Input group-->
            <div class="row mb-6 border-0 border-bottom-1 border-dashed border-gray-300">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bolder fs-6">Profile Image</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="file" id="image" name="image" class="form-control mb-6"/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-6 border-0 border-bottom-1 border-dashed border-gray-300">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bolder fs-6">Name</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="name"
                           class="form-control form-control-lg form-control-transparent text-gray-600"
                           value="{{ old('name', $user->name ?? '') }}"/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-6 border-0 border-bottom-1 border-dashed border-gray-300">
                <!--begin::Label-->
                <label
                    class="col-lg-4 col-form-label fw-bolder fs-6 text-gray-600">Email</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="email" name="email" readonly
                           class="form-control form-control-lg form-control-transparent text-gray-600"
                           value="{{ old('email', $user->email ?? '') }}"/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-6 border-0 border-bottom-1 border-dashed border-gray-300">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bolder fs-6 required">Phone</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="phone"
                           class="form-control form-control-lg form-control-transparent text-gray-600"
                           value="{{ old('phone', $user->phone ?? '') }}"/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-6 border-0 border-bottom-1 border-dashed border-gray-300">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bolder fs-6 required">Address</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <textarea name="address" class="form-control mb-6" placeholder="Address">{{ $user->address }}</textarea>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9 border-0">
                <button type="reset" class="btn btn-white btn-active-light-primary me-2">{{ __('Discard') }}</button>
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Update Profile
                </button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->

@push('pageInnerScript')
    <script>
        $(document).ready(function (e) {

            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

        });
    </script>
@endpush
