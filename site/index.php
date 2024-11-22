<?php
session_start();

include "../admin/conexao.php";

include "cabecalho.php";

$sql = "SELECT * from produtos where categoria not like 'Combo' and categoria not like 'Promoção'";    // String com o comando SQL a ser executado
$sqlc = "SELECT * from produtos where categoria like 'Combo'";
$sqlp = "SELECT * from produtos where categoria like 'Promoção'";

$comando = $pdo->query($sql);       // Montamos e deixamos o comando SQL preparado
$comandoc = $pdo->query($sqlc);
$comandop = $pdo->query($sqlp);

$resultado = $comando->fetchAll();  // Executamos o comando $sql, nesse caso, todo o conteudo da tabela produto
$resultadoc = $comandoc->fetchAll();
$resultadop = $comandop->fetchAll();

?>
<main class="container-fluid">
    <div class="ofertas">
        <div>
            <h2>Combo</h2>
            <section id="lancamentos">
                <?php foreach ($resultadoc as $produto) { ?>
                    <div class="card">
                        <img src="img/<?= $produto["codigo"] ?>.png" alt="<?= $produto["nome"] ?>">
                        <h3><a href="produto.php?codigo=<?= $produto["codigo"] ?>"><?= $produto["nome"] ?></a></h3>
                        <p><?= $produto["descricao"] ?></p>
                        <!-- Utilizando o number_format(variável, qtd casas decimais, separador de casa decimal, separador de milhares) -->
                        <span class="preco">R$ <?= number_format($produto["preco_unitario"], 2, ",", ".") ?></span>
                    </div>
                <?php } ?>
            </section>
        </div>
        <div>
            <h2>Promoção</h2>
            <section id="lancamentos">
                <?php foreach ($resultadop as $produto) { ?>
                    <div class="card">
                        <img src="img/<?= $produto["codigo"] ?>.png" alt="<?= $produto["nome"] ?>">
                        <h3><a href="produto.php?codigo=<?= $produto["codigo"] ?>"><?= $produto["nome"] ?></a></h3>
                        <p><?= $produto["descricao"] ?></p>
                        <!-- Utilizando o number_format(variável, qtd casas decimais, separador de casa decimal, separador de milhares) -->
                        <span class="preco">R$ <?= number_format($produto["preco_unitario"], 2, ",", ".") ?></span>
                    </div>
                <?php } ?>
            </section>
        </div>
    </div>

    <div>
        <h2>Catálogo de produtos</h2>
        <section id="ofertas">
            <?php foreach ($resultado as $produto) { ?>
                <div class="card">
                    <img src="img/<?= $produto["codigo"] ?>.png" alt="<?= $produto["nome"] ?>">
                    <h3><a href="produto.php?codigo=<?= $produto["codigo"] ?>"><?= $produto["nome"] ?></a></h3>
                    <p><?= $produto["descricao"] ?></p>
                    <!-- Utilizando o number_format(variável, qtd casas decimais, separador de casa decimal, separador de milhares) -->
                    <span class="preco">R$ <?= number_format($produto["preco_unitario"], 2, ",", ".") ?></span>
                </div>
            <?php } ?>
        </section>
    </div>
</main>
<?php
include "rodape.php";
?>
</body>

</html>