<?php
$konek = new mysqli("localhost", "root", "", "nwind2211");
if ($konek->connect_error) {
    die("Maaf koneksi error");
}
// Cara 1
$pelanggan = mysqli_query($konek, "SELECT * FROM customers");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Pelanggan</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Customer ID</th>
            <th>Company Name</th>
            <th>Contact Name</th>
            <th>Contact Title</th>
            <th>Address</th>
            <th>City</th>
            <th>Region</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Fax</th>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($pelanggan)) {
            echo "<tr>";
            echo "<td>" . $data['CustomerID'] . "</td>";
            echo "<td>" . $data['CompanyName'] . "</td>";
            echo "<td>" . $data['ContactName'] . "</td>";
            echo "<td>" . $data['ContactTitle'] . "</td>";
            echo "<td>" . $data['Address'] . "</td>";
            echo "<td>" . $data['City'] . "</td>";
            echo "<td>" . $data['Region'] . "</td>";
            echo "<td>" . $data['PostalCode'] . "</td>";
            echo "<td>" . $data['Country'] . "</td>";
            echo "<td>" . $data['Phone'] . "</td>";
            echo "<td>" . $data['Fax'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>