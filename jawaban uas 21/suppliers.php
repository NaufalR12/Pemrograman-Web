<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>

<body>

    <h1>Daftar Supplier</h1>
    <table>
        <thead>
            <tr>
                <th>Supplier ID</th>
                <th>Nama Perusahaan</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "nwind";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT SupplierID, CompanyName, Address, City, Phone FROM suppliers";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['SupplierID']}</td>";
                    echo "<td><a href=\"tampil.php?supplierID={$row['SupplierID']}\">{$row['CompanyName']}</a></td>";
                    echo "<td>{$row['Address']}</td>";
                    echo "<td>{$row['City']}</td>";
                    echo "<td>{$row['Phone']}</td>";
                    echo "<td><button><a href=\'tampil.php?supplierID={$row['SupplierID']}\' class='btn btn-danger'>Lihat Produk</a></button></td>"; 
                    echo "</tr>"; 
                }

                $conn->close();
                ?>
        </tbody>
    </table>

</body>

</html>