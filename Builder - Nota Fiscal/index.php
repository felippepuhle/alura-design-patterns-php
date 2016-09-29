<?php

require "ItemDaNota.php";
require "ItemDaNotaBuilder.php";
require "NotaFiscal.php";
require "NotaFiscalBuilder.php";

$notaBuilder = new NotaFiscalBuilder();
$itemBuilder = new ItemDaNotaBuilder();

$notaFiscal = $notaBuilder->paraEmpresa('empresa')
	->comCnpj('0000000')
	->com(new ItemDaNota('descricao', 0))
	->build();

echo $notaFiscal->getRazacaoSocial();