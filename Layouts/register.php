

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Register Template</title>
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

        <!-- Register Section -->
        <div class="w-full md:w-1/2 flex flex-col">

           

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Create an account</p>
                <form class="flex flex-col pt-3 md:pt-8" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <div class="flex flex-col pt-4">
                        <label for="name" class="text-lg">Name</label>
                        <input type="text" name="name" id="name" placeholder="John Smith" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="email" name="email"  id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="confirm-password"  class="text-lg">Confirm Password</label>
                        <input type="password" 
                        name="confirmpassword" id="confirm-password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
                    </div>
    
                    <button type="submit" name="Register"  value="Register" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" >Register</button>
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Already have an account? <a href="Login.php" class="underline font-semibold">Log in here.</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="/logistic-2/assets/ayee.png" alt="Background" />
        </div>
    </div>

</body>
</html>
<?php 
   include('Connection.php');
session_start();

    if(isset($_POST['Register'])){

        $name = $_POST['name'];
         $email = $_POST['email'];
        $password = md5($_POST['password']);
         $confirmpassword = md5($_POST['confirmpassword']);
        $time = time();
        
        if(!empty($username)&& !empty($password)){
        $sql = "insert into login(FName, Email, Pass, ConfirmPassword) values('$name', '$email', '$password', '$confirmpassword')";
        
        $isFind= mysqli_query($db, $sql);

$_SESSION["message"]= " Successfully Created Accounted!";
echo '<script>swal({
  title: " Successfully Created Accounted!",
  text: "You clicked the button!",
  icon: "success",
});</script>';
        
    header("location:Login.php");

        }
else{
    echo "Input the Username and Password";
}

echo "Input the Username and Password";
    }

?>