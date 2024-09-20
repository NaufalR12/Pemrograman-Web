<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pembelian</title>
</head>

<body>
    <h1>Terima Kasih atas Pembelian Anda!</h1>

    <h2>Detail Pembelian:</h2>

    <?php 
    echo "Nama : $_POST[nama]<br>";
    echo "Alamat : $_POST[alamat]<br>";
    echo "Metode pengiriman : $_POST[pilih]<br>";
    echo "Barang yang dipilih : <br>";
    if (isset($_POST['barang'])) {

        $barang=$_POST['barang'];
		echo "<br>";
        for ($i=0; $i < count($barang) ; $i++){
            echo $barang[$i]."<br>";
        }
    }

    ?>

</body>

</html>