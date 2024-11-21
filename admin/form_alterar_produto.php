<?php
    include "funcoes.php";

    autenticar();

    include "conexao.php";

    $codigo = htmlspecialchars(($_GET["codigo"]));

    $sql = "SELECT * from produtos where codigo = :cod";    // String com o comando SQL a ser executado
    $comando = $pdo->prepare($sql);                         // Montamos e deixamos o comando SQL preparado
    $comando->bindParam(":cod", $codigo);                   
    $comando->execute();                                    // Executamos o comando $sql
    $res = $comando->fetch();                               // Obtemos o registro como um array associativo

    include "cabecadmin.php";
?>

        <div class="cabeca">
            <h2>Alterar Produto</h2>
        </div>
        <div class="container-fluid" id="cad_pro">
            <form class="form_prod" action="alterar_produto.php" method="POST">
                <div>
                    <label for="nome">Nome do Produto: </label>
                    <input type="text" id="nome" name="nome" value="<?= $res["nome"]?>" size="50" maxlength="50" required>
                    <input type="hidden" name="codigo" value="<?= $res["codigo"]?>">
                </div>
                <div>
                    <label for="descricao">Descrição do Produto: </label>
                    <textarea name="descricao" id="descricao" rows="4" cols="50" maxlength="200" required><?= $res["descricao"]?></textarea>
                </div>
                <div>
                    <label for="categoria">Categoria: </label>
                    <select id="categoria" name="categoria" required>
                        <option <?= $res["categoria"] == "Pizza"        ? "selected" : "" ?>>Pizza</option>
                        <option <?= $res["categoria"] == "Refrigerante" ? "selected" : "" ?>>Refrigerante</option>
                        <option <?= $res["categoria"] == "Combo"        ? "selected" : "" ?>>Combo</option>
                    </select>
                </div>
                <div>
                    <label for="preco">Preço do Produto: R$ </label>
                    <input type="number" id="preco" name="preco" value="<?= $res["preco_unitario"] ?>" step="any" required>
                </div>
                <!-- Quando <button> é colocado dentro do FORM, automaticamente ele será o SUBMIT desse FORM-->
                <div class="botao">
                    <button>Alterar</button>
                </div>
            </form>
        </div>
        <div class="labeln">
            <a href="index.php">Clique aqui para RETORNAR</a>
        </div>
    </body>
</html>

