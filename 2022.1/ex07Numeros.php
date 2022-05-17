<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
echo "<h2>Exercicio Numeros</h2>";
$variavel = 8.9898;
//o método is_int retorna um boolean true se o valor for inteiro e false se não for
var_dump(is_int($variavel));
echo "<br>";
echo $variavel;
echo "<br>";
// o método gettype é parecido com var_dump, mas retorna apenas o tipo da variável
echo gettype($variavel);

?>

<br>
</body>
</html>