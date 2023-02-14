<?php
include('../../logistic-2/Layouts/Connection.php');
require_once(__DIR__ . '/logistic-2/Pages/Audit-Management/Audit%20Item.php');
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();




$filename = $_FILES['upload_file']['name'];
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/logistic-2/uploads/';
$uploadfile = $uploaddir . basename($filename);
move_uploaded_file($_FILES['upload_file']['tmp_name'], $uploadfile);

$reader->setReadDataOnly(true);
$spreadsheet = $reader->load($uploadfile);
$sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
$data = $sheet->toArray();

function deleteRows($db){
    $sql = "DELETE FROM `warehouse_auditing`";
    $result = $db->query($sql);
}

for ($i=0; $i < count($data); $i++) { 
        $date = date('m-Y');
        $item = $data[$i][0];
        $good_item = $data[$i][0];
        $bad_item = $data[$i][0];
        $date = $data[$i][0];
        $sql = "INSERT INTO `warehouse_auditing`(`item`, `good_item`,`bad_item`, `date`) VALUES (' $item','$good_item','$bad_item','$date')";
        $db->query($sql);
}

$response = array(
    'message'=>$_FILES['upload_file'],
    "success"=>true
);  

echo json_encode($response);







