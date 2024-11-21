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
        <div class="index">
            <h1>FatecShop - Área Administrativa</h1>
            <ul>
                <li><a href="form_produto.php">Cadastrar Produto</a></li>
                <li><a href="listar_produtos.php">Listar Produtos Cadastrados</a></li>
            </ul>
            <p><a href="logout.php">Clique aqui para SAIR</a></p>
        </div> 
    </body>
</html>
