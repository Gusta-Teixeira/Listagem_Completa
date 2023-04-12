CREATE DATABASE  IF NOT EXISTS `estante`;
USE `estante`;

DROP TABLE IF EXISTS `autor`;

CREATE TABLE `autor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `autor` VALUES (1,'J. R. R. Tolkien','Tolkien@gmail.com','JRRTolkien.com'),(2,'C. S. Lewis','CSLewis@gmail.com','CSLewis.com');
DROP TABLE IF EXISTS `editora`;

CREATE TABLE `editora` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,

  `telefone` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `editora` VALUES (1,'HarperCollins','(11) 9238-1241','HarperCollins@gmail.com','HarperCollins.com'),(2,'WMF Martins Fontes',' (11) 4151-8479','WMFMartinsFontes@gmail.com','WMFMartinsFontes.com');


DROP TABLE IF EXISTS `livro`;

CREATE TABLE `livro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isbn` varchar(45) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `numpaginas` int NOT NULL,
  `numedicao` int NOT NULL,
  `id_editora` int NOT NULL,
  `anopublicacao` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_codEdotira_codlivro_idx` (`id_editora`),
  CONSTRAINT `fk_livro_1` FOREIGN KEY (`id_editora`) REFERENCES `editora` (`id`)
);

INSERT INTO `livro` VALUES (1,'8845292614','Senhor dos aneis A Sociedade do Anel', 1202,3,1,1954),(2,'8125292412','Senhor dos aneis As Duas Torres', 1345,5,1,1964), (3,'9780001831803','O Leão, a Feiticeira e o Guarda-Roupa', 184,5,2,1950),(4,'0064471055','Príncipe Caspian', 256, 7, 2, 1951);

DROP TABLE IF EXISTS `livro_autor`;

CREATE TABLE `livro_autor` (
  `id_livro` int NOT NULL,
  `id_autor` int NOT NULL,
  PRIMARY KEY (`id_autor`,`id_livro`),
  KEY `fk_livro_autor_2_idx` (`id_livro`),
  CONSTRAINT `fk_livro_autor_1` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id`),
  CONSTRAINT `fk_livro_autor_2` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id`)
);

INSERT INTO `livro_autor` VALUES (1,1),(2,1),(3,2),(4,2);


