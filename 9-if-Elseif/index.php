<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Elseif</title>
</head>
<body>
    <?php
        $a = 3;

        if($a == 1){
            echo "<h2>Sacar o dinheiro. </h2><br>";
        }
        elseif($a == 2){
            echo "<h2>Depositar dinheiro.</h2><br>";
        }else{
            echo "<h2>Opção não encontrada.</h2><br>";
        }
        
        
    ?>
</body>
</html>