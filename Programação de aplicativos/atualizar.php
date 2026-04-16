<?php
include 'conexao.php';

$id = $_POST['id'];
$sql = "
UPDATE solicitante
SET 
    nome = '{$_POST['nome_solicitante']}',
    setor = '{$_POST['setor']}',
    material_solicitado = '{$_POST['material_solicitado']}',
    quantidade = '{$_POST['quantidade']}',
    prioridade = '{$_POST['prioridade']}'
WHERE id = $id
";
$resultado = mysqli_query($conexao, $sql);



header("Location: listar.php");
exit();
