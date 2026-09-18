<?php

echo "Digite o dividendo: ";
$dividendo = intval(trim(fgets(STDIN)));

echo "Digite o divisor: ";
$divisor = intval(trim(fgets(STDIN)));

$quociente = intdiv($dividendo, $divisor);
$resto = $dividendo % $divisor;

echo "Dividendo: " . $dividendo . PHP_EOL;
echo "Divisor: " . $divisor . PHP_EOL;
echo "Quociente: " . $quociente . PHP_EOL;
echo "Resto: " . $resto;

?>
