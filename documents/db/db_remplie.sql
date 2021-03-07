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
  `idauthors` int(20) unsigned NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`idauthors`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'img/blog/author_9.png','Essid','Ahlem','#');
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
  `video` time DEFAULT NULL,
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
INSERT INTO `blogs` VALUES (1,'News','img/blog/single_blog_7.png',NULL,'16','Dec','conception','Trouver une conception éthique','Intégrer l\'éthique dans le travail quotidien du design','En tant que concepteur visuel au sein de l\'équipe Material Design de Google, mon travail va au-delà de la création de styles visuels.Cela inclut un travail qui n\'est pas explicitement «visuel», en tenant compte des expériences fonctionnelles et des facteurs de la vie quotidienne d\'une personne.  ',0,'https://material.io/blog/finding-ethical-design','conception','conception','Visual, Material Design'),(2,NULL,'img/blog/single_blog_6.png',NULL,'1','Oct','selfies','Trouver le bien-être dans les filtres et les selfies','Comment intégrer la transparence et le contrôle dans les fonctionnalités de retouche de visage.','Des simples clichés aux séances photo complètes, les applications et les filtres pour appareil photo sont là pour rester.\n                                  Mais la popularité croissante des «filtres de beauté» et des fonctionnalités de retouche du visage a suscité une question importante au sein de l\'équipe de bien-être numérique de Google:\n                                  ces filtres ont-ils un impact sur le bien-être mental ?',0,'https://material.io/blog/digital-wellbeing-face-retouching','selfies','selfies','Selfies, Material Design'),(3,NULL,'img/blog/single_blog_9.png',NULL,'17','Sep','bien-etre-numerique','Principes axés sur les personnes pour le bien-être numérique','Un aperçu des fondations de l\'UX à la base de la boîte à outils de bien-être numérique de Google','En pensant au bien-être numérique, Material s\'efforce de répondre aux besoins fondamentaux des gens . Mais comment, d\'un point de vue pratique, le besoin de bien-être général et de relations saines avec les produits numériques est-il intégré dans le système de conception matérielle ?',0,'https://material.io/blog/digital-wellbeing-ux-principles','bien-etre-numerique','bien-etre-numerique','Numerique, Material Design'),(4,NULL,'img/blog/single_blog_8.png',NULL,'12','Mars','gestalt','Principes de Gestalt dans la conception Web',NULL,'Peut-être que trop de designers négligent l\'importance de la psychologie dans le processus de création et l\'impact que certains de ses principes ont dans les choix de conception qui sont faits au quotidien, qu\'ils soient imprimés ou numériques. Dans la conception Web, ces principes sont efficacement appliqués dans le domaine de l\'interface utilisateur (UI) permettant aux messages d\'arriver de manière agréable et dynamique, en guidant la perception visuelle de celle-ci. ',0,'https://swapps.com/blog/gestalt-principles-in-web-design/','gestalt','gestalt','Gestalt, Swapps'),(5,NULL,'img/blog/single_blog_10.png',NULL,'15','Jan','fidelisation','Comment fidéliser les visiteurs de votre site web ?','La stratégie de fidélisation','Il existe 6 astuces pour fidéliser votre audience et lui donner envie de retourner régulièrement sur votre site.  Plus votre audience restera longtemps sur votre site et y retournera régulièrement, plus vous aurez de chances de lui faire réaliser une action.',0,'https://www.btobmarketers.fr/ecommerce/comment-fideliser-les-visiteurs-de-votre-site-web/','fidelisation','fidelisation','UX Design, Fidelisation'),(6,NULL,'img/blog/single_blog_11.png',NULL,'20','Sep','gamification','Le concept de la gamification au service de l\'expérience utilisateur','Comment gamifier un site web ?','Toujours à la recherche de nouvelles techniques afin d’améliorer l’expérience utilisateur, les UX designers se prennent aux jeux et utilisent le concept de la gamification pour susciter des émotions et du plaisir aux utilisateurs en ajoutant un élément amusant et agréable à utiliser.',0,'https://www.emydigital.fr/concept-de-la-gamification-au-service-de-lexperience-utilisateur/','gamification','gamification',' UX design, Gamification'),(7,NULL,'img/blog/single_blog_13.png',NULL,'10','Dec','logo','3 tendances de conception de logo pour 2021 pour booster votre image de marque','Quelles tendances utiliser pour votre marque en 2021','Chaque marque commence par le logo. Cela reflète qui vous êtes. Lorsque les gens cliquent sur votre site Web, ils voient d\'abord le logo. C\'est une base pour votre livre de marque. Le logo comprend les couleurs de votre entreprise et fournit une direction de style pour votre marque.',0,'https://medium.com/better-marketing/6-logo-design-trends-for-2021-to-boost-your-branding-b938f1dbb0f0','logo','logo','UI design, Logo'),(8,NULL,'img/blog/single_blog_14.png',NULL,'3','Sep','animation','Lottie (Bodymovin) : des animations plus fluides pour votre application','Les animations ont un impact considérable sur vos utilisateurs.','Grâce à Lottie, insérez des animations plus fluides et réactives qu’un format GIF pour vos applications iOS, Android et vos sites web. Exportez directement au format JSON depuis After Effects et créez des interactions avancées dans vos applications à l’aide de PandaSuite.',0,'https://blog.pandasuite.com/fr/lottie-bodymovin-des-animations-pour-votre-app/','animation','animation','Animation, PandaSuiteBlog'),(9,NULL,'img/blog/single_blog_15.gif',NULL,'17','Jan','duolingo','Duolingo, une application éducative sous forme de ludification','Avez-vous déjà pensé à parler une nouvelle langue ?','Cette même pensée énergisante à poussé quelques millions de personnes à  essayer l\'application Duolingo. C\'est un outil purement freemium pour apprendre l\'une des 36 langues. Celles-ci incluent des langues peu parlées tels les dialectes. Duolingo est une application éducative sous forme de jeu qui respecte les principes de gamification.',0,'duolingo','duolingo','duolingo','UX design, Ludification'),(10,NULL,'img/blog/single_blog_16.gif',NULL,'3','Fev','legos','La représentation mentale des legos',NULL,'Le joueur a besoin de construire schématiquement sa propre persception pour développer sa créativité. Il suffit d\'assembler un ensemble de legos pour que les formes se transforment rapidement en un souvenir tel un événemment, un film ou un animal en particulier.',0,'legos','legos','legos','Legos, Gestalt'),(11,NULL,'img/blog/single_blog_17.gif',NULL,'10','Dec','jeux-video','Développement de jeux vidéo','Les games players & tutoriels à la mode','Les jeux vidéo sont parmi les activités numériques les plus populaires. L\'arrivée continue de nouvelles technologies permet de développer encore des jeux de meilleure qualité et plus performants qui peuvent fonctionner dans n\'importe quel navigateur ou console respectant les standards du web.',0,'jeux-video','jeux-video','jeux-video','Jeux vidéos, Technologie');
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
  PRIMARY KEY (`idcategories`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Photoshop','bechic'),(2,'Illustrator','todzilla'),(3,'Adobe XD','xabia'),(4,'HTML Sémantique','piccolo'),(5,'Vanilla JS','ajax'),(6,'CSS','framework_css'),(7,'Psychologie','news1'),(8,'UI Design','news3'),(9,'UX Design','news2'),(10,'Animation','animation'),(11,'Technologie','jeux-video');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentaires` (
  `idcommentaires` int(10) unsigned NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `texte` mediumtext,
  `prenom` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `nombreCommentaire` decimal(8,0) DEFAULT '1',
  `datePublication` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcommentaires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
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
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
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
  `video` time DEFAULT NULL,
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
INSERT INTO `pages` VALUES (1,'Projets','img/projets/projets_1.png',NULL,'todzilla','16','Juin','todzilla','Todzilla','Comment reproduire une image sur Illustrator à partir d\'un dessin au crayon.','Illustrator est un logiciel de création graphique vectorielle conçu par Adobe. C\'est un logiciel orienté vers les marchées professionnels. Il améliore la productivité grâce aux options présentes. Découvrez dans cet article l\'outil indispensable des professionnels. ',0,'todzilla','todzilla','Illustration, Design'),(2,NULL,'img/projets/projets_2.png',NULL,'bechic','22','Dec','bechic','Gazelle lumineuse | Be chic','Comment appliquer un effet glowing sur une image ','Photoshop est l\'un des logiciel Adobe connu pour les retouches d\'images. Il permet de créer une image à partir d\'une ou plusieurs images selon notre préférence.  Dans cette article, je vous expliquerai la manière dont j\'ai procédée pour avoir un effet glowing.',0,'bechic','bechic','Illustration, Design'),(3,NULL,'img/projets/projets_3.png',NULL,'tigre','15','Jan','tigre','Tigre','Comment transformer une photo en une image colorée','A partir d\'une photo, il est possible d\'en changer sa nature. Dans cette article, je vais vous expliquer comment j\'ai transformé une photo en une image colorée pour avoir un effet abstrait.',0,'tigre','tigre','Illustration, Design'),(4,NULL,'img/projets/xabia.png',NULL,'xabia','25','Mars','xabia','Xabia Residencia',NULL,'Adobe XD est un outil de conception d\'expérience utilisateur basé sur le vecteur pour les applications Web et les applications mobiles. Je vais intégrer dans cet article, la conception de Xabia Residencia. Une interface pour préparer l\'organisation visuelle de l\'application. ',0,'xabia','xabia','Adobe XD, Design'),(5,NULL,'img/projets/piccolo.png',NULL,'piccolo','20','Nov','piccolo','Piccolo','Pourquoi dois-je utiliser le HTML 5 sémantique ?','Pour les utilisateurs, il est généralement facile d\'identifier les différentes zones d\'une page web en un coup d\'œil.  Les en-têtes, les menus et le contenu principal sont tous immédiatement apparents et évidents.  Dans cet article, nous allons comprendre pourquoi utiliser le HTML 5 sémantique.             ',0,'piccolo','piccolo','Numerique, Design'),(6,NULL,'img/projets/start.png',NULL,'framework_css','12','Avril','framework_css','Start Bootstrap | Framework CSS','Comment fonctionne un framework css ? ','Un framework, c’est une base d’outils et de fonctionnalités conçus pour s’agencer entre eux. En partant d’une grille, qui est la plupart du temps prévue pour être responsive, vous pouvez ajouter facilement des éléments dont la plupart des sites ont besoin: des comptes utilisateurs, des authentifications, des connexions à diverses sources de données, des moteurs de recherche interne, des boutons de partage sur les réseaux sociaux…   Par ailleurs, le framework est automatiquement mis à jour pour s’adapter aux nouvelles pratiques du net comme ce fut le cas pour le passage aux sites responsive.',0,'framework_css','framework_css','CSS, Design'),(7,NULL,'img/projets/css.gif',NULL,'integration_css','15','Jan','integration_css','Intégration CSS','Comment intégrer notre CSS ?','L\'intégration est la transposition du web design en code informatique. Concrètement, le web designer construit le langage HTML puis le CSS via un éditeur de texte. Le CSS n\'est pas plus compliqué que le HTML. Il vient juste le compléter pour vous aider à mettre en forme votre page web.',0,'integration_css','integration_css','CSS, Design'),(8,NULL,'img/projets/js.gif',NULL,'ajax','20','Oct','ajax','Vanilla JS | AJAX','Qu\'est-ce que \"Vanilla JavaScript\" ?','Le terme script vanilla est utilisé pour désigner le JavaScript pur (ou nous pouvons dire le JavaScript brut) sans aucun type de bibliothèque supplémentaire. Parfois, les gens l\'ont souvent utilisé comme une blague \"de nos jours, plusieurs choses peuvent également être faites sans utiliser de bibliothèques JavaScript supplémentaires\".',0,'ajax','ajax','JS, Design');
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
INSERT INTO `posts` VALUES (1,'img/post/post_1.png','Conception éthique','2020-12-16','conception'),(2,'img/post/post_2.png','Les filtres et selfies','2020-10-01','selfies'),(3,'img/post/post_3.png','Bien-être numérique','2020-09-17','bien-etre-numerique'),(4,'img/post/post_4.png','Principes de Gestalt','2019-03-12','gestalt'),(12,'img/post/post_12.png','Todzilla','2020-06-16','todzilla'),(13,'img/post/post_13.png','Be Chic','2020-12-22','bechic'),(14,'img/post/post_14.png','Tigre','2021-01-15','tigre'),(15,'img/post/post_15.png','Xabia','2020-03-25','xabia');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
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
INSERT INTO `tags` VALUES (2,'Visual','conception'),(3,'Selfies','selfies'),(4,'Numerique','bien-etre-numerique'),(5,'Legos','legos'),(6,'Icons','icons-animees'),(7,'Technology','jeux-video'),(8,'Games','gamification'),(9,'Creation','logo'),(11,'Animation','animation'),(12,'Illustration','projets1'),(13,'Gestalt','gestalt');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2021-02-23  1:54:24
