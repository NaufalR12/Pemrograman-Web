<?php
    include "koneksi.php";
	
    $nama	=$_POST['nama'];
    $email   =$_POST['email'];
    $pesan   =$_POST['pesan'];
	
    $query=mysqli_query($konek,"INSERT INTO tamu 
                        VALUES('','$nama','$email','$pesan')"
                        ) or die(mysqli_error($konek));
	
    if($query)
    {
	echo "Proses input berhasil, ingin lihat hasil 
            <a href='tampil_tamu.php'> disini </a>";
    }
     else 
   {
     echo "Proses Input gagal";
    }
?>