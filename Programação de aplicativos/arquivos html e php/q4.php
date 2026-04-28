<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <th>Nome do solicitante</th>
            <th>Setor</th>
            <th>Material solicitado</th>
            <th>Quantidade</th>
            <th>Prioridade</th>
        </thead>
        <tbody>
            <td><?php echo $_POST['nome_solicitante'] ?></td>
            <td><?php echo $_POST['setor'] ?></td>
        </tbody>
    </table>
</body>

</html>