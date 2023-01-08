<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
        echo"Exercisio 1 <br>";
        $alunos = [9,8,5,7,8,9,10,9,10,8,7,10,9]; 
        $b = 0;
        $c = 0;
        foreach($alunos as $aluno){
            $b += $aluno;
            $c++;
        }
        $d = $b/$c;
        $d =  number_format($d, 2, '.', '');
        echo"Média: $d <br>"; 

        echo"<hr>";

        echo"Exercisio 2 <br>";
        $s = 0;
        $n = 0;
        $nota = ["S","S","S","N","S","N","N","S","S","S","S","N","S","S","N","S","S","S"];
        foreach($nota as $r){
            if($r == "S"){
                $s++;
            }
            if($r == "N"){
                $n++;
            }
        }
        echo"O número de pessoas que respondeu sim é igual á: $s <br>";
        echo"O número de pessoas que respondeu não é igual á: $n <br>";
    ?>
</body>
</html>