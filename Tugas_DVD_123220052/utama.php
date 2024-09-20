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
    <p>
    <h3>Pilih kategori film yang anda cari</h3>
    </p>
    <ul>
        <?php
      
        $sambungan = mysqli_connect("localhost", "root", "", "toko_dvd");
        if (mysqli_connect_error()) {
            die("Koneksi ke basis data gagal: " . mysqli_connect_error());
        }

        
        $query = "SELECT DISTINCT jenis FROM dvd";
        $hasil_query = mysqli_query($sambungan, $query);

        
        while ($baris = mysqli_fetch_row($hasil_query)) {
            $jenis = $baris[0];
            echo "<li><a href='kategori.php?jenis=$jenis'>$jenis</a></li>";
        }

        
        mysqli_close($sambungan);
        ?>
    </ul>
    <center>
        <hr><a href="kelola01.php">Pengelolaan</a><br>
        Alamat: Jl. Pelan 2 Banyak Anak-Anak<br>
        E-mail: <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a> <br>
        <a href="logout.php">Logout</a>
    </center>
</body>

</html>