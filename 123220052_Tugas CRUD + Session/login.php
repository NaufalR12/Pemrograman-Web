<?php 
    session_start(); 
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($connect,"select * from user where username='$username' 
    and password='$password'")or die (mysqli_error($connect));
    
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status']   = "login";
        
        header("location:main.php");
    }else{
        header("location:index.php?pesan=gagal");
    } 
?>