<?php
// Konfigurasi koneksi ke database
$host = "localhost"; // Host database (biasanya localhost)
$username = "phpmyadmin"; // Username database
$password = "phpmyadmin"; // Password database
$database = "prakwebdb2"; // Nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
