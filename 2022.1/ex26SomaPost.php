<?php
$v1 = "";
$v2 = "";
$result = 0;
//uma forma de fazer requisição da própria página enviando variáveis e sem precisar de uma página inicial é realizando a verificação de request
if ($_SERVER["REQUEST_METHOD"] == "POST") {//o fluxo só passa por aqui da segunda vez que for chamada em diante, já que não há request na primeira
	$v1 = $_POST["valor1"];
	$v2 = $_POST["valor2"];
	$result = $v1 + $v2;
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<form action="ex26SomaPost.php" Method="POST">
<input type="text" name="valor1" value=<?php echo $v1 ?>> 
 + 
<input type="text" name="valor2" value=<?php echo $v2 ?>> 
 = <?php if ($result != 0) echo $result; ?>
<br><br>
<input type="submit" value="Somar">
</form>

<br>
</body>
</html>