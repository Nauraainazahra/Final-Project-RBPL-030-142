<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "UPDATE datapelanggan SET nama='$nama', alamat='$alamat', phone='$phone', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data pelanggan berhasil diperbarui.";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
