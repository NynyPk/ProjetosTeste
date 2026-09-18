/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia um número inteiro e exiba se ele é divisível por 3 (múltiplo 
de 3).
*******************************************************************************/

/*
O programa le um numero inteiro informado pelo usuario via terminal e verifica
o resto da divisao por 2. Caso o resto seja zero, o numero e par. Caso
contrario, o numero e impar.
*/

<?php

// 1. O programa le o numero inteiro via terminal
$numero = (int) readline("Digite um numero inteiro: ");

// 2. O programa verifica se o numero e par ou impar
if ($numero % 2 == 0) {

    // 3. O programa exibe que o numero e par
    echo "O numero $numero e PAR.\n";

} else {

    // 4. O programa exibe que o numero e impar
    echo "O numero $numero e IMPAR.\n";
}

?>