<?php

session_start();
require_once("../lib/utility.php");
require_once("../config/DBConfig.php");

$_SESSION['checkLogin'] = false;
$_SESSION['userAdmin'] = "";

$siteKey = "";
$secretKey = "";
$captcha = "";

$command2 = "select * from captcha";
$stmt2 = $conn->prepare($command2);
$stmt2->execute();
$result2 = $stmt2->get_result();

while ($row = $result2->fetch_assoc()) {
  $siteKey = $row["siteKey"];
  $secretKey = $row["secretKey"];
}

$browser = getBrowser();
$ip = getIp();
$os = getOS();
$url = getUrl();
$command3 = "insert into logs (url,ip,os,browser) values (?,?,?,?)";
$stmt = $conn->prepare($command3);
$stmt->bind_param("ssss", $url, $ip, $os, $browser);
$stmt->execute();

$message = "";

if ($_POST) {

  $command2 = "select * from captcha";
  $stmt2 = $conn->prepare($command2);
  $stmt2->execute();
  $result2 = $stmt2->get_result();

  while ($row = $result2->fetch_assoc()) {
    $siteKey = $row["siteKey"];
    $secretKey = $row["secretKey"];
  }


  $_SESSION['checkLogin'] = false; //more security

  $username = $_POST["username"];
  $password = $_POST["password"];

  if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
  }

  if ($captcha == "") {
    $message = "<p class='alert alert-danger'>خطا در تکمیل کپچا</p>";
  } else {

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $output = file_get_contents($url);
    $data = json_decode($output);

    // file_put_contents("../log.txt",var_export($data,true),PHP_EOL,FILE_APPEND);

    if ($data->success) {

      $command = "select * from login where(username = ?)";
      $stmt = $conn->prepare($command);
      $stmt->bind_param("s", $username); // there is one String to Bind ("s")
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows == 1) {

        while ($row = $result->fetch_assoc()) {

          $passHash = $row['pass'];
          if (password_verify($password, $passHash)) {
            $_SESSION['checkLogin'] = true;
            $_SESSION['userAdmin'] = $username;
            header('Location: dashboard.php');
            exit;
          } else {
            $_SESSION['checkLogin'] = false;
            $message = '<p class="alert alert-danger">نام کاربری یا رمز عبور اشتباه است</p>';
          }
        }
      } else {
        $_SESSION['checkLogin'] = false;
        $message = '<p class="alert alert-danger">نام کاربری یا رمز عبور اشتباه است</p>';
      }
    } else {
      $message = "<p class='alert alert-danger'>خطا در کپچا</p>";
    }
  }
}


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل مدیریت | صفحه ورود</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="dist/css/custom-style.css">

  <script src='https://www.google.com/recaptcha/api.js?hl=fa' async defer></script>

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index2.php"><b>ورود به سایت</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>
        <?php
        echo $message;
        ?>
        <form method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="نام کاربری">
            <div class="input-group-append">
              <span class="fa fa-user input-group-text"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="رمز عبور">
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> یاد آوری من
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      })
    })
  </script>
</body>

</html>