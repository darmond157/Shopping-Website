<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopBardia";

// $conn -> set_charset('utf8');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die(" خطا در اتصال به پایگاه داده " . $conn->connect_error);
}
 
?>