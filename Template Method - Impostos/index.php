<?php

require "Imposto.php";
require "Orcamento.php";
require "Item.php";
require "TemplateDeImpostoCondicional.php";
require "IHIT.php";

$orcamento = new Orcamento(500.0);
$orcamento->adicionaItem(new Item("CANETA", 250));
$orcamento->adicionaItem(new Item("LAPIS", 250));

$novoImposto = new IHIT();

echo $novoImposto->calcula($orcamento);