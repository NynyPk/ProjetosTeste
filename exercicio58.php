/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia uma letra do teclado e informe se ela é uma vogal 
maiúscula, uma vogal minúscula ou uma consoante.
*******************************************************************************/

/*
O programa le uma letra e verifica se ela e uma vogal maiuscula,
uma vogal minuscula ou uma consoante.
*/

<?php

// 1. O programa le a letra
$letra = readline("Digite uma letra: ");

// 2. O programa verifica se a letra e uma vogal maiuscula
if ($letra == "A" || $letra == "E" || $letra == "I" || $letra == "O" || $letra == "U") {

    echo "A letra e uma vogal maiuscula.\n";

// 3. O programa verifica se a letra e uma vogal minuscula
} elseif ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {

    echo "A letra e uma vogal minuscula.\n";

} else {

    echo "A letra e uma consoante.\n";
}

?>