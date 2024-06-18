<?php
$host = "localhost";
$username = "root"; // sesuaikan dengan username Anda
$password = ""; // sesuaikan dengan password Anda
$database = "login"; // sesuaikan dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
?>
