<?php
include 'config.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO datapelanggan (nama, alamat, phone, email) VALUES ('$nama', '$alamat', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Pelanggan baru berhasil didaftarkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
