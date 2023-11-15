<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
													</svg>
												</span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report">
            </div>
            <!--end::Search-->
            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_sales_export" class="d-none"><div class="dt-buttons btn-group flex-wrap">      <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" type="button"><span>PDF</span></button> </div></div>
            <!--end::Export buttons-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Daterangepicker-->
            <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_sales_daterangepicker">
            <!--end::Daterangepicker-->
            <!--begin::Export dropdown-->
            <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"></rect>
													<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"></path>
													<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"></path>
												</svg>
											</span>
                <!--end::Svg Icon-->Export Report</button>
            <!--begin::Menu-->
            <div id="kt_ecommerce_report_sales_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
            <!--end::Export dropdown-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <div id="kt_ecommerce_report_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_report_sales_table">
                    <!--begin::Table head-->
                    <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" rowspan="1" colspan="1" style="width: 229.4px;" aria-label="Date: activate to sort column ascending">Date</th><th class="text-end min-w-75px sorting" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" rowspan="1" colspan="1" style="width: 184.667px;" aria-label="No. Orders: activate to sort column ascending">No. Orders</th><th class="text-end min-w-75px sorting" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" rowspan="1" colspan="1" style="width: 243.15px;" aria-label="Products Sold: activate to sort column ascending">Products Sold</th><th class="text-end min-w-75px sorting" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" rowspan="1" colspan="1" style="width: 184.667px;" aria-label="Tax: activate to sort column ascending">Tax</th><th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_report_sales_table" rowspan="1" colspan="1" style="width: 242px;" aria-label="Total: activate to sort column ascending">Total</th></tr>
                    <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
                    <!--begin::Table row-->

                    <!--end::Table row-->
                    <tr class="odd">
                        <!--begin::Date=-->
                        <td data-order="2022-03-10T00:00:00+05:00">Mar 10, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">10</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">13</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$52.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$348.00</td>
                        <!--end::Total=-->
                    </tr><tr class="even">
                        <!--begin::Date=-->
                        <td data-order="2022-11-10T00:00:00+05:00">Nov 10, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">18</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">21</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$64.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$426.00</td>
                        <!--end::Total=-->
                    </tr><tr class="odd">
                        <!--begin::Date=-->
                        <td data-order="2022-04-15T00:00:00+05:00">Apr 15, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">8</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">10</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$69.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$459.00</td>
                        <!--end::Total=-->
                    </tr><tr class="even">
                        <!--begin::Date=-->
                        <td data-order="2022-07-25T00:00:00+05:00">Jul 25, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">7</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">10</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$87.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$581.00</td>
                        <!--end::Total=-->
                    </tr><tr class="odd">
                        <!--begin::Date=-->
                        <td data-order="2022-09-22T00:00:00+05:00">Sep 22, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">3</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">7</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$29.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$192.00</td>
                        <!--end::Total=-->
                    </tr><tr class="even">
                        <!--begin::Date=-->
                        <td data-order="2022-05-05T00:00:00+05:00">May 05, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">13</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">18</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$20.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$134.00</td>
                        <!--end::Total=-->
                    </tr><tr class="odd">
                        <!--begin::Date=-->
                        <td data-order="2022-10-25T00:00:00+05:00">Oct 25, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">15</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">20</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$33.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$218.00</td>
                        <!--end::Total=-->
                    </tr><tr class="even">
                        <!--begin::Date=-->
                        <td data-order="2022-04-15T00:00:00+05:00">Apr 15, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">5</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">10</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$78.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$521.00</td>
                        <!--end::Total=-->
                    </tr><tr class="odd">
                        <!--begin::Date=-->
                        <td data-order="2022-06-24T00:00:00+05:00">Jun 24, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">6</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">9</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$43.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$288.00</td>
                        <!--end::Total=-->
                    </tr><tr class="even">
                        <!--begin::Date=-->
                        <td data-order="2022-08-19T00:00:00+05:00">Aug 19, 2022</td>
                        <!--end::Date=-->
                        <!--begin::No Orders=-->
                        <td class="text-end pe-0">11</td>
                        <!--end::No Orders=-->
                        <!--begin::Products sold=-->
                        <td class="text-end pe-0">16</td>
                        <!--end::Products sold=-->
                        <!--begin::Tax=-->
                        <td class="text-end pe-0">$70.00</td>
                        <!--end::Tax=-->
                        <!--begin::Total=-->
                        <td class="text-end">$468.00</td>
                        <!--end::Total=-->
                    </tr></tbody>
                    <!--end::Table body-->
                </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="kt_ecommerce_report_sales_table_length"><label><select name="kt_ecommerce_report_sales_table_length" aria-controls="kt_ecommerce_report_sales_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_report_sales_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_ecommerce_report_sales_table_previous"><a href="#" aria-controls="kt_ecommerce_report_sales_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_ecommerce_report_sales_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_report_sales_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_report_sales_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_report_sales_table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_report_sales_table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="kt_ecommerce_report_sales_table_next"><a href="#" aria-controls="kt_ecommerce_report_sales_table" data-dt-idx="6" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
