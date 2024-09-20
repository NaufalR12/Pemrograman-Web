<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
    }
    include 'koneksi.php';
    $id_menu = $_GET['id_menu'];
    $query = mysqli_query($connect, "SELECT * from menu where id_menu=$id_menu");
    $data = mysqli_fetch_array($query);
    ?>

    <center>
        <div class="container mt-3 position-absolute top-50 start-50 translate-middle">
            <h1 class="fs-1" style="color: #465771;">Update Menu</h1>
            <a href="main.php"><button type="button" class="btn btn-secondary mt-2 mb-5"
                    style="background-color: #465771;">Home</button></a>
            <a href="logout.php"><button type="button" class="btn btn-danger mt-2 mb-5"
                    style="background-color: #ce3046;">Logout</button></a>
            <form action="prosesupdate.php" method="POST">
                <input type="hidden" name="id_menu" value="<?php echo $data['id_menu']; ?>">
                <div class="row justify-content-center align-items-center mb-3">
                    <div class="col-1 text-center">
                        <h6 style="color: #465771;">Menu</h6>
                    </div>
                    <div class="col-3 text-center">
                        <input type="text" class="form-control ms-5" id="namaMenu" name="namaMenu"
                            value="<?php echo $data['namaMenu']; ?>">
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mb-3">
                    <div class="col-2 text-center">
                        <h6 style="color: #465771;">Category</h6>
                    </div>
                    <div class="col-3 text-start">
                        <input class="form-check-input ms-1 " type="radio" name="kategori" id="kategoriFood"
                            value="food" <?php echo ($data['category'] === 'food') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="kategoriFood">
                            Food
                        </label>
                        <input class="form-check-input ms-3" type="radio" name="kategori" id="kategoriDrink"
                            value="drink" <?php echo ($data['category'] === 'drink') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="kategoriDrink">
                            Drink
                        </label>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mb-3">
                    <div class="col-1 text-center">
                        <h6 style="color: #465771;">Price</h6>
                    </div>
                    <div class="col-3 text-center">
                        <input type="number" class="form-control ms-5" id="harga" name="harga"
                            value="<?php echo $data['price']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-danger" style="background-color: #ce3046;">Update Menu</button>
            </form>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>