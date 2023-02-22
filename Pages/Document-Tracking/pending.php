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


<div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-5 py-6 rounded-md shadow-sm">
                    <div class="p-3 bg-indigo-600 bg-opacity-75 rounded-full">
                    <svg class="h-10 w-10 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M15 4.55a8 8 0 0 0 -6 14.9m0 -4.45v5h-5" />  <path d="M13 19.95a8 8 0 0 0 5.3 -12.8" stroke-dasharray=".001 4.13" /></svg>   
                    </div>
                    <div class="mx-5">
  <h4 class="text-2xl font-semibold text-gray-700">Pending List</h4>
  <div class="text-gray-500">Document</div>
                    </div>
                </div>
            </div>

            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
  <thead>
      <tr>
  <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Name </th>
  <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Title </th>

  
      </tr>
  </thead>
  <?php 

$query = "SELECT * FROM document_pending ORDER BY item_num ASC";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result)) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
  <tbody class="bg-white">
      <tr>
  <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
      <div class="flex items-center">
          <div class="ml-4">
              <div class="text-sm font-medium leading-5 text-gray-900"><?php echo $row['document']?></div>
             
  </td>
  <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
      <div class="text-sm leading-5 text-gray-900"><?php echo $row['request']?></div>
     
  </td>
      </tr>
      <?php }}?>
                          
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