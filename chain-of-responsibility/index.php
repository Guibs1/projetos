<html>
	<head>
		<title>ue</title>
	</head>
	<body>
		<?php
		require "./impostos/Imposto.php";
		require "Desconto.php";
		require "Desconto5Itens.php";
		require "Desconto500Reais.php";
		require "SemDesconto.php";
		require "Item.php";
		require "./impostos/ICMS.php";
		require "./impostos/ISS.php";
		require "Orcamento.php";
		require "CalculadoraDeImposto.php";
		require "CorrenteDeDescontos.php";

		$orcamento  = new Orcamento(500);
		echo "Valor do Orcamento: " . $orcamento->getValor();
		echo "<br/><br/>Aplicando Impostos<br/>";
		$calculadora = new CalculadoraDeImposto();
		echo "Valor do ICMS: ".$calculadora->calcula($orcamento, new ICMS());
		echo "<br/>";
		echo "Valor do ISS: ".$calculadora->calcula($orcamento, new ISS());

		//Descontos

		echo "<br/><br/>Teste de Descontos<br/>";

		$correnteDeDescontos = new CorrenteDeDescontos();

		$orcamento->addItem(new Item("tijolo", 50));
		$orcamento->addItem(new Item("cimento", 100));
		$orcamento->addItem(new Item("cimento", 100));
		$orcamento->addItem(new Item("blocos", 25));

		echo "Valor do Desconto: " . $correnteDeDescontos->calcula($orcamento);
		?>
	</body>
</html>
