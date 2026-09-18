Exercício 11
<?php

echo "Digite o primeiro número: ";
$num1 = intval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$num2 = intval(trim(fgets(STDIN)));

$produto = $num1 * $num2;

echo "Produto: " . $produto;

?>
