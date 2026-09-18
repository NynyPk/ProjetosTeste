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
Descritivo: Escreva um programa que leia uma temperatura dada na escala Fahrenheit e exiba o equivalente convertido em graus Celsius (Fórmula de conversão: C = 5/9 * (F – 32)).
*******************************************************************************/

/*
O programa lê a temperatura em Fahrenheit informada pelo usuário via terminal,
calcula a conversão para graus Celsius utilizando a fórmula C = 5/9 * (F - 32)
e exibe o resultado formatado na tela.
*/

<?php
// 1. Lemos a temperatura em Fahrenheit via terminal
$f = (float) readline("Digite a temperatura em Fahrenheit: ");

// 2. Convertemos para Celsius usando a fórmula C = 5/9 * (F - 32)
$c = (5 / 9) * ($f - 32);

// 3. Exibimos o resultado
echo "Temperatura em Celsius = " . round($c, 2) . " °C";
?>
