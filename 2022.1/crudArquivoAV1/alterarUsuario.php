<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $funcao = $_POST["funcao"];

    $arquivoUsuariosR = fopen("usuarios.txt", "r") or die("Erro na abertura do arquivo");
    while (!feof($arquivoUsuariosR)) {//atribui as linhas do arquivo para um array
        $linhas[] = fgets($arquivoUsuariosR);
    }
    fclose($arquivoUsuariosR);
    $arquivoUsuariosW = fopen("usuarios.txt", "w") or die("Erro na abertura do arquivo");
    foreach ($linhas as $linha) {//percorre o array procurando pelo id
        $celulas = explode(";", $linha);
        if ($celulas[0] == $matricula) {//se encontrar, atribui a alteração
            $txt = $matricula . ";" . $nome . ";" . $funcao . "\n";
        } else { //se não, atribui a existente
            $txt = $linha;
        }
        fwrite($arquivoUsuariosW, $txt);
    }
    fclose($arquivoUsuariosW);
    echo "<br>Usuário alterado com sucesso";
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Alterar Usuario</h1>
<br>
<br>
<form action="buscarUsuario.php" method=POST>
    Matrícula: <input type=text name="matricula" >
    <br><br>
    <input type="submit" value="Alterar">
</form>
<br>
<a href="incluirUsuario.php">Incluir Usuario</a><br>
<a href="alterarUsuario.php">Alterar Usuario</a><br>
<a href="listarTodosUsuarios.php">Listar Todos os Usuarios</a><br>
<a href="exibirUmUsuario.php">Exibir Um Usuario</a><br>
<a href="excluirUsuario.php">Excluir Usuario</a><br>
<br>
</body>
</html>
