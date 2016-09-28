<?php

require "Desconto.php";
require "DescontoPorCincoItens.php";
require "DescontoPorMaisDeQuinhentosReais.php";
require "DescontoPorVendaCasada.php";
require "SemDesconto.php";
require "Orcamento.php";
require "Item.php";
require "CalculadoraDeDescontos.php";

$orcamento = new Orcamento(500.0);
$orcamento->adicionaItem(new Item("CANETA", 250));
$orcamento->adicionaItem(new Item("LAPIS", 250));

$calculadoraDeDescontos = new CalculadoraDeDescontos();
$desconto = $calculadoraDeDescontos->calcula($orcamento);

echo $desconto;