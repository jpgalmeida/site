<?php 
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'root';
$DB_NAME = 'silabas';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

$mysqli->set_charset("utf8");
    
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>