
<?php include('../../Layouts/header.php');
include('../../Layouts/Connection.php');
session_start();
if (isset($_SESSION['email'], $_SESSION['password'])) { ?>
<header>
<body>
<?php include "../../Layouts/loader.php"?>
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
         <!-- content  start-->
            <div class=" h-[calc(100%-50px)]   mt-14 border">
           

                    <!-- content body -->
                    <body class="bg-purple-200 flex justify-center items-center h-screen">
                    <head>
    <title>Audit Management</title>
</head>


                </div>
                <!-- content body -->
                <div class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200" id="panel">
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" id="navbarTop" navbar-scroll="true"><div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
<nav>
<li class="text-size-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 ]" aria-current="page">Audit Management</li>
</ol>
</nav>
<div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
<div class="flex items-center md:ml-auto md:pr-4">
<div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
<span class="text-size-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">


</a>
</li>
<li class="flex items-center pl-4 xl:hidden">
<a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-size-sm text-slate-500" sidenav-trigger="">
<div class="w-4.5 overflow-hidden">
<i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
<i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
<i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
</div>
</a>
</li>
<li class="flex items-center px-4">
<a href="javascript:;" class="p-0 transition-all text-size-sm ease-nav-brand text-slate-500">
<i fixed-plugin-button-nav="" class="cursor-pointer fa fa-cog" aria-hidden="true"></i>

</a>
</li>

<li class="relative flex items-center pr-2">
<p class="hidden transform-dropdown-show"></p>
<a href="javascript:;" class="block p-0 transition-all text-size-sm ease-nav-brand text-slate-500" dropdown-trigger="" aria-expanded="false">
<i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
</a>
<ul dropdown-menu="" class="text-size-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">

<li class="relative mb-2">
<a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
<div class="flex py-1">
<div class="my-auto">
<img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white text-size-sm h-9 w-9 max-w-none rounded-xl">
</div>
</div>
</a>
</li>
<li class="relative mb-2">
<a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
<div class="flex py-1">
<div class="my-auto">
<img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-white text-size-sm bg-gradient-dark-gray h-9 w-9 max-w-none rounded-xl">
</div>
<div class="flex flex-col justify-center">
</div>
</div>
</a>
</div>
</nav>
                <div class="w-full px-6 py-6 mx-auto drop-zone loopple-min-height-78vh text-slate-500">
                    <div class="flex flex-wrap -mx-3 removable">

<div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 drop-zone">
<div class="relative flex flex-col min-w-0 break-words shadow-soft-xl rounded-2xl bg-clip-border mb-4 draggable" draggable="true">
<div class="flex-auto p-4">
<div class="flex flex-row -mx-3">
<div class="flex-none w-2/2 max-w-full px-3">
<div>
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
<a class="mb-0 font-sans font-semibold leading-normal text-size-sm" href="/logistic-2/Pages/Audit-Management/Audit%20Item.php" >Audit Item</a>
</div>
    </button>
</div>
<div class="px-3 text-right basis-1/3">
<div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
<i class="ni ni-money-coins text-size-lg relative top-3.5 text-white"></i>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 drop-zone">
<div class="relative flex flex-col min-w-0 break-words  shadow-soft-xl rounded-2xl bg-clip-border mb-4 draggable" draggable="true">
<div class="flex-auto p-4">
<div class="flex flex-row -mx-3">
<div class="flex-none w-2/2 max-w-full px-3">
<div>
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
<a class="mb-0 font-sans font-semibold leading-normal text-size-sm" href="">Audit External</a>

    </button>
</div>
</div>
<div class="px-3 text-right basis-1/3">
<div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
<i class="ni ni-world text-size-lg relative top-3.5 text-white" data-selected="selected-icon-hover"></i>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 drop-zone">
<div class="relative flex flex-col min-w-0 break-words shadow-soft-xl rounded-2xl bg-clip-border mb-4 draggable" draggable="true">
<div class="flex-auto p-4">
<div class="flex flex-row -mx-3">
<div class="flex-none w-2/2 max-w-full px-3">
<div>
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
<a class="mb-0 font-sans font-semibold leading-normal text-size-sm" href="/Logistic-2/Pages/Audit-Management/Estimated.php">Audit Estimated</a>
    </button>
</div>
</div>
<div class="px-3 text-right basis-1/3">
<div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
<i class="ni ni-paper-diploma text-size-lg relative top-3.5 text-white"></i>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4 drop-zone">
<div class="relative flex flex-col min-w-0 break-words shadow-soft-xl rounded-2xl bg-clip-border mb-4 draggable" draggable="true">
<div class="flex-auto p-4">
<div class="flex flex-row -mx-3">
<div class="flex-none w-2/2 max-w-full px-3">
<div>
</div>
</div>
<div class="px-3 text-right basis-1/3">
<div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
<i class="ni ni-cart text-size-lg relative top-3.5 text-white"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="pt-6 px-4">
<div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
<div class="flex items-center justify-between mb-4">
<div class="flex-shrink-0">
<h3 class="text-base font-normal text-gray-500">Auditing this week</h3>
</div>
<div class="flex items-center justify-end flex-1 text-green-500 text-base font-bold">
12.5%
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
</svg>
</div>
</div>
<div id="main-chart" style="min-height: 435px;">
<div id="apexchartsc5utnanm" class="apexcharts-canvas apexchartsc5utnanm apexcharts-theme-light" style="width: 356px; height: 420px;">
<svg id="SvgjsSvg1090" width="356" height="420" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
    <g id="SvgjsG1092" class="apexcharts-inner apexcharts-graphical" transform="translate(71.13917541503906, 30)">
        <defs id="SvgjsDefs1091">
        <clipPath id="gridRectMaskc5utnanm">
            <rect id="SvgjsRect1099" width="282.86082458496094" height="362" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">

    </rect>
</clipPath>
<clipPath id="forecastMaskc5utnanm">

</clipPath>
<clipPath id="nonForecastMaskc5utnanm">

</clipPath>
<clipPath id="gridRectMarkerMaskc5utnanm">
    <rect id="SvgjsRect1100" width="278.86082458496094" height="362" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">

    </rect>
</clipPath>
</defs>
<line id="SvgjsLine1098" x1="182.7405497233073" y1="0" x2="182.7405497233073" y2="358" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="182.7405497233073" y="0" width="1" height="358" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">

</line>
<g id="SvgjsG1107" class="apexcharts-xaxis" transform="translate(0, 0)">
    <g id="SvgjsG1108" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)">

    </g>
    <line id="SvgjsLine1116" x1="0" y1="359" x2="274.86082458496094" y2="359" stroke="#f3f4f6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt">

    </line>
</g>
<g id="SvgjsG1133" class="apexcharts-grid">
    <g id="SvgjsG1134" class="apexcharts-gridlines-horizontal" style="display: none;">
        <line id="SvgjsLine1143" x1="0" y1="0" x2="274.86082458496094" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

    </line>
    <line id="SvgjsLine1144" x1="0" y1="59.666666666666664" x2="274.86082458496094" y2="59.666666666666664" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

    </line>
    <line id="SvgjsLine1145" x1="0" y1="119.33333333333333" x2="274.86082458496094" y2="119.33333333333333" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

    </line>
    <line id="SvgjsLine1146" x1="0" y1="179" x2="274.86082458496094" y2="179" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
        
    </line>
    <line id="SvgjsLine1147" x1="0" y1="238.66666666666666" x2="274.86082458496094" y2="238.66666666666666" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

    </line>
    <line id="SvgjsLine1148" x1="0" y1="298.3333333333333" x2="274.86082458496094" y2="298.3333333333333" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

    </line>
    <line id="SvgjsLine1149" x1="0" y1="358" x2="274.86082458496094" y2="358" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">

    </line>
</g>
<g id="SvgjsG1135" class="apexcharts-gridlines-vertical" style="display: none;">

</g>
<line id="SvgjsLine1136" x1="0" y1="359" x2="0" y2="365" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1137" x1="45.81013743082682" y1="359" x2="45.81013743082682" y2="365" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

</line>
<line id="SvgjsLine1138" x1="91.62027486165364" y1="359" x2="91.62027486165364" y2="365" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

</line>
<line id="SvgjsLine1139" x1="137.43041229248047" y1="359" x2="137.43041229248047" y2="365" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1140" x1="183.24054972330728" y1="359" x2="183.24054972330728" y2="365" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1141" x1="229.0506871541341" y1="359" x2="229.0506871541341" y2="365" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">

</line>
<line id="SvgjsLine1142" x1="274.86082458496094" y1="359" x2="274.86082458496094" y2="365" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1151" x1="0" y1="358" x2="274.86082458496094" y2="358" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1150" x1="0" y1="1" x2="0" y2="358" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">

</line>
</g>
<g id="SvgjsG1101" class="apexcharts-area-series apexcharts-plot-series">
    <g id="SvgjsG1102" class="apexcharts-series" seriesName="Revenue" 
    data:longestSeries="true" rel="1" data:realIndex="0">
    <path id="SvgjsPath1105" d="M 0 358L 0 145.5866666666666C 16.03354810078939 145.5866666666666 29.77658933003744 227.92666666666673 45.81013743082683 227.92666666666673C 61.84368553161622 227.92666666666673 75.58672676086427 264.9200000000001 91.62027486165366 264.9200000000001C 107.65382296244304 264.9200000000001 121.39686419169108 44.153333333333194 137.43041229248047 44.153333333333194C 153.46396039326987 44.153333333333194 167.2070016225179 145.5866666666666 183.2405497233073 145.5866666666666C 199.27409782409669 145.5866666666666 213.01713905334475 205.25333333333356 229.05068715413412 205.25333333333356C 245.0842352549235 205.25333333333356 258.82727648417153 324.5866666666666 274.86082458496094 324.5866666666666C 274.86082458496094 324.5866666666666 274.86082458496094 324.5866666666666 274.86082458496094 358M 274.86082458496094 324.5866666666666z" fill="rgba(6,148,162,0.3)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc5utnanm)" pathTo="M 0 358L 0 145.5866666666666C 16.03354810078939 145.5866666666666 29.77658933003744 227.92666666666673 45.81013743082683 227.92666666666673C 61.84368553161622 227.92666666666673 75.58672676086427 264.9200000000001 91.62027486165366 264.9200000000001C 107.65382296244304 264.9200000000001 121.39686419169108 44.153333333333194 137.43041229248047 44.153333333333194C 153.46396039326987 44.153333333333194 167.2070016225179 145.5866666666666 183.2405497233073 145.5866666666666C 199.27409782409669 145.5866666666666 213.01713905334475 205.25333333333356 229.05068715413412 205.25333333333356C 245.0842352549235 205.25333333333356 258.82727648417153 324.5866666666666 274.86082458496094 324.5866666666666C 274.86082458496094 324.5866666666666 274.86082458496094 324.5866666666666 274.86082458496094 358M 274.86082458496094 324.5866666666666z" pathFrom="M -1 3938L -1 3938L 45.81013743082683 3938L 91.62027486165366 3938L 137.43041229248047 3938L 183.2405497233073 3938L 229.05068715413412 3938L 274.86082458496094 3938"></path><path id="SvgjsPath1106" d="M 0 145.5866666666666C 16.03354810078939 145.5866666666666 29.77658933003744 227.92666666666673 45.81013743082683 227.92666666666673C 61.84368553161622 227.92666666666673 75.58672676086427 264.9200000000001 91.62027486165366 264.9200000000001C 107.65382296244304 264.9200000000001 121.39686419169108 44.153333333333194 137.43041229248047 44.153333333333194C 153.46396039326987 44.153333333333194 167.2070016225179 145.5866666666666 183.2405497233073 145.5866666666666C 199.27409782409669 145.5866666666666 213.01713905334475 205.25333333333356 229.05068715413412 205.25333333333356C 245.0842352549235 205.25333333333356 258.82727648417153 324.5866666666666 274.86082458496094 324.5866666666666" fill="none" fill-opacity="1" stroke="#0694a2" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc5utnanm)" pathTo="M 0 145.5866666666666C 16.03354810078939 145.5866666666666 29.77658933003744 227.92666666666673 45.81013743082683 227.92666666666673C 61.84368553161622 227.92666666666673 75.58672676086427 264.9200000000001 91.62027486165366 264.9200000000001C 107.65382296244304 264.9200000000001 121.39686419169108 44.153333333333194 137.43041229248047 44.153333333333194C 153.46396039326987 44.153333333333194 167.2070016225179 145.5866666666666 183.2405497233073 145.5866666666666C 199.27409782409669 145.5866666666666 213.01713905334475 205.25333333333356 229.05068715413412 205.25333333333356C 245.0842352549235 205.25333333333356 258.82727648417153 324.5866666666666 274.86082458496094 324.5866666666666" pathFrom="M -1 3938L -1 3938L 45.81013743082683 3938L 91.62027486165366 3938L 137.43041229248047 3938L 183.2405497233073 3938L 229.05068715413412 3938L 274.86082458496094 3938"></path><g id="SvgjsG1103" class="apexcharts-series-markers-wrap" data:realIndex="0">
        <g class="apexcharts-series-markers">
            <circle id="SvgjsCircle1157" r="0" cx="183.2405497233073" cy="145.5866666666666" class="apexcharts-marker waaz2i1o8 no-pointer-events" stroke="#ffffff" fill="#0694a2" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0">

            </circle>
        </g>
    </g>
</g>
<g id="SvgjsG1104" class="apexcharts-datalabels" data:realIndex="0">

            </g>
        </g>
        <line id="SvgjsLine1152" x1="0" y1="0" x2="274.86082458496094" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">

        </line>
        <line id="SvgjsLine1153" x1="0" y1="0" x2="274.86082458496094" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">

        </line>
        <g id="SvgjsG1154" class="apexcharts-yaxis-annotations">

        </g>
        <g id="SvgjsG1155" class="apexcharts-xaxis-annotations">
            
        </g>
        <g id="SvgjsG1156" class="apexcharts-point-annotations">
            
        </g>
        <rect id="SvgjsRect1158" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect">
            
        </rect>
        <rect id="SvgjsRect1159" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect">

        </rect>
    </g>
    <rect id="SvgjsRect1097" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">

    </rect>
    <g id="SvgjsG1117" class="apexcharts-yaxis" rel="0" transform="translate(41.13917541503906, 0)">
        <g id="SvgjsG1118" class="apexcharts-yaxis-texts-g">
            <text id="SvgjsText1119" font-family="Inter, sans-serif" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;">
                <tspan id="SvgjsTspan1120">$6600</tspan>
                <title>$6600</title>
            </text>
            <text id="SvgjsText1121" font-family="Inter, sans-serif" x="20" y="91.26666666666665" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;">
                <tspan id="SvgjsTspan1122">$6500</tspan>
            <title>$6500</title>
        </text>
        <text id="SvgjsText1123" font-family="Inter, sans-serif" x="20" y="150.9333333333333" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;">
            <tspan id="SvgjsTspan1124">$6400</tspan>
            <title>$6400</title>
        </text>
        <text id="SvgjsText1125" font-family="Inter, sans-serif" x="20" y="210.59999999999997" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;">
            <tspan id="SvgjsTspan1126">$6300</tspan>
            <title>$6300</title>
        </text>
        <text id="SvgjsText1127" font-family="Inter, sans-serif" x="20" y="270.26666666666665" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;">
            <tspan id="SvgjsTspan1128">$6200</tspan>
            <title>$6200</title>
        </text>
        <text id="SvgjsText1129" font-family="Inter, sans-serif" x="20" y="329.93333333333334" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;">
            <tspan id="SvgjsTspan1130">$6100</tspan>
            <title>$6100</title>
        </text>
        <text id="SvgjsText1131" font-family="Inter, sans-serif" x="20" y="389.6" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;">
            <tspan id="SvgjsTspan1132">$6000</tspan>
            <title>$6000</title>
        </text>
    </g>
</g>
<g id="SvgjsG1093" class="apexcharts-annotations">

</g>
</svg>
<div class="apexcharts-legend" style="max-height: 210px;">
</div>
<div class="apexcharts-tooltip apexcharts-theme-light" style="left: 87.4266px; top: 148.587px;">
<div class="apexcharts-tooltip-title" style="font-family: Inter, sans-serif; font-size: 14px;">05 Feb</div>
<div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;">
<span class="apexcharts-tooltip-marker" style="background-color: rgb(6, 148, 162);">
</span>
<div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;">
<div class="apexcharts-tooltip-y-group">
    <span class="apexcharts-tooltip-text-y-label">Revenue: </span>
    <span class="apexcharts-tooltip-text-y-value">$6356</span>
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
<div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 217.739px; top: 390px;">
<div class="apexcharts-xaxistooltip-text" style="font-family: Inter, sans-serif; font-size: 12px; min-width: 52.2954px;">05 Feb</div>
</div>
<div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text">

</div>
</div>
</div>
</div>
</div>
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">

<div class="mb-4 flex items-center justify-between">
<div>
<h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
<span class="text-base font-normal text-gray-500">This is a list of latest transactions</span>
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
Amount
</th>
</tr>
</thead>
<tbody class="bg-white">
<tr>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
Payment from <span class="font-semibold">Bonnie Green</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 23 ,2021
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
$2300
</td>
</tr>
<tr class="bg-gray-50">
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
Payment refund to <span class="font-semibold">#00910</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 23 ,2021
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
-$670
</td>
</tr>
<tr>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
Payment failed from <span class="font-semibold">#087651</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 18 ,2021
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
$234
</td>
</tr>
<tr class="bg-gray-50">
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
Payment from <span class="font-semibold">Lana Byrd</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 15 ,2021
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
$5000
</td>
</tr>
<tr>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
Payment from <span class="font-semibold">Jese Leos</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 15 ,2021
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
$2300
</td>
</tr>
<tr class="bg-gray-50">
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
Payment from <span class="font-semibold">THEMESBERG LLC</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 11 ,2021
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
$560
</td>
</tr>
<tr>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
Payment from <span class="font-semibold">Lana Lysle</span>
</td>
<td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
Apr 6 ,2021
</td>
<td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
$1437
</td>
</tr>
</tbody>
</table>
</div>
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
<h3 class="text-base font-normal text-gray-500">New products this week</h3>
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
<div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">

<div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
<div class="flex items-center justify-between mb-4">
<h3 class="text-xl font-bold leading-none text-gray-900">Supplier</h3>
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
Neil Sims
</p>
<p class="text-sm text-gray-500 truncate">
email@windster.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
$320
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
Bonnie Green
</p>
<p class="text-sm text-gray-500 truncate">
email@windster.com
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
Michael Gough
</p>
<p class="text-sm text-gray-500 truncate">
email@windster.com
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
Thomes Lean
</p>
<p class="text-sm text-gray-500 truncate">
email@windster.com
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
Lana Byrd
</p>
<p class="text-sm text-gray-500 truncate">
email@windster.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
$367
</div>
</div>
</li>
</ul>
</div>
</div>

</footer>
             </div>


            </div>
         <!-- content end -->
        </div>

    </div>
</main>
<?php include('../../Layouts/footer.php');
} else {
    header("location:../../Layouts/Login.php");
    session_destroy();
  }
  unset($_SESSION['prompt']);
  mysqli_close($db); ?>