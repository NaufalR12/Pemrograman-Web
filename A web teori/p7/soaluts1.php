<!-- Program php untuk membuat web menampilkan daftar produk yang namanya mengandung kata “ford” -->
<?php
$konek = new mysqli("localhost", "root", "", "nwind2211");
if ($konek->connect_error) {
    die("Maaf koneksi error");
}
// Cara 1
$barang = mysqli_query($konek, "SELECT * FROM products WHERE ProductName LIKE '%ford%'");
// atau bisa juga dengan menggunakan REGEXP
// $barang = mysqli_query($konek, "SELECT * FROM products WHERE ProductName REGEXP 'ford'");
while ($data = mysqli_fetch_array($barang)) {
    echo "Product ID : " . $data['ProductID'] . "<br>";
    echo "Product Name : " . $data['ProductName'] . "<br>";
    echo "Supplier ID : " . $data['SupplierID'] . "<br>";
    echo "Category ID : " . $data['CategoryID'] . "<br>";
    echo "Quantity PerUnit : " . $data['QuantityPerUnit'] . "<br>";
    echo "Unit Price : " . $data['UnitPrice'] . "<br>";
    echo "Units In Stock : " . $data['UnitsInStock'] . "<br>";
    echo "Unit On Order : " . $data['UnitsOnOrder'] . "<br>";
    echo "Reorder Level : " . $data['ReorderLevel'] . "<br>";
    echo "Discontinued : " . $data['Discontinued'] . "<br>";
}