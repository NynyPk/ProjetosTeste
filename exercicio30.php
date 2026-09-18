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
se o resto da divisao desse numero por 3 e igual a zero. Caso seja, o numero
e divisivel por 3.
*/

<?php

// 1. O programa le o numero inteiro via terminal
$numero = (int) readline("Digite um numero inteiro: ");

// 2. O programa verifica se o numero e divisivel por 3
if ($numero % 3 == 0) {

    // 3. O programa exibe que o numero e divisivel por 3
    echo "O numero $numero e divisivel por 3.\n";

} else {

    // 4. O programa exibe que o numero nao e divisivel por 3
    echo "O numero $numero nao e divisivel por 3.\n";
}

?>