
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
         <div id="home">
            <nav aria-label="Breadcrumb" class="text-sm font-semibold mb-6">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center text-blue-500">
                        <a href="#" class="text-gray-700">Home</a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="fill-current w-3 h-3 mx-3">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">

                        </path>
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="#" class="text-gray-600">Dashboard</a>
                </li>
            </ol>
        </nav>
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
<div class="mb-6 last:mb-0">
    <label class="block font-bold mb-2">Receiving Units</label>
    <div class="">
        <div class="relative">
            <select class="px-3 py-2 max-w-full focus:ring focus:outline-none border-gray-700 rounded w-full dark:placeholder-gray-400 h-12 border bg-white dark:bg-slate-800">
                <option value="[object Object]">--Select--</option>
                <option value="[object Object]">1</option>
            <option value="[object Object]">2</option>
            <option value="[object Object]">3</option>
            <option value="[object Object]">4</option>
            <option value="[object Object]">5</option>
        </select>
        <!---->
    </div>
</div>
<!---->
</div>
<hr class="my-6 -mx-6 dark:border-slate-800 border-t border-gray-100">
<div class="mb-6 last:mb-0">
    
    <label class="block font-bold mb-2">Purposes Of Submission</label>
    <div class="">
        <div class="relative">
            <textarea class="px-3 py-2 max-w-full focus:ring focus:outline-none border-gray-700 rounded w-full dark:placeholder-gray-400 h-24 border bg-white dark:bg-slate-800" placeholder="Purposes or Action to be taken...">                
            </textarea>
            <!---->
        </div>
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