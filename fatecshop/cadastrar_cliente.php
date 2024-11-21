<?php
    include "admin/conexao.php";

    $sql  = "INSERT INTO clientes (nome, endereco, cidade, estado, cep, telefone, email, senha)"; 
    $sql .= "values (:nome, :end, :cid, :est, :cep, :tel, :ema, :sen)";

    $nome = htmlspecialchars($_POST["nome"]);
    $endereco = htmlspecialchars($_POST["endereco"]);
    $cidade = htmlspecialchars($_POST["cidade"]);
    $estado = htmlspecialchars($_POST["estado"]);
    $cep = htmlspecialchars($_POST["cep"]);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $email = htmlspecialchars($_POST["email"]);
    $senha = md5(htmlspecialchars($_POST["senha"]));

    $comando = $pdo->prepare($sql); 

    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":end", $endereco);
    $comando->bindParam(":cid", $cidade);
    $comando->bindParam(":est", $estado); 
    $comando->bindParam(":cep", $cep); 
    $comando->bindParam(":tel", $telefone); 
    $comando->bindParam(":ema", $email); 
    $comando->bindParam(":sen", $senha); 

    $sucesso = $comando->execute();

    include "cabecalho.php";
?>

<?php if ($sucesso){ ?>
    <h2>Cadastro realizado com sucesso.</h2>
    <p><a href="login.php">Clique aqui para fazer seu login na loja.</a></p>
<?php }else{ ?>
    <h2 style="color: red">FALHA NA INCLUSÃO!</h2>
    <p><a href="form_cadastro_cliente.php">Clique aqui para tentar novamente!</a></p>
<?php } ?>

<?php include "rodape.php" ?>