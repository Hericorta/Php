<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros da função</title>
</head>
<body>
    <?php
        echo "<h4>Passagem por valor</h4><br>";

        function salario($num){
                $num += 5;
                echo"Dentro da função - Salário com aumento: $num <br>";
        }
        $valor = 8200;
        salario($valor);
        echo "Salário sem aumento: $valor <br>";
        echo"<hr>";

        function salario_a($num){
            $num += 100;
            echo"Dentro da funçaõ saláro com aumento $num <br>";
            return $num;
        }
        $salario = 8500.47;
        $salario_real = salario_a($salario);
        echo"$salario_real";
        echo"<hr>";
        echo"<h4>Passagem por referência</h4><br>";
        function saltario_b(&$num){
            $num += 200;
            echo"Dentro da funçaõ saláro com aumento $num <br>";
        }
        $salario_b = 9300;
        echo"Salário sem aumento: $salario_b <br>";
        saltario_b($salario_b);
        echo"Salário com aumento:$salario_b<br>";
    ?>
</body>
</html>