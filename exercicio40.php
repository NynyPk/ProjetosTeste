/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa para calcular a conta final de um hóspede de um hotel. Devem ser 
lidos: nome, tipo do apartamento (A, B, C ou D), quantidade de diárias e valor do consumo 
interno do hóspede.
O valor unitário da diária é determinado pela tabela:
- Apartamento A: R$ 150.00 | Apartamento B: R$ 100.00
- Apartamento C: R$ 75.00  | Apartamento D: R$ 50.00
O programa deve calcular:
- Valor total das diárias (dias * valor_diaria);
- Subtotal (diárias + consumo interno);
- Taxa de serviço (10% sobre o subtotal);
- Total geral (subtotal + taxa de serviço).
Exiba a fatura completa e detalhada.
*******************************************************************************/

/*
O programa le o nome do hospede, o tipo do apartamento, a quantidade de
diarias e o consumo interno. Em seguida, identifica o valor da diaria,
calcula os valores da conta e exibe a fatura detalhada.
*/

<?php

// 1. O programa le os dados do hospede
$nome = readline("Digite o nome do hospede: ");
$tipo = strtoupper(readline("Digite o tipo do apartamento (A, B, C ou D): "));
$diarias = (int) readline("Digite a quantidade de diarias: ");
$consumo = (float) str_replace(',', '.', readline("Digite o consumo interno: R$ "));

// 2. O programa verifica o tipo do apartamento e define o valor da diaria
if ($tipo == "A") {

    $valorDiaria = 150.00;

} elseif ($tipo == "B") {

    $valorDiaria = 100.00;

} elseif ($tipo == "C") {

    $valorDiaria = 75.00;

} elseif ($tipo == "D") {

    $valorDiaria = 50.00;

} else {

    echo "Tipo de apartamento invalido.\n";
    exit;
}

// 3. O programa calcula o valor total das diarias
$totalDiarias = $diarias * $valorDiaria;

// 4. O programa calcula o subtotal
$subtotal = $totalDiarias + $consumo;

// 5. O programa calcula a taxa de servico de 10%
$taxaServico = $subtotal * 0.10;

// 6. O programa calcula o total geral
$totalGeral = $subtotal + $taxaServico;

// 7. O programa exibe a fatura completa
echo "\n========== FATURA ==========\n";
echo "Hospede: $nome\n";
echo "Apartamento: $tipo\n";
echo "Diarias: $diarias\n";
echo "Valor da diaria: R$ " . number_format($valorDiaria, 2, ',', '.') . "\n";
echo "Total das diarias: R$ " . number_format($totalDiarias, 2, ',', '.') . "\n";
echo "Consumo interno: R$ " . number_format($consumo, 2, ',', '.') . "\n";
echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "\n";
echo "Taxa de servico (10%): R$ " . number_format($taxaServico, 2, ',', '.') . "\n";
echo "Total geral: R$ " . number_format($totalGeral, 2, ',', '.') . "\n";
echo "============================\n";

?>
