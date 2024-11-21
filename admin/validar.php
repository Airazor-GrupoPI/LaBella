                            <!-- Página sem Bootstrap -->
<?php
    session_start();

    include "funcoes.php";

    //Verifica se as informações digitadas estãp válidas
    //se não estiver, redirecionamos o usuário para a página de Login
    if(validar_admin($_POST["usuario"], $_POST["senha"])) {
        $_SESSION["admin"] = $_POST["usuario"];
        header("Location: http://localhost/fatecshop/admin/index.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ACESSO NEGADO</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <h1 style="color: red;">ACESSO NEGADO</h1>
        <p><a href="logout.php">Tentar novamente</a></p>
    </body>
</html>
