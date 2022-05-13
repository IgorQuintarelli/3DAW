<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProduto = $_POST["idProduto"];
    $linhas = array();
    $arquivoProduto = fopen("produtos.txt", "r") or die("Erro na abertura do arquivo");
    $cabecalho = fgets($arquivoProduto);//atribui a primeira linha e aponta para a próxima
    $x = 0;
    $colunaDados = array();
    $encontrado = false;
    while (!feof($arquivoProduto))//percorre o arquivo procurando pelo id
    {
        $linhas[] = fgets($arquivoProduto);
        $colunaDados = explode(";", $linhas[$x]);
        if ($colunaDados[0] == $idProduto) {//se encontrar, registra e interrompe o loop
            $encontrado = true;
            break;
        }
        $x++;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Exbir um Produto</h1>
    <br>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!$encontrado) {
            echo "Produto: $idProduto não encontrado";
        }
        else
        {
            echo "ID do Produto: " . $colunaDados[0] . " <br>";
            echo "Nome: " . $colunaDados[1] . "<br>";
            echo "Código de Barras: " . $colunaDados[2] . "<br>";
            echo "Descrição: " . $colunaDados[3] . "<br>";
            echo "URL da Imagem: " . $colunaDados[4] . "<br>";
            echo "Valor em reais: R$ " . $colunaDados[5] . "<br>";
            echo "Quantidade em estoque: " . $colunaDados[6] . "<br>";
            echo "Peso: " . $colunaDados[7] . "<br><br>";
        }
    }
    ?>
    <form action="exibirUmProduto.php" method=POST>
        Id do Produto: <input type=text name="idProduto" >
        <br><br>
        <input type="submit" value="Exibir">
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
