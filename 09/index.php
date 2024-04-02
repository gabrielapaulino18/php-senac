<?php

function nomeDaFuncao() {
        // Bloco de código da função
}


function saudacao() {
    echo "Olá, TII04! <br>";
}

saudacao(); // Chamada da função

// Declaração de uma função que retorna um valor
function saudacao_retorno() {
    return "Olá, TII04% <br>";
}

echo saudacao_retorno();

// Declaração de uma função que recebe parâmetro
function saudacao_parametro($nome) {
    echo "Olá, $nome& <br>";
}

saudacao_parametro("TII04");


function saudacao_parametro_retorno($nome) {
    return "Olá, $nome* <br>";
}

echo saudacao_parametro_retorno("TII04");


// Declarando de uma função que recebe dois parametros e realiza um retorno
function soma($a, $b) {
    return $a + $b;
}

$resultado = soma(8, 16);
echo "A soma de 8 com 16 é: " . soma(8, 16) . "<br>";

# ESCOPO DAS VARIÁVEIS!!!

$mensagem = "Olá";

function mostrarMensagem() {
    $mensagem = "Mundo"; // Variável Local
    echo $mensagem; // Saída: Mundo
}

mostrarMensagem();
echo $mensagem

?>