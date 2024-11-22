<?php

    include "funcoes.php";

    autenticar();

    include "conexao.php";

    $sql = "UPDATE produtos SET nome = :nome, descricao = :desc, categoria = :cat, preco_unitario = :preco WHERE codigo = :cod";

    $cod = htmlspecialchars($_POST["codigo"]);
    $preco = floatval(htmlspecialchars($_POST["preco"])); // Convertemos o preço de string para float
    $nome = htmlspecialchars($_POST["nome"]);
    $desc = htmlspecialchars($_POST["descricao"]);
    $cat = htmlspecialchars($_POST["categoria"]);

    $comando = $pdo->prepare($sql);
    $comando->bindParam(":cod", $cod);
    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":desc", $desc );
    $comando->bindParam(":cat", $cat);
    $comando->bindParam(":preco", $preco);

    $sucesso = $comando->execute();

    if ($sucesso) {
        header("Location: http://localhost/LaBella/admin/listar_produtos.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FatecShop - Admin</title>
        <link rel="stylesheet" href="css/estiloadm.css">
    </head>
    <body>
        <h1>FatecShop - Área Administrativa</h1>
        <h2>Alterar Produto</h2>
        <h1 style="color: red">FALHA NA ALTERAÇÃO</h1>
    </body>
</html>
