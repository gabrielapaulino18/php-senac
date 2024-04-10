<?php
// Definindo constantes para a conexão com o banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'contatos');

// Criar uma conexão com o banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificando se ocorreu algum erro de conexão
if($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

// Criação dos dados para a inserção
$nome = "Walther Souza Q&A";
$telefone = "999954321";
$email = "Walther_carnaval_2017@mail.com";
$id = 1;

// Query para atualizar um contato (utilizando consulta preparada)
$meu_update = "UPDATE contatos_info SET nome = ?, telefone = ?, email = ? WHERE id = ?";
$stmt = $connection->prepare($meu_update);

// Verifica se a consulta preparada foi bem sucedida
if ($stmt) {
    //Associa os parâmetros à consulta preparada
    $stmt->bind_param("sssi", $nome, $telefone, $email, $id);

    //Executando a consulta
    if($stmt->execute()) {
        echo "Contato atualizado com sucesso";
    } else {
        echo "Erro ao atualizar o contato: " . $stmt->error;
    }

    // Fechando a consulta preparada
    $stmt->close();
} else {
    echo "Erro na consulta preparada: " . $connection->error;
}