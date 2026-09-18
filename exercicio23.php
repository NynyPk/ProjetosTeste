/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes: 
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia o valor da base e da altura de um triângulo e calcule e exiba a sua área (Fórmula: Area = (Base * Altura) / 2).
*******************************************************************************/

/*
O programa lê os valores da base e da altura de um triângulo informados
pelo usuario via terminal, calcula a área utilizando a fórmula
(Base * Altura) / 2 e exibe o resultado do calculado.
*/

<?php
// 1. Lemos a base e a altura do triângulo pelo terminal
$base = (float) readline("Digite o valor da base do triângulo: ");
$altura = (float) readline("Digite o valor da altura do triângulo: ");

// 2. Calculamos a área usando a formula (Base * Altura) / 2
$area = ($base * $altura) / 2;

// 3. Exibimos o resultado
echo "Área do triângulo = " . $area;
?>