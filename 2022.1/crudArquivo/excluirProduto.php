<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProduto = $_POST["idProduto"];
    $arquivoProdutosR = fopen("produtos.txt", "r") or die("Erro na abertura do arquivo");
    while (!feof($arquivoProdutosR)) {//atribui as linhas do arquivo para um array
        $linhas[] = fgets($arquivoProdutosR);
    }
    fclose($arquivoProdutosR);
    $arquivoProdutosW = fopen("produtos.txt", "w") or die("Erro na abertura do arquivo");
    $x = 0;
    foreach ($linhas as $linha) {//percorre o array procurando pelo id
        $colunaDados = explode(";", $linha);
        if ($colunaDados[0] == $idProduto) {//se ecncontrar, interrompe a repetição atual e continua o loop
            continue;
        } else {//caso contrário, atribui a linha existente
            $txt = $linha;
        }
        fwrite($arquivoProdutosW, $txt);
    }
    fclose($arquivoProdutosW);
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Alterar Produto</h1>
<br>
<br>
<form action="excluirProduto.php" method=POST>
    Id do Produto: <input type=text name="idProduto" >
    <br><br>
    <input type="submit" value="Excluir">
</form>
<br>
<a href="incluirProduto.php">Incluir Produto</a><br>
<a href="alterarProduto.php">Alterar Produto</a><br>
<a href="listarTodosProdutos.php">Listar Todos os Produto</a><br>
<a href="exibirUmProduto.php">Exibir Um Produto</a><br>
<a href="excluirProduto.php">Excluir Produto</a><br>
<br>
</body>
</html>
