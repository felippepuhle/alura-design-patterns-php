<?php

require("Orcamento.php");
require("EstadoDeUmOrcamento.php");
require("Aprovado.php");
require("EmAprovacao.php");
require("Finalizado.php");
require("Reprovado.php");

$reforma = new Orcamento(500.0);

$reforma->aplicaDescontoExtra();
echo $reforma->getValor(); // imprime 475,00 pois descontou 5%

$reforma->aprova(); // aprova nota!
$reforma->aplicaDescontoExtra();
echo $reforma->getValor();// imprime 465,50 pois descontou 2%

$reforma->finaliza();
//$reforma->aplicaDescontoExtra(); // lança exception, pois não pode dar desconto nesse estado
//$reforma->aprova(); // lança exception, pois não pode ir para aprovado