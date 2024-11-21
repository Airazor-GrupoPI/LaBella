<?php
    session_start();

    include "cabecalho.php";
    include "../admin/conexao.php";

    $sql = "SELECT  p.nome      as nomeproduto, p.preco_unitario as preco,
                    p.categoria as categoria,   c.quantidade     as quantidade,
                    c.produto   as codigo 
            from carrinho c inner join produtos p 
            on c.produto = p.codigo 
            where c.sessao = :sessao ";
    
    $id = session_id();

    $comando = $pdo->prepare($sql);
    $comando->bindParam(":sessao", $id);
    $comando->execute();
    $res = $comando-> fetchAll();
?>
    <main>
        <h2>Seu carrinho de compras</h2>

        <table>
            <tr>
                <th></th>
                <th>Nome</th><th>Categoria</th><th>Quantidade</th><th>Preço</th>
            </tr>
            <?php foreach($res as $produto) {?>
                <tr>
                    <td><a href="excluir_produto.php?codigo=<?= $produto["codigo"]?>">Remover</a></td>
                    <td><?= $produto["nomeproduto"]?></td>
                    <td><?= $produto["categoria"]?></td>
                    <td><?= $produto["quantidade"]?></td>
                    <td>
                        <?= number_format($produto["preco"], 2, ",", ".") ?>
                    </td>
                </tr>
            <?php }?>
        </table>
    </main>

    <?php include "rodape.php" ?>
