<?php

$nome_cliente = filter_input(INPUT_POST, "nome_cliente", FILTER_UNSAFE_RAW );
$senha_cliente = filter_input(INPUT_POST, "senha_cliente", FILTER_UNSAFE_RAW);
$email_cliente = filter_input(INPUT_POST, "email_cliente", FILTER_UNSAFE_RAW);

echo "Nome do cliente: $nome_cliente <br>";
echo "E-mail do cliente: $email_cliente <br>";
echo "Senha do cliente: $senha_cliente <br>";
echo"<hr>";

$dados=filter_input_array(INPUT_POST, FILTER_DEFAULT);

echo "Nome do cliente: ". $dados["nome_cliente"]."<br>";
echo "E-mail do cliente: ". $dados["email_cliente"]."<br>";
echo "Senha do cliente: ". $dados["senha_cliente"]."<br>";
