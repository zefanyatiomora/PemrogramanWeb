<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $allowedExtensions = array("jpg", "jpeg", "png");
    if (empty($_POST["namaLengkap"]) || empty($_POST["email"]) || empty($_POST["nim"]) || empty($_POST["universitas"]) || empty($_POST["kategori"]) || empty($_FILES["berkasKTP"]["name"])) {
        $_SESSION["notification"] = "Pendaftaran Gagal! Mohon lengkapi semua kolom.";
    } else {
        $fileExtension = pathinfo($_FILES["berkasKTP"]["name"], PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            $_SESSION["notification"] = "Pendaftaran Gagal! Format berkas KTP harus dalam format JPG, JPEG, atau PNG.";
        } else {
            $_SESSION["notification"] = "Pendaftaran berhasil!";
            // Simpan data pendaftaran ke dalam session
            $_SESSION["last_registration"] = array(
                "namaLengkap" => $_POST["namaLengkap"],
                "email" => $_POST["email"],
                "nim" => $_POST["nim"],
                "universitas" => $_POST["universitas"],
                "kategori" => $_POST["kategori"],
                "berkasKTP" => $_FILES["berkasKTP"]["name"]
            );
            // Set cookie untuk status pendaftaran berhasil
            setcookie("registration_status", "success", time() + (86400 * 30), "/");
        }
    }
}
header("Location: form-pendaftaran.html");
exit();
?>
