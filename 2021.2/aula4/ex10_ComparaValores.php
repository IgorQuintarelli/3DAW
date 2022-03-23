<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
$x = $_GET["var1"];
$y = $_GET["var2"];

if ( $x == $y) {
    echo "<p>x é igual a y, x = $x</p><br>";
    if($x === $y)
    {
        echo "<p>e eles são idênticos</p>";
    } else {
        echo "<p>mas eles não são idênticos</p>";
    }
} else {
    echo "<p>x não é igual a y, x = $x e y = $y</p><br>";
    if($x<$y){
        echo"<p>e y é o maior dos dois</p>";
    }
    else{
        echo"<p>e x é o maior dos dois</p>";
    }
}
echo "<br><p> além disso </p>";

if($x>=5)
{
    echo "<p>x é maior ou igual a 5</p>";
}else{
    echo "<p>x é menor que 5 </p>";
}
if($x<=6){
    echo "<p> e menor ou igual a 6</p>";
}else{
    echo "<p> e maior que 6</p>";
}

echo "<br><p> outra coisa muito importante é que</p><br>";

if($y>=5)
{
    echo "<p>y é maior ou igual a 5</p>";
}else{
    echo "<p>y é menor que 5 </p>";
}
if($y<=6){
    echo "<p> e menor ou igual a 6</p>";
}else{
    echo "<p> e maior que 6</p>";
}

?>
<br>
<form action="ex10_ComparaValores.php" method=GET>
    <h3>Valores</h3>
    <input type=number name="var1"> +
    <input type=number name="var2"> =
    <br><br>
    <input type="submit" value="Comparar">
</form>
<br>
</body>
</html>
