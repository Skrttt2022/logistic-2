
<div id="sidebar" class="md:block  z-[100] bg-indigo-50 shadow-2xl w-[300px] transition-all h-full border xl:relative absolute transition-all ">
  <div id="sidebar-container" class="bg-indigo-50 transition-all w-full">
      <div class="w-[300px] flex-1 relative flex justify-start mb-5 h-[70px] pl-1 pt-1">
        <div  class="flex-1 mr-1 bg-indigo-50 border-indigo-200  flex overflow-hidden  gap-x-3 items-center border relative px-2 py-2 rounded-xl">
            <img class=" rounded-full w-10 h-10 border border-indigo-600 p-2 outline outline-offset-2 outline-indigo-500" src='/Logistic-2/assets/truck.png'  alt="logo">
            <p class=" uppercase text-indigo-800 font-semibold text-xs whitespace-nowrap">Freight Logistic Dashboard</p>
        </div>
      <button id="menu-btn" class="cursor-pointer w-auto relative  flex items-center p-1 text-indigo-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>Menu</title>
                  <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
                
        </button>
      </div>
<!-- Modal toggle -->
<center>
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="button">
  Upload Profile
</button>
</center>
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-group needs-validation" novalidate enctype="multipart/form-data" accept="image/png, image/jpeg, image/jpg">
              <div class="col-auto">
                <label for="email" class="form-label" style="color: #000;">Please select image</label>
                <input type="file" class="form-control" name="file" id="file" style="color: #000; box-shadow: none; border-color: #6559ca;" required>
                <div class="invalid-feedback">
                </div>
              </div>
              <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Update</button>
            </form>
            </div>
        </div>
    </div>
</div>
    <div id="img-container" class=" h-auto flex flex-col justify-center mt-5">
    <div class="w-full h-auto flex  flex-col justify-center mb-10">
        <div class="w-full h-auto flex justify-center">
            <div class="border-2 bg-transparent z-[100] md:w-[200px] md:h-[200px] w-[170px] h-[170px] bg-gray-50 flex overflow-hidden relative  justify-center items-center rounded-full " id="drop-box" >
            <?php
            $query = "SELECT Profile FROM login WHERE Email = '" . $_SESSION['email'] . "'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result)) {
              $row = mysqli_fetch_assoc($result);
              $image = $row['Profile'];

            ?>
                <img alt="Profile Picture" class='max-w-[370px]' <?php echo '<img src="../../Layouts/imageStorage/' . $image . '" />'; ?> <br><br>
            <?php } ?>
            </div>
        </div>
        <?php
        include('../../Layouts/Connection.php');
            $query = "SELECT * FROM login WHERE Email= '" . $_SESSION['email'] . "'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result)) {
              $row = mysqli_fetch_assoc($result);
             

            ?>
        <p class="text-center mt-5"><?php echo $row["Fname"];?>
      </p>
        <?php
      }?>
        
    </div>
    <div class="block relative w-full h-auto ">

            <a href="/logistic-2/Pages/Vendor-Portal/Dashboard2.php#" class="flex gap-x-3 items-center cursor-pointer hover:bg-indigo-100  py-2 pl-4">
                <svg class="h-8 w-8 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p>Vendor Portal</p>
            </a>

            <a href="/Logistic-2/Pages/Audit-Management/Dashboard.php" class="flex gap-x-3 items-center cursor-pointer hover:bg-indigo-100  py-2 pl-4">
            <svg class="h-8 w-8 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />  
              <line x1="12" y1="11" x2="12" y2="17" />  <line x1="9" y1="14" x2="15" y2="14" />
            </svg>
                <p>Audit Management</p>
            </a>

            <a href="/Logistic-2/Pages/Document-Tracking/Dashboard.php" class="flex gap-x-3 items-center cursor-pointer hover:bg-indigo-100  py-2 pl-4">
              <svg class="h-8 w-8 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/>
              </svg>
                <p>Document Tracking</p>
            </a>

            <a href="/Logistic-2/Pages/Fleet-Management/Dashboard.php" class="flex gap-x-3 items-center cursor-pointer hover:bg-indigo-100  py-2 pl-4">
            <svg class="h-8 w-8 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r=".5" fill="currentColor" />  <circle cx="12" cy="12" r="7" />  <line x1="12" y1="3" x2="12" y2="5" />  <line x1="3" y1="12" x2="5" y2="12" />  
              <line x1="12" y1="19" x2="12" y2="21" />  <line x1="19" y1="12" x2="21" y2="12" />
            </svg>
                <p>Fleet Management</p>
            </a>

            <a href="/Logistic-2/Pages/Vehicle-Reservation/Dashboard.php" class="flex gap-x-3 items-center cursor-pointer hover:bg-indigo-100  py-2 pl-4">
            <svg class="h-8 w-8 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="17" r="2" />  <circle cx="17" cy="17" r="2" />  
              <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
            </svg>
                <p>Vehicle Reservation</p>
            </a>

          <button id="logout-btn" class="flex gap-x-3 items-center cursor-pointer hover:bg-indigo-100  py-2 pl-4 w-full">
          <a href="/logistic-2/Layouts/Login.php">     
          <svg class="h-8 w-8 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                </svg>
                      <p>Logout</p>
    </a>
            <button>
        </div>
        </div>
    </div>
</div>

<script>
   if(window.innerWidth < 1280){
        $('#menu-btn-main').show()
        $('#sidebar').animate({width:"0" ,left:"-100%"},{duration:5})
      }

    $(window).resize(function(){
    if(window.innerWidth < 1280){
        $('#menu-btn-main').show()
        $('#sidebar').animate({width:"0" ,left:"-100%"},{duration:5})
      }
     else{
        $('#menu-btn-main').hide()
        $('#sidebar').animate({width:"300px" ,left:"0"},{duration:5})
      }
    })

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>

<script>
  
  $(function(){

    $('#menu-btn').click(function(){
      $('#menu-btn-main').show()
      $('#sidebar').animate({width:"0" ,left:"-100%"},{duration:100})
    })
    
    $('#menu-btn-main').click(function(){
      console.log('asdasd')
      $('#menu-btn-main').hide()
      $('#sidebar').animate({width:"300px" ,left:"0"},{duration:100})
    })
})
</script>





