<?php
    session_start();

    include "conexao.php";
  
    include "cabecadmin.php";
    
?>
        <div class="container-fluid" id="corpo">
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
        </div>
    </body>
</html>
