<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <?php
        setcookie("afiliado", "5323", (time() + (7*24 * 3600))); 
        
        if(isset($_COOKIE["afiliado"])){
            $afiliado = $_COOKIE["afiliado"];
            echo "Número do afiliado: ".$_COOKIE['afiliado'] ."<br>";
        }
       
        setcookie("Logado", "Henrique", (time() + (60)));
        if(isset($_COOKIE["Logado"])){
            echo"Úsuario: ".$_COOKIE["Logado"]." logado <br>";
        }else{
            echo"Cookie inválido!<br>";
        }
        
    ?>
</body>
</html>