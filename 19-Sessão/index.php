
<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
</head>
<body>
    <?php
    #Iniciar sessão
    $_SESSION["id"] = 2;
    $_SESSION["Nome"]= "Henrique";

    //verificar se a sessão existe
    if(isset($_SESSION["id"])){
        echo"Id do usuário " .$_SESSION["id"]. " e o nome é " . $_SESSION["Nome"]."<br>";
    }else{
        echo"Sessão não encontrada!";
    }
    echo"<hr>";
    //Excluir a sessão
    unset($_SESSION["id"], $_SESSION["Nome"]);
    
    //verificar se a sessão existe
    if(isset($_SESSION["id"])){
        echo"Id do usuário " .$_SESSION["id"]. " e o nome é " . $_SESSION["Nome"]."<br>";
    }else{
        echo"Sessão não encontrada!";
    }
    ?>
</body>
</html>