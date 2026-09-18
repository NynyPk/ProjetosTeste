/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes: 
            26013861-2-  Filipe Przyvitoski Kasenoh
            26014360-2-  WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia quatro números inteiros e calcule a média ponderada 
deles, considerando que os pesos associados a cada número são, respectivamente, 1, 2, 3 e 
4
*******************************************************************************/

/*
O programa solicita quatro numeros inteiros ao usuario e multiplica cada
numero pelo seu respectivo peso. Em seguida, soma os valores ponderados
e divide pela soma dos pesos para obter a média.
*/


<?php
// 1. Guardamos os quatro números inteiros
$n1 = (int) readline("Digite o primeiro número: ");
$n2 = (int) readline("Digite o segundo número: ");
$n3 = (int) readline("Digite o terceiro número: ");
$n4 = (int) readline("Digite o quarto número: ");

// 2. Multiplicamos cada um pelo peso e dividimos por 10
$media = ($n1 * 1 + $n2 * 2 + $n3 * 3 + $n4 * 4) / 10;

// 3. Exibimos o resultado na tela
echo "Média ponderada = $media";
?>
