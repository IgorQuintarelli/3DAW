<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $idProduto = $_POST["idProduto"];
}
$linhas = array();
$arquivoProduto = fopen("produtos.txt", "r") or die("Erro na abertura do arquivo");
$cabecalho = fgets($arquivoProduto);//atribui a primeira linha do arquivo aponta para a próxima
$x = 0;
$colunaDados = array();
$encontrado = false;
while (!feof($arquivoProduto)) { //percorre o resto do arquivo procurando pelo id
    $linhas[] = fgets($arquivoProduto);
    $colunaDados = explode(";", $linhas[$x]);
    if ($colunaDados[0] == $idProduto) {//se econtrar, registra e interrompe o loop
        $encontrado = true;
        break;
    }
    $x++;
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Alterar Produto</h1>
    <?php
    if (!$encontrado)
    {
        echo "Produto: $idProduto não encontrado <br>";
    } 
    else
    {
    ?>
    <br>
    <form action="alterarProduto.php" method=POST>
        Id do Produto: <input type=text name="idProduto" value='<?php echo $colunaDados[0]; ?>'readonly> <br>
        Nome: <input type=text name="nome" value='<?php echo $colunaDados[1]; ?>'> <br>
        Código de Barras: <input type=text name="codBarras" value='<?php echo $colunaDados[2]; ?>'> <br>
        Descrição: <input type=text name="descricao" value='<?php echo $colunaDados[3]; ?>'> <br>
        Imagem: <input type=text name="imagem" value='<?php echo $colunaDados[4]; ?>'> <br>
        Valor:<input type=text name="valor" value='<?php echo $colunaDados[5]; ?>'> <br>
        Quantidade em estoque: <input type=text name="qtdEstoque" value='<?php echo $colunaDados[6]; ?>'> <br>
        Peso: <input type=text name="peso" value='<?php echo $colunaDados[7]; ?>'> <br>
        <br><br>
        <input type="submit" value="Alterar">
    </form>
    <?php
    }
    ?>
    <br>
    <a href="incluirProduto.php">Incluir Produto</a><br>
    <a href="alterarProduto.php">Alterar Produto</a><br>
    <a href="listarTodosProdutos.php">Listar Todos os Produto</a><br>
    <a href="listarUmProduto.php">Listar Um Produto</a><br>
    <a href="excluirProduto.php">Excluir Produto</a><br>
    <br>
</body>
</html>