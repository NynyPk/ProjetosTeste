/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Segundo uma tabela médica, o peso ideal de uma pessoa está relacionado com a altura e 
o sexo. Escreva um programa que leia a altura e o sexo ('M' ou 'F') de uma pessoa, e calcule 
e exiba o seu peso ideal utilizando as seguintes fórmulas:- Para homens: (72.7 * H) – 58- Para mulheres: (62.1 * H) – 44.7
*******************************************************************************/

/*
O programa le a altura e o sexo da pessoa. Em seguida, calcula o peso ideal
de acordo com a formula correspondente ao sexo informado.
*/

<?php

// 1. O programa le a altura
$altura = (float) str_replace(',', '.', readline("Digite a altura em metros: "));

// 2. O programa le o sexo
$sexo = strtoupper(readline("Digite o sexo (M/F): "));

// 3. O programa calcula o peso ideal de acordo com o sexo
if ($sexo == "M") {

    $pesoIdeal = (72.7 * $altura) - 58;

} elseif ($sexo == "F") {

    $pesoIdeal = (62.1 * $altura) - 44.7;

} else {

    echo "Sexo invalido. Digite M ou F.\n";
    exit;
}

// 4. O programa exibe o peso ideal
echo "Peso ideal: " . number_format($pesoIdeal, 2, ',', '.') . " kg\n";

?>