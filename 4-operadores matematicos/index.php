
<?php
    $a = 100;
    $b = 10;
    $c = $a+$b;

    //Adição
    echo "Adição <br>";
    echo "$a+$b é igual a = $c <br><br>";

    //subtração
    $c = $a-$b;
    echo "Subtração <br>";
    echo "$a-$b é igual a = $c <br><br>";

    //multiplicação
    $c = $a*$b;
    echo "Multiplicação <br>";
    echo "$a*$b é igual a = $c <br><br>";

    //divisão
    $c = $a/$b;
    echo "Divisão <br>";
    echo "$a/$b é igual a = $c <br><br>";

    //Resto da divisão
    $c = $a%$b;
    echo "Resto da divisão <br>";
    echo "$a%$b é igual a = $c <br><br>";

    //Potencia
    $b=4;
    $c = $a**$b;
    echo "Potenciação <br>";
    echo "$a**$b é igual a = $c <br><br>";
    echo "<hr>";

    //Formatar Numero
    $cc = 38564.32;
    echo "Valor na conta corrente: R$ " . number_format($cc, 2, ",", ".") . "<br><br>";

    $debito = 200.16;
    echo "Valor do débito: R$ " . number_format($debito, 2, ",", ".") . "<br><br>";

    $result_real = $cc - $debito;
    echo "Saldo: R$ "  . number_format($result_real, 2, ",", ".") . "<br><br>";
?>