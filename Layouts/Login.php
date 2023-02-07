<?php 
  include('Connection.php');
session_start();
  if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $username =mysqli_real_escape_string($db,$_POST['email']);
        $password = md5(mysqli_real_escape_string($db,$_POST['password']));

        $sql = "SELECT * FROM `login` where `Email` = '$username' and Pass = '$password'";
        $isFind= mysqli_query($db, $sql);
        

        if(mysqli_num_rows ( $isFind ) > 0){
          $row= mysqli_fetch_assoc($isFind);  
          $_SESSION["email"]=$row["Email"];
          $_SESSION["password"]=$row["Pass"];
          echo "login success";

          header("location:/logistic-2/Pages/Vendor-Portal/Dashboard.php");
           
        }
        
        else {echo "password wrong";}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <meta name="author" content="David Grzyb">
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
<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">
    <?php 
    if(isset($_SESSION['message'])){ ?>
      <script>
       swal({
            title: "<?php echo $_SESSION['message'];?>",
            icon: 'success',
            button: "OK"
            })
      </script>
  <?php unset($_SESSION['message']); }?>

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">WELCOME</p>
                <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="flex  flex-col gap-y-4 border w-[300px] h-[300px] p-4">
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="text" id="email" name="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
    
                    <input type="submit" name="submit" value="Log In" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Don't have an account? <a href="register.php" class="underline font-semibold">Register here.</a></p>
                </div>
            </div>

        </div>
      
        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="/logistic-2/assets/ayee.png">
        </div>
    </div>

</body>
</html>