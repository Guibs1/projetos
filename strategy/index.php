<html>
	<head>
		<title>ue</title>
	</head>
	<body>
		<?php
        require "./impostos/Imposto.php";
		require "./impostos/ICMS.php";
		require "./impostos/ISS.php";
		require "Orcamento.php";
		require "CalculadoraDeImposto.php";

		$orcamento  = new Orcamento(1200);
		echo $orcamento->getValor();
		echo "<br/>";

		$calculadora = new CalculadoraDeImposto();
		echo $calculadora->calcula($orcamento, new ICMS());
		echo "<br/>";
		echo $calculadora->calcula($orcamento, new ISS());
		?>
	</body>
</html>
