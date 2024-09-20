<html>

<head>
    <title>Pengelolaan Data Toko Film Serba Ada</title>
</head>

<body>
    <?php
   session_start();
   if(empty($_SESSION['username']))
{
    header("location:index.php?pesan=belum_login");
}
?>
    <center>
        <h2>Pengelolaan Data Toko Film Serba Ada</h2>
        <hr>
    </center>
    <?php
include("basisdata.php");

$action = isset($_POST['action']) ? $_POST['action'] : '';

if (empty($action)) {
    $pesan = "Aksi tidak valid";
} else {
    $sambungan = mysqli_connect("localhost", "root", "", "toko_dvd"); // Update with your database connection details

    if (!$sambungan) {
        die("Connection failed: " . mysqli_connect_error());
    }

    switch ($action) {
        case "TAMBAH":
            $judul = isset($_POST['judul']) ? $_POST['judul'] : "";
            $jenis = isset($_POST['jenis']) ? $_POST['jenis'] : "";
            $nama_gmb = isset($_POST['nama_gmb']) ? $_POST['nama_gmb'] : "";
            $sutradara = isset($_POST['sutradara']) ? $_POST['sutradara'] : "";
            $pemain_utama = isset($_POST['pemain_utama']) ? $_POST['pemain_utama'] : "";
            $harga = isset($_POST['harga']) ? $_POST['harga'] : "";
            $sekilas = isset($_POST['sekilas']) ? $_POST['sekilas'] : "";
            $thn_terbit = isset($_POST['thn_terbit']) ? $_POST['thn_terbit'] : "";

            $query = "INSERT INTO dvd (judul, jenis, nama_gmb, sutradara, pemain_utama, harga, sekilas, thn_terbit) ";
            $query .= "VALUES ('$judul', '$jenis', '$nama_gmb', '$sutradara', '$pemain_utama', '$harga', '$sekilas', '$thn_terbit')";

            $hasil_mysql = mysqli_query($sambungan, $query);

            if ($hasil_mysql) {
                $pesan = "Data berhasil ditambahkan";
            } else {
                $pesan = "Gagal menambahkan data: " . mysqli_error($sambungan);
            }
            
            break;

        case "UBAH":
            $id_film = isset($_POST['id_film']) ? $_POST['id_film'] : "";
            $judul = isset($_POST['judul']) ? $_POST['judul'] : "";
            $jenis = isset($_POST['jenis']) ? $_POST['jenis'] : "";
            $nama_gmb = isset($_POST['nama_gmb']) ? $_POST['nama_gmb'] : "";
            $sutradara = isset($_POST['sutradara']) ? $_POST['sutradara'] : "";
            $pemain_utama = isset($_POST['pemain_utama']) ? $_POST['pemain_utama'] : "";
            $harga = isset($_POST['harga']) ? $_POST['harga'] : "";
            $sekilas = isset($_POST['sekilas']) ? $_POST['sekilas'] : "";
            $thn_terbit = isset($_POST['thn_terbit']) ? $_POST['thn_terbit'] : "";

            $query = "UPDATE dvd SET judul='$judul', jenis='$jenis', nama_gmb='$nama_gmb', sutradara='$sutradara', pemain_utama='$pemain_utama', harga='$harga', sekilas='$sekilas', thn_terbit='$thn_terbit' WHERE id_film = $id_film";

            $hasil_mysql = mysqli_query($sambungan, $query);

            if ($hasil_mysql) {
                $pesan = "Data berhasil diubah";
            } else {
                $pesan = "Gagal mengubah data: " . mysqli_error($sambungan);
            }
            break;

        case "HAPUS":
            $id_film = isset($_POST['id_film']) ? $_POST['id_film'] : "";

            $query = "DELETE FROM dvd WHERE id_film = $id_film";

            $hasil_mysql = mysqli_query($sambungan, $query);

            if ($hasil_mysql) {
                $pesan = "Data berhasil dihapus";
            } else {
                $pesan = "Gagal menghapus data: " . mysqli_error($sambungan);
            }
            break;

        default:
            $pesan = "Aksi tidak valid";
    }

    mysqli_close($sambungan);
}

echo "<h3>$pesan</h3>";

?>
    <a href="kelola01.php">Kembali</a><br>
</body>

</html>