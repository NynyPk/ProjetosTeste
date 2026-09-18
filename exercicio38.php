/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que determine o grau de obesidade de uma pessoa a partir de seu 
peso (kg) e altura (m), calculando o IMC (Massa = Peso / Altura²) e classificando de acordo 
com a tabela:
- IMC < 26: Normal
- IMC >= 26 e < 30: Obeso
- IMC >= 30: Obeso Morbido
*******************************************************************************/

/*
O programa le o peso e a altura informados pelo usuario via terminal e
calcula o IMC. Em seguida, verifica a faixa do IMC e exibe a classificacao
correspondente.
*/

<?php

// 1. O programa le o peso e a altura via terminal
$peso = (float) readline("Digite o peso em kg: ");
$altura = (float) readline("Digite a altura em metros: ");

// 2. O programa calcula o IMC
$imc = $peso / ($altura ** 2);

// 3. O programa verifica a classificacao de acordo com o IMC
if ($imc < 26) {

    $classificacao = "Normal";

} elseif ($imc < 30) {

    $classificacao = "Obeso";

} else {

    $classificacao = "Obeso Morbido";
}

// 4. O programa exibe o IMC e a classificacao
echo "IMC = $imc\n";
echo "Classificacao = $classificacao\n";

?>