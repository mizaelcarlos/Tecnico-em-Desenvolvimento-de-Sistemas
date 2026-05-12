<?php
namespace App\View;
require_once __DIR__ . '/../DB/Conexao.php';
require_once __DIR__ . '/../Model/Solicitante.php';
require_once __DIR__ . '/../DAO/SolicitanteDAO.php';
use App\Model\Solicitante;
use App\DAO\SolicitanteDAO;

$solicitanteDAO = new SolicitanteDAO();
$dados = $solicitanteDAO->listar();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Listagem de solicitante</h1>
    <a href="cadastrar_solicitante.php">Cadastrar</a>
    <table border="1">
        <thead>
            <th>Nome</th>
            <th>Setor</th>
            <th>Material solicitado</th>
            <th>Quantidade</th>
            <th>Prioridade</th>
            <th>Opções</th>
        </thead>
        <tbody>

            <?php
            foreach ($dados as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['setor']; ?></td>
                    <td><?php echo $linha['material_solicitado']; ?></td>
                    <td><?php echo $linha['quantidade']; ?></td>
                    <td>
                        <?php
                        switch ($linha['prioridade']) {
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
                    </td>
                    <td>
                        <a href="editar_solicitante.php?id=<?php echo $linha['id']; ?>">Editar</a>
                        <form action="excluir_solicitante.php" method="post">
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