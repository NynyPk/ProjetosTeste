/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia as três notas obtidas por um aluno. Calcule e exiba a 
média aritmética simples baseada apenas nas duas maiores notas obtidas.
*******************************************************************************/

/*
O programa le tres notas informadas pelo usuario e identifica as duas maiores
notas. Em seguida, calcula a media aritmetica simples usando apenas essas
duas notas.
*/

<?php

// 1. O programa le as tres notas
$nota1 = (float) str_replace(',', '.', readline("Digite a primeira nota: "));
$nota2 = (float) str_replace(',', '.', readline("Digite a segunda nota: "));
$nota3 = (float) str_replace(',', '.', readline("Digite a terceira nota: "));

// 2. O programa verifica quais sao as duas maiores notas
if ($nota1 <= $nota2 && $nota1 <= $nota3) {

    $maior1 = $nota2;
    $maior2 = $nota3;

} elseif ($nota2 <= $nota1 && $nota2 <= $nota3) {

    $maior1 = $nota1;
    $maior2 = $nota3;

} else {

    $maior1 = $nota1;
    $maior2 = $nota2;
}

// 3. O programa calcula a media das duas maiores notas
$media = ($maior1 + $maior2) / 2;

// 4. O programa exibe as duas maiores notas e a media
echo "Duas maiores notas: $maior1 e $maior2\n";
echo "Media = $media\n";

?>