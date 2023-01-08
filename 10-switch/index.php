<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <?php
        $a = 10;
        switch($a){
            case 1:
                echo "<h2>A variável A é igual a 1</h2><br>";
                break;
            
            case 2:
                echo "<h2>A variável A é igual a 2</h2><br>";
                break;
            default:
                echo"<h2>Opção não encontrada</h2><br>";
            break;
        }
      
        
    ?>
</body>
</html>