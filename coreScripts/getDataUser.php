<?php
session_start();
date_default_timezone_set('Asia/tehran');
require_once('jdf.php');
require_once('../config/DBConfig.php');

if (!$_SESSION['checkLogin']) {
    header('Location:index.php');
    exit;
}
$user = $_POST["username"];

$command = "select * from users where (username = ?)";
$stmt = $conn->prepare($command);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo '
    <div class = "form-group">
        <label>نام کاربری:</label>
        <input readonly type = "text" name = "username" class = "form-control" value = "' . $row["username"] . '">
    </div>

    <div class = "form-group">
        <label>نام:</label>
        <input type = "text" name = "fullname" class = "form-control" value = "' . $row["fullname"] . '">
    </div>

    <div class = "form-group">
        <label>شماره تماس:</label>
        <input type = "text" name = "phone" class = "form-control" value = "' . $row["phone"] . '">
    </div>

    <div class = "form-group">
        <label>ایمیل:</label>
        <input type = "email" name = "email" class = "form-control" value = "' . $row["email"] . '">
    </div>

    <div class = "form-group">
        <label>رمز:</label>
        <input type = "password" name = "pass" class = "form-control">
    </div>

    <div class = "form-group">
        <label>تکرار رمز:</label>
        <input type = "password" name = "repass" class = "form-control">
    </div>

    <div>
        <button class="btn btn-primary">ویرایش</button>
    </div>
    
    ';
}
