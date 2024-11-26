<?php
    session_start();

    include "../admin/conexao.php";

        // Obtendo o código do produto a alterar
        // htmlspecialchars para filtrar injeção de código
    $codigo = htmlspecialchars(($_GET["codigo"]));

    $sql = "INSERT into carrinho values (:sessao, :prod, 1)"; //Inserindo a quantidade de produtos no carrinho
    $comando = $pdo->prepare($sql);
    $id = isset($_SESSION["id"]) ? $_SESSION["id"] : session_id();
    $comando->bindParam(":sessao", $id);                            // Montamos e deixamos o comando SQL preparado
    $comando->bindParam(":prod", $codigo);
    $res = $comando->execute();                                     // Obtemos o registro como um array associativo

    if ($res){
        header("Location: carrinho.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FatecShop - Admin</title>
        <link rel="stylesheet" href="css/estilosite.css">
    </head>
    <body>
        <h1>FatecShop - Área Administrativa</h1>
        <h2>Adicionar ao carrinho</h2>
        <h1 style="color: red">FALHA AO ADICIONAR O PRODUTO AO CARRINHO</h1>
    </body>
</html>


