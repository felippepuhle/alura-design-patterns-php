<?php

class Multiplicador implements AcaoAposGerarNota {

	private $fator;

	function __construct($fator) { 
		$this->fator = $fator;
	}

	public function executa(NotaFiscal $notaFiscal) {
		echo $notaFiscal->getValorBruto() * $this->fator;
	}

}
