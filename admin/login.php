<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FatecShop - Admin</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <h1>FatecShop - Área Administrativa</h1>
        <h2>Login</h2>
        <form method="POST" action="validar.php">
            <div>
                <label for="usuario">Nome:</label>
                <input type="text" id="usuario" name="usuario" size="15" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" size="15" required>
            </div>
            <div class="botao">
                <button>Entrar</button>
            </div>
        </form>
    </body>
</html>
