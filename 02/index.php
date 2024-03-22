<?php
//// STRINGS

// Para unir duas ou mais stringd em PHP, usamos o operedor de concatenação.

$nome = "Gabriela";
$sobrenome = "Paulino";

echo $nome. " " .$sobrenome; //Saída: Gabriela Paulino
echo "<br>";

// Para obter o comprimento de uma string em PHP, usamos a função strlen()
$texto = "Olá, mundo";
echo strlen($texto); //Saída: 12
echo "<br>";

// Para substituir partes de uma string, usamos a função str_replace()
$texto = "O rato roeu a roupa do rei.";
$novo_texto = str_replace("rato", "gato", $texto);
echo $novo_texto; //Saída: O gato roeu a roupa do rei.

//strtolower(): Converte uma string para letras minúsculas
//strtolower(): Converte uma string para letras maiúsculas

$texto = "Olá, Mundo!";
$texto_minusculo = strtolower($texto);
$texto_maiusculo = strtoupper($texto);

echo $texto_maiusculo;
echo "<br>";

echo $texto_minusculo;
echo "<br>";

echo $texto;
echo "<br>";

//trim(): Remove espaços em branco no início e no final de uma string.
$texto = "Olá, mundo!   ";
$texto_sem_espacos; //Saída: Olá, Mundo!
echo "<br>";

//Strpos(): Encontra a posiçãp da primeira ocorrência de uma sbustring em uma string
$texto = "O rato roeu a roupa do rei";
$posicao = strpos($texto, "rato"); // Saída: 2 (posição da primeira letrada palavra "rato")
echo $posicao;
echo "<br>";

// strrev(): Inverte uma string
$texto = "Socorram-me subi no onibus em Marrocos";
$texto_invertido = strrev($texto);
echo $texto_invertido; // Saída: socorraM me subino on ibus em-marrocos

?>