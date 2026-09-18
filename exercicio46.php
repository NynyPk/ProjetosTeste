/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia a sigla do estado onde uma pessoa nasceu e informe se 
ela é carioca, paulista, mineira ou de outro estado (outros).
*******************************************************************************/

/*
O programa le a sigla do estado informada pelo usuario e verifica se ela
corresponde ao Rio de Janeiro, Sao Paulo, Minas Gerais ou outro estado.
*/

<?php

// 1. O programa le a sigla do estado
$estado = strtoupper(readline("Digite a sigla do estado: "));

// 2. O programa verifica o estado informado
if ($estado == "RJ") {

    // 3. O programa informa que a pessoa e carioca
    echo "A pessoa e carioca.\n";

} elseif ($estado == "SP") {

    // 4. O programa informa que a pessoa e paulista
    echo "A pessoa e paulista.\n";

} elseif ($estado == "MG") {

    // 5. O programa informa que a pessoa e mineira
    echo "A pessoa e mineira.\n";

} else {

    // 6. O programa informa que a pessoa e de outro estado
    echo "A pessoa e de outro estado (outros).\n";
}

?>