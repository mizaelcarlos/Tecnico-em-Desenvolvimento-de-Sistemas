<?php

namespace App\DAO;

use App\DB\Conexao;
use App\Model\Solicitante;
use PDO;

class SocitanteDAO{
    private PDO $pdo;
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }

    public function inserir(Solicitante $solicitante){
        $sql = 'insert into solicitante 
        (nome,setor,material_solicitado, quantidade, prioridade) 
        values (?,?,?,?,?)'; 
        $execucao = $this->pdo->prepare($sql);
        return $execucao->execute([
            $solicitante->getNome(),
            $solicitante->getSetor(),
            $solicitante->getMaterialSolicitado(),
            $solicitante->getQuantidade(),
            $solicitante->getPrioridade()]);

    }

    public function listar(){
        return $this->pdo->query('select * from solicitante')->fetchAll();
    }

    public function atualizar(Solicitante $solicitante){
        $sql = 'update solicitante 
         set nome = ? ,setor = ? ,material_solicitado = ?,
         quantidade = ? , prioridade = ? 
        where id = ?'; 
        $execucao = $this->pdo->prepare($sql);
        return $execucao->execute([
            $solicitante->getNome(),
            $solicitante->getSetor(),
            $solicitante->getMaterialSolicitado(),
            $solicitante->getQuantidade(),
            $solicitante->getPrioridade(),
            $solicitante->getId()
        ]);

    }

    public function excluir(int $id){
        $sql = 'delete from solicitante where id = ?'; 
        $execucao = $this->pdo->prepare($sql);
        return $execucao->execute([$id]);

    }
}