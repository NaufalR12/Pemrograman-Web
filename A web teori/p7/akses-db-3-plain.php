<html>

<?php 
$serverdb = "localhost";
$username = "admin";
$password = "Admin123*";
$db = "toko2";
$mydb = new mysqli($serverdb, $username, $password, $db);
?>

<body>
    <!-- akses tabel  -->
    <?php 
    $sql = "select * from productlines";
    $lines = $mydb->query($sql);

    while ($row = $lines->fetch_object()) {
    ?>
    <a href="akses-db-3-plain.php?pline=<?= $row->productL></a>
    }
    ?>
</body>

</html>