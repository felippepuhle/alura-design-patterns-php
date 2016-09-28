<?php

class RespostaEmXml implements Resposta {

	private $outraResposta;

	function __construct(Resposta $resposta) {
		$this->outraResposta = $resposta;
	}

	public function responde(Requisicao $requisicao, Conta $conta) {
		if($requisicao->getFormato() == Formato::$XML) {
			return "<conta><titular>" . $conta->getTitular() . "</titular><saldo>" . $conta->getSaldo() . "</saldo></conta>";
		}
		
		return $this->outraResposta->responde($requisicao, $conta);
	}

}