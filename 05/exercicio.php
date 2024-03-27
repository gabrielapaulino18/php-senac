<?php

//Exercício 1 - Acesso a Elementos:
//Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.

$dias = array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");
$numeros = [1, 2, 3, 4, 5, 6, 7];
echo "O terceiro dia da semana é: " . $dias[2] . "<br>";

//Exercício 2 - Alteração de Elementos:
//Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".

$meses = array("Janeiro", "Julho", "Outubro", "Novembro", "Maio", "Agosto", "Setembro", "Dezembro", "Fevereiro", "Abril", "Junho", "Março");
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$meses[11] = "Dezembro";
print_r($meses);


//Exercício 3 - Adição de Elementos:
//Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.

$num = [1, 2, 3, 4, 5];
$num[] = 6;
echo "<br>Lista de números: <br>";
    foreach($num as $numero) {
        echo $numero . "<br>";
    }
    echo "<br>";

//Exercício 4 - Percorrendo um Array:
//Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.

$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
echo "Lista dos meses do ano: <br>";
    foreach($meses as $numeros) {
        echo $numeros . "<br>";
    }
    echo "<br>";

//Exercício 5 - Contagem de Elementos:
//Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.

$dias = array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");
$numeros = [1, 2, 3, 4, 5, 6, 7];
echo "Número de elementos no array de dias da semana é: " . count($numeros) . "<br.";

//Exercício 6 - Busca de Elemento:
//Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.

echo "O sábado está na posição: " . array_search("Sábado", $dias) . "<br>";

//Exercício 7 - Reversão de Array:
//Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.

$num = [1, 2, 3, 4, 5, 6, 7,8, 9, 10];
echo "<br> Array de números depois de reverter: <br>";
$numeros_revertidos = array_reverse($num);
print_r($numeros_revertidos);

?>