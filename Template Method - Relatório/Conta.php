<?php

class Conta {

	private $nome;
	private $numero;
	private $agencia;
	private $saldo;

	function __construct($nome, $numero, $agencia, $saldo) {
		$this->nome = $nome;
		$this->numero = $numero;
		$this->agencia = $agencia;
		$this->saldo = $saldo;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function getAgencia() {
		return $this->agencia;
	}

	public function getSaldo() {
		return $this->saldo;
	}
	
}