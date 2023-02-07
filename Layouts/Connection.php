<?php

$servername = 'localhost';
$username =  'root';
$password = '';
$dbname ='logistic2';

$db = new mysqli($servername, $username, $password ,$dbname);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
} 


// $GLOBALS['db'] = $db;

?>