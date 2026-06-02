<?php

class Colaborador
{
    private string $matricula;
    private string $nome;
    private string $setor;



    public function getMatricula(): String
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula)
    {
         $this->matricula = $matricula;
    }

    public function validarAcesso(): bool
    {
        $acesso = true;
        return $acesso;
    }
}
