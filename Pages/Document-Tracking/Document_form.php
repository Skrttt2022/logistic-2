
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
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <div>
        <div>
        <a href="/Logistic-2/Pages/Document-Tracking/Dashboard.php">
            
        </button>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
    </a>
</button>
    </div>
         
        <div class="flex-1 p-6">
        <div class="mb-6 last:mb-0">
            
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
            <label class="block font-bold mb-2">From</label>
    <div class="relative">
    
        <span class="inline-flex justify-center items-center w-10 h-12 absolute top-0 left-0 z-10 pointer-events-none text-gray-500 dark:text-slate-400">
           
                <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z">

                </path>
            </svg>
        </span>
    </div>
    <div class="relative">
        <input placeholder="Full Name" type="name" class="px-3 py-2 max-w-full focus:ring focus:outline-none border-gray-700 rounded w-full dark:placeholder-gray-400 h-12 border bg-white dark:bg-slate-800 pl-10">
        <span class="inline-flex justify-center items-center w-10 h-12 absolute top-0 left-0 z-10 pointer-events-none text-gray-500 dark:text-slate-400">
           
        </span>
    </div>
</div>
<!---->
</div>
<div class="mb-6 last:mb-0">
    <label class="block font-bold mb-2">Office</label>
    <div class="">
        <div class="relative">
            <input placeholder="Office" type="office" class="px-3 py-2 max-w-full focus:ring focus:outline-none border-gray-700 rounded w-full dark:placeholder-gray-400 h-12 border bg-white dark:bg-slate-800">
            <!---->
        </div>
    </div>

</div>
<div class="mb-6 last:mb-0">
    <label class="block font-bold mb-2">Document Type</label>
    <div class="">
        <div class="relative">
            <select class="px-3 py-2 max-w-full focus:ring focus:outline-none border-gray-700 rounded w-full dark:placeholder-gray-400 h-12 border bg-white dark:bg-slate-800">
                <option value="[object Object]">--Select--</option>
                <option value="[object Object]">Employee</option>
            <option value="[object Object]">Item</option>
            <option value="[object Object]">Subcontractor</option>
            <option value="[object Object]">Data</option>
        
        </select>
       
        <!---->
    </div>
</div>
<!---->
</div>
<hr class="my-6 -mx-6 dark:border-slate-800 border-t border-gray-100">
<div class="mb-6 last:mb-0">
    <label class="block font-bold mb-2">Details</label>
    <div class="">
        <div class="relative">
            <textarea class="px-3 py-2 max-w-full focus:ring focus:outline-none border-gray-700 rounded w-full dark:placeholder-gray-400 h-24 border bg-white dark:bg-slate-800" placeholder="Description, Date, Destination">                
            </textarea>
            <!---->
        </div>
    </div>
</div>
</div>
<div class="flex-1 p-6">
        <div class="mb-6 last:mb-0">
            
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
    <div class="relative">
        
                </path>
            </svg>
        </span>
    </div>
    
</div>
<!---->
</div>
<div class="mb-6 last:mb-0">
    
    <div class="">
        <div class="relative">
            
            <!---->
        </div>
    </div>

</div>

<a class href="#">
<button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
  Cancel
</button>
</a>
<a class href="#">
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Submit
</button>
</a>
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