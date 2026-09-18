```
/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes: 
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo:  Escreva um programa que calcule e exiba o comprimento de uma circunferência com 
base em seu raio fornecido pelo usuario. Defina PI como uma constante com valor 3.1415 
(Fórmula: C = 2 * PI * Raio).
*******************************************************************************/

/*
O programa define a constante PI com o valor 3.1415, lê o valor do raio
da circunferência fornecido pelo usuário via terminal, calcula o comprimento
utilizando a fórmula C = 2 * PI * Raio e exibe o resultado na tela.
*/

<?php
// 1. Definimos a constante PI
define("PI", 3.1415);

// 2. Lemos o valor do raio via terminal
$raio = (float) readline("Digite o valor do raio da circunferência: ");

// 3. Calculamos o comprimento
$comprimento = 2 * PI * $raio;

// 4. Exibimos o resultado
echo "Comprimento da circunferência = " . $comprimento;
?>
