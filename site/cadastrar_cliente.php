<?php
    session_start();
    session_regenerate_id(true);
    include "../admin/conexao.php";

    $sql  = "INSERT into clientes (codigo, nome, endereco, cidade, estado, cep, telefone, email, senha)"; 
    $sql .= "values (:cod, :nome, :ende, :cida, :esta, :cepe, :tele, :emai, :senh)";  // Se precisar quebrar a linha dá para concatenar

        //PARA EVITAR O XSS (CROSS SITE SCRIPT) DE HTML E JavaScript NUM FORM, USAR O "htmlspecialchars()"
    $codigo     = htmlspecialchars(session_id());
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
    $comando->bindParam(":cod", $codigo);
    $comando->bindParam(":nome", $nome);// Fazer a ligação dos valores obtidos no formulario com os campos
    $comando->bindParam(":ende", $endereco);
    $comando->bindParam(":cida", $cidade);
    $comando->bindParam(":esta", $estado);
    $comando->bindParam(":cepe", $cep);
    $comando->bindParam(":tele", $telefone);
    $comando->bindParam(":emai", $email);
    $comando->bindParam(":senh", $senha);

    $sucesso = $comando->execute();

?>

<?php if ($sucesso){ ?>
    <!DOCTYPE html><html><body onload="alert('<?php echo 'Cadastro realizado com sucesso!'; ?>'); window.location.replace('http://localhost/LaBella/site/login.php');">
<?php } else{ ?>
    <!DOCTYPE html><html><body onload="alert('<?php echo 'Falha no Cadastro, tente novamente'; ?>'); window.location.replace('http://localhost/LaBella/site/form_cadastro_cliente.php');">
<?php } ?>

<?php include "rodape.php"; ?>
