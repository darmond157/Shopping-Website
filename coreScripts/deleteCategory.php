<?php

session_start();
require_once("../config/DBConfig.php");

if (!$_SESSION['checkLogin']) {
  header('Location: index.php');
  exit;
}

if ($_GET) {
  var_dump($_GET);
  $categoryName = $_GET["categoryName"];

  $command = "delete from categories where(categoryName = ?)";
  $stmt = $conn->prepare($command);
  $stmt->bind_param("s", $categoryName);
  $stmt->execute();
  $result = $stmt->get_result();

  header("Location: ../adminpanel/category.php");
  exit;
}
