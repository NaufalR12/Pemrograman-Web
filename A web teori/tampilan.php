<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php 
        while($p = $result->fetch_object()) {
            print($p->ProductID);
            print($p->ProductName);
            print($p->UnitPrice);
            print "<br>";
        }
        
        ?>
        <tr>
            <td>
                <?= $p->ProductID; ?>
            </td>
            <td>
                <?= $p->ProductName; ?>
            </td>
        </tr>

    </table>
</body>

</html>