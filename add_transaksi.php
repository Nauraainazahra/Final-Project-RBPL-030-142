<?php include 'koneksi_transaksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
    </style>
</head>
<body>
    <h2>Tambah Transaksi</h2>
    <form action="datatransaksi.php" method="POST">
        <label>Nama Pelanggan:</label><br>
        <input type="text" name="customer_name"><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br>
        <label>Telepon:</label><br>
        <input type="text" name="phone"><br>
        <label>Tipe Dekorasi:</label><br>
        <input type="text" name="decoration_type"><br>
        <label>Jumlah:</label><br>
        <input type="number" name="quantity"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
