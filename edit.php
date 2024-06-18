<?php
include 'config.php';

$id = $_POST['id'];
$result = $conn->query("SELECT * FROM datapelanggan WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pelanggan</title>
</head>
<body>
  <div class="container">
    <h2>Edit Pelanggan</h2>
    <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
      </div>
      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
