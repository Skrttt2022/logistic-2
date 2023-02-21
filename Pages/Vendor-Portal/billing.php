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
            <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcontractor</title>
    <meta name="description" content="">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
        
    </style>
</head>

    </body>
    <div class="container mx-auto px-6 py-8">
        <div>
        <a href="/logistic-2/Pages/Vendor-Portal/Dashboard2.php#">
            
       
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> 
        <path stroke="none" d="M0 0h24v24H0z"/> 
        <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" />
        </svg>
        </a>
    </button>
    </div>
<div class="w-full px-6 py-6 mx-auto drop-zone loopple-min-height-78vh text-slate-500"><div class="flex flex-wrap -mx-3 removable">
      <div class="w-full max-w-full px-3 mb-4 sm:w-full sm:flex-none drop-zone"><div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4 mb-4 draggable" draggable="true">
    <div class="relative h-full overflow-hidden bg-cover py-6 rounded-xl" style="background-image: url('https://images.unsplash.com/photo-1655635643532-fa9ba2648cbe?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2232&amp;q=80')">
        <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-80"></span>
        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
            <h2 class="pt-2 mb-6 font-bold text-white">Item sell</h2>
            <a class="mt-auto mb-0 font-semibold leading-normal text-white group text-size-sm" href="javascript:;">
                view More
                <i class="fas fa-arrow-right ease-bounce text-size-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div></div>
    </div><h3 class="draggable font-weight-400 mb-4" draggable="true">Item for sale</h3><div class="flex flex-wrap -mx-3 removable">
      <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="https://images.unsplash.com/photo-1579833981331-676fa2bae313?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YW5pbWF0aW9ufGVufDB8MHwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">UnderWater</p>
      <a href="javascript:;">
        <h5>Item #1</h5>
      </a>
      
      <div class="flex items-center justify-between mt-4">
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Place Bid</button>
        
      </div>
    </div>
  </div></div>
      <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="https://images.unsplash.com/photo-1634689033402-a132c62b310e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGFuaW1hdGlvbnxlbnwwfDB8MHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Headmaw</p>
      <a href="javascript:;">
        <h5>Item #2</h5>
      </a>
      
      <div class="flex items-center justify-between">
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Place Bid</button>
        
      </div>
    </div>
  </div></div>
      
  <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="https://images.unsplash.com/photo-1619983453269-98a0917b75bd?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzF8fGFuaW1hdGlvbnxlbnwwfDB8MHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Sonte of Vincento</p>
      <a href="javascript:;">
        <h5>Item #3</h5>
      </a>
      
      <div class="flex items-center justify-between">
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Place Bid</button>
        
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
      <a href="javascript:;">
        <h5>Item #4</h5>
      </a>
      
      <div class="flex items-center justify-between">
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Place Bid</button>
        
      </div>
    </div>
  </div></div>
  <div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="https://images.unsplash.com/photo-1655635949212-1d8f4f103ea1?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8M2R8ZW58MHx8MHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Stones</p>
      <a href="javascript:;">
        <h5>Item #5</h5>
      </a>
      
      <div class="flex items-center justify-between">
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Place Bid</button>
        
      </div>
    </div>
  </div></div><div class="w-full max-w-full px-3 mb-6 lg:w-1/3 sm:flex-none drop-zone"><div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl px-3 py-3 rounded-2xl bg-clip-border">
    <div class="relative">
      <a class="block shadow-xl rounded-2xl">
        <img src="https://images.unsplash.com/photo-1617396900799-f4ec2b43c7ae?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGFuaW1hdGlvbnxlbnwwfHwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" data-selected="selected-image">
      </a>
    </div>
    <div class="flex-auto px-1 pt-6">
      <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-dark-gray text-size-sm bg-clip-text">Robsol</p>
      <a href="javascript:;">
        <h5>Item #6</h5>
      </a>
      
      <div class="flex items-center justify-between">
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Place Bid</button>
        
      </div>
    </div>
  </div></div>
    </div></div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    
<?php include('../../Layouts/footer.php');
} else {
header("location:../../Layouts/Login.php");
session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($db); ?>