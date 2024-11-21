<?php
    session_start();

    unset($_SESSION["nome"]);
    unset($_SESSION["codigo"]);

    header("Location: index.php");
?>