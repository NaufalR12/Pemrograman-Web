<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $sambungan = mysqli_connect("localhost", "root", "", "klinik");

    if (!$sambungan) {
        die("Koneksi ke basis data gagal: " . mysqli_connect_error());
    }

    // Ambil data dari formulir
    $id_dokter = mysqli_real_escape_string($sambungan, $_POST['id_dokter']);
    $nama_dokter = mysqli_real_escape_string($sambungan, $_POST['nama_dokter']);
    $spesialisasi = mysqli_real_escape_string($sambungan, $_POST['spesialisasi']);
    $jam_praktik = mysqli_real_escape_string($sambungan, $_POST['jam_praktik']);

    // Mengelola gambar (foto profil)
    $gambar = $_FILES['gambar']['name'];
    $tmp_gambar = $_FILES['gambar']['tmp_name'];

    // Convert the image file to binary data
    $gambar_data = file_get_contents($tmp_gambar);
    $gambar_data = mysqli_real_escape_string($sambungan, $gambar_data);

    // Query untuk mengupdate data dokter, termasuk foto profil
    $query_update = "UPDATE dokter SET nama_dokter='$nama_dokter', spesialisasi='$spesialisasi', jam_praktik='$jam_praktik', foto_profil='$gambar_data' WHERE id_dokter = $id_dokter";

    $hasil_update = mysqli_query($sambungan, $query_update);

    if ($hasil_update) {
        echo "Data dokter berhasil diperbarui. <a href='tampil_dokter_admin.php'>Kembali ke daftar dokter</a>";
    } else {
        echo "Gagal memperbarui data dokter: " . mysqli_error($sambungan);
    }

    mysqli_close($sambungan);
} else {
    echo "Akses tidak sah!";
}
?>