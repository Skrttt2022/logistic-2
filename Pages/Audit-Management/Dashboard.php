
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
<a class="mb-0 font-sans font-semibold leading-normal text-size-sm" href="/logistic-2/Pages/Audit-Management/Audit_External.php">Audit External</a>

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
<div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
<div class="flex items-center">
<div class="flex-shrink-0">
<span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">2,340</span>
<h3 class="text-base font-normal text-gray-500">Auditing item last Month</h3>
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
<h3 class="text-base font-normal text-gray-500">Auditing this month</h3>
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
<h3 class="text-base font-normal text-gray-500">Auditing this week</h3>
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