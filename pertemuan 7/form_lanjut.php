<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form method="POST" action="proses_lanjut.php">
            <label for="buah">Pilih BUAH:</label>
            <SELECT name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </SELECT>

            <br>

            <label>Pilih Warna Favorit:</label><br>
            <input type="checkbox" name="warna[]" value="merah"> Merah<br>
            <input type="checkbox" name="warna[]" value="biru"> Biru<br>
            <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

            <br>

            <label>Pilih Jenis Kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-lak"> Lkai-Laki<br>
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>

            <br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    $selectedJenisKelamin =$_POST['jenis_kelamin'];

    echo "Anda memilih buah: " . $selectedWarna . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else{
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin anda: " . $selectedJenisKelamin;
}