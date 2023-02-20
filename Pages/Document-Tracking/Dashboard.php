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
            
    </div>
            <div>
                <h3 class="text-3xl font-medium text-gray-700">Document Tracking</h3>
                <div class="mt-4">
                    <h4 class="text-gray-600">Process</h4>
                    <div class="mt-4">
                        <div class="px-4 py-4 overflow-x-auto bg-white rounded-md whitespace-nowrap">
                            <div class="inline-flex w-full max-w-sm ml-3 overflow-hidden bg-white rounded-lg shadow-md">
                                <div class="flex items-center justify-center w-12 bg-green-500">
                                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z">

                                        </path>
                                    </svg>
                                </div>
                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <span class="font-semibold text-green-500">Success</span>
                                        <p class="text-sm text-gray-600"> Already request document! </p>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-flex w-full max-w-sm ml-3 overflow-hidden bg-white rounded-lg shadow-md">
                                <div class="flex items-center justify-center w-12 bg-blue-500">
                                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z">

                                    </path>
                                </svg>
                            </div>
                            <div class="px-4 py-2 -mx-3">
                                <div class="mx-3">
                                    <span class="font-semibold text-blue-500">Info</span>
                                    <p class="text-sm text-gray-600"> Make sure related data. </p>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex w-full max-w-sm ml-3 overflow-hidden bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-center w-12 bg-yellow-500">
                                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z">

                                    </path>
                                </svg>
                            </div>
                            <div class="px-4 py-2 -mx-3">
                                <div class="mx-3">
                                    <span class="font-semibold text-yellow-500">Warning</span>
                                    <p class="text-sm text-gray-600">Document can't related.</p>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex w-full max-w-sm ml-3 overflow-hidden bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-center w-12 bg-red-500">
                                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z">

                                </path>
                            </svg>
                        </div>
                        <div class="px-4 py-2 -mx-3">
                            <div class="mx-3">
                                <span class="font-semibold text-red-500">Error</span>
                                <p class="text-sm text-gray-600">Your document requested fail!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <h4 class="text-gray-600">Process</h4>
            <div class="mt-4">
               <div class="flex flex-wrap -mx-6">
                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                        <div class="p-3 bg-green-600 bg-opacity-75 rounded-full">
                        <svg class="h-10 w-10 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 11 12 14 20 6" />  <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                        </div>
                        <div class="mx-5">
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> Approve</button>
                        </div>
                    </div>
                </div>
                <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                    <div class="p-3 bg-yellow-600 bg-opacity-75 rounded-full">
                    <svg class="h-10 w-10 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M15 4.55a8 8 0 0 0 -6 14.9m0 -4.45v5h-5" />  <path d="M13 19.95a8 8 0 0 0 5.3 -12.8" stroke-dasharray=".001 4.13" /></svg>
                    </div>
                    <div class="mx-5">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Pending</button>
                    </div>
                </div>
            </div>
            <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                    <div class="p-3 bg-red-600 bg-opacity-75 rounded-full">
                    <svg class="h-10 w-10 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 3v4a1 1 0 0 0 1 1h4" />  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />  <path d="M10 12l4 4m0 -4l-4 4" /></svg>
                    </div>
                    <div class="mx-5">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Failed</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <h4 class="text-gray-600">Form</h4>
            <div class="mt-4">
                <div class="flex px-4 py-4 space-x-4 overflow-x-auto bg-white rounded-md">
                    <button class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">
                        <a class href="/logistic-2/Pages/Document-Tracking/Document_form.php"> Request Document </button></a>
                  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="mt-8">
                    <h4 class="text-gray-600">Paginations</h4>
                    <div class="mt-4">
                        <div class="flex px-4 py-4 overflow-x-auto bg-white rounded-md">
                            <div class="flex mr-4 rounded">
                                <a href="#" class="px-3 py-2 ml-0 leading-tight text-indigo-700 bg-white border border-r-0 border-gray-200 rounded-l hover:bg-indigo-500 hover:text-white">
                                    <span>Previous</span>
                                </a>
                                <a href="#" class="px-3 py-2 leading-tight text-indigo-700 bg-white border border-r-0 border-gray-200 hover:bg-indigo-500 hover:text-white"><span>1</span>
                            </a>
                            <a href="#" class="px-3 py-2 leading-tight text-indigo-700 bg-white border border-r-0 border-gray-200 hover:bg-indigo-500 hover:text-white"><span>2</span>
                        </a>
                        <a href="#" class="px-3 py-2 leading-tight text-indigo-700 bg-white border border-r-0 border-gray-200 hover:bg-indigo-500 hover:text-white"><span>3</span>
                        </a>
                        <a href="#" class="px-3 py-2 leading-tight text-indigo-700 bg-white border border-gray-200 rounded-r hover:bg-indigo-500 hover:text-white"><span>Next</span>
                    </a>
                </div>
            </div>
        </div>
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