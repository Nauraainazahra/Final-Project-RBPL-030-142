<?php include 'koneksi_transaksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        a.edit {
            color: #28a745;
        }

        a.delete {
            color: #dc3545;
        }

        a.add {
            display: block;
            margin: 20px 0;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }

        a.add:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Daftar Transaksi</h2>
    <a href="tambahtransaksi.php" class="add">Tambah Transaksi Baru</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Tipe Dekorasi</th>
            <th>Jumlah</th>
            <th>Tanggal Transaksi</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM transaksi";
        $result = mysqli_query($koneksi, $sql);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['decoration_type']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['transaction_date']; ?></td>
                <td>
                    <a href="edit_transaksi.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                    <a href="delete_transaksi.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
