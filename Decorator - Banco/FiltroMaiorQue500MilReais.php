<?php

class FiltroMaiorQue500MilReais extends Filtro {

	public function filtra($contas) {
		$filtrada = array();

		foreach($contas as $conta) {
			if($conta->getSaldo() > 500000) {
				$filtrada[] = $conta;
			}
		}

		foreach($this->proximo($contas) as $conta)  {
			$filtrada[] = $conta;
		}

		return $filtrada;
	}

}