<?php
namespace App\View;
require_once __DIR__ . '/../DB/Conexao.php';
require_once __DIR__ . '/../Model/Solicitante.php';
require_once __DIR__ . '/../DAO/SolicitanteDAO.php';
require_once __DIR__ . '/../DAO/SetorDAO.php';
use App\Model\Solicitante;
use App\DAO\SolicitanteDAO;
use App\DAO\SetorDAO;

$id = $_POST['id'];
$solicitanteDAO = new SolicitanteDAO();
$solicitanteDAO->excluir($id);
header("Location: listar_solicitante.php");
exit();