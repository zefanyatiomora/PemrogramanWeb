function validateForm() {
    var namaLengkap = document.getElementById("namaLengkap").value;
    var email = document.getElementById("email").value;
    var nim = document.getElementById("nim").value;
    var universitas = document.getElementById("universitas").value;
    var kategori = document.getElementById("kategori").value;
    var berkasKTP = document.getElementById("berkasKTP").value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

    if (namaLengkap == "" || email == "" || nim == "" || universitas == "" || kategori == "" || berkasKTP == "") {
        alert("Pendaftaran Gagal! Mohon lengkapi semua form.");
        return false;
    }

    if (!allowedExtensions.exec(berkasKTP)) {
        alert("Pendaftaran Gagal! Mohon untuk mengisi Form sesuai format");
        return false;
    }

    // Set cookie for successful registration
    document.cookie = "registration_status=success";

    // Display success notification
    alert("Pendaftaran berhasil!");
    return true;
}