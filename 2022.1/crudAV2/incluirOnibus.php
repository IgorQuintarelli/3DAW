<?php
$id = $_GET["id"];
$marca = $_GET["marca"];
$modelo = $_GET["modelo"];
$qtdAssentos = $_GET["qtdAssentos"];
$temBanheiro = $_GET["temBanheiro"];
$temArCondicionado = $_GET["temArCondicionado"];
$chassi = $_GET["chassi"];
$placa = $_GET["placa"];

$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=3daw2022-1av2', $user, $pass);
$sql = "INSERT INTO onibus VALUES ('$id', '$marca', '$modelo', '$qtdAssentos', '$temBanheiro', '$temArCondicionado', '$chassi', '$placa')";
$conn->query($sql);
?>