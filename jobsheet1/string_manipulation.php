<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Manipulation PHP</title>
</head>
<body>
    <?php
    $x = "Selamat Belajar PHP!";
    echo $x . "<br>";

    echo "<br> Menampilkan string dengan huruf KAPITAL : <br>";
    echo strtoupper($x) . "<br>";

    echo "<br> Menampilkan string dengan huruf KECIL : <br>";
    echo strtolower($x) . "<br>";

    echo "<br> MEMOTONG STRING : <br>";
    echo substr($x, 0, 15);
    ?>
</body>
</html>