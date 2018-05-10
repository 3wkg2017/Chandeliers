-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: scotchbox
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'<h2>Apie projektą</h2>\r\n\r\n<p>Pačios puo&scaron;niausios, nuo lubų nuleidžiamos ir daug &scaron;viesos skleidžiančios ap&scaron;vietimo priemonės vadinamos SIETYNAIS. Jų ilga ir turtinga istorija atskiruose Europos kra&scaron;tuose dar tik pradedama i&scaron;samiau tyrinėti. Bėgant &scaron;imtmečiams sietynų formos, dekoras jautriai ir plasti&scaron;kai reagavo į nuolat besikeičiančią Europos kultūrą, todėl susiformavo keli pagrindiniai tipai, tyrėjų skirstomi į meliuzinas, karūninius, kamieninius, korpusinius ir dubeninius. Iki XVIII a. pradžios sietynai daugiausiai gaminti i&scaron; žalvario, geležies, medžio ir gyvūnų ragų. XVI a. pabaigoje sietynų karkasus imta puo&scaron;ti kalnų kri&scaron;tolo vėriniais ir kabučiais. Nuo 1700 m. gaminami stikliniai, dirbtinio kri&scaron;tolo, kiek vėliau porcelianiniai, papjė ma&scaron;ė ir kt. sietynai. Medžiagų įvairovė gamintojams teikė laisvės ir formų įvairovės paie&scaron;kai, tačiau iki elektros lemputės atradimo &scaron;viesą skleisdavo sietynuose įstatytos žvakės, kurios visada turėdavo būti nukreiptos statmenai į vir&scaron;ų. Atradus elektrą, sietynų formų paie&scaron;kai apribojimų beveik neliko.</p>\r\n\r\n<p>Turtingoje ap&scaron;vietimo priemonių istorijoje svarią vietą užima ir Lietuvoje i&scaron;likę XVI&ndash;XX a. I p. sietynai. Jiems pristatyti ir skirtas &scaron;is projektas. Būtina pridurti, kad daugelis Lietuvos pastatus puo&scaron;usių ar tebepuo&scaron;iančių sietynų yra atvežti i&scaron; kitų Europos kra&scaron;tų. Tik nedideliai dirbinių daliai mes galime pateikti vietos gaminio atribuciją. Visgi &scaron;is faktas nemenkina jų svarbos. Sietynai, kaip ir kita materialią kultūrą atspindinti gaminių dalis svariai iliustruoja Lietuvos meninio importo istoriją.</p>\r\n\r\n<p>Nuo 2017 metų pabaigos startuoja pirmas projekto &bdquo;Lietuvos sietynų paveldas&ldquo; etapas, kuriame eksponuojami vertingiausi Vilniaus regiono istoriniai sietynai. Čia pateikiami nauji duomenys didžia dalimi projekto autorės i&scaron;ai&scaron;kinti per pastaruosius septynetą Lietuvos istorinių sietynų tyrinėjimo metų.</p>\r\n\r\n<h2>Sietynų atranka</h2>\r\n\r\n<p>Dėl Lietuvos valstybės istorijos lūžių tik maža dalis sietynų pasiekė mūsų dienas. Daugelis jų nebėra savo pirminėse vietose, todėl &scaron;ioje duomenų bazėje analizuojami Lietuvos muziejų, Lietuvos Respublikos kultūros vertybių registre registruoti ir dar į jį nepatekę meninę vertę turintys vie&scaron;ųjų sakralinių ir pasaulietinių interjerų sietynai. Tie, kurie saugomi privačiuose interjeruose ar privačių kolekcininkų rinkiniuose, tyrėjams labai sunkiai pasiekiami, todėl į &scaron;į katalogą netraukiami. Atskirai pristatomi i&scaron;skirtinę meninę ir istorinę vertę turėję, bet stipriai sunykę ar visai nei&scaron;likę, vaizdinėje medžiagoje užfiksuoti sietynai. Analizuojami tik profesionalių meistrų dirbiniai, o etnografiniai &ndash; turtingų valstiečių trobose kabėję mediniai ir specialūs mergvakarių sietynai neapžvelgiami. Taip pat &scaron;iuo metu nepateikiami muziejuose saugomi stipriai sunykę sietynai &ndash; jų duomenys bazę papildys ateityje, restauravus ap&scaron;vietimo priemones.</p>\r\n\r\n<h2>Chronologija</h2>\r\n\r\n<p>Į duomenų bazės katalogą įtraukti XVI&nbsp;a. pabaigos &ndash; XX&nbsp;a. 4&nbsp;de&scaron;imtmečio sietynai. Tokį pasirinkimą lėmė i&scaron;likimo veiksnys &ndash; seniausi mus pasiekę artefaktai buvo pagaminti dar Renesanso laikotarpiu ir datuojami XVI&nbsp;a. pabaiga. Vėlyviausios kataloge analizuojamos ap&scaron;vietimo priemonės &ndash; i&scaron; tarpukario. Per Antrąjį pasaulinį karą Europoje buvo sunaikintas ne vienas stambus metalurgijos centras, uždarytos sietynus tiekusios gamyklos, i&scaron;vežti ar karo reikmėms panaudoti jų įrenginiai. &Scaron;is procesas aktualus ir Lietuvai, kur tuo metu veiklą taip pat nutraukė XX&nbsp;a. pradžioje ir tarpukariu sietynus, kad ir nedideliais kiekiais, gaminusios įmonės. Ateityje planuojama katalogą papildyti XX&nbsp;a. II&nbsp;pusėje&ndash;XXI&nbsp;a. pradžioje sukurtų i&scaron;skirtinių sietynų apra&scaron;ais.</p>\r\n\r\n<h2>Duomenų atranka</h2>\r\n\r\n<p>Kiekvienoje duomenų bazės pozicijoje pateikiamos 2017&nbsp;m. profesionalų darytos sietynų fotografijos, duomenys apie sietyno (-ų) pagaminimo laiką, vietą, medžiagas ir technikas bei i&scaron;samus dirbinio apra&scaron;as. Jame trumpai supažindinama su atitinkamo laikotarpio kabančių &scaron;viestuvų ypatybėmis, įvardijamas konkretaus sietyno tipas, analizuojama jo plastika. Atsižvelgiant į galimybes, pateikiama su dirbiniu susijusių istorinių vaizdų, ra&scaron;ytinių &scaron;altinių duomenys, informacija apie atliktus restauravimo darbus, prarastas dalis, taip pat žinomus analogus Lietuvoje ar užsienio kra&scaron;tuose. Apra&scaron;o pabaigoje &ndash; i&scaron;vados apie vertę ir i&scaron;skirtinumą bendrame Lietuvos ir Europos sietynų kontekste.</p>',NULL,'2018-04-24 18:21:17');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (8,'<p><strong>Alantė Valtaitė-Gagač. </strong><strong>XIX a. papjė ma&scaron;ė sietynai: nuo istorijos iki atribucijos ir rekonstrukcijos, </strong><strong>in: </strong><em><strong>Kultūros paminklai</strong></em><strong>, Nr. 22, Vilnius: Savastis, 2018, p. 112&ndash;121. </strong></p>\r\n\r\n<p>Restauruojant Pacų rūmus Vilniuje Didžiojoje gatvėje, 2017 metų vasarą rasti kadaise rūmuose kabėjusio papjė ma&scaron;ė sietyno fragmentai. Teorinei dirbinio rekonstrukcijai surinkta nauja medžiaga paskatino ra&scaron;yti apie anksčiau netyrinėtus retus &scaron;ios medžiagos &scaron;viestuvus Lietuvoje. Straipsnyje pristatomi papjė ma&scaron;ė technikos tipai, ap&scaron;vietimo priemones gaminusios dirbtuvės užsienio kra&scaron;tuose, bei aptariami žinomi pavyzdžiai svetur ir Lietuvoje, daugausiai dėmesio skiriant Pacų rūmuose rasto sietyno istorinei analizei ir plastinei rekonstrukcijai.</p>','/docs/1.pdf','2018-05-08 16:31:18','2018-05-08 17:06:13'),(9,'<p><strong>Alantė Valtaitė-Gagač. Lietuvos sietynai XVII a. dokumentuose, in: </strong><em><strong>Kultūros paminklai</strong></em><strong>, Nr. 17, Vilnius: Savastis, 2013, p. 144&ndash;155. </strong></p>\r\n\r\n<p>Straipsnyje aptariami XVII amžiuje Lietuvos bažnyčioms ir dvarų gyvenamosioms patalpoms ap&scaron;viesti naudoti sietynai. &Scaron;ie menkai i&scaron;likę taikomosios dailės kūriniai analizuojami remiantis bažnyčių ir dvarų inventorių duomenimis ir palyginimui nurodomi negausūs i&scaron;likę pavyzdžiai. Pristatomi lenkų ir lotynų kalbų terminai, kuriais XVII a. ra&scaron;ytiniuose &scaron;altiniuose buvo įvardijami sietynai, aptariamos jų medžiagos, formos, skaičius ir kabėjimo vieta pastatuose. Tiriamo laikotarpio Lietuvos sietynų formų ir dekoro i&scaron;takoms suvokti, apžvelgiama Europos kra&scaron;tų sietynų raida iki XVII a. pabaigos.</p>','/docs/2.pdf','2018-05-08 16:32:16','2018-05-08 16:32:16'),(10,'<p><strong>Alantė Valtaitė. XIX a. antrosios pusės &ndash; XX a. pirmosios pusės sietynų gamyba pramoninėse Europos dirbtuvėse ir jų paveldas Lietuvoje, in: </strong><em><strong>Tekstai apie dizainą: lietuvi&scaron;ki ir tarptautiniai kontekstai</strong></em><strong>. </strong><em><strong>Acta academiae artium Vilnensis</strong></em><strong>, nr. 61. Vilnius: Vilniaus dailės akademijos leidykla, 2011, p. 63&ndash;74. </strong></p>\r\n\r\n<p>Straipsnyje pristatomos XIX a. antros pusės &ndash; XX a. pirmos pusės pramoninės Europos sietynų dirbtuvės ir jų atsiradimui įtaką darę kultūriniai, istoriniai veiksniai. Tekste siekiama atskleisti kol kas menkai tyrinėto paveldo vertę bei supažindinti su i&scaron;likusiais tam laikotarpiui būdingiausiais pavyzdžiais Lietuvoje. Aptariant straipsnio objektą (dirbtuves ir jų dirbinius) fragmenti&scaron;kai prisiliečiama ir prie pramoninio dizaino raidos.</p>','/docs/3.pdf','2018-05-08 16:32:52','2018-05-08 16:32:52'),(11,'<p><strong>Alantė Valtaitė. Sietynai Europoje ir XVII&ndash;XX a. pirmosios pusės sietynai Lietuvoje, in: </strong><em><strong>Kultūros paminklai</strong></em><strong>, Nr. 14, Vilnius: Savastis, 2009, p. 82&ndash;99. </strong></p>\r\n\r\n<p>Pirmajame autorės magistratūros baigiamojo darbo pagrindu parengtame straipsnyje glaustai supažindinama su Europos sietynų raidos kontekstu. Apžvelgiama kabančių ap&scaron;vietimo priemonių formų kilmė, raida ir paplitimas. Antroje straipsnio dalyje susitelkiama ties Lietuvoje i&scaron;likusiais ir ikonografijoje užfiksuotais XVII&ndash;XX a. pirmosios pusės sietynais. Grupuojami ir aptariami korpusiniai žalvariniai ir bronziniai sietynai, stikliniai, porcelianiniai, klasicizmo laikotarpio, XIX&ndash;XX a. I p. istorizmo stilistikos, retesni, netradicinių formų ir medžiagų sietynai. Daromos kuklios i&scaron;vados, kad didžiausią dalį Lietuvoje i&scaron;likusių &scaron;ių ap&scaron;vietimo priemonių sudaro XIX&ndash;XX a. pavyzdžiai, o XVII ir XVIII a. sietynų i&scaron;liko žymiai mažiau. Lietuvoje būta beveik visų Europoje vyravusių skirtingų medžiagų ir stilių sietynų, kurie buvo parsigabenami i&scaron; įvairių Europos kra&scaron;tų, juos gamino ir vietos meistrai.</p>\r\n\r\n<p>* pastaba &ndash; straipsnyje ne visai i&scaron;samiai apibūdinamas Marijos Teresės tipo sietynas; taip pat minimas fontaninio tipo sietyno terminas, kurio vėlesniuose tyrimuose ir straipsniuose atsisakoma. Pastaraisiais sietynų tipologijos klausimais rekomenduojama remtis vėlesniais autorės straipsniais arba 2015 m. VDA apginta disertacija.</p>','/docs/4.pdf','2018-05-08 16:33:18','2018-05-08 16:33:18'),(12,'<p><strong>Alantė Valtaitė-Gagač.</strong><em><strong> </strong></em><em><strong>XVII&nbsp;a.&ndash;XX&nbsp;a. 4&nbsp;de&scaron;imtmečio sietynų paveldas Lietuvoje:</strong></em><strong> daktaro disertacijos santrauka, Vilnius:</strong><em><strong> </strong></em><strong>Vilniaus dailės akademija, 2015.</strong></p>','/docs/5.pdf','2018-05-08 16:33:37','2018-05-08 16:33:37');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `till_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (32,'Pavadinimas','Adresas','Vilniaus apskritis','Stilius','Tipas','Kodas-123','Lietuva','Bronza','100x100x100','2018-03-12','XVII a. I-as ketv.','XVII a. I-as ketv.','<p>FGHDFHFGH</p>',NULL,'2018-03-23 17:10:19','2018-03-23 17:10:19'),(33,'Vilniaus arkivyskupija','Vilnius','Vilniaus apskritis','Istorizmas','Kamieninis','Unikalus kodas Lietuvos Respublikos kultūros vertybių registre – 37259','Vidurio Europa','metalas: liejimas, cizeliavimas, štampavimas, lankstymas; krištolas; alebastras (?): šlifavimas','aukštis – 155 cm, skersmuo – 29 cm','XX a. 1–3 deš.','XVII a. I-as ketv.','XVII a. I-as ketv.','<p>Nedidelis keturių žvakidėlių sietynas tikriausiai pagamintas XX&nbsp;a. 1&ndash;3 de&scaron;imtmečiais. Tokią prielaidą leidžia daryti ne itin precizi&scaron;kai atliktos metalinės detalės ir jų pramoninis i&scaron;pildymas &scaron;tampuojant ir liejant.</p>\r\n\r\n<p>Dirbinio konstrukcijoje dominuoja kamienas, sudarytas i&scaron; strypelio, ant kurio suvertos lietos stiklinės detalės. Apačioje jis užsibaigia kreminės spalvos alebastro&nbsp;(?) vaza. Nuo jos į &scaron;onus eina keturi ploni strypeliai, ant kurių laikosi žiedas su keturiomis žvakidėlėmis. Ypatingo lengvumo ir žaismingumo dirbiniui suteikia nuo rozetės vir&scaron;uje, kamieno ir žiedo svyrantys &bdquo;ūseliai&ldquo; su kabučiais. Tarpusavyje jie tarsi voratinkliu sujungti smulkių apvalių, briaunuotų karoliukų vėriniais. Įjungus ap&scaron;vietimą jie ypač i&scaron;ry&scaron;kėja ir žėri neleisdami nuobodžiauti žiūrovo akiai. Tikėtina, jog seniau kabučių būta daugiau &ndash; &scaron;iuo metu užpidyta tik kas antra ant žiedo esanti skylutė.</p>\r\n\r\n<p>Pagamintas &scaron;viesti elektra sietynas vertingas tipologi&scaron;kai. Tai bene vienintelis Lietuvoje žinomas sietynas su alebastro detale ir jau nuo klasicizmo laikotarpio &scaron;viestuvams taikytais žaismingais &bdquo;ūseliais&ldquo;.</p>',NULL,'2018-04-18 17:50:27','2018-04-18 17:50:27'),(34,'Pavadinimas','Jonazolių','Vilniaus apskritis','Stilius','Tipas','Kodas-123','Lietuva','Bronza','100x100x100','2018-03-12','XVII a. I-as ketv.','XVII a. I-as ketv.','<p>a</p>',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26');
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centuries`
--

DROP TABLE IF EXISTS `centuries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centuries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `centuries` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centuries`
--

LOCK TABLES `centuries` WRITE;
/*!40000 ALTER TABLE `centuries` DISABLE KEYS */;
INSERT INTO `centuries` VALUES (1,'XVII a. I-as ketv.',NULL,NULL),(2,'XVII a. II-as ketv. ',NULL,NULL),(3,'XVII a. III-as ketv. ',NULL,NULL),(4,'XVII a. IV-as ketv. ',NULL,NULL),(5,'XVIII a. I-as ketv.',NULL,NULL),(6,'XVIII a. II-as ketv. ',NULL,NULL),(7,'XVIII a. III-as ketv. ',NULL,NULL),(8,'XVIII a. IV-as ketv. ',NULL,NULL),(9,'XIX a. I-as ketv.',NULL,NULL),(10,'XIX a. II-as ketv. ',NULL,NULL),(11,'XIX a. III-as ketv. ',NULL,NULL),(12,'XIX a. IV-as ketv. ',NULL,NULL),(13,'XX a. I-as ketv.',NULL,NULL),(14,'XX a. II-as ketv. ',NULL,NULL),(15,'XX a. III-as ketv. ',NULL,NULL),(16,'XX a. IV-as ketv. ',NULL,NULL),(17,'XXI a.',NULL,NULL),(18,'XVII a. I-as ketv.',NULL,NULL),(19,'XVII a. II-as ketv. ',NULL,NULL),(20,'XVII a. III-as ketv. ',NULL,NULL),(21,'XVII a. IV-as ketv. ',NULL,NULL),(22,'XVIII a. I-as ketv.',NULL,NULL),(23,'XVIII a. II-as ketv. ',NULL,NULL),(24,'XVIII a. III-as ketv. ',NULL,NULL),(25,'XVIII a. IV-as ketv. ',NULL,NULL),(26,'XIX a. I-as ketv.',NULL,NULL),(27,'XIX a. II-as ketv. ',NULL,NULL),(28,'XIX a. III-as ketv. ',NULL,NULL),(29,'XIX a. IV-as ketv. ',NULL,NULL),(30,'XX a. I-as ketv.',NULL,NULL),(31,'XX a. II-as ketv. ',NULL,NULL),(32,'XX a. III-as ketv. ',NULL,NULL),(33,'XX a. IV-as ketv. ',NULL,NULL),(34,'XXI a.',NULL,NULL),(35,'XVII a. I-as ketv.',NULL,NULL),(36,'XVII a. II-as ketv. ',NULL,NULL),(37,'XVII a. III-as ketv. ',NULL,NULL),(38,'XVII a. IV-as ketv. ',NULL,NULL),(39,'XVIII a. I-as ketv.',NULL,NULL),(40,'XVIII a. II-as ketv. ',NULL,NULL),(41,'XVIII a. III-as ketv. ',NULL,NULL),(42,'XVIII a. IV-as ketv. ',NULL,NULL),(43,'XIX a. I-as ketv.',NULL,NULL),(44,'XIX a. II-as ketv. ',NULL,NULL),(45,'XIX a. III-as ketv. ',NULL,NULL),(46,'XIX a. IV-as ketv. ',NULL,NULL),(47,'XX a. I-as ketv.',NULL,NULL),(48,'XX a. II-as ketv. ',NULL,NULL),(49,'XX a. III-as ketv. ',NULL,NULL),(50,'XX a. IV-as ketv. ',NULL,NULL),(51,'XXI a.',NULL,NULL),(52,'XVII a. I-as ketv.',NULL,NULL),(53,'XVII a. II-as ketv. ',NULL,NULL),(54,'XVII a. III-as ketv. ',NULL,NULL),(55,'XVII a. IV-as ketv. ',NULL,NULL),(56,'XVIII a. I-as ketv.',NULL,NULL),(57,'XVIII a. II-as ketv. ',NULL,NULL),(58,'XVIII a. III-as ketv. ',NULL,NULL),(59,'XVIII a. IV-as ketv. ',NULL,NULL),(60,'XIX a. I-as ketv.',NULL,NULL),(61,'XIX a. II-as ketv. ',NULL,NULL),(62,'XIX a. III-as ketv. ',NULL,NULL),(63,'XIX a. IV-as ketv. ',NULL,NULL),(64,'XX a. I-as ketv.',NULL,NULL),(65,'XX a. II-as ketv. ',NULL,NULL),(66,'XX a. III-as ketv. ',NULL,NULL),(67,'XX a. IV-as ketv. ',NULL,NULL),(68,'XXI a.',NULL,NULL),(69,'XVII a. I-as ketv.',NULL,NULL),(70,'XVII a. II-as ketv. ',NULL,NULL),(71,'XVII a. III-as ketv. ',NULL,NULL),(72,'XVII a. IV-as ketv. ',NULL,NULL),(73,'XVIII a. I-as ketv.',NULL,NULL),(74,'XVIII a. II-as ketv. ',NULL,NULL),(75,'XVIII a. III-as ketv. ',NULL,NULL),(76,'XVIII a. IV-as ketv. ',NULL,NULL),(77,'XIX a. I-as ketv.',NULL,NULL),(78,'XIX a. II-as ketv. ',NULL,NULL),(79,'XIX a. III-as ketv. ',NULL,NULL),(80,'XIX a. IV-as ketv. ',NULL,NULL),(81,'XX a. I-as ketv.',NULL,NULL),(82,'XX a. II-as ketv. ',NULL,NULL),(83,'XX a. III-as ketv. ',NULL,NULL),(84,'XX a. IV-as ketv. ',NULL,NULL),(85,'XXI a.',NULL,NULL),(86,'XVII a. I-as ketv.',NULL,NULL),(87,'XVII a. II-as ketv. ',NULL,NULL),(88,'XVII a. III-as ketv. ',NULL,NULL),(89,'XVII a. IV-as ketv. ',NULL,NULL),(90,'XVIII a. I-as ketv.',NULL,NULL),(91,'XVIII a. II-as ketv. ',NULL,NULL),(92,'XVIII a. III-as ketv. ',NULL,NULL),(93,'XVIII a. IV-as ketv. ',NULL,NULL),(94,'XIX a. I-as ketv.',NULL,NULL),(95,'XIX a. II-as ketv. ',NULL,NULL),(96,'XIX a. III-as ketv. ',NULL,NULL),(97,'XIX a. IV-as ketv. ',NULL,NULL),(98,'XX a. I-as ketv.',NULL,NULL),(99,'XX a. II-as ketv. ',NULL,NULL),(100,'XX a. III-as ketv. ',NULL,NULL),(101,'XX a. IV-as ketv. ',NULL,NULL),(102,'XXI a.',NULL,NULL);
/*!40000 ALTER TABLE `centuries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `english`
--

DROP TABLE IF EXISTS `english`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `english` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `english`
--

LOCK TABLES `english` WRITE;
/*!40000 ALTER TABLE `english` DISABLE KEYS */;
INSERT INTO `english` VALUES (4,'<h2>About</h2>\r\n\r\n<p>Chandeliers are the most ornate ceiling-mounted light fixtures that produce much light. Their long and rich history in various European countries is just beginning to receive thorough research attention. In the course of centuries, the forms and d&eacute;cor of chandeliers sensitively and expressively reacted to constant changes in European culture. As a result, several main types were formed, which are divided by researchers into melusines, ring/crown/wheel-shaped, one rod/stem/shaft/baluster, frame and dishlight chandeliers. Before the beginning of the 18th century, chandeliers were mainly produced from brass, iron, wood and horn. In the late 16th century, chandelier frames began to be decorated with rock crystal strings and pendants. From 1700, chandeliers were produced from glass, man-made crystal, and somewhat later, porcelain, papier m&acirc;ch&eacute; and other materials. The variety of materials gave the manufacturers freedom and diversity of forms, but before the invention of the electric bulb, the source of light in chandeliers came from candles, which always had to be directed upright. With the invention of electricity, there remained almost no restrictions for chandelier forms.</p>\r\n\r\n<p>In the rich history of light fixtures, chandeliers from the 16th to the first half of the 20th century that survived in Lithuania occupy an important place. The aim of this project is to present them. It is important to add that many chandeliers that decorated or still decorate Lithuanian buildings were brought from other European countries. Local attribution can be given only to a small part of these artefacts. However, this fact does not lessen their importance. Like other artefacts reflecting material culture, chandeliers vividly illustrate the history of Lithuania&rsquo;s artistic import.</p>\r\n\r\n<p>At the end of 2017, the first stage of the project &ldquo;Heritage of Chandeliers in Lithuania&rdquo; was launched. It is focused on the most valuable historical chandeliers of the Vilnius region. New data presented here have been mostly discovered by the author of the project during the last seven years of research on historical chandeliers.</p>\r\n\r\n<h2>Selection of chandeliers</h2>\r\n\r\n<p>Due to the turbulent history of the Lithuanian state, only a small part of chandeliers have reached our times. Many of them are no longer found in their original places, thus chandeliers of high artistic value from the interiors of sacral and secular buildings, which are currently held in Lithuanian museums and are included or not yet included in the register of cultural treasures of the Republic of Lithuania, are analysed in this database. Chandeliers held in private interiors or private collections are hardly accessible and have been excluded from the catalogue. Chandeliers that had extraordinary artistic and historical value but considerably deteriorated or did not survive, and have been recorded in visual material, are presented separately. Only the artefacts manufactured by professional masters are analysed, while ethnographic wooden specimens that were hung in rich peasants&rsquo; homes and special chandeliers used for bridal showers are not considered. The significantly deteriorated chandeliers held in museums are currently not included either - they will supplement the database in the future, after their restoration.</p>\r\n\r\n<h2>Choronology</h2>\r\n\r\n<p>The chronological limits of the database include the period from the 17th century to the 1930s. This choice was determined by the survival factor the earliest artefacts that have reached our days were manufactured in the Renaissance era and are dated to the late 16th century. The latest light fixtures analysed in the catalogue date to the interwar period. During World War II, several large metallurgical centres in Europe were destroyed, factories that manufactured chandeliers were closed, and their equipment was taken away or used for the war needs. This process took place in Lithuania as well, where the companies that manufactured chandeliers in the early 20th century and in the interwar period, even in small quantities, ceased their activity at that time. In the future, we intend to supplement the catalogue with descriptions of exceptional chandeliers created from the second half of the 20th to the early 21st century.</p>\r\n\r\n<h2>Data selection&nbsp;</h2>\r\n\r\n<p>Each entry of the database includes photos of chandeliers professionally made in 2017, data about the time, place, materials and techniques of production of the chandelier(s), and a detailed description of the artefact. A brief overview of the features of pendant chandeliers of a respective period is given, the type of a concrete chandelier is defined, and its visual features are analysed. Whenever possible, data on historical images, written sources related to the artefact, information about the conducted restoration works, lost parts, as well as known analogues in Lithuania or foreign countries are presented. The description ends with conclusions about the value and extraordinariness of the artefact in the general context of Lithuanian and European chandeliers.</p>','2018-04-24 18:44:15','2018-04-24 18:51:08');
/*!40000 ALTER TABLE `english` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_id` int(10) unsigned NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_card_id_foreign` (`card_id`),
  CONSTRAINT `images_card_id_foreign` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (51,32,'storage/fAZcdi72UV4Bj0DJBAykJuFwazrLPsQVxYFs9kfk.png','Pavadinimas 1',NULL,'2018-03-23 17:10:19','2018-03-23 17:10:19'),(52,33,'storage/GMMAaC3LzeGDP86EuvoJ6m60Zl8gebHwN1Zbw8Sf.jpeg','Sietynas, XIX a. 1–3 deš. Vilniaus arkivyskupija. Povilo Jarmalkovičiaus nuotr., 2017',NULL,'2018-04-18 17:50:27','2018-04-18 17:50:27'),(53,34,'storage/jem2e6Mdeq6C2CmVl8VRrbwcHnkUOE5KtAf3WaQA.jpeg','Pavadinimas 1',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(54,34,'storage/gDpuhOilOuQOzhoBlSYxfppP5ywgUUkndzyihcBd.jpeg','Pavadinimas 2',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(55,34,'storage/mJzpAsDekO2wnOhGCJTNGnKFel8DHR6fDKT3avSi.jpeg','Pavadinimas 3',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(56,34,'storage/cMCtp0xHDh4AQRlZj1BS55asL1XvKwuMdIsfcxJb.jpeg','Pavadinimas 4',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(57,34,'storage/a2sDWgcCdBLDeu2GU7OMvduEf25umcG4RywgME04.jpeg','Pavadinimas 5',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(58,34,'storage/Fcfrda8uGgrezDUket0YKmVs6PObMkCCAVZMlNZc.jpeg','Pavadinimas 6',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'<p>European Society and Documentation Centre for Chandeliers, Light and Lighting</p>','http://www.lightandglass.eu/','2018-04-24 16:00:00','2018-04-24 19:06:57'),(2,'<p><img alt=\"Lietuvos kultūros taryba\" src=\"https://www.ltkt.lt/images/logo.png\" /></p>','http://www.ltkt.lt','2018-04-24 19:06:13','2018-04-24 19:06:13');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_02_26_170115_init_tables',1),(4,'2018_03_02_161418_centuries',1),(5,'2018_03_08_162352_regions',1),(7,'2018_03_21_171843_add_home_page_sub_menus',2),(9,'2018_03_31_085156_add_admin',3),(10,'2018_03_31_091336_add_messages_add_english',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,'POST 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',NULL,NULL),(3,'POST 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',NULL,NULL),(4,'POST 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',NULL,NULL),(5,'POST 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',NULL,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `references`
--

DROP TABLE IF EXISTS `references`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `references` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_id` int(10) unsigned NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `references_card_id_foreign` (`card_id`),
  CONSTRAINT `references_card_id_foreign` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `references`
--

LOCK TABLES `references` WRITE;
/*!40000 ALTER TABLE `references` DISABLE KEYS */;
INSERT INTO `references` VALUES (134,32,'Nuoroda 1',NULL,'2018-03-23 17:10:19','2018-03-23 17:10:19'),(135,33,'Stankevičienė Regimanta, Dailės kūrinio aprašas Uk 37259, 2013, in: Kultūros paveldo centro Kilnojamųjų objektų poskyrio archyvas.',NULL,'2018-04-18 17:50:27','2018-04-18 17:50:27'),(136,34,'Nuoroda 1',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(137,34,'Nuoroda 2',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(138,34,'Nuoroda 3',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(139,34,'Nuoroda 4',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(140,34,'Nuoroda 5',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26'),(141,34,'Nuoroda 6',NULL,'2018-04-25 16:53:26','2018-04-25 16:53:26');
/*!40000 ALTER TABLE `references` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `regions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Vilniaus apskritis',NULL,NULL),(2,'Kauno apskritis',NULL,NULL),(3,'Klaipėdos apskritis',NULL,NULL),(4,'Šiaulių apskritis',NULL,NULL),(5,'Panevėžio apskritis',NULL,NULL),(6,'Alytaus apskritis',NULL,NULL),(7,'Marijampolės apskritis',NULL,NULL),(8,'Utenos apskritis',NULL,NULL),(9,'Telšių apskritis',NULL,NULL),(10,'Tauragės apskritis',NULL,NULL),(11,'Vilniaus apskritis',NULL,NULL),(12,'Kauno apskritis',NULL,NULL),(13,'Klaipėdos apskritis',NULL,NULL),(14,'Šiaulių apskritis',NULL,NULL),(15,'Panevėžio apskritis',NULL,NULL),(16,'Alytaus apskritis',NULL,NULL),(17,'Marijampolės apskritis',NULL,NULL),(18,'Utenos apskritis',NULL,NULL),(19,'Telšių apskritis',NULL,NULL),(20,'Tauragės apskritis',NULL,NULL),(21,'Vilniaus apskritis',NULL,NULL),(22,'Kauno apskritis',NULL,NULL),(23,'Klaipėdos apskritis',NULL,NULL),(24,'Šiaulių apskritis',NULL,NULL),(25,'Panevėžio apskritis',NULL,NULL),(26,'Alytaus apskritis',NULL,NULL),(27,'Marijampolės apskritis',NULL,NULL),(28,'Utenos apskritis',NULL,NULL),(29,'Telšių apskritis',NULL,NULL),(30,'Tauragės apskritis',NULL,NULL),(31,'Vilniaus apskritis',NULL,NULL),(32,'Kauno apskritis',NULL,NULL),(33,'Klaipėdos apskritis',NULL,NULL),(34,'Šiaulių apskritis',NULL,NULL),(35,'Panevėžio apskritis',NULL,NULL),(36,'Alytaus apskritis',NULL,NULL),(37,'Marijampolės apskritis',NULL,NULL),(38,'Utenos apskritis',NULL,NULL),(39,'Telšių apskritis',NULL,NULL),(40,'Tauragės apskritis',NULL,NULL),(41,'Vilniaus apskritis',NULL,NULL),(42,'Kauno apskritis',NULL,NULL),(43,'Klaipėdos apskritis',NULL,NULL),(44,'Šiaulių apskritis',NULL,NULL),(45,'Panevėžio apskritis',NULL,NULL),(46,'Alytaus apskritis',NULL,NULL),(47,'Marijampolės apskritis',NULL,NULL),(48,'Utenos apskritis',NULL,NULL),(49,'Telšių apskritis',NULL,NULL),(50,'Tauragės apskritis',NULL,NULL),(51,'Vilniaus apskritis',NULL,NULL),(52,'Kauno apskritis',NULL,NULL),(53,'Klaipėdos apskritis',NULL,NULL),(54,'Šiaulių apskritis',NULL,NULL),(55,'Panevėžio apskritis',NULL,NULL),(56,'Alytaus apskritis',NULL,NULL),(57,'Marijampolės apskritis',NULL,NULL),(58,'Utenos apskritis',NULL,NULL),(59,'Telšių apskritis',NULL,NULL),(60,'Tauragės apskritis',NULL,NULL);
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Alante','alante.valtaite@gmail.com','$2y$10$FQuJ5E5IxsoIvDPyqTyobeTvwiZh.rRFFhlLajne61yHzRhnHXM/2','6Xs0eFEfHzTlhVszarkDarpNQtfhGzgjiCGAelhrJHidneXEDOTl9rzP6O72','2018-03-15 16:22:21','2018-03-15 16:22:21','admin'),(3,'Konstantin','konstantin.gagac@gmail.com','$2y$10$B4wVlqabt6y9WGonCEOM0.1j7agDifZTBL3iVMSrWeMj/orVcbmlO','ASEwrAc0Av5SoVzKgLxj8iMVsUAq0XXCqL2eQi9mLqZoTl3AFfUKpTfBplOm','2018-03-31 08:59:16','2018-03-31 08:59:16',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-08 18:16:22
