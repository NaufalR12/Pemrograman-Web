<!DOCTYPE html>
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
        <h2>Pengelolaan Toko Film Serba Ada</h2>
        <hr>
        Lembar berikut digunakan untuk pengelolaan data Film.
        Untuk menambah data tekan tombol <font color="#FF0000">TAMBAH</font>,
        sedangkan untuk mengubah atau menghapus suatu data, pilih terlebih
        dahulu data yang diinginkan, kemudian tekan tombol <font color="#FF0000">UBAH</font> atau <font color="#FF0000">
            HAPUS</font>.

        <form action="kelola02.php" method="POST">
            <select name="id" size="6">
                <?php
               
                $sambungan = mysqli_connect("localhost", "root", "", "toko_dvd");
                if (!$sambungan) {
                    die("Koneksi ke basis data gagal: " . mysqli_connect_error());
                }

                $query = "SELECT id_film, jenis, judul FROM dvd";
                $hasil_query = mysqli_query($sambungan, $query);

                while ($baris = mysqli_fetch_assoc($hasil_query)) {
                    $id_film = $baris['id_film'];
                    $jenis = $baris['jenis'];
                    $judul = $baris['judul'];
                    echo "<option value=\"$id_film\">($jenis) $judul";
                }

                mysqli_close($sambungan);
                ?>
            </select><br><br>
            <input name="action" type="submit" value="TAMBAH">
            <input name="action" type="submit" value="UBAH">
            <input name="action" type="submit" value="HAPUS">
        </form>

        <hr>
        Alamat: Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail: <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a>
        <br><a href="utama.php">Kembali</a> <a href="logout.php">Logout</a>
    </center>
</body>

</html>