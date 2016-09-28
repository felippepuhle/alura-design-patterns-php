<?php

class Arrojado implements Investimento {

	private $random;

	public function calcula(Conta conta) {
		$this->random = mt_rand(1,100);

		if($this->random >= 0 && $this->random <= 1) {
			return $conta->getSaldo() * 0.5;
		}

		if ($this->random >= 2 && $this->random <= 4) {
			return $conta->getSaldo() * 0.3;
		}

		return $conta->getSaldo() * 0.006;
	}

}