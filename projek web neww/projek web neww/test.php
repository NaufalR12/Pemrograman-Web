<?php session_start();

include('koneksi.php');

// Misalkan id_pengguna telah disimpan dalam sesi saat login
// Anda perlu menyesuaikan cara Anda menyimpan id_pengguna saat login
$id_pengguna = $_SESSION['id_pengguna']; // Gantilah dengan cara sesuai aplikasi Anda

// Query untuk mengambil data pengguna dari tabel pengguna berdasarkan id_pengguna
$query = "SELECT nama_lengkap, usrname, password, nomor_telepon FROM pengguna WHERE id_pengguna = $id_pengguna";

// Eksekusi query
$result = $connect->query($query);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Periksa apakah ada baris hasil
    if ($result->num_rows > 0) {
        // Ambil data pengguna
        $row = $result->fetch_assoc();

        $nama_lengkap = $row['nama_lengkap'];
        $username = $row['username'];
        $password = $row['password'];
        $nomor_telepon = $row['nomor_telepon'];

        // Lakukan sesuatu dengan data pengguna yang telah diambil
        // Contoh: echo data pengguna
        echo "Nama Lengkap: $nama_lengkap<br>";
        echo "Username: $username<br>";
        echo "Password: $password<br>";
        echo "Nomor Telepon: $nomor_telepon<br>";
    } else {
        echo "Tidak ada data pengguna dengan ID tersebut.";
    }
} else {
    echo "Error: " . $connect->error;
}

// Tutup koneksi database
$connect->close();
?>