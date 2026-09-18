/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia dois números reais e exiba o maior de forma clara 
(abordagem focada em lógica estruturada de decisão composta).
*******************************************************************************/

/*
O programa le dois numeros reais informados pelo usuario via terminal e
utiliza uma estrutura de decisao para verificar qual dos dois e maior.
*/

<?php

// 1. O programa le os dois numeros reais via terminal
$numero1 = (float) readline("Digite o primeiro numero: ");
$numero2 = (float) readline("Digite o segundo numero: ");

// 2. O programa verifica qual dos dois numeros e maior
if ($numero1 >= $numero2) {

    // 3. O programa exibe o primeiro numero como maior ou igual
    echo "O maior numero e $numero1.\n";

} else {

    // 4. O programa exibe o segundo numero como maior
    echo "O maior numero e $numero2.\n";
}

?>
