<?php
include 'koneksi_transaksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $decoration_type = $_POST['decoration_type'];
    $quantity = $_POST['quantity'];
    $transaction_date = date("Y-m-d");

    $sql = "INSERT INTO transaksi (nama, email, phone, decoration_type, quantity, transaction_date) 
            VALUES ('$nama', '$email', '$phone', '$decoration_type', '$quantity', '$transaction_date')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Transaksi berhasil disimpan.";
        header("Location: data_transaksi.php"); // Alihkan ke halaman daftar transaksi
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
