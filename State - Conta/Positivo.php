<?php

class Positivo implements EstadoDaConta {

	public function saca(Conta $conta, $valor) {
		$conta->setSaldo($conta->getSaldo() - $valor);
		if($conta->getSaldo() < 0) {
			$conta->setEstado(new Negativo());
		}
	}

	public function deposita(Conta $conta, $valor) {
		$conta->setSaldo($conta->getSaldo() + $valor * 0.98);
	}

}