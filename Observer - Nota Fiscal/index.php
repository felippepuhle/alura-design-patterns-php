<?php

require "NotaFiscal.php";
require "ItemDaNota.php";
require "NotaFiscalBuilder.php";
require "AcaoAposGerarNota.php";
require "Multiplicador.php";
require "EnviadorDeEmail.php";
require "NotaFiscalDao.php";

$acoes = array(
	new Multiplicador(2),
	new EnviadorDeEmail(),
	new NotaFiscalDao()
);

$builder = new NotaFiscalBuilder($acoes);

$notaFiscal = $builder->paraEmpresa("Caelum")
	->comCnpj("123.456.789/0001-10")
	->com(new ItemDaNota("item 1", 100.0))
	->com(new ItemDaNota("item 2", 200.0))
	->com(new ItemDaNota("item 3", 300.0))
	->comObservacoes("entregar notaFiscal pessoalmente")
	->build();