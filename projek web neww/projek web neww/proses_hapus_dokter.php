<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $sambungan = mysqli_connect("localhost", "root", "", "klinik");

    if (!$sambungan) {
        die("Koneksi ke basis data gagal: " . mysqli_connect_error());
    }

    // Ambil ID dokter dari formulir
    $id_dokter = $_POST['id_dokter'];

    // Query untuk menghapus data dokter
    $query_hapus = "DELETE FROM dokter WHERE id_dokter = $id_dokter";
    $hasil_hapus = mysqli_query($sambungan, $query_hapus);

    if ($hasil_hapus) {
        echo "Data dokter berhasil dihapus. <a href='tampil_dokter_admin.php'>Kembali ke daftar dokter</a>";
    } else {
        echo "Gagal menghapus data dokter: " . mysqli_error($sambungan);
    }

    mysqli_close($sambungan);
} else {
    echo "Akses tidak sah!";
}
?>