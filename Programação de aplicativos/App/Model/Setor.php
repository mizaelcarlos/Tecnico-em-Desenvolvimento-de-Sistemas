<?php
namespace App\Model;

class Setor
{
    private $id;
    private $nome;
    private $responsavel;
    


    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;

        
    }

    
    public function getNome()
    {
        return $this->nome;
    }

    
    public function setNome($nome)
    {
        $this->nome = $nome;

        
    }

    
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        
    }
}
