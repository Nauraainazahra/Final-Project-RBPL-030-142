<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pembayaran</title>
  <link rel="stylesheet" href="style.css"> <!-- Ganti style.css dengan file CSS Anda -->
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 500px;
      margin: 50px auto; /* Membuat form berada di tengah dengan jarak atas */
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #007bff;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #333;
      font-weight: bold;
    }

    select, button {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }

    select {
      background-color: #f9f9f9;
      transition: background-color 0.3s;
    }

    select:focus {
      background-color: #e9e9e9;
      outline: none;
      border-color: #007bff;
    }

    button {
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
      font-weight: bold;
    }

    button:hover {
      background-color: #0056b3;
    }

    button:active {
      background-color: #004494;
    }

    .back-button {
      background-color: #6c757d;
      margin-top: 10px;
      width: auto; /* Membuat lebar tombol sesuai dengan konten */
      padding: 10px 20px; /* Menambah padding untuk tampilan yang lebih baik */
      display: block; /* Membuat tombol tampil sebagai blok */
      margin-left: auto; /* Mengatur margin kiri dan kanan untuk meratakan tombol */
      margin-right: auto;
      text-align: center;
    }

    .back-button:hover {
      background-color: #5a6268;
    }

    .back-button:active {
      background-color: #494e52;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="process_payment.php" method="post">
      <h1>Form Pembayaran</h1>
      <div class="form-group">
        <label for="total">Total Pembayaran:</label>
        <select name="total" id="total">
          <option value="2.250.000-">Rp 2.250.000-</option>
          <option value="3.000.000-">Rp 3.000.000-</option>
          <option value="2.700.000-">Rp 2.700.000-</option>
          <option value="2.300.000-">Rp 2.300.000-</option>
          <option value="1.500.000-">Rp 1.500.000-</option>
          <option value="5.000.000-">Rp 5.000.000-</option>
          <option value="4.000.000-">Rp 4.000.000-</option>
          <option value="3.200.000-">Rp 3.200.000-</option>
          <!-- Tambahkan pilihan total pembayaran lainnya sesuai kebutuhan -->
        </select>
      </div>
      <div class="form-group">
        <label for="payment_method">Metode Pembayaran:</label>
        <select name="payment_method" id="payment_method">
          <option value="e-wallet">E-Wallet</option>
          <option value="cash">Tunai</option>
        </select>
      </div>
      <button type="submit">Proses Pembayaran</button>
    </form>
  </div>
  <a href="home.php"><button type="button" class="back-button">Kembali ke Home</button></a>
</body>
</html>
