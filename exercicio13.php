<?php

echo "Digite o primeiro número: ";
$num1 = intval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$num2 = intval(trim(fgets(STDIN)));

$media = ($num1 + $num2) / 2;

echo "Média = " . $media;

?>
