<?php
// $_GET[] armazena os valores enviados por requisição
$v1 = $_GET["valor1"];
$v2 = $_GET["valor2"];
$result = $v1 + $v2;

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<form action="ex25Navegacao.php" method="GET">
<input type="text" name="valor1" >
 + 
<input type="text" name="valor2" >
 = <?php echo $result; ?>
<br><br>
<input type="submit" value="Somar">
</form>

<br>
</body>
</html>