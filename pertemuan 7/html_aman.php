<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Input: <input type="text" name="input">
        Email: <input type="text" name="email">
        <input type="submit">
    </form>

    <?php
    // Proses form jika sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi dan sanitasi input
        $input = $_POST['input'] ?? '';
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        $email = $_POST['email'] ?? '';
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email yang dimasukkan: " . $email;
        } else {
            // Tangani input email yang tidak valid
            echo "Email tidak valid";
        }

        // Lanjutkan dengan penggunaan $input yang sudah divalidasi
        // Misalnya, menampilkan kembali input
        echo "<br>Input yang dimasukkan: " . $input;
    }
    ?>
</body>
</html>
