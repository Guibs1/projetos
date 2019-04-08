<?php 
class Orcamento {

	private $valorOrcamento;

	function __construct($valor){
		$this->setValor($valor);
	}
	
	public function getValor(){
		return $this->valorOrcamento;
	}

	public function setValor($novoValor){
		$this->valorOrcamento = $novoValor;
	}
}
?>
