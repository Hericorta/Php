<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Recursiva</title>
</head>
<body>
    <?php
        function exibe($num){
            echo"Valor passado para á função: $num <br>";
            if ($num > 1){
                $num--;
                exibe($num);
            }
        }

    
        exibe(10);
    ?>
</body>
</html>