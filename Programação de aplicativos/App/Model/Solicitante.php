<?php
namespace App\Model;

class Solicitante
{
    private $id;
    private $nome;
    private $setor;
    private $materialSolicitado;
    private $quantidade;
    private $prioridade;


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

    
    public function getSetor()
    {
        return $this->setor;
    }

    
    public function setSetor($setor)
    {
        $this->setor = $setor;

        
    }

    
    public function getMaterialSolicitado()
    {
        return $this->materialSolicitado;
    }

    
    public function setMaterialSolicitado($materialSolicitado)
    {
        $this->materialSolicitado = $materialSolicitado;

        
    }

    
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        
    }

    
    public function getPrioridade()
    {
        return $this->prioridade;
    }

    
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;

        
    }
}
