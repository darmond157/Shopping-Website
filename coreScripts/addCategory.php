<?php

session_start();
require_once("../config/DBConfig.php");

if (!$_SESSION['checkLogin']) {
  header('Location: index.php');
  exit;
}

if ($_POST) {

  $categoryName = $_POST["categoryName"];

  $command = "insert into categories (categoryName) values (?)";
  $stmt = $conn->prepare($command);
  $stmt->bind_param("s", $categoryName);
  $stmt->execute();
  $result = $stmt->get_result();

  header("Location: ../adminpanel/category.php");
  exit;
}
