-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2018 at 12:09 AM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Filmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `kinoner`
--

CREATE TABLE `kinoner` (
  `id` int(11) NOT NULL,
  `name` varchar(71) CHARACTER SET utf8 NOT NULL,
  `desc` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `desc1` varchar(39) CHARACTER SET utf8 NOT NULL,
  `desc2` varchar(33) CHARACTER SET utf8 NOT NULL,
  `desc3` varchar(28) CHARACTER SET utf8 NOT NULL,
  `desc4` varchar(29) CHARACTER SET utf8 NOT NULL,
  `glavnin0` varchar(20) CHARACTER SET utf8 NOT NULL,
  `glavnin1` varchar(26) CHARACTER SET utf8 NOT NULL,
  `glavnin2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `glavnin3` varchar(19) CHARACTER SET utf8 NOT NULL,
  `glavnin4` varchar(20) CHARACTER SET utf8 NOT NULL,
  `glavni0` varchar(48) CHARACTER SET utf8 NOT NULL,
  `glavni1` varchar(49) CHARACTER SET utf8 NOT NULL,
  `glavni2` varchar(48) CHARACTER SET utf8 NOT NULL,
  `glavni3` varchar(43) CHARACTER SET utf8 NOT NULL,
  `glavni4` varchar(51) CHARACTER SET utf8 NOT NULL,
  `home_img` varchar(83) CHARACTER SET utf8 NOT NULL,
  `status` varchar(60) CHARACTER SET utf8 NOT NULL,
  `relase` varchar(168) CHARACTER SET utf8 NOT NULL,
  `time` varchar(26) CHARACTER SET utf8 NOT NULL,
  `budget` varchar(15) CHARACTER SET utf8 NOT NULL,
  `revenue` varchar(17) CHARACTER SET utf8 NOT NULL,
  `home_page` varchar(63) CHARACTER SET utf8 NOT NULL,
  `genres` varchar(40) CHARACTER SET utf8 NOT NULL,
  `trailer` varchar(131) CHARACTER SET utf8 NOT NULL,
  `nkar0` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar1` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar2` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar3` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar4` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar5` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar6` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar7` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar8` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar9` varchar(73) CHARACTER SET utf8 NOT NULL,
  `nkar10` varchar(74) CHARACTER SET utf8 NOT NULL,
  `nkar11` varchar(74) CHARACTER SET utf8 NOT NULL,
  `lang` varchar(7) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kinoner`
--

INSERT INTO `kinoner` (`id`, `name`, `desc`, `desc1`, `desc2`, `desc3`, `desc4`, `glavnin0`, `glavnin1`, `glavnin2`, `glavnin3`, `glavnin4`, `glavni0`, `glavni1`, `glavni2`, `glavni3`, `glavni4`, `home_img`, `status`, `relase`, `time`, `budget`, `revenue`, `home_page`, `genres`, `trailer`, `nkar0`, `nkar1`, `nkar2`, `nkar3`, `nkar4`, `nkar5`, `nkar6`, `nkar7`, `nkar8`, `nkar9`, `nkar10`, `nkar11`, `lang`) VALUES
(0, 'Avengers: Infinity War', 'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.', 'Director:Joe Russo', 'Director:Anthony Russo', 'Screenplay:Stephen McFeely', 'Screenplay:Christopher Markus', 'nkarner/Robert.jpg', 'nkarner/Chris.jpg', 'nkarner/Mark.jpg', 'nkarner/Chris.jpg', 'nkarner/Scarlett.jpg', 'Robert Downey Jr. Tony Stark / Iron Man', 'Chris Hemsworth Thor', 'Mark Ruffalo Bruce Banner / Hulk', 'Chris Evans Steve Rogers / Captain America', 'Scarlett Johansson Natasha Romanoff / Black Widow', 'nkarner/Avengers: Infinity War.jpg', 'Released', 'April 23, 2018', '2h 29m', '$300,000,000.00', '$1,607,279,083.00', 'http://marvel.com/movies/movie/223/avengers_infinity_war_part_1', 'Adventure,Science Fiction,Fantasy,Action', '//www.youtube.com/embed/6ZfuNTqbHE8?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/AvengersInfinityWar0.jpg', 'nkarner/AvengersInfinityWar1.jpg', 'nkarner/AvengersInfinityWar2.jpg', 'nkarner/AvengersInfinityWar3.jpg', 'nkarner/AvengersInfinityWar4.jpg', 'nkarner/AvengersInfinityWar5.jpg', 'nkarner/AvengersInfinityWar6.jpg', 'nkarner/AvengersInfinityWar7.jpg', 'nkarner/AvengersInfinityWar8.jpg', 'nkarner/AvengersInfinityWar9.jpg', 'nkarner/AvengersInfinityWar10.jpg', 'nkarner/AvengersInfinityWar11.jpg', 'English'),
(1, 'Fifty Shades Freed', 'Believing they have left behind shadowy figures from their past, newlyweds Christian and Ana fully embrace an inextricable connection and shared life of luxury. But just as she steps into her role as Mrs. Grey and he relaxes into an unfamiliar stability, new threats could jeopardize their happy ending before it even begins.', 'Novel:E.L. James', 'Screenplay:Niall Leonard', 'Director:James Foley', ':', 'nkarner/Dakota.jpg', 'nkarner/Jamie.jpg', 'nkarner/Eric.jpg', 'nkarner/Arielle.jpg', 'nkarner/Brant.jpg', 'Dakota Johnson Anastasia Steele', 'Jamie Dornan Christian Grey', 'Eric Johnson Jack Hyde', 'Arielle Kebbel Gia Matteo', 'Brant Daugherty Luke Sawyer', 'nkarner/Fifty Shades Freed.jpg', 'Released', 'February 9, 2018 ', '1h 45m', '$55,000,000.00', '$136,906,000.00', 'http://www.fiftyshadesmovie.com', 'Drama,Romance', '//www.youtube.com/embed/nJCc5HRPxYA?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/FiftyShadesFreed0.jpg', 'nkarner/FiftyShadesFreed1.jpg', 'nkarner/FiftyShadesFreed2.jpg', 'nkarner/FiftyShadesFreed3.jpg', 'nkarner/FiftyShadesFreed4.jpg', 'nkarner/FiftyShadesFreed5.jpg', 'nkarner/FiftyShadesFreed6.jpg', 'nkarner/FiftyShadesFreed7.jpg', 'nkarner/FiftyShadesFreed8.jpg', 'nkarner/FiftyShadesFreed9.jpg', 'nkarner/FiftyShadesFreed10.jpg', 'nkarner/FiftyShadesFreed11.jpg', 'English'),
(2, 'Black Panther', 'King TChalla returns home from America to the reclusive, technologically advanced African nation of Wakanda to serve as his countrys new leader. However, TChalla soon finds that he is challenged for the throne by factions within his own country as well as without. Using powers reserved to Wakandan kings, TChalla assumes the Black Panther mantel to join with girlfriend Nakia, the queen-mother, his princess-kid sister, members of the Dora Milaje (the Wakandan special forces) and an American secret agent, to prevent Wakanda from being dragged into a world war.', 'Director, Screenplay:Ryan Coogler', 'Screenplay:Joe Robert Cole', ':', ':', 'nkarner/Chadwick.jpg', 'nkarner/Michael.jpg', 'nkarner/Lupita.jpg', 'nkarner/Danai.jpg', 'nkarner/Martin.jpg', 'Chadwick Boseman TChalla / Black Panther', 'Michael B. Jordan N’Jadaka / Erik Killmonger', 'Lupita Nyongo Nakia', 'Danai Gurira Okoye', 'Martin Freeman Everett K. Ross', 'nkarner/Black Panther.jpg', 'Released', 'January 29, 2018', '2h 14m', '$200,000,000.00', '$1,341,379,495.00', 'https://marvel.com/movies/movie/224/black_panther', 'Action,Adventure,Fantasy,Science Fiction', '//www.youtube.com/embed/xjDjIWPwcPU?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/BlackPanther0.jpg', 'nkarner/BlackPanther1.jpg', 'nkarner/BlackPanther2.jpg', 'nkarner/BlackPanther3.jpg', 'nkarner/BlackPanther4.jpg', 'nkarner/BlackPanther5.jpg', 'nkarner/BlackPanther6.jpg', 'nkarner/BlackPanther7.jpg', 'nkarner/BlackPanther8.jpg', 'nkarner/BlackPanther9.jpg', 'nkarner/BlackPanther10.jpg', 'nkarner/BlackPanther11.jpg', 'English'),
(3, 'Zootopia', 'Determined to prove herself, Officer Judy Hopps, the first bunny on Zootopias police force, jumps at the chance to crack her first case - even if it means partnering with scam-artist fox Nick Wilde to solve the mystery.', 'Screenplay, Story:Phil Johnston', 'Director, Story:Rich Moore', 'Director, Story:Byron Howard', 'Screenplay, Story:Jared Bush', 'nkarner/Jason.jpg', 'nkarner/ShakiraGazelle.jpg', 'nkarner/Idris.jpg', 'nkarner/Octavia.jpg', 'nkarner/J.K..jpg', 'Jason Bateman Nick Wilde (voice)', 'Shakira Gazelle (voice)', 'Idris Elba Chief Bogo (voice)', 'Octavia Spencer Mrs. Otterton (voice)', 'J.K. Simmons Mayor Leodore Lionheart (voice)', 'nkarner/Zootopia.jpg', 'Released', 'March  4, 2016', '1h 48m', '$150,000,000.00', '$1,023,784,195.00', 'http://movies.disney.com/zootopia', 'Animation,Adventure,Family,Comedy', '//www.youtube.com/embed/jWM0ct-OLsM?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/Zootopia0.jpg', 'nkarner/Zootopia1.jpg', 'nkarner/Zootopia2.jpg', 'nkarner/Zootopia3.jpg', 'nkarner/Zootopia4.jpg', 'nkarner/Zootopia5.jpg', 'nkarner/Zootopia6.jpg', 'nkarner/Zootopia7.jpg', 'nkarner/Zootopia8.jpg', 'nkarner/Zootopia9.jpg', 'nkarner/Zootopia10.jpg', 'nkarner/Zootopia11.jpg', 'English'),
(4, 'Thor: Ragnarok', 'Thor is imprisoned on the other side of the universe and finds himself in a race against time to get back to Asgard to stop Ragnarok, the prophecy of destruction to his homeworld and the end of Asgardian civilization, at the hands of an all-powerful new threat, the ruthless Hela.', 'Writer:Eric Pearson', 'Writer:Christopher Yost', 'Story:Stephany Folsom', 'Writer:Craig Kyle', 'nkarner/Chris.jpg', 'nkarner/Tom.jpg', 'nkarner/Cate.jpg', 'nkarner/Mark.jpg', 'nkarner/Tessa.jpg', 'Chris Hemsworth Thor Odinson', 'Tom Hiddleston Loki', 'Cate Blanchett Hela', 'Mark Ruffalo Bruce Banner / The Hulk', 'Tessa Thompson Brunnhilde / Valkyrie', 'nkarner/Thor: Ragnarok.jpg', 'Released', 'October 10, 2017', '2h 10m', '$180,000,000.00', '$853,977,126.00', 'https://marvel.com/movies/movie/222/thor_ragnarok', 'Action,Adventure,Fantasy,Science Fiction', '//www.youtube.com/embed/ue80QwXMRHg?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/ThorRagnarok0.jpg', 'nkarner/ThorRagnarok1.jpg', 'nkarner/ThorRagnarok2.jpg', 'nkarner/ThorRagnarok3.jpg', 'nkarner/ThorRagnarok4.jpg', 'nkarner/ThorRagnarok5.jpg', 'nkarner/ThorRagnarok6.jpg', 'nkarner/ThorRagnarok7.jpg', 'nkarner/ThorRagnarok8.jpg', 'nkarner/ThorRagnarok9.jpg', 'nkarner/ThorRagnarok10.jpg', 'nkarner/ThorRagnarok11.jpg', 'English'),
(6, 'Rampage', 'Primatologist Davis Okoye shares an unshakable bond with George, the extraordinarily intelligent, silverback gorilla who has been in his care since birth.  But a rogue genetic experiment gone awry mutates this gentle ape into a raging creature of enormous size.  To make matters worse, it’s soon discovered there are other similarly altered animals.  As these newly created alpha predators tear across North America, destroying everything in their path, Okoye teams with a discredited genetic engineer to secure an antidote, fighting his way through an ever-changing battlefield, not only to halt a global catastrophe but to save the fearsome creature that was once his friend.', 'Screenplay:Ryan Engle', 'Screenplay:Ryan Condal', 'Screenplay:Carlton Cuse', 'Director:Brad Peyton', 'nkarner/Dwayne.jpg', 'nkarner/Naomie.jpg', 'nkarner/Malin.jpg', 'nkarner/Jeffrey.jpg', 'nkarner/Jake.jpg', 'Dwayne Johnson Davis Okoye', 'Naomie Harris Dr. Kate Caldwell', 'Malin Åkerman Claire Wyden', 'Jeffrey Dean Morgan Agent Russwell', 'Jake Lacy Brett Wyden', 'nkarner/Rampage.jpg', 'Released', 'April 13, 2018', '1h 47m', '$120,000,000.00', '$397,144,663.00', 'http://www.rampagethemovie.com', 'Action,Adventure,Science Fiction', '//www.youtube.com/embed/coOKvrsmQiI?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/Rampage0.jpg', 'nkarner/Rampage1.jpg', 'nkarner/Rampage2.jpg', 'nkarner/Rampage3.jpg', 'nkarner/Rampage4.jpg', 'nkarner/Rampage5.jpg', 'nkarner/Rampage6.jpg', 'nkarner/Rampage7.jpg', 'nkarner/Rampage8.jpg', 'nkarner/Rampage9.jpg', 'nkarner/Rampage10.jpg', 'nkarner/Rampage11.jpg', 'English'),
(7, 'Guardians of the Galaxy', 'Light years from Earth, 26 years after being abducted, Peter Quill finds himself the prime target of a manhunt after discovering an orb wanted by Ronan the Accuser.', 'Director, Screenplay:James Gunn', 'Characters:Andy Lanning', 'Screenplay:Nicole Perlman', 'Characters:Dan Abnett', 'nkarner/Chris.jpg', 'nkarner/Zoe.jpg', 'nkarner/Dave.jpg', 'nkarner/Vin.jpg', 'nkarner/Bradley.jpg', 'Chris Pratt Peter Quill / Star-Lord', 'Zoe Saldana Gamora', 'Dave Bautista Drax the Destroyer', 'Vin Diesel Groot (voice)', 'Bradley Cooper Rocket,Raccoon (voice)', 'nkarner/Guardians of the Galaxy.jpg', 'Released', 'August  1, 2014', '2h 1m', '$170,000,000.00', '$773,328,629.00', 'http://marvel.com/guardians', 'Action,Science Fiction,Adventure', '//www.youtube.com/embed/b7yOuhI1dzU?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/GuardiansoftheGalaxy0.jpg', 'nkarner/GuardiansoftheGalaxy1.jpg', 'nkarner/GuardiansoftheGalaxy2.jpg', 'nkarner/GuardiansoftheGalaxy3.jpg', 'nkarner/GuardiansoftheGalaxy4.jpg', 'nkarner/GuardiansoftheGalaxy5.jpg', 'nkarner/GuardiansoftheGalaxy6.jpg', 'nkarner/GuardiansoftheGalaxy7.jpg', 'nkarner/GuardiansoftheGalaxy8.jpg', 'nkarner/GuardiansoftheGalaxy9.jpg', 'nkarner/GuardiansoftheGalaxy10.jpg', 'nkarner/GuardiansoftheGalaxy11.jpg', 'English'),
(8, 'Game Night', 'Max and Annies weekly game night gets kicked up a notch when Maxs brother Brooks arranges a murder mystery party -- complete with fake thugs and federal agents. So when Brooks gets kidnapped, its all supposed to be part of the game. As the competitors set out to solve the case, they start to learn that neither the game nor Brooks are what they seem to be. The friends soon find themselves in over their heads as each twist leads to another unexpected turn over the course of one chaotic night.', 'Director:Jonathan M. Goldstein', 'Writer:Mark Perez', 'Director:John Francis Daley', ':', 'nkarner/Jason.jpg', 'nkarner/Rachel.jpg', 'nkarner/Billy.jpg', 'nkarner/Sharon.jpg', 'nkarner/Lamorne.jpg', 'Jason Bateman Max', 'Rachel McAdams Annie', 'Billy Magnussen Ryan', 'Sharon Horgan Sarah', 'Lamorne Morris Kevin', 'nkarner/Game Night.jpg', 'Released', 'February 23, 2018', '1h 40m', '$37,000,000.00', '$114,093,654.00', 'http://www.gamenight-movie.com/', 'Mystery,Comedy,Crime,Thriller', '//www.youtube.com/embed/qmxMAdV6s4U?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/GameNight0.jpg', 'nkarner/GameNight1.jpg', 'nkarner/GameNight2.jpg', 'nkarner/GameNight3.jpg', 'nkarner/GameNight4.jpg', 'nkarner/GameNight5.jpg', 'nkarner/GameNight6.jpg', 'nkarner/GameNight7.jpg', 'nkarner/GameNight8.jpg', 'nkarner/GameNight9.jpg', 'nkarner/GameNight10.jpg', 'nkarner/GameNight11.jpg', 'English'),
(9, 'Beauty and the Beast', 'A live-action adaptation of Disneys version of the classic tale of a cursed prince and a beautiful young woman who helps him break the spell.', 'Screenplay:Evan Spiliotopoulos', 'Screenplay:Stephen Chbosky', 'Director:Bill Condon', ':', 'nkarner/Emma.jpg', 'nkarner/Dan.jpg', 'nkarner/Luke.jpg', 'nkarner/Kevin.jpg', 'nkarner/Josh.jpg', 'Emma Watson Belle', 'Dan Stevens Beast', 'Luke Evans Gaston', 'Kevin Kline Maurice', 'Josh Gad LeFou', 'nkarner/Beauty and the Beast.jpg', 'Released', 'March  2, 2017 ', '2h 9m', '$160,000,000.00', '$1,263,521,126.00', 'http://movies.disney.com/beauty-and-the-beast-2017', 'Family,Fantasy,Romance', '//www.youtube.com/embed/OvW_L8sTu5E?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/BeautyandtheBeast0.jpg', 'nkarner/BeautyandtheBeast1.jpg', 'nkarner/BeautyandtheBeast2.jpg', 'nkarner/BeautyandtheBeast3.jpg', 'nkarner/BeautyandtheBeast4.jpg', 'nkarner/BeautyandtheBeast5.jpg', 'nkarner/BeautyandtheBeast6.jpg', 'nkarner/BeautyandtheBeast7.jpg', 'nkarner/BeautyandtheBeast8.jpg', 'nkarner/BeautyandtheBeast9.jpg', 'nkarner/BeautyandtheBeast10.jpg', 'nkarner/BeautyandtheBeast11.jpg', 'English'),
(10, 'The Avengers', 'When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!', 'Director, Screenplay, Story:Joss Whedon', 'Characters:Jack Kirby', 'Story:Zak Penn', ':', 'nkarner/Robert.jpg', 'nkarner/Chris.jpg', 'nkarner/Mark.jpg', 'nkarner/Chris.jpg', 'nkarner/Scarlett.jpg', 'Robert Downey Jr. Tony Stark / Iron Man', 'Chris Evans Steve Rogers / Captain America', 'Mark Ruffalo Bruce Banner / The Hulk', 'Chris Hemsworth Thor Odinson', 'Scarlett Johansson Natasha Romanoff / Black Widow', 'nkarner/The Avengers.jpg', 'Released', 'May  4, 2012', '2h 23m', '$220,000,000.00', '$1,519,557,910.00', 'http://marvel.com/avengers_movie/', 'Science Fiction,Action,Adventure', '//www.youtube.com/embed/hIR8Ar-Z4hw?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/TheAvengers0.jpg', 'nkarner/TheAvengers1.jpg', 'nkarner/TheAvengers2.jpg', 'nkarner/TheAvengers3.jpg', 'nkarner/TheAvengers4.jpg', 'nkarner/TheAvengers5.jpg', 'nkarner/TheAvengers6.jpg', 'nkarner/TheAvengers7.jpg', 'nkarner/TheAvengers8.jpg', 'nkarner/TheAvengers9.jpg', 'nkarner/TheAvengers10.jpg', 'nkarner/TheAvengers11.jpg', 'English'),
(11, 'Star Wars: The Last Jedi', 'Rey develops her newly discovered abilities with the guidance of Luke Skywalker, who is unsettled by the strength of her powers. Meanwhile, the Resistance prepares to do battle with the First Order.', 'Director, Screenplay:Rian Johnson', 'Characters:George Lucas', ':', ':', 'nkarner/Mark.jpg', 'nkarner/Carrie.jpg', 'nkarner/Adam.jpg', 'nkarner/Daisy.jpg', 'nkarner/John.jpg', 'Mark Hamill Luke Skywalker / Dobbu Scay (voice)', 'Carrie Fisher General Leia Organa', 'Adam Driver Kylo Ren', 'Daisy Ridley Rey', 'John Boyega Finn', 'nkarner/Star Wars: The Last Jedi.jpg', 'Released', 'December  9, 2017 ', '2h 32m', '$200,000,000.00', '$1,332,459,537.00', 'http://www.starwars.com', 'Fantasy,Adventure,Science Fiction', '//www.youtube.com/embed/Q0CbN8sfihY?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/StarWarsTheLastJedi0.jpg', 'nkarner/StarWarsTheLastJedi1.jpg', 'nkarner/StarWarsTheLastJedi2.jpg', 'nkarner/StarWarsTheLastJedi3.jpg', 'nkarner/StarWarsTheLastJedi4.jpg', 'nkarner/StarWarsTheLastJedi5.jpg', 'nkarner/StarWarsTheLastJedi6.jpg', 'nkarner/StarWarsTheLastJedi7.jpg', 'nkarner/StarWarsTheLastJedi8.jpg', 'nkarner/StarWarsTheLastJedi9.jpg', 'nkarner/StarWarsTheLastJedi10.jpg', 'nkarner/StarWarsTheLastJedi11.jpg', 'English'),
(12, 'Ready Player One', 'When the creator of a popular video game system dies, a virtual contest is created to compete for his fortune.', 'Novel, Screenplay:Ernest Cline', 'Screenplay:Zak Penn', 'Director:Steven Spielberg', ':', 'nkarner/Tye.jpg', 'nkarner/Olivia.jpg', 'nkarner/Lena.jpg', 'nkarner/Ben.jpg', 'nkarner/T.J..jpg', 'Tye Sheridan Wade Watts / Parzival', 'Olivia Cooke Samantha Cook / Art3mis', 'Lena Waithe Helen Harris / Aech', 'Ben Mendelsohn Nolan Sorrento', 'T.J. Miller i-R0k (voice)', 'nkarner/Ready Player One.jpg', 'Released', 'March 11, 2018', '2h 20m', '$175,000,000.00', '$524,048,218.00', 'http://readyplayeronemovie.com', 'Adventure,Science Fiction,Action', '//www.youtube.com/embed/cSp1dM2Vj48?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/ReadyPlayerOne0.jpg', 'nkarner/ReadyPlayerOne1.jpg', 'nkarner/ReadyPlayerOne2.jpg', 'nkarner/ReadyPlayerOne3.jpg', 'nkarner/ReadyPlayerOne4.jpg', 'nkarner/ReadyPlayerOne5.jpg', 'nkarner/ReadyPlayerOne6.jpg', 'nkarner/ReadyPlayerOne7.jpg', 'nkarner/ReadyPlayerOne8.jpg', 'nkarner/ReadyPlayerOne9.jpg', 'nkarner/ReadyPlayerOne10.jpg', 'nkarner/ReadyPlayerOne11.jpg', 'English'),
(13, 'Coco', 'Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an accomplished musician like his idol, Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead following a mysterious chain of events. Along the way, he meets charming trickster Hector, and together, they set off on an extraordinary journey to unlock the real story behind Miguels family history.', 'Screenplay, Story:Adrian Molina', 'Screenplay, Story:Matthew Aldrich', 'Director, Story:Lee Unkrich', 'Story:Jason Katz', 'nkarner/Anthony.jpg', 'nkarner/Gael.jpg', 'nkarner/Benjamin.jpg', 'nkarner/Alanna.jpg', 'nkarner/Renée.jpg', 'Anthony Gonzalez Miguel Rivera (voice)', 'Gael García Bernal Héctor (voice)', 'Benjamin Bratt Ernesto de la Cruz (voice)', 'Alanna Ubach Mamá Imelda Rivera (voice)', 'Renée Victor Elena Rivera (voice)', 'nkarner/Coco.jpg', 'Released', 'November 22, 2017', '1h 45m', '$175,000,000.00', '$800,526,015.00', 'https://www.pixar.com/feature-films/coco', 'Adventure,Comedy,Family,Animation', '//www.youtube.com/embed/xlnPHQ3TLX8?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/Coco0.jpg', 'nkarner/Coco1.jpg', 'nkarner/Coco2.jpg', 'nkarner/Coco3.jpg', 'nkarner/Coco4.jpg', 'nkarner/Coco5.jpg', 'nkarner/Coco6.jpg', 'nkarner/Coco7.jpg', 'nkarner/Coco8.jpg', 'nkarner/Coco9.jpg', 'nkarner/Coco10.jpg', 'nkarner/Coco11.jpg', 'English'),
(14, 'Sleight', 'A young street magician is left to take care of his little sister after his mothers passing and turns to drug dealing in the Los Angeles party scene to keep a roof over their heads. When he gets into trouble with his supplier, his sister is kidnapped and he is forced to rely on both his sleight of hand and brilliant mind to save her.', 'Director, Writer:J.D. Dillard', 'Writer:Alex Theurer', ':', ':', 'nkarner/Jacob.jpg', 'nkarner/Seychelle.jpg', 'nkarner/Sasheer.jpg', 'nkarner/Storm.jpg', 'nkarner/Cameron.jpg', 'Jacob Latimore Bo', 'Seychelle Gabriel Holly', 'Sasheer Zamata Georgi', 'Storm Reid Tina', 'Cameron Esposito Luna', 'nkarner/Sleight.jpg', 'Released', 'January 23, 2016', '1h 29m', '-', '-', '-', 'Drama,Thriller,Action,Science Fiction', '//www.youtube.com/embed/ORL1d7GWoBc?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/Sleight0.jpg', 'nkarner/Sleight1.jpg', 'nkarner/Sleight2.jpg', 'nkarner/Sleight3.jpg', 'nkarner/Sleight4.jpg', 'nkarner/Sleight5.jpg', 'nkarner/Sleight6.jpg', 'nkarner/Sleight7.jpg', 'nkarner/Sleight8.jpg', 'nkarner/Sleight9.jpg', 'nkarner/Sleight10.jpg', 'nkarner/Sleight11.jpg', 'English'),
(15, 'Avengers: Age of Ultron', 'When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earth’s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure.', 'Director, Writer:Joss Whedon', 'Characters:Jack Kirby', 'Characters:Stan Lee', ':', 'nkarner/Robert.jpg', 'nkarner/Chris.jpg', 'nkarner/Mark.jpg', 'nkarner/Chris.jpg', 'nkarner/Scarlett.jpg', 'Robert Downey Jr. Tony Stark / Iron Man', 'Chris Hemsworth Thor Odinson', 'Mark Ruffalo Bruce Banner / The Hulk', 'Chris Evans Steve Rogers / Captain America', 'Scarlett Johansson Natasha Romanoff / Black Widow', 'nkarner/Avengers: Age of Ultron.jpg', 'Released', 'May  1, 2015', '2h 21m', '$280,000,000.00', '$1,405,403,694.00', 'http://marvel.com/movies/movie/193/avengers_age_of_ultron', 'Action,Adventure,Science Fiction', '//www.youtube.com/embed/MZoO8QVMxkk?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/AvengersAgeofUltron0.jpg', 'nkarner/AvengersAgeofUltron1.jpg', 'nkarner/AvengersAgeofUltron2.jpg', 'nkarner/AvengersAgeofUltron3.jpg', 'nkarner/AvengersAgeofUltron4.jpg', 'nkarner/AvengersAgeofUltron5.jpg', 'nkarner/AvengersAgeofUltron6.jpg', 'nkarner/AvengersAgeofUltron7.jpg', 'nkarner/AvengersAgeofUltron8.jpg', 'nkarner/AvengersAgeofUltron9.jpg', 'nkarner/AvengersAgeofUltron10.jpg', 'nkarner/AvengersAgeofUltron11.jpg', 'English'),
(16, 'The Maze Runner', 'Set in a post-apocalyptic world, young Thomas is deposited in a community of boys after his memory is erased, soon learning theyre all trapped in a maze that will require him to join forces with fellow “runners” for a shot at escape.', 'Screenplay:T.S. Nowlin', 'Screenplay:Grant Pierce Myers', 'Novel:James Dashner', 'Screenplay:Noah Oppenheim', 'nkarner/Dylan.jpg', 'nkarner/Kaya.jpg', 'nkarner/Ki.jpg', 'nkarner/Aml.jpg', 'nkarner/Blake.jpg', 'Dylan OBrien Thomas', 'Kaya Scodelario Teresa Agnes', 'Ki Hong Lee Minho', 'Aml Ameen Alby', 'Blake Cooper Chuck', 'nkarner/The Maze Runner.jpg', 'Released', 'September 19, 2014', '1h 53m', '$34,000,000.00', '$348,300,000.00', 'http://themazerunnermovie.com/', 'Action,Mystery,Science Fiction,Thriller', '//www.youtube.com/embed/64-iSYVmMVY?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/TheMazeRunner0.jpg', 'nkarner/TheMazeRunner1.jpg', 'nkarner/TheMazeRunner2.jpg', 'nkarner/TheMazeRunner3.jpg', 'nkarner/TheMazeRunner4.jpg', 'nkarner/TheMazeRunner5.jpg', 'nkarner/TheMazeRunner6.jpg', 'nkarner/TheMazeRunner7.jpg', 'nkarner/TheMazeRunner8.jpg', 'nkarner/TheMazeRunner9.jpg', 'nkarner/TheMazeRunner10.jpg', 'nkarner/TheMazeRunner11.jpg', 'English'),
(17, 'Thor', 'Against his father Odins will, The Mighty Thor - a powerful but arrogant warrior god - recklessly reignites an ancient war. Thor is cast down to Earth and forced to live among humans as punishment. Once here, Thor learns what it takes to be a true hero when the most dangerous villain of his world sends the darkest forces of Asgard to invade Earth.', 'Screenplay:Zack Stentz', 'Screenplay:Ashley Edward Miller', 'Story:J. Michael Straczynski', 'Screenplay:Don Payne', 'nkarner/Chris.jpg', 'nkarner/Natalie.jpg', 'nkarner/Tom.jpg', 'nkarner/Anthony.jpg', 'nkarner/Stellan.jpg', 'Chris Hemsworth Thor Odinson', 'Natalie Portman Jane Foster', 'Tom Hiddleston Loki', 'Anthony Hopkins Odin', 'Stellan Skarsgård Erik Selvig', 'nkarner/Thor.jpg', 'Released', 'May  6, 2011', '1h 55m', '$150,000,000.00', '$449,326,618.00', 'http://thor.marvel.com/', 'Adventure,Fantasy,Action', '//www.youtube.com/embed/uHBnrJowBZE?enablejsapi=1&autoplay=0&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en-US&modestbranding=1&fs=1', 'nkarner/Thor0.jpg', 'nkarner/Thor1.jpg', 'nkarner/Thor2.jpg', 'nkarner/Thor3.jpg', 'nkarner/Thor4.jpg', 'nkarner/Thor5.jpg', 'nkarner/Thor6.jpg', 'nkarner/Thor7.jpg', 'nkarner/Thor8.jpg', 'nkarner/Thor9.jpg', 'nkarner/Thor10.jpg', 'nkarner/Thor11.jpg', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` text COLLATE utf8_unicode_ci NOT NULL,
  `lname` text COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `mouth` text COLLATE utf8_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `films` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `year`, `mouth`, `day`, `films`, `img`, `gender`, `email`, `phone`, `about`, `pass`) VALUES
(1, 'Sargis', 'Mkrtchyan', 2000, 'Январь', 19, '', 'nkarner/sargis.mkrtchyan1.m@gmail.com.jpg', 'male', 'sargis.mkrtchyan1.m@gmail.com', '37498941429', 'es cnvel em ...... ...... ...', 'a'),
(2, 'root', 'root', 2018, 'Январь', 1, '', 'nkarner/root.png', 'male', 'root', '1212121212', 'ROOOOOOOOOOOOOOOOOOOT', 'root'),
(7, 'Sargis', 'Mkrtchyan', 2000, 'Январь', 19, '', 'nkarner/sargis.mkrtchyan1.m@gmail.com.jpg', 'male', 'sargis.mkrtchyan1.m@gmail.com', '37498941429', 'es cnvel em ...... ...... ...', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kinoner`
--
ALTER TABLE `kinoner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kinoner`
--
ALTER TABLE `kinoner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;