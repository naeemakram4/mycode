<!--begin::groups-->
<div class="col-lg-6 col-xl-3">
    <!--begin::group wrapper-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header pt-7" id="kt_chat_contacts_header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Groups</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <!--begin::Contact groups-->
            <div class="d-flex flex-column gap-5">

                <div class="d-flex flex-stack">
                    <a href="{{ route('customer.task.index') }}" class="fs-6 fw-bolder text-gray-800 text-hover-primary text-active-primary active">All Group</a>
                    <div class="badge badge-light-primary"></div>
                </div>

                @foreach($groups as $group)
                    <div class="d-flex flex-stack">
                        <a href="" class="fs-6 fw-bolder text-gray-800 text-hover-primary text-active-primary">
                            {{ $group->name }}
                        </a>
                        <div class="badge badge-light">{{ $group->tasks_count }}</div>
                    </div>
                @endforeach

            </div>
            <!--end::Contact groups-->
            <!--begin::Separator-->
            <div class="separator my-7"></div>
            <!--begin::Separator-->
            <form action="" method="POST">
                @csrf
                <!--begin::Add contact group-->
                <label class="fs-6 fw-bold form-label">Add new group</label>
                <div class="input-group">
                    <input type="text" name="group_name" class="form-control form-control-solid" placeholder="Group name">
                    <button type="submit" class="btn btn-icon btn-light">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
                <!--end::Add contact group-->
            </form>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::group wrapper-->
</div>
<!--end::groups-->
