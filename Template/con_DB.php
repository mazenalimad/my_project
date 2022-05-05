<?php
// ملف اتصال بقاعدة البيانات 
$servername = "127.0.0.1";
$username = "root";
$password = NULL;
$dbname = "Book"; 

// create connection 
$con = new \MySQLi($servername, $username, $password, $dbname);

//check connection 
if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
}

?>
