                            <!-- Página sem Bootstrap -->
<?php

    include "funcoes.php";

    autenticar();

    include "conexao.php";

    $sql  = "DELETE from produtos where codigo = :code"; 

        //PARA EVITAR O XSS (CROS SITE SCRIPT) DE HTML E JavaScript NUM FORM, USAR O "htmlspecialchars()"
    $codigo     = intval(htmlspecialchars($_GET["codigo"]));

        // Comando de preparação para enviar ao Banco de Dados
    $comando = $pdo->prepare($sql); 

        //PARA EVITAR A INJEÇÃO DE SQL NUM FORM, USAR O "bindParam"
        // Fazer a ligação dos valores obtidos no formulario com os campos
    $comando->bindParam(":code", $codigo);

    $sucesso = $comando->execute();

    if ($sucesso){
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
        <h2>Cadastrar Produto</h2>
        <h1 style="color: red">FALHA NA INCLUSÃO</h1>
    </body>
</html>
