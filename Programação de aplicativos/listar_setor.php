<?php
include 'conexao.php';

$sql = 'select * from setor';

$resultado = mysqli_query($conexao, $sql);

$dados = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Listagem de setor</h1>
    <a href="cadastrar_setor.html">Cadastrar</a>
    <table border="1">
        <thead>
            <th>Nome</th>
            <th>Responsável</th>
            <th>Opções</th>
        </thead>
        <tbody>

            <?php
            foreach ($dados as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['responsavel']; ?></td>
                    <td>
                        <a href="editar_setor.php?id=<?php echo $linha['id']; ?>">Editar</a>
                        <form action="excluir_setor.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>