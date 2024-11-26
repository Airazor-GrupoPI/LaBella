<?php include "cabecalho.php"; ?>

<main id="boxCadastro">

    <form method="POST" id="cadastroCliente" action="cadastrar_cliente.php">
        <h1 class="text-center mb-4">Cadastro de cliente</h1>
        <input type="text" id="nome" name="nome" placeholder="Nome" size="50" maxlength="50" required>
        <textarea rows="4" cols="50" id="endereco" name="endereco" placeholder="Endereço" required></textarea>
        <select name="estado" id="estado" required>
            <option value="NaN">Selecione seu Estado</option>
            <option value="Amazonas">AM</option>
            <option value="Ceará">CE</option>
            <option value="Minas Gerais">MG</option>
            <option value="Pernambuco">PE</option>
            <option value="Rio de Janeiro">RJ</option>
            <option value="Parana">PR</option>
            <option value="Goias">GO</option>
            <option value="Amapá">AP</option>
            <option value="São Paulo">SP</option>
        </select>
        <input type="text" name="cidade" id="cidade" placeholder="Cidade" size="30" maxlength="30" required>
        <input type="text" name="cep" id="cep" placeholder="CEP" size="09" maxlength="09" required>
        <input type="tel" name="telefone" id="telefone" placeholder="Telefone" size="14" maxlength="14" required>
        <input type="email" name="email" id="email" placeholder="E-Mail" size="30" maxlength="30" required>
        <input type="password" name="senha" id="senha" placeholder="Senha" size="12" minlength="4" maxlength="12" required>
        <div id="botaoCadastro">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</main>

<?php include "rodape.php"; ?>