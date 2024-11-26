<?php
    include "../admin/conexao.php";

    $senha = md5($_POST["senha"]);

    $sqlLogin = "SELECT c.codigo, c.nome, c.senha FROM clientes c ORDER BY codigo ASC;";
    $comando = $pdo->prepare($sqlLogin);
    $comando->execute();
    $clientes = $comando->fetchAll(PDO::FETCH_ASSOC);

    foreach ($clientes as $cliente){
        if ($senha == $cliente["senha"] && $_POST["user"] == $cliente["nome"]){
            session_start();
            $_SESSION["id"] = $cliente["codigo"];
            $_SESSION["nome"] = $cliente["nome"];

            header("Location: index.php");
        } else{
            echo "Algo deu errado!";
        }
    }
?>