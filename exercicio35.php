/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo:  Escreva um programa que leia dois números reais e os exiba primeiro em ordem 
crescente e depois em ordem decrescente.
*******************************************************************************/

/*
O programa le dois numeros reais informados pelo usuario via terminal e
verifica qual possui o menor valor para exibir os dois em ordem crescente
e depois em ordem decrescente.
*/

<?php

// 1. O programa le os dois numeros reais via terminal
$numero1 = (float) readline("Digite o primeiro numero: ");
$numero2 = (float) readline("Digite o segundo numero: ");

// 2. O programa verifica a ordem dos numeros
if ($numero1 <= $numero2) {

    // 3. O programa exibe os numeros em ordem crescente
    echo "Ordem crescente: $numero1, $numero2\n";

    // 4. O programa exibe os numeros em ordem decrescente
    echo "Ordem decrescente: $numero2, $numero1\n";

} else {

    // 5. O programa exibe os numeros em ordem crescente
    echo "Ordem crescente: $numero2, $numero1\n";

    // 6. O programa exibe os numeros em ordem decrescente
    echo "Ordem decrescente: $numero1, $numero2\n";
}

?>
