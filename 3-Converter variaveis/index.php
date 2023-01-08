<?php
    $x = "11";
    var_dump($x);
    $x = $x + 1;
    echo "<br> inteiro $x  <br>";
    var_dump($x);
    //para transformar converter variavel
    $x = (bool) $x;//No parentes pode ser string, double e bool
    echo "<br> bool $x <br>";
    var_dump($x);
?>