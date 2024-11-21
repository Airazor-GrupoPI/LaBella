<?php
    session_start();

    include "admin/conexao.php";

    $sql = "DELETE FROM carrinho WHERE produto = :code AND sessao = :sessao"; 

    $codigo = intval(htmlspecialchars($_GET["codigo"]));
    $id = session_id();

    $comando = $pdo->prepare($sql);
    $comando->bindParam(":code", $codigo);
    $comando->bindParam(":sessao", $id);

    $sucesso = $comando->execute();

    if ($sucesso){
        header("Location: http://localhost/fatecshop/carrinho.php");
    }
?>