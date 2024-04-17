<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/documents/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah";

            // Buat thumbnail
            $thumbnailPath = "uploads/thumbnails/" . basename($_FILES["fileToUpload"]["name"]);
            createThumbnail($targetFile, $thumbnailPath, 200);
        } else {
            echo "Gagal mengunggah dokumen";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

function createThumbnail($filePath, $thumbPath, $thumbWidth) {
    list($width, $height) = getimagesize($filePath);
    $aspectRatio = $width / $height;
    $thumbHeight = $thumbWidth / $aspectRatio;

    $sourceImage = imagecreatefromjpeg($filePath);
    $thumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);

    imagecopyresampled($thumbImage, $sourceImage, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);

    imagejpeg($thumbImage, $thumbPath);
    imagedestroy($sourceImage);
    imagedestroy($thumbImage);
}
?>
