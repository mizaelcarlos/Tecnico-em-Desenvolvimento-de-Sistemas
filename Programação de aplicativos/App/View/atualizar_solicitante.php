<?php
namespace App\View;
require_once __DIR__ . '/../DB/Conexao.php';
require_once __DIR__ . '/../Model/Solicitante.php';
require_once __DIR__ . '/../DAO/SolicitanteDAO.php';
use App\Model\Solicitante;
use App\DAO\SolicitanteDAO;


$solicitante = new Solicitante();
$solicitante->setId($_POST['id']);
$solicitante->setNome($_POST['nome_solicitante']);
$solicitante->setSetor($_POST['setor']);
$solicitante->setMaterialSolicitado($_POST['material_solicitado']);
$solicitante->setQuantidade($_POST['quantidade']);
$solicitante->setPrioridade($_POST['prioridade']);

$solicitanteDAO = new SolicitanteDAO();
$solicitanteDAO->atualizar($solicitante);

header("Location: listar_solicitante.php");
exit();


