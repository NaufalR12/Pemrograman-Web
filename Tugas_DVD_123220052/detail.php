<!DOCTYPE html>
<html>

<head>
    <title>Toko Film Serba Ada</title>
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
        <h2>Selamat Datang di Toko Film Serba Ada</h2>
        <hr>
    </center>
    <h3>Berikut ini detail film yang anda pilih</h3>

    <table border="1">
        <?php
       
       include("basisdata.php");

       
       $id = $_GET['id'];




        $query = "SELECT * FROM dvd WHERE id_film = $id";
        $hasil_query = mysqli_query($sambungan, $query);
        $baris = mysqli_fetch_assoc($hasil_query);

        $judul = $baris['judul'];
        $sekilas = $baris['sekilas'];
        $jenis = $baris['jenis'];
        $nama_gmb = $baris['nama_gmb'];
        $sutradara = $baris['sutradara'];
        $pemain_utama = $baris['pemain_utama'];
        $harga = $baris['harga'];
        $sekilas = $baris['sekilas'];
        $thn_terbit = $baris['thn_terbit'];
        ?>
        <tr valign="top">
            <td><img src="./image/<?php echo $nama_gmb; ?>" height="150"></td>
            <td>
                <p>JUDUL<br><i><b><?php echo $judul; ?></b></i></p>
                <p>Sekilas<br><i><b><?php echo $sekilas; ?></b></i></p>
                <p>JENIS<br><i><b><?php echo $jenis; ?></b></i></p>
                <p>SUTRADARA<br><i><b><?php echo $sutradara; ?></b></i></p>
                <p>PEMAIN UTAMA<br><i><b><?php echo $pemain_utama; ?></b></i></p>
                <p>HARGA<br><i><b>Rp <?php echo $harga; ?></b></i></p>
                <p>TAHUN TERBIT<br><i><b><?php echo $thn_terbit; ?></b></i></p>
            </td>
        </tr>
    </table><br>
    <center>
        <hr>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a>
        <br><a href="kategori.php">Kembali</a> <a href="logout.php">Logout</a>
    </center>
</body>

</html>