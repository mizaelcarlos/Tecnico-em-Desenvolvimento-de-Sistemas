<?php

$nome_inspetor = $_POST['nome_inspetor'];

?>
<h1><?php echo $nome_inspetor ?></h1>
<ol>
    <li><?php echo $nome_inspetor ?></li>
    <li><?php echo $_POST['produto_avaliado'] ?></li>
    <li><?php echo $_POST['lote'] ?></li>
    <li><?php echo $_POST['status'] ?></li>
    <li><?php echo $_POST['observacoes'] ?></li>
</ol>