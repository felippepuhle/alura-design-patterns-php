<?php

class FiltroMenorQue100Reais extends Filtro {

	public function filtra($contas) {
		$filtrada = array();

		foreach($contas as $conta) {
			if($conta->getSaldo() < 100) {
				$filtrada[] = $conta;
			}
		}

		foreach($this->proximo($contas) as $conta)  {
			$filtrada[] = $conta;
		}

		return $filtrada;
	}

}