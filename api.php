<?php

require_once "mensagem.php";

$texto = $_GET['texto'] ?? null;
$autor = $_GET['autor'] ?? null;
$data  = $_GET['data'] ?? date("Y-m-d");

if ($texto && $autor) {

    $mensagem = new Mensagem($texto, $autor, $data);

    header('Content-Type: application/json');
    echo json_encode($mensagem);

} else {
    echo json_encode([
        "erro" => "Parâmetros texto e autor são obrigatórios"
    ]);
}

// Teste
// http://localhost/atividade02/api.php?texto=Teste&autor=Kalel%20Fernandes&data=2026-03-17

?>