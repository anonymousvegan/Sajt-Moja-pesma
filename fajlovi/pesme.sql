-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 06:44 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesme`
--

CREATE TABLE `pesme` (
  `id` int NOT NULL,
  `pisac` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `naslov` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `pesma` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `pogodna` text NOT NULL,
  `vreme` text NOT NULL,
  `kategorija` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesme`
--

INSERT INTO `pesme` (`id`, `pisac`, `naslov`, `pesma`, `pogodna`, `vreme`, `kategorija`) VALUES
(31, 'anonymousvegan', 'Najveći na kolenima', 'Bože, tebi se obraćam jer davno izdali su me ljidi,\r\nIzdao sam i ja tebe, ali molim te uz mene budi.\r\nTi si stvorio nebo, anđele i ljude,\r\nTi kažeš budi,  a ono bude.\r\nTi me uspavljuješ svaku noć, čuvaš me kada upadnem u san,\r\nTi jedini imaš takvu moć, da  suncem obasjaš ovaj dan.\r\nSpasio si mnoge ljude, proroke i grešne,\r\nTi zaslužuješ da se tebi pevaju najlepše pesme.\r\nZnam nisam neko ko je dostojan tebe, tvojih reči i dela,\r\nAli moj život bez tvog pristva nije ideal.\r\nU tvojim sam rukama, zaslužio sam da me uništiš za sva vremena,\r\nAli Hriste, stradao si u mukama, da platiš moje grehe i moja loša dela.\r\nZnam vraćam se na greh,  karakter slab a želja mi je velika,\r\nZa mene nije ovaj svet, želim da ti služim doveka.\r\nMnogo puta sam pao  \r\nali pred ljudima sam bio na leđima,\r\nMnogo puta si me podigao,\r\nA sad sam pred tobom na kolenima.\r\nHvala što me hlebom hraniš, dao si mi slabodu da sam biram svoj put,\r\nDa upadnem u grehe ti mi ne braniš,\r\nAli kada zgrešim na sebe sam ljut.\r\nZnam mnogo puta si me podigao, izvukao me iz gadosti ovoga sveta,\r\nAko od mene nisi odustao,\r\nIzbavi me i sada, ti koji si poslao sina da strada zbog čoveka.', 'jeste', '1597837870', 'rodoljubive-i-religijske'),
(32, 'anonymousvegan', 'Ne postojiš', 'Nema te, ali srce moje je naviklo da čeka,\r\nNe postojiš, ostaćeš ništa - doveka,\r\nNisi biće, nisi čovek-niti u telu anđelice\r\nDeo si mašte, nemaš ni usne ni lice. \r\n\r\nTi postojiš dokle postoji mene, \r\nmog sna koji budan sanjam kada gledam najlepši cvet. \r\nAli i on lagano vene, lagano ali sigurno - kako propada ovaj svet.\r\n\r\nIme ti je nada, čvrsto verujem u to,\r\nNadam se da ćemo se sresti jednog dana,\r\nPre nego što me život baci na dno, \r\nSamo požuri da to bude pre dana\r\n Kada me nadvlada zlo..\r\n\r\nMožda i treba srce da mi se ispuni mrakom,\r\nJer samo u mraku svetlo jako sija,\r\nGazim napred sa mišlju takvom,\r\nJa idem - ali bez tebe život mi ne prija.\r\n\r\nU mnogima sam video tvoje oči čedne,\r\nSmešio se tvom licu i slušao tvoj glas,\r\nAli sve one su kopije bedne,\r\nNi jedna mojoj dušu nije bila spas.\r\n\r\nTvoje oči vidoh samo kod drugih - nose ih ponosno kao da su njima date,\r\nAli ne gledaju njima u dušu kao ti,\r\nNiti mogu srce da mi plate.\r\n\r\nBudi to što jesi - ništa,\r\nI ne dolazi u ovaj svet patnje i jada,\r\nPusti mene samog da se patim.\r\nSamo tako ću te zaštititi, nemoj se pojaviti - nikada.', 'jeste', '1597837933', 'ljubavne'),
(33, 'anonymousvegan', 'čekaću te', 'čekaću te ma koliko hladno bilo,\r\njer ljubav tvoja mene greje,\r\ndrveće je svoje grane već povio, \r\ni sve kao i moje srce-polako  vene.\r\n\r\njesen je-vetar njiše grane,\r\nstojim i tražim te među licima, \r\nsetim se na prošle dane, \r\ndok lagano šetam našim ulicama.\r\n\r\nčekaću te, iako nisi izašla ovaj put,\r\nčekaću dok vetar nosi list žut,\r\nčekaću još koji sat ili dan,\r\nčekaću te i kada upadnem u san. \r\n\r\nsrešćemo se, možda sledeće nedelje- \r\nopet ću gledati te oči-slušati taj glas,\r\nto su mi jedine neostvarene  želje,\r\nživeču  samo za taj čas.', 'nije', '1597838026', 'ljubavne'),
(34, 'anonymousvegan', 'Nada', 'tad je bilo proleće\r\npamtim\r\nbila si vesela \r\na ja sada patim.\r\n\r\ntvoj osmeh na licu-\r\nsijao je u tom holu,\r\npamtim svaku sitnicu-\r\nuzrok si mom bolu!\r\n\r\ni te oči sijaju,\r\nkao zvezde pokazuju mi put,\r\nali do tvog srca mi ne daju,\r\nmožda sam zato na sebe ljut!\r\n\r\ntaj tren kad se postidim\r\nočaran pramenom tvoje kose\r\npamtim i iznova ga želim\r\nkao cveće što je željno rose!\r\n\r\nčekam tren da te sretnem\r\nda ti kažem samo reči-dve\r\nza tobom dugo čeznem\r\nali znam da ti neću reći sve.\r\n\r\nmožda zanemim kad pogledam u anđela\r\nali i  tišina pored tebe meni je divna,\r\na možda je mene sudbina proklela\r\njer samo anđeli imaju krila.\r\n\r\nželja mi je da stobom poletim do visina\r\nda se budim gledajući tvoje oči,\r\npriznajem da te volim- da si divna\r\novde priznajem ali sutra neću moći.\r\n\r\nradim sve da te izbacim iz glave\r\nali ne ide, izgleda da toga ima mnogo,\r\novo kod mene predugo traje \r\nda bih te izbaciti mog\'o.\r\n\r\nda li će Bog stati na put našoj sreći,\r\nda li je  on na mene ljut,\r\npitam se šta ćeš na to reći,\r\nda li je ovo uzaludan trud?\r\nplašim se  da ne pogrešim, \r\na grehove već imam svoje,\r\nda me ne prevariš sa nekom toplom reči,\r\nda me lažu tople usne tvoje?', 'nije', '1597838095', 'ljubavne'),
(35, 'desanka', 'strepnja', 'Ne, nemoj mi prići!Hoću izdaleka\r\nDa volim i želim oka tvoja dva.\r\nJer sreća je lepa samo dok se čeka,\r\nDok od sebe samo nagoveštaj da.\r\n\r\nNe,nemoj mi prići!Ima više draži\r\nOva slatka strepnja,čekanje i stra`.\r\nSve je mnogo lepše donde dok se traži\r\nO čemu se samo tek po slutnji zna.\r\n\r\nNe,nemoj mi prići!Našto to, i čemu?\r\nIz daleka samo sve k`o zvezda sja;\r\nIz daleka samo divimo se svemu.\r\nNe,neka mi ne priđu oka tvoja dva.', 'nije', '1598046283', 'ljubavne'),
(36, 'desanka', 'Krvava bajka', 'Било је то у некој земљи сељака\r\nна брдовитом Балкану,\r\nумрла је мученичком смрћу\r\nчета ђака\r\nу једном дану.\r\nИсте су године\r\nсви били рођени,\r\nисто су им текли школски дани,\r\nна исте свечаности\r\nзаједно су вођени,\r\nод истих болести сви пелцовани\r\nи сви умрли у истом дану.\r\nБило је то у некој земљи сељака\r\nна брдовитом Балкану\r\nумрла је јуначком смрћу\r\nчета ђака\r\nу истом дану.\r\nА педесет и пет минута\r\nпре смртног трена\r\nседела је у ђачкој клупи\r\nчета малена\r\nи исте задатке тешке\r\nрешавала: колико може\r\nпутник ако иде пешке...\r\nи тако редом.\r\nМисли су им биле пуне\r\nи по свескама у школској торби\r\nбесмислених лежало је безброј\r\nпетица и двојки.\r\nПрегршт истих снова\r\nи истих тајни\r\nродољубивих и љубавних\r\nстискали су у дну џепова.\r\nИ чинило се сваком\r\nда ће дуго\r\nда ће врло дуго\r\nтрчати испод свода плава\r\nдок све задатке на свету\r\nне посвршава.\r\nБило је то у некој земљи сељака\r\nна брдовитом Балкану\r\nумрла је јуначком смрћу\r\nчета ђака\r\nу истом дану.\r\nДечака редови цели\r\nузели се за руке\r\nи са школског задњег часа\r\nна стрељање пошли мирно\r\nкао да смрт није ништа.\r\nДругова редови цели\r\nистог часа се узнели\r\nдо вечног боравишта.', 'jeste', '1598122376', 'rodoljubive-i-religijske');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesme`
--
ALTER TABLE `pesme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesme`
--
ALTER TABLE `pesme`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
