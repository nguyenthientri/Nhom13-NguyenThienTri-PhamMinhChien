<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "thanhvien";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    // die("Connection failed: ". mysqli_connect_error());
    echo ("kết nối thất bại");
} else {
    echo ("kết nối thành công");
}
