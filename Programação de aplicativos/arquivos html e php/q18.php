<?php
$arrProdutos = [1 => 100, 2 => 20, 3 => 40, 4 => 50, 5 => 60];
$codigoProduto = 6;

if (array_key_exists($codigoProduto, $arrProdutos)) {
    echo $arrProdutos[$codigoProduto];
} else {
    echo 'Produto não encontrado';
}
