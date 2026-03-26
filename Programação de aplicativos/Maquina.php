<?php
class Maquina
{
    private string $nome;
    private string $codigo;
    private string $status;

    public function __construct(string $nome, string $codigo, string $status)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->status = $status;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
}

$maquina1 = new Maquina('Torno CNC', 'M001', 'Operando');

echo $maquina1->getNome();
$maquina1->setNome('MC001');
echo '<br>' . $maquina1->getNome();
