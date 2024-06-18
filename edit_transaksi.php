<?php include 'koneksi_transaksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Transaksi</title>
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
    </style>
</head>
<body>
    <h2>Edit Transaksi</h2>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM transaksi WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="datatransaksi.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Nama Pelanggan:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        <label>Telepon:</label><br>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
        <label>Tipe Dekorasi:</label><br>
        <input type="text" name="decoration_type" value="<?php echo $row['decoration_type']; ?>"><br>
        <label>Jumlah:</label><br>
        <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
