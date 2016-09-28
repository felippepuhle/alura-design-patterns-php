<?php

class IHIT extends TemplateDeImpostoCondicional {

    protected function deveUsarMaximaTaxacao(Orcamento $orcamento) {
        $noOrcamento = array();

        foreach($orcamento->getItens() as $item) {
            if(in_array($item->getNome(),$noOrcamento)) {
                return true;
            }

            $noOrcamento[] = $item->getNome();
        }

        return false;
    }

    protected function maximaTaxacao(Orcamento $orcamento) { 
        return $orcamento->getValor() * 0.13 + 100;
    }

    protected function minimaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() * (0.01 * count($orcamento->getItens()));
    }

}