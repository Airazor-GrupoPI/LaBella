<?php
    session_start();

    include "cabecalho.php";

    include "admin/conexao.php";

    $sql = "SELECT p.nome AS nomeProduto, p.preco_unitario AS preco, p.categoria AS categoria, c.quantidade AS quantidade, c.produto AS codigo
            FROM carrinho c INNER JOIN produtos p
            ON c.produto = p.codigo
            WHERE c.sessao = :sessao;";

    $id = session_id();

    $comando = $pdo->prepare($sql);
    $comando->bindParam(":sessao", $id);
    $comando->execute();
    $res = $comando->fetchAll();
?>

        <main>
            <h2>Seu carrinho de compras</h2>
            <table border=1>
                <tr>
                    <th>Ação</th><th>Nome</th><th>Categoria</th><th>Quantidade</th><th>Preço</th>
                </tr>
                    <?php foreach($res as $produto){ ?>
                        <tr>
                            <td><a href="excluir_produto.php?codigo=<?= $produto["codigo"] ?>">Remover</a></td>
                            <td><?= $produto["nomeProduto"] ?></td>
                            <td><?= $produto["categoria"] ?></td>
                            <td><?= $produto["quantidade"] ?></td>
                            <td><?= number_format($produto["preco"], 2, ",", ".") ?></td>
                        </tr>
                    <?php } ?>
            </table>
        </main>

<?php
    include "rodape.php";
?>