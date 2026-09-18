/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo:  Escreva um programa que leia três notas de um aluno, calcule a média aritmética simples 
e exiba a média e o conceito correspondente, conforme a tabela
- Média >= 8.0: Conceito A-
Média >= 5.0 e < 8.0: Conceito B-
Média < 5.0: Conceito C
*******************************************************************************/

/*
O programa lê três notas informadas pelo usuario via terminal e calcula a
media aritmetica simples. Em seguida, verifica a faixa da media e exibe
o conceito correspondente.
*/

<?php

// 1. O programa le as tres notas via terminal
$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

// 2. O programa calcula a media aritmetica simples
$media = ($nota1 + $nota2 + $nota3) / 3;

// 3. O programa verifica o conceito de acordo com a media
if ($media >= 8.0) {

    $conceito = "A";

} elseif ($media >= 5.0) {

    $conceito = "B";

} else {

    $conceito = "C";
}

// 4. O programa exibe a media e o conceito
echo "Media = $media\n";
echo "Conceito = $conceito\n";

?>