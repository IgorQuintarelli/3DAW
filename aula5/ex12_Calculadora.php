<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<br>
<?php
function somaValores($x, $y) {
    echo "<p>O resultado é </p> " . $x+$y;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["var1"];
    $y = $_POST["var2"];
    somaValores($x,$y);
}
?>
<form action="ex12_Calculadora.php" method=POST>
    <h3>Somar Dois Numeros</h3>
    a: <input type=number name="var1"> +
    b: <input type=number name="var2"> =
<?php echo "" ?>
    <br><br>
    <input type="submit" value="Somar">
</form>
<br>
</body>
</html>
