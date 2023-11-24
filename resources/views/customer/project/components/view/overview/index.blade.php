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
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Card-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">What's on the road?</h3>
                    <div class="fs-6 text-gray-400">Total 482 participants</div>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Select-->
                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px select2-hidden-accessible" data-select2-id="select2-data-13-d3s6" tabindex="-1" aria-hidden="true">
                        <option value="1" selected="selected" data-select2-id="select2-data-15-z25n">Options</option>
                        <option value="2">Option 1</option>
                        <option value="3">Option 2</option>
                        <option value="4">Option 3</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-puog" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bolder w-100px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-0d-container" aria-controls="select2-status-0d-container"><span class="select2-selection__rendered" id="select2-status-0d-container" role="textbox" aria-readonly="true" title="Options">Options</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::Select-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9 pt-4">
                <!--begin::Dates-->
                <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                            <span class="opacity-50 fs-7 fw-bold">Su</span>
                            <span class="fs-6 fw-bolder">22</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                            <span class="opacity-50 fs-7 fw-bold">Mo</span>
                            <span class="fs-6 fw-bolder">23</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                            <span class="opacity-50 fs-7 fw-bold">Tu</span>
                            <span class="fs-6 fw-bolder">24</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                            <span class="opacity-50 fs-7 fw-bold">We</span>
                            <span class="fs-6 fw-bolder">25</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                            <span class="opacity-50 fs-7 fw-bold">Th</span>
                            <span class="fs-6 fw-bolder">26</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                            <span class="opacity-50 fs-7 fw-bold">Fr</span>
                            <span class="fs-6 fw-bolder">27</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                            <span class="opacity-50 fs-7 fw-bold">Sa</span>
                            <span class="fs-6 fw-bolder">28</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                            <span class="opacity-50 fs-7 fw-bold">Su</span>
                            <span class="fs-6 fw-bolder">29</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                            <span class="opacity-50 fs-7 fw-bold">Mo</span>
                            <span class="fs-6 fw-bolder">30</span>
                        </a>
                    </li>
                    <!--end::Date-->
                    <!--begin::Date-->
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                            <span class="opacity-50 fs-7 fw-bold">Tu</span>
                            <span class="fs-6 fw-bolder">31</span>
                        </a>
                    </li>
                    <!--end::Date-->
                </ul>
                <!--end::Dates-->
                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Day-->
                    <div id="kt_schedule_day_0" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Sean Bean</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Yannis Gloverson</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Walter White</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_1" class="tab-pane fade show active">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">10:00 - 11:00
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Michael Walters</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Caleb Donaldson</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Walter White</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_2" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Kendell Trevor</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Bob Harris</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">16:30 - 17:30
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Mark Randall</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_3" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">16:30 - 17:30
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Walter White</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">14:30 - 15:30
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Walter White</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Naomi Hayabusa</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_4" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">16:30 - 17:30
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Yannis Gloverson</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Mark Randall</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Peter Marcus</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_5" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">14:30 - 15:30
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Kendell Trevor</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Walter White</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Kendell Trevor</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_6" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Sean Bean</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Terry Robins</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Michael Walters</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_7" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">10:00 - 11:00
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Michael Walters</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Naomi Hayabusa</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Terry Robins</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_8" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Caleb Donaldson</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">14:30 - 15:30
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Michael Walters</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Naomi Hayabusa</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                    <!--begin::Day-->
                    <div id="kt_schedule_day_9" class="tab-pane fade show">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">16:30 - 17:30
                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Naomi Hayabusa</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">David Stevenson</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">10:00 - 11:00
                                    <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-400">Lead by
                                    <a href="#">Michael Walters</a></div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                    </div>
                    <!--end::Day-->
                </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Card-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">Latest Files</h3>
                    <div class="fs-6 text-gray-400">Total 382 fiels, 2,6GB space usage</div>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9 pt-3">
                <!--begin::Files-->
                <div class="d-flex flex-column mb-9">
                    <!--begin::File-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Icon-->
                        <div class="symbol symbol-30px me-5">
                            <img alt="Icon" src="assets/media/svg/files/pdf.svg">
                        </div>
                        <!--end::Icon-->
                        <!--begin::Details-->
                        <div class="fw-bold">
                            <a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Project tech requirements</a>
                            <div class="text-gray-400">2 days ago
                                <a href="#">Karina Clark</a></div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	</g>
																</svg>
															</span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed6531241">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed6531241" data-allow-clear="true" data-select2-id="select2-data-16-bk3y" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-18-8sec"></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-nhbc" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-1ees-container" aria-controls="select2-1ees-container"><span class="select2-selection__rendered" id="select2-1ees-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                    <!--begin::File-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Icon-->
                        <div class="symbol symbol-30px me-5">
                            <img alt="Icon" src="assets/media/svg/files/doc.svg">
                        </div>
                        <!--end::Icon-->
                        <!--begin::Details-->
                        <div class="fw-bold">
                            <a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Create FureStibe branding proposal</a>
                            <div class="text-gray-400">Due in 1 day
                                <a href="#">Marcus Blake</a></div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	</g>
																</svg>
															</span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed6531432">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed6531432" data-allow-clear="true" data-select2-id="select2-data-19-zx0v" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-21-mjgh"></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-u1i8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-k10f-container" aria-controls="select2-k10f-container"><span class="select2-selection__rendered" id="select2-k10f-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                    <!--begin::File-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Icon-->
                        <div class="symbol symbol-30px me-5">
                            <img alt="Icon" src="assets/media/svg/files/css.svg">
                        </div>
                        <!--end::Icon-->
                        <!--begin::Details-->
                        <div class="fw-bold">
                            <a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Completed Project Stylings</a>
                            <div class="text-gray-400">Due in 1 day
                                <a href="#">Terry Barry</a></div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	</g>
																</svg>
															</span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed653161c">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed653161c" data-allow-clear="true" data-select2-id="select2-data-22-m77k" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-24-u1zx"></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-23-0sgk" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-b50h-container" aria-controls="select2-b50h-container"><span class="select2-selection__rendered" id="select2-b50h-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                    <!--begin::File-->
                    <div class="d-flex align-items-center">
                        <!--begin::Icon-->
                        <div class="symbol symbol-30px me-5">
                            <img alt="Icon" src="assets/media/svg/files/ai.svg">
                        </div>
                        <!--end::Icon-->
                        <!--begin::Details-->
                        <div class="fw-bold">
                            <a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Create Project Wireframes</a>
                            <div class="text-gray-400">Due in 3 days
                                <a href="#">Roth Bloom</a></div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	</g>
																</svg>
															</span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed6531878">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed6531878" data-allow-clear="true" data-select2-id="select2-data-25-brw4" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-27-vr6x"></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-26-pqm6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ky6t-container" aria-controls="select2-ky6t-container"><span class="select2-selection__rendered" id="select2-ky6t-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                </div>
                <!--end::Files-->
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: svg/files/upload.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 67" fill="none">
															<path opacity="0.25" d="M8.375 11.167C8.375 6.54161 12.1246 2.79199 16.75 2.79199H43.9893C46.2105 2.79199 48.3407 3.67436 49.9113 5.24497L56.172 11.5057C57.7426 13.0763 58.625 15.2065 58.625 17.4277V55.8337C58.625 60.459 54.8754 64.2087 50.25 64.2087H16.75C12.1246 64.2087 8.375 60.459 8.375 55.8337V11.167Z" fill="#00A3FF"></path>
															<path d="M41.875 5.28162C41.875 3.90663 42.9896 2.79199 44.3646 2.79199V2.79199C46.3455 2.79199 48.2452 3.57889 49.6459 4.97957L56.4374 11.7711C57.8381 13.1718 58.625 15.0715 58.625 17.0524V17.0524C58.625 18.4274 57.5104 19.542 56.1354 19.542H44.6667C43.1249 19.542 41.875 18.2921 41.875 16.7503V5.28162Z" fill="#00A3FF"></path>
															<path d="M32.4311 25.3368C32.1018 25.4731 31.7933 25.675 31.5257 25.9427L23.1507 34.3177C22.0605 35.4079 22.0605 37.1755 23.1507 38.2657C24.2409 39.3559 26.0085 39.3559 27.0987 38.2657L30.708 34.6563V47.4583C30.708 49.0001 31.9579 50.25 33.4997 50.25C35.0415 50.25 36.2913 49.0001 36.2913 47.4583V34.6563L39.9007 38.2657C40.9909 39.3559 42.7585 39.3559 43.8487 38.2657C44.9389 37.1755 44.9389 35.4079 43.8487 34.3177L35.4737 25.9427C34.6511 25.1201 33.443 24.9182 32.4311 25.3368Z" fill="#00A3FF"></path>
														</svg>
													</span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-bold">
                            <h4 class="text-gray-900 fw-bolder">Quick file uploader</h4>
                            <div class="fs-6 text-gray-700">Drag &amp; Drop or choose files from computer</div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Card body -->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Card-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">New Contibutors</h3>
                    <div class="fs-6 text-gray-400">From total 482 Participants</div>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card toolbar-->
            <!--begin::Card body-->
            <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-5">
                    <!--begin::Avatar-->
                    <div class="me-5 position-relative">
                        <!--begin::Image-->
                        <div class="symbol symbol-35px symbol-circle">
                            <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                        </div>
                        <!--end::Image-->
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Emma Smith</a>
                        <div class="text-gray-400">8 Pending &amp; 97 Completed Tasks</div>
                    </div>
                    <!--end::Details-->
                    <!--begin::Badge-->
                    <div class="badge badge-light ms-auto">5</div>
                    <!--end::Badge-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-5">
                    <!--begin::Avatar-->
                    <div class="me-5 position-relative">
                        <!--begin::Image-->
                        <div class="symbol symbol-35px symbol-circle">
                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                        </div>
                        <!--end::Image-->
                        <!--begin::Online-->
                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                        <!--end::Online-->
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Melody Macy</a>
                        <div class="text-gray-400">5 Pending &amp; 84 Completed</div>
                    </div>
                    <!--end::Details-->
                    <!--begin::Badge-->
                    <div class="badge badge-light ms-auto">8</div>
                    <!--end::Badge-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-5">
                    <!--begin::Avatar-->
                    <div class="me-5 position-relative">
                        <!--begin::Image-->
                        <div class="symbol symbol-35px symbol-circle">
                            <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                        </div>
                        <!--end::Image-->
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Max Smith</a>
                        <div class="text-gray-400">9 Pending &amp; 103 Completed</div>
                    </div>
                    <!--end::Details-->
                    <!--begin::Badge-->
                    <div class="badge badge-light ms-auto">9</div>
                    <!--end::Badge-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-5">
                    <!--begin::Avatar-->
                    <div class="me-5 position-relative">
                        <!--begin::Image-->
                        <div class="symbol symbol-35px symbol-circle">
                            <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                        </div>
                        <!--end::Image-->
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Sean Bean</a>
                        <div class="text-gray-400">3 Pending &amp; 55 Completed</div>
                    </div>
                    <!--end::Details-->
                    <!--begin::Badge-->
                    <div class="badge badge-light ms-auto">3</div>
                    <!--end::Badge-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="me-5 position-relative">
                        <!--begin::Image-->
                        <div class="symbol symbol-35px symbol-circle">
                            <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                        </div>
                        <!--end::Image-->
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Brian Cox</a>
                        <div class="text-gray-400">4 Pending &amp; 115 Completed</div>
                    </div>
                    <!--end::Details-->
                    <!--begin::Badge-->
                    <div class="badge badge-light ms-auto">4</div>
                    <!--end::Badge-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Tasks-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">My Tasks</h3>
                    <div class="fs-6 text-gray-400">Total 25 tasks in backlog</div>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body d-flex flex-column mb-9 p-9 pt-3">
                <!--begin::Item-->
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Label-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Label-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Create FureStibe branding logo</a>
                        <!--begin::Info-->
                        <div class="text-gray-400">Due in 1 day
                            <a href="#">Karina Clark</a></div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																</g>
															</svg>
														</span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed65324e6">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed65324e6" data-allow-clear="true" data-select2-id="select2-data-28-ot3r" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-30-5e55"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-29-r4w5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pd3q-container" aria-controls="select2-pd3q-container"><span class="select2-selection__rendered" id="select2-pd3q-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Label-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Label-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
                        <!--begin::Info-->
                        <div class="text-gray-400">Due in 3 days
                            <a href="#">Rober Doe</a></div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																</g>
															</svg>
														</span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed65326f7">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed65326f7" data-allow-clear="true" data-select2-id="select2-data-31-brqx" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-33-eu18"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-32-wq7r" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-rpuw-container" aria-controls="select2-rpuw-container"><span class="select2-selection__rendered" id="select2-rpuw-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Label-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Label-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>
                        <!--begin::Info-->
                        <div class="text-gray-400">Due in 1 week
                            <a href="#">Neil Owen</a></div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																</g>
															</svg>
														</span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed65328e5">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed65328e5" data-allow-clear="true" data-select2-id="select2-data-34-rbvc" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-36-9e4h"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-35-6zc8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pevn-container" aria-controls="select2-pevn-container"><span class="select2-selection__rendered" id="select2-pevn-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Label-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Label-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Dashgboard UI &amp; UX for Leafr CRM</a>
                        <!--begin::Info-->
                        <div class="text-gray-400">Due in 1 week
                            <a href="#">Olivia Wild</a></div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																</g>
															</svg>
														</span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed6532ad6">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed6532ad6" data-allow-clear="true" data-select2-id="select2-data-37-ix22" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-39-a93n"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-38-n9mh" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6uil-container" aria-controls="select2-6uil-container"><span class="select2-selection__rendered" id="select2-6uil-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center position-relative">
                    <!--begin::Label-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Label-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details-->
                    <div class="fw-bold">
                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
                        <!--begin::Info-->
                        <div class="text-gray-400">Due in 2 weeks
                            <a href="#">Sean Bean</a></div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																</g>
															</svg>
														</span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220ed6532cc1">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220ed6532cc1" data-allow-clear="true" data-select2-id="select2-data-40-3nn3" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-42-krfz"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-41-dxzx" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-qb9k-container" aria-controls="select2-qb9k-container"><span class="select2-selection__rendered" id="select2-qb9k-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Tasks-->
    </div>
    <!--end::Col-->
</div>
