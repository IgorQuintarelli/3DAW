<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "faeterj3dawmanha2";
    $conn = new mysqli($servidor,$usuario,$senha,$nomeBanco);   
    if($conn->connect_error){
        die ("conexão com erro:". $conn->connect_error);
    }
    $comandoSQL = "DELETE from alunos where matricula = ".$matricula;
    $conn->query($comandoSQL);
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Alterar Aluno</h1>
<br>
<a href="ex14_inserirAlunoBanco.php">Inserir Aluno</a><br>
<a href="ex14_alterarAlunoBanco.php">Alterar Aluno</a><br>
<a href="ex14_listarAlunosBanco.php">Listar Alunos</a><br>
<a href="ex14_excluirAlunoBanco.php">Excluir Aluno</a><br>

<br>
<form action="ex14_excluirAlunoBanco.php" method=POST>
    matricula do aluno alvo: <input type=text name="matricula" ><br>
    <br><br>
    <input type="submit" value="Deletar">
</form>
<br>
</body>
</html>
