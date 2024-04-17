<?php
$targetDirectory = "uploads/images/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['images']['name'][0]) {
    $totalImages = count($_FILES['images']['name']);

    for ($i = 0; $i < $totalImages; $i++) {
        $imageName = $_FILES['images']['name'][$i];
        $targetFile = $targetDirectory . $imageName;

        if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)) {
            echo "Gambar $imageName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah gambar $imageName.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah";
}
?>
