<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Decoration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    .book_section {
      background: #E9F0F8;
      padding: 60px 0;
    }

    .heading_container h2 {
      font-size: 36px;
      color: #333;
      text-align: center;
      margin-bottom: 40px;
    }

    .form_container {
      background: #fff;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      max-width: 500px;
      margin: 0 auto;
    }

    .form-control {
      width: 100%;
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .form-control:focus {
      border-color: #80bdff;
      outline: none;
    }

    .btn_box {
      text-align: center;
    }

    .button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<!-- book section -->
<section class="book_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Order Decoration
      </h2>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="form_container">
          <form action="datapemesanan.php" method="POST">
            <div>
              <input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama Pelanggan" required />
            </div>
            <div>
              <input type="date" class="form-control" name="tanggal_pemesanan" placeholder="Tanggal Pemesanan" required />
            </div>
            <div>
              <input type="text" class="form-control" name="dekorasi" placeholder="Dekorasi yang dipesan" required />
            </div>
            <div>
              <input type="number" class="form-control" name="harga" placeholder="Harga" required />
            </div>
            <div class="btn_box">
              <button type="submit" class="button">Book Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
