<?php
require_once('../config/DBConfig.php');
$username = $_POST["username"];
$command = "select * from users where(username = ?)";

$stmt = $conn->prepare($command);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    echo "true";
} else {
    echo "false";
}

exit;