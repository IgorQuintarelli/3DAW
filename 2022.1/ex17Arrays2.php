<?php
	$carros = array("Fusca", "BMW", "Opala", "Palio");
	$precos = array(4545.11,6545.22,8798.33,2332.44);
	
	echo "Meu carro é um " . $carros[0];
	
	for ($x=0; $x<count($carros);$x++) {
		echo "<br>";
		echo "Meu carro é um " . $carros[$x];
		echo "<br>";
		echo "Meu carro vale  " . $precos[$x];
	}
		echo "<br>";
		echo count($carros);
?>