<?php
require_once 'Client.php';
require_once 'Database.php';

class ClientDAO
{
    public $conexao;

    function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConexao();
    }

    function create($client)
    {
        $sql = "INSERT INTO cliente(nome, cpf, senha) VALUES(:name,:cpf, :password)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":name", $client->getName());
        $stmt->bindValue(":cpf", $client->getCpf());
        $stmt->bindValue(":password", $client->getPassword());
        if($stmt->execute()){
            return true;
        }else{
            print_r("Erro ao cadastrar cliente");
            return false;
        }
    }

    function fetch(){
        $sql = "SELECT * FROM cliente";
        $stmt =$this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getById($id)
    {
        $sql = "SELECT * FROM cliente WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":id",$id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function edit($client)
    {
        $sql = "UPDATE cliente SET nome = :name, cpf = :cpf, senha = :password";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":name", $client->getName());
        $stmt->bindValue(":cpf", $client->getCpf());
        $stmt->bindValue(":password", $client->getPassword());
        return  $stmt->execute();
    }
    function delete($client){
        $stmt = $this->conexao->prepare("DELETE FROM cliente  WHERE id = :id");
        $stmt->bindValue(":id", $client->getId());
        return $stmt->execute();
    }
}