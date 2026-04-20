<?php
include 'conexao.php';

$id = $_POST['id'];
$sql = "
UPDATE setor
SET 
    nome = '{$_POST['nome']}',
    responsavel = '{$_POST['responsavel']}'
WHERE id = $id
";
$resultado = mysqli_query($conexao, $sql);



header("Location: listar_setor.php");
exit();
