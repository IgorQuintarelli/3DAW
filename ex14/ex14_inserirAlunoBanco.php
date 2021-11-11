<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "faeterj3dawmanha2";
    $conn = new mysqli($servidor,$usuario,$senha,$nomeBanco);   
    if($conn->connect_error){
        die ("conexão com erro:". $conn->connect_error);
    }
    $comandoSQL = "INSERT INTO alunos values (".$matricula.",".$nome.", ".$email.", ".$cpf.")";
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
<form action="ex14_inserirAlunoBanco.php" method=POST>
    matricula: <input type=text name="matricula" ><br>
    nome: <input type=text name="nome" ><br>
    email: <input type=text name="email" ><br>
    cpf: <input type=text name="cpf" ><br>
    <br><br>
    <input type="submit" value="Inserir">
</form>
<br>
</body>
</html>
