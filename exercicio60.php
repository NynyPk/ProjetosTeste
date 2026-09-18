/*******************************************************************************
Course: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa conceitual que leia a quantidade de habitantes de uma cidade de 
forma que o programa se prepare para ler a idade de cada morador e calcular a média. (Nota: 
este exercício serve de introdução lógica às estruturas de laço de repetição).
*******************************************************************************/

/*
O programa le a quantidade de habitantes e utiliza um laco de repeticao
para ler a idade de cada morador e calcular a media das idades.
*/

<?php

// 1. O programa le a quantidade de habitantes
$quantidade = (int) readline("Digite a quantidade de habitantes: ");

// 2. O programa inicia a soma das idades
$somaIdades = 0;

// 3. O programa le a idade de cada morador usando um laco
for ($i = 1; $i <= $quantidade; $i++) {

    $idade = (int) readline("Digite a idade do morador $i: ");

    $somaIdades = $somaIdades + $idade;
}

// 4. O programa calcula a media das idades
if ($quantidade > 0) {

    $media = $somaIdades / $quantidade;

    // 5. O programa exibe a media
    echo "Media das idades: " . number_format($media, 2, ',', '.') . "\n";

} else {

    echo "A quantidade de habitantes deve ser maior que zero.\n";
}

?>