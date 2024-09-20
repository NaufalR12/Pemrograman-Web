<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="logo.png" type="image/x-icon" sizes="16x16" />
    <title>Ms. inn</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </head>

  <!--   -->
  <body
    class="p-3 text-dark text-primary-emphasis border-primary-subtle rounded-3"
    style="background-color: #ffffff"
  >
    <nav
      class="navbar navbar-dark shadow-sm navbar-expand-lg"
      style="background-color: #535349"
    >
      <div class="col">
        <div class="container-fluid col-9" style="font-size: 20px">
          <a class="navbar-brand" href="#">
            <img
              src="logo.png"
              alt="Logo"
              width="35"
              class="d-inline-block align-text-top"
            />
            Ms. inn
          </a>
        </div>
      </div>

      <div class="col">
        <div
          class="collapse navbar-collapse container col-1"
          id="navbarNavDropdown"
          style="font-size: 20px"
        >
          <ul class="navbar-nav ml-5">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#layanan">Layanan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="jumbotron mt-1 text-start">
        <h1 class="text-center">Data Pelanggan</h1>
        <?php
            $nama = $_POST["nama"];
            $nik = $_POST["nik"];
            $kelamin = $_POST["kelamin"];
            $alamat = $_POST["alamat"];
            $kamar = $_POST["kamar"];
            if ($kamar == "Standard") {
              $harga = 200000;
              $diskon = 0.1*$harga;
            } elseif ($kamar == "Superior") {
              $harga = 400000;
              $diskon = 0.1*$harga;
            } elseif ($kamar == "Deluxe") {
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
        <p>Jenis Kelamin : <?php echo $kelamin; ?></p>
        <p>Alamat : <?php echo $alamat; ?></p>
        <p>Tipe Kamar : <?php echo $kamar; ?></p>

        <?php  
                    if (isset($_POST['makanan'])) {
                      $makanan=$_POST['makanan'];
                      echo "Fasilitas makan : <br>";
                      for ($i=0; $i < count($makanan) ; $i++){
                        echo "<li>$makanan[$i]</li>";
                      }
                      echo "<br>";
                  }
        ?>

        <p>Pembayaran : <?php echo $pembayaran; ?></p>
        <p>Harga : <?php echo $harga; ?></p>
        <p>Harga Total : <?php echo $harga-$diskon; ?></p>
    </section>

    <footer
      class="footer footer-expand-lg p-0"
      style="background-color: #535349"
    >
      <div class="row text-center" style="color: beige">
        <p class="mt-2">
          &copy 2023 by PT Dea Reigina . | All rights reserved.
        </p>
      </div>
    </footer>
  </body>
</html>
