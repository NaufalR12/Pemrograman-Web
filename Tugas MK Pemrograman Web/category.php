<?php 
$categoryID = isset($_GET['categoryID']) ? $_GET['categoryID'] : die ('Missing category ID.');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nwind";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT ProductID, ProductName, UnitPrice FROM products WHERE CategoryID = $categoryID";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <h1>Product List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Unit Price</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($row=$result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['ProductID']}</td>";
                        echo "<td><a href=\"product.php?productID={$row['ProductID']}\">{$row['ProductName']}</a></td>";
                        echo "<td>\${$row['UnitPrice']}</td>";
                        echo "</tr>";
                }
                $conn->close();
                ?>
        </tbody>
    </table>
</body>

</html>