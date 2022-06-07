<?php
require_once 'model/Categoria.php';
require_once 'model/CategoriaDAO.php';

class CategoriaController
{
    private $categoria;
    private $categoriaDAO;

    function create()
    {
        $this->categoria = new Categoria();
        $this->categoriaDAO = new CategoriaDAO();
        $this->categoria->setNome($_REQUEST['nome']);
        if ($this->categoriaDAO->create($this->categoria)) {
            $_REQUEST['sucesso'] = true;
            $_REQUEST['categoriaNome'] = $this->categoria->getNome();
            require_once 'view/categoria/create.php';
        } else {
            echo 'Erro ao criar categoria';
        }
    }

    public function fetch()
    {
        $this->categoriaDAO = new CategoriaDAO();

        $_REQUEST['categorialista'] = $this->categoriaDAO->fetch();
        require_once 'view/categoria/listar.php';


    }

    public function getById()
    {
        $this->categoriaDAO = new CategoriaDAO();
        $this->categoria = new Categoria();
        $this->categoria->setId($_REQUEST['id']);
        if ($this->categoria = $this->categoriaDAO->getById($this->categoria->getId())) {
            $_REQUEST['categoriaExibir'] = $this->categoria;
            require_once 'view/categoria/editar.php';
        } else {
            echo 'Erro ao retornar categoria';
        }
    }

    public function edit()
    {
        $this->categoria = new Categoria();
        $this->categoriaDAO = new CategoriaDAO();
        $this->categoria->setNome($_REQUEST['nome']);
        $this->categoria->setId($_REQUEST['id']);
        if ($this->categoriaDAO->edit($this->categoria)) {
            echo 'Categoria editada com sucesso';
        } else {
            echo 'Erro ao editar categoria';
        }
    }

    public function delete()
    {
        $this->categoria = new Categoria();
        $this->categoriaDAO = new CategoriaDAO();
        $this->categoria->setId($_REQUEST['idcat']);
        var_dump($_REQUEST['idcat']);
        if ($this->categoriaDAO->delete($this->categoria)) {
            echo 'Categoria deletada com sucesso';
        } else {
            echo 'Erro ao deletar categoria';
        }
    }
}
