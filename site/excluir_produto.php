<?php
    session_start();

    include "../admin/conexao.php";

    $sql  = "DELETE from carrinho where produto = :cod and sessao = :sessao"; 

    $codigo = intval(htmlspecialchars($_GET["codigo"]));
    $id     = session_id();

    $comando = $pdo->prepare($sql); 
    $comando->bindParam(":cod", $codigo);
    $comando->bindParam(":sessao", $id);

    $sucesso = $comando->execute();

    if ($sucesso){
        header("Location: carrinho.php");
    }

?>
<h1 style="color: red">FALHA NA EXCLUSÃO!</h1>
