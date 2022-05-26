<?php
$falha = false;
function validaUnico($matricula)// verifica se o valor recebido já existe no arquivo
{
    if (file_exists("usuarios.txt"))
    {
        global $falha;
        $arquivoUsuarios = fopen("usuarios.txt", "r");
        $linha = fgets($arquivoUsuarios);//atribui a primeira linha e aponta para a próxima
        while (!feof($arquivoUsuarios)) {
            $linha = fgets($arquivoUsuarios);
            $celulas = explode(";",$linha);
            if($celulas[0] != NULL){// precisei verificar se não é nulo pois a última linha é um "/n"
                if($celulas[0] == $matricula)
                {
                    echo "<br>ERRO: Já existe um usuário com a matrícula " . $matricula . ".";
                    $falha = true;
                    break;
                }
            }
        }
        fclose($arquivoUsuarios);
    }
}
function validaNulo($valor,$campo)
{
    if ($valor == NULL){
        global $falha;
        echo "<br>ERRO: O campo " . $campo . " não pode estar vazio.";
        $falha = true;
    }
}
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $matricula = $_POST["matricula"];
        $nome = $_POST["nome"];
        $funcao = $_POST["funcao"];
        validaUnico($matricula);
        validaNulo($matricula,"Matrícula");
        validaNulo($nome,"Nome");
        validaNulo($funcao,"Função");
        if($falha == true)
        {
            echo "<br><br>Um ou mais campos receberam valores não permitidos. Tente novamente.";
        }
        else{
            if (!file_exists("usuarios.txt")) {//se o file não existe, cria um e adiciona o cabeçalho
                $cabecalho = "Matricula;Nome;Funcao\n";
                file_put_contents("usuarios.txt", $cabecalho);
            }//caso exista, adiciona os valores recebidos na última linha
            $txt = $matricula . ";" . $nome . ";" . $funcao . "\n";
            file_put_contents("usuarios.txt", $txt, FILE_APPEND);
            echo "<br>Usuario adicionado com sucesso.";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Incluir Usuario</h1>
    <br>
    <a href="incluirUsuario.php">Incluir Usuario</a><br>
    <a href="alterarUsuario.php">Alterar Usuario</a><br>
    <a href="listarTodosUsuarios.php">Listar Todos os Usuarios</a><br>
    <a href="exibirUmUsuario.php">Exibir Um Usuario</a><br>
    <a href="excluirUsuario.php">Excluir Usuario</a><br>
    <br>
    <form action="incluirUsuario.php" method=POST>
        Matricula: <input type=text name="matricula"> <br>
        Nome: <input type=text name="nome"> <br>
        Função: <input type=text name="funcao"> <br>
        <br><br>
        <input type="submit" value="Incluir">
    </form>
    <br>
</body>
</html>
