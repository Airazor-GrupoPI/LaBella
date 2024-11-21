<?php
    session_start();

    include "admin/conexao.php";

    $email = htmlspecialchars($_POST["email"]);
    $senha = md5(htmlspecialchars($_POST["senha"]));

    $sql = "SELECT * FROM clientes WHERE email = :em AND senha = :sen;";

    $comando = $pdo->prepare($sql);
    $comando->bindParam(":em", $email);
    $comando->bindParam(":sen", $senha);
    $comando->execute();
    $res = $comando->fetch();

    if (isset($res["codigo"])){
        $_SESSION["codigo"] = $res["codigo"];
        $_SESSION["nome"] = $res["nome"];
        header("Location: index.php");
    }

    include "cabecalho.php";
?>
        <main>
            <p>Usuário não cadastrado ou senha inválida</p>
            <p><a href="login.php">Clique aqui para tentar novamente</a></p>
        </main>

<?php include "rodape.php" ?>