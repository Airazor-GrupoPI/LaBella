<?php
    session_start();

    include "cabecalho.php";

    if (isset($_SESSION["nome"])){ 
?>
        <main>
            <h2>Área do cliente</h2>
            <h3><?= $_SESSION["nome"] ?></h3>
            <ul>
                <li>Meu cadastro</li>
                <li>Meus pedidos</li>
                <li><a href="logout.php">SAIR</a></li>
            </ul>
        </main>

<?php } else { ?>

        <main>
            <h2>Login na loja</h2>
            <div style="display: flex; justify-content: center;">
                <form style="width: 25em;" action="validar_cliente.php" method="POST">
                    <div>
                        <label for="email">E-mail de acesso: </label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="senha">Senha de acesso: </label>
                        <input type="password" id="senha" name="senha" required>
                    </div>
                    <div>
                        <button style="height: 40px; width: 60px; font-size: 16px; padding: 8px; background-color: #aa0044; color: white; border-radius: 6px; border: none; cursor: pointer;" type="submit">Entrar</button>
                    </div>
                </form>
            </div>
        </main>
<?php } ?>

<?php include "rodape.php" ?>