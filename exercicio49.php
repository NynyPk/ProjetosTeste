/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia três números e os exiba na tela em ordem crescente e, 
posteriormente, em ordem decrescente.
*******************************************************************************/

/*
O programa le tres numeros informados pelo usuario e compara os valores
para exibi-los primeiro em ordem crescente e depois em ordem decrescente.
*/

<?php

// 1. O programa le os tres numeros
$numero1 = (float) str_replace(',', '.', readline("Digite o primeiro numero: "));
$numero2 = (float) str_replace(',', '.', readline("Digite o segundo numero: "));
$numero3 = (float) str_replace(',', '.', readline("Digite o terceiro numero: "));

// 2. O programa compara os numeros e organiza os valores em ordem crescente
if ($numero1 <= $numero2 && $numero2 <= $numero3) {

    $menor = $numero1;
    $meio = $numero2;
    $maior = $numero3;

} elseif ($numero1 <= $numero3 && $numero3 <= $numero2) {

    $menor = $numero1;
    $meio = $numero3;
    $maior = $numero2;

} elseif ($numero2 <= $numero1 && $numero1 <= $numero3) {

    $menor = $numero2;
    $meio = $numero1;
    $maior = $numero3;

} elseif ($numero2 <= $numero3 && $numero3 <= $numero1) {

    $menor = $numero2;
    $meio = $numero3;
    $maior = $numero1;

} elseif ($numero3 <= $numero1 && $numero1 <= $numero2) {

    $menor = $numero3;
    $meio = $numero1;
    $maior = $numero2;

} else {

    $menor = $numero3;
    $meio = $numero2;
    $maior = $numero1;
}

// 3. O programa exibe os numeros em ordem crescente
echo "Ordem crescente: $menor, $meio, $maior\n";

// 4. O programa exibe os numeros em ordem decrescente
echo "Ordem decrescente: $maior, $meio, $menor\n";

?>