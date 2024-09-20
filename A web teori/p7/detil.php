<html>

<?php 
    $serverdb = "localhost";
    $username = "root";
    $password = "";
    $db = "nwind2211";
    $mydb = new mysqli($serverdb, $username, $password, $db);
?>

<body>
    <?php 
        $pc = $_GET['pc'];
        $sql = "select * from product where productCode = '$pc' ";
        //print $sql;
        $p = $mydb->query($sql);
        $data = $p->fetch_object();
        //var_dump($data);
        
        
    ?>
    <h1>Detail Produk</h1>
    <table border="1">
        <tr>
            <td>Kode</td>
            <td>:</td>
            <td><?=$data->productCode?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$data->productName?></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td><?=$data->productLine?></td>
        </tr>
        <tr>
            <td>Skala</td>
            <td>:</td>
            <td><?=$data->productScale?></td>
        </tr>
        <tr>
            <td>Vendor</td>
            <td>:</td>
            <td><?=$data->productVendor?></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><?=$data->productDescription?></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>:</td>
            <td><?=$data->quantityInStock?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><?=$data->buyPrice?></td>
        </tr>
    </table>
</body>

</html>