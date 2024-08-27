<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "shoe";

// // Kết nối với cơ sở dữ liệu
// $conn = mysqli_connect($server, $user, $pass, $database);

$conn = new mysqli($server, $username, $password, $database);

mysqli_query($conn, 'set names "utf8"');

?>
