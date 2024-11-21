<?php
    session_start();

    include "../admin/conexao.php";
  
    include "cabecalho.php";
    
    $sql = "SELECT * from produtos";    // String com o comando SQL a ser executado
    $comando = $pdo->query($sql);       // Montamos e deixamos o comando SQL preparado
    $resultado = $comando->fetchAll();  // Executamos o comando $sql, nesse caso, todo o conteudo da tabela produto

?>
        <main>
            <h2>Lançamentos</h2>
            <section id="lancamentos">
                <?php foreach($resultado as $produto) {?>
                    <div class="card">
                        <img src="img/<?= $produto["codigo"] ?>.jpg" alt="<?= $produto["nome"] ?>">
                        <h3><a href="produto.php?codigo=<?=$produto["codigo"]?>"><?= $produto["nome"] ?></a></h3>
                        <p><?= $produto["descricao"] ?></p>
            <!-- Utilizando o number_format(variável, qtd casas decimais, separador de casa decimal, separador de milhares) -->
                        <span class="preco">R$ <?= number_format($produto["preco_unitario"],2 ,",",".") ?></span>
                    </div>
                <?php } ?>

            </section>
            
            <h2>Produtos em oferta</h2>
            <section id="ofertas">
                <div class="card">
                    <img src="img/impressora.jpg" alt="Impressora">
                    <h3>Impressora Deskjet HP</h3>
                    <p>O melhor custo benefício do mercado</p>
                    <span class="preco">R$ 299,90</span>
                </div>
                <div class="card">
                    <img src="img/notebook.png" alt="Notebook">
                    <h3>Notebook Lenovo i3 Gaming</h3>
                    <p>Notebook ideal para quem gosta de jogar</p>
                    <span class="preco">R$ 3.499,90</span>
                </div>
                <div class="card">
                    <img src="img/pendrive.jpg" alt="Pen Drive">
                    <h3>Pen Drive Kingston 32GB</h3>
                    <p>Armazene seus arquivos com segurança.</p>
                    <span class="preco">R$ 24,90</span>
                </div>
            </section>
        </main>
    <?php
        include "rodape.php";
    ?>
    </body>
</html>