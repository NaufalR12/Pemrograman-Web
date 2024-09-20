<?php
     $hostname   = "localhost"; 
     $username   = "root";      
     $password   = "";          
     $database   = "klinik";          

    $connect=new mysqli($hostname,$username,$password, $database);
if ($connect->connect_error) 
   {
      // jika terjadi error, matikan proses dengan die() atau exit();
       die('Maaf koneksi gagal: '. $connect->connect_error);
   } 
?>