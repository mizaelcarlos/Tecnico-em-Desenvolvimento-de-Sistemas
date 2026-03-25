<?php
$arrProducaoDiaria = [80, 90, 100, 200, 250, 300, 400, 150, 89, 120, 123, 145, 600, 800, 900];
foreach ($arrProducaoDiaria as  $valor) {
    if ($valor <= 100) {
        continue;
    }
    echo '<br>' . $valor;
}
