<?php
require_once __DIR__ . '/controller/VeiculoController.php';

$acao = $_GET['acao'] ?? 'index';

switch ($acao) {
    case 'cadastrar':
        VeiculoController::cadastrar();
        break;
    case 'excluir':
        VeiculoController::excluir();
        break;
    case 'editar':
        VeiculoController::editar();
        break;
    default:
        VeiculoController::index();
}
