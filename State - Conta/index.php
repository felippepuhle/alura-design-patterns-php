<?php

require("Conta.php");
require("EstadoDaConta.php");
require("Negativo.php");
require("Positivo.php");

$conta = new Conta();
$conta->deposita(500);

echo $conta->getSaldo();

$conta->saca(500);

echo $conta->getSaldo();

// $conta->saca(500); // lança exception, pois a conta está negativa