CREATE TABLE `korisnici` (
  `id` int NOT NULL,
  `email` text NOT NULL,
  `ime` tinytext NOT NULL,
  `sifra` longtext NOT NULL,
  `godine` text NOT NULL,
  `ovlascenje` text NOT NULL
)
INSERT INTO `korisnici` (`id`, `email`, `ime`, `sifra`, `godine`, `ovlascenje`) VALUES
(1, 'majjunjulavgust@gmail.com', 'anonymousvegan', '$2y$10$noyFPz6W86vq/pCvasoycORrcqOfAqHClOgejbcPUTsjpvVkidlz2', '17', 'admin'),
(2, 'projectalmir@gmail.com', 'rimla', '$2y$10$Dlvgt3szyGjLF1Rl2dCF6.qlAV7AM3Tq6ABpZbhtFWsEFpY/ROKky', '17', 'admin');

ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `korisnici`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
CREATE TABLE `passwordrestart` (
  `id` int NOT NULL,
  `email` text NOT NULL,
  `selektor` text NOT NULL,
  `token` longtext NOT NULL,
  `vreme` text NOT NULL
) 

ALTER TABLE `passwordrestart`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `passwordrestart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE `pesme` (
  `id` int NOT NULL,
  `pisac` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `naslov` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `pesma` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `vreme` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `pogodna` text NOT NULL
)
ALTER TABLE `pesme`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pesme`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
