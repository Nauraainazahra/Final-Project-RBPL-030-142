<?php
// Koneksi ke database
$host = "localhost"; // Ganti sesuai dengan host Anda
$username = "root"; // Ganti sesuai dengan username database Anda
$password = ""; // Ganti sesuai dengan password database Anda
$database = "login"; // Ganti sesuai dengan nama database Anda

// Buat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari formulir
$total = $_POST["total"];
$payment_method = $_POST["payment_method"];

// Masukkan data pembayaran ke dalam database
$sql = "INSERT INTO pembayaran (total, payment_method) VALUES ('$total', '$payment_method')";

if ($koneksi->query($sql) === TRUE) {
    echo "Pembayaran berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
