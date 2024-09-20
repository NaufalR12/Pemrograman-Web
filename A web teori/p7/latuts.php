<html>

<?php
$serverdb = "localhost";
$username = "root";
$pass = "";
$db = "nwind2211";
$mydb = new mysqli($serverdb, $username, $pass, $db);
?>

<body>
    <?php
    $sql = "select * from categories";
    $lines = $mydb->query($sql);

    while($row = $lines->fetch_object()) {
  ?>

    <a href="latus.php?pline<?= $row->CategoryName ?>"><?php echo "$row->CategoryName \n"?></a>

    <?php
    }
  ?>
</body>

</html>