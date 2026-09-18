/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Uma empresa deseja aplicar um reajuste salarial aos seus funcionários. Escreva um 
programa que leia o nome do funcionário e seu salário atual e, de acordo com a tabela 
abaixo, calcule e exiba o novo salário:
- Salario atual de R$ 0.00 a R$ 1000.00: 20% de reajuste
- Salario atual de R$ 1000.01 a R$ 5000.00: 10% de reajuste
- Salario atual acima de R$ 5000.00: 0% de reajuste
*******************************************************************************/

/*
O programa le o nome e o salario atual do funcionario. Em seguida, verifica
a faixa salarial, calcula o reajuste correspondente e exibe o novo salario.
*/

<?php

// 1. O programa le o nome e o salario atual do funcionario
$nome = readline("Digite o nome do funcionario: ");
$salario = (float) readline("Digite o salario atual: R$ ");

// 2. O programa verifica a faixa salarial e calcula o reajuste
if ($salario <= 1000) {

    $reajuste = $salario * 0.20;

} elseif ($salario <= 5000) {

    $reajuste = $salario * 0.10;

} else {

    $reajuste = 0;
}

// 3. O programa calcula o novo salario
$novoSalario = $salario + $reajuste;

// 4. O programa exibe o nome, o reajuste e o novo salario
echo "Funcionario: $nome\n";
echo "Reajuste: R$ " . number_format($reajuste, 2, ',', '.') . "\n";
echo "Novo salario: R$ " . number_format($novoSalario, 2, ',', '.') . "\n";

?>