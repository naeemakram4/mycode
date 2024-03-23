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
                                        style="width: 531.033px;">Name
                                    </th>
                                    <th class="w-125px sorting_disabled" rowspan="1" colspan="1">Preview</th>
                                    <th class="min-w-10px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 117.35px;">Size
                                    </th>
                                    <th class="min-w-125px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 324.183px;">Last Modified
                                    </th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                @foreach($files as $file)
                                    <tr>
                                        <!--begin::Name=-->
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="black"></path>
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
																</svg>
															</span>
                                                <!--end::Svg Icon-->

                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary">{{ $file }}</a>
                                            </div>
                                        </td>
                                        <!--end::Name=-->
                                        <td>
                                            <div class="symbol symbol-50px w-50px bg-light">
                                                <img src="{{ asset('storage/' . $file) }}" alt="image" class="p-2">
                                            </div>
                                        </td>
                                        <!--begin::Size-->
                                        <td>-</td>
                                        <!--end::Size-->
                                        <!--begin::Last modified-->
                                        <td data-order="Invalid date">-</td>
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
