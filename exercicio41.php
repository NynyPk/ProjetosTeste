/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa para calcular o imposto de renda anual de um
contribuinte, considerando rendimento anual, imposto retido na fonte,
contribuicao previdenciaria, despesas medicas e numero de dependentes.
*******************************************************************************/

/*
O programa le os dados do contribuinte e calcula as deducoes, a base de
calculo e o imposto devido. Em seguida, compara o imposto devido com o
imposto retido para informar se existe imposto a pagar ou a restituir.
*/

<?php

// 1. O programa le os dados do contribuinte
$cpf = readline("Digite o CPF: ");
$nome = readline("Digite o nome: ");
$rendimento = (float) str_replace(',', '.', readline("Digite o rendimento anual: R$ "));
$impostoRetido = (float) str_replace(',', '.', readline("Digite o imposto retido na fonte: R$ "));
$previdencia = (float) str_replace(',', '.', readline("Digite a contribuicao previdenciaria: R$ "));
$despesasMedicas = (float) str_replace(',', '.', readline("Digite as despesas medicas: R$ "));
$dependentes = (int) readline("Digite o numero de dependentes: ");

// 2. O programa calcula a deducao por dependentes
$deducaoDependentes = $dependentes * 1080.00;

// 3. O programa calcula o total das deducoes
$totalDeducoes = $previdencia + $despesasMedicas + $deducaoDependentes;

// 4. O programa calcula a base de calculo
$baseCalculo = $rendimento - $totalDeducoes;

// 5. O programa verifica a faixa da base de calculo e calcula o imposto devido
if ($baseCalculo <= 10800.00) {

    $impostoDevido = 0;

} elseif ($baseCalculo <= 21600.00) {

    $impostoDevido = ($baseCalculo * 0.15) - 1620.00;

} else {

    $impostoDevido = ($baseCalculo * 0.25) - 3780.00;
}

// 6. O programa calcula a diferenca entre o imposto devido e o retido
$diferenca = $impostoDevido - $impostoRetido;

// 7. O programa verifica se existe imposto a pagar ou a restituir
if ($diferenca > 0) {

    $resultado = "Imposto a PAGAR: R$ " . number_format($diferenca, 2, ',', '.');

} elseif ($diferenca < 0) {

    $resultado = "Imposto a RESTITUIR: R$ " . number_format(abs($diferenca), 2, ',', '.');

} else {

    $resultado = "Nao ha imposto a pagar ou a restituir.";
}

// 8. O programa exibe os dados e os resultados
echo "\n========== IMPOSTO DE RENDA ==========\n";
echo "CPF: $cpf\n";
echo "Nome: $nome\n";
echo "Rendimento anual: R$ " . number_format($rendimento, 2, ',', '.') . "\n";
echo "Total das deducoes: R$ " . number_format($totalDeducoes, 2, ',', '.') . "\n";
echo "Base de calculo: R$ " . number_format($baseCalculo, 2, ',', '.') . "\n";
echo "Imposto devido: R$ " . number_format($impostoDevido, 2, ',', '.') . "\n";
echo "Imposto retido: R$ " . number_format($impostoRetido, 2, ',', '.') . "\n";
echo "$resultado\n";
echo "=======================================\n";

?>