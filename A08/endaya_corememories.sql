-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(1000) NOT NULL,
  `color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'content1-1.png', 'The celebration of Jermami’s birthday at Southbox Karaoke marked a significant moment for KULTO ISLAND, a night that perfectly embodied the spirit of our circle. It wasn’t just about celebrating jermami’s special day, but about the bond we all share as a group. The karaoke room was filled with laughter, music, and unforgettable moments, with everyone coming together to make the night memorable. It was a true reflection of what KULTO ISLAND is—supporting each other, creating lasting memories, and enjoying every second we spend together. This birthday celebration wasn’t just a party; it was a moment that deepened our connection, a reminder of how lucky we are to have such a close-knit and supportive circle. jermami’s birthday will always be a part of our KULTO story, symbolizing the beginning of many more celebrations and shared adventures to come.', 'circle, #A3D8F4, #6EC6FF, #5A8FD8'),
(2, 1, 'content1-2.png', 'unforgettable day celebrating CJ’s birthday at SM Mall of Asia. We kicked it off by watching Inside Out 2, a movie that had us all laughing, tearing up, and reflecting perfect for the close bond we share. After the movie, we headed to Pizza Hut for dinner, where the table was filled with stories, jokes, and the warmth of true friendship. It was more than just a birthday celebration; it was a day that captured the essence of KULTO ISLAND—togetherness, fun, and creating memories that last a lifetime. As we headed home, we knew this was just the beginning of many more adventures to come, marking CJ’s birthday as a core part of our journey.', 'circle, #A3D8F4, #6EC6FF, #5A8FD8'),
(3, 1, 'content1-3.png', 'CoreMemory was our ice skating adventure at SM Mall of Asia. It was a day filled with laughter, excitement, and a few hilarious slips as we took to the ice together. For some, it was a chance to show off hidden skating skills, while for others, it was all about the thrill of trying something new (and surviving it). The shared moments of helping each other up, cheering each other on, and simply enjoying the experience made it a perfect reflection of what KULTO ISLAND is all about. That day wasn’t just about skating it was about strengthening our bond and creating a memory that we’ll look back on with smiles for years to come.', 'circle, #A3D8F4, #6EC6FF, #5A8FD8'),
(4, 2, 'content2-1.png', 'One special Love CoreMemory was our first museum visit together a day that felt like stepping into a world of wonder and discovery with my love. Walking through the exhibits, we shared quiet moments of awe, playful conversations, and deep appreciation for the art and stories around us. It wasn’t just about the museum itself but the way we experienced it together, making even the simplest things feel magical. Exploring each corner hand in hand, we created a memory that perfectly captured the joy of learning and growing side by side. That day became more than just a visit; it was a symbol of our shared curiosity and the beautiful connection we continue to build.', 'circle, #FFB6C1, #FF69B4, #C71585\r\n'),
(5, 2, 'content2-2.png', ' Love CoreMemory was our first date at SM Sto. Tomas, where I surprised my love with a little gift Sonny Angels. We started the day at J.CO, enjoying sweet treats and each other’s company, with every moment feeling effortless and special. The surprise gift brought an extra sparkle to her eyes, making the day even more memorable. It was a simple yet meaningful way to show how much she means to me, and her happiness made everything worth it. That first date wasn’t just the beginning of our story; it was a perfect reflection of the thoughtfulness and love we continue to share.', 'circle, #FFB6C1, #FF69B4, #C71585\r\n'),
(6, 2, 'content2-3.png', 'One of our most cherished Love CoreMemories was our date at the historic church in Intramuros, a day filled with quiet beauty and heartfelt moments. Walking together through the timeless architecture, we shared conversations that brought us closer, making the surroundings feel even more special. Afterward, I accompanied her to enroll at EAC, proud to be by her side as she took another step toward her dreams. It wasn’t just about the places we visited but about being there for each other, supporting and celebrating every milestone, big or small. That day became a symbol of our growing bond, rooted in love, care, and shared journeys.', 'circle, #FFB6C1, #FF69B4, #C71585\r\n'),
(7, 3, 'content3-1.png', 'One unforgettable Bro CoreMemory was our gym era  the time of sweat, motivation, and endless laughs. From hyping each other up during tough sets to cracking jokes between reps, every gym session was more than just a workout. it was a bonding experience. We pushed each other to improve, celebrated personal bests, and even embraced the soreness as a badge of progress. It wasn’t just about getting stronger physically but also about building discipline and strengthening our friendship. Those days at the gym with CJ will always stand out as a chapter of growth, resilience, and brotherhood.', 'circle, #FFFACD, #FFD700, #FFA500'),
(8, 3, 'content3-2.png', 'a time when almost every week, CJ and I would head to Manila just to soak in the vibe and enjoy life to the fullest. Mall hopping became our thing, exploring different places, trying out food spots, and finding new adventures at every turn. Each trip was filled with laughter, stories, and spontaneous moments that turned ordinary days into unforgettable ones. It wasn’t just about the places we visited but about the bond we shared, making every journey feel like a new adventure. Our Manila era was a testament to how simple plans with the right person can create memories that last a lifetime.', 'circle, #FFFACD, #FFD700, #FFA500'),
(9, 3, 'content3-3.png', 'this was our BGC trip this January, where CJ, I, and the other KULTO peeps spent three incredible days filled with fun and unforgettable moments. From exploring the vibrant city streets to trying out new food spots, late-night talks, and spontaneous adventures, every second was a celebration of friendship and good vibes. We did so many exciting things—mall hopping, taking photos, and just soaking in the energy of BGC, making every moment count. It was more than just a trip; it was a chance to strengthen our bond, laugh until our sides hurt, and create stories we’ll be telling for years. That 3-day adventure was a perfect reflection of what it means to be part of BRO ISLAND unfiltered joy, genuine connection, and memories that last forever.', 'circle, #FFFACD, #FFD700, #FFA500'),
(10, 4, 'content4-1.png', 'One of my most meaningful Esports CoreMemories is being part of my first team, Cerberus Esports. This team wasn’t just a group of players; it became my inspiration and motivation to push myself and hone my skills in Call of Duty Mobile. Playing alongside such talented and passionate teammates showed me the value of hard work, teamwork, and the dedication needed to succeed. It was with Cerberus Esports that I found my drive, committing countless hours to practice and improvement to make both myself and the team proud. This experience laid the foundation for my esports journey and ignited the passion that keeps me striving for greatness.', NULL),
(11, 4, 'content4-2.png', 'Being part of Warlord Esports is one of my most impactful Esports CoreMemories. This team played a crucial role in shaping me into a competitive player in Call of Duty Mobile. Through intense training sessions, challenging matches, and valuable feedback, Warlord Esports pushed me to refine my skills and mindset. It wasn’t just about the game—it was about growing as a player and learning what it takes to compete at a high level. This experience became a turning point in my esports journey, fueling my passion and determination to excel.', NULL),
(12, 4, 'content4-3.png', 'Being part of Pylon Esports, my last team and the final chapter of my Call of Duty Mobile (CODM) journey, holds a special place in my Esports CoreMemories. This team represented the culmination of all my growth, learning, and dedication throughout my CODM career. Every practice session, every strategy meeting, and every match was a testament to the skills I had built over the years. With Pylon Esports, I faced some of the most intense challenges, and we pushed each other to become better, all while reflecting on the progress made from my first team to this final chapter. This experience marked the end of an era but also solidified my passion for competitive gaming, a journey that I will always cherish.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(1500) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Kulto Island', 'Welcome to KULTO ISLAND, a circle of friends built on trust, laughter, and shared adventures. We\'re more than just a group we\'re a family that thrives on uplifting each other and creating unforgettable memories.', 'There are no words grand enough to truly capture how much each one of you means to me, but I’ll give it my best shot. You are more than just a group of friends you guys are my second chosen family. Life has a way of throwing challenges and surprises at us, but knowing I have you all by my side makes everything feel a little lighter, a little brighter, and a lot more meaningful.\n\nKULTO ISLAND isn’t just a name; it’s a sanctuary. It’s a space where I can be myself without judgment, where we celebrate each other’s quirks, and where every laughter-filled moment becomes a memory worth treasuring. I love how we’ve built something so unique bond that goes beyond words, rooted in shared experiences, mutual understanding, and unconditional support.\n', 'circle, #A3D8F4, #6EC6FF, #5A8FD8', 'KultoCoreB.png', 'active'),
(2, 'Love Island', ' heartwarming and unforgettable moments I’ve shared with my girlfriend, and they mean the world to me. These memories go far beyond just snapshots of time; they represent the very essence of our love story.', 'Love island are the heartwarming and unforgettable moments I’ve shared with my girlfriend, and they mean the world to me. These memories go far beyond just snapshots of time; they represent the very essence of our love story. Every laugh, every deep conversation, every spontaneous adventure, and every little moment we’ve shared, all of these things are what make our connection so unique. It’s the quiet nights spent together, where we talk about anything and everything, and the exciting adventures that take us to new places and experiences. Every moment, big or small, has contributed to building something beautiful and lasting between us. These memories are more than just past experiences; they are the foundation of a love that continues to grow and strengthen over time. What’s incredible is that each new memory we create only deepens our bond, bringing us closer and making our journey together even more meaningful. I truly believe these moments will stay with us forever, and I’m excited for all the memories we have yet to make.', 'circle, #FFB6C1, #FF69B4, #C71585\r\n', 'loveCoreB.png', 'active'),
(3, 'Bro Island', 'Capture the epic adventures and legendary moments I’ve shared with my best friend, and honestly, they’re some of the most unforgettable times of my life. ', 'Capture the epic adventures and legendary moments I’ve shared with my best friend, and honestly, they’re some of the most unforgettable times of my life. From wild escapades that had us laughing until we couldn’t breathe, to the inside jokes that only we understand, every moment with my best friend feels like an adventure. We’ve learned countless life lessons together—some the hard way, but all of them making us who we are today. These memories are the foundation of our unbreakable bond, built on trust, loyalty, and the unspoken understanding that we’ve always got each other’s backs. It’s about more than just having a good time; it’s about standing by each other through thick and thin, whether we’re facing challenges or celebrating victories. Together, we’ve created stories that I know will last a lifetime, and there’s no one else I’d want to share these moments with. Every crazy adventure life throws our way, we face it together, and I wouldn’t trade a single memory for anything. The journey we’ve been on and will continue to go on is one that means the world to me, and I’m grateful for every laugh, every challenge, and every lesson learned along the way.', 'circle, #FFFACD, #FFD700, #FFA500\r\n', 'broCoreB.png', 'active'),
(4, 'Esport Island', 'Capture the exciting and transformative moments of my esports journey, and they truly define who I’ve become as a player. Every challenge faced and every victory celebrated.', 'Capture the exciting and transformative moments of my esports journey, and they truly define who I’ve become as a player. From the adrenaline-pumping, intense matches to the hard-fought victories that felt like the ultimate reward for all the hard work, every moment has been a step forward in my growth. But it’s not just about the wins—it’s about the camaraderie of my teammates and the way we’ve supported each other through every challenge, every loss, and every high-pressure situation. Each match has been a lesson in strategy, teamwork, and perseverance. Every time we faced setbacks, it pushed me to improve, to dig deeper, and to keep pushing forward, no matter how tough things got. These memories are a true testament to my dedication, skills, and the endless hours spent honing my craft. Along the way, I’ve learned so much—not just about the game, but about myself and the power of working together toward a common goal. The unforgettable experiences, the bonds formed with teammates, and the sense of accomplishment after a victory have all shaped my esports story in ways I’ll always cherish. Each moment has played a part in fueling my passion for the game, and I’m excited for what lies ahead. These memories aren’t just about winning—they’re about the journey, the growth, and the friendships that came along with it.', 'circle, #A8E6A3, #76C893, #388E3C\r\n', 'TeyLCoreB.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
