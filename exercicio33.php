/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia dois números reais e exiba o maior deles.
*******************************************************************************/

/*
O programa le dois numeros reais informados pelo usuario via terminal e
verifica qual dos dois possui o maior valor, exibindo o resultado.
*/

<?php

// 1. O programa le os dois numeros reais via terminal
$numero1 = (float) readline("Digite o primeiro numero: ");
$numero2 = (float) readline("Digite o segundo numero: ");

// 2. O programa verifica qual dos dois numeros e maior
if ($numero1 > $numero2) {

    // 3. O programa exibe o primeiro numero como maior
    echo "O maior numero e $numero1.\n";

} elseif ($numero2 > $numero1) {

    // 4. O programa exibe o segundo numero como maior
    echo "O maior numero e $numero2.\n";

} else {

    // 5. O programa informa que os dois numeros sao iguais
    echo "Os dois numeros sao iguais.\n";
}

?>