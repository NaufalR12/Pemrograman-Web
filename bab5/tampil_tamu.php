<html>

<head>
    <title> select query </title>
</head>

<body>
    <center>
        <?php 
    session_start();
    if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
 }
 ?>

        <table border=1>
            <tr>
                <td> Nama </td>
                <td> Email </td>
                <td> Pesan </td>
                <td> Opsi</td>
            </tr>
            <?php
	        include 'koneksi.php';
              $query=mysqli_query($konek,"select * from tamu");
	       while($data=mysqli_fetch_array($query))
	     { ?>
            <tr>
                <td> <?php echo $data['nama']; ?></td>
                <td> <?php echo $data['email']; ?> </td>
                <td> <?php echo $data['pesan']; ?></td>
                <td>
                    <a href="edit.php?no_tamu=<?php echo $data['no_tamu'];?>">Edit</a> |
                    <a href="hapus.php?no_tamu=<?php echo $data['no_tamu'];?>">Hapus</a>
                </td>
                <?php }	?>
        </table>
        <br>
        <a href=" form_tamu.php"><button>Input data</button></a>
        <a href="logout.php">Logout</a>
    </center>

</body>

</html>