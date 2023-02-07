<?php include('../../Layouts/header.php');
include('../../Layouts/Connection.php');
session_start();
if (isset($_SESSION['email'], $_SESSION['password'])) { ?>
<header>
<body>
<main class="w-screen h-screen ">

    <div class="flex relative h-full w-full ">
         <!-- sidebar -->
         <?php include('../../Layouts/sidebar.php') ?>

        <div class="w-full h-full overflow-x-hidden relative flex flex-col">
        <!-- header -->
            <div id="visitor-header" class="absolute bg-white z-[60] top-0 r-0 l-0  w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center ">
                      <?php include('../../Layouts/navbar.php') ?>
                </div>
            </div>
            <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcontractor</title>
    <meta name="description" content="">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
        
    </style>
</head>

    </body>
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <div>
        <a href="/logistic-2/Pages/Vendor-Portal/Dashboard.php">
            
        </button>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
    </a>
</button>
    </div>
    
           
    <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
<div class="flex items-center justify-between mb-4">
<div class="flex-shrink-0">
<span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">Supplier Item</span>
<h3 class="text-base font-normal text-gray-500">Auction</h3>
</div>
<div class="flex items-center justify-end flex-1 text-green-500 text-base font-bold">
12.5%
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
</svg>
</div>
</div>
<div id="main-chart" style="min-height: 435px;">
<div id="apexcharts6ctvzxad" class="apexcharts-canvas apexcharts6ctvzxad apexcharts-theme-light" style="width: 762px; height: 420px;">
<svg id="SvgjsSvg1106" width="762" height="420" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
    <g id="SvgjsG1108" class="apexcharts-inner apexcharts-graphical" transform="translate(71.13917541503906, 30)">
        <defs id="SvgjsDefs1107">
            <clipPath id="gridRectMask6ctvzxad">
        <rect id="SvgjsRect1114" width="665.2543106079102" height="351.494" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">

    </rect>
</clipPath>
<clipPath id="forecastMask6ctvzxad">

</clipPath>
<clipPath id="nonForecastMask6ctvzxad">

</clipPath>
<clipPath id="gridRectMarkerMask6ctvzxad">
    <rect id="SvgjsRect1115" width="661.2543106079102" height="351.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">

    </rect>
</clipPath>
</defs>
<line id="SvgjsLine1113" x1="328.1271553039551" y1="0" x2="328.1271553039551" y2="347.494" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="328.1271553039551" y="0" width="1" height="347.494" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">

</line><g id="SvgjsG1122" class="apexcharts-xaxis" transform="translate(0, 0)">
    <g id="SvgjsG1123" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1125" font-family="Inter, sans-serif" x="0" y="376.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, sans-serif;">
        <tspan id="SvgjsTspan1126">01 Feb</tspan>
        <title>01 Feb</title>
    </text>
    <text id="SvgjsText1128" font-family="Inter, sans-serif" x="109.54238510131836" y="376.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, sans-serif;">
        <tspan id="SvgjsTspan1129">02 Feb</tspan>
        <title>02 Feb</title>
    </text>
    <text id="SvgjsText1131" font-family="Inter, sans-serif" x="219.08477020263672" y="376.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, sans-serif;">
        <tspan id="SvgjsTspan1132">03 Feb</tspan>
    <title>03 Feb</title>
</text>
<text id="SvgjsText1134" font-family="Inter, sans-serif" x="328.6271553039551" y="376.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, sans-serif;">
    <tspan id="SvgjsTspan1135">04 Feb</tspan>
    <title>04 Feb</title>
</text>
<text id="SvgjsText1137" font-family="Inter, sans-serif" x="438.16954040527344" y="376.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, sans-serif;">
    <tspan id="SvgjsTspan1138">05 Feb</tspan>
    <title>05 Feb</title>
</text>
<text id="SvgjsText1140" font-family="Inter, sans-serif" x="547.7119255065918" y="376.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, sans-serif;">
    <tspan id="SvgjsTspan1141">06 Feb</tspan>
    <title>06 Feb</title>
</text>
<text id="SvgjsText1143" font-family="Inter, sans-serif" x="657.2543106079102" y="376.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, sans-serif;">
    <tspan id="SvgjsTspan1144">07 Feb</tspan>
    <title>07 Feb</title>
</text>
</g>
<line id="SvgjsLine1145" x1="0" y1="348.494" x2="657.2543106079102" y2="348.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt">

</line>
</g>
<g id="SvgjsG1162" class="apexcharts-grid">
    <g id="SvgjsG1163" class="apexcharts-gridlines-horizontal" style="display: none;">
        <line id="SvgjsLine1172" x1="0" y1="0" x2="657.2543106079102" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

        </line>
        <line id="SvgjsLine1173" x1="0" y1="57.915666666666674" x2="657.2543106079102" y2="57.915666666666674" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

        </line>
        <line id="SvgjsLine1174" x1="0" y1="115.83133333333335" x2="657.2543106079102" y2="115.83133333333335" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

        </line>
        <line id="SvgjsLine1175" x1="0" y1="173.747" x2="657.2543106079102" y2="173.747" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

        </line>
        <line id="SvgjsLine1176" x1="0" y1="231.6626666666667" x2="657.2543106079102" y2="231.6626666666667" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

        </line>
        <line id="SvgjsLine1177" x1="0" y1="289.5783333333334" x2="657.2543106079102" y2="289.5783333333334" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

        </line>
        <line id="SvgjsLine1178" x1="0" y1="347.494" x2="657.2543106079102" y2="347.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

        </line>
    </g>
    <g id="SvgjsG1164" class="apexcharts-gridlines-vertical" style="display: none;">

    </g>
    <line id="SvgjsLine1165" x1="0" y1="348.494" x2="0" y2="354.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

    </line>
    <line id="SvgjsLine1166" x1="109.54238510131836" y1="348.494" x2="109.54238510131836" y2="354.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

    </line>
    <line id="SvgjsLine1167" x1="219.08477020263672" y1="348.494" x2="219.08477020263672" y2="354.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

    </line>
    <line id="SvgjsLine1168" x1="328.6271553039551" y1="348.494" x2="328.6271553039551" y2="354.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

    </line>
    <line id="SvgjsLine1169" x1="438.16954040527344" y1="348.494" x2="438.16954040527344" y2="354.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

    </line>
    <line id="SvgjsLine1170" x1="547.7119255065918" y1="348.494" x2="547.7119255065918" y2="354.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

    </line>
    <line id="SvgjsLine1171" x1="657.2543106079102" y1="348.494" x2="657.2543106079102" y2="354.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

    </line>
    <line id="SvgjsLine1180" x1="0" y1="347.494" x2="657.2543106079102" y2="347.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">

    </line>
    <line id="SvgjsLine1179" x1="0" y1="1" x2="0" y2="347.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">

    </line>
</g>
<g id="SvgjsG1116" class="apexcharts-area-series apexcharts-plot-series">
    <g id="SvgjsG1117" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="0">
        <path id="SvgjsPath1120" d="M 0 347.494L 0 141.31422666666685C 38.33983478546143 141.31422666666685 71.20255031585694 221.23784666666643 109.54238510131837 221.23784666666643C 147.8822198867798 221.23784666666643 180.74493541717533 257.14555999999993 219.08477020263675 257.14555999999993C 257.42460498809817 257.14555999999993 290.2873205184937 42.85759333333317 328.6271553039551 42.85759333333317C 366.9669900894165 42.85759333333317 399.82970561981205 141.31422666666685 438.1695404052735 141.31422666666685C 476.5093751907349 141.31422666666685 509.3720907211304 199.22989333333317 547.7119255065918 199.22989333333317C 586.0517602920532 199.22989333333317 618.9144758224487 315.0612266666667 657.2543106079102 315.0612266666667C 657.2543106079102 315.0612266666667 657.2543106079102 315.0612266666667 657.2543106079102 347.494M 657.2543106079102 315.0612266666667z" fill="rgba(6,148,162,0.3)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6ctvzxad)" pathTo="M 0 347.494L 0 141.31422666666685C 38.33983478546143 141.31422666666685 71.20255031585694 221.23784666666643 109.54238510131837 221.23784666666643C 147.8822198867798 221.23784666666643 180.74493541717533 257.14555999999993 219.08477020263675 257.14555999999993C 257.42460498809817 257.14555999999993 290.2873205184937 42.85759333333317 328.6271553039551 42.85759333333317C 366.9669900894165 42.85759333333317 399.82970561981205 141.31422666666685 438.1695404052735 141.31422666666685C 476.5093751907349 141.31422666666685 509.3720907211304 199.22989333333317 547.7119255065918 199.22989333333317C 586.0517602920532 199.22989333333317 618.9144758224487 315.0612266666667 657.2543106079102 315.0612266666667C 657.2543106079102 315.0612266666667 657.2543106079102 315.0612266666667 657.2543106079102 347.494M 657.2543106079102 315.0612266666667z" pathFrom="M -1 3822.434L -1 3822.434L 109.54238510131837 3822.434L 219.08477020263675 3822.434L 328.6271553039551 3822.434L 438.1695404052735 3822.434L 547.7119255065918 3822.434L 657.2543106079102 3822.434">

        </path>
        <path id="SvgjsPath1121" d="M 0 141.31422666666685C 38.33983478546143 141.31422666666685 71.20255031585694 221.23784666666643 109.54238510131837 221.23784666666643C 147.8822198867798 221.23784666666643 180.74493541717533 257.14555999999993 219.08477020263675 257.14555999999993C 257.42460498809817 257.14555999999993 290.2873205184937 42.85759333333317 328.6271553039551 42.85759333333317C 366.9669900894165 42.85759333333317 399.82970561981205 141.31422666666685 438.1695404052735 141.31422666666685C 476.5093751907349 141.31422666666685 509.3720907211304 199.22989333333317 547.7119255065918 199.22989333333317C 586.0517602920532 199.22989333333317 618.9144758224487 315.0612266666667 657.2543106079102 315.0612266666667" fill="none" fill-opacity="1" stroke="#0694a2" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6ctvzxad)" pathTo="M 0 141.31422666666685C 38.33983478546143 141.31422666666685 71.20255031585694 221.23784666666643 109.54238510131837 221.23784666666643C 147.8822198867798 221.23784666666643 180.74493541717533 257.14555999999993 219.08477020263675 257.14555999999993C 257.42460498809817 257.14555999999993 290.2873205184937 42.85759333333317 328.6271553039551 42.85759333333317C 366.9669900894165 42.85759333333317 399.82970561981205 141.31422666666685 438.1695404052735 141.31422666666685C 476.5093751907349 141.31422666666685 509.3720907211304 199.22989333333317 547.7119255065918 199.22989333333317C 586.0517602920532 199.22989333333317 618.9144758224487 315.0612266666667 657.2543106079102 315.0612266666667" pathFrom="M -1 3822.434L -1 3822.434L 109.54238510131837 3822.434L 219.08477020263675 3822.434L 328.6271553039551 3822.434L 438.1695404052735 3822.434L 547.7119255065918 3822.434L 657.2543106079102 3822.434">

        </path>
        <g id="SvgjsG1118" class="apexcharts-series-markers-wrap" data:realIndex="0">
            <g class="apexcharts-series-markers">
                <circle id="SvgjsCircle1186" r="0" cx="328.6271553039551" cy="42.85759333333317" class="apexcharts-marker waz65mkfvf no-pointer-events" stroke="#ffffff" fill="#0694a2" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0">

                </circle>
            </g>
        </g>
    </g>
    <g id="SvgjsG1119" class="apexcharts-datalabels" data:realIndex="0">

    </g>
</g>
<line id="SvgjsLine1181" x1="0" y1="0" x2="657.2543106079102" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">

</line>
<line id="SvgjsLine1182" x1="0" y1="0" x2="657.2543106079102" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">

</line>
<g id="SvgjsG1183" class="apexcharts-yaxis-annotations">

</g>
<g id="SvgjsG1184" class="apexcharts-xaxis-annotations">

</g>
<g id="SvgjsG1185" class="apexcharts-point-annotations">

</g>
<rect id="SvgjsRect1187" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect">

</rect>
<rect id="SvgjsRect1188" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect">

</rect>
</g>
<rect id="SvgjsRect1112" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1146" class="apexcharts-yaxis" rel="0" transform="translate(41.13917541503906, 0)"><g id="SvgjsG1147" class="apexcharts-yaxis-texts-g">
    <text id="SvgjsText1148" font-family="Inter, sans-serif" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;">
    <tspan id="SvgjsTspan1149">Awarding</tspan>
    <title>Auction</title>
</text>
<text id="SvgjsText1150" font-family="Inter, sans-serif" x="20" y="89.51566666666668" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1151">Supplier 1</tspan>
<title>Supplier 1</title>
</text>
<text id="SvgjsText1154" font-family="Inter, sans-serif" x="20" y="205.34700000000004" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1155">Supplier 2</tspan>
<title>Supplier 2</title>
</text>
<text id="SvgjsText1158" font-family="Inter, sans-serif" x="20" y="321.1783333333334" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1159">Supplier 3</tspan>
<title>Supplier 3</title>
</text>
</g>
</g>
<g id="SvgjsG1109" class="apexcharts-annotations">

</g>
</svg>
<div class="apexcharts-legend" style="max-height: 210px;"></div>
<div class="apexcharts-tooltip apexcharts-theme-light" style="left: 233.235px; top: 45.8576px;">
<div class="apexcharts-tooltip-title" style="font-family: Inter, sans-serif; font-size: 14px;">04 Feb</div>
<div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;">
<span class="apexcharts-tooltip-marker" style="background-color: rgb(6, 148, 162);">
</span>
<div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;">
<div class="apexcharts-tooltip-y-group">
    <span class="apexcharts-tooltip-text-y-label">Revenue: </span>
    <span class="apexcharts-tooltip-text-y-value">$6526</span>
</div>
<div class="apexcharts-tooltip-goals-group">
    <span class="apexcharts-tooltip-text-goals-label">

    </span>
    <span class="apexcharts-tooltip-text-goals-value">

    </span>
</div>
<div class="apexcharts-tooltip-z-group">
    <span class="apexcharts-tooltip-text-z-label">

    </span>
    <span class="apexcharts-tooltip-text-z-value">

    </span>
</div>
</div>
</div>
</div>
<div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 363.579px; top: 379.494px;">
<div class="apexcharts-xaxistooltip-text" style="font-family: Inter, sans-serif; font-size: 12px; min-width: 52.8409px;">04 Feb</div>
</div>
<div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
    <div class="apexcharts-yaxistooltip-text">

    </div>
</div>
</div>
</div>
</div>
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">

<div class="mb-4 flex items-center justify-between">
<div>
<h3 class="text-xl font-bold text-gray-900 mb-2">Latest Vote</h3>
<span class="text-base font-normal text-gray-500">This is a list of vote Auction</span>
</div>
<div class="flex-shrink-0">
<a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View all</a>
</div>
</div>

<div class="flex flex-col mt-8">
<div class="overflow-x-auto rounded-lg">
<div class="align-middle inline-block min-w-full">
<div class="shadow overflow-hidden sm:rounded-lg">
<table class="min-w-full divide-y divide-gray-200">
<thead class="bg-gray-50">
<tr>
<th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Transaction
</th>
<th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Date &amp; Time
</th>
<th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Vote
</th>
</tr>
</thead>
<tbody class="bg-white">
<tr>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
 <span class="font-semibold">Daryl Estolonio</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 23 ,2023
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
Supplier 1
</td>
</tr>
<tr class="bg-gray-50">
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
 <span class="font-semibold">Ivan Amolar</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 23 ,2023
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
Supplier 2
</td>
</tr>
<tr>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
<span class="font-semibold">Hans Aeron Bangay</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 18 ,2023
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
Supplier1
</td>
</tr>
<tr class="bg-gray-50">
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
 <span class="font-semibold">Philip Gomera</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 15 ,2023
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
Supplier1
</td>
</tr>
<tr>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
     <span class="font-semibold">Jhona Lazaro</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 15 ,2023
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
Supplier 3
</td>
</tr>
<tr class="bg-gray-50">
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
 <span class="font-semibold">Troy Dugan</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 11 ,2023
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
Supplier 1
</td>
</tr>
<tr>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
 <span class="font-semibold">Geo Ong</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 6 ,2023
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
Supplier 2
</td>
</tr>
</tbody>
</table>
</div>
 </div>
</div>
</div>
</div>
<div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
<div class="flex items-center">
<div class="flex-shrink-0">
<span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">2,340</span>
<h3 class="text-base font-normal text-gray-500">New Supplier this week</h3>
</div>
<div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
14.6%
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
</svg>
</div>
</div>
</div>
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
<div class="flex items-center">
<div class="flex-shrink-0">
<span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">5,355</span>
<h3 class="text-base font-normal text-gray-500">Visitors this week</h3>
</div>
<div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
32.9%
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
</svg>
</div>
</div>
</div>
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
<div class="flex items-center">
<div class="flex-shrink-0">
<span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">385</span>
<h3 class="text-base font-normal text-gray-500">User signups this week</h3>
</div>
<div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
-2.7%
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
</svg>
</div>
</div>
</div>
</div>
<div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
<div class="flex items-center justify-between mb-4">
<h3 class="text-xl font-bold leading-none text-gray-900">Latest Auction Choose</h3>
<a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
View all
</a>
</div>
<div class="flow-root">
<ul role="list" class="divide-y divide-gray-200">
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4">
<div class="flex-shrink-0">
<img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/neil-sims.png" alt="Neil image">
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate">
Daryl Estolonio
</p>
<p class="text-sm text-gray-500 truncate">
daryl@gmail.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
320
</div>
</div>
</li>
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4">
<div class="flex-shrink-0">
<img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/bonnie-green.png" alt="Neil image">
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate">
Ivan Amolar
</p>
<p class="text-sm text-gray-500 truncate">
ivan@gmail.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
$3467
</div>
</div>
</li>
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4">
<div class="flex-shrink-0">
<img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/michael-gough.png" alt="Neil image">
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate">
Hans Aeron Bangay
</p>
<p class="text-sm text-gray-500 truncate">
hans@gmail.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
$67
</div>
</div>
</li>
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4">
<div class="flex-shrink-0">
<img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/thomas-lean.png" alt="Neil image">
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate">
Philip Gomera
</p>
<p class="text-sm text-gray-500 truncate">
philip@gmail.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
$2367
</div>
</div>
</li>
<li class="pt-3 sm:pt-4 pb-0">
<div class="flex items-center space-x-4">
<div class="flex-shrink-0">
<img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/lana-byrd.png" alt="Neil image">
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate">
Jhona Lazaro
</p>
<p class="text-sm text-gray-500 truncate">
jhona@gmail.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
$367
</div>
</div>
</li>
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4">
<div class="flex-shrink-0">
<img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/thomas-lean.png" alt="Neil image">
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate">
Troy Dugan
</p>
<p class="text-sm text-gray-500 truncate">
troy@gmail.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
$2367
</div>
</div>
</li>
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4">
<div class="flex-shrink-0">
<img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/thomas-lean.png" alt="Neil image">
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate">
Geo Ong
</p>
<p class="text-sm text-gray-500 truncate">
geo@gmail.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
$2367
</div>
</div>
</li>
<div>
    
</ul>

</div>
</div>
        </div>
    </div>
</main>
</body>
</html>
</div>
</main>
<?php include('../../Layouts/footer.php');
} else {
header("location:../../Layouts/Login.php");
session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($db); ?>