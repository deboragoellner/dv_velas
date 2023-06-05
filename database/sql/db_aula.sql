-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_aula
CREATE DATABASE IF NOT EXISTS `db_aula` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_aula`;

-- Copiando estrutura para tabela db_aula.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.categoria: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.cliente: ~3 rows (aproximadamente)
INSERT INTO `cliente` (`id`, `nome`, `email`, `cpf`, `created_at`, `updated_at`) VALUES
	(1, 'vivi', 'vivi@vivi.com', '854756536365', '2023-06-06 00:35:37', '2023-06-06 00:36:27'),
	(2, 'deb', 'deb@deb.com', '884222112254', '2023-06-06 00:36:00', '2023-06-06 00:36:00'),
	(3, 'manu', 'manu@manu.com', '855411225511', '2023-06-06 00:36:17', '2023-06-06 00:36:17');

-- Copiando estrutura para tabela db_aula.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `essencia` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cera` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pavio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.estoque: ~3 rows (aproximadamente)
INSERT INTO `estoque` (`id`, `essencia`, `cera`, `pavio`, `imagem`, `created_at`, `updated_at`) VALUES
	(2, 'Café', 'Com parafina', 'Parafinado', 'imagem/20230605214013.jpg', '2023-06-06 00:40:13', '2023-06-06 00:40:13'),
	(3, 'Laranja', 'De abelha', 'Barbante', 'imagem/20230605214053.jpg', '2023-06-06 00:40:53', '2023-06-06 00:40:53'),
	(4, 'Manga', 'De coco', 'Madeira', 'imagem/20230605221000.jpg', '2023-06-06 01:09:47', '2023-06-06 01:10:00');

-- Copiando estrutura para tabela db_aula.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.fornecedor
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `empresa` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mercadoria` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.fornecedor: ~3 rows (aproximadamente)
INSERT INTO `fornecedor` (`id`, `empresa`, `telefone`, `mercadoria`, `created_at`, `updated_at`) VALUES
	(1, 'Ceras e cia', '33225577', 'Cera', '2023-06-06 00:41:38', '2023-06-06 00:41:38'),
	(2, 'Pavios Ltda', '33225487', 'Pavio simples', '2023-06-06 00:41:59', '2023-06-06 00:41:59'),
	(3, 'Essências florais', '33225598', 'Essência lavanda', '2023-06-06 00:42:25', '2023-06-06 00:42:25');

-- Copiando estrutura para tabela db_aula.leituradeboravitoria
CREATE TABLE IF NOT EXISTS `leituradeboravitoria` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_leitura` date NOT NULL,
  `hora_leitura` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_sensor` double(8,2) NOT NULL,
  `sensor_id` bigint unsigned DEFAULT NULL,
  `mac_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leituradeboravitoria_sensor_id_foreign` (`sensor_id`),
  KEY `leituradeboravitoria_mac_id_foreign` (`mac_id`),
  CONSTRAINT `leituradeboravitoria_mac_id_foreign` FOREIGN KEY (`mac_id`) REFERENCES `mac` (`id`),
  CONSTRAINT `leituradeboravitoria_sensor_id_foreign` FOREIGN KEY (`sensor_id`) REFERENCES `sensor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.leituradeboravitoria: ~0 rows (aproximadamente)
INSERT INTO `leituradeboravitoria` (`id`, `data_leitura`, `hora_leitura`, `valor_sensor`, `sensor_id`, `mac_id`, `created_at`, `updated_at`) VALUES
	(1, '2022-09-21', '14H', 15.00, 1, 1, '2023-06-06 00:44:58', '2023-06-06 00:44:58'),
	(2, '2023-04-02', '16H', 22.00, 2, 2, '2023-06-06 00:45:31', '2023-06-06 00:45:31'),
	(3, '2023-01-23', '12H', 32.00, 1, 1, '2023-06-06 00:45:51', '2023-06-06 00:45:51');

-- Copiando estrutura para tabela db_aula.mac
CREATE TABLE IF NOT EXISTS `mac` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contador` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.mac: ~2 rows (aproximadamente)
INSERT INTO `mac` (`id`, `nome`, `contador`, `created_at`, `updated_at`) VALUES
	(1, '23:P9:2022', 55, NULL, NULL),
	(2, '35:G8:2023', 88, NULL, NULL);

-- Copiando estrutura para tabela db_aula.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_04_14_165129_create_usuario', 1),
	(6, '2023_04_28_175149_create_categorias_table', 1),
	(7, '2023_05_12_170836_mac', 1),
	(8, '2023_05_12_170858_sensor', 1),
	(9, '2023_05_12_170915_leitura_debora_vitoria', 1),
	(10, '2023_05_19_172402_create_cliente_table', 1),
	(11, '2023_05_19_173347_create_fornecedor_table', 1),
	(12, '2023_05_19_173406_create_estoque_table', 1);

-- Copiando estrutura para tabela db_aula.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.password_resets: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.sensor
CREATE TABLE IF NOT EXISTS `sensor` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contador` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.sensor: ~2 rows (aproximadamente)
INSERT INTO `sensor` (`id`, `nome`, `contador`, `created_at`, `updated_at`) VALUES
	(1, 'DV', 202, NULL, NULL),
	(2, 'GW', 106, NULL, NULL);

-- Copiando estrutura para tabela db_aula.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.users: ~2 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$vEMmd7/5.jFTY5pbGiGSuer/ABn0nQgXkGhcq7Ov0aArc3w7h/DVi', NULL, '2023-06-06 00:35:11', '2023-06-06 00:35:11'),
	(2, 'funcionario', 'funcionario@funcionario.com', NULL, '$2y$10$iV/FHReCUWs/66ZQ/WF9Y.ubSSRPVNQtSv9S7A6XLV///IjRaGJu.', NULL, '2023-06-06 01:13:26', '2023-06-06 01:13:26');

-- Copiando estrutura para tabela db_aula.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `usuario_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.usuario: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
