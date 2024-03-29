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
                                    <th>Directories</th>
                                    <th class="min-w-50px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 531.033px;">Projects/ Requests
                                    </th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <h6>Projects</h6>
                                        </div>
                                    </td>
                                </tr>
                                @foreach($client->projects as $project)
                                    <tr>
                                        <td></td>
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

                                                <a href="{{ route('admin.file.manager.project.files', $project->id) }}" class="text-gray-800 text-hover-primary">{{ $project->name }}</a>
                                            </div>
                                        </td>
                                        <!--end::Name=-->
                                        <td>
                                            @if($project->logo)
                                                <img class="symbol symbol-50px w-50px bg-light" src="{{ asset('storage/'. $project->logo) }}" alt="image">
                                            @else
                                                <img class="symbol symbol-50px w-50px bg-light" src="{{ asset('assets/media/logos/avatar.png') }}" alt="image">
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <h6>Requests</h6>
                                        </div>
                                    </td>
                                </tr>
                                @foreach($client->requests as $request)
                                    <tr>
                                        <td></td>
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

                                                <a href="{{ route('admin.file.manager.request.files', $request->id) }}" class="text-gray-800 text-hover-primary">
                                                    {{ $request->ticket_id }} <br>
                                                    {{ $request->subject }}
                                                </a>
                                            </div>
                                        </td>
                                        <!--end::Name=-->
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
