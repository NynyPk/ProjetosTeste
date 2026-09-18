<?php

echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

echo "Digite seu endereço: ";
$endereco = trim(fgets(STDIN));

echo "Digite seu telefone: ";
$telefone = trim(fgets(STDIN));

echo PHP_EOL;
echo "Nome: " . $nome . PHP_EOL;
echo "Endereço: " . $endereco . PHP_EOL;
echo "Telefone: " . $telefone;

?>

