<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
echo "<h2>Tipos de Variaveis e var_dump</h2>";

$variavel = "esta é uma string";
//o método var_dump mostra na tela o tipo de uma variável (muito útil para debugar)
var_dump($variavel);
$variavelInt = 7;
var_dump($variavelInt);
$variavelFloat = 5.789;
var_dump($variavelFloat);
$variavelBoo = false;
var_dump($variavelBoo);

echo "<br>";
echo $variavel;
echo "<br>";
echo "Variavel tipo int: " . $variavelInt;
echo "<br>";
echo "Variavel tipo Float: " . $variavelFloat;
echo "<br>";
echo "Variavel tipo Boolean: " . $variavelBoo;
if ($variavelBoo) {
	echo "<br>";
	echo "Variavel tipo Boolean: true";
} else {
	echo "<br>";
	echo "Variavel tipo Boolean: false";	
}
?>
</body>
</html>