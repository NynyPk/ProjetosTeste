/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia cinco números e exiba na tela o maior e o menor valor 
digitado.
*******************************************************************************/

/*
O programa le cinco numeros informados pelo usuario e compara os valores
para identificar e exibir o maior e o menor numero digitado.
*/

<?php

// 1. O programa le os cinco numeros
$numero1 = (float) str_replace(',', '.', readline("Digite o primeiro numero: "));
$numero2 = (float) str_replace(',', '.', readline("Digite o segundo numero: "));
$numero3 = (float) str_replace(',', '.', readline("Digite o terceiro numero: "));
$numero4 = (float) str_replace(',', '.', readline("Digite o quarto numero: "));
$numero5 = (float) str_replace(',', '.', readline("Digite o quinto numero: "));

// 2. O programa considera o primeiro numero como maior e menor inicialmente
$maior = $numero1;
$menor = $numero1;

// 3. O programa verifica se os outros numeros sao maiores ou menores
if ($numero2 > $maior) {
    $maior = $numero2;
}

if ($numero2 < $menor) {
    $menor = $numero2;
}

if ($numero3 > $maior) {
    $maior = $numero3;
}

if ($numero3 < $menor) {
    $menor = $numero3;
}

if ($numero4 > $maior) {
    $maior = $numero4;
}

if ($numero4 < $menor) {
    $menor = $numero4;
}

if ($numero5 > $maior) {
    $maior = $numero5;
}

if ($numero5 < $menor) {
    $menor = $numero5;
}

// 4. O programa exibe o maior e o menor valor
echo "Maior valor = $maior\n";
echo "Menor valor = $menor\n";

?>