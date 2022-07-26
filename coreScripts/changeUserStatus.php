<?php 
session_start();
require_once('../config/DBConfig.php');
if($_SESSION['checkLogin']==false){
    header('Location: index.php');
    exit;
}
if($_GET){
    $user = $_GET['username'];
    $status = $_GET['status'];
    $command = "update users set status = ? where (username = ?)";
    $stmt=$conn->prepare($command);
    $stmt->bind_param("ss",$status,$user);
    $result = $stmt -> execute();
}


header('Location: ../adminpanel/users.php');
exit;

?>