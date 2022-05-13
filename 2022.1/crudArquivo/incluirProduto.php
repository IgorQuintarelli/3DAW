<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $idProduto = $_POST["idProduto"];
        $nome = $_POST["nome"];
        $codBarras = $_POST["codBarras"];
        $descricao = $_POST["descricao"];
        $imagem = $_POST["imagem"];
        $valor = $_POST["valor"];
        $qtdEstoque = $_POST["qtdEstoque"];
        $peso = $_POST["peso"];
        if (!file_exists("produtos.txt")) {//se o file não existe, cria um e adiciona o cabeçalho
            $cabecalho = "ID do Produto;Nome;Codigo de Barras;Descricao;URL da Imagem;Valor em Reais;Quantidade em Estoque;Peso\n";
            file_put_contents("produtos.txt", $cabecalho);
        }//caso exista, adiciona os valores recebidos na última linha
        $txt = $idProduto . ";" . $nome . ";" . $codBarras . ";" . $descricao . ";" . $imagem . ";" . $valor;
        $txt = $txt . ";" . $qtdEstoque . ";" . $peso . "\n";
        file_put_contents("produtos.txt", $txt, FILE_APPEND);
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Incluir Produto</h1>
    <br>
    <a href="incluirProduto.php">Incluir Produto</a><br>
    <a href="alterarProduto.php">Alterar Produto</a><br>
    <a href="listarTodosProdutos.php">Listar Todos os Produto</a><br>
    <a href="exibirUmProduto.php">Exibir Um Produto</a><br>
    <a href="excluirProduto.php">Excluir Produto</a><br>
    <br>
    <form action="incluirProduto.php" method=POST>
        ID do Produto: <input type=text name="idProduto"> <br>
        Nome: <input type=text name="nome"> <br>
        Código de Barras: <input type=text name="codBarras"> <br>
        Descrição: <input type=text name="descricao"> <br>
        URL da Imagem: <input type=text name="imagem"> <br>
        Valor em Reais: R$<input type=text name="valor"> <br>
        Quantidade em Estoque: <input type=text name="qtdEstoque"> <br>
        Peso: <input type=text name="peso"> <br>
        <br><br>
        <input type="submit" value="Incluir">
    </form>
    <br>
</body>
</html>
