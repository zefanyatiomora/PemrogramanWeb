<?php
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb2");

if (mysqli_connect_errno()) {
    die("Koneksi database gagal:" . mysqli_connect_error());
}
?>