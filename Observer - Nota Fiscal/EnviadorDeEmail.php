<?php

class EnviadorDeEmail implements AcaoAposGerarNota {

	public function executa(NotaFiscal $notaFiscal) {
		echo "enviando por e-mail";
	}
	
}