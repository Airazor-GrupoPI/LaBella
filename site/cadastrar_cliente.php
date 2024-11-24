<?php

    include "../admin/conexao.php";

    $sql  = "INSERT into clientes (nome, endereco, cidade, estado, cep, telefone, email, senha)"; 
    $sql .= "values (:nome, :ende, :cida, :esta, :cepe, :tele, :emai, :senh)";  // Se precisar quebrar a linha dá para concatenar

        //PARA EVITAR O XSS (CROS SITE SCRIPT) DE HTML E JavaScript NUM FORM, USAR O "htmlspecialchars()"
    $nome       = htmlspecialchars($_POST["nome"]);
    $endereco   = htmlspecialchars($_POST["endereco"]);
    $cidade     = htmlspecialchars($_POST["cidade"]);
    $estado     = htmlspecialchars($_POST["estado"]);
    $cep        = htmlspecialchars($_POST["cep"]);
    $telefone   = htmlspecialchars($_POST["telefone"]);
    $email      = htmlspecialchars($_POST["email"]);
    $senha      = md5(htmlspecialchars($_POST["senha"]));

    $comando = $pdo->prepare($sql); // Comando de preparação para enviar ao Banco de Dados

        //PARA EVITAR A INJEÇÃO DE SQL NUM FORM, USAR O "bindParam"
    $comando->bindParam(":nome", $nome);// Fazer a ligação dos valores obtidos no formulario com os campos
    $comando->bindParam(":ende", $endereco);
    $comando->bindParam(":cida", $cidade);
    $comando->bindParam(":esta", $estado);
    $comando->bindParam(":cepe", $cep);
    $comando->bindParam(":tele", $telefone);
    $comando->bindParam(":emai", $email);
    $comando->bindParam(":senh", $senha);

    $sucesso = $comando->execute();

    // Não será necessário usar "Location" pois será mostrada mensagem de cadastro ok ou não

    include "cabecalho.php";

?>

<?php if ($sucesso){ ?>
    <h2>Cadastro realizado com sucesso!</h2>
    <p><a href="login.php">Clique aqui para fazer o login na loja.</a></p>
<?php } else{ ?>
    <h2 style="color: red;">FALHA NA INCLUSÃO</h2>
    <p><a href="form_cadastrar_cliente.php">Clique aqui para tentar novamente.</a></p>
<?php } ?>

<?php include "rodape.php"; ?>
