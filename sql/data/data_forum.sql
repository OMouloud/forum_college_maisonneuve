CREATE DATABASE  IF NOT EXISTS `forum_maisonneuve` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `forum_maisonneuve`;
-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: forum_maisonneuve
-- ------------------------------------------------------
-- Server version	9.3.0

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
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forum` (
  `id_forum` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `date_creation` date NOT NULL,
  `utilisateur_id` int NOT NULL,
  PRIMARY KEY (`id_forum`),
  KEY `fk_Forum_utilisateur_idx` (`utilisateur_id`),
  CONSTRAINT `fk_Forum_Utilisateur` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum`
--

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
INSERT INTO `forum` VALUES (2,'Angular','Angular est un framework open source de développement web, géré par Google, qui permet de créer des applications web monopages (SPA) et des interfaces utilisateur dynamiques en utilisant le langage TypeScript, HTML et CSS...........UPDATED UPDATED','2025-08-22',1),(3,'React JS','React (ou React.js) est une bibliothèque JavaScript open source maintenue par Meta (Facebook) et une communauté de développeurs pour construire des interfaces utilisateur (UI) web interactives et des applications monopages (SPA). Elle permet de créer des composants UI réutilisables et de gérer l\'état de l\'application de manière efficace grâce à un DOM virtuel, rendant les mises à jour de l\'interface plus rapides et performante.....UPDATED UPDATED UPDATED','2025-08-22',2),(4,'Vue JS','Vue.js (prononcé « view ») est un framework JavaScript open source, léger et progressif, utilisé pour créer des interfaces utilisateur et des applications web monopages. Il est basé sur les standards HTML, CSS et JavaScript et se distingue par son architecture adaptable, sa facilité de prise en main, et un système de composants réutilisables. ....UPDATED UPDATED UPDATED','2025-08-22',3),(5,'Docker','En informatique, Docker est une plateforme open source qui permet de créer, déployer et gérer des applications à l\'aide de « conteneurs ». Ces conteneurs sont des unités logicielles standardisées qui regroupent le code d\'une application, toutes ses dépendances (bibliothèques, outils système, environnement d\'exécution) et ses fichiers de configuration dans un paquet isolable. Cela permet de garantir que l\'application s\'exécutera de manière cohérente et fiable dans n\'importe quel environnement, qu\'il s\'agisse d\'un ordinateur portable, d\'un serveur ou du cloud. ...','2025-08-22',2),(7,'PHP','PHP (acronyme récursif pour PHP: Hypertext Preprocessor) est un langage de programmation open-source principalement utilisé pour le développement d\'applications web dynamiques côté serveur. Il permet de créer du contenu interactif en traitant des informations côté serveur avant d\'envoyer le résultat (souvent du code HTML) au navigateur de l\'utilisateur, et il est capable de se connecter à des bases de données pour stocker et gérer des données. UPDATED','2025-08-23',2),(8,'Laravel','Laravel est un framework PHP open source qui simplifie la création d\'applications web modernes en fournissant une structure et des outils pour le développement back-end et front-end. Il utilise l\'architecture Modèle-Vue-Contrôleur (MVC) pour organiser le code, ce qui facilite le développement d\'applications complexes, sécurisées et performantes, de la création d\'API au commerce électronique.','2025-08-23',2),(9,'SQL','SQL, ou Structured Query Language, est un langage de programmation conçu pour gérer et interroger les bases de données relationnelles. Il permet d\'interagir avec ces bases de données, qui stockent les données sous forme de tableaux organisés en lignes et colonnes, pour effectuer des actions comme la création, la mise à jour, la suppression et la récupération de données. UPDATED','2025-08-24',4),(10,'Java','Java est un langage de programmation et une plateforme logicielle multiplateforme, populaire pour le développement d\'applications web, mobiles (Android), d\'entreprise, de Big Data, et d\'objets connectés. Il permet d\'écrire du code qui s\'exécute sur n\'importe quel système grâce à la machine virtuelle Java (JVM), et est apprécié pour sa fiabilité, sa sécurité et son adaptabilité. ','2025-08-24',4);
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-24 15:44:25
