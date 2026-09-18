/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes: 
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia o valor do saldo de uma aplicação
bancária e exiba o novo saldo reajustado com um acréscimo de 2%.
*******************************************************************************/

/*
O programa faz uma leitura do saldo atual informado pelo usuario informado no terminal, aplica
o reajuste de 2% (multiplicando por 1.02) e exibe o novo valor.
*/

<?php
// 1. Lemos o saldo atual do usuário
$saldo = (float) readline("Digite o saldo da aplicação: R$ ");

// 2. Calculamos o reajuste de 2%
$novoSaldo = $saldo * 1.02;

// 3. Exibimos o valor reajustado
echo "Novo saldo com reajuste (2%) = R$ " . number_format($novoSaldo, 2, ',', '.');
?>
