<?php

include 'conexao.php';

$nome_solicitante = $_POST['nome_solicitante'];
$setor = $_POST['setor'];
$material_solicitado = $_POST['material_solicitado'];
$prioridade = $_POST['prioridade'];
$quantidade = $_POST['quantidade'];

$sql = "insert into solicitante (nome,setor,material_solicitado,prioridade,quantidade) values ('$nome_solicitante',$setor,'$material_solicitado',$prioridade,$quantidade)";

if (mysqli_query($conexao, $sql)) {
    echo 'Solicitante cadastrado com sucesso';
} else {
    echo "Error " . mysqli_error($conexao);
}

mysqli_close($conexao);