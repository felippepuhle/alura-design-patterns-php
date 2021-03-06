<?php

abstract class TemplateDeImpostoCondicional implements Imposto {

	public final function calcula(Orcamento $orcamento) {
		if($this->deveUsarMaximaTaxacao($orcamento)) {
			return $this->maximaTaxacao($orcamento);
		}
		
		return $this->minimaTaxacao($orcamento);
	}        

	protected abstract function deveUsarMaximaTaxacao(Orcamento $orcamento);

	protected abstract function maximaTaxacao(Orcamento $orcamento);

	protected abstract function minimaTaxacao(Orcamento $orcamento);

}