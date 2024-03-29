<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header pt-8">
        <div class="card-title">
            <h3>Directories</h3>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Table-->
        <div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
                <div class="dataTables_scroll">
                    <div class="dataTables_scrollHead"
                         style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                        <div class="dataTables_scrollHeadInner"
                             style="box-sizing: content-box; width: 1201.5px; padding-right: 0px;">
                            <table data-kt-filemanager-table="folders"
                                   class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                   style="margin-left: 0px; width: 1201.5px;">
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-250px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 531.033px;">Client
                                    </th>
                                    <th class="min-w-10px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 117.35px;">Total Projects
                                    </th>
                                    <th class="min-w-125px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 324.183px;">Total Requests
                                    </th>
                                    <th class="w-125px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 124.933px;"></th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                @foreach($clients as $client)
                                    <tr>
                                        <!--begin::Name=-->
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a href="{{ route('admin.file.manager.directories', $client->id) }}">
                                                        <div class="symbol-label">
                                                            @if($client->company_logo)
                                                                <img src="{{asset("storage/". $client->company_logo)}}" alt="No image" class="w-100">
                                                            @else
                                                                <img src="{{asset("/assets/media/logos/avatar.png")}}" alt="No image" class="w-100">
                                                            @endif
                                                        </div>
                                                    </a>
                                                </div>
                                                <a href="{{ route('admin.file.manager.directories', $client->id) }}" class="text-gray-800 text-hover-primary">{{ $client->company_name }}</a>
                                            </div>
                                        </td>
                                        <!--end::Name=-->
                                        <!--begin::Size-->
                                        <td>{{ $client->projects->count() }}</td>
                                        <!--end::Size-->
                                        <!--begin::Last modified-->
                                        <td data-order="Invalid date">{{ $client->requests->count() }}</td>
                                        <!--end::Last modified-->
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
