<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="gambar/logo hotel.png" type="image/x-icon" sizes="16x16" />
    <title>Tugas2_123220052</title>

    <!-- Bootstarp css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <!-- My css -->
    <link rel="stylesheet" href="style.css" />
</head>

<body class="p-2 text-white" style="background-color: #964b00">
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg shadow-sm navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="gambar/logo hotel.png" alt="logo" width="30" height="24"
                    class="d-inline-block align-text-top rounded-circle" />
                NAFALTEL
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.html">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn" style="background-color: #964b00" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <!-- Jumbotron start -->
    <section class="jumbotron mt-1 text-start">
        <h1 class="text-center">Hasil Formulir</h1>
        <?php
            $nama = $_POST["nama"];
            $nik = $_POST["nik"];
            $jenisKelamin = $_POST["jenisKelamin"];
            $alamat = $_POST["alamat"];
            $tipeKamar = $_POST["tipeKamar"];
            if ($tipeKamar == "Standard") {
              $harga = 200000;
              $diskon = 0.1*$harga;
            } elseif ($tipeKamar == "Superior") {
              $harga = 400000;
              $diskon = 0.1*$harga;
            } elseif ($tipeKamar == "Deluxe") {
              $harga = 500000;
              $diskon = 0.1*$harga;
            } else {
              $harga = 800000;
              $diskon = 0.1*$harga;
            }
            $pembayaran = $_POST["pembayaran"];
        ?>
        <p>Nama : <?php echo $nama; ?></p>
        <p>NIK : <?php echo $nik; ?></p>
        <p>Jenis Kelamin : <?php echo $jenisKelamin; ?></p>
        <p>Alamat : <?php echo $alamat; ?></p>
        <p>Tipe Kamar : <?php echo $tipeKamar; ?></p>

        <?php  
                    if (isset($_POST['makan'])) {
                      $makan=$_POST['makan'];
                      echo "Fasilitas makan : <br>";
                      for ($i=0; $i < count($makan) ; $i++){
                        echo "<li>$makan[$i]</li>";
                      }
                      echo "<br>";
                  }
        ?>

        <p>Pembayaran : <?php echo $pembayaran; ?></p>
        <p>Harga : <?php echo $harga; ?></p>
        <p>Harga Total : <?php echo $harga-$diskon; ?></p>
    </section>
    <!-- Jumbotron end -->

    <footer class="footer footer-expand-lg bg-black mt-1">
        <div class="row text-center" style="color: beige">
            <p class="mt-2">
                &copy 2023 by naufalrafidnr_
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>