<?php

abstract class TemplateDeImpostoCondicional extends Imposto {

	public final function calcula(Orcamento $orcamento) {
		if($this->deveUsarMaximaTaxacao($orcamento)) {
			return $this->maximaTaxacao($orcamento) + $this->calculaOutroImposto($orcamento);
		}
		
		return $this->minimaTaxacao($orcamento) + $this->calculaOutroImposto($orcamento);
	}        

	protected abstract function deveUsarMaximaTaxacao(Orcamento $orcamento);

	protected abstract function maximaTaxacao(Orcamento $orcamento);

	protected abstract function minimaTaxacao(Orcamento $orcamento);

}