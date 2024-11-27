<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>La Bella</title>
    <link rel="stylesheet" href="../admin/css/estiloCab.css">
    <link rel="stylesheet" href="css/estilosite.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="icon" href="img/icone_LaBella.png" type="image/png">
</head>

<body>
    <header class="container-fluid">
        <div id="logo">
            <img id="logoImg" src="img/icone_LaBella.png" alt="Logotipo LaBella">
            <img id="slogan" src="img/slogan.png" alt="Slogan LaBella">
        </div>
        <a href="login.php" id="login">
            <p id="loginTxt"><?= isset($_SESSION["nome"]) ? $_SESSION["nome"] : "Acessar" ?></p>
            <img id="loginImg" src="img/login.png" alt="Login LaBella">
        </a>
        <?php if (isset($_SESSION["nome"])) { ?>
            <div id="logout">
                <a href="logout.php">Logout</a>
                <img id="imgLogout" src="img/logout.png" alt="">
            </div>
        <?php } ?>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="carrinho.php">Carrinho</a></li>
            <li><a href="finalizar_pedido.php">Finalizar pedido</a></li>
            <li><a href="contato.php">Fale conosco</a></li>
        </ul>
    </nav>