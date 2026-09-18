/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26013861-2 - Filipe Przyvitoski Kasenoh
            26014360-2 - WILLIAN TADEU RIBEIRO

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que implemente uma calculadora básica. O programa deve obter 
dois números reais do teclado e um operador caractere representando a operação 
matemática desejada ('+', '-', '*' e '/'). Efetue o cálculo e exiba o resultado.
*******************************************************************************/

/*
O programa le dois numeros reais e um operador informado pelo usuario.
Em seguida, verifica a operacao escolhida, realiza o calculo e exibe o resultado.
*/

<?php

// 1. O programa le os dois numeros reais
$numero1 = (float) str_replace(',', '.', readline("Digite o primeiro numero: "));
$numero2 = (float) str_replace(',', '.', readline("Digite o segundo numero: "));

// 2. O programa le o operador da operacao
$operador = readline("Digite o operador (+, -, * ou /): ");

// 3. O programa verifica o operador e realiza o calculo
if ($operador == "+") {

    $resultado = $numero1 + $numero2;

} elseif ($operador == "-") {

    $resultado = $numero1 - $numero2;

} elseif ($operador == "*") {

    $resultado = $numero1 * $numero2;

} elseif ($operador == "/") {

    if ($numero2 != 0) {

        $resultado = $numero1 / $numero2;

    } else {

        echo "Nao e possivel dividir por zero.\n";
        exit;
    }

} else {

    echo "Operador invalido.\n";
    exit;
}

// 4. O programa exibe o resultado
echo "Resultado = $resultado\n";

?>