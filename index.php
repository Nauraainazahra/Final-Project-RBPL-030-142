<?php
include 'config.php';
$result = $conn->query("SELECT * FROM datapelanggan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pelanggan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Daftar Pelanggan</h2>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
      <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>
          <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
          <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </table>
    <a href="home.html">Tambah Pelanggan Baru</a>
  </div>
</body>
</html>
