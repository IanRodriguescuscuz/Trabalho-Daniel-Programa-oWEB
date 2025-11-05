# Trabalho-Daniel-Programa-oWEB


No PHPmyadmin (iniciado apartir do painel do xampp) crie um novo banco de dados:
CREATE SCHEMA projeto_1_;

Depois, dentro do projeto_1_ crie uma tabela referente a clientes

CREATE TABLE clientes ( id INT AUTO_INCREMENT PRIMARY KEY, 
cliente VARCHAR(100) NOT NULL, 
cidade VARCHAR(100) NOT NUll, 
estado VARCHAR(100) NOT NUll );

A nova tabela criada para a entrega é referente aos tipos de ingresso de um show, podendo ser modificadas apartir do admin, da mesma forma que os clientes.

CREATE TABLE ingressos ( id INT AUTO_INCREMENT PRIMARY KEY, 
ingresso VARCHAR(100) NOT NULL, 
preço VARCHAR(100) NOT NUll, 
open_bar VARCHAR(100) NOT NUll );

No menu da página inicial é possível acessar os tipos de ingressos cadastrados.
