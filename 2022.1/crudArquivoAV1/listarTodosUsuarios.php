<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Listar Todos os Usuários</h1>
    <br>
    <?php
    if (file_exists("usuarios.txt"))
    {
        $linhas = array();
        $arquivoUsuarios = fopen("usuarios.txt", "r");
        $linha = fgets($arquivoUsuarios);//atribui a primeira linha e aponta para a próxima
        while (!feof($arquivoUsuarios)) {//atribui as linhas restantes para um array
            $linhas[] = fgets($arquivoUsuarios);
        }
        fclose($arquivoUsuarios);
    ?>
    <table>
    <tr>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Função</th>
    </tr>
    <?php
    foreach ($linhas as $linha) {//percorre o array exibindo cada elemento de cada linha em uma célula da tabela
        echo "<tr>";
        $celulas = array();
        $celulas = explode(";", $linha);
        foreach ($celulas as $celula){
            echo "<td>$celula</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<?php
    }
    else{
        echo "<br>O arquivo de registro não foi encontrado.<br>";
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
