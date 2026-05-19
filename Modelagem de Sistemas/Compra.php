<?php
class Compra{
    private float $valor;
    private bool $cliente_vip;

    public function __construct($valor, $cliente_vip)
    {
        $this->valor = $valor;
        $this->cliente_vip = $cliente_vip;
    }

    public function calcularDesconto(){
        if($this->cliente_vip){
            if($this->valor > 200){
                $this->valor = $this->valor - ($this->valor * 0.15);
            }
        }

        return $this->valor;
    }


}

$compra = new Compra(300,false);
echo $compra->calcularDesconto();