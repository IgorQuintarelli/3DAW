<?php

function validaNulo($valor,$campo)
{
    if ($valor == NULL){
        global $falha;
        echo "<br>ERRO: O campo " . $campo . " não pode estar vazio.";
        $falha = true;
    }
}
$econtrado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $falha = false;
    $matricula = $_POST["matricula"];
    validaNulo($matricula, "Matrícula");
    if($falha == false){ 
        if(file_exists("usuarios.txt")){
            $arquivoUsuarios = fopen("usuarios.txt", "r");
            $linha = fgets($arquivoUsuarios);//atribui a primeira linha e aponta para a próxima
            $encontrado = false;
            while (!feof($arquivoUsuarios))//percorre o arquivo procurando pela matrícula
            {
                $linha = fgets($arquivoUsuarios);
                $celulas = explode(";", $linha);
                if ($celulas[0] == $matricula) {//se encontrar, registra e interrompe o loop
                    $encontrado = true;
                    break;
                }
            }
        }
        else{
            echo "<br>O arquivo de registro não foi encontrado";
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Exbir um Usuário</h1>
    <br>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($falha == false)
        {
            if(file_exists("usuarios.txt"))
            {
                if (!$encontrado) {
                    echo "Usuário: $matricula não encontrado";
                }
                else
                {
                    echo "<br>Matrícula: " . $celulas[0];
                    echo "<br>Nome: " . $celulas[1];
                    echo "<br>Função: " . $celulas[2];
                }
            }
        }
    }
    ?>
    <form action="exibirUmUsuario.php" method=POST>
        Matrícula: <input type=text name="matricula" >
        <br><br>
        <input type="submit" value="Exibir">
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
