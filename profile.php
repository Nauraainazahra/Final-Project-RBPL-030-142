<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ganti Profil</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 20px;
      background: linear-gradient(135deg, #f4f4f4 25%, #e2e2e2 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
    }

    h3 {
      text-align: center;
      color: #007bff;
      margin-bottom: 30px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #333333;
      font-weight: bold;
    }

    .profile-picture-wrapper {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .profile-picture-wrapper img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    input[type="file"],
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #cccccc;
      border-radius: 8px;
      box-sizing: border-box;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    input:focus,
    textarea:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.1s;
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    button:hover {
      background-color: #0056b3;
    }

    button:active {
      transform: translateY(1px);
    }

    .back-button {
      text-align: center;
      margin-top: 20px;
    }

    .back-button a {
      text-decoration: none;
      color: #007bff;
      font-size: 16px;
      transition: color 0.3s;
    }

    .back-button a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    .back-button button {
      width: auto;
      padding: 10px 20px;
      background-color: #f8f9fa;
      color: #007bff;
      border: 2px solid #007bff;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      display: inline-block;
    }

    .back-button button:hover {
      background-color: #007bff;
      color: #fff;
    }

  </style>
</head>
<body>
  <form id="profileForm" action="update_profile.php" method="post" enctype="multipart/form-data">
    <h3>Ganti Profil</h3>
    <div class="profile-picture-wrapper">
      <img id="profileImage" src="default-profile.png" alt="Foto Profil">
    </div>
    <label for="profile_picture">Foto Profil:</label>
    <input type="file" name="profile_picture" id="profile_picture" accept="image/*" onchange="loadFile(event)"><br>
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
    <label for="phone">No. Telepon:</label>
    <input type="tel" name="phone" id="phone" required><br>
    <label for="address">Alamat:</label>
    <textarea name="address" id="address" rows="4" required></textarea><br>
    <button type="submit">Simpan Perubahan</button>
  </form>
  
  <div class="back-button">
    <a href="home.php"><button>Kembali ke Home</button></a>
  </div>

  <script>
    function loadFile(event) {
      var image = document.getElementById('profileImage');
      image.src = URL.createObjectURL(event.target.files[0]);
    }

    document.getElementById("profileForm").addEventListener("submit", function(event) {
      event.preventDefault();
      var formData = new FormData(this);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "update_profile.php", true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          showSuccessMessage();
        }
      };
      xhr.send(formData);
    });

    function showSuccessMessage() {
      alert("Data berhasil disimpan!");
    }
  </script>
</body>
</html>
