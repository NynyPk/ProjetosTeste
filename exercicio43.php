/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia um número inteiro de 3 casas decimais (100 a 999) e 
informe se o algarismo da casa das centenas é par ou ímpar.
*******************************************************************************/

/*
O programa le um numero inteiro de tres casas informado pelo usuario e
identifica o algarismo da casa das centenas. Em seguida, verifica se ele
e par ou impar.
*/

<?php

// 1. O programa le o numero inteiro via terminal
$numero = (int) readline("Digite um numero inteiro de 100 a 999: ");

// 2. O programa verifica se o numero esta dentro do intervalo valido
if ($numero >= 100 && $numero <= 999) {

    // 3. O programa identifica o algarismo da casa das centenas
    $centena = intdiv($numero, 100);

    // 4. O programa verifica se o algarismo da centena e par ou impar
    if ($centena % 2 == 0) {

        echo "O algarismo da centena e $centena e PAR.\n";

    } else {

        echo "O algarismo da centena e $centena e IMPAR.\n";
    }

} else {

    // 5. O programa informa que o numero nao esta no intervalo valido
    echo "Numero invalido. Digite um numero entre 100 e 999.\n";
}

?>