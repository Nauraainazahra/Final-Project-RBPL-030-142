<?php
// Lakukan koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Tangkap data dari formulir
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validasi password
if ($password != $confirm_password) {
    echo "Password dan konfirmasi password tidak sesuai.";
    exit();
}

// Enkripsi password sebelum disimpan ke database
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Query untuk memasukkan data ke database
$sql = "INSERT INTO pelanggan (username, email, password) VALUES ('$username', '$email', '$password_hash')";

if (mysqli_query($koneksi, $sql)) {
    echo "Pendaftaran berhasil.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
