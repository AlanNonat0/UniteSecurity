
CREATE DATABASE united;

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` decimal(11,0) UNIQUE KEY DEFAULT NULL,
  `telefone` decimal(20,0) DEFAULT NULL,
  `apelido` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(20) NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `servico_contratado` (
  `id_cliente` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
    CONSTRAINT `pk_servicocontratado` PRIMARY KEY (id_cliente, id_servico),
    CONSTRAINT `Fk_Id` FOREIGN KEY (`id_cliente`) REFERENCES `cadastro` (`id`),
    CONSTRAINT `Fk_id_prod` FOREIGN KEY (`id_servico`) REFERENCES `produtos` (`cod_produto`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `produtos` (
  `cod_produto` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_produto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_produto` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produtos` (`cod_produto`, `nome_produto`, `descricao_produto`, `imagem`) VALUES
(1, 'Biometria', 'A biometria te ajudará a controlar o acesso à lugares de sua escolha, identificar pessoas e até mesmo impedir que pessoas não autorizadas acessem dados sigilosos por meios digitais.\r\nPara orçamentos, entre em contato conosco.', 'biometria.jpeg'),
(2, 'Análise de riscos', 'Na United fazemos uma análise de riscos completamente personalizada que melhor se encaixe na sua empresa.', 'analise.png'),
(3, 'Workshop', 'Você poderá solicitar um workshop totalmente personalizado para sua equipe de T.I.', 'workshop.jpg'),
(4, 'Serviços de segurança', 'Aqui te auxiliaremos com a segurança de sua empresa, com implementações de procedimentos e sereviços de segurança', 'servicoseguranca.jpg');

