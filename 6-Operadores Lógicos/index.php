<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Operadores Lógicos</title>
</head>
<body>
    <div class="container conteudo-pg">
        <?php
            $a = 10;
            $b = 8;
            $c = 7;
            echo "<h2>Retorna True se as duas variáveis forem verdadeiras (And)</h2>";
            if(($a == 10) AND ($b >=5)){
                echo "A variável $a é igual a 10 e a variável $b é maior do que 5, por tanto é verdadeiro <br>";
            }
            echo "<h2>Retorna True se uma ou outra variável forem verdadeiras (or)</h2>";
            if(($a == 10) or ($b >=9)){
                echo "A variável $a é igual a 10 e a variável $b não é maior que 9 , mas mesmo assim é verdadeiro <br>";
            }
            echo "<h2>Retorna True se uma ou outra variável forem falsa (Xor)</h2>";
            if(($a == 10) Xor ($b >=9)){
                echo "A variável $a é igual a 10 e a variável $b não é maior que 9 , mas mesmo assim é verdadeiro <br>";
            }

            echo "<h2>Retorna True se a variável for falsa (!)</h2>";
            if(!empty($c)){
                echo "A variável $c não esta vazua , por tanto é verdadeiro <br>";
            }
            echo "<h2>Retorna True se as duas variáveis forem verdadeiras (&&)</h2>";
            if(($a == 10) && ($c >=5)){
                echo "A variável $a é igual a 10 e a variável $c é maior do que 5, por tanto é verdadeiro <br>";
            }
            echo "<h2>Retorna True se uma ou outra variável forem verdadeiras (||)</h2>";
            if(($c <=10) || ($b >=9)){
                echo "A variável $c é menor ou igual a 10 e a variável $b não é maior que 9 , mas mesmo assim é verdadeiro <br>";
            }
            
        ?>
    </div>
</body>
</html>