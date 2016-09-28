<?php

class RespostaEmCsv implements Resposta {

	private $outraResposta;

	function __construct(Resposta $resposta) {
		$this->outraResposta = $resposta;
	}

	public function responde(Requisicao $requisicao, Conta $conta) {
		if($requisicao->getFormato() == Formato::$CSV) {
			return $conta->getTitular() .";" . $conta->getSaldo();
		}

		return $this->outraResposta->responde($requisicao, $conta);
	}

}