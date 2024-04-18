<?php
    require_once '../database/ContaRepository.php';

    $action = $_GET['action'];

    switch($action) {
        case 'listar':
            listarConta();
            break;
        default:
        http_response_code(400);
        echo json_encode(['error' => 'Ação inválida']); 
    }

    function listarConta() {
        $conta = ContaRepository::getAllContas();
        echo json_encode($conta);
    }
    
?>