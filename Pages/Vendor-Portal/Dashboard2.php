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
  
            header("location:/logistic-2/Pages/Vendor-Portal/Dashboard2.php#");
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
                    <div class="w-full px-6 py-6 mx-auto drop-zone loopple-min-height-78vh text-slate-500"><div class="flex flex-wrap -mx-3 removable">
      <div class="w-full max-w-full px-3 mb-4 sm:w-full sm:flex-none drop-zone"><div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4 mb-4 draggable" draggable="true">
    <div class="relative h-full overflow-hidden bg-cover py-6 rounded-xl" style="background-image: url('/logistic-2/assets/ayevents.jpg')">
        <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-80"></span>
        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
            <h2 class="pt-2 mb-6 font-bold text-white">Coming events <br> This Year</h2>
            <a class="mt-auto mb-0 font-semibold leading-normal text-white group text-size-sm" href="/logistic-2/Pages/Vendor-Portal/Events.php">
                View More
                <i class="fas fa-arrow-right ease-bounce text-size-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div></div>
    </div>
    <div class="flex flex-wrap -mx-3 removable">
      <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="/logistic-2/assets/suplies.jpg">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Headmaw</p>
      
        <h5>Request Supplier</h5>
     
      
      <div class="flex items-center justify-between">
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
        <a href="/logistic-2/Pages/Vendor-Portal/Supplier.php">Supplier</a></button>
        
      </div>
    </div>
  </div></div>
      <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="/logistic-2/assets/auctionn.jpg">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Headmaw</p>
        <h5>Auction Supply</h5>
      
      
      <div class="flex items-center justify-between">
        
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
        <a href="/logistic-2/Pages/Vendor-Portal/Auction.php">Auction</a></button>
        
      </div>
    </div>
  </div></div>
      
  <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="/logistic-2/assets/bidding.jpg">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Sonte of Vincento</p>
     
        <h5>Bidding Item</h5>
      <div class="flex items-center justify-between">
      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
        <a href="/logistic-2/Pages/Vendor-Portal/billing.php">Bidding</a></button>
      </div>
    </div>
  </div></div>
  <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="https://images.unsplash.com/photo-1587333383258-bca5d8b58914?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODR8fGFuaW1hdGlvbnxlbnwwfDB8MHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Camera</p>

        <h5>Top Sale Products</h5>
      <div class="flex items-center justify-between">
      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
        <a href="/logistic-2/Pages/Vendor-Portal/sale_product.php">Products</a></button>
      </div>
    </div>
  </div></div>
  <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="/logistic-2/assets/post.webp">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Camera</p>
      
        <h5>Supplier Post Item</h5>
         <div class="flex items-center justify-between">
      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
        <a href="/logistic-2/Pages/Vendor-Portal/posted_products.php">Posted</a></button>
      </div>
    </div>
  </div></div><div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="/logistic-2/assets/user.jpg">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Robsol</p>
     
        <h5>Latest User</h5> <div class="flex items-center justify-between">
      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
        <a href="/logistic-2/Pages/Vendor-Portal/latest_user.php">User</a></button>
      </div>
    </div>
  </div></div>
    </div></div>
    <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
<div class="flex items-center justify-between mb-4">
<h3 class="text-xl font-bold leading-none text-gray-900">Latest Vendor Portal Viewers</h3>
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
Bonnie Green
</p>
<p class="text-sm text-gray-500 truncate">
email@windster.com
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900">
3467
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
67
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
2367
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
367
</div>
</div>
</li>
</ul>
</div>
</div>
                    
    <!--Nav-->


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