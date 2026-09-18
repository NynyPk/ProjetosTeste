/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia o ano de nascimento de uma pessoa e o ano atual. 
Verifique se o ano de nascimento é um ano válido (maior que 1900 e menor ou igual ao ano 
atual) e exiba a idade calculada.
*******************************************************************************/

/*
O programa le o ano de nascimento e o ano atual informados pelo usuario.
Em seguida, verifica se o ano de nascimento e valido e calcula a idade.
*/

<?php

// 1. O programa le o ano de nascimento e o ano atual
$anoNascimento = (int) readline("Digite o ano de nascimento: ");
$anoAtual = (int) readline("Digite o ano atual: ");

// 2. O programa verifica se o ano de nascimento e valido
if ($anoNascimento > 1900 && $anoNascimento <= $anoAtual) {

    // 3. O programa calcula a idade
    $idade = $anoAtual - $anoNascimento;

    // 4. O programa exibe a idade calculada
    echo "Idade = $idade anos.\n";

} else {

    // 5. O programa informa que o ano de nascimento e invalido
    echo "Ano de nascimento invalido.\n";
}

?>