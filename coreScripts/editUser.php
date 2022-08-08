<?php
session_start();
require_once('../config/DBConfig.php');

if (!$_SESSION['checkLogin']) {
    header('Location:index.php');
    exit;
}

if ($_POST) {


    if ($_POST["pass"] == $_POST["repass"]) {

        $username = $_POST["username"];
        $fullname = $_POST["fullname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $repass = $_POST["repass"];
        $passHash = password_hash($pass, PASSWORD_DEFAULT);
        $result = '';

        if ($_POST["pass"] != "") {
            $command = "update users set fullname=?,phone=?,email=?,password=? where(username=?)";
            $stmt = $conn->prepare($command);
            $stmt->bind_param("sssss", $fullname, $phone, $email, $passHash, $username);
            $result = $stmt->execute();
            if ($result) {
                echo '<p class="alert alert-success">ویرایش با موفقیت انجام شد.</p>';
            } else {
                echo '<p class="alert alert-danger>خطا در ویرایش اطلاعات.</p>';
            }
        } else {
            $command = "update users set fullname=?,phone=?,email=? where(username=?)";
            $stmt = $conn->prepare($command);
            $stmt->bind_param("ssss", $fullname, $phone, $email, $username);
            $result = $stmt->execute();
            if ($result) {
                echo '<p class="alert alert-success">ویرایش با موفقیت انجام شد.</p>';
            } else {
                echo '<p class="alert alert-danger>خطا در ویرایش اطلاعات.</p>';
            }
        }
    } else {
        echo '<p class="alert alert-danger">تکرار رمز عبور صحیح نمی باشد</p>';
    }
}
