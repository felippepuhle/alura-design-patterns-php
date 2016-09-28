<?php

class CalculadoraDeDescontos {

	public function calcula(Orcamento $orcamento) {
		$descontoPorCincoItens = new DescontoPorCincoItens();
		$descontoPorMaisDeQuinhentosReais = new DescontoPorMaisDeQuinhentosReais();
		$descontoPorVendaCasada = new DescontoPorVendaCasada();
		$semDesconto = new SemDesconto();

		$descontoPorCincoItens->setProximo($descontoPorMaisDeQuinhentosReais);
		$descontoPorMaisDeQuinhentosReais->setProximo($descontoPorVendaCasada);
		$descontoPorVendaCasada->setProximo($semDesconto);

		return $descontoPorCincoItens->desconta($orcamento);
	}
	
}