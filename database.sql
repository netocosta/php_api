CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` text,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

INSERT INTO `clientes` (`id`, `nome`) VALUES
	(1, 'Sucre Doceria');

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` text,
  `senha` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nome` text NOT NULL,
  `token` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

INSERT INTO `usuarios` (`id`, `login`, `senha`, `nome`, `token`) VALUES
	(1, 'netocosta', '$2y$10$2EP57Bbpv1RTwuL3.e3b6u/4iylIzSmjbcUkhd2tBzo//v4IW6GcO', 'Neto Costa', '');