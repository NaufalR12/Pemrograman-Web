<?php 
    $nama = $_POST["nama"]; 
    $jumlah = $_POST["jumlah_anak_ayam"];

    for ($i = $jumlah; $i >= 0; $i--) {
        if ($i == $jumlah) {
            echo "anak ayam " . $nama . " ada : " . $jumlah . "<br>";
            echo "anak ayam turun " . $jumlah . "<br>";
        }
        elseif ($i < $jumlah && $i > 0) {
            echo "mati satu tinggal " . $i . "<br>";
            echo "anak ayam turun " . $i . "<br>";
        } elseif ($i == 0) {
            echo "mati satu " . $nama . " galau";
        }
    }
?>