<?php
session_start();

include "../admin/conexao.php";
include "cabecalho.php";

$sql = "SELECT * FROM produtos WHERE categoria NOT LIKE 'Combo' AND categoria NOT LIKE 'Promoção'";
$sqlc = "SELECT * FROM produtos WHERE categoria LIKE 'Combo'";
$sqlp = "SELECT * FROM produtos WHERE categoria LIKE 'Promoção'";

$comando = $pdo->query($sql);
$comandoc = $pdo->query($sqlc);
$comandop = $pdo->query($sqlp);

$resultado = $comando->fetchAll();
$resultadoc = $comandoc->fetchAll();
$resultadop = $comandop->fetchAll();
?>
<main class="container-fluid py-4">
    <div class="container">
        <div class="row">
            <div class="col-6 mb-4">
                <h2 class="text-center">Combo</h2>
                <div class="d-flex flex-wrap justify-content-around" id="lancamentos">
                    <?php foreach ($resultadoc as $produto) { ?>
                        <div class="card p-3 m-2">
                            <img src="img/<?= $produto["codigo"] ?>.png" class="card-img-top" alt="<?= $produto["nome"] ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="produto.php?codigo=<?= $produto["codigo"] ?>"><?= $produto["nome"] ?></a></h5>
                                <p class="card-text"><?= $produto["descricao"] ?></p>
                                <p class="preco">R$ <?= number_format($produto["preco_unitario"], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-6 mb-4">
                <h2 class="text-center">Promoção</h2>
                <div class="d-flex flex-wrap justify-content-around" id="lancamentos">
                    <?php foreach ($resultadop as $produto) { ?>
                        <div class="card p-3 m-2" style="width: 18rem;">
                            <img src="img/<?= $produto["codigo"] ?>.png" class="card-img-top" alt="<?= $produto["nome"] ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="produto.php?codigo=<?= $produto["codigo"] ?>"><?= $produto["nome"] ?></a></h5>
                                <p class="card-text"><?= $produto["descricao"] ?></p>
                                <p class="preco">R$ <?= number_format($produto["preco_unitario"], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="text-center">Catálogo de produtos</h2>
            <div class="d-flex flex-wrap justify-content-around" id="ofertas">
                <?php foreach ($resultado as $produto) { ?>
                    <div class="card p-3 m-2" style="width: 18rem;">
                        <img src="img/<?= $produto["codigo"] ?>.png" class="card-img-top" alt="<?= $produto["nome"] ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href="produto.php?codigo=<?= $produto["codigo"] ?>"><?= $produto["nome"] ?></a></h5>
                            <p class="card-text"><?= $produto["descricao"] ?></p>
                            <p class="preco">R$ <?= number_format($produto["preco_unitario"], 2, ",", ".") ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<?php include "rodape.php"; ?>