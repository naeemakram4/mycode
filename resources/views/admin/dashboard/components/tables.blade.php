<div class="row gy-5 g-xl-8">
    <div class="col-xl-8">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Cooco Team</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Total {{count($team)}} teams</span>
                </h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="min-w-100px">Photo</th>
                            <th class="min-w-150px">Full Name</th>
                            <th class="min-w-150px">Email</th>
                            <th class="min-w-150px">Phone</th>
                            <th class="min-w-150px">Department</th>
                        </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @if(count($team))
                                @foreach($team as $employee)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    @php $user = DB::table('users')->where('id',$employee->user_id)->first(); @endphp
                                                    @if($user->image !== NULL)
                                                        @php $image=URL::asset("settings/".$user->image); @endphp
                                                        <img src=" {{ $image }}" alt="">
                                                    @else
                                                        <img src="{{ URL::asset("settings/top-menu-cooco-logo.png") }}">
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-dark fw-bolder text-hover-primary fs-6">{{ $employee->name }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $employee->email }}</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $employee->phone }}</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                                @foreach ($departments as $item)
                                                    @if($item->id == $employee->department_id)
                                                        {{ $item->department_name}}
                                                    @endif
                                                @endforeach
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>

    <div class="col-xl-4">
        <!--begin::List Widget 6-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">Notifications</h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0">
                @if(count($notifications) > 0)
                        <?php $i =0; ?>
                    @foreach($notifications as $notification)
                        @php $i++; if($i<6){ @endphp
                            <!--begin::Item-->
                            <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-warning me-5">
                                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"></path>
                                                                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                    <!--end::Svg Icon-->
                                                                </span>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <div class="flex-grow-1 me-2">
                                    <a href="{{ $notification['data']['url'] }}" class="fw-bolder text-gray-800 text-hover-primary fs-6">
                                        {{ $notification['data']['type'] }} - {{ $notification['data']['data'] }}
                                    </a>
                                    <span class="text-muted fw-bold d-block">{{ $notification['created_at'] }}</span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Lable-->
{{--                                <span class="fw-bolder text-warning py-1">+28%</span>--}}
                                <!--end::Lable-->
                            </div>
                            <!--end::Item-->
                        @php } @endphp
                    @endforeach
                @else
                    <!--begin::Item-->
                    <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                        <!--begin::Title-->
                        <div class="flex-grow-1 me-2">
                            <a href="javascript:void(0);" class="fw-bolder text-danger fs-6">No notification found!</a>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                @endif
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 6-->
    </div>
</div>
