use labella;

show tables;


-- -------------------------------------------------------------------------------  

CREATE SCHEMA IF NOT EXISTS labella DEFAULT CHARACTER SET utf8 ;
USE labella;
CREATE USER 'php'@'localhost' IDENTIFIED BY 'senha123';
GRANT ALL ON labella.* TO 'php'@'localhost';

-- -------------------------------------------------------------------------------

CREATE TABLE clientes (
	codigo INT(5) AUTO_INCREMENT NOT NULL,
	nome VARCHAR(50) NOT NULL,
	endereco VARCHAR(50),
	cidade VARCHAR(30),
	estado CHAR(2),
	cep VARCHAR(10),
	telefone VARCHAR(15),
	email VARCHAR(30),
	senha VARCHAR(32),
	PRIMARY KEY (codigo)
);

CREATE TABLE produtos (
	codigo INT(5) AUTO_INCREMENT NOT NULL,
	nome VARCHAR(50) NOT NULL,
	descricao VARCHAR(250),
	categoria VARCHAR(20),
	preco_unitario DECIMAL(7,2),
	PRIMARY KEY (codigo)
);

CREATE TABLE pedidos (
	codigo INT(8) AUTO_INCREMENT NOT NULL,
	codigo_cliente INT(5),
	data_pedido DATETIME,
	forma_pagto VARCHAR(20),
	PRIMARY KEY (codigo),
	FOREIGN KEY (codigo_cliente) REFERENCES clientes (codigo)
);

CREATE TABLE pedidos_produtos (
	codigo_pedido INT(8) NOT NULL,
	codigo_produto INT(5) NOT NULL,
	preco_unitario DECIMAL(7,2),
	quantidade INT(3),
	PRIMARY KEY (codigo_pedido, codigo_produto),
	FOREIGN KEY (codigo_pedido) REFERENCES pedidos (codigo),
	FOREIGN KEY (codigo_produto) REFERENCES produtos (codigo)
);

CREATE TABLE carrinho (
	sessao CHAR(32) NOT NULL,
	produto INT(5) NOT NULL,
	preco_unitario DECIMAL(7,2),
	quantidade INT(3),
	PRIMARY KEY (sessao, produto)
);

CREATE TABLE login (
	sessao CHAR(32) NOT NULL,
	PRIMARY KEY (sessao, produto)
);

-- ---------------------------------------------------------------------------------