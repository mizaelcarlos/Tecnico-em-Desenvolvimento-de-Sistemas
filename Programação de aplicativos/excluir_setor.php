<?php
include 'conexao.php';

$id = $_POST['id'];
$sql = "
delete from setor
WHERE id = $id
";
$resultado = mysqli_query($conexao, $sql);

header("Location: listar_setor.php");
exit();
