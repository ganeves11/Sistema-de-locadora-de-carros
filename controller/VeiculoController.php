<?php
require_once __DIR__ . '/../dao/VeiculoDao.php';
require_once __DIR__ . '/../model/Veiculo.php';

class VeiculoController
{
    public static function index()
    {
        $veiculos = VeiculoDao::buscarTodos();
        include __DIR__ . '/../view/listaveiculos.php';
    }

    public static function cadastrar()
    {
        $veiculo = new Veiculo();
        $veiculo->modelo = $_POST['modelo'];
        $veiculo->ano = $_POST['ano'];
        $veiculo->valor_diaria = $_POST['valor_diaria'];
        $veiculo->categoria = $_POST['categoria'];

        VeiculoDao::inserir($veiculo);
        header("Location: ?acao=index");
    }

    public static function editar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $veiculo = VeiculoDao::buscarPorId($id);
            include __DIR__ . '/../view/cadastroveiculo.php';
        } else {
            $veiculo = new Veiculo();
            $veiculo->id = $_POST['id'];
            $veiculo->modelo = $_POST['modelo'];
            $veiculo->ano = $_POST['ano'];
            $veiculo->valor_diaria = $_POST['valor_diaria'];
            $veiculo->categoria = $_POST['categoria'];

            VeiculoDao::editar($veiculo);
            header("Location: ?acao=index");
        }
    }

    public static function excluir()
    {
        $id = $_GET['id'];
        VeiculoDao::excluir($id);
        header("Location: ?acao=index");
    }
}
