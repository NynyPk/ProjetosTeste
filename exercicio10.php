<?php

echo "Digite o primeiro número: ";
$num1 = intval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$num2 = intval(trim(fgets(STDIN)));

$soma = $num1 + $num2;

echo "Soma: " . $soma;

?>