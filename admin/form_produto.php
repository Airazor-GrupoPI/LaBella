<?php
    session_start();

    include "conexao.php";
  
    include "cabecadmin.php";
    
?>

        <div class="cabeca">
            <h2>Cadastrar Produto</h2>
        </div>
        <div class="container-fluid" id="cad_pro">
        <form action="cadastrar_produto.php" method="POST">
            <div>
                <label for="nome">Produto: </label>
                <input type="text" id="nome" name="nome" size="50" maxlength="50" required>
            </div>
            <div>
                <label for="descricao">Ingredientes: </label>
                <textarea name="descricao" id="descricao" rows="4" cols="50" maxlength="200" required></textarea>
            </div>
            <div>
                <label for="categoria">Categoria: </label>
                <select id="categoria" name="categoria" required>
                    <option>Pizza</option>
                    <option>Refrigerante</option>
                    <option>Combo</option>
                </select>
            </div>
            <div>
                <label for="preco">Preço: R$ </label>
                <input type="number" id="preco" name="preco" step="any" required>
            </div>
            <!-- Quando <button> é colocado dentro do FORM, automaticamente ele será o SUBMIT desse FORM-->
            <div class="botao">
                <button>Cadastrar</button>
            </div>
        </form>
        <div class="labeln">
            <a href="index.php">RETORNAR</a>
        </div>
        </div>
    </body>
</html>
