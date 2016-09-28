<?php

class ISS extends Imposto {

	public function calcula(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.06 + $this->calculaOutroImposto($orcamento);
	}

}