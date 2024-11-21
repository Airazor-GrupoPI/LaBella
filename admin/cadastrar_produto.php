
<?php

    include "funcoes.php";

    autenticar();

    include "conexao.php";

    $sql  = "INSERT into produtos (nome, descricao, categoria, preco_unitario) values (:nome, :desr, :cate, :prec)";  // Se precisar quebrar a linha dá para concatenar

        //PARA EVITAR O XSS (CROS SITE SCRIPT) DE HTML E JavaScript NUM FORM, USAR O "htmlspecialchars()"
    $nome       = htmlspecialchars($_POST["nome"]);
    $descricao  = htmlspecialchars($_POST["descricao"]);
    $categoria  = htmlspecialchars($_POST["categoria"]);
    $preco      = floatval(htmlspecialchars($_POST["preco"])); //Sempre converter os valores numericos antes de passar para o comando
    
    $comando = $pdo->prepare($sql); // Comando de preparação para enviar ao Banco de Dados

        //PARA EVITAR A INJEÇÃO DE SQL NUM FORM, USAR O "bindParam"
    $comando->bindParam(":nome", $nome);// Fazer a ligação dos valores obtidos no formulario com os campos
    $comando->bindParam(":desr", $descricao);
    $comando->bindParam(":cate", $categoria);
    $comando->bindParam(":prec", $preco); 

    $sucesso = $comando->execute();

    if ($sucesso){
        header("Location: http://localhost/Servidor/pizzaria/admin/listar_produtos.php");
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
        <h2>Cadastrar Produto</h2>
        <h1 style="color: red">FALHA NA INCLUSÃO</h1>
    </body>
</html>
