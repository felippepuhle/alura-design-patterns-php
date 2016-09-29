<?php

class NotaFiscalBuilder {

	private $razaoSocial;
	private $cnpj;
	private $todosItens = Array();
	private $valorBruto;
	private $impostos;
	private $observacoes;
	private $data;

	function __construct() {
		$this->data = date("m/d/Y");
	}

	public function paraEmpresa($razaoSocial) {
		$this->razaoSocial = $razaoSocial;
		return $this;
	}

	public function comCnpj($cnpj) {
		$this->cnpj = $cnpj;
		return $this;
	}

	public function com(ItemDaNota $item) {
		$this->todosItens[] = $item;
		$this->valorBruto += $item->getValor();
		$this->impostos += $item->getValor() * 0.05;
		return $this;
	}

	public function comObservacoes($observacoes) {
		$this->observacoes = $observacoes;
		return $this;
	}

	public function naData($novaData) {
		$this->data = $novaData;
		return $this;
	}

	public function build() {
		return new NotaFiscal($this->razaoSocial, $this->cnpj, $this->data, $this->valorBruto, $this->impostos, $this->todosItens, $this->observacoes);
	}

}