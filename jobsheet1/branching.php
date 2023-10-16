<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching PHP</title>
</head>
<body>
    <form method="post">
        Masukkan nilai x: <input type="text" name="x">
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
    
    echo "Nilai x = $x </br> </br>";
    if ($x > 0){
        echo "$x adalah Bilangan Positif";
    }
    else if ($x < 0){
        echo "$x adalah Bilangan Negatif";
    }
    else {
        echo "$x adalah Bilangan Nol";
    }
    }
    ?>
</body>
</html>