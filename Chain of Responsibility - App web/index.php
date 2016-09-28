<?php

require "Conta.php";
require "Formato.php";
require "Requisicao.php";
require "Resposta.php";
require "RespostaEmCsv.php";
require "RespostaEmPorcento.php";
require "RespostaEmXml.php";
require "SemResposta.php";

$conta = new Conta("Felippe Rodrigo Puhle", 1000);
$requisicao = new Requisicao(Formato::$XML);

$semResposta = new SemResposta();
$respostaEmPorcento = new RespostaEmPorcento($semResposta);
$respostaEmXml = new RespostaEmXml($respostaEmPorcento);
$respostaEmCsv = new RespostaEmCsv($respostaEmXml);

echo $respostaEmCsv->responde($requisicao, $conta);