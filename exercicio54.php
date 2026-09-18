/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia um número inteiro entre 1 e 7 e mostre o dia da semana 
correspondente (exemplo: 1 -> 'Domingo', 4 -> 'Quarta-feira', etc.).
*******************************************************************************/

/*
O programa le um numero inteiro e informa o dia da semana correspondente.
*/

<?php

// 1. O programa le o numero
$numero = (int) readline("Digite um numero entre 1 e 7: ");

// 2. O programa verifica o dia da semana
if ($numero == 1) {

    echo "Domingo\n";

} elseif ($numero == 2) {

    echo "Segunda-feira\n";

} elseif ($numero == 3) {

    echo "Terca-feira\n";

} elseif ($numero == 4) {

    echo "Quarta-feira\n";

} elseif ($numero == 5) {

    echo "Quinta-feira\n";

} elseif ($numero == 6) {

    echo "Sexta-feira\n";

} elseif ($numero == 7) {

    echo "Sabado\n";

} else {

    echo "Numero invalido. Digite um valor entre 1 e 7.\n";
}

?>