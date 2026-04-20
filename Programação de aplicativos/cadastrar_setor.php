<?php

include 'conexao.php';

$nome_solicitante = $_POST['nome'];
$responsavel = $_POST['responsavel'];


$sql = "insert into setor (nome,responsavel) values ('$nome_solicitante','$responsavel')";

if (mysqli_query($conexao, $sql)) {
    header("Location: listar_setor.php");
    exit();
} else {
    echo "Error " . mysqli_error($conexao);
}

mysqli_close($conexao);
