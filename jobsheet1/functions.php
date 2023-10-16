<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions PHP</title>
</head>
<body>
    <?php
    function persegi_panjang ($p, $l) {
        return $p * $l;
    }
    function lingkaran ($r) {
        return 3.14 * $r * $r;
    }
    ?>

    <form method="post">
    MENGHITUNG LUAS PERSEGI PANJANG DAN LUAS LINGKARAN <br> </br>
    Masukkan panjang : <input type="text" name="p">
    Masukkan lebar : <input type="text" name="l">
    Masukkan jari-jari : <input type="text" name="r" >
    <input type="submit" value="Hitung">
    </form>


    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p = $_POST["p"];
        $l = $_POST["l"];
        $r = $_POST["r"];
    
    echo "Luas persegi panjang = " . persegi_panjang($p, $l) . "</br>";
    echo "Luas lingkaran = " . lingkaran($r) . "</br>";
    }
    ?>
</body>
</html>