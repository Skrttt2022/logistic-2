<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/loader.css">
    <title>Document</title>
</head>
<body>
<div class="loader-wrapper">
<div class="truck-wrapper">
  <div class="truck">
    <div class="truck-container"></div>
    <div class="glases"></div>
    <div class="bonet"></div>

    <div class="base"></div>

    <div class="base-aux"></div>
    <div class="wheel-back"></div>
    <div class="wheel-front"></div>

    <div class="smoke"></div>
  </div>
</div>
</div>
<script>
    $(window).on('load',function(){
      $(".loader-wrapper").fadeOut(3000);
    });
  </script>
</body>
</html>