<?php
    session_start();

    include "admin/conexao.php";

    $codigo = htmlspecialchars($_GET["codigo"]);

    $sql = "select * from produtos where codigo = :cod";
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":cod", $codigo);                   
    $comando->execute();
    $res = $comando->fetch();

    include "cabecalho.php";
?>

        <main>
            <h2><?= $res["categoria"]?></h2>
            <section id="produto">
                <div id="fotos-produto">
                    <img src="img/<?= $res['codigo'] ?>.jpg" class="img-produto-grande" alt="<?= $res["nome"] ?>">
                    <!--
                    <div id="fotos-miniatura">
                        <img src="img/produto-pequeno-1.png" class="img-produto-pequeno">
                        <img src="img/produto-pequeno-2.png" class="img-produto-pequeno">
                        <img src="img/produto-pequeno-3.png" class="img-produto-pequeno">
                        <img src="img/produto.png" class="img-produto-pequeno">
                    </div>
                    -->
                </div>
                <div id="dados-produto">
                    <h3><?= $res["nome"] ?></h3>
                    <span class="preco">R$ <?= number_format($res["preco_unitario"], 2, ",", ".") ?> <del>R$ <?= number_format($res["preco_unitario"] * 1.5, 2, ",", ".") ?></del></span>
                    <p><?= $res["descricao"] ?></p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est placeat possimus deleniti, accusantium labore optio delectus culpa facere eligendi animi, natus at voluptatum veritatis vero explicabo accusamus dolorem doloremque qui.</p>
                    <!--
                    <div class="tamanhos">
                        <span>Tamanhos disponíveis:</span>
                        <select id="tamanho">
                            <option>P</option>
                            <option>M</option>
                            <option>G</option>
                            <option>XG</option>
                        </select>
                    </div>
                    <div class="quantidade">
                        <input type="number" value="1" min="1">
                        <button>Adicionar ao carrinho</button>
                    </div>
                    -->
                    <button id="adcCarrinho"><a href="adicionar_produto.php?codigo=<?= $res["codigo"] ?>">Adicionar ao carrinho</a></button>
                </div>
            </section>
        </main>
       
<?php
    include "rodape.php"
?>