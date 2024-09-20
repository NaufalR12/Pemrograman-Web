<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        echo"Nama saya Naufal Rafid"; 
        $tanggal = date("d F Y");
        echo "<br>$tanggal";
    ?>

    <?php 
        $harga = 100; $pengunjung = 10;
        echo "<br>Total pendapatan: "; echo $harga*$pengunjung;
        echo "<br>Total pendapatan: ". $harga*$pengunjung;
        echo "<br>Total pendapatan: $harga*$pengunjung";
    ?>

    <form action="output.php" method="post">
        Nama : <input type="text" name="nama"><br>
        Kelas : <input type="text" name="kelas"><br>
        <button type="submit">submit</button>
    </form>

    <?php 
        $hari=date("l");
        echo "<br>Hari ini adalah hari $hari";
        if ($hari=="senin") {
            echo "pengennya minggu";
        } else {
            echo "<br><br>lah, udah selasa aja";
        }
     ?>
</body>

</html>