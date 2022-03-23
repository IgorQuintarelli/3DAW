<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idPergunta = $_POST["idPergunta"];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "jogoPerguntas";
    $conn = new mysqli($servidor,$usuario,$senha,$nomeBanco);   
    if($conn->connect_error){
        die ("conexão com erro:". $conn->connect_error);
    }
    $result = $conn->query("SELECT * FROM perguntas WHERE idPergunta = ".$idPergunta);
    $linha = $result->fetch_assoc();
    echo "<table>";
    echo"<tr><th>idPergunta</th><th>texto</th><th>pontos</th><th>dificuldade</th></tr>";
    echo "<tr>";
    echo "<td>". $linha ["idPergunta"]."</td>";
    echo "<td>". $linha ["texto"]."</td>";
    echo "<td>". $linha ["pontos"]."</td>";
    echo "<td>". $linha ["dificuldade"]."</td>";
    echo "</tr>";
    echo "</table>";
}
    
?>
<h1>Listar Uma Perguntas</h1>
<br>
<a href="criarPergunta.php">Criar Pergunta</a><br>
<a href="alterarPergunta.php">Alterar Pergunta</a><br>
<a href="listarTodasPerguntas.php">Listar todas as Perguntas</a><br>
<a href="listarUmaPergunta.php">Listar uma Perguntas</a><br>
<a href="excluirPergunta.php">Excluir Pergunta</a><br>

<form action="listarUmaPergunta.php" method=POST>
    idPergunta: <input type=text name="idPergunta" ><br>
    <br><br>
    <input type="submit" value="Selecionar Pergunta">
</form>

<br>
</body>
</html>
