<?php

// Implementação do arquivo base
require_once "mensagem.php";

// Transformando para GET
$texto = $_GET['texto'] ?? null;
$autor = $_GET['autor'] ?? null;
$data  = $_GET['data'] ?? date("Y-m-d");

// Verificação para exibição da mensagem
if ($texto && $autor) {
    // Mensagem Exibida
    $mensagem = new Mensagem($texto, $autor, $data);
    // Chamando o arquivo JSON
    header('Content-Type: application/json');
    echo json_encode($mensagem);

} else {
    // Tratamento de exceção
    echo json_encode([
        "erro" => "Parâmetros texto e autor são obrigatórios"
    ]);
}

// Teste
// http://localhost/atividade02/api.php?texto=Teste&autor=Kalel%20Fernandes&data=2026-03-17

?>