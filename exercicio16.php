<?php

echo "Digite um número inteiro: ";
$num = intval(trim(fgets(STDIN)));

if ($num < 0) {
    echo "Erro: o número não pode ser negativo.";
} else {
    $dobro = $num * 2;
    echo "Dobro = " . $dobro;
}
?>

