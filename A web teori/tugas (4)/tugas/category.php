<?php
// Ambil parameter categoryID dari URL
$categoryID = isset($_GET['categoryID']) ? $_GET['categoryID'] : die('Missing category ID.');

// Lakukan koneksi ke database
// Gantilah parameter koneksi sesuai dengan konfigurasi database Anda
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nwind";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mendapatkan produk berdasarkan categoryID
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
            // Tampilkan daftar produk dalam bentuk tabel
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['ProductID']}</td>";
                echo "<td><a href=\"product.php?productID={$row['ProductID']}\">{$row['ProductName']}</a></td>";
                echo "<td>\${$row['UnitPrice']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>

<?php
// Tutup koneksi database
$conn->close();
?>