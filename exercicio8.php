<?php

echo "Digite um número inteiro: ";
$x = intval(trim(fgets(STDIN)));

$antecessor = $x - 1;
$sucessor = $x + 1;

echo "Antecessor = " . $antecessor . PHP_EOL;
echo "Sucessor = " . $sucessor;

?>
