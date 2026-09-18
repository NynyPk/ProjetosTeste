/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia separadamente o dia, o mês e o ano de uma data e 
informe se ela é uma data válida ou não. Considere a ocorrência de anos bissextos.
*******************************************************************************/

/*
O programa le separadamente o dia, o mes e o ano. Em seguida, verifica
se o ano e bissexto e se a data informada e valida.
*/

<?php

// 1. O programa le o dia, o mes e o ano
$dia = (int) readline("Digite o dia: ");
$mes = (int) readline("Digite o mes: ");
$ano = (int) readline("Digite o ano: ");

// 2. O programa verifica se o ano e bissexto
$bissexto = ($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0);

// 3. O programa define a quantidade de dias de acordo com o mes
if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {

    $diasNoMes = 31;

} elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {

    $diasNoMes = 30;

} elseif ($mes == 2) {

    if ($bissexto) {
        $diasNoMes = 29;
    } else {
        $diasNoMes = 28;
    }

} else {

    $diasNoMes = 0;
}

// 4. O programa verifica se a data e valida
if ($ano > 0 && $mes >= 1 && $mes <= 12 && $dia >= 1 && $dia <= $diasNoMes) {

    echo "A data $dia/$mes/$ano e valida.\n";

} else {

    echo "A data $dia/$mes/$ano nao e valida.\n";
}

?>