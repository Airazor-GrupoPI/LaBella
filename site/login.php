<?php 
session_start();
include "cabecalho.php"; 
?>

<body id="body">

    <main id="boxLogin" class="d-flex justify-content-center">
        <form action="validar_cliente.php" method="POST" id="loginCliente" class="col-sm-6 col-md-5 col-lg-4">
            <h1 class="text-center mb-4">Login</h1>
            <input class="form-control mb-3" type="text" placeholder="Usuário" id="user" name="user">
            <input class="form-control mb-4" type="password" placeholder="Senha" id="senha" name="senha">
            <div id="botaoLogin">
                <button class="btn col-12" type="submit">Entrar</button>
            </div>
            <p>Não tem cadastro? <a href="form_cadastro_cliente.php">Cadastre-se</a></p>
        </form>
    </main>

    <?php include "rodape.php"; ?>