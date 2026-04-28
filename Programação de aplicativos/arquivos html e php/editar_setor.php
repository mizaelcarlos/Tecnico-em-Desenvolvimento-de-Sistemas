<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = 'select * from setor where  id = ' . $id;
$resultado = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="atualizar_setor.php" method="POST">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $dado['nome']; ?>">
        <br>
        <label for="">Responsável</label>
        <input type="text" name="responsavel" id="responsavel" value="<?php echo $dado['responsavel']; ?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $dado['id']; ?>">
        <button type="submit">Salvar</button>
    </form>
</body>

</html>