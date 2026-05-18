<?php

class Pedido{
    private float $valor;

    public function __construct(float $valor)
    {   
       $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor(float $valor){
        $this->valor = $valor;
    }

    public function calcularDesconto(){
        if($this->valor >= 500){
            $this->valor = $this->valor - ($this->valor * 0.1);
        }
    }
}

$pedido01 = new Pedido(500);
$pedido01->calcularDesconto();
echo $pedido01->getValor();