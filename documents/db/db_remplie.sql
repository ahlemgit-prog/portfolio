CREATE DATABASE  IF NOT EXISTS `portfolio` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `portfolio`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: portfolio
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authors` (
  `idauthors` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idauthors`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'img/blog/author_9.png','Essid','Ahlem','');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `idblogs` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `jourPublication` varchar(45) DEFAULT NULL,
  `moisPublication` varchar(45) DEFAULT NULL,
  `lienArticle` varchar(255) DEFAULT NULL,
  `sousTitre` varchar(255) DEFAULT NULL,
  `titreTexte` varchar(255) DEFAULT NULL,
  `texte` mediumtext,
  `nombreCommentaire` decimal(8,0) DEFAULT NULL,
  `lienTag` varchar(255) DEFAULT NULL,
  `lienCommentaire` varchar(255) DEFAULT NULL,
  `lienDate` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idblogs`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'News','img/blog/single_blog_7.png','16','Dec','conception.html','Trouver une conception éthique','Intégrer l\'éthique dans le travail quotidien du design','En tant que concepteur visuel au sein de l\'équipe Material Design de Google, mon travail va au-delà de la création de styles visuels.Cela inclut un travail qui n\'est pas explicitement «visuel», en tenant compte des expériences fonctionnelles et des facteurs de la vie quotidienne d\'une personne.  ',0,'https://material.io/blog/finding-ethical-design','conception','conception','Visual, Material Design'),(2,NULL,'img/blog/single_blog_6.png','1','Oct','selfies.html','Trouver le bien-être dans les filtres et les selfies','Comment intégrer la transparence et le contrôle dans les fonctionnalités de retouche de visage.','Des simples clichés aux séances photo complètes, les applications et les filtres pour appareil photo sont là pour rester.\n                                  Mais la popularité croissante des «filtres de beauté» et des fonctionnalités de retouche du visage a suscité une question importante au sein de l\'équipe de bien-être numérique de Google:\n                                  ces filtres ont-ils un impact sur le bien-être mental ?',0,'https://material.io/blog/digital-wellbeing-face-retouching','selfies.html','selfies.html','Selfies, Material Design'),(3,NULL,'img/blog/single_blog_9.png','17','Sep','bien-etre-numerique.html','Principes axés sur les personnes pour le bien-être numérique','Un aperçu des fondations de l\'UX à la base de la boîte à outils de bien-être numérique de Google','En pensant au bien-être numérique, Material s\'efforce de répondre aux besoins fondamentaux des gens . Mais comment, d\'un point de vue pratique, le besoin de bien-être général et de relations saines avec les produits numériques est-il intégré dans le système de conception matérielle ?',0,'https://material.io/blog/digital-wellbeing-ux-principles','bien-etre-numerique.html','bien-etre-numerique.html','Numerique, Material Design'),(4,NULL,'img/blog/single_blog_8.png','12','Mars','gestalt.html','Principes de Gestalt dans la conception Web',NULL,'Peut-être que trop de designers négligent l\'importance de la psychologie dans le processus de création et l\'impact que certains de ses principes ont dans les choix de conception qui sont faits au quotidien, qu\'ils soient imprimés ou numériques. Dans la conception Web, ces principes sont efficacement appliqués dans le domaine de l\'interface utilisateur (UI) permettant aux messages d\'arriver de manière agréable et dynamique, en guidant la perception visuelle de celle-ci. ',0,'https://swapps.com/blog/gestalt-principles-in-web-design/','gestalt.html','gestalt.html','Gestalt, Swapps'),(5,NULL,'img/blog/single_blog_10.png','15','Jan','fidelisation.html','Comment fidéliser les visiteurs de votre site web ?','La stratégie de fidélisation','Il existe 6 astuces pour fidéliser votre audience et lui donner envie de retourner régulièrement sur votre site.  Plus votre audience restera longtemps sur votre site et y retournera régulièrement, plus vous aurez de chances de lui faire réaliser une action.',0,'https://www.btobmarketers.fr/ecommerce/comment-fideliser-les-visiteurs-de-votre-site-web/','fidelisation.html','fidelisation.html','UX Design, Fidelisation'),(6,NULL,'img/blog/single_blog_11.png','20','Sep','gamification.html','Le concept de la gamification au service de l\'expérience utilisateur','Comment gamifier un site web ?','Toujours à la recherche de nouvelles techniques afin d’améliorer l’expérience utilisateur, les UX designers se prennent aux jeux et utilisent le concept de la gamification pour susciter des émotions et du plaisir aux utilisateurs en ajoutant un élément amusant et agréable à utiliser.',0,'https://www.emydigital.fr/concept-de-la-gamification-au-service-de-lexperience-utilisateur/','gamification.html','gamification.html',' UX design, Gamification'),(7,NULL,'img/blog/single_blog_13.png','10','Dec','logo.html','3 tendances de conception de logo pour 2021 pour booster votre image de marque','Quelles tendances utiliser pour votre marque en 2021','Chaque marque commence par le logo. Cela reflète qui vous êtes. Lorsque les gens cliquent sur votre site Web, ils voient d\'abord le logo. C\'est une base pour votre livre de marque. Le logo comprend les couleurs de votre entreprise et fournit une direction de style pour votre marque.',0,'https://medium.com/better-marketing/6-logo-design-trends-for-2021-to-boost-your-branding-b938f1dbb0f0','logo.html','logo.html','UI design, Logo'),(8,NULL,'img/blog/single_blog_14.png','3','Sep','animation.html','Lottie (Bodymovin) : des animations plus fluides pour votre application','Les animations ont un impact considérable sur vos utilisateurs.','Grâce à Lottie, insérez des animations plus fluides et réactives qu’un format GIF pour vos applications iOS, Android et vos sites web. Exportez directement au format JSON depuis After Effects et créez des interactions avancées dans vos applications à l’aide de PandaSuite.',0,'https://blog.pandasuite.com/fr/lottie-bodymovin-des-animations-pour-votre-app/','animation.html','animation.html','Animation, PandaSuiteBlog'),(9,NULL,'img/blog/single_blog_15.gif','17','Jan','duolingo.html','Duolingo, une application éducative sous forme de ludification','Avez-vous déjà pensé à parler une nouvelle langue ?','Cette même pensée énergisante à poussé quelques millions de personnes à  essayer l\'application Duolingo. C\'est un outil purement freemium pour apprendre l\'une des 36 langues. Celles-ci incluent des langues peu parlées tels les dialectes. Duolingo est une application éducative sous forme de jeu qui respecte les principes de gamification.',0,'duolingo.html','duolingo.html','duolingo.html','UX design, Ludification'),(10,NULL,'img/blog/single_blog_16.gif','3','Fev','legos.html','La représentation mentale des legos',NULL,'Le joueur a besoin de construire schématiquement sa propre persception pour développer sa créativité. Il suffit d\'assembler un ensemble de legos pour que les formes se transforment rapidement en un souvenir tel un événemment, un film ou un animal en particulier.',0,'legos.html','legos.html','legos.html','Legos, Gestalt'),(11,NULL,'img/blog/single_blog_17.gif','10','Dec','jeux-video.html','Développement de jeux vidéo','Les games players & tutoriels à la mode','Les jeux vidéo sont parmi les activités numériques les plus populaires. L\'arrivée continue de nouvelles technologies permet de développer encore des jeux de meilleure qualité et plus performants qui peuvent fonctionner dans n\'importe quel navigateur ou console respectant les standards du web.',0,'jeux-video.html','jeux-video.html','jeux-video.html','Jeux vidéos, Technologie');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `idcategories` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `nombrePosts` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcategories`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Photoshop','bechic.html','1'),(2,'Illustrator','todzilla.html','2'),(3,'Adobe XD','xabia.html','1'),(4,'HTML Sémantique','piccolo.html','1'),(5,'Vanilla JS','ajax.html','1'),(6,'CSS','framework_css.html','1'),(7,'Psychologie','news1.html','4'),(8,'UI Design','news3.html','4'),(9,'UX Design','news2.html','4'),(10,'Animation','animation.html','1'),(11,'Technologie','jeux-video.html','1');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentaires` (
  `idcommentaires` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(45) DEFAULT NULL,
  `texte` mediumtext,
  `prenom` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `nombreCommentaire` decimal(8,0) DEFAULT NULL,
  `datePublication` date DEFAULT NULL,
  PRIMARY KEY (`idcommentaires`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaires`
--

LOCK TABLES `commentaires` WRITE;
/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `idcontacts` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `message` mediumtext,
  `nom` varchar(45) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `objet` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcontacts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(22,6,'idauthors','text','Idauthors',1,0,0,0,0,0,'{}',1),(23,6,'image','text','Image',0,1,1,1,1,1,'{}',2),(24,6,'nom','text','Nom',1,1,1,1,1,1,'{}',3),(25,6,'prenom','text','Prenom',0,1,1,1,1,1,'{}',4),(26,6,'lien','text','Lien',1,1,1,1,1,1,'{}',5),(27,7,'idblogs','text','Idblogs',1,0,0,0,0,0,'{}',1),(28,7,'titre','text','Titre',0,1,1,1,1,1,'{}',2),(29,7,'image','text','Image',0,1,1,1,1,1,'{}',3),(30,7,'jourPublication','text','JourPublication',0,1,1,1,1,1,'{}',4),(31,7,'moisPublication','text','MoisPublication',0,1,1,1,1,1,'{}',5),(32,7,'lienArticle','text','LienArticle',0,1,1,1,1,1,'{}',6),(33,7,'sousTitre','text','SousTitre',0,1,1,1,1,1,'{}',7),(34,7,'titreTexte','text','TitreTexte',0,1,1,1,1,1,'{}',8),(35,7,'texte','text','Texte',0,1,1,1,1,1,'{}',9),(36,7,'nombreCommentaire','text','NombreCommentaire',0,1,1,1,1,1,'{}',10),(37,7,'lienTag','text','LienTag',0,1,1,1,1,1,'{}',11),(38,7,'lienCommentaire','text','LienCommentaire',0,1,1,1,1,1,'{}',12),(39,7,'lienDate','text','LienDate',0,1,1,1,1,1,'{}',13),(40,7,'tag','text','Tag',0,1,1,1,1,1,'{}',14),(41,11,'idcommentaires','text','Idcommentaires',1,0,0,0,0,0,'{}',1),(42,11,'image','text','Image',0,1,1,1,1,1,'{}',2),(43,11,'texte','text','Texte',0,1,1,1,1,1,'{}',3),(44,11,'prenom','text','Prenom',0,1,1,1,1,1,'{}',4),(45,11,'nom','text','Nom',0,1,1,1,1,1,'{}',5),(46,11,'nombreCommentaire','text','NombreCommentaire',0,1,1,1,1,1,'{}',6),(47,11,'datePublication','text','DatePublication',0,1,1,1,1,1,'{}',7),(48,12,'idcontacts','text','Idcontacts',1,0,0,0,0,0,'{}',1),(49,12,'titre','text','Titre',0,1,1,1,1,1,'{}',2),(50,12,'message','text','Message',0,1,1,1,1,1,'{}',3),(51,12,'nom','text','Nom',1,1,1,1,1,1,'{}',4),(52,12,'email','text','Email',0,1,1,1,1,1,'{}',5),(53,12,'objet','text','Objet',0,1,1,1,1,1,'{}',6),(54,13,'id','text','Id',1,0,0,0,0,0,'{}',1),(55,13,'email','text','Email',1,1,1,1,1,1,'{}',2),(56,14,'id','text','Id',1,0,0,0,0,0,'{}',1),(57,14,'titre','text','Titre',0,1,1,1,1,1,'{}',2),(58,14,'image','text','Image',0,1,1,1,1,1,'{}',3),(59,14,'lienDate','text','LienDate',0,1,1,1,1,1,'{}',4),(60,14,'jourPublication','text','JourPublication',0,1,1,1,1,1,'{}',5),(61,14,'moisPublication','text','MoisPublication',0,1,1,1,1,1,'{}',6),(62,14,'lienArticle','text','LienArticle',0,1,1,1,1,1,'{}',7),(63,14,'sousTitre','text','SousTitre',0,1,1,1,1,1,'{}',8),(64,14,'titreTexte','text','TitreTexte',0,1,1,1,1,1,'{}',9),(65,14,'texte','text','Texte',0,1,1,1,1,1,'{}',10),(66,14,'nombreCommentaire','text','NombreCommentaire',0,1,1,1,1,1,'{}',11),(67,14,'lienTag','text','LienTag',0,1,1,1,1,1,'{}',12),(68,14,'lienCommentaire','text','LienCommentaire',0,1,1,1,1,1,'{}',13),(69,14,'tag','text','Tag',0,1,1,1,1,1,'{}',14),(70,15,'idportfolios','text','Idportfolios',1,0,0,0,0,0,'{}',1),(71,15,'formatImage','text','FormatImage',0,1,1,1,1,1,'{}',2),(72,15,'image','text','Image',0,1,1,1,1,1,'{}',3),(73,15,'lien','text','Lien',0,1,1,1,1,1,'{}',4),(74,15,'titre','text','Titre',1,1,1,1,1,1,'{}',5),(75,16,'idtags','text','Idtags',1,0,0,0,0,0,'{}',1),(76,16,'nom','text','Nom',1,1,1,1,1,1,'{}',2),(77,16,'lien','text','Lien',0,1,1,1,1,1,'{}',3),(78,18,'idcategories','text','Idcategories',1,0,0,0,0,0,'{}',1),(79,18,'nom','text','Nom',1,1,1,1,1,1,'{}',2),(80,18,'lien','text','Lien',0,1,1,1,1,1,'{}',3),(81,18,'nombrePosts','text','NombrePosts',0,1,1,1,1,1,'{}',4);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(6,'authors','authors','Author','Authors',NULL,'App\\Models\\Author',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2021-03-14 14:35:51','2021-03-14 14:35:51'),(7,'blogs','blogs','Blog','Blogs',NULL,'App\\Models\\Blog',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2021-03-14 14:36:23','2021-03-14 14:36:23'),(11,'commentaires','commentaires','Commentaire','Commentaires',NULL,'App\\Models\\Commentaire',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2021-03-14 14:38:35','2021-03-14 14:38:35'),(12,'contacts','contacts','Contact','Contacts',NULL,'App\\Models\\Contact',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2021-03-14 14:38:55','2021-03-14 14:38:55'),(13,'newsletters','newsletters','Newsletter','Newsletters',NULL,'App\\Models\\Newsletter',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2021-03-14 14:39:18','2021-03-14 14:39:18'),(14,'pages','pages','Page','Pages',NULL,'App\\Models\\Page',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2021-03-14 14:39:40','2021-03-14 14:39:40'),(15,'portfolios','portfolios','Portfolio','Portfolios',NULL,'App\\Models\\Portfolio',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2021-03-14 14:40:05','2021-03-14 14:40:05'),(16,'tags','tags','Tag','Tags',NULL,'App\\Models\\Tag',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2021-03-14 14:46:13','2021-03-14 14:46:13'),(18,'categories','categories','Categorie','Categories',NULL,'App\\Models\\Categorie',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2021-03-14 14:47:49','2021-03-14 14:48:12');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2021-02-24 20:03:49','2021-02-24 20:03:49',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,10,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,11,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,12,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.settings.index',NULL),(11,1,'Hooks','','_self','voyager-hook',NULL,5,13,'2021-02-24 20:03:49','2021-02-24 20:03:49','voyager.hooks',NULL),(12,1,'Authors','','_self',NULL,NULL,NULL,15,'2021-03-14 14:35:51','2021-03-14 14:35:51','voyager.authors.index',NULL),(13,1,'Blogs','','_self',NULL,NULL,NULL,16,'2021-03-14 14:36:23','2021-03-14 14:36:23','voyager.blogs.index',NULL),(14,1,'Commentaires','','_self',NULL,NULL,NULL,17,'2021-03-14 14:38:35','2021-03-14 14:38:35','voyager.commentaires.index',NULL),(15,1,'Contacts','','_self',NULL,NULL,NULL,18,'2021-03-14 14:38:55','2021-03-14 14:38:55','voyager.contacts.index',NULL),(16,1,'Newsletters','','_self',NULL,NULL,NULL,19,'2021-03-14 14:39:18','2021-03-14 14:39:18','voyager.newsletters.index',NULL),(17,1,'Pages','','_self',NULL,NULL,NULL,20,'2021-03-14 14:39:40','2021-03-14 14:39:40','voyager.pages.index',NULL),(18,1,'Portfolios','','_self',NULL,NULL,NULL,21,'2021-03-14 14:40:05','2021-03-14 14:40:05','voyager.portfolios.index',NULL),(19,1,'Tags','','_self',NULL,NULL,NULL,22,'2021-03-14 14:46:13','2021-03-14 14:46:13','voyager.tags.index',NULL),(20,1,'Categories','','_self',NULL,NULL,NULL,23,'2021-03-14 14:47:50','2021-03-14 14:47:50','voyager.categories.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2021-02-24 20:03:49','2021-02-24 20:03:49');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2016_01_01_000000_add_voyager_user_fields',2),(5,'2016_01_01_000000_create_data_types_table',2),(6,'2016_05_19_173453_create_menu_table',2),(7,'2016_10_21_190000_create_roles_table',2),(8,'2016_10_21_190000_create_settings_table',2),(9,'2016_11_30_135954_create_permission_table',2),(10,'2016_11_30_141208_create_permission_role_table',2),(11,'2016_12_26_201236_data_types__add__server_side',2),(12,'2017_01_13_000000_add_route_to_menu_items_table',2),(13,'2017_01_14_005015_create_translations_table',2),(14,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',2),(15,'2017_03_06_000000_add_controller_to_data_types_table',2),(16,'2017_04_21_000000_add_order_to_data_rows_table',2),(17,'2017_07_05_210000_add_policyname_to_data_types_table',2),(18,'2017_08_05_000000_add_group_to_settings_table',2),(19,'2017_11_26_013050_add_user_role_relationship',2),(20,'2017_11_26_015000_create_user_roles_table',2),(21,'2018_03_11_000000_add_user_settings',2),(22,'2018_03_14_000000_add_details_to_data_types_table',2),(23,'2018_03_16_000000_make_settings_value_nullable',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newsletters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `lienDate` varchar(45) DEFAULT NULL,
  `jourPublication` varchar(45) DEFAULT NULL,
  `moisPublication` varchar(45) DEFAULT NULL,
  `lienArticle` varchar(255) DEFAULT NULL,
  `sousTitre` varchar(255) DEFAULT NULL,
  `titreTexte` varchar(255) DEFAULT NULL,
  `texte` longtext,
  `nombreCommentaire` decimal(8,0) DEFAULT NULL,
  `lienTag` varchar(255) DEFAULT NULL,
  `lienCommentaire` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Projets','img/projets/projets_1.png','todzilla.html','16','Juin','todzilla.html','Todzilla','Comment reproduire une image sur Illustrator à partir d\'un dessin au crayon.','Illustrator est un logiciel de création graphique vectorielle conçu par Adobe. C\'est un logiciel orienté vers les marchées professionnels. Il améliore la productivité grâce aux options présentes. Découvrez dans cet article l\'outil indispensable des professionnels. ',0,'todzilla.html','todzilla.html','Illustration, Design'),(2,NULL,'img/projets/projets_2.png','bechic.html','22','Dec','bechic.html','Gazelle lumineuse | Be chic','Comment appliquer un effet glowing sur une image ','Photoshop est l\'un des logiciel Adobe connu pour les retouches d\'images. Il permet de créer une image à partir d\'une ou plusieurs images selon notre préférence.  Dans cette article, je vous expliquerai la manière dont j\'ai procédée pour avoir un effet glowing.',0,'bechic.html','bechic.html','Illustration, Design'),(3,NULL,'img/projets/projets_3.png','tigre.html','15','Jan','tigre.html','Tigre','Comment transformer une photo en une image colorée','A partir d\'une photo, il est possible d\'en changer sa nature. Dans cette article, je vais vous expliquer comment j\'ai transformé une photo en une image colorée pour avoir un effet abstrait.',0,'tigre.html','tigre.html','Illustration, Design'),(4,NULL,'img/projets/xabia.png','xabia.html','25','Mars','xabia.html','Xabia Residencia',NULL,'Adobe XD est un outil de conception d\'expérience utilisateur basé sur le vecteur pour les applications Web et les applications mobiles. Je vais intégrer dans cet article, la conception de Xabia Residencia. Une interface pour préparer l\'organisation visuelle de l\'application. ',0,'xabia.html','xabia.html','Adobe XD, Design'),(5,NULL,'img/projets/piccolo.png','piccolo.html','20','Nov','piccolo.html','Piccolo','Pourquoi dois-je utiliser le HTML 5 sémantique ?','Pour les utilisateurs, il est généralement facile d\'identifier les différentes zones d\'une page web en un coup d\'œil.  Les en-têtes, les menus et le contenu principal sont tous immédiatement apparents et évidents.  Dans cet article, nous allons comprendre pourquoi utiliser le HTML 5 sémantique.             ',0,'piccolo.html','piccolo.html','Numerique, Design'),(6,NULL,'img/projets/start.png','framework_css.html','12','Avril','framework_css.html','Start Bootstrap | Framework CSS','Comment fonctionne un framework css ? ','Un framework, c’est une base d’outils et de fonctionnalités conçus pour s’agencer entre eux. En partant d’une grille, qui est la plupart du temps prévue pour être responsive, vous pouvez ajouter facilement des éléments dont la plupart des sites ont besoin: des comptes utilisateurs, des authentifications, des connexions à diverses sources de données, des moteurs de recherche interne, des boutons de partage sur les réseaux sociaux…   Par ailleurs, le framework est automatiquement mis à jour pour s’adapter aux nouvelles pratiques du net comme ce fut le cas pour le passage aux sites responsive.',0,'framework_css.html','framework_css.html','CSS, Design'),(7,NULL,'img/projets/css.gif','integration_css.html','15','Jan','integration_css.html','Intégration CSS','Comment intégrer notre CSS ?','L\'intégration est la transposition du web design en code informatique. Concrètement, le web designer construit le langage HTML puis le CSS via un éditeur de texte. Le CSS n\'est pas plus compliqué que le HTML. Il vient juste le compléter pour vous aider à mettre en forme votre page web.',0,'integration_css.html','integration_css.html','CSS, Design'),(8,NULL,'img/projets/js.gif','ajax.html','20','Oct','ajax.html','Vanilla JS | AJAX','Qu\'est-ce que \"Vanilla JavaScript\" ?','Le terme script vanilla est utilisé pour désigner le JavaScript pur (ou nous pouvons dire le JavaScript brut) sans aucun type de bibliothèque supplémentaire. Parfois, les gens l\'ont souvent utilisé comme une blague \"de nos jours, plusieurs choses peuvent également être faites sans utiliser de bibliothèques JavaScript supplémentaires\".',0,'ajax.html','ajax.html','JS, Design');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(2,'browse_bread',NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(3,'browse_database',NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(4,'browse_media',NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(5,'browse_compass',NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(6,'browse_menus','menus','2021-02-24 20:03:49','2021-02-24 20:03:49'),(7,'read_menus','menus','2021-02-24 20:03:49','2021-02-24 20:03:49'),(8,'edit_menus','menus','2021-02-24 20:03:49','2021-02-24 20:03:49'),(9,'add_menus','menus','2021-02-24 20:03:49','2021-02-24 20:03:49'),(10,'delete_menus','menus','2021-02-24 20:03:49','2021-02-24 20:03:49'),(11,'browse_roles','roles','2021-02-24 20:03:49','2021-02-24 20:03:49'),(12,'read_roles','roles','2021-02-24 20:03:49','2021-02-24 20:03:49'),(13,'edit_roles','roles','2021-02-24 20:03:49','2021-02-24 20:03:49'),(14,'add_roles','roles','2021-02-24 20:03:49','2021-02-24 20:03:49'),(15,'delete_roles','roles','2021-02-24 20:03:49','2021-02-24 20:03:49'),(16,'browse_users','users','2021-02-24 20:03:49','2021-02-24 20:03:49'),(17,'read_users','users','2021-02-24 20:03:49','2021-02-24 20:03:49'),(18,'edit_users','users','2021-02-24 20:03:49','2021-02-24 20:03:49'),(19,'add_users','users','2021-02-24 20:03:49','2021-02-24 20:03:49'),(20,'delete_users','users','2021-02-24 20:03:49','2021-02-24 20:03:49'),(21,'browse_settings','settings','2021-02-24 20:03:49','2021-02-24 20:03:49'),(22,'read_settings','settings','2021-02-24 20:03:49','2021-02-24 20:03:49'),(23,'edit_settings','settings','2021-02-24 20:03:49','2021-02-24 20:03:49'),(24,'add_settings','settings','2021-02-24 20:03:49','2021-02-24 20:03:49'),(25,'delete_settings','settings','2021-02-24 20:03:49','2021-02-24 20:03:49'),(26,'browse_hooks',NULL,'2021-02-24 20:03:49','2021-02-24 20:03:49'),(27,'browse_authors','authors','2021-03-14 14:35:51','2021-03-14 14:35:51'),(28,'read_authors','authors','2021-03-14 14:35:51','2021-03-14 14:35:51'),(29,'edit_authors','authors','2021-03-14 14:35:51','2021-03-14 14:35:51'),(30,'add_authors','authors','2021-03-14 14:35:51','2021-03-14 14:35:51'),(31,'delete_authors','authors','2021-03-14 14:35:51','2021-03-14 14:35:51'),(32,'browse_blogs','blogs','2021-03-14 14:36:23','2021-03-14 14:36:23'),(33,'read_blogs','blogs','2021-03-14 14:36:23','2021-03-14 14:36:23'),(34,'edit_blogs','blogs','2021-03-14 14:36:23','2021-03-14 14:36:23'),(35,'add_blogs','blogs','2021-03-14 14:36:23','2021-03-14 14:36:23'),(36,'delete_blogs','blogs','2021-03-14 14:36:23','2021-03-14 14:36:23'),(37,'browse_commentaires','commentaires','2021-03-14 14:38:35','2021-03-14 14:38:35'),(38,'read_commentaires','commentaires','2021-03-14 14:38:35','2021-03-14 14:38:35'),(39,'edit_commentaires','commentaires','2021-03-14 14:38:35','2021-03-14 14:38:35'),(40,'add_commentaires','commentaires','2021-03-14 14:38:35','2021-03-14 14:38:35'),(41,'delete_commentaires','commentaires','2021-03-14 14:38:35','2021-03-14 14:38:35'),(42,'browse_contacts','contacts','2021-03-14 14:38:55','2021-03-14 14:38:55'),(43,'read_contacts','contacts','2021-03-14 14:38:55','2021-03-14 14:38:55'),(44,'edit_contacts','contacts','2021-03-14 14:38:55','2021-03-14 14:38:55'),(45,'add_contacts','contacts','2021-03-14 14:38:55','2021-03-14 14:38:55'),(46,'delete_contacts','contacts','2021-03-14 14:38:55','2021-03-14 14:38:55'),(47,'browse_newsletters','newsletters','2021-03-14 14:39:18','2021-03-14 14:39:18'),(48,'read_newsletters','newsletters','2021-03-14 14:39:18','2021-03-14 14:39:18'),(49,'edit_newsletters','newsletters','2021-03-14 14:39:18','2021-03-14 14:39:18'),(50,'add_newsletters','newsletters','2021-03-14 14:39:18','2021-03-14 14:39:18'),(51,'delete_newsletters','newsletters','2021-03-14 14:39:18','2021-03-14 14:39:18'),(52,'browse_pages','pages','2021-03-14 14:39:40','2021-03-14 14:39:40'),(53,'read_pages','pages','2021-03-14 14:39:40','2021-03-14 14:39:40'),(54,'edit_pages','pages','2021-03-14 14:39:40','2021-03-14 14:39:40'),(55,'add_pages','pages','2021-03-14 14:39:40','2021-03-14 14:39:40'),(56,'delete_pages','pages','2021-03-14 14:39:40','2021-03-14 14:39:40'),(57,'browse_portfolios','portfolios','2021-03-14 14:40:05','2021-03-14 14:40:05'),(58,'read_portfolios','portfolios','2021-03-14 14:40:05','2021-03-14 14:40:05'),(59,'edit_portfolios','portfolios','2021-03-14 14:40:05','2021-03-14 14:40:05'),(60,'add_portfolios','portfolios','2021-03-14 14:40:05','2021-03-14 14:40:05'),(61,'delete_portfolios','portfolios','2021-03-14 14:40:05','2021-03-14 14:40:05'),(62,'browse_tags','tags','2021-03-14 14:46:13','2021-03-14 14:46:13'),(63,'read_tags','tags','2021-03-14 14:46:13','2021-03-14 14:46:13'),(64,'edit_tags','tags','2021-03-14 14:46:13','2021-03-14 14:46:13'),(65,'add_tags','tags','2021-03-14 14:46:13','2021-03-14 14:46:13'),(66,'delete_tags','tags','2021-03-14 14:46:13','2021-03-14 14:46:13'),(67,'browse_categories','categories','2021-03-14 14:47:50','2021-03-14 14:47:50'),(68,'read_categories','categories','2021-03-14 14:47:50','2021-03-14 14:47:50'),(69,'edit_categories','categories','2021-03-14 14:47:50','2021-03-14 14:47:50'),(70,'add_categories','categories','2021-03-14 14:47:50','2021-03-14 14:47:50'),(71,'delete_categories','categories','2021-03-14 14:47:50','2021-03-14 14:47:50');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolios` (
  `idportfolios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `formatImage` varchar(255) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `titre` varchar(45) NOT NULL,
  PRIMARY KEY (`idportfolios`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolios`
--

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` VALUES (1,'col-xl-5 col-md-5','img/portfolio/1.png','img/portfolio/1.png','Réseaux sociaux'),(2,'col-xl-7 col-md-7','img/portfolio/2.png','img/portfolio/2.png','Voyages'),(3,'col-xl-4 col-md-6 col-lg-4','img/portfolio/3.png','img/portfolio/3.png','Soin & Bien être'),(4,'col-xl-4 col-md-6 col-lg-4','img/portfolio/4.png','img/portfolio/4.png','Cuisine'),(5,'col-xl-4 col-md-12 col-lg-4','img/portfolio/5.png','img/portfolio/5.png','Musique'),(6,'col-xl-5 col-md-5','img/portfolio/6.png','img/portfolio/6.png','Sport'),(7,'col-xl-7 col-md-7','img/portfolio/7.png','img/portfolio/7.png','Lecture'),(8,'col-xl-4 col-md-6 col-lg-4','img/portfolio/8.png','img/portfolio/8.png','Films & Séries'),(10,'col-xl-4 col-md-6 col-lg-4','img/portfolio/9.png','img/portfolio/9.png','Musées'),(11,'col-xl-4 col-md-12 col-lg-4','img/portfolio/10.png','img/portfolio/10.png','Shooping');
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `idposts` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(45) DEFAULT NULL,
  `titre` varchar(45) DEFAULT NULL,
  `datePublication` date NOT NULL,
  `lien` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idposts`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'img/post/post_1.png','Conception éthique','2020-12-16','conception.html'),(2,'img/post/post_2.png','Les filtres et selfies','2020-10-01','selfies.html'),(3,'img/post/post_3.png','Bien-être numérique','2020-09-17','bien-etre-numerique.html'),(4,'img/post/post_4.png','Principes de Gestalt','2019-03-12','gestalt.html'),(12,'img/post/post_12.png','Todzilla','2020-06-16','todzilla.html'),(13,'img/post/post_13.png','Be Chic','2020-12-22','bechic.html'),(14,'img/post/post_14.png','Tigre','2021-01-15','tigre.html'),(15,'img/post/post_15.png','Xabia','2020-03-25','xabia.html');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2021-02-24 20:03:49','2021-02-24 20:03:49'),(2,'user','Normal User','2021-02-24 20:03:49','2021-02-24 20:03:49');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `idtags` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `lien` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtags`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (2,'Visual','conception.html'),(3,'Selfies','selfies.html'),(4,'Numerique','bien-etre-numerique.html'),(5,'Legos','legos.html'),(6,'Icons','icons-animees.html'),(7,'Technology','jeux-video.html'),(8,'Games','gamification.html'),(9,'Creation','logo.html'),(11,'Animation','animation.html'),(12,'Illustration','projets1.html'),(13,'Gestalt','gestalt.html');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'author','author@gmail.com','users/default.png',NULL,'$2y$10$rqv69rctED02/0U2rnP/EOHK38xwHyq4bZEaYw3ytb5QNGdhEGGNW',NULL,NULL,'2021-03-14 12:07:06','2021-03-14 12:07:06'),(2,1,'admin','admin@gmail.com','users/default.png',NULL,'$2y$10$a3Hd/oD1veZWOPVSStxLVuqbBmx2xH1p865WPzdynru7P6hKhnJRm',NULL,NULL,'2021-03-14 12:11:16','2021-03-14 12:11:16');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'portfolio'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-16 20:46:59
