<?php

$nome = $_POST['nome'];
$numero_serie = $_POST['numero_serie'];
$tipo = $_POST['tipo'];
$data_entrada = $_POST['data_entrada'];
$responsavel_tecnico = $_POST['responsavel_tecnico'];

?>
<ul>
    <li><?php echo $nome; ?></li>
    <li><?php echo $numero_serie; ?></li>
    <li><?php echo $tipo; ?></li>
    <li><?php echo $data_entrada; ?></li>
    <li><?php echo $responsavel_tecnico; ?></li>
</ul>