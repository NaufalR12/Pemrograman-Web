<?php
// Ambil parameter productID dari URL
$productID = isset($_GET['productID']) ? $_GET['productID'] : die('Missing product ID.');
// Variabel untuk menyimpan productID yang diambil dari parameter URL
// Lakukan koneksi ke database
// Gantilah parameter koneksi sesuai dengan konfigurasi database Anda
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nwind";

$conn = new mysqli($servername, $username, $password, $dbname);// Membuat objek koneksi ke database

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Menampilkan pesan kesalahan jika gagal terhubung
}

// Query untuk mendapatkan informasi produk berdasarkan productID
$sql = "SELECT * FROM products WHERE ProductID = $productID"; // Query SQL untuk mengambil informasi produk dari tabel 'products' berdasarkan productID
$result = $conn->query($sql);  // Menjalankan query dan menyimpan hasilnya dalam variabel $result

// Ambil data produk
$product = $result->fetch_assoc(); // Mengambil hasil query dalam bentuk array asosiatif dan menyimpannya dalam variabel $product
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
        // Tampilkan data produk dalam bentuk tabel
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