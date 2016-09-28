<?php

class FiltroMesmoMes extends Filtro {

	public function filtra($contas) {
		$filtrada = array();

		foreach($contas as $conta) {
			$ehMesmoMes = date('m', strtotime($conta->getDataAbertura())) == date('m');
			$ehMesmoAno = date('Y', strtotime($conta->getDataAbertura())) == date('Y');

			if($ehMesmoMes && $ehMesmoAno) {
				$filtrada[] = $conta;
			}
		}

		foreach($this->proximo($contas) as $conta)  {
			$filtrada[] = $conta;
		}

		return $filtrada;
	}

}