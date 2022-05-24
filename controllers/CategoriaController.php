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
            require_once 'view/categoria/cadastro.php';
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
        $this->categoria =$this->categoriaDAO->getById($this->categoria->getId());
        if ($this->categoriaDAO->getById($this->categoria->getId()) ){}

    }
}
