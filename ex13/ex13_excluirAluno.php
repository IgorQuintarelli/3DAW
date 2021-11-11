<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];

    $arquivoAlunoIn = fopen("alunosNovos.txt", "r") or die("Erro na abertura do arquivo");
    while (!feof($arquivoAlunoIn)) {
        $linhas[] = fgets($arquivoAlunoIn);
    }
    fclose($arquivoAlunoIn);

    $arquivoAlunoOut = fopen("alunosNovos.txt", "w") or die("Erro na abertura do arquivo");
    foreach ($linhas as $linha) {
        $colunaDados = explode(";", $linha);
        if ($colunaDados[1] != $matricula) {
            $txt = $linha;
            fwrite($arquivoAlunoOut, $txt);
        }
    }
    fclose($arquivoAlunoOut);
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Excluir Aluno</h1>
<br>
<a href="ex13_inserirAlunoArquivoAppend.php">Inserir Aluno</a><br>
<a href="ex13_alterarAlunoNoMesmoArquivo.php">Alterar Aluno</a><br>
<a href="ex13_listarAlunos.php">Listar Alunos</a><br>
<a href="ex13_excluirAluno.php">Excluir Aluno</a><br>
<br>
<form action="ex13_excluirAluno.php" method=POST>
    Matricula: <input type=text name="matricula" >
    <br><br>
    <input type="submit" value="Excluir">
</form>
<br>
</body>
</html>
