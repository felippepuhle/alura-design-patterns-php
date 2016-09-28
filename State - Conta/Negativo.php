<?php

class Negativo implements EstadoDaConta {
	
	public function saca(Conta $conta, $valor) {
		throw new Exception("Sua conta está no vermelho. Não é possível sacar!");
	}

	public function deposita(Conta $conta, $valor) {
		$conta->setSaldo($conta->getSaldo() + $valor * 0.95);
		if($conta->getSaldo() > 0) {
			$conta->setEstado(new Positivo());
		}
	}

}