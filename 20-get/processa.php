<?php

$nome_cliente = filter_input(INPUT_GET, "nome_cliente", FILTER_UNSAFE_RAW );
$senha_cliente = filter_input(INPUT_GET, "senha_cliente", FILTER_UNSAFE_RAW);
$email_cliente = filter_input(INPUT_GET, "email_cliente", FILTER_UNSAFE_RAW);

echo "Nome do cliente: $nome_cliente <br>";
echo "E-mail do cliente: $email_cliente <br>";
echo "Senha do cliente: $senha_cliente <br>";