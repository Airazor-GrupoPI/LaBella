<?php
    session_start();

    include "admin/conexao.php";

    $codigo = htmlspecialchars($_GET["codigo"]);

    $sql = "INSERT INTO carrinho VALUES (:sessao, :prod, NULL, 1);";
    $comando = $pdo->prepare($sql);
    $id = session_id();
    $comando->bindParam(":sessao", $id);
    $comando->bindParam(":prod", $codigo);
    $resultado = $comando->execute();

    if ($resultado){
        header("Location: carrinho.php");
    }
?>
<h1 style="color: red">FALHA AO ADICIONAR O PRODUTO AO CARRINHO</h1>