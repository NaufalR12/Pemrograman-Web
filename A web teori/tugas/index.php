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
            // Lakukan koneksi ke database
            // Gantilah parameter koneksi sesuai dengan konfigurasi database Anda
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nwind";

            // Membuat koneksi ke database menggunakan objek mysqli
            $conn = new mysqli($servername, $username, $password, $dbname);
            // conn Variabel yang menyimpan objek koneksi ke database
            // Periksa koneksi
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // Menampilkan pesan kesalahan jika gagal terhubung

            // Query untuk mendapatkan semua kategori dari tabel 'categories'
            $sql = "SELECT CategoryID, CategoryName FROM categories";
            //sql Menyimpan query SQL untuk mendapatkan semua kategori dari tabel 'categories'. 
            $result = $conn->query($sql);
            //result Menyimpan hasil dari eksekusi query. Hasil ini dapat berupa set data yang akan diiterasi untuk menampilkan daftar kategori.

            // Tampilkan daftar kategori dalam tabel HTML
            while ($row = $result->fetch_assoc()) { //row Menyimpan data hasil query setiap kali iterasi dilakukan
                echo "<tr>";
                echo "<td>{$row['CategoryID']}</td>";
                // Membuat hyperlink ke halaman 'category.php' dengan parameter 'categoryID'
                echo "<td><a href=\"category.php?categoryID={$row['CategoryID']}\">{$row['CategoryName']}</a></td>";
                echo "</tr>";
            }

            // Tutup koneksi database
            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>