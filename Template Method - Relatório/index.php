<?php

require "Conta.php";
require "Relatorio.php";
require "RelatorioSimples.php";
require "RelatorioComplexo.php";


$contas = array(
	new Conta("Felippe Rodrigo Puhle", "1", "0100", 1000),
	new Conta("Júnior Messias", "2", "0100", 1750),
	new Conta("Cristiano Andreola", "3", "0100", 3500)
);

$relatorio = new RelatorioSimples();
$relatorio->imprime($contas);