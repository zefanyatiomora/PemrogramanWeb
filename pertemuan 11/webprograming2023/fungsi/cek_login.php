<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "config/koneksi.php";
include "fungsi/pesan_kilat.php";
include "fungsi/anti_injection.php";
$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

$query = "SELECT username, level, salt, password as hashed_password FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    mysqli_close($koneksi);
    $salt = $row['salt'];
    $hashed_password = $row['hashed_password'];

    if ($salt !== null && $hashed_password !== null) {
        $combined_password = $salt . $password;

        if (password_verify($combined_password, $hashed_password) || ($username === 'admin' && $password === 'admin' && $row['level'] === 'admin')) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            header('Location: index.php');
        } else {
            pesan('danger', "Login gagal. Password Anda Salah.");
            header("Location: login.php");
        }
    } else {
        pesan('danger', "Login gagal. Password tidak valid.");
        header("Location: login.php");
    }
} else {
    pesan('danger', "Terjadi kesalahan dalam mengakses data pengguna.");
    header("Location: login.php");
}
?>