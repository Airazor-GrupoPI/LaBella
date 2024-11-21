<?php
    include "funcoes.php";

    autenticar();

    include "conexao.php";

    $codigo = htmlspecialchars($_GET["codigo"]);

    $sql = "select * from produtos where codigo = :cod";    // String com o comando SQL a ser executado
    $comando = $pdo->prepare($sql);                         // Montamos e deixamos o comando SQL preparado
    $comando->bindParam(":cod", $codigo);                   
    $comando->execute();                                    // Executamos o comando $sql
    $res = $comando->fetch();                               // Obtemos o registro como um array associativo
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FatecShop - Admin</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <h1>FatecShop - Área Administrativa</h1>
        <h2>Cadastro de Produto</h2>
        <form class="form_prod" action="cadastrar_produto.php" method="POST">
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
                    <option <?= $res["categoria"] == "CD" ? "selected" : "" ?>>CD</option>
                    <option <?= $res["categoria"] == "DVD" ? "selected" : "" ?>>DVD</option>
                    <option <?= $res["categoria"] == "Informática" ? "selected" : "" ?>>Informática</option>
                    <option <?= $res["categoria"] == "Game" ? "selected" : "" ?>>Game</option>
                    <option <?= $res["categoria"] == "CDLivro" ? "selected" : "" ?>>CDLivro</option>
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
        <p><a href="index.php">Clique aqui para RETORNAR</a></p>
    </body>
</html>

