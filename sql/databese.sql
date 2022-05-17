CREATE TABLE categoria(
                          id INT PRIMARY KEY AUTO_INCREMENT,
                          nome varchar(200)
);

CREATE TABLE  produto(
                         id INT PRIMARY KEY AUTO_INCREMENT,
                         nome varchar(200),
                         descricao varchar(500),
                         preco float,
                         caminho_imagem varchar(200),
                         categoria_id INT,
                         quantidade int,
                         ncm varchar(100),

                         CONSTRAINT pro_cat_id  FOREIGN KEY (categoria_id) REFERENCES categoria(id)
);

CREATE TABLE carrinho (
                          id INT PRIMARY KEY AUTO_INCREMENT,
                          produto_id int ,
                          categoria_id int,
                          CONSTRAINT car_pro_id  FOREIGN KEY (produto_id) REFERENCES produto(id),
                          CONSTRAINT car_cat_id  FOREIGN KEY (categoria_id) REFERENCES categoria(id)
);

CREATE TABLE cliente(
                        id INT PRIMARY KEY AUTO_INCREMENT,
                        nome varchar(200),
                        cpf varchar(11),
                        senha varchar(100)

);

CREATE TABLE funcionario(
                            id INT PRIMARY KEY AUTO_INCREMENT,
                            nome varchar(200),
                            usuario varchar(100),
                            senha varchar(100),
                            tipo varchar(50)

);
CREATE TABLE compras(
                        id INT PRIMARY KEY AUTO_INCREMENT,
                        forma_pagamento varchar(100),
                        total float,
                        carrinho_id int,

                        CONSTRAINT com_cat_id  FOREIGN KEY (carrinho_id) REFERENCES carrinho(id)

);