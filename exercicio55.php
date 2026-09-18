/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia um número inteiro entre 1 e 12 e exiba o nome do mês 
correspondente por extenso.
*******************************************************************************/

/*
O programa le um numero inteiro e informa o nome do mes correspondente.
*/

<?php

// 1. O programa le o numero
$numero = (int) readline("Digite um numero entre 1 e 12: ");

// 2. O programa verifica o mes correspondente
if ($numero == 1) {

    echo "Janeiro\n";

} elseif ($numero == 2) {

    echo "Fevereiro\n";

} elseif ($numero == 3) {

    echo "Marco\n";

} elseif ($numero == 4) {

    echo "Abril\n";

} elseif ($numero == 5) {

    echo "Maio\n";

} elseif ($numero == 6) {

    echo "Junho\n";

} elseif ($numero == 7) {

    echo "Julho\n";

} elseif ($numero == 8) {

    echo "Agosto\n";

} elseif ($numero == 9) {

    echo "Setembro\n";

} elseif ($numero == 10) {

    echo "Outubro\n";

} elseif ($numero == 11) {

    echo "Novembro\n";

} elseif ($numero == 12) {

    echo "Dezembro\n";

} else {

    echo "Numero invalido. Digite um valor entre 1 e 12.\n";
}

?>