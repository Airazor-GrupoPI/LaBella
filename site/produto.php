<?php
    session_start();

    include "admin/conexao.php";

    $codigo = htmlspecialchars($_GET["codigo"]);

    $sql = "SELECT * FROM produtos WHERE codigo = :cod";    // String com o comando SQL a ser executado
    $comando = $pdo->prepare($sql);                         // Montamos e deixamos o comando SQL preparado
    $comando->bindParam(":cod", $codigo);
    $comando->execute();                                    // Executamos o comando $sql
    $res = $comando->fetch();                               // Obtemos o registro como um array associativo

    include "cabecalho.php";
?>
        <main>
            <h2><?= $res["categoria"] ?></h2>
            <section id="produto">
                <div id="fotos-produto">
                    <img src="img/<?= $res["codigo"] ?>.jpg" class="img-produto-grande" alt="<?= $res["nome"] ?>">
                </div>
                <div id="dados-produto">
                    <h3><?= $res["nome"] ?></h3>
                    <span class="preco">R$ <?= number_format($res["preco_unitario"], 2, ",", ".") ?> <del>R$ <?= number_format($res["preco_unitario"] + 0.5 * $res["preco_unitario"], 2, ",", ".") ?></del></span>
                    <p><?= $res["descricao"] ?></p>
                    <button><a href="adicionar_produto.php?codigo=<?= $res["codigo"] ?>">Adicionar ao carrinho</a></button>
                </div>
            </section>
        </main>
        <?php
            include "rodape.php";
        ?>
<!--        <script src="js/script.js"> </script> -->
    </body>
</html>