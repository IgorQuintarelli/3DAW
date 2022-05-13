<?php
    $linhas = array();
    $arquivoProdutos = fopen("produtos.txt", "r") or die("Erro na abertura do arquivo");
    $cabecalho = fgets($arquivoProdutos);//atribui a primeira linha e aponta para a próxima
    $colunas = explode(";", $cabecalho);
    while (!feof($arquivoProdutos)) {//atribui as linhas restantes para um array
        $linhas[] = fgets($arquivoProdutos);
    }
    fclose($arquivoProdutos);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Listar Produtos</h1>
<br>
<a href="incluirProduto.php">Incluir Produto</a><br>
<a href="alterarProduto.php">Alterar Produto</a><br>
<a href="listarTodosProdutos.php">Listar Todos os Produto</a><br>
<a href="exibirUmProduto.php">Exibir Um Produto</a><br>
<a href="excluirProduto.php">Excluir Produto</a><br>
<br><br>
<table>
    <tr><!--imprime o cabeçalho na table head-->
        <th><?php echo $colunas[0] ?></th>
        <th><?php echo $colunas[1] ?></th>
        <th><?php echo $colunas[2] ?></th>
        <th><?php echo $colunas[3] ?></th>
        <th><?php echo $colunas[4] ?></th>
        <th><?php echo $colunas[5] ?></th>
        <th><?php echo $colunas[6] ?></th>
        <th><?php echo $colunas[7] ?></th>
    </tr>
        <?php
        foreach ($linhas as $linha) {//percorre o array exibindo cada elemento de cada linha em uma célula da tabela
            echo "<tr>";
            $colunas1 = array();
            $colunas1 = explode(";", $linha);
            foreach ($colunas1 as $coluna){
                echo "<td>$coluna</td>";
            }
            echo "</tr>";
        }
        ?>
</table>
</body>
</html>
