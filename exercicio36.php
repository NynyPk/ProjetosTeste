/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Deseja-se calcular a conta de consumo de energia elétrica de um consumidor. Escreva 
um programa que leia o código do consumidor, o preço do kWh e a quantidade de kWh 
consumida. Exiba o código do consumidor e o total a pagar, sabendo que a taxa mínima 
cobrada é de R$ 11,20.
*******************************************************************************/

/*
O programa lê o código do consumidor, o preço do kWh e a quantidade consumida
via terminal. Calcula o valor total multiplicando a quantidade pelo preço e
garante que o valor final respeite a taxa mínima de R$ 11,20\.
*/

<?php
// 1. Lemos os dados do consumidor via terminal
$codigo = (int) readline("Digite o código do consumidor: ");
$precoKwh = (float) readline("Digite o preço do kWh (R$): ");
$qtdKwh = (float) readline("Digite a quantidade de kWh consumida: ");

// 2. Calculamos o valor total do consumo
$total = $qtdKwh * $precoKwh;

// 3. Verificamos se o valor calculado é menor que a taxa mínima de R$ 11,20
if ($total < 11.20) {
    $total = 11.20;
}

// 4. Exibimos o código do consumidor e o total a pagar
echo "Código do consumidor: $codigo\n";
echo "Total a pagar = R$ " . number_format($total, 2, ',', '.') . "\n";
?>
