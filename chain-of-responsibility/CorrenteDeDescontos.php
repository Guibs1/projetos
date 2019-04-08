<?php

/*require_once "Desconto500Reais.php";
*require_once "Desconto5Itens.php";
*/

class CorrenteDeDescontos {
	public function calcula(Orcamento $orcamento){
        /**
         * Problema:
         *//*
        if(count($orcamento->getItens()) >= 5 ){
            return $orcamento->getValor() * 0.1;
        }elseif($orcamento->getValor() > 500){
            return $orcamento->getValor() * 0.05;
        }else {
            return 0;
        }*/
        
        /**
         * Problema2:
         *//*
        $desconto = new Desconto5Itens();
        $valorDesconto = $desconto->calcula($orcamento);
        
        
        if ($valorDesconto == 0){
            $desconto = new Desconto500Reais();
            $valorDesconto = $desconto->calcula($orcamento);
        }
        return $valorDesconto;
        */

        $desconto5itens = new Desconto5Itens();
        $desconto500reais = new Desconto500Reais();
        $semDesconto = new SemDesconto();

        $desconto5itens->setProximoDesconto($desconto500reais);
        $desconto500reais->setProximoDesconto($semDesconto);

        $valorDesconto = $desconto5itens->calcula($orcamento);
        return $valorDesconto;
	}
}
