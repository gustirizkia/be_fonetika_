@extends('layouts.user')

@section('content')
    <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 20-->
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                        <!--end::Amount-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end pt-0">
                    <!--begin::Progress-->
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>43 Pending</span>
                            <span>72%</span>
                        </div>
                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 20-->
            <!--begin::Card widget 7-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                        <!--end::Amount-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column justify-content-end pe-0">
                    <!--begin::Title-->
                    <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                    <!--end::Title-->
                    <!--begin::Users group-->
                    <div class="symbol-group symbol-hover flex-nowrap">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Alan Warden" data-kt-initialized="1">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon"
                            data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                            <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy"
                            data-bs-original-title="Melody Macy" data-kt-initialized="1">
                            <img alt="Pic" src="assets/media/avatars/300-2.jpg">
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter"
                            data-bs-original-title="Barry Walter" data-kt-initialized="1">
                            <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                        </div>
                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                        </a>
                    </div>
                    <!--end::Users group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 7-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 17-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                            <!--end::Currency-->
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center me-5 pt-2">
                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70"
                            data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Labels-->
                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 17-->
            <!--begin::List widget 26-->
            <div class="card card-flush h-lg-50">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
                        <!--end::Section-->
                        <!--begin::Action-->
                        <button type="button"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                            <i class="ki-outline ki-exit-right-corner fs-2"></i>
                        </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
                        <!--end::Section-->
                        <!--begin::Action-->
                        <button type="button"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                            <i class="ki-outline ki-exit-right-corner fs-2"></i>
                        </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
                        <!--end::Section-->
                        <!--begin::Action-->
                        <button type="button"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                            <i class="ki-outline ki-exit-right-corner fs-2"></i>
                        </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::LIst widget 26-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-6">
            <div class="card card-flush overflow-hidden h-lg-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Performance</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                            data-kt-daterangepicker-range="today"
                            class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                            <!--begin::Display range-->
                            <div class="text-gray-600 fw-bold">12 Jan 2025</div>
                            <!--end::Display range-->
                            <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
                        </div>
                        <!--end::Daterangepicker-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end p-0">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6"
                        style="height: 300px; min-height: 315px;">
                        <div id="apexchartsc2vrkh4o" class="apexcharts-canvas apexchartsc2vrkh4o apexcharts-theme-light"
                            style="width: 581.5px; height: 300px;"><svg id="SvgjsSvg1062" width="581.5" height="300"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="581.5" height="300">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 150px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1102" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                    fill="#fefefe"></rect>
                                <g id="SvgjsG1165" class="apexcharts-yaxis" rel="0"
                                    transform="translate(17.19921875, 0)">
                                    <g id="SvgjsG1166" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1168"
                                            font-family="inherit" x="20" y="31.6" text-anchor="end"
                                            dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1169">120</tspan>
                                            <title>120</title>
                                        </text><text id="SvgjsText1171" font-family="inherit" x="20" y="68.57"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1172">105</tspan>
                                            <title>105</title>
                                        </text><text id="SvgjsText1174" font-family="inherit" x="20"
                                            y="105.53999999999999" text-anchor="end" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1175">90</tspan>
                                            <title>90</title>
                                        </text><text id="SvgjsText1177" font-family="inherit" x="20" y="142.51"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1178">75</tspan>
                                            <title>75</title>
                                        </text><text id="SvgjsText1180" font-family="inherit" x="20" y="179.48"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1181">60</tspan>
                                            <title>60</title>
                                        </text><text id="SvgjsText1183" font-family="inherit" x="20" y="216.45"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1184">45</tspan>
                                            <title>45</title>
                                        </text><text id="SvgjsText1186" font-family="inherit" x="20" y="253.42"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1187">30</tspan>
                                            <title>30</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1064" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(47.19921875, 30)">
                                    <defs id="SvgjsDefs1063">
                                        <clipPath id="gridRectMaskc2vrkh4o">
                                            <rect id="SvgjsRect1068" width="531.30078125" height="224.82" x="-3.5"
                                                y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskc2vrkh4o"></clipPath>
                                        <clipPath id="nonForecastMaskc2vrkh4o"></clipPath>
                                        <clipPath id="gridRectMarkerMaskc2vrkh4o">
                                            <rect id="SvgjsRect1069" width="528.30078125" height="225.82" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient1074" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1075" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)"
                                                offset="0.15"></stop>
                                            <stop id="SvgjsStop1076" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1077" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient1083" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1084" stop-opacity="0.4" stop-color="rgba(80,205,137,0.4)"
                                                offset="0.15"></stop>
                                            <stop id="SvgjsStop1085" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1086" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="SvgjsG1089" class="apexcharts-grid">
                                        <g id="SvgjsG1090" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1094" x1="0" y1="36.97" x2="524.30078125"
                                                y2="36.97" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1095" x1="0" y1="73.94" x2="524.30078125"
                                                y2="73.94" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1096" x1="0" y1="110.91" x2="524.30078125"
                                                y2="110.91" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1097" x1="0" y1="147.88" x2="524.30078125"
                                                y2="147.88" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1098" x1="0" y1="184.85" x2="524.30078125"
                                                y2="184.85" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1091" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1101" x1="0" y1="221.82" x2="524.30078125"
                                            y2="221.82" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1100" x1="0" y1="1" x2="0"
                                            y2="221.82" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1070" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG1071" class="apexcharts-series" seriesName="InboundxCalls"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1078"
                                                d="M0 221.82L0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 "
                                                fill="url(#SvgjsLinearGradient1074)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskc2vrkh4o)"
                                                pathTo="M 0 221.82 L 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C 524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M 524.30078125 172.52666666666667z"
                                                pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76">
                                            </path>
                                            <path id="SvgjsPath1079"
                                                d="M0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 "
                                                fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskc2vrkh4o)"
                                                pathTo="M 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667"
                                                pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1072"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1191" r="0" cx="262.150390625"
                                                        cy="123.23333333333335"
                                                        class="apexcharts-marker wezzu9df3 no-pointer-events"
                                                        stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1080" class="apexcharts-series" seriesName="OutboundxCalls"
                                            data:longestSeries="true" rel="2" data:realIndex="1">
                                            <path id="SvgjsPath1087"
                                                d="M0 221.82L0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 "
                                                fill="url(#SvgjsLinearGradient1083)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-area" index="1"
                                                clip-path="url(#gridRectMaskc2vrkh4o)"
                                                pathTo="M 0 221.82 L 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C 524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M 524.30078125 86.26333333333335z"
                                                pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76">
                                            </path>
                                            <path id="SvgjsPath1088"
                                                d="M0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 "
                                                fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                class="apexcharts-area" index="1"
                                                clip-path="url(#gridRectMaskc2vrkh4o)"
                                                pathTo="M 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335"
                                                pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1081"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="1">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1192" r="0" cx="262.150390625"
                                                        cy="12.323333333333323"
                                                        class="apexcharts-marker wefyqcxh no-pointer-events"
                                                        stroke="#50cd89" fill="#50cd89" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1073" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1082" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <g id="SvgjsG1092" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1093" x1="0" y1="0" x2="524.30078125"
                                            y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1099" x1="0" y1="221.82" x2="524.30078125"
                                            y2="221.82" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <line id="SvgjsLine1103" x1="261.650390625" y1="0" x2="261.650390625"
                                        y2="221.82" stroke="#009ef7 #50cd89" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="261.650390625" y="0"
                                        width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                        stroke-width="1"></line>
                                    <line id="SvgjsLine1104" x1="0" y1="0" x2="524.30078125"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1105" x1="0" y1="0" x2="524.30078125"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1106" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1107" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -10)"><text id="SvgjsText1109" font-family="inherit"
                                                x="0" y="244.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1110"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1112" font-family="inherit" x="29.127821180555557"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1113"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1115" font-family="inherit" x="58.25564236111111"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1116"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1118" font-family="inherit" x="87.38346354166666"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 88.46256256103516 239.32000732421875)">
                                                <tspan id="SvgjsTspan1119">9 AM</tspan>
                                                <title>9 AM</title>
                                            </text><text id="SvgjsText1121" font-family="inherit" x="116.51128472222223"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1122"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1124" font-family="inherit" x="145.63910590277777"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1125"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1127" font-family="inherit" x="174.76692708333331"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 175.8470001220703 239.32000732421875)">
                                                <tspan id="SvgjsTspan1128">12 PM</tspan>
                                                <title>12 PM</title>
                                            </text><text id="SvgjsText1130" font-family="inherit" x="203.89474826388886"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1131"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1133" font-family="inherit" x="233.0225694444444"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1134"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1136" font-family="inherit" x="262.15039062499994"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 263.224609375 239.32000732421875)">
                                                <tspan id="SvgjsTspan1137">15 PM</tspan>
                                                <title>15 PM</title>
                                            </text><text id="SvgjsText1139" font-family="inherit" x="291.2782118055555"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1140"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1142" font-family="inherit" x="320.40603298611103"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1143"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1145" font-family="inherit" x="349.5338541666666"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 350.6119689941406 239.32000732421875)">
                                                <tspan id="SvgjsTspan1146">18 PM</tspan>
                                                <title>18 PM</title>
                                            </text><text id="SvgjsText1148" font-family="inherit" x="378.6616753472221"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1149"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1151" font-family="inherit" x="407.78949652777766"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1152"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1154" font-family="inherit" x="436.9173177083332"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 437.9964294433594 239.32000732421875)">
                                                <tspan id="SvgjsTspan1155">19 PM</tspan>
                                                <title>19 PM</title>
                                            </text><text id="SvgjsText1157" font-family="inherit" x="466.04513888888874"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1158"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1160" font-family="inherit" x="495.1729600694443"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1161"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1163" font-family="inherit" x="524.3007812499998"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1164"></tspan>
                                                <title></title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1188"
                                        class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1189"
                                        class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1190"
                                        class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                                    <rect id="SvgjsRect1193" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1194" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light"
                                style="left: 145.709px; top: 126.233px;">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">15 PM
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 158, 247);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label">Inbound Calls: </span><span
                                                class="apexcharts-tooltip-text-y-value">70</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(80, 205, 137);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label">Outbound Calls: </span><span
                                                class="apexcharts-tooltip-text-y-value">115</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                style="left: 281.904px; top: 253.82px;">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="font-family: inherit; font-size: 12px; min-width: 31.1191px;">15 PM</div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <!--end::Col-->
    </div>

    <div class="row g-5">
        <div class="col-md-6">
            <div class="card card-flush overflow-hidden h-lg-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Performance</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                            data-kt-daterangepicker-range="today"
                            class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                            <!--begin::Display range-->
                            <div class="text-gray-600 fw-bold">12 Jan 2025</div>
                            <!--end::Display range-->
                            <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
                        </div>
                        <!--end::Daterangepicker-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end p-0">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6"
                        style="height: 300px; min-height: 315px;">
                        <div id="apexchartsc2vrkh4o" class="apexcharts-canvas apexchartsc2vrkh4o apexcharts-theme-light"
                            style="width: 581.5px; height: 300px;"><svg id="SvgjsSvg1062" width="581.5" height="300"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="581.5" height="300">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 150px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1102" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                    fill="#fefefe"></rect>
                                <g id="SvgjsG1165" class="apexcharts-yaxis" rel="0"
                                    transform="translate(17.19921875, 0)">
                                    <g id="SvgjsG1166" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1168"
                                            font-family="inherit" x="20" y="31.6" text-anchor="end"
                                            dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1169">120</tspan>
                                            <title>120</title>
                                        </text><text id="SvgjsText1171" font-family="inherit" x="20" y="68.57"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1172">105</tspan>
                                            <title>105</title>
                                        </text><text id="SvgjsText1174" font-family="inherit" x="20"
                                            y="105.53999999999999" text-anchor="end" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1175">90</tspan>
                                            <title>90</title>
                                        </text><text id="SvgjsText1177" font-family="inherit" x="20" y="142.51"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1178">75</tspan>
                                            <title>75</title>
                                        </text><text id="SvgjsText1180" font-family="inherit" x="20" y="179.48"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1181">60</tspan>
                                            <title>60</title>
                                        </text><text id="SvgjsText1183" font-family="inherit" x="20" y="216.45"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1184">45</tspan>
                                            <title>45</title>
                                        </text><text id="SvgjsText1186" font-family="inherit" x="20" y="253.42"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1187">30</tspan>
                                            <title>30</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1064" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(47.19921875, 30)">
                                    <defs id="SvgjsDefs1063">
                                        <clipPath id="gridRectMaskc2vrkh4o">
                                            <rect id="SvgjsRect1068" width="531.30078125" height="224.82" x="-3.5"
                                                y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskc2vrkh4o"></clipPath>
                                        <clipPath id="nonForecastMaskc2vrkh4o"></clipPath>
                                        <clipPath id="gridRectMarkerMaskc2vrkh4o">
                                            <rect id="SvgjsRect1069" width="528.30078125" height="225.82" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient1074" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1075" stop-opacity="0.4"
                                                stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop>
                                            <stop id="SvgjsStop1076" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1077" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient1083" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1084" stop-opacity="0.4"
                                                stop-color="rgba(80,205,137,0.4)" offset="0.15"></stop>
                                            <stop id="SvgjsStop1085" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1086" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskmz1ngh9y">
                                            <rect id="SvgjsRect1012" width="531.30078125" height="224.82" x="-3.5"
                                                y="-1.5" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskmz1ngh9y"></clipPath>
                                        <clipPath id="nonForecastMaskmz1ngh9y"></clipPath>
                                        <clipPath id="gridRectMarkerMaskmz1ngh9y">
                                            <rect id="SvgjsRect1013" width="528.30078125" height="225.82" x="-2"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG1089" class="apexcharts-grid">
                                        <g id="SvgjsG1090" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1094" x1="0" y1="36.97" x2="524.30078125"
                                                y2="36.97" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1095" x1="0" y1="73.94" x2="524.30078125"
                                                y2="73.94" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1096" x1="0" y1="110.91" x2="524.30078125"
                                                y2="110.91" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1097" x1="0" y1="147.88" x2="524.30078125"
                                                y2="147.88" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1098" x1="0" y1="184.85" x2="524.30078125"
                                                y2="184.85" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1091" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1101" x1="0" y1="221.82" x2="524.30078125"
                                            y2="221.82" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1100" x1="0" y1="1" x2="0"
                                            y2="221.82" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1070" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG1071" class="apexcharts-series" seriesname="InboundxCalls"
                                            data:longestseries="true" rel="1" data:realindex="0">
                                            <path id="SvgjsPath1078"
                                                d="M0 221.82L0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 "
                                                fill="url(#SvgjsLinearGradient1074)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskc2vrkh4o)"
                                                pathto="M 0 221.82 L 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C 524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M 524.30078125 172.52666666666667z"
                                                pathfrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76">
                                            </path>
                                            <path id="SvgjsPath1079"
                                                d="M0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 "
                                                fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskc2vrkh4o)"
                                                pathto="M 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667"
                                                pathfrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1072"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realindex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1191" r="0" cx="262.150390625"
                                                        cy="123.23333333333335"
                                                        class="apexcharts-marker wezzu9df3 no-pointer-events"
                                                        stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1135" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker w70ha1qfr no-pointer-events"
                                                        stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1080" class="apexcharts-series" seriesname="OutboundxCalls"
                                            data:longestseries="true" rel="2" data:realindex="1">
                                            <path id="SvgjsPath1087"
                                                d="M0 221.82L0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 "
                                                fill="url(#SvgjsLinearGradient1083)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="1"
                                                clip-path="url(#gridRectMaskc2vrkh4o)"
                                                pathto="M 0 221.82 L 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C 524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M 524.30078125 86.26333333333335z"
                                                pathfrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76">
                                            </path>
                                            <path id="SvgjsPath1088"
                                                d="M0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 "
                                                fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                class="apexcharts-area" index="1"
                                                clip-path="url(#gridRectMaskc2vrkh4o)"
                                                pathto="M 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335"
                                                pathfrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1081"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realindex="1">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1192" r="0" cx="262.150390625"
                                                        cy="12.323333333333323"
                                                        class="apexcharts-marker wefyqcxh no-pointer-events"
                                                        stroke="#50cd89" fill="#50cd89" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1136" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker wnwwmkygi no-pointer-events"
                                                        stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>


                                    </g>
                                    <g id="SvgjsG1092" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1093" x1="0" y1="0" x2="524.30078125"
                                            y2="0" stroke="#dbdfe9" stroke-dasharray="4"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1099" x1="0" y1="221.82" x2="524.30078125"
                                            y2="221.82" stroke="#dbdfe9" stroke-dasharray="4"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <line id="SvgjsLine1103" x1="261.650390625" y1="0" x2="261.650390625"
                                        y2="221.82" stroke="#009ef7 #50cd89" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="261.650390625" y="0"
                                        width="1" height="221.82" fill="#b1b9c4" filter="none"
                                        fill-opacity="0.9" stroke-width="1"></line>
                                    <line id="SvgjsLine1104" x1="0" y1="0" x2="524.30078125"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1105" x1="0" y1="0" x2="524.30078125"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1106" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1107" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -10)"><text id="SvgjsText1109"
                                                font-family="inherit" x="0" y="244.82" text-anchor="end"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1110"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1112" font-family="inherit" x="29.127821180555557"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1113"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1115" font-family="inherit" x="58.25564236111111"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1116"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1118" font-family="inherit" x="87.38346354166666"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 73.49381256103516 239.32000732421875)">
                                                <tspan id="SvgjsTspan1119">9 AM</tspan>
                                                <title>9 AM</title>
                                            </text><text id="SvgjsText1121" font-family="inherit" x="116.51128472222223"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1122"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1124" font-family="inherit" x="145.63910590277777"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1125"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1127" font-family="inherit" x="174.76692708333331"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 158.8079376220703 239.32000732421875)">
                                                <tspan id="SvgjsTspan1128">12 PM</tspan>
                                                <title>12 PM</title>
                                            </text><text id="SvgjsText1130" font-family="inherit" x="203.89474826388886"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1131"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1133" font-family="inherit" x="233.0225694444444"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1134"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1136" font-family="inherit" x="262.15039062499994"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 246.279296875 239.32000732421875)">
                                                <tspan id="SvgjsTspan1137">15 PM</tspan>
                                                <title>15 PM</title>
                                            </text><text id="SvgjsText1139" font-family="inherit" x="291.2782118055555"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1140"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1142" font-family="inherit" x="320.40603298611103"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1143"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1145" font-family="inherit" x="349.5338541666666"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 333.5182189941406 239.32000732421875)">
                                                <tspan id="SvgjsTspan1146">18 PM</tspan>
                                                <title>18 PM</title>
                                            </text><text id="SvgjsText1148" font-family="inherit" x="378.6616753472221"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1149"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1151" font-family="inherit" x="407.78949652777766"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1152"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1154" font-family="inherit" x="436.9173177083332"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 420.8948669433594 239.32000732421875)">
                                                <tspan id="SvgjsTspan1155">19 PM</tspan>
                                                <title>19 PM</title>
                                            </text><text id="SvgjsText1157" font-family="inherit" x="466.04513888888874"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1158"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1160" font-family="inherit" x="495.1729600694443"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1161"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1163" font-family="inherit" x="524.3007812499998"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1164"></tspan>
                                                <title></title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1188"
                                        class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1189"
                                        class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1190"
                                        class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                                    <rect id="SvgjsRect1193" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1194" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light"
                                style="left: 145.709px; top: 126.233px;">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">15
                                    PM
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 158, 247);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label">Inbound Calls: </span><span
                                                class="apexcharts-tooltip-text-y-value">70</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(80, 205, 137);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label">Outbound Calls: </span><span
                                                class="apexcharts-tooltip-text-y-value">115</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 158, 247);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(80, 205, 137);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                style="left: 281.904px; top: 253.82px;">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="font-family: inherit; font-size: 12px; min-width: 31.1191px;">15 PM</div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                        <div id="apexchartsmz1ngh9y" class="apexcharts-canvas apexchartsmz1ngh9y apexcharts-theme-light"
                            style="width: 581.5px; height: 300px;"><svg id="SvgjsSvg1006" width="581.5"
                                height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="581.5" height="300">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 150px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1046" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1109" class="apexcharts-yaxis" rel="0"
                                    transform="translate(17.19921875, 0)">
                                    <g id="SvgjsG1110" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1112"
                                            font-family="inherit" x="20" y="31.6" text-anchor="end"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1113">120</tspan>
                                            <title>120</title>
                                        </text><text id="SvgjsText1115" font-family="inherit" x="20" y="68.57"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1116">105</tspan>
                                            <title>105</title>
                                        </text><text id="SvgjsText1118" font-family="inherit" x="20"
                                            y="105.53999999999999" text-anchor="end" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1119">90</tspan>
                                            <title>90</title>
                                        </text><text id="SvgjsText1121" font-family="inherit" x="20" y="142.51"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1122">75</tspan>
                                            <title>75</title>
                                        </text><text id="SvgjsText1124" font-family="inherit" x="20" y="179.48"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1125">60</tspan>
                                            <title>60</title>
                                        </text><text id="SvgjsText1127" font-family="inherit" x="20" y="216.45"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1128">45</tspan>
                                            <title>45</title>
                                        </text><text id="SvgjsText1130" font-family="inherit" x="20" y="253.42"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1131">30</tspan>
                                            <title>30</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(47.19921875, 30)">
                                    <defs id="SvgjsDefs1007">
                                        <linearGradient id="SvgjsLinearGradient1018" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1019" stop-opacity="0.4"
                                                stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop>
                                            <stop id="SvgjsStop1020" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1021" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient1027" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1028" stop-opacity="0.4"
                                                stop-color="rgba(80,205,137,0.4)" offset="0.15"></stop>
                                            <stop id="SvgjsStop1029" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1030" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="SvgjsG1033" class="apexcharts-grid">
                                        <g id="SvgjsG1034" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1038" x1="0" y1="36.97" x2="524.30078125"
                                                y2="36.97" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1039" x1="0" y1="73.94" x2="524.30078125"
                                                y2="73.94" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1040" x1="0" y1="110.91" x2="524.30078125"
                                                y2="110.91" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1041" x1="0" y1="147.88" x2="524.30078125"
                                                y2="147.88" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1042" x1="0" y1="184.85" x2="524.30078125"
                                                y2="184.85" stroke="#dbdfe9" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1035" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1045" x1="0" y1="221.82" x2="524.30078125"
                                            y2="221.82" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1044" x1="0" y1="1" x2="0"
                                            y2="221.82" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1014" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG1015" class="apexcharts-series" seriesName="InboundxCalls"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1022"
                                                d="M0 221.82L0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 "
                                                fill="url(#SvgjsLinearGradient1018)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskmz1ngh9y)"
                                                pathTo="M 0 221.82 L 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C 524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M 524.30078125 172.52666666666667z"
                                                pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76">
                                            </path>
                                            <path id="SvgjsPath1023"
                                                d="M0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 "
                                                fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskmz1ngh9y)"
                                                pathTo="M 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667"
                                                pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1016"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1137" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker wz32f7j9w no-pointer-events"
                                                        stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1024" class="apexcharts-series" seriesName="OutboundxCalls"
                                            data:longestSeries="true" rel="2" data:realIndex="1">
                                            <path id="SvgjsPath1031"
                                                d="M0 221.82L0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 "
                                                fill="url(#SvgjsLinearGradient1027)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="1"
                                                clip-path="url(#gridRectMaskmz1ngh9y)"
                                                pathTo="M 0 221.82 L 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C 524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M 524.30078125 86.26333333333335z"
                                                pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76">
                                            </path>
                                            <path id="SvgjsPath1032"
                                                d="M0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 "
                                                fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                class="apexcharts-area" index="1"
                                                clip-path="url(#gridRectMaskmz1ngh9y)"
                                                pathTo="M 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335"
                                                pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1025"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="1">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1138" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker w54ufpone no-pointer-events"
                                                        stroke="#50cd89" fill="#50cd89" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1073" class="apexcharts-datalabels" data:realindex="0"></g>
                                        <g id="SvgjsG1082" class="apexcharts-datalabels" data:realindex="1"></g>
                                        <g id="SvgjsG1017" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1026" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <g id="SvgjsG1036" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1037" x1="0" y1="0" x2="524.30078125"
                                            y2="0" stroke="#dbdfe9" stroke-dasharray="4"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1043" x1="0" y1="221.82" x2="524.30078125"
                                            y2="221.82" stroke="#dbdfe9" stroke-dasharray="4"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <line id="SvgjsLine1047" x1="0" y1="0" x2="0"
                                        y2="221.82" stroke="#009ef7 #50cd89" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                        width="1" height="221.82" fill="#b1b9c4" filter="none"
                                        fill-opacity="0.9" stroke-width="1"></line>
                                    <line id="SvgjsLine1048" x1="0" y1="0" x2="524.30078125"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1049" x1="0" y1="0" x2="524.30078125"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1050" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1051" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, 6.0225)"><text id="SvgjsText1053"
                                                font-family="inherit" x="0" y="244.82" text-anchor="end"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1054"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1056" font-family="inherit" x="29.127821180555557"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1057"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1059" font-family="inherit" x="58.25564236111111"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1060"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1062" font-family="inherit" x="87.38346354166666"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 88.46256256103516 239.32000732421875)">
                                                <tspan id="SvgjsTspan1063">9 AM</tspan>
                                                <title>9 AM</title>
                                            </text><text id="SvgjsText1065" font-family="inherit" x="116.51128472222223"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1066"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1068" font-family="inherit" x="145.63910590277777"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1069"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1071" font-family="inherit" x="174.76692708333331"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 175.8470001220703 239.32000732421875)">
                                                <tspan id="SvgjsTspan1072">12 PM</tspan>
                                                <title>12 PM</title>
                                            </text><text id="SvgjsText1074" font-family="inherit" x="203.89474826388886"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1075"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1077" font-family="inherit" x="233.0225694444444"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1078"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1080" font-family="inherit" x="262.15039062499994"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 263.224609375 239.32000732421875)">
                                                <tspan id="SvgjsTspan1081">15 PM</tspan>
                                                <title>15 PM</title>
                                            </text><text id="SvgjsText1083" font-family="inherit" x="291.2782118055555"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1084"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1086" font-family="inherit" x="320.40603298611103"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1087"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1089" font-family="inherit" x="349.5338541666666"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 350.6119689941406 239.32000732421875)">
                                                <tspan id="SvgjsTspan1090">18 PM</tspan>
                                                <title>18 PM</title>
                                            </text><text id="SvgjsText1092" font-family="inherit" x="378.6616753472221"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1093"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1095" font-family="inherit" x="407.78949652777766"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1096"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1098" font-family="inherit" x="436.9173177083332"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;"
                                                transform="rotate(0 437.9964294433594 239.32000732421875)">
                                                <tspan id="SvgjsTspan1099">19 PM</tspan>
                                                <title>19 PM</title>
                                            </text><text id="SvgjsText1101" font-family="inherit" x="466.04513888888874"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1102"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1104" font-family="inherit" x="495.1729600694443"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1105"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1107" font-family="inherit" x="524.3007812499998"
                                                y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1108"></tspan>
                                                <title></title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1132"
                                        class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1133"
                                        class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1134"
                                        class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                                    <rect id="SvgjsRect1139" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1140" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-flush overflow-hidden h-lg-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Performance</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                            <!--begin::Display range-->
                            <div class="text-gray-600 fw-bold">12 Jan 2025</div>
                            <!--end::Display range-->
                            <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
                        </div>
                        <!--end::Daterangepicker-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end p-0">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px; min-height: 315px;">
                        <div id="apexchartsc2vrkh4o" class="apexcharts-canvas apexchartsc2vrkh4o apexcharts-theme-light" style="width: 581.5px; height: 300px;"><svg id="SvgjsSvg1062" width="581.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="581.5" height="300">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1102" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1165" class="apexcharts-yaxis" rel="0" transform="translate(17.19921875, 0)">
                                    <g id="SvgjsG1166" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1168" font-family="inherit" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1169">120</tspan>
                                            <title>120</title>
                                        </text><text id="SvgjsText1171" font-family="inherit" x="20" y="68.57" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1172">105</tspan>
                                            <title>105</title>
                                        </text><text id="SvgjsText1174" font-family="inherit" x="20" y="105.53999999999999" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1175">90</tspan>
                                            <title>90</title>
                                        </text><text id="SvgjsText1177" font-family="inherit" x="20" y="142.51" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1178">75</tspan>
                                            <title>75</title>
                                        </text><text id="SvgjsText1180" font-family="inherit" x="20" y="179.48" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1181">60</tspan>
                                            <title>60</title>
                                        </text><text id="SvgjsText1183" font-family="inherit" x="20" y="216.45" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1184">45</tspan>
                                            <title>45</title>
                                        </text><text id="SvgjsText1186" font-family="inherit" x="20" y="253.42" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1187">30</tspan>
                                            <title>30</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1064" class="apexcharts-inner apexcharts-graphical" transform="translate(47.19921875, 30)">
                                    <defs id="SvgjsDefs1063">
                                        <clipPath id="gridRectMaskc2vrkh4o">
                                            <rect id="SvgjsRect1068" width="531.30078125" height="224.82" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskc2vrkh4o"></clipPath>
                                        <clipPath id="nonForecastMaskc2vrkh4o"></clipPath>
                                        <clipPath id="gridRectMarkerMaskc2vrkh4o">
                                            <rect id="SvgjsRect1069" width="528.30078125" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient1074" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1075" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop>
                                            <stop id="SvgjsStop1076" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1077" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient1083" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1084" stop-opacity="0.4" stop-color="rgba(80,205,137,0.4)" offset="0.15"></stop>
                                            <stop id="SvgjsStop1085" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1086" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                    <clipPath id="gridRectMaskmz1ngh9y"><rect id="SvgjsRect1012" width="531.30078125" height="224.82" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskmz1ngh9y"></clipPath><clipPath id="nonForecastMaskmz1ngh9y"></clipPath><clipPath id="gridRectMarkerMaskmz1ngh9y"><rect id="SvgjsRect1013" width="528.30078125" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs>
                                    <g id="SvgjsG1089" class="apexcharts-grid">
                                        <g id="SvgjsG1090" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1094" x1="0" y1="36.97" x2="524.30078125" y2="36.97" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1095" x1="0" y1="73.94" x2="524.30078125" y2="73.94" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1096" x1="0" y1="110.91" x2="524.30078125" y2="110.91" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1097" x1="0" y1="147.88" x2="524.30078125" y2="147.88" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1098" x1="0" y1="184.85" x2="524.30078125" y2="184.85" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1091" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1101" x1="0" y1="221.82" x2="524.30078125" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1100" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1070" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG1071" class="apexcharts-series" seriesname="InboundxCalls" data:longestseries="true" rel="1" data:realindex="0">
                                            <path id="SvgjsPath1078" d="M0 221.82L0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 " fill="url(#SvgjsLinearGradient1074)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc2vrkh4o)" pathto="M 0 221.82 L 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C 524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M 524.30078125 172.52666666666667z" pathfrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76">
                                            </path>
                                            <path id="SvgjsPath1079" d="M0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 " fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc2vrkh4o)" pathto="M 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667" pathfrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76" fill-rule="evenodd"></path>
                                            <g id="SvgjsG1072" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realindex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1191" r="0" cx="262.150390625" cy="123.23333333333335" class="apexcharts-marker wezzu9df3 no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            <g class="apexcharts-series-markers"><circle id="SvgjsCircle1135" r="0" cx="0" cy="0" class="apexcharts-marker w70ha1qfr no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g>
                                        </g>
                                        <g id="SvgjsG1080" class="apexcharts-series" seriesname="OutboundxCalls" data:longestseries="true" rel="2" data:realindex="1">
                                            <path id="SvgjsPath1087" d="M0 221.82L0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 " fill="url(#SvgjsLinearGradient1083)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskc2vrkh4o)" pathto="M 0 221.82 L 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C 524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M 524.30078125 86.26333333333335z" pathfrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76">
                                            </path>
                                            <path id="SvgjsPath1088" d="M0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 " fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskc2vrkh4o)" pathto="M 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335" pathfrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76" fill-rule="evenodd"></path>
                                            <g id="SvgjsG1081" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realindex="1">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1192" r="0" cx="262.150390625" cy="12.323333333333323" class="apexcharts-marker wefyqcxh no-pointer-events" stroke="#50cd89" fill="#50cd89" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            <g class="apexcharts-series-markers"><circle id="SvgjsCircle1136" r="0" cx="0" cy="0" class="apexcharts-marker wnwwmkygi no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g>
                                        </g>
                                        
                                        
                                    </g>
                                    <g id="SvgjsG1092" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1093" x1="0" y1="0" x2="524.30078125" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1099" x1="0" y1="221.82" x2="524.30078125" y2="221.82" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <line id="SvgjsLine1103" x1="261.650390625" y1="0" x2="261.650390625" y2="221.82" stroke="#009ef7 #50cd89" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="261.650390625" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                    <line id="SvgjsLine1104" x1="0" y1="0" x2="524.30078125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1105" x1="0" y1="0" x2="524.30078125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1106" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1107" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1109" font-family="inherit" x="0" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1110"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1112" font-family="inherit" x="29.127821180555557" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1113"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1115" font-family="inherit" x="58.25564236111111" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1116"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1118" font-family="inherit" x="87.38346354166666" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 73.49381256103516 239.32000732421875)">
                                                <tspan id="SvgjsTspan1119">9 AM</tspan>
                                                <title>9 AM</title>
                                            </text><text id="SvgjsText1121" font-family="inherit" x="116.51128472222223" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1122"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1124" font-family="inherit" x="145.63910590277777" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1125"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1127" font-family="inherit" x="174.76692708333331" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 158.8079376220703 239.32000732421875)">
                                                <tspan id="SvgjsTspan1128">12 PM</tspan>
                                                <title>12 PM</title>
                                            </text><text id="SvgjsText1130" font-family="inherit" x="203.89474826388886" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1131"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1133" font-family="inherit" x="233.0225694444444" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1134"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1136" font-family="inherit" x="262.15039062499994" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 246.279296875 239.32000732421875)">
                                                <tspan id="SvgjsTspan1137">15 PM</tspan>
                                                <title>15 PM</title>
                                            </text><text id="SvgjsText1139" font-family="inherit" x="291.2782118055555" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1140"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1142" font-family="inherit" x="320.40603298611103" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1143"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1145" font-family="inherit" x="349.5338541666666" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 333.5182189941406 239.32000732421875)">
                                                <tspan id="SvgjsTspan1146">18 PM</tspan>
                                                <title>18 PM</title>
                                            </text><text id="SvgjsText1148" font-family="inherit" x="378.6616753472221" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1149"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1151" font-family="inherit" x="407.78949652777766" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1152"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1154" font-family="inherit" x="436.9173177083332" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 420.8948669433594 239.32000732421875)">
                                                <tspan id="SvgjsTspan1155">19 PM</tspan>
                                                <title>19 PM</title>
                                            </text><text id="SvgjsText1157" font-family="inherit" x="466.04513888888874" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1158"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1160" font-family="inherit" x="495.1729600694443" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1161"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1163" font-family="inherit" x="524.3007812499998" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1164"></tspan>
                                                <title></title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1188" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1189" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1190" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                                    <rect id="SvgjsRect1193" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1194" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 145.709px; top: 126.233px;">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">15 PM
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Inbound Calls: </span><span class="apexcharts-tooltip-text-y-value">70</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Outbound Calls: </span><span class="apexcharts-tooltip-text-y-value">115</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 281.904px; top: 253.82px;">
                                <div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px; min-width: 31.1191px;">15 PM</div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    <div id="apexchartsmz1ngh9y" class="apexcharts-canvas apexchartsmz1ngh9y apexcharts-theme-light" style="width: 581.5px; height: 300px;"><svg id="SvgjsSvg1006" width="581.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="581.5" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1046" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1109" class="apexcharts-yaxis" rel="0" transform="translate(17.19921875, 0)"><g id="SvgjsG1110" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1112" font-family="inherit" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1113">120</tspan><title>120</title></text><text id="SvgjsText1115" font-family="inherit" x="20" y="68.57" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1116">105</tspan><title>105</title></text><text id="SvgjsText1118" font-family="inherit" x="20" y="105.53999999999999" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1119">90</tspan><title>90</title></text><text id="SvgjsText1121" font-family="inherit" x="20" y="142.51" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1122">75</tspan><title>75</title></text><text id="SvgjsText1124" font-family="inherit" x="20" y="179.48" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1125">60</tspan><title>60</title></text><text id="SvgjsText1127" font-family="inherit" x="20" y="216.45" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1128">45</tspan><title>45</title></text><text id="SvgjsText1130" font-family="inherit" x="20" y="253.42" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1131">30</tspan><title>30</title></text></g></g><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(47.19921875, 30)"><defs id="SvgjsDefs1007"><linearGradient id="SvgjsLinearGradient1018" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1019" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop><stop id="SvgjsStop1020" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop1021" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1027" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1028" stop-opacity="0.4" stop-color="rgba(80,205,137,0.4)" offset="0.15"></stop><stop id="SvgjsStop1029" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop1030" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1033" class="apexcharts-grid"><g id="SvgjsG1034" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1038" x1="0" y1="36.97" x2="524.30078125" y2="36.97" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1039" x1="0" y1="73.94" x2="524.30078125" y2="73.94" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1040" x1="0" y1="110.91" x2="524.30078125" y2="110.91" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1041" x1="0" y1="147.88" x2="524.30078125" y2="147.88" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1042" x1="0" y1="184.85" x2="524.30078125" y2="184.85" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1035" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1045" x1="0" y1="221.82" x2="524.30078125" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1044" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1014" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1015" class="apexcharts-series" seriesName="InboundxCalls" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1022" d="M0 221.82L0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 " fill="url(#SvgjsLinearGradient1018)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmz1ngh9y)" pathTo="M 0 221.82 L 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C 524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 221.82M 524.30078125 172.52666666666667z" pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76"></path><path id="SvgjsPath1023" d="M0 135.55666666666667C10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667C524.30078125 172.52666666666667 524.30078125 172.52666666666667 524.30078125 172.52666666666667 " fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmz1ngh9y)" pathTo="M 0 135.55666666666667C 10.194737413194444 135.55666666666667 18.93308376736111 98.58666666666667 29.127821180555554 98.58666666666667C 39.322558593749996 98.58666666666667 48.06090494791666 98.58666666666667 58.25564236111111 98.58666666666667C 68.45037977430555 98.58666666666667 77.18872612847221 147.88 87.38346354166666 147.88C 97.5782009548611 147.88 106.31654730902777 147.88 116.51128472222221 147.88C 126.70602213541666 147.88 135.44436848958333 184.85 145.63910590277777 184.85C 155.83384331597222 184.85 164.57218967013887 184.85 174.76692708333331 184.85C 184.96166449652776 184.85 193.70001085069444 98.58666666666667 203.89474826388889 98.58666666666667C 214.08948567708333 98.58666666666667 222.82783203124998 98.58666666666667 233.02256944444443 98.58666666666667C 243.21730685763887 98.58666666666667 251.95565321180555 123.23333333333335 262.150390625 123.23333333333335C 272.34512803819445 123.23333333333335 281.0834743923611 123.23333333333335 291.27821180555554 123.23333333333335C 301.47294921875 123.23333333333335 310.21129557291664 73.94 320.4060329861111 73.94C 330.60077039930553 73.94 339.3391167534722 73.94 349.53385416666663 73.94C 359.7285915798611 73.94 368.4669379340277 98.58666666666667 378.6616753472222 98.58666666666667C 388.8564127604166 98.58666666666667 397.5947591145833 98.58666666666667 407.78949652777777 98.58666666666667C 417.9842339409722 98.58666666666667 426.72258029513887 98.58666666666667 436.9173177083333 98.58666666666667C 447.11205512152776 98.58666666666667 455.8504014756944 147.88 466.04513888888886 147.88C 476.2398763020833 147.88 484.97822265624995 147.88 495.1729600694444 147.88C 505.36769748263885 147.88 514.1060438368055 172.52666666666667 524.30078125 172.52666666666667" pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76" fill-rule="evenodd"></path><g id="SvgjsG1016" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1137" r="0" cx="0" cy="0" class="apexcharts-marker wz32f7j9w no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1024" class="apexcharts-series" seriesName="OutboundxCalls" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1031" d="M0 221.82L0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 " fill="url(#SvgjsLinearGradient1027)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskmz1ngh9y)" pathTo="M 0 221.82 L 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C 524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 221.82M 524.30078125 86.26333333333335z" pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76"></path><path id="SvgjsPath1032" d="M0 73.94C10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335C524.30078125 86.26333333333335 524.30078125 86.26333333333335 524.30078125 86.26333333333335 " fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskmz1ngh9y)" pathTo="M 0 73.94C 10.194737413194444 73.94 18.93308376736111 24.646666666666704 29.127821180555554 24.646666666666704C 39.322558593749996 24.646666666666704 48.06090494791666 24.646666666666704 58.25564236111111 24.646666666666704C 68.45037977430555 24.646666666666704 77.18872612847221 61.616666666666674 87.38346354166666 61.616666666666674C 97.5782009548611 61.616666666666674 106.31654730902777 61.616666666666674 116.51128472222221 61.616666666666674C 126.70602213541666 61.616666666666674 135.44436848958333 86.26333333333335 145.63910590277777 86.26333333333335C 155.83384331597222 86.26333333333335 164.57218967013887 86.26333333333335 174.76692708333331 86.26333333333335C 184.96166449652776 86.26333333333335 193.70001085069444 61.616666666666674 203.89474826388889 61.616666666666674C 214.08948567708333 61.616666666666674 222.82783203124998 61.616666666666674 233.02256944444443 61.616666666666674C 243.21730685763887 61.616666666666674 251.95565321180555 12.323333333333323 262.150390625 12.323333333333323C 272.34512803819445 12.323333333333323 281.0834743923611 12.323333333333323 291.27821180555554 12.323333333333323C 301.47294921875 12.323333333333323 310.21129557291664 49.29333333333335 320.4060329861111 49.29333333333335C 330.60077039930553 49.29333333333335 339.3391167534722 49.29333333333335 349.53385416666663 49.29333333333335C 359.7285915798611 49.29333333333335 368.4669379340277 12.323333333333323 378.6616753472222 12.323333333333323C 388.8564127604166 12.323333333333323 397.5947591145833 12.323333333333323 407.78949652777777 12.323333333333323C 417.9842339409722 12.323333333333323 426.72258029513887 61.616666666666674 436.9173177083333 61.616666666666674C 447.11205512152776 61.616666666666674 455.8504014756944 61.616666666666674 466.04513888888886 61.616666666666674C 476.2398763020833 61.616666666666674 484.97822265624995 86.26333333333335 495.1729600694444 86.26333333333335C 505.36769748263885 86.26333333333335 514.1060438368055 86.26333333333335 524.30078125 86.26333333333335" pathFrom="M -1 295.76 L -1 295.76 L 29.127821180555554 295.76 L 58.25564236111111 295.76 L 87.38346354166666 295.76 L 116.51128472222221 295.76 L 145.63910590277777 295.76 L 174.76692708333331 295.76 L 203.89474826388889 295.76 L 233.02256944444443 295.76 L 262.150390625 295.76 L 291.27821180555554 295.76 L 320.4060329861111 295.76 L 349.53385416666663 295.76 L 378.6616753472222 295.76 L 407.78949652777777 295.76 L 436.9173177083333 295.76 L 466.04513888888886 295.76 L 495.1729600694444 295.76 L 524.30078125 295.76" fill-rule="evenodd"></path><g id="SvgjsG1025" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1138" r="0" cx="0" cy="0" class="apexcharts-marker w54ufpone no-pointer-events" stroke="#50cd89" fill="#50cd89" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1073" class="apexcharts-datalabels" data:realindex="0"></g><g id="SvgjsG1082" class="apexcharts-datalabels" data:realindex="1"></g><g id="SvgjsG1017" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1026" class="apexcharts-datalabels" data:realIndex="1"></g></g><g id="SvgjsG1036" class="apexcharts-grid-borders"><line id="SvgjsLine1037" x1="0" y1="0" x2="524.30078125" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1043" x1="0" y1="221.82" x2="524.30078125" y2="221.82" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1047" x1="0" y1="0" x2="0" y2="221.82" stroke="#009ef7 #50cd89" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1048" x1="0" y1="0" x2="524.30078125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1049" x1="0" y1="0" x2="524.30078125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1050" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1051" class="apexcharts-xaxis-texts-g" transform="translate(0, 6.0225)"><text id="SvgjsText1053" font-family="inherit" x="0" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1054"></tspan><title></title></text><text id="SvgjsText1056" font-family="inherit" x="29.127821180555557" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1057"></tspan><title></title></text><text id="SvgjsText1059" font-family="inherit" x="58.25564236111111" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1060"></tspan><title></title></text><text id="SvgjsText1062" font-family="inherit" x="87.38346354166666" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 88.46256256103516 239.32000732421875)"><tspan id="SvgjsTspan1063">9 AM</tspan><title>9 AM</title></text><text id="SvgjsText1065" font-family="inherit" x="116.51128472222223" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1066"></tspan><title></title></text><text id="SvgjsText1068" font-family="inherit" x="145.63910590277777" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1069"></tspan><title></title></text><text id="SvgjsText1071" font-family="inherit" x="174.76692708333331" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 175.8470001220703 239.32000732421875)"><tspan id="SvgjsTspan1072">12 PM</tspan><title>12 PM</title></text><text id="SvgjsText1074" font-family="inherit" x="203.89474826388886" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1075"></tspan><title></title></text><text id="SvgjsText1077" font-family="inherit" x="233.0225694444444" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1078"></tspan><title></title></text><text id="SvgjsText1080" font-family="inherit" x="262.15039062499994" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 263.224609375 239.32000732421875)"><tspan id="SvgjsTspan1081">15 PM</tspan><title>15 PM</title></text><text id="SvgjsText1083" font-family="inherit" x="291.2782118055555" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1084"></tspan><title></title></text><text id="SvgjsText1086" font-family="inherit" x="320.40603298611103" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1087"></tspan><title></title></text><text id="SvgjsText1089" font-family="inherit" x="349.5338541666666" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 350.6119689941406 239.32000732421875)"><tspan id="SvgjsTspan1090">18 PM</tspan><title>18 PM</title></text><text id="SvgjsText1092" font-family="inherit" x="378.6616753472221" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1093"></tspan><title></title></text><text id="SvgjsText1095" font-family="inherit" x="407.78949652777766" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1096"></tspan><title></title></text><text id="SvgjsText1098" font-family="inherit" x="436.9173177083332" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 437.9964294433594 239.32000732421875)"><tspan id="SvgjsTspan1099">19 PM</tspan><title>19 PM</title></text><text id="SvgjsText1101" font-family="inherit" x="466.04513888888874" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1102"></tspan><title></title></text><text id="SvgjsText1104" font-family="inherit" x="495.1729600694443" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1105"></tspan><title></title></text><text id="SvgjsText1107" font-family="inherit" x="524.3007812499998" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1108"></tspan><title></title></text></g></g><g id="SvgjsG1132" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1133" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1134" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g><rect id="SvgjsRect1139" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1140" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
@endsection
