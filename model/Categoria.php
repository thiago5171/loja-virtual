<?php

class Categoria{
    public $id;
    public $nome;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
}