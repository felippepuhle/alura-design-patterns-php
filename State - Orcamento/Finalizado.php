<?php

class Finalizado implements EstadoDeUmOrcamento { 

	public function aplicaDescontoExtra(Orcamento $orcamento) {
		throw new Exception("Orçamentos finalizados não recebem desconto extra!");
	}

	public function aprova(Orcamento $orcamento) {
		throw new Exception("Orcamento já foi finalizado");
	}

	public function reprova(Orcamento $orcamento) {
		throw new Exception("Orcamento já foi finalizado");
	}

	public function finaliza(Orcamento $orcamento) {
		throw new Exception("Orcamento já foi finalizado");
	}
	
}