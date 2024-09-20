<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4 nih</title>
</head>

<body>
    <?php 
    $x = 100;
    $y = 50;
    if ($x > $y) {
        echo "x = ".$x;
        echo "<br>y = ".$y;
        echo "<br>x lebih besar dari y";
    } else {
        echo "x = ".$x;
        echo "<br>y = ".$y;
        echo "<br> x kurang dari y";
    }

    $hariini=date("l");
		switch($hariini)
		{
			case "Monday":
			$hari="Senin";
			break;

			case "Tuesday":
			$hari="Selasa";
			break;

			case "Wednesday":
			$hari="Rabu";

            break;

			case "Thursday":
			$hari="Kamis";
			break;

			case "Friday":
			$hari="Jumat";
			break;

			case "Saturday":
			$hari="Sabtu";
			break;

			default:
			$hari="Minggu";
		}
		echo "<h3>Hari ini adalah hari <u>$hari</u></h3>";

        For ($i=1; $i<=7; $i++)
        {
            echo "<font size=$i> $i <font>";
            echo "<font size=$i> Naufal rafid muhammad faddila </font><br>";
        }

        $i = 1;
        while ($i<=7)
        {
            echo "$i ";
            $i++;
        }
        echo "<br>";
        $i = 1;
        do
        {
            echo "$i ";
            $i++;
        } while ($i<=7);

        $teman = array("Charlie", "Ani", "Budi");
        echo $teman[0];

        echo "<br><br>";
        
        $prak=array("web","basdat","jarkom");
        for ($i=0; $i<=2; $i++) {
            echo $prak[$i];
            echo "<br>";
        }

    ?>
</body>

</html>