<?php
require_once 'Categoria.php';
require_once 'Database.php';

class CategoriaDAO
{
    public $conexao;

    function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConexao();
    }

    function create($categoria)
    {
        $stmt = $this->conexao->prepare("INSERT INTO categoria(nome) values (:nome)");
        $stmt->bindValue(":nome", $categoria->getNome());
        if ($stmt->execute()) {
            return true;
        } else {
            print_r("erro ao cadastrar categoria");
            return false;
        }
    }

    function fetch()
    {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getById($id)
    {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria WHERE id =:id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function edit($categoria)
    {
        $stmt = $this->conexao->prepare("UPDATE categoria SET nome = :nome WHERE id = :id");
        $stmt->bindValue(":nome", $categoria->getNome());
        $stmt->bindValue(":id", $categoria->getId());
        return $stmt->execute();

    }
    function delete($categoria)
{
    $stmt = $this->conexao->prepare("DELETE FROM categoria  WHERE id = :id");
    $stmt->bindValue(":id", $categoria->getId());
    return $stmt->execute();

}

}