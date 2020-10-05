-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2020 at 06:24 PM
-- Server version: 10.3.24-MariaDB-2
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
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `ime` tinytext COLLATE utf8_bin NOT NULL,
  `sifra` longtext COLLATE utf8_bin NOT NULL,
  `godine` text COLLATE utf8_bin NOT NULL,
  `ovlascenje` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `email`, `ime`, `sifra`, `godine`, `ovlascenje`) VALUES
(4, '\0majjunjulavgust@gmail.com', 'anonymousvegan', '$2y$10$noyFPz6W86vq/pCvasoycORrcqOfAqHClOgejbcPUTsjpvVkidlz2', '17', 'admin'),
(12, 'maloletnik@gmail.com', 'maloletnik', '$2y$10$tgHSaLJMzfCy8kPLh/uIVuQhbqTwoJZb5zAXn1HyiMCpMH.uuPgIW', '11', 'obican'),
(16, 'punoletan@gmail.com', 'punoletan', '$2y$10$3FH/0Qiaw2a63V64H6WcFeOhvbjxJYs4rId59DMXuHNdJBE2PHnpK', '18', 'obican'),
(17, 'desanka@gmail.com', 'desanka', '$2y$10$gstMty9489L.mk/.AFNdpeUMBI5Be9fXXNTgULOF6GxKg36beyMya', '30', 'obican'),
(18, 'djura@gmail.com', 'Ђура', '$2y$10$PygYvZK6eLx7uiCJjw4sl.T10Sjxn4d8ImYu/BTHFuAfC.oaKjQUC', '40', 'obican'),
(19, 'sinana@gmail.com', 'sinan', '$2y$10$N6QY7ctI1f.DpYOgUTJUvOBuM0CM0ICzN8aU/9wsjUg2oJE.4u3AG', '40', 'obican'),
(20, 'kemal@gmail.com', 'kemal', '$2y$10$PT90lKrN6QnGrNbfg7jCbOkvt87dc9Cq8WUuwbbqqOZ/mxSODnFzy', '50', 'obican');

-- --------------------------------------------------------

--
-- Table structure for table `passwordrestart`
--

CREATE TABLE `passwordrestart` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `selektor` text COLLATE utf8_bin NOT NULL,
  `token` longtext COLLATE utf8_bin NOT NULL,
  `vreme` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pesme`
--

CREATE TABLE `pesme` (
  `id` int(11) NOT NULL,
  `pisac` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `naslov` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `pesma` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `pogodna` text COLLATE utf8_bin NOT NULL,
  `vreme` text COLLATE utf8_bin NOT NULL,
  `kategorija` text COLLATE utf8_bin NOT NULL,
  `lajkova` int(11) DEFAULT NULL,
  `lajkovao` longtext COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pesme`
--

INSERT INTO `pesme` (`id`, `pisac`, `naslov`, `pesma`, `pogodna`, `vreme`, `kategorija`, `lajkova`, `lajkovao`) VALUES
(31, 'anonymousvegan', 'Najveći na kolenima', 'Bože, tebi se obraćam jer davno izdali su me ljidi,\r\nIzdao sam i ja tebe, ali molim te uz mene budi.\r\nTi si stvorio nebo, anđele i ljude,\r\nTi kažeš budi,  a ono bude.\r\nTi me uspavljuješ svaku noć, čuvaš me kada upadnem u san,\r\nTi jedini imaš takvu moć, da  suncem obasjaš ovaj dan.\r\nSpasio si mnoge ljude, proroke i grešne,\r\nTi zaslužuješ da se tebi pevaju najlepše pesme.\r\nZnam nisam neko ko je dostojan tebe, tvojih reči i dela,\r\nAli moj život bez tvog pristva nije ideal.\r\nU tvojim sam rukama, zaslužio sam da me uništiš za sva vremena,\r\nAli Hriste, stradao si u mukama, da platiš moje grehe i moja loša dela.\r\nZnam vraćam se na greh,  karakter slab a želja mi je velika,\r\nZa mene nije ovaj svet, želim da ti služim doveka.\r\nMnogo puta sam pao  \r\nali pred ljudima sam bio na leđima,\r\nMnogo puta si me podigao,\r\nA sad sam pred tobom na kolenima.\r\nHvala što me hlebom hraniš, dao si mi slabodu da sam biram svoj put,\r\nDa upadnem u grehe ti mi ne braniš,\r\nAli kada zgrešim na sebe sam ljut.\r\nZnam mnogo puta si me podigao, izvukao me iz gadosti ovoga sveta,\r\nAko od mene nisi odustao,\r\nIzbavi me i sada, ti koji si poslao sina da strada zbog čoveka.', 'jeste', '1597837870', 'rodoljubive-i-religijske', 0, ''),
(32, 'anonymousvegan', 'Ne postojiš', 'Nema te, ali srce moje je naviklo da čeka,\r\nNe postojiš, ostaćeš ništa - doveka,\r\nNisi biće, nisi čovek-niti u telu anđelice\r\nDeo si mašte, nemaš ni usne ni lice. \r\n\r\nTi postojiš dokle postoji mene, \r\nmog sna koji budan sanjam kada gledam najlepši cvet. \r\nAli i on lagano vene, lagano ali sigurno - kako propada ovaj svet.\r\n\r\nIme ti je nada, čvrsto verujem u to,\r\nNadam se da ćemo se sresti jednog dana,\r\nPre nego što me život baci na dno, \r\nSamo požuri da to bude pre dana\r\n Kada me nadvlada zlo..\r\n\r\nMožda i treba srce da mi se ispuni mrakom,\r\nJer samo u mraku svetlo jako sija,\r\nGazim napred sa mišlju takvom,\r\nJa idem - ali bez tebe život mi ne prija.\r\n\r\nU mnogima sam video tvoje oči čedne,\r\nSmešio se tvom licu i slušao tvoj glas,\r\nAli sve one su kopije bedne,\r\nNi jedna mojoj dušu nije bila spas.\r\n\r\nTvoje oči vidoh samo kod drugih - nose ih ponosno kao da su njima date,\r\nAli ne gledaju njima u dušu kao ti,\r\nNiti mogu srce da mi plate.\r\n\r\nBudi to što jesi - ništa,\r\nI ne dolazi u ovaj svet patnje i jada,\r\nPusti mene samog da se patim.\r\nSamo tako ću te zaštititi, nemoj se pojaviti - nikada.', 'jeste', '1597837933', 'ljubavne', 1, '[\"anonymousvegan\"]'),
(33, 'anonymousvegan', 'čekaću te', 'čekaću te ma koliko hladno bilo,\r\njer ljubav tvoja mene greje,\r\ndrveće je svoje grane već povio, \r\ni sve kao i moje srce-polako  vene.\r\n\r\njesen je-vetar njiše grane,\r\nstojim i tražim te među licima, \r\nsetim se na prošle dane, \r\ndok lagano šetam našim ulicama.\r\n\r\nčekaću te, iako nisi izašla ovaj put,\r\nčekaću dok vetar nosi list žut,\r\nčekaću još koji sat ili dan,\r\nčekaću te i kada upadnem u san. \r\n\r\nsrešćemo se, možda sledeće nedelje- \r\nopet ću gledati te oči-slušati taj glas,\r\nto su mi jedine neostvarene  želje,\r\nživeču  samo za taj čas.', 'nije', '1597838026', 'ljubavne', 1, '[\"anonymousvegan\"]'),
(34, 'anonymousvegan', 'Nada', 'tad je bilo proleće\r\npamtim\r\nbila si vesela \r\na ja sada patim.\r\n\r\ntvoj osmeh na licu-\r\nsijao je u tom holu,\r\npamtim svaku sitnicu-\r\nuzrok si mom bolu!\r\n\r\ni te oči sijaju,\r\nkao zvezde pokazuju mi put,\r\nali do tvog srca mi ne daju,\r\nmožda sam zato na sebe ljut!\r\n\r\ntaj tren kad se postidim\r\nočaran pramenom tvoje kose\r\npamtim i iznova ga želim\r\nkao cveće što je željno rose!\r\n\r\nčekam tren da te sretnem\r\nda ti kažem samo reči-dve\r\nza tobom dugo čeznem\r\nali znam da ti neću reći sve.\r\n\r\nmožda zanemim kad pogledam u anđela\r\nali i  tišina pored tebe meni je divna,\r\na možda je mene sudbina proklela\r\njer samo anđeli imaju krila.\r\n\r\nželja mi je da stobom poletim do visina\r\nda se budim gledajući tvoje oči,\r\npriznajem da te volim- da si divna\r\novde priznajem ali sutra neću moći.\r\n\r\nradim sve da te izbacim iz glave\r\nali ne ide, izgleda da toga ima mnogo,\r\novo kod mene predugo traje \r\nda bih te izbaciti mog\'o.\r\n\r\nda li će Bog stati na put našoj sreći,\r\nda li je  on na mene ljut,\r\npitam se šta ćeš na to reći,\r\nda li je ovo uzaludan trud?\r\nplašim se  da ne pogrešim, \r\na grehove već imam svoje,\r\nda me ne prevariš sa nekom toplom reči,\r\nda me lažu tople usne tvoje?', 'nije', '1597838095', 'ljubavne', 1, '[\"anonymousvegan\"]'),
(35, 'desanka', 'strepnja', 'Ne, nemoj mi prići!Hoću izdaleka\r\nDa volim i želim oka tvoja dva.\r\nJer sreća je lepa samo dok se čeka,\r\nDok od sebe samo nagoveštaj da.\r\n\r\nNe,nemoj mi prići!Ima više draži\r\nOva slatka strepnja,čekanje i stra`.\r\nSve je mnogo lepše donde dok se traži\r\nO čemu se samo tek po slutnji zna.\r\n\r\nNe,nemoj mi prići!Našto to, i čemu?\r\nIz daleka samo sve k`o zvezda sja;\r\nIz daleka samo divimo se svemu.\r\nNe,neka mi ne priđu oka tvoja dva.', 'nije', '1598046283', 'ljubavne', 0, ''),
(36, 'desanka', 'Krvava bajka', 'Било је то у некој земљи сељака\r\nна брдовитом Балкану,\r\nумрла је мученичком смрћу\r\nчета ђака\r\nу једном дану.\r\nИсте су године\r\nсви били рођени,\r\nисто су им текли школски дани,\r\nна исте свечаности\r\nзаједно су вођени,\r\nод истих болести сви пелцовани\r\nи сви умрли у истом дану.\r\nБило је то у некој земљи сељака\r\nна брдовитом Балкану\r\nумрла је јуначком смрћу\r\nчета ђака\r\nу истом дану.\r\nА педесет и пет минута\r\nпре смртног трена\r\nседела је у ђачкој клупи\r\nчета малена\r\nи исте задатке тешке\r\nрешавала: колико може\r\nпутник ако иде пешке...\r\nи тако редом.\r\nМисли су им биле пуне\r\nи по свескама у школској торби\r\nбесмислених лежало је безброј\r\nпетица и двојки.\r\nПрегршт истих снова\r\nи истих тајни\r\nродољубивих и љубавних\r\nстискали су у дну џепова.\r\nИ чинило се сваком\r\nда ће дуго\r\nда ће врло дуго\r\nтрчати испод свода плава\r\nдок све задатке на свету\r\nне посвршава.\r\nБило је то у некој земљи сељака\r\nна брдовитом Балкану\r\nумрла је јуначком смрћу\r\nчета ђака\r\nу истом дану.\r\nДечака редови цели\r\nузели се за руке\r\nи са школског задњег часа\r\nна стрељање пошли мирно\r\nкао да смрт није ништа.\r\nДругова редови цели\r\nистог часа се узнели\r\nдо вечног боравишта.', 'jeste', '1598122376', 'rodoljubive-i-religijske', 0, ''),
(37, 'Ђура', 'Вече', 'Као златне токе, крвљу покапане,\r\nДоле пада сунце за гору, за гране.\r\n\r\nИ све немо ћути, не миче се ништа,\r\nТа најбољи витез паде са бојишта!\r\n\r\nУ срцу се живот застрашеном таји,\r\nСамо ветар хуји... То су уздисаји...\r\n\r\nА славуји тихо уз песмицу жале,\r\nНе би ли им хладне стене заплакале.\r\n\r\nНемо поток бежи — ко зна куда тежи!\r\nМожда гробу своме — мору хлађаноме?\r\n\r\nСве у мртвом сану мрка поноћ нађе;\r\nСве је изумрло. Сад месец изађе...\r\n\r\nСмртно бледа лица, горе небу лети:\r\nПогинули витез ено се посвети!...', 'jeste', '1598352875', 'zivotinje-i-priroda', 1, '[\"anonymousvegan\"]'),
(38, 'Ђура', 'На липару', 'Јесте ли ми род, сирочићи мали?\r\nИл\' су и вас, можда, јади отровали?\r\nИли вас је, слабе, прогонио свет —\r\nПа дођосте само, да, кад људе знамо,\r\nДа се и ми мало боље упознамо,\r\nУ двопеву тужном певајући сет?...\r\n\r\nМи смо мале,\r\nАл\' смо знале\r\nДа нас неће\r\nНико хтети,\r\nНико смети\r\nТако волети,\r\nКао ти...\r\n— Ћију ћи!\r\n\r\nМоје тице лепе, једини другари,\r\nУ новоме стану познаници стари,\r\nСрце вам је добро, песма вам је мед;\r\nАли моје срце, али моје груди\r\nЛеденом су злобом разбијали људи,\r\nПа се, место срца, ухватио лед.\r\n\r\nС белом булом,\r\nСа зумбулом\r\nШарен-рајем,\r\nРајским мајем,\r\nЦвећем, миром,\r\nСа лептиром,\r\nЛетимо ти ми,\r\nСрца топити...\r\n— Ђију ћи!\r\n\r\nМоје тице мале, јадни сиротани!\r\nПрошли су ме давно моји лепи дани,\r\nУвело је цвеће, одбег\'о ме мај,\r\nА на души оста, к\'о скрхана биљка,\r\nИл\' к\'о тужан мирис увелог босиљка,\r\nЈедна тешка рана, тежак уздисај.', 'jeste', '1598352968', 'zivotinje-i-priroda', 0, ''),
(39, 'desanka', 'Опомена', 'Чуј, рећи ћу ти своју тајну:\r\nне остављај ме никад саму\r\nкад неко свира.\r\nМогу ми се учинити\r\nдубоке и меке\r\nочи неке\r\nсасвим обичне.\r\nМоже ми се учинити\r\nда тонем у звуке,\r\nпа ћу руке\r\nсваком пружити.\r\nМоже ми се учинити\r\nлепо и лако\r\nволети кратко\r\nза један дан.\r\nИли могу ком рећи у томе\r\nчасу чудесно сјајну\r\nпредрагу ми тајну\r\nколико те волим.\r\nО, не остављај ме никад саму\r\nкад неко свира.\r\nУчиниће ми се негде у шуми\r\nпоново све моје сузе теку\r\nкроз самоникле неке чесме.\r\nУчиниће ми се црн лептир један\r\nпо тешкој води крилом шара\r\nшто некад неко рећи ми не сме.\r\nУчиниће ми се негде кроз таму\r\nнеко пева и горким цветом\r\nу непреболну рану срца дира.\r\nО, не остављај ме никад саму,\r\nНикад саму,\r\nКад неко свира.', 'jeste', '1598353269', 'ljubavne', 1, '[\"anonymousvegan\"]'),
(40, 'kemal', 'Ne kunem te', 'Neka ti je moja suza haram\r\nsvaka zora koju budno doceka\r\nsve veceri kad si s drugim provela\r\nsve ti haram mladog si me zavela\r\n\r\nRef.\r\nNe kunem te, sto me nisi voljela\r\nnit\' te kunem, zasto nisi ostala\r\nnek ti suze budu vjerni gosti\r\nsta ucini od moje mladosti\r\n\r\nNeka ti je moja ljubav prosta\r\ni da nikad neznas radost sta je\r\nnek za tvoju tugu ljeka nema\r\nprokleta ti slova od imena', 'jeste', '1598354052', 'ljubavne', 0, ''),
(41, 'kemal', 'došao sam samo da te vidim', 'Ne ljuti se sto sam opet doso\' i sta trazim ja na pragu tvom dosao sam zelim da te vidim da ispunim zelju srcu svom\r\nRef. Dosao sam samo da te vidim i da vratim secanje u dusi jos te volim zasto da se stidim dosao sam samo da te vidim\r\nSada idem nemoj da se ljutis znam da tebi ovo tesko pada rastanak si prebolela lako al ja veruj ne mogu nikada\r\nRef.\r\nDa te zovem meni da se vratis znam da nikad ti pristala nebi za utehu i boli u dusi ja sam ovo dozvolio sebi', 'jeste', '1598354105', 'ljubavne', 0, ''),
(42, 'kemal', 'eh da sam ', 'Da sam s tobom izlazio\r\neh da sam, eh da sam\r\nza ruku te ja vodio\r\neh da sam, eh da sam\r\n\r\nU kafice, diskoteke\r\neh da sam, eh da sam\r\noko struka grlio te\r\neh da sam, eh da sam\r\n\r\nRef.\r\nGitara u tvojoj ruci\r\neh da sam, da sam\r\nda me sviras ti u muci\r\neh da sam, da sam\r\n\r\nVino sto ti dusu grije\r\neh da sam, eh da sam\r\nmjesto vode da me pijes\r\neh da sam, eh da sam\r\n\r\nEh da sam, da sam, da sam\r\nkako bi me svirala\r\neh da sam, da sam, da sam\r\nsto bi me ispijala\r\n\r\nTvojoj kosi snala da sam\r\neh da sam, eh da sam\r\nobraz tvoje suze da sam\r\neh da sam, eh da sam\r\n\r\nPrsten tvoje ruke da sam\r\neh da sam, eh da sam\r\ntvojoj pjesmi naslov da sam\r\neh da sam, eh da sam\r\n\r\nRef.\r\n\r\nBluza sto ti grudi grije\r\neh da sam, eh da sam\r\npogled oka tvoga da sam\r\neh da sam, eh da sam\r\n\r\nKarmin tvoje usne da sam\r\neh da sam, eh da sam\r\nvazduh sto ga dises da sam\r\neh da sam, eh da sam', 'jeste', '1598354190', 'ljubavne', 0, '[]'),
(43, 'kemal', 'Okrećem se kibletu', 'Odlazim sa ovog mjesta\r\ndurat ne mogu\r\nljubav moju da mi vrate\r\nmolim se Bogu\r\n\r\nOva dusa bez te duse\r\nne zna zivjeti\r\n(2x)\r\n\r\nRef. 2x\r\nSunce zadje, dan ne svice\r\ndurat ne mogu\r\nljubav moju da mi vrate\r\nmolim se Bogu\r\n\r\nOkrecem se kibletu\r\nBogu da se pomolim\r\nil za zivot il\' rahmet\r\nil za ljubav da molim\r\n\r\nBez ljubavi ja ne umijem\r\nne znam zivjeti\r\nal sta vredi kad nauci\r\nsamo patiti\r\n\r\nOva dusa bez te duse\r\nne zna zivjeti\r\n(2x)', 'jeste', '1598354246', 'rodoljubive-i-religijske', 0, ''),
(44, 'sinan', 'Minut-dva', 'Nasao sam sliku staru\r\nu kutiji na ormaru\r\nvratile se uspomene\r\nkad si bila deo mene\r\n\r\nKako si, sta radis\r\nko se s tobom budi\r\nne znam, ali znam ko\r\njos za tobom ludi\r\n\r\nRef.\r\nDaj samo minut, dva da je zagrlim\r\nBoze, cudo mi pokloni\r\nsamo minut, dva bice dovoljno\r\nopet srce da mi slomi\r\n\r\nSamo jedan tren, Boze, znaci mi\r\nkao godine kraj druge\r\nozivi sliku tu da udje srece zrak\r\nkroz prozor moje tuge\r\n\r\nNasao sam sliku jednu\r\nvise od zivota vrednu\r\nozivele stare rane\r\nsecaju na prosle dane\r\n\r\nKako si, sta radis\r\nko se s tobom budi\r\nne znam, ali znam ko\r\njos za tobom ludi', 'jeste', '1598356485', 'ljubavne', 2, '[\"kemal\",\"anonymousvegan\"]'),
(45, 'sinan', 'da se opet rodim', 'Da se opet rodim\r\nziveo bih isto\r\nspreman i na srecu\r\nali i na tugu\r\n\r\nNe bih promenio nista\r\njer ti ne bi bila ista\r\na ja necu\r\nnecu ljubav drugu\r\n\r\nDa se opet rodim\r\nunapred bih znao\r\ns kim se druzim\r\nkoga svojoj kuci vodim\r\n\r\nNe bih promenio nista\r\njer ti ne bi bila ista\r\nja te takvu hocu\r\nopet da se rodim\r\n\r\nRef. 2x\r\nPrvi korak svoj\r\npoklonio bih tebi\r\nda te nema sveta\r\nugledao ne bih\r\n\r\nPrve reci, prve pesme\r\nja bih tebi otpevao\r\nda se opet rodim\r\nzivot bih ti dao\r\n\r\nDa se opet rodim\r\nbilo bi mi jasno\r\nkojim putem treba\r\nsrce da mi krene\r\n\r\nNe bih lutao po svetu\r\nradio na svoju stetu\r\njer bih znao\r\nda si rodjena za mene', 'jeste', '1598356564', 'ljubavne', 0, '[]'),
(46, 'kemal', 'snežana', 'Rastasmo se, još se pitam zašto\r\nMožda život tako je želeo\r\nOtišla si sa prolećem ranim\r\nA ja sam te i dalje voleo\r\nSnežana, spominjem te svakog dana\r\nSnežana, lakše mi je tako\r\nSnežana, ne mogu bez tebe\r\nPrva ljubav ne gasi se lako\r\nNeko ti je već možda i rek\'o\r\nDa jos uvek po starome živim\r\nI za noći prepune samoće\r\nDa Snežana tebe i ne krivim\r\nSnežana, spominjem te svakog dana\r\nSnežana, lakše mi je tako\r\nSnežana, ne mogu bez tebe\r\nPrva ljubav ne gasi se lako\r\nČujem da si sada srećna žena\r\nŽivot ti je mnogo toga dao\r\nJa te dušo nisam preboleo\r\nIzgubih te mnogo mi je žao\r\nSnežana, spominjem te svakog dana\r\nSnežana, lakše mi je tako\r\nSnežana, ne mogu bez tebe\r\nPrva ljubav ne gasi se lako', 'jeste', '1598356719', 'ljubavne', 2, '[\"kemal\",\"anonymousvegan\"]'),
(47, 'sinan', 'Sine moj', 'Navik’o si nekad da me nema\r\nda odem negdje na dan, dva\r\nkad se s puta kući vratim umoran\r\nti mi kažeš, pa nema te godina\r\nsine moj, sine moj\r\n\r\nRef.\r\nGorka je kora hljeba\r\nšto te hrani iz kafane\r\ntežak je ovaj život\r\nšto ga živim da preživim\r\n\r\nGorak je svaki korak\r\nšto ga pređem preko praga\r\ntvoje oči svijetle u noći\r\ndok se tebi, sine, kući vraćam\r\nja pjevam i kad mi se plače\r\n\r\nNavik’o si, nisam ko svi drugi\r\ni kad me trebaš, baš tad me nema\r\na kad dođe subota na nedjelju\r\nsvi su sa ocem, a mene nema\r\nsine moj, sine moj', 'jeste', '1398356719', 'porodicne', 0, ''),
(62, 'kemal', 'Burma', 'Dosla si da mi burmu vratis\r\ni da kazes sa mnom ne ostajes\r\nkazes, nedavno si drugog srela\r\nza koji dan se za njega udajes\r\n\r\nRef.\r\nVracenu burmu cu sacuvati\r\nna tebe ce sjecati kad odes\r\nza tvoju ruku cu je cuvati\r\nako se ikada razvedes\r\n\r\nDaleko ces od mene zivjeti\r\nsa njim odlazis preko granice\r\nod nasih zaruka ostaju samo\r\npusti snovi moje majke starice', 'jeste', '1601308072', 'ljubavne', 1, '[\"anonymousvegan\"]'),
(67, 'anonymousvegan', 'Sećanje', 'hvala ti što si  se pojavila,\r\ntog petka, te divne večeri u februaru,\r\ntog dana je kiša lila,\r\nali sijalo je sunce u tvom zagrljaju..\r\n\r\nprvi put sam osetio razumevanje- istinsko, bez stida i srama,\r\nželela si mi pomoći, a ja sam želeo da ne budeš sama.\r\nprvi put me je neko podržao za sve, ma koliko i sam sumnjao u sebe,\r\ntu čistotu neiskvarenog napaćenog bića prvi put sam video kod tebe.\r\n\r\ndrhtao sam i brinuo se-hoće li sve biti ok kada budemo se našli,\r\nali pogrešno sam razumeo izgleda sve- al nije mi prvi put da mi srce pati.\r\n\r\nti si me inspirisala da se menjam na bolje,\r\nda pobedim telo i očistim dušu,\r\nsada mi je samo gore \r\njer nema tebe da mi ne daš da upadnem u kušnju.\r\n\r\nznam- Različiti smo, \r\nmoji i tvoji planovi nisu isti,\r\nnikada nećemo oko nečega da se složimo \r\nipak moje srce najbolje ti misli.\r\n\r\nA mogla si biti ona prava,\r\nbiće iz moje prethodne pesme,\r\nal sećaću se  još mnogo dana\r\nda želeo sam stobom ono što reći nesmem.\r\n\r\nBolje što nisi ta, \r\nopisana u pesmi kao biće koje svetli,\r\njer ljudi su navikli da je tama,\r\nubili bi te, a nema ko da te osveti.\r\n\r\noprosti ako sam te izneverio,\r\nizneverio sam i sebe i Boga,\r\nizvini što sam  budućnost maštao,\r\na krio misli od oka tvoga.\r\n\r\nzaslužuješ i ti bolje,\r\ndosta ti je tvojih muka i jada,\r\nne brini za probleme moje,\r\nsnaći ću se i ja-nekada.\r\n\r\nHvala ti Bože što si me preko nje promenio,\r\nbarem 3 meseca da uživam u tvojoj ljubavi, kad druge nemam,\r\nali ja sam te izneverio, \r\nizgleda da sam samo ljudima poput psa veran.\r\n\r\nspasi me opet-Učini čudo,\r\nonako kako Ti samo znaš,\r\nmoje telo je bolesno a srce ludo,\r\nsamo u Hristu može naći spas.\r\n\r\nMožda bi ti Bože poslao nekog boljeg\r\nda me dovede k tebi, pred presto da kleknem,\r\nali otkad je ovaj svet stvoren\r\ndobrih je malo- a zloga ima na pretek.', 'jeste', '1601554693', 'ostale', 0, '[]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passwordrestart`
--
ALTER TABLE `passwordrestart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesme`
--
ALTER TABLE `pesme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `passwordrestart`
--
ALTER TABLE `passwordrestart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pesme`
--
ALTER TABLE `pesme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
