<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-black">
    <nav class="navbar navbar-expand-lg" style="background-color: #9f7747">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> KUIS 123220052</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link" href="form.html">Form</a>
                    <a class="nav-link" href="perulangan.html">Perulangan</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="jumbotron" style="background-color: #f6cba1">
        <div class="row text-center">
            <h1 class="text-center">Program Deret</h1>
            <hr class="text-start" />
            <?php
            $awal = $_POST["batasAwal"];
            $akhir = $_POST["batasAkhir"];
            $jarak = $_POST["jarakDeret"];
            $total = 0;

            ?>

            <p>Batas Awal : <?php echo $awal ?></p>
            <p>Batas Akhir : <?php echo $akhir ?></p>
            <p>Jarak Derek : <?php echo $jarak ?></p>

            <p>
                <?php

                    for ($i = $awal; $i <= $akhir; $i +=$jarak) { 

                        echo $i; 
                        $total +=$i; 
                        if ($i < $akhir) { 
                            echo " + " ; } 
                    }
                    echo " = " . $total; 
                ?>

            </p>
        </div>
    </section>

    <footer>
        <div class="row text-center" style="background-color: #9f7747">
            <p class="m-2">&copy Pratikum Web IF 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>