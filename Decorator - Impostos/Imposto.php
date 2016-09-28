<?php

abstract class Imposto {

	private $outroImposto;

	function __construct(Imposto $outroImposto = null) {
		$this->outroImposto = $outroImposto;
	}

	protected function calculaOutroImposto(Orcamento $orcamento) {
		return ($this->outroImposto == null) ? 0 : $this->outroImposto->calcula($orcamento);
	}

	public abstract function calcula(Orcamento $orcamento);

}