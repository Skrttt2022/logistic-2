<?php
include(__DIR__ . '/connect.db.php');
require_once(__DIR__ . '/vendor/autoload.php');
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();




$filename = $_FILES['upload_file']['name'];
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/test/upload/';
$uploadfile = $uploaddir . basename($filename);

move_uploaded_file($_FILES['upload_file']['tmp_name'], $uploadfile);

$reader->setReadDataOnly(true);
$spreadsheet = $reader->load($uploadfile);
$sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
$data = $sheet->toArray();

function deleteRows($db){
    $sql = "DELETE FROM `account`";
    $result = $db->query($sql);
}

for ($i=0; $i < count($data); $i++) { 
        $date = date('m-Y');
        $firstname = $data[$i][0];
        $lastname = $data[$i][1];
        $sql = "INSERT INTO `account`(`fistname`, `lastname`,`createdAt`) VALUES (' $firstname','$lastname','$date')";
        $db->query($sql);
}

$response = array(
    'message'=>$_FILES['upload_file'],
    "success"=>true
);  

echo json_encode($response);







