<?php 
class Orcamento {

	private $valorOrcamento;
	private $itens;

	function __construct($valor){
		$this->setValor($valor);
		$this->itens = array();
	}

	public function getItens()
	{
		return $this->itens;
	}

	public function addItem(Item $novoItem)
	{
		$this->itens[] = $novoItem;
	}

	public function getValor(){
		return $this->valorOrcamento;
	}

	public function setValor($novoValor){
		$this->valorOrcamento = $novoValor;
	}
}
?>
