<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idPergunta = $_POST["idPergunta"];
    $texto = $_POST["texto"];
    $pontos = $_POST["pontos"];
    $dificuldade = $_POST["dificuldade"]; 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "jogoPerguntas";
    $conn = new mysqli($servidor,$usuario,$senha,$nomeBanco);   
    if($conn->connect_error){
        die ("conexão com erro:". $conn->connect_error);
    }
    $comandoSQL = "INSERT INTO perguntas VALUES ('$idPergunta','$texto', '$pontos', '$dificuldade')";
    $conn->query($comandoSQL);
}
    
?>
<h1>Criar Pergunta</h1>
<br>
<a href="criarPergunta.php">Criar Pergunta</a><br>
<a href="alterarPergunta.php">Alterar Pergunta</a><br>
<a href="listarTodasPerguntas.php">Listar todas as Perguntas</a><br>
<a href="listarUmaPergunta.php">Listar uma Perguntas</a><br>
<a href="excluirPergunta.php">Excluir Pergunta</a><br>

<form action="criarPergunta.php" method=POST>
    idPergunta: <input type="text" name="idPergunta" ><br>
    texto: <input type="text" name="texto" ><br>
    pontos: <input type="number" name="pontos" ><br>
    dificuldade: <input type="text" name="dificuldade" ><br>
    <br><br>
    <input type="submit" value="Criar">
</form>

<br>
</body>
</html>
