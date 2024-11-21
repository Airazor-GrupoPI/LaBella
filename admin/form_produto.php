                            <!-- Página sem Bootstrap -->
<?php

    include "funcoes.php";

    autenticar();

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
        <h2>Cadastrar Produto</h2>
        <form class="form_prod" action="cadastrar_produto.php" method="POST">
            <div>
                <label for="nome">Nome do Produto: </label>
                <input type="text" id="nome" name="nome" size="50" maxlength="50" required>
            </div>
            <div>
                <label for="descricao">Descrição do Produto: </label>
                <textarea name="descricao" id="descricao" rows="4" cols="50" maxlength="200" required></textarea>
            </div>
            <div>
                <label for="categoria">Categoria: </label>
                <select id="categoria" name="categoria" required>
                    <option>CD</option>
                    <option>DVD</option>
                    <option>Informática</option>
                    <option>Game</option>
                    <option>CDLivro</option>
                </select>
            </div>
            <div>
                <label for="preco">Preço do Produto: R$ </label>
                <input type="number" id="preco" name="preco" step="any" required>
            </div>
            <!-- Quando <button> é colocado dentro do FORM, automaticamente ele será o SUBMIT desse FORM-->
            <div class="botao">
                <button>Cadastrar</button>
            </div>
        </form>
        <p><a href="index.php">Clique aqui para RETORNAR</a></p>
    </body>
</html>
