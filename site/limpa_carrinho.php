<?php 
    session_start();
    include "../admin/conexao.php";
    include "cabecalho.php";

    $sql = "SELECT  c.sessao as sessao 
            from carrinho c";

    $comando = $pdo->prepare($sql);
    $comando->execute();
    $res = $comando->fetchAll();

    for ($i = 0; $i < count($res); $i++){
        $delete = "DELETE FROM carrinho WHERE sessao LIKE '" . $_SESSION["id"] . "'";
        $deletando = $pdo->prepare($delete);
        $deletando->execute();
    }

    header("Location: index.php");
?>