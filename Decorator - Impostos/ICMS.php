<?php

class ICMS extends Imposto {

	public function calcula(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.05 + 50 + $this->calculaOutroImposto($orcamento);
	}

}