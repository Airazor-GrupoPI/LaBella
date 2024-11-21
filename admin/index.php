<?php
    
    include "conexao.php";
    include "funcoes.php";

    autenticar();
  
    include "cabecadmin.php";
    
?>

        <div class="container-fluid" id="corpo">
            <h2>Manutenção de Produtos</h2>
            <div class="opcoes">
                <ul>
                    <li><a href="form_produto.php"   >> Cadastrar Produto</a></li>
                    <li><a href="listar_produtos.php">> Listar Produtos Cadastrados</a></li>
                </ul>
                <div class="labeln">
                    <p ><a href="logout.php">SAIR</a></p>
                </div>
            </div>
        </div> 
    </body>
</html>
