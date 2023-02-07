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
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <div>
        <a href="/logistic-2/Pages/Vendor-Portal/Dashboard.php">
            
        </button>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
    </a>
</button>
    </div>
            <div>
                <h4 class="text-gray-600"> Request subcontract</h4>
                <div class="mt-4">
                    <div class="w-full max-w-sm overflow-hidden bg-white border rounded-md shadow-md">
                        <form>
                            <div class="flex items-center justify-between px-5 py-3 text-gray-700 border-b">
                                <h3 class="text-sm">Fillup</h3>
                                <button>
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">

                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-6 text-gray-700 bg-gray-200 border-b">
                                <label class="text-xs">Name</label>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z">

                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" class="w-full px-12 py-2 border-transparent rounded-md appearance-none focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500">
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-5 py-3">
                                <a href="#">
                                <button class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none"> Cancel </button>
                                <button class="px-3 py-1 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none"> Save </button>
    </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <h4 class="text-gray-600">Subcontractor</h4>
                <div class="mt-4">
                    <div class="p-6 bg-indigo rounded-md shadow-md">
                        <h2 class="text-lg font-semibold text-gray-700 capitalize">  </h2>
                        <form>
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                <div>
                                    <label class="text-gray-700" for="username">Name</label>
                                    <input class="w-full mt-2 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" type="text">
                                </div>
                                <div>
                                    <label class="text-gray-700" for="emailAddress">Business Purposes</label>
                                    <input class="w-full mt-2 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" type="email">
                                </div>
                                <div>
                                    <label class="text-gray-700" for="password">Data</label>
                                    <input class="w-full mt-2 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" type="password">
                                </div>
                                <div>
                                    <label class="text-gray-700" for="passwordConfirmation">Information</label>
                                    <input class="w-full mt-2 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" type="password">
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <button class="px-4 py-2 text-gray-200 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-blue-700"> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
</div>
</main>
<?php include('../../Layouts/footer.php');
} else {
header("location:../../Layouts/Login.php");
session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($db); ?>