/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia um valor em Reais (BRL), a taxa de cotação atual do dólar 
(USD) e converta o valor para dólares, exibindo o resultado formatado.
*******************************************************************************/

/*
O programa le um valor em reais e a cotacao atual do dolar. Em seguida,
converte o valor para dolares e exibe o resultado formatado.
*/

<?php

// 1. O programa le o valor em reais
$reais = (float) str_replace(',', '.', readline("Digite o valor em Reais (BRL): "));

// 2. O programa le a cotacao atual do dolar
$cotacao = (float) str_replace(',', '.', readline("Digite a cotacao atual do dolar (USD): "));

// 3. O programa verifica se a cotacao e valida
if ($cotacao > 0) {

    // 4. O programa converte reais para dolares
    $dolares = $reais / $cotacao;

    // 5. O programa exibe o resultado formatado
    echo "Valor em Reais: R$ " . number_format($reais, 2, ',', '.') . "\n";
    echo "Cotacao do Dolar: R$ " . number_format($cotacao, 2, ',', '.') . "\n";
    echo "Valor em Dolares: US$ " . number_format($dolares, 2, '.', ',') . "\n";

} else {

    echo "A cotacao deve ser maior que zero.\n";
}

?>