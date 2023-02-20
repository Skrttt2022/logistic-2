<?php
include('../../logistic-2/Layouts/Connection.php');
// $sql = "SHOW TABLES";
//     $result = $db->query($sql);
//     $tables = $result->fetch_all(MYSQLI_ASSOC);
//
$tables = [
    array('name'=>'Jan','date'=>'01-2023'),
    array('name'=>'Feb','date'=>'02-2023'),
    array('name'=>'Mar','date'=>'02-2023'),
    array('name'=>'Apr','date'=>'02-2023'),
    array('name'=>'May','date'=>'02-2023'),
    array('name'=>'Jun','date'=>'02-2023'),
    array('name'=>'Jul','date'=>'02-2023'),
    array('name'=>'Aug','date'=>'02-2023'),
    array('name'=>'Sep','date'=>'02-2023'),
    array('name'=>'Oct','date'=>'02-2023'),
    array('name'=>'Nov','date'=>'02-2023'),
    array('name'=>'Dec','date'=>'02-2023'),

]
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel Uploading PHP</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
    <div class="container">
        <div>
            <h2>List of your table</h2>
            <select>
                <option value="Choose">Choose</option>
                
            <?php 
                for ($i=0; $i < count( $tables ) ; $i++) { 
              ?>
              <option value="<?php echo $tables[$i]['date']; ?>"><?php echo  $tables[$i]['name'];?></option>
        
         <?php 
            } 
            ?>
            </select>
        </div>
        <h1>Excel Upload</h1>

        <form id='save-record' enctype="multipart/form-data">
            <div class="form-group">
                <label>Upload Excel File</label>
                <input type="file" name="upload_file"  class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" name="Submit" class="btn btn-success">Upload</button>
            </div>
        </form>
    </div>

    <script>
        $("#save-record").submit(function(e){
            e.preventDefault()
            const input = document.querySelector('input[type=file]');
            var formData = new FormData(e.currentTarget);
            formData.append('upload_file', formData.get('upload_file'));
            fetch('asset_excel.php', {
                    method: 'POST',
                    body: formData
                }).then(function (res) {
                    return res.json()
                }).then(function (data) {
                        console.log(data)                    
                }).catch(function (error) {
                    console.log(error)
                });

        })
    </script>
    
</body>
</html>