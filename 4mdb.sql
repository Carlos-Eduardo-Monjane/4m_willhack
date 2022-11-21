-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2022 at 05:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4mdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user_admin` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(110) DEFAULT NULL,
  `photo` varchar(200) DEFAULT 'logo-ct-dark.png',
  `phone` varchar(200) NOT NULL,
  `razao_social` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `cnpj` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `inscricao_municipal` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `name`, `user_admin`, `description`, `address`, `email`, `photo`, `phone`, `razao_social`, `bairro`, `state`, `city`, `cnpj`, `cep`, `complemento`, `inscricao_municipal`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Deus é Amor', NULL, NULL, 'Rua 14 de junho', NULL, 'perfil.jpg', '+1234854984', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '2022-02-02 14:30:05', NULL, NULL),
(16, 'WillHack', 32, 'Loja de motoa', 'Av anhaia Mello 1.766 Sao Paulo', 'rafaelrafael210@gmail.com', 'logo-ct-dark.png', '11 99736-5718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-04-07 05:43:11', '2022-04-07 05:43:11', NULL),
(18, 'Marello Motos Suzuki Sp', 30, 'Concessionária autorizada Suzuki', 'Av. Anhaia Mello, 1.766', 'Suzukisp@marellomotos.com.br', NULL, '(11)-99736-5718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-05-02 04:48:41', '2022-06-03 02:28:43', NULL),
(19, 'Marello Motos', 32, 'Concessionaria Suzuki - Marello Motos', 'AV Av. Professor Luiz Ignácio Anhaia Mello, 1766 - Vila Prudente, São Paulo - SP, 03154-000', 'josebarboza077@gmail.com', NULL, '11979946994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-05-16 15:37:05', '2022-05-16 15:37:05', NULL),
(20, 'Saldec Seguros', 41, 'Corretora de seguros que atua em todas as áreas de seguros.\r\nCom ênfase em seguros de veiculos, por atuar em parceria com as lojas/concessionárias Marello Motos.', 'Av. Atlântica, 465', 'seguros@marellomotos.com.br', NULL, '(11)-93443-8686', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-06-03 02:40:02', '2022-06-03 02:44:19', NULL),
(21, 'Marello Motos Com. De Motocicletas Ltda', 44, 'Marello Motos Kawasaki, a maior e melhor concessionária Kawasaki do Brasil .. prédio próprio, com toda linha Kawasaki disponível, além de uma boutique com as melhores marcas de acessórios do país, eventos mensais com clientes através do projeto MRX (Marello Rider Experience)', 'Av Atlântica 465 - Vila Valparaiso / Santo André', 'kawasaki@marellomotos.com.br', NULL, '11 99833-7353', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-06-03 20:28:24', '2022-06-03 20:28:24', NULL),
(22, 'Marello Motos', 45, 'Concessionaria autorizada Suzuki , Kawasaki e multimarcas .', 'Av Atlantica 340 Santo Andre', 'adriano.rugg@gmail.com', NULL, '(11)-99499-4923', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-06-03 20:58:51', '2022-06-03 20:59:27', NULL),
(23, 'Adriana Mattos Dog Walker', 46, 'Dog Walker e Pet Sitter. Especialista em Terapias Holística para Pets e Humanos. Especialista em Alimentação Natural.', 'ABC', 'mattosecologia@gmail.com', '1654445720.phpqfracB.jpg', '(11)-96782-1153', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-06-05 19:08:48', '2022-06-05 19:15:20', NULL),
(24, 'Marello Motos', 33, 'Vendas de motos novas e usadas', 'Av. Professor Luiz Ignácio Anhaia Mello, 1766 - Vila Prudente, São Paulo - SP, 03154-000', 'adrianag_freitas@yahoo.com.br', NULL, '(11)-94059-0468', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-06-15 23:03:24', '2022-06-15 23:04:16', NULL),
(25, 'DIEGO PARK MOTOS', 52, 'A MMELHOR LOJA DE SAO BERNADO DO CAMPO', 'RUA ALFERES BONILHA 339', 'DIEGOCOBAYALIMA@GMAIL.COM', NULL, '11981196880', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-06-30 20:30:12', '2022-06-30 20:30:12', NULL),
(26, 'Rafael Squadra Motos', 54, 'Compra e venda de motos novas e seminovas', 'Rua Frei Gaspar, 200', 'squadramotos200@gmail.com', NULL, '11988582727', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-06-30 21:15:23', '2022-06-30 21:15:23', NULL),
(27, 'TecnoNetz', 56, 'A TecnoNetz é uma empresa que atua há 18 anos no mercado com foco em desenvolvimento de sites, gestão de Google Ads e de redes sociais, tanto de forma orgânica quanto patrocinada.\r\n\r\n \r\n\r\nNossa equipe é composta por profissionais com diferentes expertises e qualificações que se complementam, atuando de forma única e estratégica para oferecer resultados mais expressivos para o seu negócio.', 'Av. Pres. Kennedy, 3500 - Sala 1803 - Santa Paula, São Caetano do Sul', 'tecnonetz@gmail.com', NULL, '(11) 99638-5565', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-07-18 21:24:58', '2022-07-18 21:24:58', NULL),
(28, 'Empresa x', 58, 'sdfjndfkjsdnf', 'Endereço', 'empresa@gmail.com', NULL, '32432423423423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-21 04:15:55', '2022-11-21 04:15:55', NULL),
(29, 'WillHack', 68, NULL, 'Addres123', 'willshop@gmail.com', NULL, '(23)-21323-2141', 'Rzao123', 'Bair123', 'Est123', 'Cida123', 'cdcdsc', 'dscvds', 'Addres123', '124312dqw', NULL, '2022-11-21 14:16:10', '2022-11-21 14:16:10', NULL);

--
-- Triggers `empresas`
--
DELIMITER $$
CREATE TRIGGER `set_id_onuser` AFTER INSERT ON `empresas` FOR EACH ROW BEGIN
UPDATE users set users.shop_id = NEW.id WHERE users.id = NEW.user_admin;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_profissional`
--

CREATE TABLE `favorite_profissional` (
  `id` int(11) NOT NULL,
  `profissional_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite_profissional`
--

INSERT INTO `favorite_profissional` (`id`, `profissional_id`, `cliente_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(55, 30, 31, '2022-06-01 13:46:08', '2022-06-01 13:46:08', NULL),
(56, 30, 40, '2022-06-02 19:15:27', '2022-06-02 19:15:27', NULL),
(57, 41, 42, '2022-06-02 23:45:12', '2022-06-05 16:29:40', '2022-06-05'),
(58, 30, 42, '2022-06-02 23:50:11', '2022-06-10 20:10:25', '2022-06-10'),
(59, 32, 42, '2022-06-02 23:50:17', '2022-06-10 20:10:28', '2022-06-10'),
(60, 44, 42, '2022-06-03 17:31:49', '2022-06-10 20:10:32', '2022-06-10'),
(61, 45, 42, '2022-06-03 18:16:57', '2022-06-10 20:10:34', '2022-06-10'),
(62, 41, 21, '2022-06-04 17:14:36', '2022-06-04 17:14:36', NULL),
(63, 30, 21, '2022-06-04 17:14:59', '2022-06-04 17:14:59', NULL),
(64, 32, 21, '2022-06-04 17:15:09', '2022-06-04 17:15:09', NULL),
(65, 44, 21, '2022-06-04 17:15:15', '2022-06-04 17:15:15', NULL),
(66, 46, 42, '2022-06-05 16:18:17', '2022-06-05 16:26:07', '2022-06-05'),
(67, 46, 42, '2022-06-05 16:26:41', '2022-06-10 20:10:36', '2022-06-10'),
(68, 41, 42, '2022-06-05 16:29:50', '2022-06-10 20:10:39', '2022-06-10'),
(69, 30, 42, '2022-06-10 20:11:11', '2022-06-15 20:07:16', '2022-06-15'),
(70, 30, 42, '2022-06-15 20:09:21', '2022-06-15 20:41:47', '2022-06-15'),
(71, 33, 42, '2022-06-15 20:14:02', '2022-06-15 20:41:42', '2022-06-15'),
(72, 46, 42, '2022-06-15 20:14:48', '2022-06-15 20:41:44', '2022-06-15'),
(73, 30, 42, '2022-06-15 20:42:05', '2022-07-16 23:18:55', '2022-07-16'),
(74, 30, 48, '2022-06-27 12:59:40', '2022-06-27 12:59:40', NULL),
(75, 30, 51, '2022-06-30 17:25:33', '2022-06-30 17:25:33', NULL),
(76, 52, 42, '2022-06-30 17:35:02', '2022-07-16 23:18:58', '2022-07-16'),
(77, 30, 53, '2022-06-30 18:10:09', '2022-06-30 18:10:09', NULL),
(78, 54, 42, '2022-06-30 18:16:55', '2022-07-16 23:19:01', '2022-07-16'),
(79, 32, 53, '2022-06-30 18:40:07', '2022-06-30 18:40:07', NULL),
(80, 45, 53, '2022-06-30 18:40:24', '2022-06-30 18:40:24', NULL),
(81, 52, 53, '2022-06-30 18:40:38', '2022-06-30 18:40:38', NULL),
(82, 44, 53, '2022-06-30 18:40:46', '2022-06-30 18:40:46', NULL),
(83, 46, 42, '2022-07-11 01:15:08', '2022-07-16 23:19:05', '2022-07-16'),
(84, 30, 55, '2022-07-13 18:21:31', '2022-07-13 18:21:31', NULL),
(85, 32, 42, '2022-07-16 17:59:06', '2022-07-16 23:19:08', '2022-07-16'),
(86, 46, 42, '2022-07-16 23:20:56', '2022-07-16 23:20:56', NULL),
(87, 56, 48, '2022-07-18 18:31:15', '2022-07-18 18:31:15', NULL),
(88, 52, 42, '2022-07-19 13:12:11', '2022-07-19 13:12:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `indicacao`
--

CREATE TABLE `indicacao` (
  `id` int(11) NOT NULL,
  `profissional_id` int(11) NOT NULL,
  `afiliado_id` int(11) DEFAULT NULL,
  `oferta_id` int(11) DEFAULT NULL,
  `manual` tinyint(1) NOT NULL DEFAULT 0,
  `cliente_nome` varchar(255) DEFAULT NULL,
  `cliente_phone` varchar(255) DEFAULT NULL,
  `cliente_email` varchar(100) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'SEM CONTATO',
  `admin_id` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indicacao`
--

INSERT INTO `indicacao` (`id`, `profissional_id`, `afiliado_id`, `oferta_id`, `manual`, `cliente_nome`, `cliente_phone`, `cliente_email`, `obs`, `status`, `admin_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(104, 30, 40, 15, 0, 'Samel', '11937706095', NULL, 'Choppe', 'NÃO TEVE INTERESSE', 0, '2022-06-02 22:19:34', '2022-07-11 04:17:42', NULL),
(105, 41, 42, NULL, 0, 'Ferreira', '11964953637', NULL, 'Comprou uma lindy em nome da Antônia,  mas ele que será o principal condutor!', 'SEM CONTATO', 0, '2022-06-03 02:47:01', '2022-06-03 02:47:01', NULL),
(106, 44, 42, 17, 0, 'Viviane', '(11)-96370-2340', NULL, 'Vulcan 650 na troca da Virago', 'SEM CONTATO', 0, '2022-06-03 20:37:59', '2022-06-03 20:37:59', NULL),
(107, 46, 42, NULL, 0, 'Rafael Pepe', '11997365718', 'rafaelrafael210@gmail.com', 'Passeios', 'SEM CONTATO', 0, '2022-06-05 19:20:17', '2022-06-05 19:20:17', NULL),
(108, 30, 42, 15, 0, 'josimar', '11984895588', NULL, 'lindy esposa', 'NÃO TEVE INTERESSE', 0, '2022-06-15 23:42:52', '2022-07-14 04:28:16', NULL),
(109, 30, 51, 15, 0, 'junior', '11941073190', NULL, 'moto 650', 'NÃO TEVE INTERESSE', 0, '2022-06-30 20:26:07', '2022-07-14 04:28:36', NULL),
(110, 54, 42, NULL, 0, 'Adriana', '11967821153', NULL, 'Xmax 250', 'SEM CONTATO', 0, '2022-06-30 21:17:20', '2022-06-30 21:17:20', NULL),
(111, 46, 42, NULL, 0, 'Paulo', '11997365718', NULL, 'Ele viaja precisa de', 'SEM CONTATO', 0, '2022-07-11 04:15:37', '2022-07-11 04:15:37', NULL),
(112, 30, 55, 15, 0, 'Adamis capiraco arruda', '(11)-95087-8718', 'adamis.arruda@gmail.com', NULL, 'NÃO TEVE INTERESSE', 0, '2022-07-14 04:19:58', '2022-07-14 04:22:49', NULL),
(113, 30, 55, 15, 1, 'Elton', '(11)-96599-8179', NULL, NULL, 'NEGÓCIO FECHADO', 0, '2022-07-14 04:26:45', '2022-07-14 04:27:04', NULL),
(114, 30, 55, 15, 0, 'Samuel', '(11)-97050-0825', NULL, NULL, 'NEGÓCIO FECHADO', 0, '2022-07-14 04:31:54', '2022-07-14 04:33:01', NULL),
(115, 30, 55, 15, 1, 'Jaques', '(11)-96284-4643', NULL, 'Dk fi', 'NEGÓCIO FECHADO', 0, '2022-07-14 19:15:53', '2022-07-15 20:27:50', NULL),
(116, 30, 48, 15, 0, 'Leonardo', '(21) 97676-4069', NULL, 'Está interessando na Dominar 400 Bajaj. Já tem carta de consórcio contemplada.', 'EM NEGOCIAÇÃO', 0, '2022-07-15 21:07:50', '2022-07-15 21:16:17', NULL),
(117, 32, 42, 16, 0, 'Andre', '11997365718', NULL, 'Lindy', 'SEM CONTATO', 0, '2022-07-16 20:59:33', '2022-07-16 20:59:33', NULL),
(118, 46, 42, NULL, 0, 'Jose', '1199736578', NULL, 'Passeio', 'SEM CONTATO', 0, '2022-07-17 02:21:21', '2022-07-17 02:21:21', NULL),
(119, 52, 42, NULL, 0, 'Fabiana Embu', '11962563923', NULL, 'Nmax', 'SEM CONTATO', 0, '2022-07-19 16:13:07', '2022-07-19 16:13:07', NULL),
(120, 30, 65, 15, 0, 'Carlos Eduardo Monjane', '(84)-28482-02__', 'carlosmonjane98@gmail.com', 'ffwewe', 'SEM CONTATO', 0, '2022-11-21 09:15:25', '2022-11-21 09:15:25', NULL),
(121, 32, 67, 16, 0, 'Xico', '(84)-28482-02__', 'carlosmonjane98@gmail.com', 'fewfwe', 'SEM CONTATO', 0, '2022-11-21 13:19:22', '2022-11-21 13:19:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notificacao`
--

CREATE TABLE `notificacao` (
  `id` int(11) NOT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oferta`
--

CREATE TABLE `oferta` (
  `id` int(11) NOT NULL,
  `profissional_id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL,
  `validate` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oferta`
--

INSERT INTO `oferta` (`id`, `profissional_id`, `photo`, `title`, `describe`, `validate`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 24, '1649253071.phpj6VNuo.jpg', 'Lindy 125', 'Documento gratis', '2022-04-30', '2022-04-06 05:05:33', '2022-04-06 05:05:33', NULL),
(13, 25, '1649253071.phpj6VNuo.jpg', 'DK 150', 'Oferta para este mês com atxa de 1,19%.m.....', '2022-06-07', '2022-04-06 16:51:11', '2022-04-11 21:14:38', '2022-04-11 21:14:38'),
(14, 25, '1649700937.phpjNdcDD.jpg', 'Chopper 150', 'Pronta Entrega na Marello e condições de abril com DOCUMENTAÇÃO GRÁTIS.', '2022-04-30', '2022-04-11 21:15:37', '2022-04-11 21:15:37', NULL),
(15, 30, '1651678287.php9g98Me.jpg', 'Dr 160', 'Documentação grátis', '2022-05-31', '2022-05-04 18:31:27', '2022-05-04 18:31:27', NULL),
(16, 32, '1652704319.phpXBPl72.jpeg', 'DOCUMENTAÇÃO TOTALMENTE GRATUITA', 'Haojue DR 160 2022/2023 0KM - 19.990,00, COM DOCUMENTAÇÃO GRATUITA PARA O MES DE MAIO DE 2022', '2022-05-20', '2022-05-16 15:31:11', '2022-05-16 15:31:59', NULL),
(17, 44, NULL, NULL, NULL, NULL, '2022-06-03 20:34:10', '2022-06-03 20:34:10', NULL),
(18, 33, '1655323765.phpw5B6JC.jpeg', 'SUZUKI HAOJUE DR160CC FI', 'DOCUMENTAÇÃO GRATUITA', '2022-06-15', '2022-06-15 23:09:25', '2022-06-15 23:09:25', NULL),
(19, 56, '1658168892.phpMzbXss.jpg', 'Criação de Sites', 'Ganhe 5% do valor negociado!', '2022-08-28', '2022-07-18 21:26:17', '2022-07-18 21:28:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('cliente01@gmail.com', 'ioqpGLdyufFywdptbRvG4ykLWCA8TQiWElGtRCzZpk8Z2LWueu97n6WC5yqwxlQS', '2022-04-05 20:29:39'),
('rafaelrafael210@gmail.com', 'CG6IzTXofG7a0sEnCPuVwFzhLhmokIsnKxQAfbFuQBJD25AIJCkiIP29yZTuBUWX', '2022-06-05 19:21:27'),
('rafaelrafael210@gmail.com', 'wJ2yXe9dL2Z0MWTu9VzvI3Uqz7KyeN9vS4v8Vgdq84IyfVimDPRCUjWme2IaYilp', '2022-06-05 19:22:56'),
('squadramotos200@gmail.com', 'IP5DcMHDfAXh7J1yyManVzPDBy9lpxNVOdYQAIkFMHU6ddvAfB1UHOTxXESoONvq', '2022-06-30 21:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `profissional_categories`
--

CREATE TABLE `profissional_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profissional_categories`
--

INSERT INTO `profissional_categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Contador', 'Sem descrição', '2022-02-13 19:45:50', '2022-02-13 19:45:50', NULL),
(2, 'Gestor', 'Sem descrição', '2022-02-13 19:45:50', '2022-02-13 19:45:50', NULL),
(3, 'Developer', 'Sem descrição', '2022-02-13 19:45:50', '2022-02-13 19:45:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profissional_subcategories`
--

CREATE TABLE `profissional_subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profissional_subcategories`
--

INSERT INTO `profissional_subcategories` (`id`, `category_id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Diversos', 'Sem descrição', '2022-02-13 19:45:50', '2022-02-13 19:45:50', NULL),
(2, 2, 'Veículos', 'Sem descrição', '2022-02-13 19:45:50', '2022-02-13 19:45:50', NULL),
(3, 2, 'Eletrônicos', 'Sem descrição', '2022-02-13 19:45:50', '2022-02-13 19:45:50', NULL),
(4, 2, 'Pet Shop', 'Sem descrição', '2022-02-13 19:45:50', '2022-02-13 19:45:50', NULL),
(5, 2, 'Produtos', 'Sem descrição', '2022-04-13 22:17:15', '2022-04-13 22:17:15', NULL),
(6, 2, 'Diversos', 'Sem descrição', '2022-04-20 15:20:57', '2022-04-20 15:20:57', NULL),
(9, 3, 'Saúde', 'Sem descrição', '2022-04-27 20:00:30', '2022-04-27 20:00:30', NULL),
(10, 3, 'Beleza', 'Sem descrição', '2022-04-27 20:00:30', '2022-04-27 20:00:30', NULL),
(11, 3, 'Construção Civil', 'Sem descrição', '2022-04-27 20:00:30', '2022-04-27 20:00:30', NULL),
(12, 3, 'Transporte', 'Sem descrição', '2022-04-27 20:00:30', '2022-04-27 20:00:30', NULL),
(13, 3, 'Pet', 'Sem descrição', '2022-04-27 20:00:30', '2022-04-27 20:00:30', NULL),
(14, 3, 'Educação', 'Sem descrição', '2022-04-27 20:00:30', '2022-04-27 20:00:30', NULL),
(15, 3, 'Informática', 'Sem descrição', '2022-04-27 20:00:30', '2022-04-27 20:00:30', NULL),
(16, 3, 'Diversos', 'Sem descrição', '2022-04-27 20:00:30', '2022-04-27 20:00:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_user_type` int(11) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `id_user`, `id_user_type`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 1, 'all', '2022-11-21 08:35:03', '2022-11-21 08:35:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Saude', NULL, '2022-02-02 13:39:46', '2022-02-02 13:39:46'),
(2, 'Salão de Beleza', NULL, '2022-02-02 13:40:29', '2022-02-02 13:40:29'),
(4, 'Casa', 'Casas de todos os níveis', '2022-02-02 13:42:41', '2022-02-02 13:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `rg` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `function` varchar(255) DEFAULT NULL,
  `biography` text DEFAULT NULL,
  `recompensa` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `phone` varchar(255) DEFAULT '--',
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'logo-ct-dark.png',
  `email` varchar(200) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `pai` varchar(255) DEFAULT NULL,
  `mae` varchar(255) DEFAULT NULL,
  `nacionalidade` varchar(255) DEFAULT NULL,
  `naturalidade` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `shop_id`, `name`, `cep`, `cpf`, `rg`, `complemento`, `function`, `biography`, `recompensa`, `category_id`, `subcategory_id`, `status`, `phone`, `state`, `city`, `bairro`, `address`, `photo`, `email`, `user_type_id`, `pai`, `mae`, `nacionalidade`, `naturalidade`, `password`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, NULL, 'Michael Mendoça', NULL, NULL, NULL, NULL, NULL, 'Bio Bio  Bio Bio Bio Bio Bio Bio Bio Bio Bio Bio Bio Bio Bio Biosdsq', NULL, NULL, NULL, 'autorizado', '(84)-12345-3245', NULL, NULL, NULL, NULL, '1649701089.phpHN8irv.png', 'admin@gmail.com', 1, NULL, NULL, NULL, NULL, '$2b$10$mRkyETC4GsYyyBeg/8SZMuhh1Mb9jbeLElmtiAjp04yLVGyfHW4Qm', NULL, NULL, '2022-02-01 19:04:46', '2022-11-21 14:34:30', NULL),
(1, NULL, 'Outro', NULL, NULL, NULL, NULL, NULL, '...', 'Sem recompensa', NULL, NULL, 'autorizado', '', 'Outro', 'Outro', NULL, 'Outro', '', '', 2, NULL, NULL, NULL, NULL, '', NULL, NULL, '2022-02-13 17:37:03', '2022-11-21 08:03:04', '2022-11-21 10:03:04'),
(21, NULL, 'Adriana Mattos Ferreira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'autorizado', '(11)-96782-1153', 'São Paulo', 'Santo André', NULL, 'Santo André, São Paulo', NULL, 'mattosecologia@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$7R9MrKuqNGfQLLHqGAGxmuvyQxV8CXSB9Zq2aAxydsaThW1SZKwba', NULL, NULL, '2022-03-24 04:48:58', '2022-06-04 20:17:25', NULL),
(30, 18, 'Rafael Pepe Marello Motos', NULL, NULL, NULL, NULL, NULL, 'Consultor de Vendas da Marello Motos, desde 2012', 'Pix de R$ 20,00', 2, 2, 'autorizado', '(11)-99736-5718', 'São Paulo', 'São Paulo', NULL, 'São Paulo, São Paulo', '1651524481.phpJj65em.jpg', 'suzukisp@marellomotos.com.br', 3, NULL, NULL, NULL, NULL, '$2y$10$zsn2mmDJbQs5zt0tL.9smuGA116PqUh4jy65Y/S6rLLWUoSAwd21G', NULL, NULL, '2022-04-30 18:48:13', '2022-05-29 21:40:28', NULL),
(31, NULL, 'Adriana Freitas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'autorizado', '(11)-94059-0468', 'São Paulo', 'São Paulo', NULL, 'São Paulo, São Paulo', 'logo-ct-dark.png', 'adriana@yahoo.com.br', 4, NULL, NULL, NULL, NULL, '$2y$10$zWXiDurB0hdCUGcD4HrU3ucVI6jnJn/pBET9gJpGmlTR4J7kdHSHu', NULL, NULL, '2022-05-02 23:52:59', '2022-11-21 07:03:01', '2022-11-21 09:03:01'),
(32, 19, 'José Alexandre de Oliveira Barboza', NULL, NULL, NULL, NULL, NULL, 'Consultor de vendas motocicletas de 115cc a 1300cc. 0km e seminovas!', 'Lavagem de motocicletas', 2, 2, 'autorizado', '11979946997', 'São Paulo', 'São Paulo', NULL, 'São Paulo, São Paulo', '1652704546.phpw34chf.jpg', 'josebarboza077@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$DQ9GIapGlOElzn7WZbBH0OMv4sjX5NXhUBClusuN4SVIOE.v6KLB6', NULL, NULL, '2022-05-03 00:03:00', '2022-11-21 14:31:45', '2022-11-21 16:31:45'),
(33, 24, 'Adriana Freitas', NULL, NULL, NULL, NULL, NULL, 'Vendedora de motos', 'Sem recompensa', 2, 2, 'autorizado', '(11)-94059-0468', 'São Paulo', 'São Paulo', NULL, 'São Paulo, São Paulo', '1655324013.phpzJJ4F8.jpg', 'adrianag_freitas@yahoo.com.br', 3, NULL, NULL, NULL, NULL, '$2y$10$tYz0/JJojGh25HW9XwQcLuBcaIh9dHAJkXE6Zb3O9ZV.6cIGzhKKe', NULL, NULL, '2022-05-03 00:06:04', '2022-11-21 14:32:21', '2022-11-21 16:32:21'),
(36, NULL, 'ANDRE MARQUES RIVIELLO', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'Santo André', NULL, 'Santo André, São Paulo', 'logo-ct-dark.png', 'andre.riviello@marellomotos.com.br', 2, NULL, NULL, NULL, NULL, '$2y$10$ir.qxzKLgrMzHeYOjBGUeOmIzU9RB2kqpblvyAQ.CuneGuLNgyrMC', NULL, NULL, '2022-05-04 01:08:08', '2022-11-21 08:48:07', '2022-11-21 10:48:07'),
(37, NULL, 'ANDRE MARQUES RIVIELLO', NULL, NULL, NULL, NULL, NULL, 'Eu sou fera nas vendas! Vem comigo!', 'Sem recompensa', 2, 2, 'autorizado', '--', 'São Paulo', 'Santo André', NULL, 'Santo André, São Paulo', 'logo-ct-dark.png', 'ANDRE@MARELLOMOTOS.COM.BR', 3, NULL, NULL, NULL, NULL, '$2y$10$W1l2vuq0fBQ/DeaefBzx9edz1K11VBb/qkb/SqrsPnqONNfKU4sL6', NULL, NULL, '2022-05-04 01:12:15', '2022-05-04 01:12:15', NULL),
(38, NULL, 'FRAN BUEENO', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'São Paulo', NULL, 'São Paulo, São Paulo', 'logo-ct-dark.png', 'franbueeno92@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$NdGu04k3RycZWAQ5zhSqiu/61v2yrRbYM1lf/0MrNvPVABe3sFifW', NULL, NULL, '2022-05-09 23:44:15', '2022-11-21 08:53:30', '2022-11-21 10:53:30'),
(39, NULL, 'Erika de Araújo nobre do prado', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'Embu-Guaçu', NULL, 'Embu-Guaçu, São Paulo', 'logo-ct-dark.png', 'erika.araujowle@hotmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$gv/kul17vaoBTbM/FZCoheUgvESgfceeO9.M9LDMRwZv8.ODcraw.', NULL, NULL, '2022-05-28 16:30:29', '2022-11-21 08:48:10', '2022-11-21 10:48:10'),
(40, NULL, 'Fábio Luiz Gonçalves', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'São Paulo', NULL, 'São Paulo, São Paulo', 'logo-ct-dark.png', 'luizfabio509@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$M.dZEWCXbZZGkMBb5Q8arOoBXFmuYp6IFVy67icP5neIY7VHINjje', NULL, NULL, '2022-06-01 23:17:19', '2022-11-21 08:48:11', '2022-11-21 10:48:11'),
(41, 20, 'Karine Nicoletti Mesquita', NULL, NULL, NULL, NULL, NULL, 'Corretora de seguros, especialista em seguros de veículos.', 'Sem recompensa', 3, 1, 'autorizado', '(11)-93443-8686', 'São Paulo', 'Santo André', NULL, 'Santo André, São Paulo', '1654211953.php7nuznL.webp', 'karinemeskitta@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$bIwezG7EqT0BsVfDWE/SbOZwfmX46.rHvjX9m/jD8JgzOyXegO2lm', NULL, NULL, '2022-06-03 02:12:49', '2022-11-21 14:31:51', '2022-11-21 16:31:51'),
(42, NULL, 'Rafael Pepe', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'Santo André', NULL, 'Santo André, São Paulo', 'logo-ct-dark.png', 'rafaelrafael210@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$USKGrHgOvL/EPmmWsHWRKewlQBa/TWhuDZGvtBeyVsXUYTby15hl2', NULL, NULL, '2022-06-03 02:24:59', '2022-11-21 04:18:47', '2022-11-21 06:18:47'),
(43, NULL, 'LEANDRO DE OLIVEIRA GOMES', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'São Bernardo do Campo', NULL, 'São Bernardo do Campo, São Paulo', 'logo-ct-dark.png', 'leandrogomes1905@hotmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$06xTrCHupriedCDuVgzLS.DQjmnVkbQkFHi6PI1hR4LkszV1/nUkS', NULL, NULL, '2022-06-03 19:10:48', '2022-11-21 08:48:12', '2022-11-21 10:48:12'),
(44, 21, 'Alex Mapeli de Souza', NULL, NULL, NULL, NULL, NULL, 'Vendedor atuante no mercado de motocicletas há mais de 20 anos, fazendo sempre o melhor negócio', 'Sem recompensa', 2, 2, 'autorizado', '(11)-99833-7353', 'São Paulo', 'Santo André', NULL, 'Santo André, São Paulo', '1654277433.phpPoZrlM.jpg', 'alex.kawasakisantoandre@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$9Op9w7UbOWJZstIHdKUKuOLyAtMmDJz0oXgLwFDavyPuLU2ZK8pp2', NULL, NULL, '2022-06-03 20:23:42', '2022-11-21 14:31:54', '2022-11-21 16:31:54'),
(45, 22, 'Adriano Ruggi', NULL, NULL, NULL, NULL, NULL, 'A mais de 10 anos consultor de vendas', 'Com recompensa', 2, 2, 'autorizado', '(11)-99499-4923', 'São Paulo', 'São Paulo', NULL, 'São Paulo, São Paulo', '1654278992.phpjF3m5p.png', 'adriano.rugg@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$SWJUxBJV7DV6gm6Nxw6/kuL66s1lbQi61lLMIqSxR40NX3NhjmL76', NULL, NULL, '2022-06-03 20:40:57', '2022-11-21 14:31:57', '2022-11-21 16:31:57'),
(46, 23, 'Adriana Mattos Dog Walker', NULL, NULL, NULL, NULL, NULL, 'Dog Walker e Pet Sitter.\r\nEspecialista em Terapias Holística para Pets e Humanos.\r\nEspecialista em Alimentação Natural.', 'Sem recompensa', 3, 13, 'autorizado', '(11)-96782-1153', 'São Paulo', 'Santo André', NULL, 'Santo André, São Paulo', '1654445778.phpws6qNj.jpg', 'mattosecologia@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$CS/GXbAmcrWXSMFZRYVWaOSIxjqweFzUAthGF6jHoq375GIP5pxFS', NULL, NULL, '2022-06-04 20:31:20', '2022-11-21 14:32:00', '2022-11-21 16:32:00'),
(47, NULL, 'Teste0001', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'Acre', 'Brasiléia', NULL, 'Brasiléia, Acre', 'logo-ct-dark.png', 'teste0001@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$mChfh.encGg2WgDZEkbzn.OEDX7Z0LGV6fI.7TmieBWJgZT27K75u', NULL, NULL, '2022-06-26 00:45:08', '2022-11-21 08:48:13', '2022-11-21 10:48:13'),
(48, NULL, 'Felipe Schmidt Garofalo de Oliveira', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'Santo André', NULL, 'Santo André, São Paulo', 'logo-ct-dark.png', 'felipe@tecnonetz.com.br', 2, NULL, NULL, NULL, NULL, '$2y$10$Nj242hF3SCByBykWcloqx.1ZzQyRJFbeRmLtCvKXKdUiYSHa6iMNK', NULL, NULL, '2022-06-27 15:50:30', '2022-11-21 08:48:15', '2022-11-21 10:48:15'),
(50, NULL, 'Carlos Eduardo Monjane', NULL, NULL, NULL, NULL, NULL, 'sdfdsfdfsdfsd', 'Sem recompensa', 2, 3, 'autorizado', '--', 'Amazonas', 'Anamã', NULL, 'Anamã, Amazonas', 'logo-ct-dark.png', 'carlosmonjane98@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$PJl80Wev7iXvd95BZG.rB.blRtaBU9qD2ZhNr9x93hM5w/lRIKKOq', NULL, NULL, '2022-06-28 19:21:47', '2022-06-28 19:21:47', NULL),
(51, NULL, 'diego costa lima', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'São Bernardo do Campo', NULL, 'São Bernardo do Campo, São Paulo', 'logo-ct-dark.png', 'deigo.cobaya@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$GbRUYkXeF137svos9sNBrOHsj79BgGzW6nUBxBQu/GSr2ln8kxN.a', NULL, NULL, '2022-06-30 20:25:16', '2022-11-21 08:48:17', '2022-11-21 10:48:17'),
(52, 25, 'DIEGO PARK MOTOS', NULL, NULL, NULL, NULL, NULL, 'XONSULTOR DE VENDAS PARK MOTOS', 'Sem recompensa', 2, 2, 'autorizado', '--', 'São Paulo', 'São Bernardo do Campo', NULL, 'São Bernardo do Campo, São Paulo', 'logo-ct-dark.png', 'DIEGOCOBAYALIMA@GMAIL.COM', 3, NULL, NULL, NULL, NULL, '$2y$10$a8BIZQLm7Nr7wo5BXH/ZEenIUxQ2xJ3vvmkggfUFKmLeEOJqaEYp.', NULL, NULL, '2022-06-30 20:28:45', '2022-11-21 14:32:04', '2022-11-21 16:32:04'),
(53, NULL, 'Rafael da Silva Clares', NULL, NULL, NULL, NULL, NULL, 'Squadra Motos - Compra, venda, financiamento e serviços para motocicletas', NULL, NULL, NULL, 'autorizado', '(11)-98858-2727', 'São Paulo', 'São Bernardo do Campo', NULL, 'São Bernardo do Campo, São Paulo', 'logo-ct-dark.png', 'rafaelclares19@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$9Xq9003qDCAk5/ZHbhrRGO5wzOF.mD9sT0foVN..zV/OZ5BMFiQVi', NULL, NULL, '2022-06-30 21:09:51', '2022-11-21 08:48:18', '2022-11-21 10:48:18'),
(54, 26, 'Rafael da Silva Clares', NULL, NULL, NULL, NULL, NULL, 'Squadra Motos', 'Sem recompensa', 2, 2, 'autorizado', NULL, 'São Paulo', 'São Bernardo do Campo', NULL, 'São Bernardo do Campo, São Paulo', '1656612984.phpqXwk6E.jpg', 'squadramotos200@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$zi6uV3iPOSmBB1jEH4U.OuJpqgyePTRk/YBd.JP9pKlDGieOP5gUa', NULL, NULL, '2022-06-30 21:13:58', '2022-11-21 14:32:08', '2022-11-21 16:32:08'),
(55, NULL, 'Adamis capiraco arruda', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', 'São Paulo', 'São Paulo', NULL, 'São Paulo, São Paulo', 'logo-ct-dark.png', 'adamis.arruda@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$1t/zg2Li0Kn.BuXHXyEibOW2lRu80f4L5ByqPRCAtzp2kWoyfKe.6', NULL, NULL, '2022-07-13 21:20:17', '2022-11-21 08:53:33', '2022-11-21 10:53:33'),
(56, 27, 'Felipe Schmidt', NULL, NULL, NULL, NULL, NULL, 'Criação e Desenvolvimento de Sites\r\nMarketing Digital\r\nFacebook e Instagram Ads\r\nGoogle Ads', 'Ganhe 5% do valor negociado!', 3, 16, 'autorizado', NULL, 'São Paulo', 'São Caetano do Sul', NULL, 'São Caetano do Sul, São Paulo', 'logo-ct-dark.png', 'tecnonetz@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$4kmxhGqcjBtv6nhXfoRHouduanatncsPszzLOwDqUTwHCSwX8MKxy', NULL, NULL, '2022-07-18 21:22:25', '2022-11-21 14:32:11', '2022-11-21 16:32:11'),
(57, NULL, 'Will4mm', NULL, NULL, NULL, NULL, NULL, 'Eu sou muito bom', NULL, NULL, NULL, 'autorizado', '(55)-55555-5555', 'Rondônia', 'Alta Floresta D\'Oeste', NULL, 'Alta Floresta D\'Oeste, Rondônia', '1668980739.phpclroxH.png', 'will@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$V7Jg1GCKCU2JfdxAXhdUj.1az82DD9I2uN8u67GK/qReLIDyrRv.6', NULL, NULL, '2022-11-20 19:36:52', '2022-11-20 19:45:39', NULL),
(58, 28, 'willempresa', NULL, NULL, NULL, NULL, NULL, 'Bio teste', 'Sem recompensa', 1, 1, 'autorizado', '(55)-55555-5555', 'Rondônia', 'Alta Floresta D\'Oeste', NULL, 'Alta Floresta D\'Oeste, Rondônia', '1669011293.phpQJdbCh.png', 'willempresa@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$PPdXfb1b/GRqHFa21RCV3eZhlL1xanbuRVfTJIxs2AcN1zD34Qy6G', NULL, NULL, '2022-11-21 04:12:20', '2022-11-21 04:14:53', NULL),
(59, NULL, 'interno01', NULL, NULL, NULL, NULL, NULL, NULL, 'Sem recompensa', NULL, NULL, 'autorizado', '--', NULL, NULL, NULL, 'Enderenco...', 'logo-ct-dark.png', 'interno@gmail.com', 1, NULL, NULL, NULL, NULL, '$2y$10$Nrl4SlLro5DGWisvnKNRP.1ttBd4bOMUNho/PkqykX71NZzv/r8Di', NULL, NULL, '2022-11-21 06:30:19', '2022-11-21 06:30:19', NULL),
(60, NULL, 'interno02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'autorizado', '--', NULL, NULL, NULL, 'Maputo Moçambique', 'logo-ct-dark.png', 'interno02@gmail.com', 4, NULL, NULL, NULL, NULL, '$2y$10$l32l5u19hM0tsKiXUct9XeRVGg4ezagQYMqbhsBhOGeQIM3G5Q.hi', NULL, NULL, '2022-11-21 06:35:14', '2022-11-21 06:55:41', '2022-11-21 08:55:41'),
(61, NULL, 'interno03', NULL, NULL, NULL, NULL, 'Contador', NULL, NULL, NULL, NULL, 'autorizado', '(84)-28482-0223', NULL, NULL, NULL, 'Beira, Matacuane', 'logo-ct-dark.png', 'interno03@gmail.com', 4, NULL, NULL, NULL, NULL, '$2y$10$bUdKK55.AZ/TzKO5IDZpgeLY826c7dlCCjLV/7QObc5BZGU6RxO.K', NULL, NULL, '2022-11-21 06:47:47', '2022-11-21 06:47:47', NULL),
(62, NULL, 'Interno04', NULL, NULL, NULL, NULL, 'Developer', 'My Bio', NULL, NULL, NULL, 'autorizado', '(12)-12123-2131', NULL, NULL, NULL, 'Brasilia', '1669040794.php7JZD0o.jpg', 'interno04@gmail.com', 4, NULL, NULL, NULL, NULL, '$2y$10$tMf3a15zBvEo2bF5PrJOk.v2pDxtJmu2jUSjNZwjqx0RQT2Zc9Adm', NULL, NULL, '2022-11-21 07:02:46', '2022-11-21 12:26:34', NULL),
(63, NULL, 'InternoAdmin01', NULL, NULL, NULL, NULL, 'Gestor', 'Bio chique', NULL, NULL, NULL, 'autorizado', '(23)-12321-4124', NULL, NULL, NULL, 'Goias', '1669024109.phpifMDvA.png', 'internoadmin01@gmail.com', 1, NULL, NULL, NULL, NULL, '$2y$10$.FOcw0b43VONonyYmGMCDubsIW4o477JY0xwhY.mDvoKNwaZ3ZcmW', NULL, NULL, '2022-11-21 07:05:09', '2022-11-21 07:48:29', NULL),
(64, NULL, 'paciente01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'autorizado', '(13)-12124-1241', NULL, NULL, NULL, 'Ender0001', 'logo-ct-dark.png', 'paciente01@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$xGQA2aYE2A5I.srxU2z3NuXe8PmrjyEVBwR72/Dlyr8OxlAvjhqWC', NULL, NULL, '2022-11-21 08:47:26', '2022-11-21 08:47:26', NULL),
(65, NULL, 'Paciente020', '13420-722', 'CPF-123', 'RG-123', 'Comple...-123', NULL, NULL, NULL, NULL, NULL, 'autorizado', '(12)-12321-4214', 'São Paulo', 'Piracicaba', 'Bairro 9', 'Rua Lázaro Gomes da Cruz', NULL, 'paciente02@gmail.com', 2, 'Xico', 'Maria', 'Brasil', 'Rio Grande', '$2y$10$AxadgP6ax/fPvLLWj9PSKeedzmD4HZISDP8iDwvn6MJZgCeGSrLwq', NULL, NULL, '2022-11-21 08:51:55', '2022-11-21 11:59:35', NULL),
(66, NULL, 'Paciente03', 'Brasil', 'Brasil', 'Brasil', 'Brasil', NULL, NULL, NULL, NULL, NULL, 'autorizado', '(32)-42142-3423', 'Brasil', 'Brasil', 'Brasil', 'Brasil', 'logo-ct-dark.png', 'paciente03@gmail.com', 2, 'Brasil', 'Brasil', 'Brasil', 'Brasil', '$2y$10$wpPxdCVUu4XYkJTtAeYqq.KABZ9snZoscdV.baCMDpM6tyrcyPxc.', NULL, NULL, '2022-11-21 12:15:23', '2022-11-21 12:15:23', NULL),
(67, NULL, 'Paciente07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'autorizado', '--', 'Rondônia', 'Alta Floresta D\'Oeste', NULL, 'Alta Floresta D\'Oeste, Rondônia', 'logo-ct-dark.png', 'paciente07@gmail.com', 2, NULL, NULL, NULL, NULL, '$2y$10$SNcuMxz1HfTwq4RHcpHvaeAWMBD5efzgX3LE5afUtb6T1eccBatdO', NULL, NULL, '2022-11-21 13:18:09', '2022-11-21 13:18:09', NULL),
(68, 29, 'Pro0113', NULL, NULL, NULL, NULL, NULL, 'Ola, my bio', NULL, NULL, NULL, 'autorizado', '(21)-31231-2321', 'Acre', 'Assis Brasil', NULL, 'Assis Brasil, Acre', '1669044594.phpjxV2gm.png', 'pro011@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$QiftadWU9/5epQhhRYIaPelFs9WuBPq4zIw55WG5pam6I.N4IqNi.', NULL, NULL, '2022-11-21 13:22:29', '2022-11-21 14:13:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `description`) VALUES
(1, 'Administrador', 'Faz tudo, cria outros users, empresas e pacientes'),
(2, 'Paciente', ''),
(3, 'Empresa', ''),
(4, 'Registrant', 'É Admin, mas ñ cria outros admins');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_categories` (`category_id`);

--
-- Indexes for table `favorite_profissional`
--
ALTER TABLE `favorite_profissional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicacao`
--
ALTER TABLE `indicacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificacao`
--
ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profissional_categories`
--
ALTER TABLE `profissional_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profissional_subcategories`
--
ALTER TABLE `profissional_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type_id` (`user_type_id`),
  ADD KEY `user_shop_id` (`shop_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `favorite_profissional`
--
ALTER TABLE `favorite_profissional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `indicacao`
--
ALTER TABLE `indicacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `notificacao`
--
ALTER TABLE `notificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `profissional_categories`
--
ALTER TABLE `profissional_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profissional_subcategories`
--
ALTER TABLE `profissional_subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `shop_categories` FOREIGN KEY (`category_id`) REFERENCES `shop_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_shop_id` FOREIGN KEY (`shop_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_type_id` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
