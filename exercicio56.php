/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia o tipo de um veículo ('A', 'B', 'C', 'D' ou 'E') e a distância em 
Km que ele deseja percorrer. Baseando-se na tabela abaixo de consumo, calcule e exiba o 
total de litros de combustível estimados para o trajeto:- Tipo A: 13.5 Km/l | Tipo B: 12.0 Km/l- Tipo C: 10.5 Km/l | Tipo D: 9.0 Km/l- Tipo E: 7.5 Km/l
*******************************************************************************/

/*
O programa le o tipo do veiculo e a distancia do trajeto. Em seguida,
identifica o consumo do veiculo e calcula a quantidade de litros necessaria.
*/

<?php

// 1. O programa le o tipo do veiculo
$tipo = strtoupper(readline("Digite o tipo do veiculo (A, B, C, D ou E): "));

// 2. O programa le a distancia do trajeto
$distancia = (float) str_replace(',', '.', readline("Digite a distancia em Km: "));

// 3. O programa identifica o consumo do veiculo
if ($tipo == "A") {

    $consumo = 13.5;

} elseif ($tipo == "B") {

    $consumo = 12.0;

} elseif ($tipo == "C") {

    $consumo = 10.5;

} elseif ($tipo == "D") {

    $consumo = 9.0;

} elseif ($tipo == "E") {

    $consumo = 7.5;

} else {

    echo "Tipo de veiculo invalido.\n";
    exit;
}

// 4. O programa calcula a quantidade de litros necessaria
$litros = $distancia / $consumo;

// 5. O programa exibe o resultado
echo "Distancia: " . number_format($distancia, 2, ',', '.') . " Km\n";
echo "Consumo: " . number_format($consumo, 1, ',', '.') . " Km/l\n";
echo "Litros estimados: " . number_format($litros, 2, ',', '.') . " litros\n";

?>