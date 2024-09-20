<?php 
    //jalur ke database
    $cn = new mysqli ("localhost", "admin" , "Admin123*", "nwind2211");
    //mengambil data dari tabel
    $sql = "select * from products";
    $result = $cn->query($sql);  
    // cara mengambil row pada tabel
    var_dump($result->fetch_object());//product 1 atau row ke 1
    var_dump($result->fetch_object());//product 2
    var_dump($result->fetch_object());//product 3
    var_dump($result->fetch_object());//product 4
    var_dump($result->fetch_object());//product ...
    // cara lain mengambil data di dalam tabel dengan 
    //menggunakan looping
    
    while($p = $result->fetch_object()) {
        print($p->ProductID);
        print($p->ProductName);
        print($p->UnitPrice);
        print "<br>";
    }

    
?>