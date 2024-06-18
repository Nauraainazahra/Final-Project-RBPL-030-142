<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Pelanggan</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body{
      font-family: 'Roboto', sans-serif;
      background-color: #eef2f3;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
    }

    h2 {
      text-align: center;
      color: #007bff;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: #007bff;
      outline: none;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #0056b3;
    }

    table {
      width: 100%;
      margin-top: 40px;
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    .actions {
      display: flex;
      gap: 5px;
    }

    .actions button {
      padding: 5px 10px;
    }

    .back-button {
      margin-top: 20px;
      text-align: center;
    }

    .back-button button {
      background-color: #6c757d;
      transition: background-color 0.3s;
    }

    .back-button button:hover {
      background-color: #5a6268;
    }

    @media (max-width: 600px) {
      .container {
        padding: 15px;
      }

      h2 {
        font-size: 24px;
      }

      button {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <h2>Pendaftaran Pelanggan</h2>
  <?php
  // Menyertakan file konfigurasi untuk koneksi database
  include 'config.php';

  // Mengambil data dari database
  $result = $conn->query("SELECT * FROM datapelanggan");

  if ($result->num_rows > 0) {
      echo "<table>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>";
      while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>".$row['id']."</td>
                  <td>".$row['nama']."</td>
                  <td>".$row['alamat']."</td>
                  <td>".$row['phone']."</td>
                  <td>".$row['email']."</td>
                  <td class='actions'>
                    <form action='edit.php' method='post' style='display:inline;'>
                      <input type='hidden' name='id' value='".$row['id']."'>
                      <button type='submit'>Edit</button>
                    </form>
                    <form action='delete.php' method='post' style='display:inline;'>
                      <input type='hidden' name='id' value='".$row['id']."'>
                      <button type='submit'>Delete</button>
                    </form>
                  </td>
                </tr>";
      }
      echo "</table>";
  } else {
      echo "Tidak ada data pelanggan.";
  }

  $conn->close();
  ?>
  <div class="back-button">
    <button onclick="location.href='laporan.php'">Kembali ke Laporan</button>
  </div>
</body>
</html>
