<html>

<head>
    <title> Form Tamu </title>
</head>

<body>
    <?php 
    session_start();
    if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
    }
    ?>
    <?php
	 include 'koneksi.php';
        $no_tamu=$_GET['no_tamu'];
	  $query=mysqli_query($konek,"SELECT * from tamu where 
                           no_tamu=$no_tamu");
        $data =mysqli_fetch_array($query);
		
	?>
    <form method="POST" action="update.php">
        <input type="hidden" name="no_tamu" value="<?php echo $data['no_tamu']; ?>"></br>
        Nama :<br><input type="text" name="nama" placeholder="Nama" value="<?php echo $data['nama']; ?>"></br>
        Email :<br><input type="text" name="email" placeholder="Email" value="<?php echo $data['email']; ?>"><br>
        Pesan :<br> <textarea name="pesan" placeholder="Pesan" rows="5"
            cols="25"><?php echo $data['pesan']; ?></textarea><br>

        <input type="submit" name="submit" value="kirim">
    </form>
</body>

</html>