-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 11:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger_users`
--

CREATE TABLE `blogger_users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogger_users`
--

INSERT INTO `blogger_users` (`id`, `user_id`, `first_name`, `last_name`, `email`, `mobile`, `password`) VALUES
(1, 'Anuj_1', 'Anuj', 'Kumar', 'anuj.k0204@gmail.com', '9818969739', 'c333622f5d868a808816bb65af28d73b'),
(2, 'Ashwani_2', 'Ashwani', 'Goyal', 'ashwani972886@gmail.com', '9211044990', 'cf834c18f7f2105103981010853de6bc'),
(3, 'Aqib_3', 'Aqib', 'Ali', 'aaqib3086@gmail.com', '9876543210', 'bb75f68862b4672f72fb424f42a7d8e1'),
(4, 'Priya_4', 'Priya', 'Kumari', 'priyakumari6512@gmail.com', '9876543210', 'bb2e5afb0b64013791a6269e0f3d2506'),
(5, 'Anoop_5', 'Anoop', 'Kumar', 'anoop123@gmail.com', '9876543210', '488b60b4a12584225297b56f0934b94b');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'food_recipies'),
(2, 'fiction'),
(3, 'relationship'),
(4, 'fashion'),
(5, 'travel'),
(6, 'career'),
(7, 'health_n_beauty');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `title_img` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `quote_desc` text NOT NULL,
  `quote_author` varchar(100) NOT NULL,
  `tags` text NOT NULL,
  `quote_s` int(11) NOT NULL,
  `profile_s` int(11) NOT NULL,
  `comment_s` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_id`, `user_id`, `user_name`, `title_img`, `title`, `category`, `sub_category`, `description`, `quote_desc`, `quote_author`, `tags`, `quote_s`, `profile_s`, `comment_s`, `date_time`) VALUES
(1, '4_post', 'Anuj_1', 'Anuj Kumar', '4_post.png', 'Review: Diageo Special Releases 2021 – Legends Untold', 'relationship', 'marriage', '<p>The Diageo Special Releases has become a marked day in any whisky enthusiast&rsquo;s calendar, no more so than in 2021. Comprising eight whiskies from some of Scotland&rsquo;s most prized distilleries including Talisker and Lagavulin, this year&rsquo;s Special Releases capture the imagination like never before.</p>\r\n\r\n<p>Using the power of modern technology, the eight cask-strength whiskies come complete with their own fabled beast. Scottish folklore dictates that each distillery&rsquo;s heartland has its own protector. All have been beautifully represented by renowned digital illustrator Ken Taylor on both the label and presentation box. The multi-sensory journey continues through a QR code, which takes owners on a detailed narration of the whisky&rsquo;s journey. Whisky fans are then guided through a mixed reality tasting experience, designed to elevate their senses and capture an essence that may otherwise be missed.</p>\r\n\r\n<p><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/the-most-expensive-whisky-ever-sold-at-auction-revealed\" target=\"_blank\"><em><strong>[See also: The Most Expensive Whisky Ever Sold at Auction]</strong></em></a></p>\r\n\r\n<p>This is all before you get to the whisky itself. The entire collection will set you back around $3,500. For that, you gain ownership of eight limited-edition Scotch whiskies that are unlikely to be seen again. Each one represents the height of experimentation with rare cask finishes and unusual age statements.</p>\r\n\r\n<p>Dr Craig Wilson, who hand-picked each whisky in the collection, said: &ldquo;We have delved into the core characteristics of several classic distilleries, exploring the elements and reimagining the liquids for the Legends Untold collection. The mythical creatures of this year&rsquo;s collection represent the true expressions of the distilleries. Taking inspiration from them, we have revealed new depths of flavor and embraced the essence of each whisky&rsquo;s unique flavor profile.&rdquo;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elitetraveler.com/wp-content/uploads/2021/10/Diageo_Special_Release_21_Lagavulin26_70cl_Bottle_IBC_refract-min-700x875.jpg\" style=\"height:625px; width:500px\" /></p>\r\n\r\n<p>Each label and box has been elegantly designed by renowned digital illustrator Ken Taylor / &copy;Diageo</p>\r\n\r\n<p>Do not be deterred by talk of limited quantities. While they won&rsquo;t be around forever, this is a much wider release than what we usually cover on&nbsp;<em>Elite Traveler</em>. Where&nbsp;<a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/diageo-reveals-prima-ultima-second-release\" target=\"_blank\"><strong>Diageo&rsquo;s ultra-rare Prima &amp; Ultima</strong></a><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/diageo-reveals-prima-ultima-second-release\" target=\"_blank\">&nbsp;<strong>collection&nbsp;</strong>may&nbsp;</a>be destined for the investment portfolio, the accessible prices and wider availability of the Special Releases 2021 make them ripe for opening.</p>\r\n\r\n<p>But if you&rsquo;re not in the market for eight new bottles of Scotch, we&rsquo;ve tested and rated all of them to help you pick out your favorites.</p>\r\n\r\n<p><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/the-best-scotch-whisky-brands-in-the-world\" target=\"_blank\"><em><strong>[See also: The Best Scotch Whisky Brands in the World]</strong></em></a></p>\r\n\r\n<h2><strong>Tasting Notes</strong></h2>\r\n\r\n<p><em><strong>Note:</strong>&nbsp;At cask-strength, only the most seasoned of drinkers will reveal each whisky&rsquo;s true character without water. With the exception of the Lagavulin 26, all tasting notes are given after several drops of water have been added.</em></p>\r\n\r\n<p><strong>Oban 12 Year Old</strong><br />\r\n<em>56.2%, $115<br />\r\nCask: Freshly charred American Oak</em></p>\r\n\r\n<p>Nose: Unmistakably coastal. A savory start with sea salt and seaweed. Citrus and pepper are delicately balanced with a smokiness from the charred casks.</p>\r\n\r\n<p>Palate: Surprisingly fresh and fruity character that was completely absent on the nose. Well balanced with the savory notes and a hint of wood spice.</p>\r\n\r\n<p>Finish: A medium finish of spicy wood notes and black pepper.</p>\r\n\r\n<p>Rating: 7.5/10</p>\r\n\r\n<p><strong>Lagavulin 26 Year Old</strong><br />\r\n<em>44.2% $2,400<br />\r\nCask: PX/Oloroso seasoned first fill casks</em></p>\r\n\r\n<p>Nose: Wonderfully complex with oak spices evolving into heavier notes of bonfire and ash. Underlaid by a deep sweetness of toasted marshmallows, poached pears and blackberries.</p>\r\n\r\n<p>Palate: A deep sweetness. Baked figs and vanilla. Fades quickly to make way for an oak spice and smoky notes that intensify over time. A classic Lagavulin texture with an ultra-smooth texture.</p>\r\n\r\n<p>Finish: A long finish as the peat take over your palate to offer notes of an empty cigar box.</p>\r\n\r\n<p>Rating: 8.5/10</p>\r\n\r\n<p><strong>Singleton 19 Year Old</strong><br />\r\n<em>59.7%, $175<br />\r\nCask: Refill American oak casks, finished in cognac casks</em></p>\r\n\r\n<p>Nose: Vibrant with citrus. Orange oil, lemon zest and raw honey leave the senses tingling with anticipation.</p>\r\n\r\n<p>Palate: Lots of spice with an oak-infused dryness. Pencil shavings and ginger, but the sweetness doesn&rsquo;t carry through from the nose. More water brings out a freshness of green apples and grapes.</p>\r\n\r\n<p>Finish: A long finish with hints of ginger and spent tea leaves. The dryness remains.</p>\r\n\r\n<p>Rating: 6.5/10</p>\r\n\r\n<p><strong>Mortlach 13 Year Old</strong><br />\r\n<em>55.9%, $125<br />\r\nCask: Virgin and refill American oak casks</em></p>\r\n\r\n<p>Nose: Freshly cut grass that is in-keeping with Speyside mixed with a tartness akin to marmalade.</p>\r\n\r\n<p>Palate: A creamy texture with floral notes that evolves into a savory finish.</p>\r\n\r\n<p>Finish: A long a complex finish that suggests something much older than its age statement. A powerful Speyside malt that does justice to the Beast of Dufftown.</p>\r\n\r\n<p>Rating: 8.5/10</p>\r\n\r\n<p><strong>Cardhu 14 Year Old</strong><br />\r\n<em>55.5%, $150<br />\r\nCask: Refill American oak casks, finished in red wine casks</em></p>\r\n\r\n<p>Nose: Very sweet. Lychees, coconut and hints of cream sherry. An underlying note of chardonnay white wine.</p>\r\n\r\n<p>Palate: In keeping with the nose, sweet notes dominate. Grapes and red apple skin combine with oak. Extra water smoothens out the liquid further.</p>\r\n\r\n<p>Finish: A short and fragrant finish with spicy pepper and further notes of sharp grapes.</p>\r\n\r\n<p>Rating: 6.5/10</p>\r\n\r\n<p><strong>Talisker 8 Year Old</strong><br />\r\n<em>59.7%, $115<br />\r\nCask: Heavily peated refill casks</em></p>\r\n\r\n<p>Nose: Instantly identifiable as Talisker. Menthol notes mix in with the seaweed and brine that Talisker is famous for. A real bomb of a whisky.</p>\r\n\r\n<p>Palate: What a hit. Big, bold and unabashed. The added peat gives extra fire to the traditional Talisker profile. An uncomplicated whisky with nothing too surprising.</p>\r\n\r\n<p>Finish: Smoke remains on the palate as other notes evolve from brine and salt to pears and pepper. An excellent alternative for Islay enthusiasts.</p>\r\n\r\n<p>Rating: 7/10</p>\r\n\r\n<p><strong>Lagavulin 12 Year Old</strong><br />\r\n<em>56.5%, $150<br />\r\nCask: Refill American Oak casks</em></p>\r\n\r\n<p>Nose:&nbsp;A heavy maritime influence that evolves into dark chocolate. Water reveals the underlying citrus zest with a hint of ginger akin to tequila.</p>\r\n\r\n<p>Palate: An uncomplicated malt that delivers what you&rsquo;d expect from Lagavulin. Sourdough, freshly squeezed lemon and hints of bonfire.</p>\r\n\r\n<p>Finish: Water extends the finish to reveal fruitier notes. Smoke clings on from start to finish.</p>\r\n\r\n<p>Rating: 7/10</p>\r\n\r\n<p><strong>Royal Lochnagar 16 Year Old</strong><br />\r\n<em>57.5% $250<br />\r\nCask: American Oak and European Oak refill casks</em></p>\r\n\r\n<p>Nose: A good balance of fresh fruit and wood spice. Subtle notes and a mellow aroma suggest something far easier to drink than the ABV would have you believe.</p>\r\n\r\n<p>Palate:&nbsp;An acidic texture, like drinking juice first thing in the morning. Orange zest comes to the fore before the wooded notes come through in a lengthy finish.</p>\r\n\r\n<p>Finish:&nbsp;A long and woody finish that warms the body. A real winter dram that is best enjoyed in deepest winter.</p>\r\n\r\n<p>Rating: 8/10</p>\r\n\r\n<p><strong><a href=\"https://www.malts.com/en-gb/products/collections/special-releases-2021\" target=\"_blank\">malts.com</a></strong></p>\r\n', 'My own experience has been that the tools I need for my trade are paper, tobacco, food, and a little whisky.', 'William Faulkner', 'ewtwert', 1, 0, 0, '2021-10-22 02:10:08'),
(2, '5_post', 'Anuj_1', 'Anuj Kumar', '5_post.png', 'sadfsfasdf', 'relationship', 'marriage', '<p>,nbnmxcbv</p>\r\n', 'dfsdf', 'treyrty', 'dsfsd', 1, 0, 0, '2021-10-22 02:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `post_draft`
--

CREATE TABLE `post_draft` (
  `id` int(11) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `title_img` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `quote_desc` text NOT NULL,
  `quote_author` varchar(100) NOT NULL,
  `tags` text NOT NULL,
  `quote_s` int(11) NOT NULL,
  `profile_s` int(11) NOT NULL,
  `comment_s` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_draft`
--

INSERT INTO `post_draft` (`id`, `post_id`, `user_id`, `user_name`, `title_img`, `title`, `category`, `sub_category`, `description`, `quote_desc`, `quote_author`, `tags`, `quote_s`, `profile_s`, `comment_s`, `date_time`) VALUES
(1, '1_post', 'Anuj_1', 'Anuj Kumar', '1_404_Error.png', 'First Blog', 'food_recipies', 'Technology', '<p>Hello This is my first Blog</p>\r\n', 'Happy Navratri', 'Aqib', '', 1, 1, 1, '2021-10-07 21:06:20'),
(2, '2_post', 'Anuj_1', 'Anuj Kumar', '2_post.png', 'Review: Diageo Special Releases 2021 – Legends Untold', 'food_recipies', 'Health Tips', '<p>The Diageo Special Releases has become a marked day in any whisky enthusiast&rsquo;s calendar, no more so than in 2021. Comprising eight whiskies from some of Scotland&rsquo;s most prized distilleries including Talisker and Lagavulin, this year&rsquo;s Special Releases capture the imagination like never before.</p>\r\n\r\n<p>Using the power of modern technology, the eight cask-strength whiskies come complete with their own fabled beast. Scottish folklore dictates that each distillery&rsquo;s heartland has its own protector. All have been beautifully represented by renowned digital illustrator Ken Taylor on both the label and presentation box. The multi-sensory journey continues through a QR code, which takes owners on a detailed narration of the whisky&rsquo;s journey. Whisky fans are then guided through a mixed reality tasting experience, designed to elevate their senses and capture an essence that may otherwise be missed.</p>\r\n\r\n<p><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/the-most-expensive-whisky-ever-sold-at-auction-revealed\" target=\"_blank\"><em><strong>[See also: The Most Expensive Whisky Ever Sold at Auction]</strong></em></a></p>\r\n\r\n<p>This is all before you get to the whisky itself. The entire collection will set you back around $3,500. For that, you gain ownership of eight limited-edition Scotch whiskies that are unlikely to be seen again. Each one represents the height of experimentation with rare cask finishes and unusual age statements.</p>\r\n\r\n<p>Dr Craig Wilson, who hand-picked each whisky in the collection, said: &ldquo;We have delved into the core characteristics of several classic distilleries, exploring the elements and reimagining the liquids for the Legends Untold collection. The mythical creatures of this year&rsquo;s collection represent the true expressions of the distilleries. Taking inspiration from them, we have revealed new depths of flavor and embraced the essence of each whisky&rsquo;s unique flavor profile.&rdquo;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elitetraveler.com/wp-content/uploads/2021/10/Diageo_Special_Release_21_Lagavulin26_70cl_Bottle_IBC_refract-min-700x875.jpg\" style=\"height:625px; width:500px\" /></p>\r\n\r\n<p>Each label and box has been elegantly designed by renowned digital illustrator Ken Taylor / &copy;Diageo</p>\r\n\r\n<p>Do not be deterred by talk of limited quantities. While they won&rsquo;t be around forever, this is a much wider release than what we usually cover on&nbsp;<em>Elite Traveler</em>. Where&nbsp;<a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/diageo-reveals-prima-ultima-second-release\" target=\"_blank\"><strong>Diageo&rsquo;s ultra-rare Prima &amp; Ultima</strong></a><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/diageo-reveals-prima-ultima-second-release\" target=\"_blank\">&nbsp;<strong>collection&nbsp;</strong>may&nbsp;</a>be destined for the investment portfolio, the accessible prices and wider availability of the Special Releases 2021 make them ripe for opening.</p>\r\n\r\n<p>But if you&rsquo;re not in the market for eight new bottles of Scotch, we&rsquo;ve tested and rated all of them to help you pick out your favorites.</p>\r\n\r\n<p><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/the-best-scotch-whisky-brands-in-the-world\" target=\"_blank\"><em><strong>[See also: The Best Scotch Whisky Brands in the World]</strong></em></a></p>\r\n\r\n<h2><strong>Tasting Notes</strong></h2>\r\n\r\n<p><em><strong>Note:</strong>&nbsp;At cask-strength, only the most seasoned of drinkers will reveal each whisky&rsquo;s true character without water. With the exception of the Lagavulin 26, all tasting notes are given after several drops of water have been added.</em></p>\r\n\r\n<p><strong>Oban 12 Year Old</strong><br />\r\n<em>56.2%, $115<br />\r\nCask: Freshly charred American Oak</em></p>\r\n\r\n<p>Nose: Unmistakably coastal. A savory start with sea salt and seaweed. Citrus and pepper are delicately balanced with a smokiness from the charred casks.</p>\r\n\r\n<p>Palate: Surprisingly fresh and fruity character that was completely absent on the nose. Well balanced with the savory notes and a hint of wood spice.</p>\r\n\r\n<p>Finish: A medium finish of spicy wood notes and black pepper.</p>\r\n\r\n<p>Rating: 7.5/10</p>\r\n\r\n<p><strong>Lagavulin 26 Year Old</strong><br />\r\n<em>44.2% $2,400<br />\r\nCask: PX/Oloroso seasoned first fill casks</em></p>\r\n\r\n<p>Nose: Wonderfully complex with oak spices evolving into heavier notes of bonfire and ash. Underlaid by a deep sweetness of toasted marshmallows, poached pears and blackberries.</p>\r\n\r\n<p>Palate: A deep sweetness. Baked figs and vanilla. Fades quickly to make way for an oak spice and smoky notes that intensify over time. A classic Lagavulin texture with an ultra-smooth texture.</p>\r\n\r\n<p>Finish: A long finish as the peat take over your palate to offer notes of an empty cigar box.</p>\r\n\r\n<p>Rating: 8.5/10</p>\r\n\r\n<p><strong>Singleton 19 Year Old</strong><br />\r\n<em>59.7%, $175<br />\r\nCask: Refill American oak casks, finished in cognac casks</em></p>\r\n\r\n<p>Nose: Vibrant with citrus. Orange oil, lemon zest and raw honey leave the senses tingling with anticipation.</p>\r\n\r\n<p>Palate: Lots of spice with an oak-infused dryness. Pencil shavings and ginger, but the sweetness doesn&rsquo;t carry through from the nose. More water brings out a freshness of green apples and grapes.</p>\r\n\r\n<p>Finish: A long finish with hints of ginger and spent tea leaves. The dryness remains.</p>\r\n\r\n<p>Rating: 6.5/10</p>\r\n\r\n<p><strong>Mortlach 13 Year Old</strong><br />\r\n<em>55.9%, $125<br />\r\nCask: Virgin and refill American oak casks</em></p>\r\n\r\n<p>Nose: Freshly cut grass that is in-keeping with Speyside mixed with a tartness akin to marmalade.</p>\r\n\r\n<p>Palate: A creamy texture with floral notes that evolves into a savory finish.</p>\r\n\r\n<p>Finish: A long a complex finish that suggests something much older than its age statement. A powerful Speyside malt that does justice to the Beast of Dufftown.</p>\r\n\r\n<p>Rating: 8.5/10</p>\r\n\r\n<p><strong>Cardhu 14 Year Old</strong><br />\r\n<em>55.5%, $150<br />\r\nCask: Refill American oak casks, finished in red wine casks</em></p>\r\n\r\n<p>Nose: Very sweet. Lychees, coconut and hints of cream sherry. An underlying note of chardonnay white wine.</p>\r\n\r\n<p>Palate: In keeping with the nose, sweet notes dominate. Grapes and red apple skin combine with oak. Extra water smoothens out the liquid further.</p>\r\n\r\n<p>Finish: A short and fragrant finish with spicy pepper and further notes of sharp grapes.</p>\r\n\r\n<p>Rating: 6.5/10</p>\r\n\r\n<p><strong>Talisker 8 Year Old</strong><br />\r\n<em>59.7%, $115<br />\r\nCask: Heavily peated refill casks</em></p>\r\n\r\n<p>Nose: Instantly identifiable as Talisker. Menthol notes mix in with the seaweed and brine that Talisker is famous for. A real bomb of a whisky.</p>\r\n\r\n<p>Palate: What a hit. Big, bold and unabashed. The added peat gives extra fire to the traditional Talisker profile. An uncomplicated whisky with nothing too surprising.</p>\r\n\r\n<p>Finish: Smoke remains on the palate as other notes evolve from brine and salt to pears and pepper. An excellent alternative for Islay enthusiasts.</p>\r\n\r\n<p>Rating: 7/10</p>\r\n\r\n<p><strong>Lagavulin 12 Year Old</strong><br />\r\n<em>56.5%, $150<br />\r\nCask: Refill American Oak casks</em></p>\r\n\r\n<p>Nose:&nbsp;A heavy maritime influence that evolves into dark chocolate. Water reveals the underlying citrus zest with a hint of ginger akin to tequila.</p>\r\n\r\n<p>Palate: An uncomplicated malt that delivers what you&rsquo;d expect from Lagavulin. Sourdough, freshly squeezed lemon and hints of bonfire.</p>\r\n\r\n<p>Finish: Water extends the finish to reveal fruitier notes. Smoke clings on from start to finish.</p>\r\n\r\n<p>Rating: 7/10</p>\r\n\r\n<p><strong>Royal Lochnagar 16 Year Old</strong><br />\r\n<em>57.5% $250<br />\r\nCask: American Oak and European Oak refill casks</em></p>\r\n\r\n<p>Nose: A good balance of fresh fruit and wood spice. Subtle notes and a mellow aroma suggest something far easier to drink than the ABV would have you believe.</p>\r\n\r\n<p>Palate:&nbsp;An acidic texture, like drinking juice first thing in the morning. Orange zest comes to the fore before the wooded notes come through in a lengthy finish.</p>\r\n\r\n<p>Finish:&nbsp;A long and woody finish that warms the body. A real winter dram that is best enjoyed in deepest winter.</p>\r\n\r\n<p>Rating: 8/10</p>\r\n\r\n<p><strong><a href=\"https://www.malts.com/en-gb/products/collections/special-releases-2021\" target=\"_blank\">malts.com</a></strong></p>\r\n', 'My own experience has been that the tools I need for my trade are paper, tobacco, food, and a little whisky.', 'William Faulkner', 'abc,bdfgdfg', 1, 0, 0, '2021-10-21 22:01:56'),
(3, '3_post', 'Anuj_1', 'Anuj Kumar', '3_post.png', 'Review: Diageo Special Releases 2021 – Legends Untold', 'food_recipies', 'Health Tips', '<p>The Diageo Special Releases has become a marked day in any whisky enthusiast&rsquo;s calendar, no more so than in 2021. Comprising eight whiskies from some of Scotland&rsquo;s most prized distilleries including Talisker and Lagavulin, this year&rsquo;s Special Releases capture the imagination like never before.</p>\r\n\r\n<p>Using the power of modern technology, the eight cask-strength whiskies come complete with their own fabled beast. Scottish folklore dictates that each distillery&rsquo;s heartland has its own protector. All have been beautifully represented by renowned digital illustrator Ken Taylor on both the label and presentation box. The multi-sensory journey continues through a QR code, which takes owners on a detailed narration of the whisky&rsquo;s journey. Whisky fans are then guided through a mixed reality tasting experience, designed to elevate their senses and capture an essence that may otherwise be missed.</p>\r\n\r\n<p><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/the-most-expensive-whisky-ever-sold-at-auction-revealed\" target=\"_blank\"><em><strong>[See also: The Most Expensive Whisky Ever Sold at Auction]</strong></em></a></p>\r\n\r\n<p>This is all before you get to the whisky itself. The entire collection will set you back around $3,500. For that, you gain ownership of eight limited-edition Scotch whiskies that are unlikely to be seen again. Each one represents the height of experimentation with rare cask finishes and unusual age statements.</p>\r\n\r\n<p>Dr Craig Wilson, who hand-picked each whisky in the collection, said: &ldquo;We have delved into the core characteristics of several classic distilleries, exploring the elements and reimagining the liquids for the Legends Untold collection. The mythical creatures of this year&rsquo;s collection represent the true expressions of the distilleries. Taking inspiration from them, we have revealed new depths of flavor and embraced the essence of each whisky&rsquo;s unique flavor profile.&rdquo;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elitetraveler.com/wp-content/uploads/2021/10/Diageo_Special_Release_21_Lagavulin26_70cl_Bottle_IBC_refract-min-700x875.jpg\" /></p>\r\n\r\n<p>Each label and box has been elegantly designed by renowned digital illustrator Ken Taylor / &copy;Diageo</p>\r\n\r\n<p>Do not be deterred by talk of limited quantities. While they won&rsquo;t be around forever, this is a much wider release than what we usually cover on&nbsp;<em>Elite Traveler</em>. Where&nbsp;<a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/diageo-reveals-prima-ultima-second-release\" target=\"_blank\"><strong>Diageo&rsquo;s ultra-rare Prima &amp; Ultima</strong></a><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/diageo-reveals-prima-ultima-second-release\" target=\"_blank\">&nbsp;<strong>collection&nbsp;</strong>may&nbsp;</a>be destined for the investment portfolio, the accessible prices and wider availability of the Special Releases 2021 make them ripe for opening.</p>\r\n\r\n<p>But if you&rsquo;re not in the market for eight new bottles of Scotch, we&rsquo;ve tested and rated all of them to help you pick out your favorites.</p>\r\n\r\n<p><a href=\"https://www.elitetraveler.com/finest-dining/wines-and-spirits/the-best-scotch-whisky-brands-in-the-world\" target=\"_blank\"><em><strong>[See also: The Best Scotch Whisky Brands in the World]</strong></em></a></p>\r\n\r\n<h2><strong>Tasting Notes</strong></h2>\r\n\r\n<p><em><strong>Note:</strong>&nbsp;At cask-strength, only the most seasoned of drinkers will reveal each whisky&rsquo;s true character without water. With the exception of the Lagavulin 26, all tasting notes are given after several drops of water have been added.</em></p>\r\n\r\n<p><strong>Oban 12 Year Old</strong><br />\r\n<em>56.2%, $115<br />\r\nCask: Freshly charred American Oak</em></p>\r\n\r\n<p>Nose: Unmistakably coastal. A savory start with sea salt and seaweed. Citrus and pepper are delicately balanced with a smokiness from the charred casks.</p>\r\n\r\n<p>Palate: Surprisingly fresh and fruity character that was completely absent on the nose. Well balanced with the savory notes and a hint of wood spice.</p>\r\n\r\n<p>Finish: A medium finish of spicy wood notes and black pepper.</p>\r\n\r\n<p>Rating: 7.5/10</p>\r\n\r\n<p><strong>Lagavulin 26 Year Old</strong><br />\r\n<em>44.2% $2,400<br />\r\nCask: PX/Oloroso seasoned first fill casks</em></p>\r\n\r\n<p>Nose: Wonderfully complex with oak spices evolving into heavier notes of bonfire and ash. Underlaid by a deep sweetness of toasted marshmallows, poached pears and blackberries.</p>\r\n\r\n<p>Palate: A deep sweetness. Baked figs and vanilla. Fades quickly to make way for an oak spice and smoky notes that intensify over time. A classic Lagavulin texture with an ultra-smooth texture.</p>\r\n\r\n<p>Finish: A long finish as the peat take over your palate to offer notes of an empty cigar box.</p>\r\n\r\n<p>Rating: 8.5/10</p>\r\n\r\n<p><strong>Singleton 19 Year Old</strong><br />\r\n<em>59.7%, $175<br />\r\nCask: Refill American oak casks, finished in cognac casks</em></p>\r\n\r\n<p>Nose: Vibrant with citrus. Orange oil, lemon zest and raw honey leave the senses tingling with anticipation.</p>\r\n\r\n<p>Palate: Lots of spice with an oak-infused dryness. Pencil shavings and ginger, but the sweetness doesn&rsquo;t carry through from the nose. More water brings out a freshness of green apples and grapes.</p>\r\n\r\n<p>Finish: A long finish with hints of ginger and spent tea leaves. The dryness remains.</p>\r\n\r\n<p>Rating: 6.5/10</p>\r\n\r\n<p><strong>Mortlach 13 Year Old</strong><br />\r\n<em>55.9%, $125<br />\r\nCask: Virgin and refill American oak casks</em></p>\r\n\r\n<p>Nose: Freshly cut grass that is in-keeping with Speyside mixed with a tartness akin to marmalade.</p>\r\n\r\n<p>Palate: A creamy texture with floral notes that evolves into a savory finish.</p>\r\n\r\n<p>Finish: A long a complex finish that suggests something much older than its age statement. A powerful Speyside malt that does justice to the Beast of Dufftown.</p>\r\n\r\n<p>Rating: 8.5/10</p>\r\n\r\n<p><strong>Cardhu 14 Year Old</strong><br />\r\n<em>55.5%, $150<br />\r\nCask: Refill American oak casks, finished in red wine casks</em></p>\r\n\r\n<p>Nose: Very sweet. Lychees, coconut and hints of cream sherry. An underlying note of chardonnay white wine.</p>\r\n\r\n<p>Palate: In keeping with the nose, sweet notes dominate. Grapes and red apple skin combine with oak. Extra water smoothens out the liquid further.</p>\r\n\r\n<p>Finish: A short and fragrant finish with spicy pepper and further notes of sharp grapes.</p>\r\n\r\n<p>Rating: 6.5/10</p>\r\n\r\n<p><strong>Talisker 8 Year Old</strong><br />\r\n<em>59.7%, $115<br />\r\nCask: Heavily peated refill casks</em></p>\r\n\r\n<p>Nose: Instantly identifiable as Talisker. Menthol notes mix in with the seaweed and brine that Talisker is famous for. A real bomb of a whisky.</p>\r\n\r\n<p>Palate: What a hit. Big, bold and unabashed. The added peat gives extra fire to the traditional Talisker profile. An uncomplicated whisky with nothing too surprising.</p>\r\n\r\n<p>Finish: Smoke remains on the palate as other notes evolve from brine and salt to pears and pepper. An excellent alternative for Islay enthusiasts.</p>\r\n\r\n<p>Rating: 7/10</p>\r\n\r\n<p><strong>Lagavulin 12 Year Old</strong><br />\r\n<em>56.5%, $150<br />\r\nCask: Refill American Oak casks</em></p>\r\n\r\n<p>Nose:&nbsp;A heavy maritime influence that evolves into dark chocolate. Water reveals the underlying citrus zest with a hint of ginger akin to tequila.</p>\r\n\r\n<p>Palate: An uncomplicated malt that delivers what you&rsquo;d expect from Lagavulin. Sourdough, freshly squeezed lemon and hints of bonfire.</p>\r\n\r\n<p>Finish: Water extends the finish to reveal fruitier notes. Smoke clings on from start to finish.</p>\r\n\r\n<p>Rating: 7/10</p>\r\n\r\n<p><strong>Royal Lochnagar 16 Year Old</strong><br />\r\n<em>57.5% $250<br />\r\nCask: American Oak and European Oak refill casks</em></p>\r\n\r\n<p>Nose: A good balance of fresh fruit and wood spice. Subtle notes and a mellow aroma suggest something far easier to drink than the ABV would have you believe.</p>\r\n\r\n<p>Palate:&nbsp;An acidic texture, like drinking juice first thing in the morning. Orange zest comes to the fore before the wooded notes come through in a lengthy finish.</p>\r\n\r\n<p>Finish:&nbsp;A long and woody finish that warms the body. A real winter dram that is best enjoyed in deepest winter.</p>\r\n\r\n<p>Rating: 8/10</p>\r\n\r\n<p><strong><a href=\"https://www.malts.com/en-gb/products/collections/special-releases-2021\" target=\"_blank\">malts.com</a></strong></p>\r\n', 'My own experience has been that the tools I need for my trade are paper, tobacco, food, and a little whisky.', 'William Faulkner', 'Wisky,wine', 1, 0, 0, '2021-10-21 21:43:06'),
(4, '4_post', 'Anuj_1', 'Anuj Kumar', '4_post.png', 'sdfasfasdf', 'relationship', 'Historical Monuments', '<p>sadfasdf</p>\r\n', 'sadffdgfdgh', 'jghjkhjgk', 'ewtwert', 1, 0, 0, '2021-10-22 02:10:08'),
(6, '', 'Anuj_1', 'Anuj Kumar', '', '', '', '', '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(7, '', 'Ashwani_2', 'Ashwani Goyal', '', '', '', '', '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category`, `sub_category`) VALUES
(1, 'relationship', 'marriage'),
(2, 'relationship', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tags` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tags`) VALUES
(1, 'food'),
(2, 'travel'),
(3, 'abc'),
(4, 'efg'),
(5, 'win'),
(6, 'Blog'),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger_users`
--
ALTER TABLE `blogger_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_draft`
--
ALTER TABLE `post_draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogger_users`
--
ALTER TABLE `blogger_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_draft`
--
ALTER TABLE `post_draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
