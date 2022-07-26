<?php
session_start();
header("Content-type: image/png");

$string = "0123456789";
$str = "";
for ($i = 0; $i < 5; $i++) {
    $pos = rand(0, 9);
    $str .= $string[$pos];
}
$img_handle = ImageCreate(60, 22) or die("No Image");
$back_color = ImageColorAllocate($img_handle, 102, 102, 153);
$txt_color = ImageColorAllocate($img_handle, 255, 255, 255);
ImageString($img_handle, 31, 5, 0, $str, $txt_color);
Imagepng($img_handle);
$_SESSION['captchaCode'] = $str;
