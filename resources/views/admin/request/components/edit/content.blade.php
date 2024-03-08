<div class="flex-lg-row-fluid ms-lg-15">
    <!--begin:::Tabs-->
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_request_update">Update Request</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_request_view_files">Files</a>--}}
{{--        </li>--}}
{{--        <!--end:::Tab item-->--}}
{{--        <!--begin:::Tab item-->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_request_view_comments">Comments</a>--}}
{{--        </li>--}}
        <!--end:::Tab item-->

    </ul>
    <!--end:::Tabs-->
    <!--begin:::Tab content-->
    <div class="tab-content" id="myTabContent">
        <!--begin:::Tab pane-->
        <div class="tab-pane fade active show" id="kt_request_update" role="tabpanel">
            <!--begin::Tasks-->
            <div class="card card-flush mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h2 class="mb-1">Update Request</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Input group-->
                    <div class="fv-row fv-plugins-icon-container">
                        <!--begin::Row-->
                        <div class="row">
                            <form action="{{ route('admin.request.update', $request->id) }}" method="Post">
                                @csrf
                                @method('PUT')
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label required">Request Subject</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="request_subject" class="form-control form-control-lg form-control-solid" value="{{ $request->subject }}">
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--end::Label-->
                                    <label class="form-label">Request Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="request_description" class="form-control form-control-lg form-control-solid" rows="3">{{ $request->description }}</textarea>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label required">Update Status</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="status" class="form-select form-select-lg form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="Select Status">
                                        <option></option>
                                        @foreach(\App\Models\Request::getAllRequestStatus() as $status)
                                            <option value="{{ $status }}" {{ ($request->status == $status) ? 'selected' : ''  }}>{{ $status }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label required">Select Employee</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="update_employee" class="form-select form-select-lg form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="Select Employee">
                                        <option></option>
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}" {{ ($request->employee_id == $employee->id) ? 'selected' : ''  }}>{{ $employee->user->getFullName() }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Tasks-->
        </div>
        <!--end:::Tab pane-->
{{--        <!--begin:::Tab pane-->--}}
{{--        <div class="tab-pane fade" id="kt_request_view_files" role="tabpanel">--}}
{{--            <!--begin::Card-->--}}
{{--            <div class="card pt-4 mb-6 mb-xl-9">--}}
{{--                <!--begin::Card header-->--}}
{{--                <div class="card-header border-0">--}}
{{--                    <!--begin::Card title-->--}}
{{--                    <div class="card-title">--}}
{{--                        <h2>Assigned Clients</h2>--}}
{{--                    </div>--}}
{{--                    <!--end::Card title-->--}}
{{--                </div>--}}
{{--                <!--end::Card header-->--}}
{{--                <!--begin::Card body-->--}}
{{--                <div class="card-body pt-0 pb-5">--}}
{{--                </div>--}}
{{--                <!--end::Card body-->--}}
{{--            </div>--}}
{{--            <!--end::Card-->--}}
{{--        </div>--}}
{{--        <!--end:::Tab pane-->--}}
{{--        <!--begin:::Tab pane-->--}}
{{--        <div class="tab-pane fade" id="kt_request_view_comments" role="tabpanel">--}}
{{--            <!--begin::Card-->--}}
{{--            <div class="card pt-4 mb-6 mb-xl-9">--}}
{{--                <!--begin::Card header-->--}}
{{--                <div class="card-header border-0">--}}
{{--                    <!--begin::Card title-->--}}
{{--                    <div class="card-title">--}}
{{--                        <h2>Assigned Clients</h2>--}}
{{--                    </div>--}}
{{--                    <!--end::Card title-->--}}
{{--                </div>--}}
{{--                <!--end::Card header-->--}}
{{--                <!--begin::Card body-->--}}
{{--                <div class="card-body pt-0 pb-5">--}}
{{--                </div>--}}
{{--                <!--end::Card body-->--}}
{{--            </div>--}}
{{--            <!--end::Card-->--}}
{{--        </div>--}}
{{--        <!--end:::Tab pane-->--}}
    </div>
    <!--end:::Tab content-->
</div>
