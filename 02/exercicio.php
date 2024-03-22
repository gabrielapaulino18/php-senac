<?php
 //Exercício 1 - Concatenação de Strings:
 //Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".

    $nome = "Gabriela Paulino";
    $profissao = "Advogada";

    echo $nome. " é " .$profissao;
    echo "<br>";

 //Exercício 2 - Comprimento de uma String:
 //Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.

   $senha = "senha123";

   if(strlen($senha) >= 8) {
      echo "senha Válida. <br>";
   } else {
      echo "Senha deve ter pelo menos 8 caractares <br>";
   }

 //Exercício 3 - Substituição de Caracteres:
 //Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.
   echo "<br>";
   $texto = "Os cachorros da rua são muito fofos";
   $novo_texto = str_replace("cachorro", "gato", $texto);
   echo $novo_texto;
   echo "<br>";

 //Exercício 4 - Conversão de Case:
 //Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.
   echo "<br>";
   $texto = "Golden retriever";
   $texto_minusculo = strtolower($texto);
   $texto_maiusculo = strtoupper($texto);
   echo "<br>";

   echo $texto_maiusculo;
   echo "<br>";
   
   echo $texto_minusculo;
   echo "<br>";
   

 //Exercício 5 - Remoção de Espaços em Branco:
 //Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.

   $url = "       http://exemplo.com   ";
   $url_sem_espacos = trim($url);
   echo $url_sem_espacos ."<br>";

 //Exercício 6 - Posição da Primeira Ocorrência:
 //Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.

   $texto = "Os cachorros da rua são muito fofos";
   $posicao = strpos($texto, "cachorro"); // Saída: 2 (posição da primeira letrada palavra "rato")
   echo $posicao;
   echo "<br>";

 //Exercício 7 - Inversão de uma String:
 //Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.

   $texto = "Os cachorros da rua sao muito fofos";
   $texto_invertido = strrev($texto);
   echo $texto_invertido;

?>