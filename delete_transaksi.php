<?php
include 'koneksi_transaksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM transaksi WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: datatransaksi.php");
} else {
    echo "Error deleting record: " . mysqli_error($koneksi);
}
?>
