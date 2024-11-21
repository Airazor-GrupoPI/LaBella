<?php include "cabecalho.php"; ?>

<h2> Cadastro de novo cliente</h2>
<main>

    <form method="POST" action="cadastrar_cliente.php">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" size="50" maxlength="50" required>
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <textarea rows="4" cols="50" id="endereco" name="endereco" required></textarea>
        </div>
        <div>
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" required>
                <option value="">AM</option>
                <option value="">CE</option>
                <option value="">MG</option>
                <option value="">PE</option>
                <option value="">RJ</option>
                <option value="">PR</option>
                <option value="">GO</option>
                <option value="">AP</option>
                <option selected>SP</option>
            </select>
        </div>
        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" size="30" maxlength="30" required>
        </div>
        <div>
            <label for="cep">CEP:</label>
            <input type="text" name="cep" id="cep" size="09" maxlength="09" required>
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" id="telefone" size="14" maxlength="14" required>
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" size="30" maxlength="30" required>
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" size="12" minlength="4" maxlength="12" required>
        </div>
        <div id="div_botao">
            <button>Cadastrar</button>
        </div>
    </form>
</main>



