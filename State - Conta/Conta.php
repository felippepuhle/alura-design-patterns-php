<?php

class Conta {

	protected $saldo;
	private $estado;

    public function __construct() {
        $this->estado = new Negativo();
    }

	public function saca($valor) {
		$this->estado->saca($this, $valor);
	}

	public function deposita($valor) {
		$this->estado->deposita($this, $valor);
	}

	public function getSaldo() {
		return $this->saldo;
	}

	function setEstado($estado) {
		$this->estado = $estado;
	}

	function setSaldo($saldo) {
		$this->saldo = $saldo;
	}
	
}