<?php 
session_start();
require_once('../config/DBConfig.php');
if(!$_SESSION['checkLogin']){
    header('Location: index.php');
    exit;
}
if($_GET){
    $name = $_GET['name'];
    $command = "delete from offerCode where (name = ?)";
    $stmt=$conn->prepare($command);
    $stmt->bind_param("s",$name);
    $result = $stmt -> execute();
}


header('Location: ../adminpanel/offercodes.php');
exit;
