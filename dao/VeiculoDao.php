<?php
require_once __DIR__ . '/../model/Veiculo.php';
require_once __DIR__ . '/../db/connection.php';

class VeiculoDao
{
    public static function buscarTodos()
    {
        $sql = "SELECT * FROM veiculos";
        $con = Connection::getConnection();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Veiculo");
    }

    public static function buscarPorId($id)
    {
        $sql = "SELECT * FROM veiculos WHERE id = ?";
        $con = Connection::getConnection();
        $stmt = $con->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchObject("Veiculo");
    }

    public static function inserir(Veiculo $veiculo)
    {
        $sql = "INSERT INTO veiculos (modelo, ano, valor_diaria, categoria) VALUES (?, ?, ?, ?)";
        $con = Connection::getConnection();
        $stmt = $con->prepare($sql);
        $stmt->execute([
            $veiculo->modelo,
            $veiculo->ano,
            $veiculo->valor_diaria,
            $veiculo->categoria
        ]);
    }

    public static function editar(Veiculo $veiculo)
    {
        $sql = "UPDATE veiculos SET modelo = ?, ano = ?, valor_diaria = ?, categoria = ? WHERE id = ?";
        $con = Connection::getConnection();
        $stmt = $con->prepare($sql);
        $stmt->execute([
            $veiculo->modelo,
            $veiculo->ano,
            $veiculo->valor_diaria,
            $veiculo->categoria,
            $veiculo->id
        ]);
    }

    public static function excluir($id)
    {
        $sql = "DELETE FROM veiculos WHERE id = ?";
        $con = Connection::getConnection();
        $stmt = $con->prepare($sql);
        $stmt->execute([$id]);
    }
}
