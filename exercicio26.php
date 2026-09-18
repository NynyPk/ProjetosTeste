/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes: 
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia duas variáveis inteiras (A e B) e efetue a troca de conteúdo 
entre elas de forma que A passe a valer B, e B passe a valer A. Exiba os valores antes e 
depois da troca.
*******************************************************************************/

/*
O programa lê dois inteiros para as variáveis A e B informados pelo usuário
via terminal, mostra os valores antes da troca, realiza a inversão utilizando
uma variável auxiliar e exibe os novos valores de A e B após a troca.
*/

<?php
// 1. Lemos os valores inteiros de A e B via terminal
$a = (int) readline("Digite o valor para A: ");
$b = (int) readline("Digite o valor para B: ");

// 2. Exibimos os valores antes da troca
echo "Antes da troca: A = $a | B = $b\n";

// 3. Realizamos a troca guardando o valor de A em uma variável auxiliar
$aux = $a;
$a = $b;
$b = $aux;

// 4. Exibimos os valores após a troca
echo "Depois da troca: A = $a | B = $b\n";
?>