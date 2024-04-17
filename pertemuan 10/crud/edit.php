<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    // Memuat file koneksi.php yang berisi informasi koneksi database
    include('koneksi.php');
    // Mendapatkan ID anggota dari URL
    $id = $_GET['id'];
    // Membentuk query untuk mengambil data anggota berdasarkan ID
    $query = "SELECT * FROM anggota WHERE id = $id";
    // Menjalankan query dan menyimpan hasilnya dalam variabel $result
    $result = mysqli_query($koneksi, $query);
    // Mengambil data anggota sebagai array asosiatif
    $row = mysqli_fetch_assoc($result);
    // Menutup koneksi database
    mysqli_close($koneksi);
    ?>
    <div class="container mt-4">
        <h2>Edit Data Anggota</h2>

        <form action="proses.php?aksi=ubah" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama: </label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>

            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if ($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if ($row['jenis_kelamin'] === 'P') echo 'checked'; ?> required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat: </label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp: </label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

        <a class="btn btn-secondary mt-2" href="index.php">Kembali</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
