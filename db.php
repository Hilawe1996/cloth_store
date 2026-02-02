<?php
$host = "shortline.proxy.rlwy.net";
$user = "root";
$password = "YOUR_REAL_PASSWORD";  // copy EXACT from Railway
$database = "railway";
$port = 32927;

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
