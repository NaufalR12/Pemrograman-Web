<?php
$hostname   = "localhost"; //hostname
$username   = "root";      //username untuk login ke mysql
$password   = "";          //password untuk login ke mysql
$database   = "toko_dvd";          //nama database

$sambungan=new mysqli($hostname,$username,$password, $database);
if ($sambungan->connect_error) 
{
 // jika terjadi error, matikan proses dengan die() atau exit();
  die('Maaf koneksi gagal: '. $sambungan->connect_error);
} 
?>