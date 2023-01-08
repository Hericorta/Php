
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento</title>
</head>
<body>
    <?php
        echo "<h3>Pós-incremento</h3>";
        $a = 5;
        echo "Deve ser 5:" . $a++ ."<br>";
        echo "Deve ser 6:" . $a."<br>";

        $a = 5;
        echo "<h3>Pós-Decremento</h3>";
        echo "Deve ser 5:" . $a-- ."<br>";
        echo "Deve ser 4:" . $a."<br>";

        echo "<h3>Pré-incremento</h3>";
        $a = 5;
        echo "Deve ser 6:" . ++$a ."<br>";
        echo "Deve ser 6:" . $a."<br>";

        $a = 5;
        echo "<h3>Pré-Decremento</h3>";
        echo "Deve ser 4:" . --$a ."<br>";
        echo "Deve ser 4:" . $a."<br>";
      
    ?>
</body>
</html>