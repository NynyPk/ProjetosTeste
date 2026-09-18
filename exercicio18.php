<?php

echo "Digite um número de 100 a 999: ";
$num = intval(trim(fgets(STDIN)));

$dezenas = intdiv($num, 10) % 10;

echo "Algarismo das dezenas = " . $dezenas;

?>


