<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>

<body>
    <h1>Category List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nwind";

            $conn = new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
            }

            $sql = "SELECT CategoryID, CategoryName FROM categories";
            $result = $conn->query($sql);
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['CategoryID']}</td>";
                echo "<td><a href=\"category.php?categoryID={$row['CategoryID']}\">{$row['CategoryName']}</a></td>";
                echo "</tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>

</body>

</html>