<?php
    $senha = md5($_POST["senha"]);

    $sqlLogin = "SELECT * FROM clientes ORDER BY identificadorTurma ASC;";
    $stmtTurmas = $pdo->prepare($sqlTurmas);
    $stmtTurmas->execute();
    $turmas = $stmtTurmas->fetchAll(PDO::FETCH_ASSOC);
?>