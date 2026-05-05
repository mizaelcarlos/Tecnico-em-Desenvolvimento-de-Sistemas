<?php

namespace App\DAO;

use App\DB\Conexao;
use App\Model\Setor;
use PDO;

class SetorDAO{
    private PDO $pdo;
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }

    public function inserir(Setor $setor){
        $sql = 'insert into setor 
        (nome,responsavel) 
        values (?,?)'; 
        $execucao = $this->pdo->prepare($sql);
        return $execucao->execute([
            $setor->getNome(),
            $setor->getResponsavel()]);

    }

    public function listar(){
        return $this->pdo->query('select * from setor')->fetchAll();
    }

    public function atualizar(Setor $setor){
        $sql = 'update setor 
         set nome = ? ,responsvel = ?  
        where id = ?'; 
        $execucao = $this->pdo->prepare($sql);
        return $execucao->execute([
            $setor->getNome(),
            $setor->getResponsavel(),
            $setor->getId()
        ]);

    }

    public function excluir(int $id){
        $sql = 'delete from setor where id = ?'; 
        $execucao = $this->pdo->prepare($sql);
        return $execucao->execute([$id]);

    }

    public function consultar(int $id){
        $sql = 'select * from setor where id = ?'; 
        $execucao = $this->pdo->prepare($sql);
        $execucao->execute([$id]);
        return $execucao->fetch(PDO::FETCH_ASSOC);

    }
}