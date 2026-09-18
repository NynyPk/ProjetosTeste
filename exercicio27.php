/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2

Componentes:
             26013861-2 - Filipe Przyvitoski Kasenoh
             26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026

Descritivo: Escreva um programa que leia um numero inteiro e informe se ele
é estritamente maior que zero.
******************************************************************************/

/*
O programa lê um número inteiro informado pelo usuario via terminal e verifica
se ele é estritamente maior que zero (> 0), exibindo a mensagem correspondente.
*/

<?php

// 1. Lemos o número inteiro via terminal
$numero = (int) readline("Digite um número inteiro: ");

// 2. Verificamos se o número é estritamente maior que zero
if ($numero > 0) {
    echo "O número $numero é estritamente maior que zero.\n";

} else {
    echo "O número $numero NÃO é estritamente maior que zero.\n";
}