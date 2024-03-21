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


?>