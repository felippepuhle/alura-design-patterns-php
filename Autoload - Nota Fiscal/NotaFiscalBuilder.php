<?php

class NotaFiscalBuilder {

	private $razaoSocial;
	private $cnpj;
	private $todosItens = array();
	private $valorBruto;
	private $impostos;
	private $observacoes;
	private $data;

	private $todasAcoesASeremExecutadas;

	function __construct($todasAcoesASeremExecutadas) {
		$this->data = date("m/d/Y");

		$this->todasAcoesASeremExecutadas = $todasAcoesASeremExecutadas;
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
		$notaFiscal = new NotaFiscal($this->razaoSocial, $this->cnpj, $this->data, $this->valorBruto, $this->impostos, $this->todosItens, $this->observacoes);

		foreach($this->todasAcoesASeremExecutadas as $acao) {
			$acao->executa($notaFiscal);
		}

		return $notaFiscal;
	}

}