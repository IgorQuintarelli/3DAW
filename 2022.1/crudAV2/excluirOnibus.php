<?php
$id = $_GET["id"];

$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=3daw2022-1av2', $user, $pass);
$sql = "DELETE FROM onibus WHERE id = ".$id;
$conn->query($sql);

?>