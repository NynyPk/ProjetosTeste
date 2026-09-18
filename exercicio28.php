/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia um número real e, se ele for maior do que 20, exiba a 
metade deste numero.
*******************************************************************************/

/*
O programa le um numero real informado pelo usuario via terminal. Caso o valor
seja maior que 20, calcula e exibe a metade desse numero.
*/

<?php

// 1. Le o numero real via terminal
$numero = (float) readline("Digite um numero real: ");

// 2. Verifica se o numero e maior que 20
if ($numero > 20) {

    // 3. Calcula a metade do numero
    $metade = $numero / 2;
    echo "Metade de $numero = $metade\n";
}

?>