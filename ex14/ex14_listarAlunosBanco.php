<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Listar Alunos</h1>
<br>
<a href="ex14_inserirAlunoBanco.php">Inserir Aluno</a><br>
<a href="ex14_alterarAlunoBanco.php">Alterar Aluno</a><br>
<a href="ex14_listarAlunosBanco.php">Listar Alunos</a><br>
<a href="ex14_excluirAlunoBanco.php">Excluir Aluno</a><br>

</form>
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBanco = "faeterj3dawmanha2";
$conn = new mysqli($servidor,$usuario,$senha,$nomeBanco);   
if($conn->connect_error){
    die ("conexão com erro:". $conn->connect_error);
}
$comandoSQL = "SELECT * FROM alunos";
$result = $conn->query($comandoSQL);
echo "<table>";
echo"<tr><th>Matricula</th><th>Nome</th><th>email</th><th>cpf</th></tr>";
while($linha = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>". $linha ["matricula"]."</td>";
    echo "<td>". $linha ["nome"]."</td>";
    echo "<td>". $linha ["email"]."</td>";
    echo "<td>". $linha ["cpf"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>

<br>
</body>
</html>
