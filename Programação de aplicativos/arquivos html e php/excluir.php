<?php
include 'conexao.php';

$id = $_POST['id'];
$sql = "
delete from solicitante
WHERE id = $id
";
$resultado = mysqli_query($conexao, $sql);



header("Location: listar.php");
exit();
