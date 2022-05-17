<?php
function somar($p1, $p2) {
	return $p1 + $p2;
}
function subtrair($p1, $p2) {
	return $p1 - $p2;
}
function dividir($p1, $p2) {
	return $p1 / $p2;
}
function multiplicar($p1, $p2) {
	return $p1 * $p2;
}
$v1 = "";
$v2 = "";
$result = 0;
$op1 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$v1 = $_POST["valor1"];
	$v2 = $_POST["valor2"];
	$op1 = $_POST["operador1"];
	if ($op1 == "+") {
		$result = somar($v1,$v2);
	} elseif ($op1 == "-") {
		$result = subtrair($v1,$v2);
	} elseif ($op1 == "/") {
		$result = dividir($v1,$v2);
	} elseif ($op1 == "*") {
		$result = multiplicar($v1,$v2);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<form action="ex27SomaPostOperador.php" Method="POST">
<input type="text" name="valor1" value=<?php echo $v1 ?>> 
<select name="operador1">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="/">/</option>
	<option value="*">*</option>
</select>	
 
<input type="text" name="valor2" value=<?php echo $v2 ?>> 
 = <?php if ($result != 0) echo $result; ?>
<br><br>
<input type="submit" value="Ver Resultado">
</form>

<br>
</body>
</html>