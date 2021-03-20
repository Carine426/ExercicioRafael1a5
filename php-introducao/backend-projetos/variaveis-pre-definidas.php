<?php

//var_dump exibe as informações sobre a variavel, como o tipo, valor e etc.
//var_dump($_GET);

$nome = $_GET["nome"];

$idade = $_GET["idade"];

$anoNascimento = 2021 - $idade;

echo "<h1>Olá, $nome, voce nasceu em $anoNascimento</h1>";