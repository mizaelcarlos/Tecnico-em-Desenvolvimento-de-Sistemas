<?php
require_once __DIR__ . '/Tecnico.php';

$tecnico = new Tecnico();
$tecnico->setMatricula(10);
echo $tecnico->getMatricula();