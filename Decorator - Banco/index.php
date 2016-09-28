<?php

require "Conta.php";
require "Filtro.php";
require "FiltroMaiorQue500MilReais.php";
require "FiltroMenorQue100Reais.php";
require "FiltroMesmoMes.php";

$contas = array(
	new Conta("Felippe Rodrigo Puhle", 50, "2012-05-01"),
	new Conta("Israel Junior Messias", 500001, "1997-02-21 21/02/1997"),
	new Conta("Cristiano Andreola", 251, "2016-02-05"),
	new Conta("Diego Balen", 1779, "2014-07-12")
);

$filtroMesmoMes = new FiltroMesmoMes();
$filtroMaiorQue500MilReais = new FiltroMaiorQue500MilReais($filtroMesmoMes);
$filtroMenorQue100Reais = new FiltroMenorQue100Reais($filtroMaiorQue500MilReais);

var_dump($filtroMenorQue100Reais->filtra($contas));