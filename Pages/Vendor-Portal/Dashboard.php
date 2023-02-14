
<?php include('../../Layouts/header.php');
include('../../Layouts/Connection.php');
session_start();
if (isset($_POST['update'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTempName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];
    $folder = "../../Layouts/imageStorage/" . $fileName;
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
  
    $allowed = array('jpg', 'jpeg', 'png');
  
    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 5000000) {
          $fileNameNew = uniqid('', true) . "." . $fileActualExt;
          $fileDestination = $folder;
          move_uploaded_file($fileTempName, $fileDestination);
  
          if (!empty($file)) {
            $query = "UPDATE login SET Profile = '$fileName' WHERE Email = '" . $_SESSION['email'] . "'";
  
            $result = mysqli_query($db, $query);
  
            header("location:/logistic-2/Pages/Vendor-Portal/Dashboard.php");
          } else {
            $_SESSION['errorMessage'] = "Failed to update profile picture";
          }
        } else {
          $_SESSION['errorMessage'] = "You image is too big!";
        }
      } else {
        $_SESSION['errorMessage'] = " There was an error uplading your file!";
      }
    } else {
      $_SESSION['errorMessage'] = "You cannot upload this type of Image";
    }
  }
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
         <div class=" h-[calc(100%-50px)]   mt-14 border ">
                <h1 class=' p-4 md:text-2xl text-xl font-semibold text-indigo-500 tracking-[1.5px]'>Vendor Portal</h1>
                <div>

                    <!-- content body -->
                    
    <!--Nav-->
    <body class="bg-puple-200 flex justify-center items-center h-screen">
<div class="flex flex-wrap -mx-6">
    <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
        <div class="flex items-center px-5 py-6">
            <div class="p-3 bg-indigo-600 bg-opacity-75 rounded-full">
            <svg class="h-10 w-10 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="5" width="16" height="16" rx="2" />  <line x1="16" y1="3" x2="16" y2="7" />  <line x1="8" y1="3" x2="8" y2="7" />  <line x1="4" y1="11" x2="20" y2="11" />  <rect x="8" y="15" width="2" height="2" /></svg>

                    <path d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z" fill="currentColor">

                    </path>
                    <path d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z" fill="currentColor">

                    </path>
                    <path d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z" fill="currentColor">

                    </path>
                    <path d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z" fill="currentColor">

                    </path>
                    <path d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z" fill="currentColor">

                    </path>
                    <path d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z" fill="currentColor">

                    </path>
                </svg>
            </div>
            <div class="mx-5">
                <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <a class href="/logistic-2/Pages/Vendor-Portal/Events.php"
                class="text-2xl font-semibold text-gray-700 ">Coming Events</a>
               
                <button>
            </div>
        </div>
    </div>
    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
        <div class="flex items-center px-5 py-6">
            <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
            <svg class="h-10 w-10 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />  <polyline points="3.27 6.96 12 12.01 20.73 6.96" />  <line x1="12" y1="22.08" x2="12" y2="12" /></svg>
                    <path d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z" fill="currentColor">

                    </path>
                    <path d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z" fill="currentColor">

                    </path>
                    <path d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z" fill="currentColor">
                        
                    </path>
                </svg>
            </div>
            <div class="mx-5">
                <button  class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <a class href="/logistic-2/Pages/Vendor-Portal/Supplier.php" 
                class="text-2xl font-semibold text-gray-700">SUPPLIER</a>
               
                <button>
            </div>
        </div>
    </div>
    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
        <div class="flex items-center px-5 py-6">
            <div class="p-3 bg-yellow-600 bg-opacity-75 rounded-full">
            <svg class="h-10 w-10 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <ellipse cx="12" cy="5" rx="9" ry="3" />  <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />  <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" /></svg>
                    <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linejoin="round">

                    </path>
                    <path d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z" stroke="currentColor" stroke-width="2">

                    </path>
                </svg>
            </div>
            <div class="mx-5">
                <button  class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <a class href="/logistic-2/Pages/Vendor-Portal/Auction.php" 
                class="text-2xl font-semibold text-gray-700">AUCTION</a>
               
                <button>
            </div>
        </div>
    </div>
</div>
<div class="flex flex-wrap -mx-3 removable">
      <div class="w-full max-w-full px-3 mb-6 lg:w-4/12 sm:flex-none xl:mb-0 drop-zone"><div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border draggable" draggable="true">
<div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0 ">
<h6 class="dark:text-white">Top Selling Products</h6>
</div>

<div class="flex-auto p-0 pb-2 ">
<div class="p-0 overflow-x-auto">
<table class="items-center justify-center w-full mb-0 align-top border-gray-200 dark:border-white/40 dark:text-white text-slate-500">
<thead class="align-bottom">
<tr>
<th class="py-3 pl-6 pr-6 font-bold uppercase align-middle border-b border-gray-200 border-solid text-xs text-slate-400 opacity-70 whitespace-nowrap tracking-none text-left">Product</th>
<th class="py-3 pl-2 pr-6 font-bold uppercase align-middle border-b border-gray-200 border-solid text-xs text-slate-400 opacity-70 whitespace-nowrap tracking-none">Value</th>
<th class="py-3 pl-2 pr-6 font-bold text-center uppercase align-middle border-b border-gray-200 border-solid text-xs text-slate-400 opacity-70 whitespace-nowrap tracking-none">Ads Spent</th>
<th class="py-3 pl-2 pr-6 font-bold text-center uppercase align-middle border-b border-gray-200 border-solid text-xs text-slate-400 opacity-70 whitespace-nowrap tracking-none">Refunds</th>
</tr>
</thead>
<tbody class="align-top">
<tr>
<td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<div class="flex px-4 py-1">
<div>
<img class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/blue-shoe.jpg" alt="product image">
</div>
<div class="flex flex-col justify-center">
<h6 class="mb-0 leading-normal dark:text-white text-sm">Nike v22 Running</h6>
<p class="mb-0 font-semibold leading-normal text-xs text-slate-400">
<span class="text-lime-500">8.232</span>
orders
</p>
</div>
</div>
</td>
<td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">130,992</p>
</td>
<td class="p-2 text-center align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">9,500</p>
</td>
<td class="p-2 text-right align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<div class="flex items-center justify-center px-4 py-1">
<p class="mb-0 font-semibold leading-normal text-xs">13</p>
<i class="mt-1 ml-1 leading-normal ni leading-none ni-bold-down text-sm text-lime-500"></i>
<button type="button" class="active:shadow-soft-xs ml-4 active:opacity-85 ease-soft-in leading-pro text-xs bg-150 bg-x-25 rounded-3.5xl p-1.2 h-6 w-6 mb-0 flex cursor-pointer items-center justify-center border border-solid border-slate-400 bg-transparent text-center align-middle font-bold text-slate-400 shadow-none transition-all hover:bg-transparent hover:text-slate-400 hover:opacity-75 hover:shadow-none active:bg-slate-400 active:text-black hover:active:bg-transparent hover:active:text-slate-400 hover:active:opacity-75 hover:active:shadow-none">
<i class="fas fa-info text-3xs" aria-hidden="true"></i>
</button>
</div>
</td>
</tr>
<tr>
<td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<div class="flex px-4 py-1">
<div>
<img class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-mug.jpg" alt="product image">
</div>
<div class="flex flex-col justify-center">
<h6 class="mb-0 leading-normal dark:text-white text-sm">Business Kit (Mug + Notebook)</h6>
<p class="mb-0 font-semibold leading-normal text-xs text-slate-400">
<span class="text-lime-500">12.821</span>
orders
</p>
</div>
</div>
</td>
<td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">80,250</p>
</td>
<td class="p-2 text-center align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">4,200</p>
</td>
<td class="p-2 text-right align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<div class="flex items-center justify-center px-4 py-1">
<p class="mb-0 font-semibold leading-normal text-xs">40</p>
<i class="mt-1 ml-1 leading-normal ni leading-none ni-bold-down text-sm text-lime-500"></i>
</div>
</td>
</tr>
<tr>
<td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<div class="flex px-4 py-1">
<div>
<img class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg" alt="product image">
</div>
<div class="flex flex-col justify-center">
<h6 class="mb-0 leading-normal dark:text-white text-sm">Black Chair</h6>
<p class="mb-0 font-semibold leading-normal text-xs text-slate-400">
<span class="text-lime-500">2.421</span>
orders
</p>
</div>
</div>
</td>
<td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">40,600</p>
</td>
<td class="p-2 text-center align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">9,430</p>
</td>
<td class="p-2 text-right align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<div class="flex items-center justify-center px-4 py-1">
<p class="mb-0 font-semibold leading-normal text-xs">54</p>
<i class="mt-1 ml-1 leading-normal text-red-500 ni leading-none ni-bold-up text-sm"></i>
</div>
</td>
</tr>
<tr>
<td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<div class="flex px-4 py-1">
<div>
<img class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/bang-sound.jpg" alt="product image">
</div>
<div class="flex flex-col justify-center">
<h6 class="mb-0 leading-normal dark:text-white text-sm">Wireless Charger</h6>
<p class="mb-0 font-semibold leading-normal text-xs text-slate-400">
<span class="text-lime-500">5.921</span>
orders
</p>
</div>
</div>
</td>
<td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">91,300</p>
</td>
<td class="p-2 text-center align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">7,364</p>
</td>
<td class="p-2 text-right align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
<div class="flex items-center justify-center px-4 py-1">
<p class="mb-0 font-semibold leading-normal text-xs">5</p>
<i class="mt-1 ml-1 leading-normal ni leading-none ni-bold-down text-sm text-lime-500"></i>
</div>
</td>
</tr>
<tr>
<td class="p-2 align-middle border-b-0 border-solid whitespace-nowrap border-inherit">
<div class="flex px-4 py-1">
<div>
<img class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/photo-tools.jpg" alt="product image">
</div>
<div class="flex flex-col justify-center">
<h6 class="mb-0 leading-normal dark:text-white text-sm">Mountain Trip Kit (Camera + Backpack)</h6>
<p class="mb-0 font-semibold leading-normal text-xs text-slate-400">
<span class="text-lime-500">921</span>
orders
</p>
</div>
</div>
</td>
<td class="p-2 align-middle border-b-0 border-solid whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">140,925</p>
</td>
<td class="p-2 text-center align-middle border-b-0 border-solid whitespace-nowrap border-inherit">
<p class="mb-0 font-semibold leading-normal text-xs">20,531</p>
</td>
<td class="p-2 text-right align-middle border-b-0 border-solid whitespace-nowrap border-inherit">
<div class="flex items-center justify-center px-4 py-1">
<p class="mb-0 font-semibold leading-normal text-xs">121</p>
<i class="mt-1 ml-1 leading-normal text-red-500 ni leading-none ni-bold-up text-sm"></i>
<button type="button" class="active:shadow-soft-xs ml-4 active:opacity-85 ease-soft-in leading-pro text-xs bg-150 bg-x-25 rounded-3.5xl p-1.2 h-6 w-6 mb-0 flex cursor-pointer items-center justify-center border border-solid border-slate-400 bg-transparent text-center align-middle font-bold text-slate-400 shadow-none transition-all hover:bg-transparent hover:text-slate-400 hover:opacity-75 hover:shadow-none active:bg-slate-400 active:text-black hover:active:bg-transparent hover:active:text-slate-400 hover:active:opacity-75 hover:active:shadow-none">
<i class="fas fa-info text-3xs" aria-hidden="true"></i>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div></div>
      <div class="w-full max-w-full px-3 mb-6 lg:w-8/12 sm:flex-none xl:mb-0 drop-zone">
        <div class="relative z-20 flex flex-col min-w-0 break-words bg-white-100 border-0 border-solid dark:bg-gray-950 border-black-125 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border mb-4 draggable" draggable="true">
    <div class="p-6 pb-0 mb-0 border-b-0 border-solid border-black-125 rounded-t-2xl">
        <h6 class="dark:text-black">Coming Events</h6>
        <p class="leading-normal text-size-sm dark:opacity-60">
            <i class="fa fa-arrow-up text-lime-500" aria-hidden="true"></i>
            <span class="font-semibold">4% more in 2023</span> 
        </p>
        <div class="flex items-center justify-center py-8 px-4">
            <div class="max-w-sm w-full shadow-lg">
                <div class="md:p-8 p-5 dark:bg-gray-800 bg-blue-300 rounded-t">
                    <div class="px-4 flex items-center justify-between">
                        <span  tabindex="0" class="focus:outline-none  text-base font-bold dark:text-gray-100 text-gray-800">Feb 2023</span>
                        <div class="flex items-center">
                            <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                        </button>
                        <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100"> 
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="9 6 15 12 9 18" />
                            </svg>
                        </button>

                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-12 overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su</p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pt-6">
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">1</p>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">2</p>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100">3</p>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100">4</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-indigo-700 rounded-full">8</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100">10</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100">11</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">12</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">13</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">14</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">15</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">16</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100">17</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100">18</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">19</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">20</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">21</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">22</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">23</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100">24</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100">25</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">26</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">27</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">28</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">29</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">30</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="md:py-8 py-5 md:px-16 px-5 dark:bg-gray-700 bg-gray-50 rounded-b">
                    <div class="px-4">
                        <div class="border-b pb-4 border-gray-400 border-dashed">
                            <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">9:00 AM</p>
                            <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Supplier Meeting</a>
                            <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">Supply Discusion</p>
                        </div>
                        <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                            <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">10:00 AM</p>
                            <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Orientation session with new hires</a>
                        </div>
                        <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                            <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">9:00 AM</p>
                            <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Deliver Product </a>
                            <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">Vehicle request 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div>
            <canvas id="chart-line" height="600" width="1368" style="display: block; box-sizing: border-box; height: 10px; width: 684px;"></canvas>
        </div>
    </div>
</div></div>
    </div>
<div class="mt-6">
    <h2 class="text-xl font-semibold leading-tight text-gray-700">Users</h2>
    <div class="flex flex-col mt-3 sm:flex-row">
        <div class="flex">
            <div class="relative">
                <select class="block w-full h-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-white border border-gray-400 rounded-l appearance-none focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Admin</option>
                    <option>Super Admin</option>
                    <option>Supplier</option>
                    <option>Requestor</option>
                    <option>Auditor</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">

                        </path>
                    </svg>
                </div>
            </div>
            <div class="relative">
                <select class="block w-full h-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-white border-t border-b border-r border-gray-400 rounded-r appearance-none sm:rounded-r-none sm:border-r-0 focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                    <option>All</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">

                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="relative block mt-2 sm:mt-0">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-500 fill-current">
                    <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                        
                    </path>
                </svg>
            </span>
            <input placeholder="Search" class="block w-full py-2 pl-8 pr-6 text-sm text-gray-700 placeholder-gray-400 bg-white border border-b border-gray-400 rounded-l rounded-r appearance-none sm:rounded-l-none focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
        </div>
    </div>
    <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
        <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200"> Email </th>
                        <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200"> Full Name </th>
                        <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200"> Role </th>
                        <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200"> Date Created </th>
                    </tr>
                </thead>
                <?php 

$query = "SELECT * FROM login ORDER BY ID ASC";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result)) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
                <tbody>
                    <tr>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-full h-full rounded-full" src="/Logistic-2/assets/profile_default.jpg">
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-nowrap"><?php echo $row['Email']?></p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-nowrap"><?php echo $row['Fname']?></p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-nowrap"><?php echo $row['Role']?></p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden="" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">

                                </span>
                               
                        </td>
                    </tr>
                    <?php }}?>
                </tbody>
            </table>
            <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
                <span class="text-xs text-gray-900 xs:text-sm">Showing 1 to 4 of 50 Entries</span
                ><div class="inline-flex mt-2 xs:mt-0">
                    <button class="px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-l hover:bg-gray-400"> Prev </button>
                    <button class="px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-r hover:bg-gray-400"> Next </button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
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