<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping PHP</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1-10 adalah : </br>";
    for ($x = 2; $x <=10; $x += 2)
        echo " $x </br>";

    echo "</br> Perulangan WHILE bilangan ganjil dari 1-10 adalah : </br>";
    $y=1;
    while($y <= 10){
        echo "$y </br>";
        $y += 2;
    }

    echo "</br> Perulangan DO-WHILE bilangan prima kurang dari 20 adalah : </br>";
    $angka = 2;
    do {
        $prima = true;
        for ($i = 2; $i < $angka; $i++) {
            if ($angka % $i == 0) {
                $prima = false;
                break;
            }
        } if ($prima) {
        echo $angka . " " . "<br>";
        }
        $angka++;
    } while ($angka < 20);
    ?>
</body>
</html>