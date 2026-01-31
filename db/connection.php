<?php

class Connection
{
    public static function getConnection()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=locadora;charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Erro: " . $e->getMessage());
        }
    }
}
