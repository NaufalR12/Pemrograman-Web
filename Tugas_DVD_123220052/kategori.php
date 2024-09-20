<!DOCTYPE html>
<html>

<head>
    <title>Toko Film Serba ada</title>
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
    <?php
    
    $jenis = $_GET['jenis'];

    echo "<h3>Berikut ini daftar film berdasarkan kategori $jenis</h3>";
    echo "<table border='1'>";
    
    
    $sambungan = mysqli_connect("localhost", "root", "", "toko_dvd");
    
    if (!$sambungan) {
        die("Koneksi ke basis data gagal: " . mysqli_connect_error());
    }

    $query = "SELECT id_film, judul, nama_gmb, sutradara FROM dvd WHERE jenis='$jenis'";
    $hasil_query = mysqli_query($sambungan, $query);

    while ($baris = mysqli_fetch_assoc($hasil_query)) {
        $id_film = $baris['id_film'];
        $judul = $baris['judul'];
        $nama_gmb = $baris['nama_gmb'];
        $sutradara = $baris['sutradara'];

        echo "<tr><td><img src='./image/$nama_gmb' height='50'></td>";
        echo "<td><b><a href='detail.php?id=$id_film'>$judul</a></b><br>$sutradara</td></tr>";
    }

    echo "</table>";

    mysqli_close($sambungan);
    ?>
    <center>
        <hr>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a>
        <br><a href="utama.php">Kembali</a> <a href="logout.php">Logout</a>
    </center>
</body>

</html>