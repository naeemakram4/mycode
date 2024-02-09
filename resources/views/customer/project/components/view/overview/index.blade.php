<div class="row g-6 g-xl-9">
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Summary-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">Tasks Summary</h3>
                    <div class="fs-6 fw-bold text-gray-400">24 Overdue Tasks</div>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9 pt-5">
                <!--begin::Wrapper-->
                <div class="d-flex flex-wrap">
                    <!--begin::Chart-->
                    <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                        <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                            <span class="fs-2qx fw-bolder">237</span>
                            <span class="fs-6 fw-bold text-gray-400">Total Tasks</span>
                        </div>
                        <canvas id="project_overview_chart" style="display: block; box-sizing: border-box; height: 175px; width: 175px;" width="350" height="350"></canvas>
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
                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                            <div class="bullet bg-danger me-3"></div>
                            <div class="text-gray-400">Overdue</div>
                            <div class="ms-auto fw-bolder text-gray-700">0</div>
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
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-bold">
                            <div class="fs-6 text-gray-700">
                                <a href="#" class="fw-bolder me-1">Invite New .NET Collaborators</a>to create great outstanding business to business .jsp modutr class scripts</div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Summary-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Graph-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">Tasks Over Time</h3>
                    <!--begin::Labels-->
                    <div class="fs-6 d-flex text-gray-400 fs-6 fw-bold">
                        <!--begin::Label-->
                        <div class="d-flex align-items-center me-6">
														<span class="menu-bullet d-flex align-items-center me-2">
															<span class="bullet bg-success"></span>
														</span>Complete</div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex align-items-center">
														<span class="menu-bullet d-flex align-items-center me-2">
															<span class="bullet bg-primary"></span>
														</span>Incomplete</div>
                        <!--end::Label-->
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Select-->
                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px select2-hidden-accessible" data-select2-id="select2-data-10-zeo5" tabindex="-1" aria-hidden="true">
                        <option value="1">2020 Q1</option>
                        <option value="2">2020 Q2</option>
                        <option value="3" selected="selected" data-select2-id="select2-data-12-v3yn">2020 Q3</option>
                        <option value="4">2020 Q4</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-4vft" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bolder w-100px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-4c-container" aria-controls="select2-status-4c-container"><span class="select2-selection__rendered" id="select2-status-4c-container" role="textbox" aria-readonly="true" title="2020 Q3">2020 Q3</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::Select-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-10 pb-0 px-5">
                <!--begin::Chart-->
                <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px; min-height: 315px;"><div id="apexcharts68ggu6ww" class="apexcharts-canvas apexcharts68ggu6ww apexcharts-theme-light" style="width: 583px; height: 300px;"><svg id="SvgjsSvg1246" width="583" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1248" class="apexcharts-inner apexcharts-graphical" transform="translate(43.633331298828125, 30)"><defs id="SvgjsDefs1247"><clipPath id="gridRectMask68ggu6ww"><rect id="SvgjsRect1252" width="522.9250020980835" height="229.685" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask68ggu6ww"></clipPath><clipPath id="nonForecastMask68ggu6ww"></clipPath><clipPath id="gridRectMarkerMask68ggu6ww"><rect id="SvgjsRect1253" width="519.9250020980835" height="230.685" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1265" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1266" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1268" font-family="Helvetica, Arial, sans-serif" x="0" y="255.685" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1269">Feb</tspan><title>Feb</title></text><text id="SvgjsText1271" font-family="Helvetica, Arial, sans-serif" x="85.98750034968057" y="255.685" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1272">Mar</tspan><title>Mar</title></text><text id="SvgjsText1274" font-family="Helvetica, Arial, sans-serif" x="171.97500069936117" y="255.685" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1275">Apr</tspan><title>Apr</title></text><text id="SvgjsText1277" font-family="Helvetica, Arial, sans-serif" x="257.9625010490418" y="255.685" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1278">May</tspan><title>May</title></text><text id="SvgjsText1280" font-family="Helvetica, Arial, sans-serif" x="343.9500013987224" y="255.685" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1281">Jun</tspan><title>Jun</title></text><text id="SvgjsText1283" font-family="Helvetica, Arial, sans-serif" x="429.937501748403" y="255.685" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1284">Jul</tspan><title>Jul</title></text><text id="SvgjsText1286" font-family="Helvetica, Arial, sans-serif" x="515.9250020980835" y="255.685" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1287">Aug</tspan><title>Aug</title></text></g></g><g id="SvgjsG1302" class="apexcharts-grid"><g id="SvgjsG1303" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1305" x1="0" y1="0" x2="515.9250020980835" y2="0" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1306" x1="0" y1="45.337" x2="515.9250020980835" y2="45.337" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1307" x1="0" y1="90.674" x2="515.9250020980835" y2="90.674" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1308" x1="0" y1="136.01100000000002" x2="515.9250020980835" y2="136.01100000000002" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1309" x1="0" y1="181.348" x2="515.9250020980835" y2="181.348" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1310" x1="0" y1="226.685" x2="515.9250020980835" y2="226.685" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1304" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1312" x1="0" y1="226.685" x2="515.9250020980835" y2="226.685" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1311" x1="0" y1="1" x2="0" y2="226.685" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1254" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1255" class="apexcharts-series" seriesName="Incomplete" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1258" d="M 0 226.685L 0 90.67399999999998C 30.0956251223882 90.67399999999998 55.891875227292374 90.67399999999998 85.98750034968057 90.67399999999998C 116.08312547206877 90.67399999999998 141.87937557697296 25.90685714285712 171.97500069936115 25.90685714285712C 202.07062582174936 25.90685714285712 227.86687592665353 25.90685714285712 257.96250104904175 25.90685714285712C 288.05812617142993 25.90685714285712 313.8543762763341 58.29042857142855 343.9500013987223 58.29042857142855C 374.0456265211105 58.29042857142855 399.8418766260147 58.29042857142855 429.9375017484029 58.29042857142855C 460.0331268707911 58.29042857142855 485.8293769756953 58.29042857142855 515.9250020980835 58.29042857142855C 515.9250020980835 58.29042857142855 515.9250020980835 58.29042857142855 515.9250020980835 226.685M 515.9250020980835 58.29042857142855z" fill="rgba(241,250,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask68ggu6ww)" pathTo="M 0 226.685L 0 90.67399999999998C 30.0956251223882 90.67399999999998 55.891875227292374 90.67399999999998 85.98750034968057 90.67399999999998C 116.08312547206877 90.67399999999998 141.87937557697296 25.90685714285712 171.97500069936115 25.90685714285712C 202.07062582174936 25.90685714285712 227.86687592665353 25.90685714285712 257.96250104904175 25.90685714285712C 288.05812617142993 25.90685714285712 313.8543762763341 58.29042857142855 343.9500013987223 58.29042857142855C 374.0456265211105 58.29042857142855 399.8418766260147 58.29042857142855 429.9375017484029 58.29042857142855C 460.0331268707911 58.29042857142855 485.8293769756953 58.29042857142855 515.9250020980835 58.29042857142855C 515.9250020980835 58.29042857142855 515.9250020980835 58.29042857142855 515.9250020980835 226.685M 515.9250020980835 58.29042857142855z" pathFrom="M -1 544.044L -1 544.044L 85.98750034968057 544.044L 171.97500069936115 544.044L 257.96250104904175 544.044L 343.9500013987223 544.044L 429.9375017484029 544.044L 515.9250020980835 544.044"></path><path id="SvgjsPath1259" d="M 0 90.67399999999998C 30.0956251223882 90.67399999999998 55.891875227292374 90.67399999999998 85.98750034968057 90.67399999999998C 116.08312547206877 90.67399999999998 141.87937557697296 25.90685714285712 171.97500069936115 25.90685714285712C 202.07062582174936 25.90685714285712 227.86687592665353 25.90685714285712 257.96250104904175 25.90685714285712C 288.05812617142993 25.90685714285712 313.8543762763341 58.29042857142855 343.9500013987223 58.29042857142855C 374.0456265211105 58.29042857142855 399.8418766260147 58.29042857142855 429.9375017484029 58.29042857142855C 460.0331268707911 58.29042857142855 485.8293769756953 58.29042857142855 515.9250020980835 58.29042857142855" fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask68ggu6ww)" pathTo="M 0 90.67399999999998C 30.0956251223882 90.67399999999998 55.891875227292374 90.67399999999998 85.98750034968057 90.67399999999998C 116.08312547206877 90.67399999999998 141.87937557697296 25.90685714285712 171.97500069936115 25.90685714285712C 202.07062582174936 25.90685714285712 227.86687592665353 25.90685714285712 257.96250104904175 25.90685714285712C 288.05812617142993 25.90685714285712 313.8543762763341 58.29042857142855 343.9500013987223 58.29042857142855C 374.0456265211105 58.29042857142855 399.8418766260147 58.29042857142855 429.9375017484029 58.29042857142855C 460.0331268707911 58.29042857142855 485.8293769756953 58.29042857142855 515.9250020980835 58.29042857142855" pathFrom="M -1 544.044L -1 544.044L 85.98750034968057 544.044L 171.97500069936115 544.044L 257.96250104904175 544.044L 343.9500013987223 544.044L 429.9375017484029 544.044L 515.9250020980835 544.044"></path><g id="SvgjsG1256" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1320" r="0" cx="0" cy="0" class="apexcharts-marker wwqi6jwsl no-pointer-events" stroke="#009ef7" fill="#f1faff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1260" class="apexcharts-series" seriesName="Complete" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1263" d="M 0 226.685L 0 187.82471428571426C 30.0956251223882 187.82471428571426 55.891875227292374 187.82471428571426 85.98750034968057 187.82471428571426C 116.08312547206877 187.82471428571426 141.87937557697296 155.44114285714284 171.97500069936115 155.44114285714284C 202.07062582174936 155.44114285714284 227.86687592665353 155.44114285714284 257.96250104904175 155.44114285714284C 288.05812617142993 155.44114285714284 313.8543762763341 187.82471428571426 343.9500013987223 187.82471428571426C 374.0456265211105 187.82471428571426 399.8418766260147 187.82471428571426 429.9375017484029 187.82471428571426C 460.0331268707911 187.82471428571426 485.8293769756953 155.44114285714284 515.9250020980835 155.44114285714284C 515.9250020980835 155.44114285714284 515.9250020980835 155.44114285714284 515.9250020980835 226.685M 515.9250020980835 155.44114285714284z" fill="rgba(232,255,243,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask68ggu6ww)" pathTo="M 0 226.685L 0 187.82471428571426C 30.0956251223882 187.82471428571426 55.891875227292374 187.82471428571426 85.98750034968057 187.82471428571426C 116.08312547206877 187.82471428571426 141.87937557697296 155.44114285714284 171.97500069936115 155.44114285714284C 202.07062582174936 155.44114285714284 227.86687592665353 155.44114285714284 257.96250104904175 155.44114285714284C 288.05812617142993 155.44114285714284 313.8543762763341 187.82471428571426 343.9500013987223 187.82471428571426C 374.0456265211105 187.82471428571426 399.8418766260147 187.82471428571426 429.9375017484029 187.82471428571426C 460.0331268707911 187.82471428571426 485.8293769756953 155.44114285714284 515.9250020980835 155.44114285714284C 515.9250020980835 155.44114285714284 515.9250020980835 155.44114285714284 515.9250020980835 226.685M 515.9250020980835 155.44114285714284z" pathFrom="M -1 544.044L -1 544.044L 85.98750034968057 544.044L 171.97500069936115 544.044L 257.96250104904175 544.044L 343.9500013987223 544.044L 429.9375017484029 544.044L 515.9250020980835 544.044"></path><path id="SvgjsPath1264" d="M 0 187.82471428571426C 30.0956251223882 187.82471428571426 55.891875227292374 187.82471428571426 85.98750034968057 187.82471428571426C 116.08312547206877 187.82471428571426 141.87937557697296 155.44114285714284 171.97500069936115 155.44114285714284C 202.07062582174936 155.44114285714284 227.86687592665353 155.44114285714284 257.96250104904175 155.44114285714284C 288.05812617142993 155.44114285714284 313.8543762763341 187.82471428571426 343.9500013987223 187.82471428571426C 374.0456265211105 187.82471428571426 399.8418766260147 187.82471428571426 429.9375017484029 187.82471428571426C 460.0331268707911 187.82471428571426 485.8293769756953 155.44114285714284 515.9250020980835 155.44114285714284" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask68ggu6ww)" pathTo="M 0 187.82471428571426C 30.0956251223882 187.82471428571426 55.891875227292374 187.82471428571426 85.98750034968057 187.82471428571426C 116.08312547206877 187.82471428571426 141.87937557697296 155.44114285714284 171.97500069936115 155.44114285714284C 202.07062582174936 155.44114285714284 227.86687592665353 155.44114285714284 257.96250104904175 155.44114285714284C 288.05812617142993 155.44114285714284 313.8543762763341 187.82471428571426 343.9500013987223 187.82471428571426C 374.0456265211105 187.82471428571426 399.8418766260147 187.82471428571426 429.9375017484029 187.82471428571426C 460.0331268707911 187.82471428571426 485.8293769756953 155.44114285714284 515.9250020980835 155.44114285714284" pathFrom="M -1 544.044L -1 544.044L 85.98750034968057 544.044L 171.97500069936115 544.044L 257.96250104904175 544.044L 343.9500013987223 544.044L 429.9375017484029 544.044L 515.9250020980835 544.044"></path><g id="SvgjsG1261" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1321" r="0" cx="0" cy="0" class="apexcharts-marker wxhp3wtxu no-pointer-events" stroke="#50cd89" fill="#e8fff3" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1257" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1262" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1314" x1="0" y1="0" x2="0" y2="226.685" stroke="#009ef7" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="226.685" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1315" x1="0" y1="0" x2="515.9250020980835" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1316" x1="0" y1="0" x2="515.9250020980835" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1317" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1318" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1319" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1322" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1323" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1288" class="apexcharts-yaxis" rel="0" transform="translate(13.633331298828125, 0)"><g id="SvgjsG1289" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1290" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1291">84</tspan><title>84</title></text><text id="SvgjsText1292" font-family="Helvetica, Arial, sans-serif" x="20" y="76.837" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1293">77</tspan><title>77</title></text><text id="SvgjsText1294" font-family="Helvetica, Arial, sans-serif" x="20" y="122.174" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1295">70</tspan><title>70</title></text><text id="SvgjsText1296" font-family="Helvetica, Arial, sans-serif" x="20" y="167.51100000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1297">63</tspan><title>63</title></text><text id="SvgjsText1298" font-family="Helvetica, Arial, sans-serif" x="20" y="212.848" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1299">56</tspan><title>56</title></text><text id="SvgjsText1300" font-family="Helvetica, Arial, sans-serif" x="20" y="258.185" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1301">49</tspan><title>49</title></text></g></g><rect id="SvgjsRect1313" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1249" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 150px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 250, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(232, 255, 243);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                <!--end::Chart-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Graph-->
    </div>
    <!--end::Col-->
</div>
