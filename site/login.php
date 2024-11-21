<?php include "cabecalho.php"; ?>

<body id="body">

    <main class="d-flex justify-content-center">
    <!--
        <h2>Login na loja</h2>
        <div style="display: flex; justify-content:center">
            <form style="width: 400px;" action="validar_cliente.php" method="POST">
                <div>
                    <label for="email">E-mail de acesso:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="senha">Senha de acesso:</label>
                    <input type="password" id="senha" name="senha">
                </div>
                <div>
                    <button style="height: 40px; width: 60px; font-size: 16px; padding: 8px">Entrar</button>
                </div>
            </form>
        </div>
    </main>
    -->


        <form action="validar_cliente.php" method="POST" id="login" class="col-sm-6 col-md-5 col-lg-4">
            <h1 class="text-center mb-4">Login</h1>
            <input class="form-control mb-3" type="text" placeholder="Usuário" id="user" name="user">
            <input class="form-control mb-4" type="password" placeholder="Senha" id="senha" name="senha">
            <button id="botao" class="btn col-12" type="submit">Entrar</button>
        </form>
    </main>

<?php include "rodape.php"; ?>