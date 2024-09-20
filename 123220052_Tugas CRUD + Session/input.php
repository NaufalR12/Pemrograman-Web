<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
    }
    include "koneksi.php";

    $nama =$_POST['namaMenu'];
    $kategori =$_POST['kategori'];
    $harga =$_POST['harga'];

    $query=mysqli_query($connect,"INSERT INTO menu
    VALUES('','$nama','$kategori','$harga')"
    ) or die(mysqli_error($connect));
    ?> <center>
        <div class="container mt-3 position-absolute top-50 start-50 translate-middle">
            <div class="card img-fluid" style="width:600px">
                <img class="card-img-top" src="bg.jpg" alt="bg" style="width:100%">
                <div class="card-img-overlay text-light">
                    <h2>Kedai Yukihira</h2>
                    <h5>Add Menu</h5>
                    <div class="col-md-5 offset-md-6 ">
                        <div class="row mt-5 align-items-center">
                            <?php
        if($query)
        {
          echo "<p>Proses input berhasil, ingin lihat hasil <a href='main.php'><button class=\"btn\" style=\"background-color: #465771; color: #ffff\" type=\"submit\">disini</button></a></p>";
        }
        else
        {
        echo "<p>Proses Input gagal</p>";
        }
         ?>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <a href="main.php"><button type="button" class="btn btn-light btn-sm mt-2 mb-5"
                                        style="background-color: #fff;">Home</button></a>
                            </div>
                            <div class="col">
                                <a href="logout.php"><button type="button" class="btn btn-light btn-sm mt-2 mb-5"
                                        style="background-color: #fff;">Logout</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>