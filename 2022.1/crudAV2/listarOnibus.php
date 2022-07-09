<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "3daw2022-1av2";
    $conn = new mysqli($servidor,$usuario,$senha,$nomeBanco);   
    $result = $conn->query("SELECT * FROM onibus WHERE id = ".$id);
    $linha = $result->fetch_assoc();
    echo "<table>";
    echo"<tr><th>id</th><th>marca</th><th>modelo</th><th>qtdAssentos</th><th>temBanheirod</th><th>temArCondicionado</th><th>chassi</th><th>placa</th></tr>";
    echo "<tr>";
    echo "<td>". $linha ["id"]."</td>";
    echo "<td>". $linha ["marca"]."</td>";
    echo "<td>". $linha ["modelo"]."</td>";
    echo "<td>". $linha ["qtdAssentos"]."</td>";
    echo "<td>". $linha ["temBanheiro"]."</td>";
    echo "<td>". $linha ["temArCondicionado"]."</td>";
    echo "<td>". $linha ["chassi"]."</td>";
    echo "<td>". $linha ["placa"]."</td>";
    echo "</tr>";
    echo "</table>";
}
    
?>
<h1>Listar Um Onibus</h1>
<br>
<div>
    <a href="incluirOnibus.html">Incluir Onibus</a><br>
    <a href="alterarOnibus.html">Alterar Onibus</a><br>
    <a href="excluirOnibus.html">Excluir Onibus</a><br>
    <a href="listarOnibus.php">Listar Onibus</a><br>
    <a href="listarTodosOnibus.php">Listar Todos os Onibus</a><br><br>
</div>
<form action="listarOnibus.php" method=POST>
    id: <input type=text name="id" ><br>
    <br><br>
    <input type="submit" value="Selecionar Onibus">
</form>

<br>
</body>
</html>
