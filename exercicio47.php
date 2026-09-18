/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia dois nomes e os exiba na tela em ordem alfabética.
*******************************************************************************/

/*
O programa le dois nomes informados pelo usuario e compara os nomes para
exibi-los em ordem alfabetica.
*/

<?php

// 1. O programa le os dois nomes
$nome1 = readline("Digite o primeiro nome: ");
$nome2 = readline("Digite o segundo nome: ");

// 2. O programa compara os nomes para verificar a ordem alfabetica
if (strtolower($nome1) <= strtolower($nome2)) {

    // 3. O programa exibe os nomes em ordem alfabetica
    echo "$nome1\n";
    echo "$nome2\n";

} else {

    // 4. O programa exibe os nomes em ordem alfabetica invertida
    echo "$nome2\n";
    echo "$nome1\n";
}

?>
