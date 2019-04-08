<?php

class CalculadoraDeImposto {
	public function calcula(Orcamento $orcamento, $imposto){
		return $imposto->calcula($orcamento);
	}
}
