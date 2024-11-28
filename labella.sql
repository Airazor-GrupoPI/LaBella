create database labella;
use labella;

show tables;


-- -------------------------------------------------------------------------------  

CREATE SCHEMA IF NOT EXISTS labella DEFAULT CHARACTER SET utf8 ;
USE labella;

-- -------------------------------------------------------------------------------

CREATE TABLE clientes (
	codigo VARCHAR(32) NOT NULL,
	nome VARCHAR(50) NOT NULL,
	endereco VARCHAR(50),
	cidade VARCHAR(30),
	estado VARCHAR(10),
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
	codigo_cliente VARCHAR(32),
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
	quantidade INT(3),
	PRIMARY KEY (sessao, produto)
);

CREATE TABLE login (
	sessao CHAR(32) NOT NULL,
	PRIMARY KEY (sessao)
);

-- ---------------------------------------------------------------------------------

insert into produtos (codigo, nome, descricao, categoria, preco_unitario)
values
(null,'Calabresa','Molho de tomate, calabresa fatiada, cebola, cebolinha','Pizza',42.90),
(null,'Mussarela','Molho de tomate, mussarela, tomate em rodelas','Pizza',48.90),
(null,'Bubalina','Molho de tomate, mussarela de bufata, tomate cereja, manjericão fresco','Pizza',69.90),
(null,'Portuguesa','Molho de tomate, mussarela, presunto, palmito, ovos picados, ervilha, cebola, cebolinha','Pizza',59.90),
(null,'Francesa','Molho de tomate, mussarela, calabresa, cebola','Pizza',52.90),
(null,'Meia mussarela e meia calabresa','Molho de tomate, mussarela, calabresa fatiada, tomate em rodelas, cebola, cebolinha','Pizza',45.90),
(null,'Refrigerante, meia calabresa, meia mussarela','Refrigerante sabor guaraná, marca It, pizza meia calabresa e meia mussarela','Combo',49.90),
(null,'Mussarela Promoção','Molho de tomate, mussarela, tomate em rodelas','Promoção',42.90),
(null,'Calabresa Promoção','Molho de tomate, calabresa fatiada, cebola, cebolinha','Promoção',39.90);