<?php

require "Imposto.php";
require "Orcamento.php";
require "Item.php";
require "TemplateDeImpostoCondicional.php";
require "IKCV.php";
require "ICMS.php";

$orcamento = new Orcamento(500.0);
$orcamento->adicionaItem(new Item("CANETA", 250));
$orcamento->adicionaItem(new Item("LAPIS", 250));

$impostos = new IKCV(new ICMS());

echo $impostos->calcula($orcamento);