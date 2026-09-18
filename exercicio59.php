/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia o ano de nascimento de um nadador e o ano atual, calcule 
a sua idade e classifique-o em uma categoria de acordo com a seguinte tabela:- 0 a 4 anos: Não aceito- 5 a 7 anos: Infantil A- 8 a 10 anos: Infantil B- 11 a 13 anos: Juvenil A- 14 a 17 anos: Juvenil B- Maiores de 17 anos: Sênior
*******************************************************************************/

/*
O programa le o ano de nascimento e o ano atual. Em seguida, calcula a idade
do nadador e informa a categoria correspondente.
*/

<?php

// 1. O programa le o ano de nascimento e o ano atual
$anoNascimento = (int) readline("Digite o ano de nascimento: ");
$anoAtual = (int) readline("Digite o ano atual: ");

// 2. O programa calcula a idade
$idade = $anoAtual - $anoNascimento;

// 3. O programa verifica a categoria de acordo com a idade
if ($idade >= 0 && $idade <= 4) {

    $categoria = "Nao aceito";

} elseif ($idade >= 5 && $idade <= 7) {

    $categoria = "Infantil A";

} elseif ($idade >= 8 && $idade <= 10) {

    $categoria = "Infantil B";

} elseif ($idade >= 11 && $idade <= 13) {

    $categoria = "Juvenil A";

} elseif ($idade >= 14 && $idade <= 17) {

    $categoria = "Juvenil B";

} elseif ($idade > 17) {

    $categoria = "Senior";

} else {

    echo "Ano de nascimento invalido.\n";
    exit;
}

// 4. O programa exibe a idade e a categoria
echo "Idade: $idade anos\n";
echo "Categoria: $categoria\n";

?>