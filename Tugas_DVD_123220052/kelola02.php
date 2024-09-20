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
        <h3><?php echo isset($_POST['action']) ? $_POST['action'] : 'TAMBAH'; ?> DATA FILM</h3>
    </center>
    <hr>
    <form method="post" action="proses.php">
        <?php
        // Include basisdata.php
        include 'basisdata.php';

        // Membuat koneksi ke database
        $sambungan = new mysqli("localhost", "root", "", "toko_dvd");

        // Periksa koneksi
        if ($sambungan->connect_error) {
            die("Koneksi database gagal: " . $sambungan->connect_error);
        }

        $action = isset($_POST['action']) ? $_POST['action'] : 'TAMBAH';
        if ($action == "TAMBAH") {
        $id_film = "";
        $judul = "";
        $jenis = "";
        $nama_gmb = "";
        $sutradara = "";
        $pemain_utama = "";
        $harga = "";
        $sekilas = "";
        $thn_terbit = "";
        }
        else  {
            $id = isset($_POST['id']) ? $_POST['id'] : '';
            $query = "SELECT * FROM dvd WHERE id_film = '$id'";
            $hasil_mysql = $sambungan->query($query);

            if (!$hasil_mysql) {
                die("Query gagal: " . $sambungan->error);
            }

            $baris = $hasil_mysql->fetch_assoc();
                $id_film = $baris['id_film'];
                $judul = $baris['judul'];
                $jenis = $baris['jenis'];
                $nama_gmb = $baris['nama_gmb'];
                $sutradara = $baris['sutradara'];
                $pemain_utama = $baris['pemain_utama'];
                $harga = $baris['harga'];
                $sekilas = $baris['sekilas'];
                $thn_terbit = $baris['thn_terbit'];
            
        }
        
        ?>
        <center>
            <form method="post" action="proses.php">
                <input type="hidden" name="id_film" value="<?php echo $id_film; ?>">
                <input type="hidden" name="action" value="<?php echo $action; ?>">

                Judul Film :
                <input type="text" name="judul" placeholder="Judul Film" value="<?php echo $judul; ?>"><br>

                Sekilas Isi :
                <textarea name="sekilas" rows="5" placeholder="Sekilas Isi"
                    cols="25"><?php echo $sekilas; ?></textarea><br>

                Jenis Film :
                <input type="text" name="jenis" placeholder="Jenis Film" value="<?php echo $jenis; ?>"><br>

                Nama File Gambar :
                <input type="text" name="nama_gmb" placeholder="Nama File Gambar" value="<?php echo $nama_gmb; ?>"><br>

                Nama Sutradara :
                <input type="text" name="sutradara" placeholder="Nama Sutradara" value="<?php echo $sutradara; ?>"><br>

                Nama Pemain Utama :
                <input type="text" name="pemain_utama" placeholder="Nama Pemain Utama"
                    value="<?php echo $pemain_utama; ?>"><br>

                Harga : Rp
                <input type="text" name="harga" placeholder="Harga" value="<?php echo $harga; ?>"><br>

                Tahun Terbit :
                <input type="text" name="thn_terbit" placeholder="Tahun Terbit" value="<?php echo $thn_terbit; ?>"><br>

                <input type="submit" name="submit" value="PROSES">
            </form>
            <hr>
            Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
            e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a>
            <br><a href="kelola01.php">Kembali</a> <a href="logout.php">Logout</a>
        </center>
    </form>
</body>

</html>