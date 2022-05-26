<?php
$falha = false;
$encontrado = false;
function validaNulo($valor,$campo)
{
    if ($valor == NULL){
        global $falha;
        echo "<br>ERRO: O campo " . $campo . " não pode estar vazio.<br>";
        $falha = true;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(file_exists("usuarios.txt")){
        $matricula = $_POST["matricula"];
        validaNulo($matricula,"Matrícula");
        if($falha == false){
            $arquivoUsuariosR = fopen("usuarios.txt", "r");
            while (!feof($arquivoUsuariosR)) {//atribui as linhas do arquivo para um array
                $linhas[] = fgets($arquivoUsuariosR);
            }
            fclose($arquivoUsuariosR);
            $arquivoUsuariosW = fopen("usuarios.txt", "w");
            foreach ($linhas as $linha) {//percorre o array procurando pela matrícula
                $celulas = explode(";", $linha);
                if ($celulas[0] == $matricula) {//se ecncontrar, interrompe a repetição atual e continua o loop
                    $encontrado = true;
                    continue;
                } else {//caso contrário, atribui a linha existente
                    $txt = $linha;
                }
                fwrite($arquivoUsuariosW, $txt);
            }
            fclose($arquivoUsuariosW);
            if($encontrado == true)
            {
                echo "<br>Usuário encontrado e excluído com sucesso";
            }
            else{
                echo "<br>Usuário não encontrado";
            }
        }
    }
    else{
        echo "<br>O arquivo de registro não foi encontrado";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Excluir Usuário</h1>
<br>
<br>
<form action="excluirUsuario.php" method=POST>
    Matrícula: <input type=text name="matricula" >
    <br><br>
    <input type="submit" value="Excluir">
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
