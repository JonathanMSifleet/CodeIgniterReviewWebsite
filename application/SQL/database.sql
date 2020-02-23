-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 07:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `activereviews`
--

CREATE TABLE `activereviews` (
  `ID` int(11) NOT NULL,
  `GameName` varchar(250) NOT NULL,
  `GameTagline` varchar(2048) NOT NULL,
  `GameBlurb` longtext NOT NULL,
  `GameReview` longtext NOT NULL,
  `GameComments` tinyint(1) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `ReviewImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `activereviews`
--

INSERT INTO `activereviews` (`ID`, `GameName`, `GameTagline`, `GameBlurb`, `GameReview`, `GameComments`, `slug`, `ReviewImage`) VALUES
(1, 'Borderlands 3', 'Mayhem is coming.', 'Borderlands 3 is an action role-playing first-person shooter video game developed by Gearbox Software and published by 2K Games. It is the sequel to 2012\'s Borderlands 2, and the fourth main entry in the Borderlands series. Borderlands 3 was released on 13 September 2019 for Microsoft Windows, PlayStation 4, Xbox One and on 30 October 2019 for Apple macOS. A Stadia port was released on 17 December 2019.\r\n<br><br>\r\nPlayers complete quests and side missions, in single-player or multiplayer, as one of four classes. When killed, enemies may drop weapons and gear which can be equipped. New abilities are unlocked as the player gains experience. Unlike previous games, the levels of Borderlands 3 take place on multiple planets. The plot is centered around stopping the cult-leading twins, Troy and Tyreen Calypso, from harnessing the power of the alien Vaults spread across the galaxy.\r\n<br><br>\r\n<a href = “https://en.wikipedia.org/wiki/Borderlands_3”><i>Taken from Wikipedia</i></a>\r\n', 'Borderlands 3 is The Family Circus by way of Spencer\'s Gifts, a game with long, earnest quests about how darn good coffee is punctuated by gore and gun violence. Borderlands 3 walks by dog poop, points at it, and laughs, and then sets it on fire. Borderlands 3 stays up until 11:30 pm drinking soda and googling crass Flash animations, taking detailed notes.\r\n<br><br>\r\nIt\'s stuck in the late \'00s, when surface level vulgarity was enough to qualify as edgy—Borderlands 3 is seriously obsessed with turds—and when the series was first conceived. It\'s stuck in a time when memes lasted months rather than days, when referential humor was still a novelty and not exhausting, when you could point at something the slightest bit abnormal or gross and call it a joke. Simpler times, not necessarily better times.\r\n<br><br>\r\nOur distance from the era Borderlands 3 evokes makes it feel like a retro shooter rather than alive and present in modern humor and pop culture. It\'s simultaneously repulsive and compulsive, an FPS RPG that excels when its weapon generation system spits out guns that feels great to shoot, adorned with broken attributes capable of turning hordes of goons, bugs, and soldiers into clouds of red mist, elemental particles, explosions, and big damage numbers. \r\n<br><br>\r\nThen it tells one of its many long, bad jokes and the cloud dissipates. I have horrific whiplash. \r\n<br><br>\r\nWith Borderlands 3, a few things have changed, but to little effect. It\'s still a Diablo-like masquerading as a shooter, now with new traversal moves, gorgeous gun models, and improved weapon feedback. But Gearbox has done little to build on the Borderlands formula, while chucking the pitch perfect writing of Tales from the Borderlands in the bin. It\'s the best and the worst of the series at once.\r\n<br><br>\r\nSkagological\r\n<br><br>\r\nTales from the Borderlands proved that the Borderlands universe could balance goofy slapstick comedy with great character work, gracefully swaying between fourth-wall breaking gags about videogame clichés and heartfelt drama. It irreversibly changed what I expect from the series. \r\n<br><br>\r\nBut Borderlands 3 opts for a best-of approach, something like a sitcom clip show. The new space travel setup takes the player on a tour of the galaxy in search of yet more vaults, each stop an excuse to roll out an old character only for them to disappear or fade into the background as soon as they say hello, shoot some folks, and crack a few one-liners in sidequests that do little to reveal anything about them or test them in any way. \r\n<br><br>\r\nMost don\'t change or press on the main narrative in vital ways, functioning as conduits for strained laughs or the rare serious moment, but rarely both. Some even disappear for good, with little ceremony or reflection. It\'s as if I\'m meant to come to Borderlands 3 with a preexisting deep affection for them all, and just seeing them should be enough to win my heart.\r\n<br><br>\r\nThe new big bads, the Calypso Twins, are murderous livestreamers whose motives and histories only become clear in the final act. Until then, they\'re just two cartoon villains who take up beef with the vault hunter, gunning to open the same vaults and collect the power within. There\'s not much more to them besides long, obnoxious monologues about how much I suck. Even as a parody of livestreamers, they offer no cultural commentary. They\'re just shitty, power hungry people who will do anything to rule the universe. \r\n<br><br>\r\nBorderlands 3 reads like teenage lunch table improv circa Austin Powers 2: The Spy Who Shagged Me.\r\n<br><br>\r\nGlimmers of heart are buried deep. I dug the cute relationship between Sir Hammerlock, a charming interplanetary big game hunter, and his new boyfriend on Eden-6, and the fiery spirit of a young, new adventurer studying under Maya, but there are few genuine jokes, dramatic beats, or interesting character moments in Borderlands 3. \r\n<br><br>\r\nA few quests: I collect brown rock specimens (poop) for a guy obsessed with brown rock specimens (poop), Claptrap needs help building a \'friend\' who is clearly a feminine robot for his creepy private purposes, I plant dynamite in a massive poop dam to save a farm, I help a guy open a burger joint while he yells about burgers a lot, I help a guy escape from a porta-potty for a poop-spewing rocket launcher—it\'s borderline unbearable.\r\n<br><br>\r\nThere\'s a quest-giver who does their best Tommy Wiseau impression and talks about making movies, which is the whole 20-minute long punchline—the joke is simply knowing who he is. Another makes fun of exploitative microtransactions and buggy early access games with a boring quest that forced me to either spend in-game cash for an easy skip or perform tedious tasks. It goes on for so long that I gladly would\'ve paid real money to skip it. Like many Borderlands bits, it\'s a joke that could\'ve been a two-minute gag extended to 10 times that.\r\n<br><br>\r\nMy favorite quests were the least chatty and most shooty, a rarity, as the bulk of Borderlands 3 reads like teenage lunch table improv circa Austin Powers 2: The Spy Who Shagged Me. \r\n<br><br>\r\nWorse, there\'s no way to skip through the dialogue. Quests lurch into motion like an old car: listen to an NPC talk for 30 seconds, press a button as if twisting the ignition, more talking, more heaving of the engine, pick up an object, more talking, spit, putter, and now the objective location is revealed. And we\'re off. \r\n<br><br>\r\nWorst, I ran into a handful of scripting bugs where bits of dialogue repeated endlessly and quests became impossible to complete without restarting the game. Seeing markers for multiple quests at the same time isn\'t possible either. The inventory system is largely unchanged. Borderlands 3 is a bundle of aged design and frustrating inefficiencies. \r\n<br><br>\r\nBorderlands ran like a dream at 2560x1440 on my souped up PC, maintaining 90-plus fps with a few dips when loading in new areas and during particularly chaotic combat scenarios. For the complete picture, here\'s our Borderlands 3 performance review. \r\n<br><br>\r\nThe new locations are a welcome change of scenery from the muted deserts of Pandora, though it\'s still home to the most zones and where I spent the most time throughout the campaign. Eden-6 is your typical swampy jungle, where fire-breathing dinos and club-wielding, shit-tossing jabbers chased me around swamps and through the treetops. Promethea is a slick corporate dystopia composed of uniformly branded architecture and neon lighting. \r\n<br><br>\r\nA few surprise locations mix things up further, though most environments are still a few open areas with branching corridors. Borderlands\' signature comic book style hasn\'t changed much, but it looks significantly sharper in 2019, with characters and sweeping vistas that communicate scale and personality clearer than ever. \r\n<br><br>\r\nEach location has its own enemy types, but in practice there\'s not much difference between fighting a swarm of COV soldiers spawning in from all directions or a swarm of bandits spawning in from all directions. Borderlands 3 usually tests players with a mess of enemies in open, multi-tiered arenas, more of a war of attrition than a tactical puzzle.\r\n<br><br>\r\nBesides a few tough bosses, the true challenge came from deciding whether to shelve a badass electro-pistol that basically functioned as a super shotgun or a fiery SMG that shot bullets in a heart-shaped pattern for a plain weapon with an elemental damage affinity better suited to a region\'s enemy type. \r\n<br><br>\r\nCorrosive dissolves armor, electric damage melts shields, and fire burns flesh. Radiation damage makes enemies explode, which is always fun. I just tired of repeatedly killing my darlings (fun guns) for lesser darlings (boring guns which are technically better for the situation). Trying new weapons is part of Borderlands\' appeal, but there can be huge droughts between the truly good ones until the endgame.\r\n<br><br>\r\nWild gear is the reason to play Borderlands 3, and the guns, as expected, are its fervently beating heart.\r\n<br><br>\r\nI\'m partial to the Tediore SMGs. Rather than reload them, you toss \'em out and a new one materializes in your hands. I had one that would sprout legs and fire a few rockets before exploding after being tossed. My favorite shotgun chains electric damage to all nearby enemies, deleting the room\'s shields and dissolving handfuls of weaker enemies at once. Jakobs sniper rifles are ornate, gilded works of art, less playful but extremely lethal. I found a legendary that, if I land a headshot, will ricochet and pop another guy\'s head in the room.\r\n<br><br>\r\nThe view-models are gorgeous too, ranging from chunky, volatile machinery to egg-shaped flawless future tech. Guns whir and spin up and little pieces kick around as they fire, some smoke, some sigh, and some whine like a VCR mid-rewind. I\'ve yet to tire of watching loot rain down from defeated enemies, the signal light for something I haven\'t seen before. Wild gear is the reason to play Borderlands 3, and the guns, as expected, are its fervently beating heart. \r\n<br><br>\r\nAs expected, it\'s better with friends, though the extra enemies and explosions run counter to the shooting refinements. With so much visual noise against a mess of flat colors and thick lines, I often can\'t see what I\'m pointing at, making well-aimed critical shots an act of faith rather than intent and skill. \r\n<br><br>\r\nEnemies react better to getting shot and now we can crouch-slide and ground pound and the guns look and feel much more like actual machines instead of cardboard DPS dispensers—and yet, combat still devolves into the same rhythms as the previous games. Enemies are too dumb and erratic and spongy to force tactical play. The most reliable plan: jump around, throw all the grenades, lay down on the fire button, use my Action Skill the second it recharges, and take cover only when necessary. It\'s good lizard-brain fun. \r\n<br><br>\r\nBorderlands 3\'s new vault hunters don\'t break much new ground either. While they each have three diverse skill trees and accompanying Action Skills perfect for squads looking to complement one another, there\'s nothing in the combat that requires close cooperation between classes as of yet, despite the inclusion of some context-sensitive ping tools. Calling out targets and pointing out loot locations is easy. \r\n<br><br>\r\nMoze summons a mech for some ridiculous damage-dealing, Amara is a siren with ghostly arms great for crowd control and AOE attacks, while Zane can summon a drone, shield, or decoy for more technical play. I spent the most time as FL4K, a robot with a pet companion, a great option for solo players. \r\n<br><br>\r\nMy build turns the Skag into a  nightmare. Wherever he spawns, a radioactive explosion. Wherever he walks, enemies trail as he tanks them in a cloud of poison. Goons explode like bloody pustules in his wake, limbs whirling around a singularity while I—wearing a horse head and an American flag skin—fire rockets and toss grenades into the mess. This is what I love about Borderlands. I found it, beneath the thick sediment of poop jokes.\r\n<br><br>\r\nBorderlands 3\'s skill trees produce Jackson Pollock vault hunters, spatterings of light and sound, where disorder is the point.\r\n<br><br>\r\nI do this for around 30 hours, and while the novelty wanes the inherently repetitive action is propped by an endless font of cool guns, grenades, class mods, artifacts, and shields, each with their own ridiculous attributes. If Destiny 2\'s guardians are architectural blueprints with structure and purpose, Borderlands 3\'s skill trees produce Jackson Pollock vault hunters, spatterings of light and sound, where disorder is the point. \r\n<br><br>\r\nOnce I finished the campaign, swept up the majority of side quests, and hit the level cap—something like 30 hours of play—when the NPCs quit talking and the focus returned to ruining hordes of enemies and finding more efficient weapons to do it with, I settled into a comfortable routine and remembered why I have hundreds of hours logged in Borderlands 2. \r\n<br><br>\r\nThe clouds of red mist and particle effects returned, the numbers grew, and so too did my heart. The endgame had arrived. \r\n<br><br>\r\nSadly, the endgame is pretty shallow at launch. It\'s all about accumulating better loot, but I\'m a bit backed into a corner. Mayhem mode modifies enemy difficulty for better rewards with three levels to work through. Think of Diablo 3\'s difficulty levels: juice the challenge to earn better loot until it\'s no longer difficult, juice it yet again for better loot. I\'d say ad infinitum, but there are only three Mayhem levels at launch. \r\n<br><br>\r\nThe alternative is True Vault Hunter Mode, which kicks off a new campaign with all your loot and abilities in tow. Good in theory, I just never want to play the campaign again. A few repeatable timed gauntlets and waved-based horde modes are my only alternative, so I\'ll just wait for the DLC and hope the writing is better.\r\n<br><br>\r\nBetween the bugs, the extended non-jokes, the self-aggrandizing jabs at game design trends, and a few cameos I won\'t spoil but that made me audibly groan, Borderlands 3 has a lot in common with Gearbox fan events as of late. There\'s a lot of loud, extended posturing while holding what everyone really came for hostage. It\'s a shame, because Tales from the Borderlands found a delicate balance of absurdity, self-awareness, and genuine heart. A better Borderlands is possible, it\'s just not Borderlands 3.\r\n<br><br>\r\n<a href=\"https://www.pcgamer.com/uk/borderlands-3-review\"><i>Taken from PCGamer.com</i></a>\r\n', 1, 'borderlands-3', 'borderlands-3.jpg'),
(2, 'Days Gone', ' In Days Gone, you don\'t have to go seeking out trouble, the world comes for you.', 'Days Gone is a 2019 action-adventure survival horror video game developed by SIE Bend Studio and published by Sony Interactive Entertainment for the PlayStation 4. <br><br> Set in a post-apocalyptic Oregon two years after the start of a global pandemic, former outlaw-turned-drifter Deacon St. John discovers the possibility of his wife Sarah still being alive, which leads Deacon on a quest to find her. Days Gone is played from a third-person perspective, in which the player can explore an open world environment. Players can use firearms, melee weapons and improvised weapons, and can use stealth to defend against hostile humans and cannibalistic creatures known as Freakers. A major game mechanic is Deacon\'s motorcycle, which is used as the player character\'s primary mode of transportation as well as mobile inventory.\r\n<br><br><a href = “https://en.wikipedia.org/wiki/Days_Gone”><i>Taken from Wikipedia</i></a>', '', 0, 'days-gone', 'days-gone.jpg'),
(3, 'Witcher 3', 'The world doesn\'t need a hero, it needs a professional.', 'The Witcher 3: Wild Hunt is a 2015 action role-playing game developed and published by CD Projekt and based on The Witcher series of fantasy novels by Andrzej Sapkowski. It is the sequel to the 2011 game The Witcher 2: Assassins of Kings, played in an open world with a third-person perspective. Players control protagonist Geralt of Rivia, a monster hunter (known as a witcher) who is looking for his missing adopted daughter on the run from the Wild Hunt, an otherworldly force determined to capture her and use her powers. Players battle the game\'s many dangers with weapons and magic, interact with non-player characters, and complete main-story and side quests to acquire experience points and gold, which are used to increase Geralt\'s abilities and purchase equipment. Its central story has several endings, determined by the player\'s choices at certain points in the game.<br><br><a href = “https://en.wikipedia.org/wiki/The_Witcher_3:_Wild_Hunt”><i>Taken from Wikipedia</i></a>', '', 0, 'witcher-3', 'witcher-3.jpg'),
(4, 'Mass Effect 3', 'Take Earth Back: Break the Cycle', 'Mass Effect 3 is an action role-playing video game developed by BioWare and published by Electronic Arts. The final installment of the Mass Effect trilogy, it was first released in March 2012 for Microsoft Windows, Xbox 360, and PlayStation 3. A Wii U version of the game, entitled Mass Effect 3: Special Edition, was later released in November 2012. Mass Effect 3 is set within the Milky Way Galaxy in 2186, where civilization is invaded by a highly advanced machine race of synthetic-organic starships known as Reapers. It concludes the story of Commander Shepard, an elite human soldier who is tasked with forging alliances between species for the war.<br><br><a href = “https://en.wikipedia.org/wiki/Mass_Effect_3”><i>Taken from Wikipedia</i></a>', '', 1, 'mass-effect-3', 'mass-effect-3.jpg'),
(5, 'Burnout 3', 'Battle Racing Ignited', 'Burnout 3: Takedown is a racing video game developed by Criterion Games and published by Electronic Arts. It is the third instalment in the Burnout series, which is characterised by fast-paced arcade racing. A staple of the series is the use of boost, earned through risky driving, to rapidly increase a car\'s speed. The central mechanic introduced in Burnout 3 is Takedowns, which allow players to slam their opponents until they crash. Takedowns work in conjunction with the boost system by filling up and extending the boost meter. Aside from standard circuit races, the game features modes focused on performing Takedowns on rival vehicles and causing monetary damage at a junction occupied with traffic. Each game variant is featured in a single-player campaign mode called World Tour, which serves as the primary method for unlocking new and faster cars. The game supports both online and split-screen multiplayer.<br><br><a href = “https://en.wikipedia.org/wiki/Burnout_3:_Takedown”><i>Taken from Wikipedia</i></a>', '', 1, 'burnout-3', 'burnout-3.jpg'),
(6, 'Star Wars: Knights of the Old Republic', 'Choose your path', 'Star Wars: Knights of the Old Republic is a role-playing video game set in the Star Wars universe. Developed by BioWare and published by LucasArts, the game was released for the Xbox on July 19, 2003, and for Microsoft Windows on November 19, 2003. The game was later ported to Mac OS X, iOS, and Android by Aspyr, and it is playable on the Xbox 360 and Xbox One via their respective backward compatibility features. <br><br> The story of Knights of the Old Republic takes place almost 4,000 years before the formation of the Galactic Empire, where Darth Malak, a Dark Lord of the Sith, has unleashed a Sith armada against the Republic. The player character, as a Jedi, must venture to different planets in the galaxy to defeat Malak. Players choose from three character classes (Scout, Soldier or Scoundrel) and customize their characters at the beginning of the game, and engage in round-based combat against enemies. Through interacting with other characters and making plot decisions, players can earn Light Side and Dark Side Points, and the alignment system will determine whether the player\'s character aligns with the light or dark side of the Force. <br><br><a href = “https://en.wikipedia.org/wiki/Star_Wars:_Knights_of_the_Old_Republic”><i>Taken from Wikipedia</i></a>', '', 0, 'sw-kotor', 'sw-kotor.jpg'),
(7, 'XCOM 2: War of the Chosen', 'Join Us Or Become Them', 'XCOM 2 is a turn-based tactics video game that was developed by Firaxis Games and published in February 2016 by 2K Games. The game is the sequel to 2012\'s reboot of the series XCOM: Enemy Unknown; it takes place 20 years after the events of Enemy Unknown. XCOM, a military organization trying to fight off an alien invasion, has lost the war and is now a resistance force against the occupation of Earth and the established totalitarian regime and military dictatorship. Gameplay is split between turn-based combat in which players command a squad of soldiers to fight enemies and strategy elements. Players manage and control the operations of the Avenger, a derelict alien ship that is a mobile base for XCOM, commanding the engineering and research department of the base between missions. <br><br><a href = “https://en.wikipedia.org/wiki/XCOM_2”><i>Taken from Wikipedia</i></a>', '', 0, 'xcom-2', 'xcom-2.jpg'),
(8, 'Halo Reach', 'From the beginning, you know the end', 'Halo: Reach is a 2010 first-person shooter developed by Bungie and published by Microsoft Game Studios, originally for the Xbox 360. The fifth installment in the Halo series and a direct prequel to Halo: Combat Evolved, Reach was released worldwide in September 2010. The game takes place in the year 2552, where humanity is locked in a war with the alien Covenant. Players control Noble Six, a member of an elite supersoldier squad, when the human world known as Reach falls under Covenant attack. <br><br> After releasing Halo 3 in 2007, Bungie split into teams to develop two different games—what would become Halo 3: ODST and Reach. The developers decided to create a prequel to the original Halo game trilogy, freeing themselves from the obligation of addressing old story threads. As the game would take place on a human world doomed to be destroyed, they focused on making the environment a character unto itself. Longtime Halo composers Martin O\'Donnell and Michael Salvatori returned to compose Reach\'s music, aiming for a more somber sound to match the story. <br><br><a href = “https://en.wikipedia.org/wiki/Halo:_Reach”><i>Taken from Wikipedia</i></a>', '', 1, 'halo-reach', 'halo-reach.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gamescomments`
--

CREATE TABLE `gamescomments` (
  `UID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `UserComment` longtext NOT NULL,
  `TimeStamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `gamescomments`
--

INSERT INTO `gamescomments` (`UID`, `UserID`, `ReviewID`, `UserComment`, `TimeStamp`) VALUES
(14, 1, 1, 'Well hello there', '2020-02-23 16:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `UserPassword` varchar(250) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `UserPassword`, `admin`) VALUES
(1, 'Jonathan', '$2y$10$iUvQPY8prbeM5NN0WHyarOzAU/F89n.ZxR/tic2B4lsvDvHEfkqsG', 1),
(2, 'Lecturer', '$2y$10$340y0LRMOvnZdo6yFm7ux.lyFQ6QwSXKkbMRRYJ9unLbqBbGr05zq', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activereviews`
--
ALTER TABLE `activereviews`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `gamescomments`
--
ALTER TABLE `gamescomments`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activereviews`
--
ALTER TABLE `activereviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gamescomments`
--
ALTER TABLE `gamescomments`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
