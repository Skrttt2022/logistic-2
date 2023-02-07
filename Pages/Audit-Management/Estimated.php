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
    
    <div class="container mx-auto px-6 py-8">
        <div>
        <div>
        <a href="/logistic-2/Pages/Audit-Management/Dashboard.php">
            
        </button>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
    </a>
</button>
                <p class="text-sm font-light uppercase">
                    Audit Item
                    <span class="text-base block font-bold tracking-widest">
                        Estimated
                    </span>
                </p>
            </a>
        
            
    <!-- End Nav -->
    <!-- Start Main -->
    <main class="container mx-w-6xl mx-auto py-4">
        <div class="flex flex-col space-y-8">
            <!-- First Row -->
            <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
                <div class="md:col-span-2 xl:col-span-3 bg-white p-6 rounded-2xl border border-gray-50">
                    <div class="flex flex-col space-y-6 md:h-full md:justify-between">
                        <div class="flex justify-between">
                            <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                                Estimated Budget
                            </span>
                            <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                                Total Price
                            </span>
                        </div>
                        <div class="flex gap-2 md:gap-4 justify-between items-center">
                            <div class="flex flex-col space-y-4">
                                <h2 class="text-gray-800 font-bold tracking-widest leading-tight">Warehouse Product
                                    Account</h2>
                                <div class="flex items-center gap-4">
                                <h2 class="text-gray-800 font-bold tracking-widest leading-tight">Asset Item</h2>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </div>
                            </div>
                            <h2 class="text-lg md:text-xl xl:text-3xl text-gray-700 font-black tracking-wider">
                                <span class="md:text-xl">₱</span>
                                92,817.45
                            </h2>
                        </div>
                        <div class="flex gap-2 md:gap-4">
                            <a href="#"
                                class="bg-blue-600 px-5 py-3 w-full text-center md:w-auto rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-800">
                                Report
                            </a>
    
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-2 p-6 rounded-2xl bg-gradient-to-r from-indigo-500 to-blue-800 flex flex-col justify-between">
                    <div class="flex flex-col">
                        <p class="text-white font-bold">Record</p>
                        <p class="mt-1 text-xs md:text-sm text-gray-50 font-light leading-tight max-w-sm">
                           This is the total record of the Product this month
                        </p>
                    </div>  
                    <div class="flex justify-between items-end">
                        <a href="#"
                            class="bg-blue-800 px-4 py-3 rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-600 hover:text-white">
                            Learn More
                        </a>
                        <img src="/Logistic-2/assets/calendar.png" alt="calendar" class="w-auto h-24 object-cover">
                    </div>
                </div>

            </div>
            <!-- End First Row -->
            <!-- Start Second Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4 xl:p-0 gap-4 xl:gap-6">
                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                    <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                        Expenses By Category</h2>
                    <a href="#" class="text-xs text-gray-800 font-semibold uppercase">More</a>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Foods & Beverages</p>
                            <h3 class="mt-1 text-lg text-blue-500 font-bold">$ 818</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 3 Hours ago</span>
                        </div>
                        <div class="bg-blue-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="assets/dish-2.png" alt="icon" class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Groceries</p>
                            <h3 class="mt-1 text-lg text-green-500 font-bold">$ 8,918</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 3 Days ago</span>
                        </div>
                        <div class="bg-green-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="assets/grocery.png" alt="icon" class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Gaming</p>
                            <h3 class="mt-1 text-lg text-yellow-500 font-bold">$ 1,223</h3>
                            <span class="mt-4 text-xs text-gray-600">Last Transaction 4 Days ago</span>
                        </div>
                        <div class="bg-yellow-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="assets/gaming.png" alt="icon" class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Trip & Holiday</p>
                            <h3 class="mt-1 text-lg text-indigo-500 font-bold">$ 5,918</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 1 Month ago</span>
                        </div>
                        <div class="bg-indigo-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="assets/holiday.png" alt="icon" class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Second Row -->
            <!-- Start Third Row -->
            <div class="grid grid-cols-1 md:grid-cols-5 items-start px-4 xl:p-0 gap-y-4 md:gap-6">
                <div class="col-start-1 col-end-5">
                    <h2 class="text-xs md:text-sm text-gray-800 font-bold tracking-wide">Summary Transactions</h2>
                </div>
                <div class="col-span-2 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 flex justify-between items-center">
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Daily</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 27.80</h2>
                        </div>
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Weekly</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 192.92</h2>
                        </div>
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Monthly</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 501.10</h2>
                        </div>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-sm text-gray-600 font-bold tracking-wide">Latest Auditing</h2>
                        <a href="/logistic-2/Pages/Audit-Management/Audit%20Item.php"
                            class="px-4 py-2 text-xs bg-blue-100 text-blue-500 rounded uppercase tracking-wider font-semibold hover:bg-blue-300">More</a>
                    </div>
                    <ul class="divide-y-2 divide-gray-100 overflow-x-auto w-full">
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Bond paper</p>
                            <p class="px-4 tracking-wider">Good Item 50</p>
                            <p class="px-4 text-blue-600">Bad Item 30</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                1,000
                                
                            
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">BallPen</p>
                            <p class="px-4 tracking-wider">Godd Item 39</p>
                            <p class="px-4 text-blue-600">Bad Item 12</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                590
                               
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Chair</p>
                            <p class="px-4 tracking-wider">Good Item 3</p>
                            <p class="px-4 text-blue-600">Bad Item 3</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                1,500
                               
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Notebook</p>
                            <p class="px-4 tracking-wider">Good Item 32</p>
                            <p class="px-4 text-blue-600">Bad Item 12</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                2,100
                                
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Pencil</p>
                            <p class="px-4 tracking-wider">Good Item 12</p>
                            <p class="px-4 text-blue-600">Bad Item 21</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                               790
                               
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Bond Paper 12</p>
                            <p class="px-4 tracking-wider">Good Item 12</p>
                            <p class="px-4 text-blue-600">Bad Item 32</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                3,220
                                
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Third Row -->
        </div>
    </main>
    <!-- End Main -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        const data = {
            labels: [
                'Food & beverages',
                'Groceries',
                'Gaming',
                'Trip & holiday',
            ],
            datasets: [{
                label: 'Total Expenses',
                data: [148, 150, 130, 170],
                backgroundColor: [
                    '#3B82F6',
                    '#10B981',
                    '#6366F1',
                    '#F59E0B'
                ]
            }]
        };

        const config = {
            type: 'polarArea',
            data: data,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                }
            }
        };

        const chart = new Chart(ctx, config);
    </script>

</body>

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