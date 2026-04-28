<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = 'select * from solicitante where  id = ' . $id;
$resultado = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_assoc($resultado);

$sql2 = 'select * from setor';
$resultado = mysqli_query($conexao, $sql2);
$setores = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="atualizar.php" method="POST">
        <label for="">Nome do solicitante:</label>
        <input type="text" name="nome_solicitante" id="nome_solicitante" value="<?php echo $dado['nome']; ?>">
        <br>
        <label for="">Setor:</label>
        <select name="setor" id="setor">
            <option value="<?php echo $dado['setor_id']; ?>" selected>
            </option>
            <?php
            foreach ($setores as $setor) {
            ?>
                <option value="<?php echo $setor['id'] ?>"><?php echo $setor['nome'] ?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <label for="">Material solicitado</label>
        <input type="text" name="material_solicitado" id="material_solicitado" value="<?php echo $dado['material_solicitado']; ?>">
        <br>
        <label for="">Quantidade</label>
        <input type="number" min="1" name="quantidade" id="quantidade" value="<?php echo $dado['quantidade']; ?>">
        <br>
        <label for="">Prioridade</label>
        <select name="prioridade" id="prioridade">
            <option value="<?php echo $dado['prioridade']; ?>" selected>
                <?php
                switch ($dado['prioridade']) {
                    case 1:
                        echo 'Baixa';
                        break;
                    case 2:
                        echo 'Média';
                        break;
                    case 3:
                        echo 'Alta';
                        break;
                }
                ?>

            <option value="1">baixa</option>
            <option value="2">média</option>
            <option value="3">alta</option>
        </select>
        <br>
        <input type="hidden" name="id" value="<?php echo $dado['id']; ?>">
        <button type="submit">Salvar</button>
    </form>
</body>

</html>