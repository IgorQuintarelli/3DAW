<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
    $nome = "zé";
    //estruturas de controle de fluxo
    if ($nome == "João") {//se a sentença é verdadeira, faça:
        echo "<h1>O nome é $nome</h1>";
    } elseif ($nome == "Maria") {//se as anteriores forem falsas e a atual for verdadeira, faça:
        echo "<h1>O nome não é joão, é $nome</h1>";
    } elseif ($nome == "Joana") {
        echo "<h1>O nome é $nome</h1>";
    } else {//se as anteriores forem falsas, faça:
        echo "<h1>O nome não é nenhum desses, é $nome</h1>";
    }
?>
<br>
</body>
</html>
