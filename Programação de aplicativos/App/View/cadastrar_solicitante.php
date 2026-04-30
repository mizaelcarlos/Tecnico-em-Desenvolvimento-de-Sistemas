<?php
namespace App\View;

require_once __DIR__ . '/../DAO/SetorDAO.php';
require_once __DIR__ . '/../DB/Conexao.php';

use App\DAO\SetorDAO;

$setorDAO = new SetorDAO();
$setores = $setorDAO->listar();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastrar solicitante</h1>
    <form action="cadastrar.php" method="POST">
        <label for="">Nome do solicitante:</label>
        <input type="text" name="nome_solicitante" id="nome_solicitante">
        <br>
        <label for="">Setor:</label>
        <select name="setor" id="setor">
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
        <input type="text" name="material_solicitado" id="material_solicitado">
        <br>
        <label for="">Quantidade</label>
        <input type="number" min="1" name="quantidade" id="quantidade">
        <br>
        <label for="">Prioridade</label>
        <select name="prioridade" id="prioridade">
            <option value="1">baixa</option>
            <option value="2">média</option>
            <option value="3">alta</option>
        </select>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>

</html>