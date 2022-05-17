<?php
		echo "<h3> While do </h3>";

	$x = 10;
	while($x < 10) {
		
		$result = $x * 2;
		echo $result;
		echo "<br>";
		$x++;
	}
		echo "<h3> do While </h3>";
	
	$x = 10;
	do {
		$result = $x * 2;
		echo $result;
		echo "<br>";
		$x++;
		
	} while ($x < 10)
?>