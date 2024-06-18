<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="style.css"> <!-- Hubungkan dengan file CSS -->
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
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
            background-color: #e9e9e9;
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        tfoot {
            font-weight: bold;
        }
    </style>

    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "login";
    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
        $dekorasi = $_POST['dekorasi'];
        $harga = $_POST['harga'];

        $sql_insert = "INSERT INTO datapemesanan (nama_pelanggan, tanggal_pemesanan, dekorasi, harga) VALUES ('$nama_pelanggan', '$tanggal_pemesanan', '$dekorasi', '$harga')";

        if (mysqli_query($conn, $sql_insert)) {
            echo "<p style='text-align:center; color:green;'>Pemesanan berhasil disimpan!</p>";
        } else {
            echo "<p style='text-align:center; color:red;'>Error: " . $sql_insert . "<br>" . mysqli_error($conn) . "</p>";
        }
    }
    ?>

    <h1>Data Pemesanan</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Pemesanan</th>
                <th>Dekorasi yang Dipesan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM datapemesanan";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nama_pelanggan'] . "</td>";
                echo "<td>" . $row['tanggal_pemesanan'] . "</td>";
                echo "<td>" . $row['dekorasi'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "</tr>";
                $no++;
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data pemesanan</td></tr>";
        }

        mysqli_close($conn);
        ?>
        </tbody>
    </table>
</body>
</html>
