<?php
	include "koneksi.php";
	$no_tamu	=$_GET['no_tamu'];
	$query=mysqli_query($konek,"DELETE FROM tamu where 
                           no_tamu=$no_tamu");
   if($query)
  {
      echo "Proses hapus berhasil, ingin lihat hasil 
            <a href='tampil_tamu.php'> disini  </a>";
  }
   else 
  {
    echo "Proses Input gagal";
  }
?>