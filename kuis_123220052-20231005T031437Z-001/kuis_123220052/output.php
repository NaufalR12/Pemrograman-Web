<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KUIS_123220052</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body >
    <div class="container text-center mt-5 bg-secondary text-white">
        <div class="row align-items-center">
            <?php 
            $berat = $_POST["berat"];
            $tinggi = $_POST["tinggi"];
            $bmi = 0;
            $bmi = $berat / ($tinggi*$tinggi);
            if ($bmi < 18.5) {
                $kategori = "Kurus";
            } elseif ($bmi >= 18.5 && $bmi <= 24.9 ) {
                $kategori = "Sedang";
            } elseif ($bmi >= 25 && $bmi <=29.9) {
                $kategori = "Gemuk";
            } else {
                $kategori = "Obesitas";
            }
            ?>
          <h2 class="mt-5">Hasil Perhitungan BMI</h2>
          <div class="row justify-content-md-center mt-3">
            <div class="col col-lg-2">
                <p class="text-start">
                <?php echo "Berat : ".$berat. " kg"; ?>
                </p>
            </div>
            <div class="col-2">
      
            </div>
            <div class="col col-lg-2">
                <p class="text-start">
                <?php echo "Tinggi : ".$tinggi. " m"; ?>
                </p>
            </div>
          </div>

        <div class="row justify-content-md-center mt-3 mb-3">
            <div class="col col-lg-2">
                <p class="text-start">
                <?php echo "BMI : ".round($bmi, 1); ?>
                </p>
            </div>
            <div class="col-2">
      
            </div>
            <div class="col col-lg-2">
                <p class="text-start">
                <?php echo "Kategori : ".$kategori; ?>
                </p>
            </div>
        </div>


        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>