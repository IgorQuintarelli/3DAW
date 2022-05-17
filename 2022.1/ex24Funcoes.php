<?php
	$result = 0;
	function soma(float $a, float $b) {
		$result1 = $a + $b;
		//echo $result1;
		return $result1;
	}
	function saudacao() {
		echo "<h1> Ola funcoes</h1>";
	}
	
	saudacao();
	$result = soma(2,3);
	echo $result;
?>