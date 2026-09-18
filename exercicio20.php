<?php

echo "Digite a data no formato ddmmaa: ";
$data = trim(fgets(STDIN));

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

$novaData = $mes . $dia . $ano;

echo "Data reorganizada: " . $novaData;

?>
