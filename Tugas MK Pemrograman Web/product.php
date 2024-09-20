<?php
$productID = isset($_GET['productID']) ? $_GET['productID'] : die('Missing product ID.');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nwind";

$conn = new mysqli($servername, $username, $password, $dbname);// Membuat objek koneksi ke database

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

$sql = "SELECT * FROM products WHERE ProductID = $productID"; 
$result = $conn->query($sql); 

$product = $result->fetch_assoc(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>

<body>
    <h1>Product Details</h1>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Supplier ID</th>
            <th>Category ID</th>
            <th>Quantity Per Unit</th>
            <th>Unit Price</th>
            <th>Units In Stock</th>
            <th>Units On Order</th>
            <th>Reorder Level</th>
            <th>Discontinued</th>
        </tr>
        <?php
        echo "<tr>";
        echo "<td>{$product['ProductID']}</td>";
        echo "<td>{$product['ProductName']}</td>";
        echo "<td>{$product['SupplierID']}</td>";
        echo "<td>{$product['CategoryID']}</td>";
        echo "<td>{$product['QuantityPerUnit']}</td>";
        echo "<td>\${$product['UnitPrice']}</td>";
        echo "<td>{$product['UnitsInStock']}</td>";
        echo "<td>{$product['UnitsOnOrder']}</td>";
        echo "<td>{$product['ReorderLevel']}</td>";
        echo "<td>{$product['Discontinued']}</td>";
        echo "</tr>";
        ?>
    </table>

    <form action="shopping_cart.php" method="post">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $product['UnitsInStock']; ?>"
            required>
        <input type="hidden" name="productID" value="<?php echo $product['ProductID']; ?>">
        <input type="hidden" name="productName" value="<?php echo $product['ProductName']; ?>">
        <input type="hidden" name="unitPrice" value="<?php echo $product['UnitPrice']; ?>">
        <input type="submit" value="Buy" name='add-to-cart'>
    </form>
</body>

</html>

<?php
// Tutup koneksi database
$conn->close();
?>