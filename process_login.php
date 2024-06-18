<?php
session_start();
include 'koneksi.php'; // Sesuaikan nama file koneksi dengan konfigurasi Anda

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa keberadaan user dengan username dan password yang sesuai
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Jika login berhasil, arahkan ke halaman dashboard atau halaman lain
            $_SESSION['username'] = $username;
            header("location: home.php"); // Ganti home.php dengan halaman yang diinginkan setelah login berhasil
            exit(); // Pastikan untuk keluar dari skrip setelah redirect
        } else {
            // Jika tidak ada hasil yang cocok, beri tahu pengguna bahwa username atau password salah
            $error = "Username atau password salah.";
        }
    } else {
        // Jika terjadi kesalahan dalam menjalankan query, tampilkan pesan error
        $error = "Terjadi kesalahan dalam menjalankan kueri: " . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>
