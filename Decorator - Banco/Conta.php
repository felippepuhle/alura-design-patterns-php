<?php

class Conta {

	private $titular;
	private $saldo;
	private $dataAbertura;

	function __construct($titular, $saldo, $dataAbertura) {
		$this->titular = $titular;
		$this->saldo = $saldo;
		$this->dataAbertura = $dataAbertura;
	}
	
	public function getTitular() {
		return $this->titular;
	}

	public function getSaldo() {
		return $this->saldo;
	}

	public function getDataAbertura() {
		return $this->dataAbertura;
	}
	
}
