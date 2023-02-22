<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if(isset($_FILES["file"])) {
    $file_name = $_FILES["file"]["name"];
    $file_tmp_name = $_FILES["file"]["tmp_name"];
    $file_type = $_FILES["file"]["type"];
    $file_size = $_FILES["file"]["size"];
    

    $allowed_types = array("image/png", "image/jpeg", "image/jpg");
    if(in_array($file_type, $allowed_types)) {

      move_uploaded_file($file_tmp_name, "ImageStorage/" . $file_name);
      

    
    } else {
      echo "File type not allowed.";
    }
  }
}
?>
