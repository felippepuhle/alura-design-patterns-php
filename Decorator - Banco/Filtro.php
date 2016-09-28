<?php

abstract class Filtro {
	protected $outroFiltro;

	function __construct($outroFiltro = null) {
		$this->outroFiltro = $outroFiltro;
	}

	public abstract function filtra($contas);

	protected function proximo($contas) {
		if(!is_null($this->outroFiltro)) {
			return $this->outroFiltro->filtra($contas);
		}

		return array();
	}

}