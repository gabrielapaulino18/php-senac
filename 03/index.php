<?php
//// NÚMEROS E OPERADORES

// Operações Básicas
$num1 = 10;
$num2 = 5;

//Soma
$soma = $num1 + $num2;
echo "Soma: $soma <br>";

//Subtração
$subtracao = $num1 - $num2;
echo "Subtração: $subtracao <br>";

//Divisão
$divisao = $num1 / $num2;
echo "Divisão: $divisao <br>";

//Multiplicação
$multiplicacao = $num1 * $num2;
echo "Multiplicação $multiplicacao <br>";

// Módulo (resto da divião)
$modulo = $num1 % $num2;
echo "Módulo: $modulo <br>";

// Operações de Incremento e Decremento
$num = 5;
echo "Valor base para incremento e decremento = $num <br>";

//Incremento
$num++;
echo "Incremento: $num <br>";

//Decremento
$num--;
echo "Decremento: $num <br>";

//Operadores de Comparação
$num1 = 10;
$num2 = 5;

//Igualdade
echo "Igual a: ";
echo $num1 == $num2 ? "Verdadeiro" : "Falso <br>";

//Diferente
echo "Diferente de: ";
echo $num1 != $num2? "Verdadeiro <br>" : "Falso <br>";

//Maior que 
echo "Menor que: ";
echo  $num1 < $num2 ? "Verdadeiro <br>": "Falso <br>";

echo "<hr>";
//OPERADORES LÓGICOS

//E LÓGICO (AND)

echo "Verdadeiro e Verdadeiro: ";
echo true && true ? "Verdadeiro <br>" : "Falso <br>";


echo "Verdadeiro e Falso: ";
echo true && false ? "verdadeiro <br>" : "falso <br>";


echo "Falso e Verdadeiro: ";
echo false && true ? "verdadeiro <br>" : "falso <br>";

echo "Falso e Falso: ";
echo false && false ? "verdadeiro <br>" : "falso <br>";

// OU lógico (or)
echo "Verdadeiro e Verdadeiro: ";
echo true || true ? "verdadeiro <br>" : "falso <br>";

echo "Verdadeiro e Falso: ";
echo true || false? "verdadeiro <br>" : "falso <br>";

echo "Falso e Verdadeiro: ";
echo false || true ? "verdadeiro <br>" : "falso <br>";

echo "Falso e Falso: ";
echo false || false ? "verdadeiro <br>" : "falso <br>";

//Não lógico (NOT)
echo "Negando algo que é verdadeiro: ";
echo !true ? "Verdadeiro <br>": "False <br>";                                                           
?>