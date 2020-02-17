-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 07:10 PM
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
  `GameComments_YN` varchar(1) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `ReviewImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `activereviews`
--

INSERT INTO `activereviews` (`ID`, `GameName`, `GameTagline`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(1, 'Borderlands 3', 'Borderlands 3 is the fourth main and fifth overall entry in Gearbox Software\'s Borderlands game series.', 'Borderlands 3 is an action role-playing first-person shooter video game developed by Gearbox Software and published by 2K Games. It is the sequel to 2012\'s Borderlands 2, and the fourth main entry in the Borderlands series. Borderlands 3 was released on 13 September 2019 for Microsoft Windows, PlayStation 4, Xbox One and on 30 October 2019 for Apple macOS. A Stadia port was released on 17 December 2019.\r\n<br><br>\r\nPlayers complete quests and side missions, in single-player or multiplayer, as one of four classes. When killed, enemies may drop weapons and gear which can be equipped. New abilities are unlocked as the player gains experience. Unlike previous games, the levels of Borderlands 3 take place on multiple planets. The plot is centered around stopping the cult-leading twins, Troy and Tyreen Calypso, from harnessing the power of the alien Vaults spread across the galaxy.\r\n<br><br>\r\n<a href = “https://en.wikipedia.org/wiki/Borderlands_3”><i>Taken from Wikipedia</i></a>\r\n', 'Borderlands 3 is The Family Circus by way of Spencer\'s Gifts, a game with long, earnest quests about how darn good coffee is punctuated by gore and gun violence. Borderlands 3 walks by dog poop, points at it, and laughs, and then sets it on fire. Borderlands 3 stays up until 11:30 pm drinking soda and googling crass Flash animations, taking detailed notes.\r\n<br><br>\r\nIt\'s stuck in the late \'00s, when surface level vulgarity was enough to qualify as edgy—Borderlands 3 is seriously obsessed with turds—and when the series was first conceived. It\'s stuck in a time when memes lasted months rather than days, when referential humor was still a novelty and not exhausting, when you could point at something the slightest bit abnormal or gross and call it a joke. Simpler times, not necessarily better times.\r\n<br><br>\r\nOur distance from the era Borderlands 3 evokes makes it feel like a retro shooter rather than alive and present in modern humor and pop culture. It\'s simultaneously repulsive and compulsive, an FPS RPG that excels when its weapon generation system spits out guns that feels great to shoot, adorned with broken attributes capable of turning hordes of goons, bugs, and soldiers into clouds of red mist, elemental particles, explosions, and big damage numbers. \r\n<br><br>\r\nThen it tells one of its many long, bad jokes and the cloud dissipates. I have horrific whiplash. \r\n<br><br>\r\nWith Borderlands 3, a few things have changed, but to little effect. It\'s still a Diablo-like masquerading as a shooter, now with new traversal moves, gorgeous gun models, and improved weapon feedback. But Gearbox has done little to build on the Borderlands formula, while chucking the pitch perfect writing of Tales from the Borderlands in the bin. It\'s the best and the worst of the series at once.\r\n<br><br>\r\nSkagological\r\n<br><br>\r\nTales from the Borderlands proved that the Borderlands universe could balance goofy slapstick comedy with great character work, gracefully swaying between fourth-wall breaking gags about videogame clichés and heartfelt drama. It irreversibly changed what I expect from the series. \r\n<br><br>\r\nBut Borderlands 3 opts for a best-of approach, something like a sitcom clip show. The new space travel setup takes the player on a tour of the galaxy in search of yet more vaults, each stop an excuse to roll out an old character only for them to disappear or fade into the background as soon as they say hello, shoot some folks, and crack a few one-liners in sidequests that do little to reveal anything about them or test them in any way. \r\n<br><br>\r\nMost don\'t change or press on the main narrative in vital ways, functioning as conduits for strained laughs or the rare serious moment, but rarely both. Some even disappear for good, with little ceremony or reflection. It\'s as if I\'m meant to come to Borderlands 3 with a preexisting deep affection for them all, and just seeing them should be enough to win my heart.\r\n<br><br>\r\nThe new big bads, the Calypso Twins, are murderous livestreamers whose motives and histories only become clear in the final act. Until then, they\'re just two cartoon villains who take up beef with the vault hunter, gunning to open the same vaults and collect the power within. There\'s not much more to them besides long, obnoxious monologues about how much I suck. Even as a parody of livestreamers, they offer no cultural commentary. They\'re just shitty, power hungry people who will do anything to rule the universe. \r\n<br><br>\r\nBorderlands 3 reads like teenage lunch table improv circa Austin Powers 2: The Spy Who Shagged Me.\r\n<br><br>\r\nGlimmers of heart are buried deep. I dug the cute relationship between Sir Hammerlock, a charming interplanetary big game hunter, and his new boyfriend on Eden-6, and the fiery spirit of a young, new adventurer studying under Maya, but there are few genuine jokes, dramatic beats, or interesting character moments in Borderlands 3. \r\n<br><br>\r\nA few quests: I collect brown rock specimens (poop) for a guy obsessed with brown rock specimens (poop), Claptrap needs help building a \'friend\' who is clearly a feminine robot for his creepy private purposes, I plant dynamite in a massive poop dam to save a farm, I help a guy open a burger joint while he yells about burgers a lot, I help a guy escape from a porta-potty for a poop-spewing rocket launcher—it\'s borderline unbearable.\r\n<br><br>\r\nThere\'s a quest-giver who does their best Tommy Wiseau impression and talks about making movies, which is the whole 20-minute long punchline—the joke is simply knowing who he is. Another makes fun of exploitative microtransactions and buggy early access games with a boring quest that forced me to either spend in-game cash for an easy skip or perform tedious tasks. It goes on for so long that I gladly would\'ve paid real money to skip it. Like many Borderlands bits, it\'s a joke that could\'ve been a two-minute gag extended to 10 times that.\r\n<br><br>\r\nMy favorite quests were the least chatty and most shooty, a rarity, as the bulk of Borderlands 3 reads like teenage lunch table improv circa Austin Powers 2: The Spy Who Shagged Me. \r\n<br><br>\r\nWorse, there\'s no way to skip through the dialogue. Quests lurch into motion like an old car: listen to an NPC talk for 30 seconds, press a button as if twisting the ignition, more talking, more heaving of the engine, pick up an object, more talking, spit, putter, and now the objective location is revealed. And we\'re off. \r\n<br><br>\r\nWorst, I ran into a handful of scripting bugs where bits of dialogue repeated endlessly and quests became impossible to complete without restarting the game. Seeing markers for multiple quests at the same time isn\'t possible either. The inventory system is largely unchanged. Borderlands 3 is a bundle of aged design and frustrating inefficiencies. \r\n<br><br>\r\nBorderlands ran like a dream at 2560x1440 on my souped up PC, maintaining 90-plus fps with a few dips when loading in new areas and during particularly chaotic combat scenarios. For the complete picture, here\'s our Borderlands 3 performance review. \r\n<br><br>\r\nThe new locations are a welcome change of scenery from the muted deserts of Pandora, though it\'s still home to the most zones and where I spent the most time throughout the campaign. Eden-6 is your typical swampy jungle, where fire-breathing dinos and club-wielding, shit-tossing jabbers chased me around swamps and through the treetops. Promethea is a slick corporate dystopia composed of uniformly branded architecture and neon lighting. \r\n<br><br>\r\nA few surprise locations mix things up further, though most environments are still a few open areas with branching corridors. Borderlands\' signature comic book style hasn\'t changed much, but it looks significantly sharper in 2019, with characters and sweeping vistas that communicate scale and personality clearer than ever. \r\n<br><br>\r\nEach location has its own enemy types, but in practice there\'s not much difference between fighting a swarm of COV soldiers spawning in from all directions or a swarm of bandits spawning in from all directions. Borderlands 3 usually tests players with a mess of enemies in open, multi-tiered arenas, more of a war of attrition than a tactical puzzle.\r\n<br><br>\r\nBesides a few tough bosses, the true challenge came from deciding whether to shelve a badass electro-pistol that basically functioned as a super shotgun or a fiery SMG that shot bullets in a heart-shaped pattern for a plain weapon with an elemental damage affinity better suited to a region\'s enemy type. \r\n<br><br>\r\nCorrosive dissolves armor, electric damage melts shields, and fire burns flesh. Radiation damage makes enemies explode, which is always fun. I just tired of repeatedly killing my darlings (fun guns) for lesser darlings (boring guns which are technically better for the situation). Trying new weapons is part of Borderlands\' appeal, but there can be huge droughts between the truly good ones until the endgame.\r\n<br><br>\r\nWild gear is the reason to play Borderlands 3, and the guns, as expected, are its fervently beating heart.\r\n<br><br>\r\nI\'m partial to the Tediore SMGs. Rather than reload them, you toss \'em out and a new one materializes in your hands. I had one that would sprout legs and fire a few rockets before exploding after being tossed. My favorite shotgun chains electric damage to all nearby enemies, deleting the room\'s shields and dissolving handfuls of weaker enemies at once. Jakobs sniper rifles are ornate, gilded works of art, less playful but extremely lethal. I found a legendary that, if I land a headshot, will ricochet and pop another guy\'s head in the room.\r\n<br><br>\r\nThe view-models are gorgeous too, ranging from chunky, volatile machinery to egg-shaped flawless future tech. Guns whir and spin up and little pieces kick around as they fire, some smoke, some sigh, and some whine like a VCR mid-rewind. I\'ve yet to tire of watching loot rain down from defeated enemies, the signal light for something I haven\'t seen before. Wild gear is the reason to play Borderlands 3, and the guns, as expected, are its fervently beating heart. \r\n<br><br>\r\nAs expected, it\'s better with friends, though the extra enemies and explosions run counter to the shooting refinements. With so much visual noise against a mess of flat colors and thick lines, I often can\'t see what I\'m pointing at, making well-aimed critical shots an act of faith rather than intent and skill. \r\n<br><br>\r\nEnemies react better to getting shot and now we can crouch-slide and ground pound and the guns look and feel much more like actual machines instead of cardboard DPS dispensers—and yet, combat still devolves into the same rhythms as the previous games. Enemies are too dumb and erratic and spongy to force tactical play. The most reliable plan: jump around, throw all the grenades, lay down on the fire button, use my Action Skill the second it recharges, and take cover only when necessary. It\'s good lizard-brain fun. \r\n<br><br>\r\nBorderlands 3\'s new vault hunters don\'t break much new ground either. While they each have three diverse skill trees and accompanying Action Skills perfect for squads looking to complement one another, there\'s nothing in the combat that requires close cooperation between classes as of yet, despite the inclusion of some context-sensitive ping tools. Calling out targets and pointing out loot locations is easy. \r\n<br><br>\r\nMoze summons a mech for some ridiculous damage-dealing, Amara is a siren with ghostly arms great for crowd control and AOE attacks, while Zane can summon a drone, shield, or decoy for more technical play. I spent the most time as FL4K, a robot with a pet companion, a great option for solo players. \r\n<br><br>\r\nMy build turns the Skag into a  nightmare. Wherever he spawns, a radioactive explosion. Wherever he walks, enemies trail as he tanks them in a cloud of poison. Goons explode like bloody pustules in his wake, limbs whirling around a singularity while I—wearing a horse head and an American flag skin—fire rockets and toss grenades into the mess. This is what I love about Borderlands. I found it, beneath the thick sediment of poop jokes.\r\n<br><br>\r\nBorderlands 3\'s skill trees produce Jackson Pollock vault hunters, spatterings of light and sound, where disorder is the point.\r\n<br><br>\r\nI do this for around 30 hours, and while the novelty wanes the inherently repetitive action is propped by an endless font of cool guns, grenades, class mods, artifacts, and shields, each with their own ridiculous attributes. If Destiny 2\'s guardians are architectural blueprints with structure and purpose, Borderlands 3\'s skill trees produce Jackson Pollock vault hunters, spatterings of light and sound, where disorder is the point. \r\n<br><br>\r\nOnce I finished the campaign, swept up the majority of side quests, and hit the level cap—something like 30 hours of play—when the NPCs quit talking and the focus returned to ruining hordes of enemies and finding more efficient weapons to do it with, I settled into a comfortable routine and remembered why I have hundreds of hours logged in Borderlands 2. \r\n<br><br>\r\nThe clouds of red mist and particle effects returned, the numbers grew, and so too did my heart. The endgame had arrived. \r\n<br><br>\r\nSadly, the endgame is pretty shallow at launch. It\'s all about accumulating better loot, but I\'m a bit backed into a corner. Mayhem mode modifies enemy difficulty for better rewards with three levels to work through. Think of Diablo 3\'s difficulty levels: juice the challenge to earn better loot until it\'s no longer difficult, juice it yet again for better loot. I\'d say ad infinitum, but there are only three Mayhem levels at launch. \r\n<br><br>\r\nThe alternative is True Vault Hunter Mode, which kicks off a new campaign with all your loot and abilities in tow. Good in theory, I just never want to play the campaign again. A few repeatable timed gauntlets and waved-based horde modes are my only alternative, so I\'ll just wait for the DLC and hope the writing is better.\r\n<br><br>\r\nBetween the bugs, the extended non-jokes, the self-aggrandizing jabs at game design trends, and a few cameos I won\'t spoil but that made me audibly groan, Borderlands 3 has a lot in common with Gearbox fan events as of late. There\'s a lot of loud, extended posturing while holding what everyone really came for hostage. It\'s a shame, because Tales from the Borderlands found a delicate balance of absurdity, self-awareness, and genuine heart. A better Borderlands is possible, it\'s just not Borderlands 3.\r\n<br><br>\r\n<a href=\"https://www.pcgamer.com/uk/borderlands-3-review\"><i>Taken from PCGamer.com</i></a>\r\n', 'Y', 'borderlands-3', 'borderlands-3.jpg'),
(2, 'Days Gone', ' In Days Gone, you don\'t have to go seeking out trouble, the world comes for you.', 'This text was retrieved from the database.', 'This is a test review of the game.', 'Y', 'days-gone', 'days-gone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gamescomments`
--

CREATE TABLE `gamescomments` (
  `UID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `UserComment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `gamescomments`
--

INSERT INTO `gamescomments` (`UID`, `UserID`, `ReviewID`, `UserComment`) VALUES
(1, 1, 1, 'This is a comment that was generated manually in the database.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `UserPassword` varchar(250) NOT NULL,
  `DarkMode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`) VALUES
(1, 'Lecturer', 'Example', 1);

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
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activereviews`
--
ALTER TABLE `activereviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gamescomments`
--
ALTER TABLE `gamescomments`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
