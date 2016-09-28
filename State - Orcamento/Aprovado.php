<?php

class Aprovado implements EstadoDeUmOrcamento { 

	private $descontoAplicado = false;

	public function aplicaDescontoExtra(Orcamento $orcamento) {
		if($this->descontoAplicado == true) {
			throw new Exception("Desconto já aplicado!");
		}
		
		$valor = $orcamento->getValor();
		$orcamento->setValor($valor - $valor * 0.02);
		$this->descontoAplicado = true;
	}

	public function aprova(Orcamento $orcamento) {
		throw new Exception("Orçamento já está em estado de aprovação");
	}

	public function reprova(Orcamento $orcamento) {
		throw new Exception("Orçamento está em estado de aprovação e não pode ser reprovado");
	}

	public function finaliza(Orcamento $orcamento) {
		$orcamento->setEstado(new Finalizado());
	}

}