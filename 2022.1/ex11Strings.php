<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
echo "<h2>Exercicio String</h2>";
$variavel = "frase muito legal";
echo $variavel;
echo "<br>";
//alguns exemplos de métodos do PHP para tratar strings
echo "Quantidade de caracteres: " . strlen($variavel);
echo "<br>";
echo "Quantidade de palavras: " . str_word_count($variavel);
echo "<br>";
echo "frase invertida: " . strrev($variavel);

?>

<br>
</body>
</html>