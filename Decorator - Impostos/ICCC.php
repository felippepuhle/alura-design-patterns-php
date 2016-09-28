<?php

class ICCC extends Imposto {

	public function calcula(Orcamento $orcamento) {
		if($orcamento->getValor() < 1000) {
			return ($orcamento->getValor() * 0.05) + $this->calculaOutroImposto($orcamento);
		}
		
		if ($orcamento->getValor() >= 1000 && $orcamento->getValor() <= 3000) {
			return ($orcamento->getValor() * 0.07) + $this->calculaOutroImposto($orcamento);
		}

		
		return ($orcamento->getValor() * 0.08 + 30) + $this->calculaOutroImposto($orcamento);
	}

}