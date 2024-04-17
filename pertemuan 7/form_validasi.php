<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Menghentikan pengiriman formulir
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        type: "POST",
                        url: "proses_validasi.php",
                        data: { nama: nama, email: email, password: password },
                        success: function(response) {
                            if (response === "success") {
                                alert("Data berhasil dikirim");
                                $("#myForm")[0].reset(); // Mengosongkan formulir
                            } else {
                                var errors = JSON.parse(response);
                                if (errors.nama) {
                                    $("#nama-error").text(errors.nama);
                                } else {
                                    $("#nama-error").text("");
                                }
                                if (errors.email) {
                                    $("#email-error").text(errors.email);
                                } else {
                                    $("#email-error").text("");
                                }
                                if (errors.password) {
                                    $("#password-error").text(errors.password);
                                } else {
                                    $("#password-error").text("");
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
