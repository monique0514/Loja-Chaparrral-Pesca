
CREATE DATABASE IF NOT EXISTS loja_chaparral_pesca
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE loja_chaparral_pesca;

-- 1. TABELA DE USUÁRIOS
CREATE TABLE usuarios (
    idusuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

-- 2. TABELA DE CLIENTES
CREATE TABLE clientes (
    idcliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) UNIQUE,
    telefone VARCHAR(20),
    email VARCHAR(120),
    endereco VARCHAR(200)
);

-- 3. TABELA DE CATEGORIAS
CREATE TABLE categorias (
    idcategoria INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT
);

-- 4. TABELA DE FORNECEDORES
CREATE TABLE fornecedores (
    idfornecedor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(120),
    endereco VARCHAR(200)
);

-- 5. TABELA DE MARCAS
CREATE TABLE marcas (
    idmarca INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT
);

-- 6. TABELA DE PRODUTOS
CREATE TABLE produtos (
    idproduto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    estoque INT NOT NULL DEFAULT 0,
    foto VARCHAR(255),
    destaque BOOLEAN DEFAULT FALSE,

    idcategoria INT NOT NULL,
    idfornecedor INT NOT NULL,
    idmarca INT NOT NULL,

    FOREIGN KEY (idcategoria)
        REFERENCES categorias(idcategoria),

    FOREIGN KEY (idfornecedor)
        REFERENCES fornecedores(idfornecedor),

    FOREIGN KEY (idmarca)
        REFERENCES marcas(idmarca)
);

-- 7. TABELA DE VENDAS
CREATE TABLE vendas (
    idvenda INT AUTO_INCREMENT PRIMARY KEY,
    data_venda DATETIME DEFAULT CURRENT_TIMESTAMP,
    quantidade INT NOT NULL,
    valor_total DECIMAL(10,2) NOT NULL,

    idcliente INT NOT NULL,
    idproduto INT NOT NULL,
    idusuario INT NOT NULL,

    FOREIGN KEY (idcliente)
        REFERENCES clientes(idcliente),

    FOREIGN KEY (idproduto)
        REFERENCES produtos(idproduto),

    FOREIGN KEY (idusuario)
        REFERENCES usuarios(idusuario)
);
