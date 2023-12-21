CREATE TABLE crud-php.pessoa(
  id_pessoafisica INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  genero VARCHAR(255) NOT NULL,
  dtanasc date NOT NULL,
  fone VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL
);