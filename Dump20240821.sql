-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tcc
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `CPF` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `Nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Telefone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Rua` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DataDeNascimento` date DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Numero` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Bairro` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Complemento` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES ('1234','eu','000100779@senaialuno.com454','465645',NULL,'2020-02-20','$2y$10$8n8U78PYnagsS8yAzX7jmeaCeRWMf76AQVlRelnEahExvrzvlnjtm','585','sao','RR'),('19716815155','Goku',NULL,NULL,NULL,NULL,'','','',NULL),('48946','gildo pereira','000100779@senaialuno.com','4656','fdsfdsfdfdsfds','2024-08-01','$2y$10$pAlNPj.d0WSNE7WA3Ab.b.DaP5qcnMZOK.Tw0dgfAICb6d9qPTovS','','',NULL),('654','jeysa','000100779@senaialuno.com454','465645',NULL,'2024-08-01','$2y$10$aZsPQqobKJxrQMnQulrh0.WCsR/rKqiEQHqJC.jxLGUM6kCjTI3QW','585','sao','');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamentos`
--

DROP TABLE IF EXISTS `equipamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipamentos` (
  `IP` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `Mac` varchar(17) COLLATE utf8mb4_general_ci NOT NULL,
  `Tipo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Descrição` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cliente_CPF` varchar(11) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Funcionario_Matricula` int DEFAULT NULL,
  `link` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link1` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link2` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link3` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link4` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link5` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link6` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link7` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link8` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`IP`),
  UNIQUE KEY `Mac` (`Mac`),
  KEY `Cliente_CPF` (`Cliente_CPF`),
  KEY `fk_equipamentos_funcionario` (`Funcionario_Matricula`),
  CONSTRAINT `equipamentos_ibfk_1` FOREIGN KEY (`Cliente_CPF`) REFERENCES `clientes` (`CPF`),
  CONSTRAINT `fk_equipamentos_funcionario` FOREIGN KEY (`Funcionario_Matricula`) REFERENCES `funcionarios` (`Matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamentos`
--

LOCK TABLES `equipamentos` WRITE;
/*!40000 ALTER TABLE `equipamentos` DISABLE KEYS */;
INSERT INTO `equipamentos` VALUES ('172.16.0.100','50:00:00:1F:01:00','Switch Principal','Mikrotik CRS317-1G-16S+RM\n66 portas Gigabit Ethernet (7 portas ocupadas)',NULL,1000,'http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&refresh=5s&panelId=1','http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&panelId=6','http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&refresh=5s&panelId=2','http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&refresh=5s&panelId=3','http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&refresh=5s&panelId=7','http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&refresh=5s&panelId=8','http://172.16.0.31:3000/d-solo/bdskg6vsd71fka/switch-principal?orgId=1&refresh=5s&panelId=9'),('172.16.0.110','50:00:00:1F:01:10','Switch 1° Andar','Setor Comercial\r\nMikrotik CSS610-8G-2S+IN\r\n8 portas Gigabit Ethernet (5 portas ocupadas)',NULL,1000,'http://172.16.0.31:3000/d-solo/edsrl1d356874d/switch-1c2b0-andar?orgId=1&refresh=5s&panelId=1','http://172.16.0.31:3000/d-solo/edsrl1d356874d/switch-1c2b0-andar?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/edsrl1d356874d/switch-1c2b0-andar?orgId=1&refresh=5s&panelId=2','http://172.16.0.31:3000/d-solo/edsrl1d356874d/switch-1c2b0-andar?orgId=1&refresh=5s&panelId=3','http://172.16.0.31:3000/d-solo/edsrl1d356874d/switch-1c2b0-andar?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/edsrl1d356874d/switch-1c2b0-andar?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/edsrl1d356874d/switch-1c2b0-andar?orgId=1&refresh=5s&panelId=7','',''),('172.16.0.120','50:00:00:1F:01:20','Switch 2° Andar','Setor Retenção\r\nMikrotik CSS610-8G-2S+IN\r\n8 portas Gigabit Ethernet (5 portas ocupadas)',NULL,1000,'http://172.16.0.31:3000/d-solo/bdsriilkfajgga/switch-2c2b0-andar?orgId=1&refresh=5s&panelId=1','http://172.16.0.31:3000/d-solo/bdsriilkfajgga/switch-2c2b0-andar?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/bdsriilkfajgga/switch-2c2b0-andar?orgId=1&refresh=5s&panelId=2','http://172.16.0.31:3000/d-solo/bdsriilkfajgga/switch-2c2b0-andar?orgId=1&refresh=5s&panelId=3','http://172.16.0.31:3000/d-solo/bdsriilkfajgga/switch-2c2b0-andar?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/bdsriilkfajgga/switch-2c2b0-andar?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/bdsriilkfajgga/switch-2c2b0-andar?orgId=1&refresh=5s&panelId=7','',''),('172.16.0.130','50:00:00:1F:01:30','Switch 3° Andar','Setor Cobrança\r\nMikrotik CSS610-8G-2S+IN\r\n8 portas Gigabit Ethernet (5 portas ocupadas)',NULL,1000,'http://172.16.0.31:3000/d-solo/cdsrjvhh7vjlsa/switch-3c2b0-andar?orgId=1&refresh=5s&panelId=1','http://172.16.0.31:3000/d-solo/cdsrjvhh7vjlsa/switch-3c2b0-andar?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/cdsrjvhh7vjlsa/switch-3c2b0-andar?orgId=1&refresh=5s&panelId=2','http://172.16.0.31:3000/d-solo/cdsrjvhh7vjlsa/switch-3c2b0-andar?orgId=1&refresh=5s&panelId=3','http://172.16.0.31:3000/d-solo/cdsrjvhh7vjlsa/switch-3c2b0-andar?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/cdsrjvhh7vjlsa/switch-3c2b0-andar?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/cdsrjvhh7vjlsa/switch-3c2b0-andar?orgId=1&refresh=5s&panelId=7','',''),('172.16.0.14','50:00:00:1F:11:00','PC_100','Dell OptiPlex \r\nSistema Windows\r\nIntel Core i5 \r\nMemória RAM 8GB \r\nSSDs 256GB',NULL,100,'http://172.16.0.31:3000/d-solo/edskvu90k2p6od/pc-100?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/edskvu90k2p6od/pc-100?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/edskvu90k2p6od/pc-100?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/edskvu90k2p6od/pc-100?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.140','50:00:00:1F:01:40','Switch 4° Andar','Setor Suporte\r\nMikrotik CSS610-8G-2S+IN\r\n8 portas Gigabit Ethernet (5 portas ocupadas)',NULL,1000,'http://172.16.0.31:3000/d-solo/ddsrlsizhmxhcf/switch-4c2b0-andar?orgId=1&refresh=5s&panelId=1','http://172.16.0.31:3000/d-solo/ddsrlsizhmxhcf/switch-4c2b0-andar?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/ddsrlsizhmxhcf/switch-4c2b0-andar?orgId=1&refresh=5s&panelId=2','http://172.16.0.31:3000/d-solo/ddsrlsizhmxhcf/switch-4c2b0-andar?orgId=1&refresh=5s&panelId=3','http://172.16.0.31:3000/d-solo/ddsrlsizhmxhcf/switch-4c2b0-andar?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/ddsrlsizhmxhcf/switch-4c2b0-andar?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/ddsrlsizhmxhcf/switch-4c2b0-andar?orgId=1&refresh=5s&panelId=7','',''),('172.16.0.150','50:00:00:1F:01:50','Switch 5° Andar','Servicedesk\r\nMikrotik CSS610-8G-2S+IN\r\n8 portas Gigabit Ethernet (5 portas ocupadas)',NULL,1000,'http://172.16.0.31:3000/d-solo/adsrm1togcq9se/switch-5c2b0-andar?orgId=1&refresh=5s&panelId=1','http://172.16.0.31:3000/d-solo/adsrm1togcq9se/switch-5c2b0-andar?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/adsrm1togcq9se/switch-5c2b0-andar?orgId=1&refresh=5s&panelId=2','http://172.16.0.31:3000/d-solo/adsrm1togcq9se/switch-5c2b0-andar?orgId=1&refresh=5s&panelId=3','http://172.16.0.31:3000/d-solo/adsrm1togcq9se/switch-5c2b0-andar?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/adsrm1togcq9se/switch-5c2b0-andar?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/adsrm1togcq9se/switch-5c2b0-andar?orgId=1&refresh=5s&panelId=7','',''),('172.16.0.160','50:00:00:1F:01:60','Switch 6° Andar','Setor Marketing\r\nMikrotik CSS610-8G-2S+IN\r\n8 portas Gigabit Ethernet (5 portas ocupadas)',NULL,1000,'http://172.16.0.31:3000/d-solo/adsrm9myb8rggd/switch-6c2b0-andar?orgId=1&refresh=5s&panelId=1','http://172.16.0.31:3000/d-solo/adsrm9myb8rggd/switch-6c2b0-andar?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/adsrm9myb8rggd/switch-6c2b0-andar?orgId=1&refresh=5s&panelId=2','http://172.16.0.31:3000/d-solo/adsrm9myb8rggd/switch-6c2b0-andar?orgId=1&refresh=5s&panelId=3','http://172.16.0.31:3000/d-solo/adsrm9myb8rggd/switch-6c2b0-andar?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/adsrm9myb8rggd/switch-6c2b0-andar?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/adsrm9myb8rggd/switch-6c2b0-andar?orgId=1&refresh=5s&panelId=7','','http://172.16.0.31:3000/d/edt9c0dzat43kb/status-equipamentos?orgId=1&from=1722527555579&to=1722549155579'),('172.16.0.21','50:00:00:1F:01:01','PC_101','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,101,'http://172.16.0.31:3000/d-solo/fdsrta9204irkb/pc-101?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/fdsrta9204irkb/pc-101?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/fdsrta9204irkb/pc-101?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/fdsrta9204irkb/pc-101?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.35','50:00:00:1F:01:02','PC_102','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,102,'http://172.16.0.31:3000/d-solo/bdtcmbvvw1logf/pc-102?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/bdtcmbvvw1logf/pc-102?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/bdtcmbvvw1logf/pc-102?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/bdtcmbvvw1logf/pc-102?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.41','50:00:00:1F:01:03','PC_103','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,103,'http://172.16.0.31:3000/d-solo/cdtcmgo3a1jpca/pc-103?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/cdtcmgo3a1jpca/pc-103?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/cdtcmgo3a1jpca/pc-103?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/cdtcmgo3a1jpca/pc-103?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.42','50:00:00:1F:02:00','PC_200','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,200,'http://172.16.0.31:3000/d-solo/edtcmkgjuul1cc/pc-200?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/edtcmkgjuul1cc/pc-200?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/edtcmkgjuul1cc/pc-200?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/edtcmkgjuul1cc/pc-200?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.43','50:00:00:1F:02:01','PC_201','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,201,'http://172.16.0.31:3000/d-solo/fdtcmpv6bjh1cf/pc-201?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/fdtcmpv6bjh1cf/pc-201?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/fdtcmpv6bjh1cf/pc-201?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/fdtcmpv6bjh1cf/pc-201?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.44','50:00:00:1F:02:02','PC_202','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,202,'http:/Views/172.16.0.31:3000/d-solo/fdtcmt2l05lhcc/pc-202?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/fdtcmt2l05lhcc/pc-202?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/fdtcmt2l05lhcc/pc-202?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/fdtcmt2l05lhcc/pc-202?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.45','50:00:00:1F:02:03','PC_203','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,203,'http://172.16.0.31:3000/d-solo/bdtcmwpjti1a8b/pc-203?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/bdtcmwpjti1a8b/pc-203?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/bdtcmwpjti1a8b/pc-203?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/bdtcmwpjti1a8b/pc-203?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.46','50:00:00:1F:03:00','PC_300','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,300,'http://172.16.0.31:3000/d-solo/cdtcmzxo62lmof/pc-300?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/cdtcmzxo62lmof/pc-300?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/cdtcmzxo62lmof/pc-300?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/cdtcmzxo62lmof/pc-300?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.47','50:00:00:1F:03:01','PC_301','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,301,'http://172.16.0.31:3000/d-solo/ddtco88fdu8lca/pc-301?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/ddtco88fdu8lca/pc-301?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/ddtco88fdu8lca/pc-301?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/ddtco88fdu8lca/pc-301?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.48','50:00:00:1F:03:02','PC_302','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,302,'http://172.16.0.31:3000/d-solo/bdtcqh7nr905cc/pc-302?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/bdtcqh7nr905cc/pc-302?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/bdtcqh7nr905cc/pc-302?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/bdtcqh7nr905cc/pc-302?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.49','50:00:00:1F:03:03','PC_303','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,303,'http://172.16.0.31:3000/d-solo/fdtcqkmrk3lkwd/pc-303?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/fdtcqkmrk3lkwd/pc-303?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/fdtcqkmrk3lkwd/pc-303?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/fdtcqkmrk3lkwd/pc-303?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.50','50:00:00:1F:04:00','PC_400','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,400,'http://172.16.0.31:3000/d-solo/fdtcqp8pkrchsf/pc-400?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/fdtcqp8pkrchsf/pc-400?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/fdtcqp8pkrchsf/pc-400?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/fdtcqp8pkrchsf/pc-400?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.51','50:00:00:1F:04:01','PC_401','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,401,'http://172.16.0.31:3000/d-solo/ddtcqsikwrqpsa/pc-401?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/ddtcqsikwrqpsa/pc-401?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/ddtcqsikwrqpsa/pc-401?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/ddtcqsikwrqpsa/pc-401?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.52','50:00:00:1F:04:02','PC_402','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,402,'http://172.16.0.31:3000/d-solo/ddtcqzc89akn4c/pc-402?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/ddtcqzc89akn4c/pc-402?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/ddtcqzc89akn4c/pc-402?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/ddtcqzc89akn4c/pc-402?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.53','50:00:00:1F:04:03','PC_403','Dell OptiPlex Sistema Windows Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,403,'http://172.16.0.31:3000/d-solo/edtcr1x55tpmob/pc-403?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/edtcr1x55tpmob/pc-403?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/edtcr1x55tpmob/pc-403?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/edtcr1x55tpmob/pc-403?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.54','50:00:00:1F:05:00','PC_500','Dell OptiPlex Sistema Linux Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,500,'http://172.16.0.31:3000/d-solo/adtcr6pwt00lca/pc-500?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/adtcr6pwt00lca/pc-500?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/adtcr6pwt00lca/pc-500?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/adtcr6pwt00lca/pc-500?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.55','50:00:00:1F:05:01','PC_501','Dell OptiPlex Sistema Linux Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,501,'http://172.16.0.31:3000/d-solo/fdtcroi4qm5mob/pc-501?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/fdtcroi4qm5mob/pc-501?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/fdtcroi4qm5mob/pc-501?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/fdtcroi4qm5mob/pc-501?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.56','50:00:00:1F:05:02','PC_502','Dell OptiPlex Sistema Linux Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,502,'http://172.16.0.31:3000/d-solo/ddtcrs089l3wgc/pc-502?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/ddtcrs089l3wgc/pc-502?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/ddtcrs089l3wgc/pc-502?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/ddtcrs089l3wgc/pc-502?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.57','50:00:00:1F:05:03','PC_503','Dell OptiPlex Sistema Linux Intel Core i5 Memória RAM 8GB SSDs 256GB',NULL,503,'http://172.16.0.31:3000/d-solo/bbdtcruvc6p5vkf/pc-503?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/bdtcruvc6p5vkf/pc-503?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/bdtcruvc6p5vkf/pc-503?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/bdtcruvc6p5vkf/pc-503?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.58','50:00:00:1F:06:00','PC_600','iMac Apple Tela Retina 24\" 4.5K, Chip M3, CPU 8 Núcleos GPU 10 Núcleos, SSD 256GB',NULL,600,'http://172.16.0.31:3000/d-solo/adtcry13k82rkf/pc-600?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/adtcry13k82rkf/pc-600?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/adtcry13k82rkf/pc-600?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/adtcry13k82rkf/pc-600?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.59','50:00:00:1F:06:01','PC_601','iMac Apple Tela Retina 24\" 4.5K, Chip M3, CPU 8 Núcleos GPU 10 Núcleos, SSD 256GB',NULL,601,'http://172.16.0.31:3000/d-solo/edtcs2ldptfcwf/pc-601?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/edtcs2ldptfcwf/pc-601?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/edtcs2ldptfcwf/pc-601?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/edtcs2ldptfcwf/pc-601?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.60','50:00:00:1F:06:02','PC_602','iMac Apple Tela Retina 24\" 4.5K, Chip M3, CPU 8 Núcleos GPU 10 Núcleos, SSD 256GB',NULL,602,'http://172.16.0.31:3000/d-solo/ddtcs5eh0dreoe/pc-602?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/ddtcs5eh0dreoe/pc-602?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/ddtcs5eh0dreoe/pc-602?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/ddtcs5eh0dreoe/pc-602?orgId=1&refresh=5s&panelId=3','','','','',''),('172.16.0.61','50:00:00:1F:06:03','PC_603','iMac Apple Tela Retina 24\" 4.5K, Chip M3, CPU 8 Núcleos GPU 10 Núcleos, SSD 256GB',NULL,603,'http://172.16.0.31:3000/d-solo/cdtcs8temze2oe/pc-603?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/cdtcs8temze2oe/pc-603?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/cdtcs8temze2oe/pc-603?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/cdtcs8temze2oe/pc-603?orgId=1&refresh=5s&panelId=3','','','','','');
/*!40000 ALTER TABLE `equipamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionarios` (
  `Matricula` int NOT NULL,
  `Nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `DataDeNascimento` date DEFAULT NULL,
  `EmailCorporativo` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `permissao_id` int DEFAULT NULL,
  PRIMARY KEY (`Matricula`),
  KEY `permissao_id` (`permissao_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` VALUES (1,'Joal Silva','1980-04-21','joalSilva@valenet.com','$2y$10$NyBWyTJH0oEiBbik7qBbfOdKK1zdoSnkF4jQZ./NkMD.UPbA0I7wO',1),(12,'Roberta Miranda','2024-08-15','robertamiranda@valenet.com','$2y$10$NyBWyTJH0oEiBbik7qBbfOdKK1zdoSnkF4jQZ./NkMD.UPbA0I7wO',2),(100,'Ana Souza','1985-05-11','anaSouza@valenet.com','',3),(101,'Carlos Pereira','1990-06-30','carlosPereira@valenet.com','',3),(102,'Maria Oliveira','1978-03-15','mariaOliveira@valenet.com','',3),(103,'Pedro Santos','1982-07-24','pedroSantos@valenet.com','',3),(200,'Juliana Alves','1988-02-19','julianaAlves@valenet.com','',3),(201,'Rafael Costa','1991-12-05','rafaelCosta@valenet.com','',3),(202,'Fernanda Lima','1979-09-27','fernandaLima@valenet.com','',3),(203,'Lucas Rocha','1986-11-14','lucasRocha@valenet.com','',3),(300,'Patrícia Nunes','1983-08-23','patriciaNunes@valenet.com','',3),(301,'Rodrigo Ribeiro','1987-10-18','rodrigoRibeiro@valenet.com','',3),(302,'Aline Fernandes','1992-01-30','alineFernandes@valenet.com','',3),(303,'Marcelo Souza','1981-04-11','marceloSouza@valenet.com','',3),(400,'Cláudia Martins','1977-05-29','claudiaMartins@valenet.com','',3),(401,'Fábio Almeida','1984-06-17','fabioAlmeida@valenet.com','',3),(402,'Gabriela Santos','1989-07-08','gabrielaSantos@valenet.com','',3),(403,'Vinícius Rodrigues','1993-08-03','viniciusRodrigues@valenet.com','',3),(500,'Camila Costa','1980-09-20','camilaCosta@valenet.com','',3),(501,'André Silva','1985-10-25','andreSilva@valenet.com','',3),(502,'Mariana Mendes','1990-11-16','marianaMendes@valenet.com','',3),(503,'Eduardo Barros','1982-12-07','eduardoBarros@valenet.com','',3),(600,'Tatiana Pereira','1988-01-26','tatianaPereira@valenet.com','',3),(601,'Ricardo Lima','1991-02-11','ricardoLima@valenet.com','',3),(602,'Vanessa Alves','1979-03-21','vanessaAlves@valenet.com','',3),(603,'Leonardo Neves','1983-04-09','leonardoNeves@valenet.com','',3),(1000,'Dean Winchester','1992-09-17','deanwinchester@valenet.com','$2y$10$VkioivkAndJ0X/UJa5s8heX.v.54WJ3HlTC6D246Vvl1.Q08zwdR.',2);
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links_principais`
--

DROP TABLE IF EXISTS `links_principais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `links_principais` (
  `link1` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL,
  `link3` varchar(255) DEFAULT NULL,
  `link4` varchar(255) DEFAULT NULL,
  `link5` varchar(255) DEFAULT NULL,
  `link6` varchar(255) DEFAULT NULL,
  `link7` varchar(255) DEFAULT NULL,
  `link8` varchar(255) DEFAULT NULL,
  `link9` varchar(255) DEFAULT NULL,
  `link10` varchar(255) DEFAULT NULL,
  `link11` varchar(255) DEFAULT NULL,
  `link12` varchar(255) DEFAULT NULL,
  `link13` varchar(255) DEFAULT NULL,
  `link14` varchar(255) DEFAULT NULL,
  `link15` varchar(255) DEFAULT NULL,
  `link16` varchar(255) DEFAULT NULL,
  `link17` varchar(255) DEFAULT NULL,
  `link18` varchar(255) DEFAULT NULL,
  `link19` varchar(255) DEFAULT NULL,
  `link20` varchar(255) DEFAULT NULL,
  `link21` varchar(255) DEFAULT NULL,
  `link22` varchar(255) DEFAULT NULL,
  `link23` varchar(255) DEFAULT NULL,
  `link24` varchar(255) DEFAULT NULL,
  `link25` varchar(255) DEFAULT NULL,
  `link26` varchar(255) DEFAULT NULL,
  `link27` varchar(255) DEFAULT NULL,
  `link28` varchar(255) DEFAULT NULL,
  `link29` varchar(255) DEFAULT NULL,
  `link30` varchar(255) DEFAULT NULL,
  `link31` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links_principais`
--

LOCK TABLES `links_principais` WRITE;
/*!40000 ALTER TABLE `links_principais` DISABLE KEYS */;
INSERT INTO `links_principais` VALUES ('http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=1','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=2','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=15','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=14','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=13','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=7','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=11','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=10','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=8','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=9','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=5','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=4','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=12','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=6','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=3','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=36','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=32','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=31','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=35','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=34','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=33','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=30','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=28','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=29','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=27','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=26','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=25','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=23','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=24','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=22','http://172.16.0.31:3000/d-solo/edt9c0dzat43kb/status-equipamentos?orgId=1&refresh=5s&panelId=21');
/*!40000 ALTER TABLE `links_principais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissao`
--

DROP TABLE IF EXISTS `permissao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_permissao` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=413 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissao`
--

LOCK TABLES `permissao` WRITE;
/*!40000 ALTER TABLE `permissao` DISABLE KEYS */;
INSERT INTO `permissao` VALUES (1,'Administrador','Pode visualizar, editar e gerenciar configurações'),(2,'Operador','Pode visualizar e editar dados'),(3,'Leitor','Apenas pode visualizar dados');
/*!40000 ALTER TABLE `permissao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-21 19:44:41
