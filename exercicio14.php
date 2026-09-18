<?php

echo "Digite o nome do aluno: ";
$nome = trim(fgets(STDIN));

echo "Digite a primeira nota: ";
$nota1 = floatval(trim(fgets(STDIN)));

echo "Digite a segunda nota: ";
$nota2 = floatval(trim(fgets(STDIN)));

$media = ($nota1 + $nota2) / 2;

echo "Aluno: " . $nome . PHP_EOL;
echo "Média final: " . $media;

?>
