<?php
require_once 'model/Client.php';
require_once 'model/ClientDAO.php';

class ClientController
{
    private $client;
    private $clientDAO;

    function create()
    {
        $this->client = new Client();
        $this->clientDAO = new ClientDAO();
        $this->client->setName($_REQUEST["nome"]);
        $this->client->setCpf($_REQUEST["cpf"]);
        $this->client->setPassword($_REQUEST["password"]);
        if ($this->clientDAO->create($this->client)) {
            $_REQUEST['sucesso'] = true;
            $_REQUEST['clientNome'] = $this->client->getName();
            require_once 'view/client/create.php';
        } else {
            echo 'Erro ao criar cliente';
        }
    }

    function fetch()
    {
        $this->clientDAO = new ClientDAO();
        $_REQUEST['clientLista'] = $this->clientDAO->fetch();
        require_once 'view/client/listar.php';

    }

    function getById()
    {
        $this->clientDAO = new ClientDAO();
        $this->client = new Client();
        $this->client->setId($_REQUEST["id"]);
        if ($this->client = $this->clientDAO->getById($this->client->getId())) {

            $_REQUEST['clienteExibir'] = $this->client;
            require_once 'view/client/editar.php';
        } else {
            echo 'Erro ao retornar cliente';
        }
    }

    function edit()
    {
        $this->clientDAO = new ClientDAO();
        $this->client = new Client();
        $this->client->setId($_REQUEST["id"]);
        $this->client->setName($_REQUEST["nome"]);
        $this->client->setCpf($_REQUEST["cpf"]);
        $this->client->setPassword($_REQUEST["password"]);
        if ($this->clientDAO->edit($this->client)) {
            echo 'cliente editada com sucesso';
        } else {
            echo 'Erro ao editar cliente';
        }
    }
    public function delete()
    {
        $this->client = new Client();
        $this->clientDAO = new ClientDAO();
        $this->client->setId($_REQUEST['id']);
        if ($this->clientDAO->delete($this->client)) {
            echo 'Cliente deletado com sucesso';
        } else {
            echo 'Erro ao deletar cliente';
        }
    }
}

