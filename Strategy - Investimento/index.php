<?php

require "Investimento.php";
require "Moderado.php";
require "Conta.php";
require "RealizadorDeInvestimentos.php";

$conta = new Conta();
$conta->deposita(100);

$investimento = new Moderado();

$realizadorDeInvestimentos = new RealizadorDeInvestimentos();

echo $realizadorDeInvestimentos->realiza($conta, $investimento);