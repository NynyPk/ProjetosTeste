/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia três números reais e exiba o maior deles.
*******************************************************************************/

/*
O programa le tres numeros reais informados pelo usuario e verifica qual
deles possui o maior valor.
*/

<?php

// 1. O programa le os tres numeros reais
$numero1 = (float) str_replace(',', '.', readline("Digite o primeiro numero: "));
$numero2 = (float) str_replace(',', '.', readline("Digite o segundo numero: "));
$numero3 = (float) str_replace(',', '.', readline("Digite o terceiro numero: "));

// 2. O programa verifica qual numero e o maior
if ($numero1 >= $numero2 && $numero1 >= $numero3) {

    $maior = $numero1;

} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {

    $maior = $numero2;

} else {

    $maior = $numero3;
}

// 3. O programa exibe o maior numero
echo "O maior numero e $maior.\n";

?>