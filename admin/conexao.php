<?php

    $tipo_banco = "mysql";      // Identificador do SGBD usado
    $servidor   = "localhost";  // Endereço do servidor
    $porta      = 3307;         // Número da porta do servidor
    $banco      = "labella";    // Nome do banco de dados a ser usado
    $usuario    = "php";        // Usuário que acessará o banco
    $senha      = "senha123";   // Senha cadastrada na criação do BD

    // A DSN é uma string que informa à biblioteca alguns dados sobre o banco
    $dsn        = "$tipo_banco:host=$servidor;dbname=$banco;charset=utf8mb4;port=$porta";

    try{
        $pdo = new PDO($dsn, $usuario, $senha);
    }catch (PDOException $e){
        throw new PDOException($e->getMessage(), $e->getCode());
    }

?>
