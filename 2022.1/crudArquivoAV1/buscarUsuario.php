<?php
$falha = false;
function validaNulo($valor,$campo)
{
    if ($valor == NULL){
        global $falha;
        echo "<br>ERRO: O campo " . $campo . " não pode estar vazio.<br>";
        $falha = true;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $matricula = $_POST["matricula"];
}
if(file_exists("usuarios.txt")){
    validaNulo($matricula,"Matrícula");
    if($falha == false){
        $arquivoUsuarios = fopen("usuarios.txt", "r");
        $linha = fgets($arquivoUsuarios);//atribui a primeira linha do arquivo aponta para a próxima
        $encontrado = false;
        while (!feof($arquivoUsuarios)) { //percorre o resto do arquivo procurando pela matrícula
            $linha = fgets($arquivoUsuarios);
            $celulas = explode(";", $linha);
            if ($celulas[0] == $matricula) {//se econtrar, registra e interrompe o loop
                $encontrado = true;
                break;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Alterar Usuario</h1>
    <?php
    if(file_exists("usuarios.txt")){
        if($falha == false){
            if (!$encontrado)
            {
                echo "Usuário: $matricula não encontrado <br>";
            } 
            else
            {
                ?>
                <br>
                <form action="alterarUsuario.php" method=POST>
                    Matrícula: <input type=text name="matricula" value='<?php echo $celulas[0]; ?>'readonly> <br>
                    Nome: <input type=text name="nome" value='<?php echo $celulas[1]; ?>'> <br>
                    Função: <input type=text name="funcao" value='<?php echo $celulas[2]; ?>'> <br>
                    <br><br>
                    <input type="submit" value="Alterar">
                </form>
                <?php
            }
        }
    }
    else
    {
        echo "<br>O arquivo de registro não foi econtrado<br>";
    }
?>
    <br>
    <a href="incluirUsuario.php">Incluir Usuario</a><br>
    <a href="alterarUsuario.php">Alterar Usuario</a><br>
    <a href="listarTodosUsuarios.php">Listar Todos os Usuarios</a><br>
    <a href="exibirUmUsuario.php">Exibir Um Usuario</a><br>
    <a href="excluirUsuario.php">Excluir Usuario</a><br>
    <br>
</body>
</html>