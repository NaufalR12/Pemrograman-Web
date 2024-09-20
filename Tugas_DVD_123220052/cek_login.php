<?php 
   session_start(); 
   include 'basisdata.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($sambungan,"select * from admin where username='$username' 
    and password='$password'")or die (mysqli_error($sambungan));
    
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status']   = "login";
        header("location:utama.php");
    }else{
        header("location:utama.php?pesan=gagal");
    } 
?>