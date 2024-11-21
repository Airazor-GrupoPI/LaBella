<?php include "cabecalho.php" ?>

        <main>
            <h2>Cadastro de Novo Cliente</h2>
            <form action="cadastrar_cliente.php" method="POST">
                <div>
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome" size="50" maxlength="50" required>
                </div>
                <div>
                    <label for="endereco">Endereço: </label>
                    <textarea name="endereco" id="endereco" cols="50" rows="4" required></textarea>
                </div>
                <div>
                    <label for="estado">Estado: </label>
                    <select name="estado" id="estado" required>
                        <option value="am">AM</option>
                        <option value="ce">CE</option>
                        <option value="mg">MG</option>
                        <option value="pe">PE</option>
                        <option value="rj">RJ</option>
                        <option value="sp" selected>SP</option>
                    </select>
                </div>
                <div>
                    <label for="cidade">Cidade: </label>
                    <input type="text" name="cidade" id="cidade" size="30" maxlength="30" required>
                </div>
                <div>
                    <label for="cep">CEP: </label>
                    <input type="text" name="cep" id="cep" size="10" maxlength="10" required>
                </div>
                <div>
                    <label for="telefone">Telefone: </label>
                    <input type="tel" name="telefone" id="telefone" size="15" maxlength="15" required>
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" size="30" maxlength="30" required>
                </div>
                <div>
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha" id="senha" minlength="6" maxlength="12" required>
                </div>
                <div id="div_botao">
                    <button>Cadastrar</button>
                </div>
            </form>
        </main>

<?php include "rodape.php" ?>