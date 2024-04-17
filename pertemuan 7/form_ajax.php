<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP dan jQuery</title>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form id="myForm">
            <label for="buah">Pilih Buah:</label>
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
            <input type="radio" name="jenis_kelamin" value="laki-lak"> Laki-Laki<br>
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>

            <br>

            <input type="submit" value="Submit">
        </form>
        <div id="hasil">

        </div>
        <script>
            $(document).ready(function() {
                $("#myForm").submit(function (e) {
                    e.preventDefault();

                    var formData = $("#myForm").serialize();

                    $.ajax({
                        url: "proses_lanjut.php",
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            $("#hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
