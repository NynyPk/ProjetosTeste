/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia um número real e, se for positivo, exiba seu inverso (1/x); 
caso contrário, exiba o seu valor absoluto (número multiplicado por -1).
*******************************************************************************/

/*
O programa le um numero real informado pelo usuario via terminal. Caso o
numero seja positivo, calcula seu inverso. Caso contrario, calcula seu
valor absoluto multiplicando o numero por -1.
*/

<?php

// 1. O programa le o numero real via terminal
$numero = (float) readline("Digite um numero real: ");

// 2. O programa verifica se o numero e positivo
if ($numero > 0) {

    // 3. O programa calcula e exibe o inverso do numero
    $inverso = 1 / $numero;
    echo "Inverso de $numero = $inverso\n";

} else {

    // 4. O programa calcula e exibe o valor absoluto do numero
    $absoluto = $numero * -1;
    echo "Valor absoluto de $numero = $absoluto\n";
}

?>