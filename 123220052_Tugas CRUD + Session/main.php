<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    .custom-table {
        color: #465771;
        border-color: #ce3046;
    }
    </style>
</head>

<body>
    <?php 
    session_start();
    if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
    }
    ?>
    <div class="container text-center mt-5 mb-5 ml-5 mr-5 p-5">
        <div class="row">
            <div class="col-8">
                <div class="col">
                    <h1 style="color:#465771">Menu</h1>
                    <a href="add.php"><button class="btn" style="background-color: #465771; color: #ffff"
                            type="submit">Add
                            Menu</button></a>
                    <a href="logout.php"><button class="btn" style="background-color: #ce3046; color: #ffff"
                            type="submit">Logout</button></a>
                </div>
                <div class="col mt-5 ml-5 mr-5">
                    <table class="table table-bordered custom-table">

                        <tr>
                            <td class="col-1" style="color:#465771"><strong>No</strong> </td>
                            <td class="col-3" style="color:#465771"><strong>Menu</strong> </td>
                            <td class="col-2" style="color:#465771"><strong>Category</strong></td>
                            <td class="col-2" style="color:#465771"><strong>Price</strong></td>
                            <td colspan="2" class="col-4" style="color:#465771"><strong>Action</strong></td>
                        </tr>

                        <?php
                                include 'koneksi.php';
                                $query=mysqli_query($connect,"select * from menu");
                                while($data=mysqli_fetch_array($query)){ ?>
                        <tr>

                            <td style="color:#465771"><strong><?php echo $data['id_menu']; ?></strong> </td>
                            <td style="color:#465771"><?php echo $data['namaMenu']; ?></td>
                            <td style="color:#465771"><?php echo $data['category']; ?></td>
                            <td style="color:#465771"><?php echo $data['price']; ?></td>
                            <td class="col-2">
                                <a href="update.php?id_menu=<?php echo $data['id_menu'];?>"><button name="action"
                                        value="edit" class="btn btn-outline"
                                        style="border-color: #465771; color: #465771" type="submit">Edit</button></a>
                            </td>
                            <td class="col-2">
                                <a href="hapus.php?id_menu=<?php echo $data['id_menu'];?>"><button name="action"
                                        value="hapus" class="btn btn-outline"
                                        style="border-color: #ce3046; color: #ce3046" type="submit">Hapus</button></a>
                            </td>

                        </tr>
                        <?php }?>
                        <tr>
                        <tr>
                            <td colspan="3" style="color:#465771"><strong>Total</strong></td>
                            <td colspan="3" style="color:#465771"><strong>
                                    <?php 
                                    $sql = "SELECT price FROM menu";
                                    $result = $connect->query($sql);
                                    $totalHarga = 0;

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $totalHarga += $row['price'];
                                        }
                                    }
                                    
                                    echo $totalHarga;
                                                                        
                                    ?>
                                </strong></td>

                        </tr>


                    </table>
                </div>
            </div>
            <div class="col-4">
                <img src="souma.jpg" width="100%" alt="gambar souma">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>