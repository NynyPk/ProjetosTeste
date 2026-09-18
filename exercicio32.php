/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia um número real e informe se ele é positivo, negativo ou 
nulo.
*******************************************************************************/

/*
O programa le um numero real informado pelo usuario via terminal e verifica
se ele e maior, menor ou igual a zero, exibindo a mensagem correspondente.
*/

<?php

// 1. O programa le o numero real via terminal
$numero = (float) readline("Digite um numero real: ");

// 2. O programa verifica se o numero e positivo
if ($numero > 0) {

    // 3. O programa exibe que o numero e positivo
    echo "O numero $numero e positivo.\n";

} elseif ($numero < 0) {

    // 4. O programa exibe que o numero e negativo
    echo "O numero $numero e negativo.\n";

} else {

    // 5. O programa exibe que o numero e nulo
    echo "O numero $numero e nulo.\n";
}

?>