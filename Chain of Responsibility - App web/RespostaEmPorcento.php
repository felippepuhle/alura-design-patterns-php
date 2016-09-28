<?php

class RespostaEmPorcento implements Resposta {

	private $outraResposta;

	function __construct(Resposta $resposta) {
		$this->outraResposta = $resposta;
	}
	
	public function responde(Requisicao $requisicao, Conta $conta) {
		if($requisicao->getFormato() == Formato::$PORCENTO) {
			return $conta->getTitular() . "%" . $conta->getSaldo();
		}
		
		return $this->outraResposta->responde($requisicao, $conta);
	}
	
}