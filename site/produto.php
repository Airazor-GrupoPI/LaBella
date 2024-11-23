<?php
session_start();

include "../admin/conexao.php";

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
            <img src="img/<?= $res["codigo"] ?>.png" class="img-produto-grande" alt="<?= $res["nome"] ?>">
        </div>
        <div id="dados-produto">
            <h3><?= $res["nome"] ?></h3>
            <p class="preco"><span>Preço: </span>R$ <?= number_format($res["preco_unitario"], 2, ",", ".") ?> <?= $res["categoria"] == "Promoção" ? "<del>R$ " . number_format($res["preco_unitario"] + 0.5 * $res["preco_unitario"], 2, ",", ".") . "</del>" : "" ?></p>
            <p><span>Descrição:</span> <?= $res["descricao"] ?></p>
            <div id="botaoProduto">
                <a href="adicionar_produto.php?codigo=<?= $res["codigo"] ?>"><button>Adicionar ao carrinho</button></a>
            </div>
        </div>
    </section>
</main>
<?php
include "rodape.php";
?>
</body>

</html>