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
         <!-- content  start-->
            
            <h1 class=' p-4 md:text-2xl text-xl font-semibold text-indigo-500 tracking-[1.5px]'></h1>
                <div>
                    <body>


<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <div>
        <div>
        <a href="/logistic-2/Pages/Audit-Management/Dashboard.php">
            
        </button>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
    </a>
</button>
    </div>
            <h3 class="text-3xl font-medium text-gray-700">Asset Monitoring</h3>
            <div class="mt-4">
                <div class="flex flex-wrap -mx-6">
                    <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                        <div class="flex items-center px-5 py-6 ">
                            <div class="p-3 bg-blue-600 bg-opacity-75 rounded-full">
                                <svg class="w-8 h-8 text-white" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z" fill="currentColor">

  </path>

  <path d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z" fill="currentColor">

</path>
<path d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z" fill="currentColor">

</path><path d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z" fill="currentColor">

    </path>
     <path d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z" fill="currentColor">

       </path>
        <path d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z" fill="currentColor"></path>
                 </svg>
                   </div>
                        <div class="mx-5">
                          <h4 class="text-2xl font-semibold text-gray-700">Auditing</h4>
                           
                            </div>
                        </div>
         </div>
    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
         <div class="flex items-center px-5 py-6">
            <div class="p-3 bg-blue-600 bg-opacity-75 rounded-full">
            <svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M3 21v-13l9-4l9 4v13" />  <path d="M13 13h4v8h-10v-6h6" />  <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" /></svg>
                        </div>
                        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        <a class href="/logistic-2/Pages/Audit-Management/Audit%20Item.php">
                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-white-700">Warehouse</h4>
                            <div class="text-white-500">Auditing</div>
</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                    <div class="flex items-center px-5 py-6">
                        <div class="p-3 bg-blue-600 bg-opacity-75 rounded-full">
                        <svg class="h-8 w-8 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
</svg>

                        </div>
                        <button class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-white-700">Asset</h4>
                            <div class="text-white-500">Auditing</div>
</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                            <div class="mt-8">

                            </div>
                            <div class="flex flex-col mt-8">
      <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
         <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full">
               <thead>
               <tr>
            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Item</th>
                 <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Good Item </th>
                  <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Bad Item </th>
                  <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Date </th>
                   <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">

                     </th>
                     </tr>
                        </thead>
                        <?php 

                          $query = "SELECT *, DATE_FORMAT(date, '%M %d, %Y')as formatted_date FROM asset_auditing ORDER BY item_num ASC";
                          $result = mysqli_query($db, $query);
                          if (mysqli_num_rows($result)) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                          <tbody class="bg-white">
                          <tr>
                               <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                    
                         <div class="text-sm font-medium leading-5 text-gray-900"><?php echo $row['item']?></div>
                          </div>
                          </div>
                           </td>
                            <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                            <div class="text-sm leading-5 text-gray-900"><?php echo $row['good_item']?></div>
                        </td>
     <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
     <div class="text-sm leading-5 text-gray-900"><?php echo $row['bad_item']?></div>
                    </td>
            <td class="px-6 py-4 text-sm leading-5 text-gray-500 border-b border-gray-200 whitespace-nowrap"><?php echo $row['formatted_date']?></td>
                       <td class="px-6 py-4 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap">
                    <a href="/logistic-2/excel/" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                           </td>
                            </tr>
                          
                             </tbody>
                             <?php } }?>
                             </table>
                              </div>
                          </div>
                       </div>
                  </div>
               </div>
        </main>
</body>
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