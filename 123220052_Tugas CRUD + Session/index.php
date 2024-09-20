<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kedai Yukihira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <center>
        <div class="container mt-3 position-absolute top-50 start-50 translate-middle">
            <div class="card img-fluid" style="width:600px">
                <img class="card-img-top" src="bg.jpg" alt="bg" style="width:100%">
                <div class="card-img-overlay text-light">
                    <h2>Kedai Yukihira</h2>
                    <h3>Login</h3>
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "Login gagal! username dan password salah!";
                        } else if ($_GET['pesan'] == "logout") {
                            echo "Anda telah berhasil logout";
                        } else if ($_GET['pesan'] == "belum_login") {
                            echo "Anda harus login untuk mengakses halaman admin";
                        }
                    }
                    ?>
                    <br><br>

                    <form class=" col-md-5 offset-md-6" action="login.php" method="POST">
                        <div class="row">
                            <label class="col-form-label"><b>Username</b></label>
                            <div class="col-sm-12 ">
                                <input type="text" name="username" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-form-label"><b>Password</b></label>
                            <div class="col-sm-12 ">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="mt-5 btn btn-outline-light">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>