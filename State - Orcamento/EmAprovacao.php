<?php

class EmAprovacao implements EstadoDeUmOrcamento { 

	private $descontoAplicado = false;

	public function aplicaDescontoExtra(Orcamento $orcamento) {
		if($this->descontoAplicado == true) {
			throw new Exception("Desconto já aplicado!");
		}

		$valor = $orcamento->getValor();
		$orcamento->setValor($valor - $valor * 0.05);
		$this->descontoAplicado = true;
	}

	public function aprova(Orcamento $orcamento) {
		$orcamento->setEstado(new Aprovado());
	}

	public function reprova(Orcamento $orcamento) {
		$orcamento->setEstado(new Reprovado());
	}

	public function finaliza(Orcamento $orcamento) {
		throw new Exception("Orcamentos em aprovação não podem ir para finalizado");
	}

}