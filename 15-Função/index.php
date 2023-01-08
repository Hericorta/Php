<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>
    <?php
        
        $codigo =["p","y","t","h","o","n"];
        

        function promocao($valor){
            foreach($valor as $code){
                echo"$code<br>";
            }
        }
        promocao($codigo);
        
    ?>
</body>
</html>