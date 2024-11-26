<?php 
    session_start();
    include "../admin/conexao.php";
    include "cabecalho.php";

    $sql = "SELECT  p.nome      as nomeproduto, p.preco_unitario as preco,
                    p.categoria as categoria,   c.quantidade     as quantidade,
                    c.produto   as codigo 
            from carrinho c inner join produtos p 
            on c.produto = p.codigo 
            where c.sessao = :sessao
            order by p.categoria";

    $id = isset($_SESSION["id"]) ? $_SESSION["id"] : session_id();

    $comando = $pdo->prepare($sql);
    $comando->bindParam(":sessao", $id);
    $comando->execute();
    $res = $comando->fetchAll();

    $soma = 0;
    foreach ($res as $preco){
        $soma += $preco["preco"];
    }
?>

        <main id="boxFinaliza">
            <?php foreach ($res as $produto) { ?>
                <div class="card cardFinaliza">
                    <img src="img/<?= $produto["codigo"] ?>.png" alt="">
                    <p><?= $produto["nomeproduto"] ?></p>
                    <p><?= number_format($produto["preco"], 2, ",", ".") ?></p>
                    <p><?= $produto["categoria"] ?></p>
                    <p><?= $produto["quantidade"] ?></p>
                </div>
            <?php } ?>
            <p id="valorFinal">Valor final => R$ <?= number_format($soma, 2, ",", ".") ?></p>
            <textarea name="" id="" placeholder="Observações"></textarea>
            <div>
                <a href="limpa_carrinho.php"><button type="submit">Finalizar pedido</button></a>
            </div>
        </main>

<?php include "rodape.php" ?>