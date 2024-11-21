                            <!-- AQUI TEM ESSA NHACA DE Bootstrap -->
<?php

    include "funcoes.php";

    autenticar();

    include "conexao.php";

    $sql = "select * from produtos";    // String com o comando SQL a ser executado
    $comando = $pdo->query($sql);       // Montamos e deixamos o comando SQL preparado
    $resultado = $comando->fetchAll();  // Executamos o comando $sql, nesse caso, todo o conteudo da tabela produto

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Listagem de Produtos</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <h1>Listagem de Produtos</h1>
        <table>
            <tr>
                <th class="text-center">Ações</th>
                <th class="text-center">Código</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Descrição</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Preço</th>
            </tr>
            <?php foreach($resultado as $produto) { ?>
            <tr>
                <td><a href="form_alterar_produto.php?codigo=<?= $produto["codigo"]?>">
                    <span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#">&nbsp;|&nbsp;</a>
                    <a href="excluir_produto.php?codigo=<?= $produto["codigo"]?>">
                    <span class="glyphicon glyphicon-trash"></span></a></td>
                <td><?= $produto["codigo"]?></td>
                <td><?= $produto["nome"]?></td>
                <td><?= $produto["descricao"]?></td>
                <td><?= $produto["categoria"]?></td>
                <td><?= $produto["preco_unitario"]?></td>
            </tr>
            <?php } ?>
        </table>
        <div class="botao">
            <button><a href="index.php">Voltar ao MENU</a></button>
        </div>
    </body>

</html>

