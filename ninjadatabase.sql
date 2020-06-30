-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 04:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `link`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`) VALUES
(1, 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `control_sec`
--

CREATE TABLE `control_sec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `control_sec`
--

INSERT INTO `control_sec` (`id`, `name`, `about`) VALUES
(1, '123ahma', 'ahma'),
(2, 'ms,d', 'M,');

-- --------------------------------------------------------

--
-- Table structure for table `control_sec_link`
--

CREATE TABLE `control_sec_link` (
  `ids` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `liked` int(11) NOT NULL,
  `liker_id` text NOT NULL,
  `types` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `control_sec_link`
--

INSERT INTO `control_sec_link` (`ids`, `id`, `name`, `link`, `liked`, `liker_id`, `types`) VALUES
(2, 2, 'ahmad', 'M.,/.', 3, ',3,2', 1),
(3, 1, '123', '132', 1, '2,1', 2),
(4, 1, '12332', '12', 1, ',1', 3),
(5, 2, 'ahmad said', 'ahmad said', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

CREATE TABLE `following` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `following` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `following`
--

INSERT INTO `following` (`id`, `user_id`, `following`) VALUES
(1, 1, ',1');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `titel`, `body`, `dates`) VALUES
(116, 1, 'ahmadsa', '1234', '0000-00-00'),
(117, 9, 'ahmad', 'said', '0000-00-00'),
(120, 9, '123', '123', '0000-00-00'),
(126, 1, '2', '2', '2017-11-13'),
(127, 1, '123456', '123456', '2017-11-13'),
(128, 1, 'ahm', 'Ù…Ø³ØªÙˆØ±Ø© ÙˆØ²ÙˆØ¬Ù‡Ø§ Ø¬Ø§Ù„Ø³Ø§Ù† Ø­ÙˆÙ„ Ø§Ù„Ù†Ø§Ø±ØŒ ØªÙØµÙ„ Ø¨ÙŠÙ†Ù‡Ù…Ø§ Ù…Ø³Ø§ÙØ© Ø°Ø±Ø§Ø¹ ØªÙ‚Ø±ÙŠØ¨Ø§. Ù„Ù… ÙŠÙƒÙˆÙ†Ø§ ÙŠØªØ­Ø¯Ø«Ø§Ù† ÙÙŠ Ø´ÙŠØ¡ Ù…Ù†Ø° Ø£Ù† Ø§Ø¬ØªÙ…Ø¹Ø§. Ù…Ø­Ù…Ø¯ÙŠÙ† ÙŠÙˆØ§Ø¸Ø¨ ÙÙŠ Ø¯ÙØ¹ Ø§Ù„Ø­Ø·Ø¨ Ø¥Ù„Ù‰ Ù‚Ù„Ø¨ Ø§Ù„Ù†Ø§Ø±', '2017-11-13'),
(130, 1, 'm,m', '&amp;lt;h1&amp;gt;h&amp;lt;/h1&amp;gt;', '2017-11-13'),
(131, 1, 'blblabl', '&lt;?php require_once (&#039;../include/class/db.php&#039;); require_once (&#039;../include/class/query.php&#039;); require_once (&#039;../include/class/islogedin.php&#039;); require_once (&#039;../include/class/securety.php&#039;); $user_id=islogedin::logedin(); if(isset($_GET[&#039;link_id&#039;])){ $id=prot::valid($_GET[&#039;link_id&#039;]); $stmt=&#039;SELECT * FROM links where user_id=:user_id and id=:id&#039;; $param=[&#039;:user_id&#039;=&gt;$user_id ,&#039;:id&#039;=&gt;$id]; $querys=querys::query($stmt,$param)-&gt;fetchAll(PDO::FETCH_ASSOC); if(!$querys){     header(&quot;LOCATION:../index.php&quot;); } }else{     header(&quot;LOCATION:../index.php&quot;); }  $css_file=&quot;home&quot;; $page_name=&#039;msges&#039;; include_once &quot;../include/part/header.php&quot;; ?&gt; &lt;/head&gt; &lt;body&gt; &lt;!-- &lt;div class=&quot; col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix &quot;&gt; --&gt; &lt;div class=&quot;main_info &quot;&gt; &lt;?php         echo &quot;&lt;div style=&#039;height:auto&#039; class=&#039;info info-red info-bl col-sm-10 col-md-10 col-lg-8&#039;&gt;&quot;;          echo &quot;&lt;div class=&#039;titel&#039;&gt;&quot;.$querys[0][&#039;titel&#039;].&quot;&lt;/div&gt;&lt;br&gt;&quot;;         echo &quot;&lt;div class=&#039;body&#039; &gt;&quot;.$querys[0][&#039;body&#039;].&quot;&lt;/div&gt;&quot;;           ?&gt; &lt;/div&gt;             &lt;!-- &lt;/div&gt; --&gt;  &lt;/body&gt;', '2017-11-30'),
(132, 1, '1231', 'ahmad ahmad ahmad hmad', '2017-11-30'),
(133, 9, 'gra', 'r', '2017-12-07'),
(134, 1, '1', '1', '2017-12-07'),
(135, 1, 'qaraqeesh il zaiim', 'www.google.com', '2018-01-02'),
(136, 1, '123', 'Note: to improve web accessibility, we recommend using aria-hidden=&quot;true&quot; to hide icons used purely for decoration.   Looking for more? Check out the examples.', '2018-01-16'),
(137, 1, '12349', 'Note: to improve web accessibility, we recommend using aria-hidden=&quot;true&quot; to hide icons used purely for decoration. Looking for more? Check out the examples.Note: to improve web accessibility, we recommend using aria-hidden=&quot;true&quot; to hide icons used purely for decoration. Looking for more? Check out the examples.Note: to improve web accessibility, we recommend using aria-hidden=&quot;true&quot; to hide icons used purely for decoration. Looking for more? Check out the examples.Note: to improve web accessibility, we recommend using aria-hidden=&quot;true&quot; to hide icons used purely for decoration. Looking for more? Check out the examples.Note: to improve web accessibility, we recommend using aria-hidden=&quot;true&quot; to hide icons used purely for decoration. Looking for more? Check out the examples.', '2018-01-16'),
(138, 1, 'the new design', 'https://colorlib.com/etc/glint/index.html#about', '2018-04-21'),
(139, 1, 'angular 4 tutorial', 'https://www.tutorialspoint.com/angular4/index.htm', '2018-04-21'),
(140, 1, 'asimply tutorial', 'https://www.tutorialspoint.com/assembly_programming/assembly_environment_setup.htm', '2018-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `link_rate`
--

CREATE TABLE `link_rate` (
  `id` int(11) NOT NULL,
  `sec_name` varchar(255) NOT NULL,
  `link_sec` varchar(255) NOT NULL,
  `link_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link_rate`
--

INSERT INTO `link_rate` (`id`, `sec_name`, `link_sec`, `link_id`, `user_id`, `rate`) VALUES
(47, 'control_sec', '1', 1, 1, 1),
(48, 'control_sec_link', '1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mech_sec`
--

CREATE TABLE `mech_sec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mech_sec`
--

INSERT INTO `mech_sec` (`id`, `name`, `about`) VALUES
(1, '123', '123'),
(2, '123', '45646'),
(3, '123456', '458796');

-- --------------------------------------------------------

--
-- Table structure for table `mech_sec_link`
--

CREATE TABLE `mech_sec_link` (
  `ids` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `liked` int(11) NOT NULL,
  `liker_id` text NOT NULL,
  `types` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mech_sec_link`
--

INSERT INTO `mech_sec_link` (`ids`, `id`, `name`, `link`, `liked`, `liker_id`, `types`) VALUES
(4, 1, 'https://www.youtube.com/user/sallamah/playlists', 'https://www.youtube.com/user/sallamah/playlists', 1, ',1', 1),
(5, 1, '1235', '1235', 0, '', 2),
(6, 1, '$sub_name', '123', 0, '', 3),
(7, 1, '123', '123233', 1, ',1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `University` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page_name`, `specialty`, `University`, `admin`) VALUES
(1, 'ahmad', 'saidaa', 'aaaaaaaa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page-lib`
--

CREATE TABLE `page-lib` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `other_name` text NOT NULL,
  `about` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `body`, `dates`) VALUES
(18, 9, '123123', '0000-00-00'),
(19, 9, 'ahmad', '0000-00-00'),
(43, 9, 'ahmad\r\nsaid', '2017-11-17'),
(44, 9, '5ra', '2017-12-07'),
(45, 1, 'ahmad said you can do it ', '2018-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `power_sec`
--

CREATE TABLE `power_sec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `power_sec`
--

INSERT INTO `power_sec` (`id`, `name`, `about`) VALUES
(1, 'ahmad', 'said'),
(2, '1', '1'),
(3, '2', '2'),
(4, '123', '123'),
(5, '23', '233'),
(6, 'plc', 'its something for mic');

-- --------------------------------------------------------

--
-- Table structure for table `power_sec_link`
--

CREATE TABLE `power_sec_link` (
  `ids` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `liked` int(11) NOT NULL,
  `liker_id` text NOT NULL,
  `types` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `power_sec_link`
--

INSERT INTO `power_sec_link` (`ids`, `id`, `name`, `link`, `liked`, `liker_id`, `types`) VALUES
(2, 1, '123', '132', 2, '1,1', 1),
(3, 1, '111', 'dddddddddddddddddddddd', 2, ',1', 2),
(4, 1, '12346', '123d', 6, ',1,1,1,1,1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `programming_sec`
--

CREATE TABLE `programming_sec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programming_sec`
--

INSERT INTO `programming_sec` (`id`, `name`, `about`) VALUES
(1, 'ahmad', 'said');

-- --------------------------------------------------------

--
-- Table structure for table `programming_sec_link`
--

CREATE TABLE `programming_sec_link` (
  `ids` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `liked` int(11) NOT NULL,
  `liker_id` text NOT NULL,
  `types` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programming_sec_link`
--

INSERT INTO `programming_sec_link` (`ids`, `id`, `name`, `link`, `liked`, `liker_id`, `types`) VALUES
(2, 1, '5345616', '15665456', 1, '1', 1),
(3, 1, '123556', '12', 1, ',1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `public_links`
--

CREATE TABLE `public_links` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `links` text NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `public_links`
--

INSERT INTO `public_links` (`id`, `section_id`, `user_id`, `titel`, `type`, `links`, `dates`) VALUES
(38, 0, 9, 'ahmad2', 'programming', '222', '2017-12-07'),
(53, 0, 1, '123', 'programming', '123', '2017-12-22'),
(54, 1, 1, 'ahmad', 'programming', 'will be', '2017-12-22'),
(55, 2, 1, 'ahmad said', 'programming', 'noo', '2018-01-14'),
(56, 1, 1, 'qaraqeesh il zaiim', 'programming', 'aqq', '2018-01-29'),
(57, 7, 1, 'ahmad', 'programming', 'ahmadq', '2018-01-29'),
(58, 7, 1, 'ahmad said', 'programming', '123', '2018-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `public_link_groups`
--

CREATE TABLE `public_link_groups` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_desc` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `public_link_groups`
--

INSERT INTO `public_link_groups` (`user_id`, `group_id`, `group_name`, `group_desc`, `types`) VALUES
(1, 1, 'ahmadhm', 'ahmad', 'programming'),
(1, 2, '123', 'AHMAD SAIDD', 'programming'),
(1, 3, 'php', 'material about php', 'programming'),
(1, 4, '123', 'ahmda', 'programming'),
(1, 5, 'ghadeer', 'Ghadeer', 'programming'),
(1, 6, 'ahmad said', 'ahhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'power'),
(1, 7, 'worlk', 'I think', 'programming'),
(1, 8, 'its work thanks', 'thanks', 'programming');

-- --------------------------------------------------------

--
-- Table structure for table `public_path`
--

CREATE TABLE `public_path` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `paths` text NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `public_path`
--

INSERT INTO `public_path` (`id`, `user_id`, `type`, `titel`, `paths`, `dates`) VALUES
(1, 9, 'programming', 'ahmad', '123', '2017-12-07'),
(2, 9, 'programming', 'ahmad 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2017-12-07'),
(8, 1, 'programming', 'Ø´Ø§Ø©Ø´ÙŠ', 'Ù‰ÙˆØ²', '2018-01-13'),
(9, 1, 'programming', 'Ø´Ø§Ø©Ø´ÙŠ', 'Ù‰ÙˆØ²', '2018-01-13'),
(10, 1, 'programming', '132132', '121312132', '2018-01-13'),
(11, 1, 'programming', 'ahmad said', 'said', '2018-01-13'),
(14, 1, 'programming', 'ahmad said', 'finellay work', '2018-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `suber_user`
--

CREATE TABLE `suber_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suber_user`
--

INSERT INTO `suber_user` (`id`, `user_id`, `name`) VALUES
(1, 1, 'ezzahmad19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `todo` varchar(255) NOT NULL,
  `stat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `user_id`, `todo`, `stat`) VALUES
(18, 1, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`user_id`, `user_name`, `token`) VALUES
(1, '', '249cba9671892b9346568212230fc37c'),
(1, '', '0dfa5ca2f0a24882b769c6e08c81aabd'),
(1, '', '949b9ef1aa9f3ede204cb8377726d1f4'),
(1, '', '01e572ead8987378feea14c77acf5486'),
(1, '', 'df4297a0d291634a2284b931da164bad'),
(1, '', 'd330c523a2dea686669e3437a160d895'),
(1, '', 'a9aebfb6d65590feb6625f9bced10990'),
(1, '', '4544d754452a1085e1c85c3bd58fea15'),
(1, 'ezzahmad19@gmail.com', 'ffab164dc58ed3ae9e24d704d5385478'),
(1, 'ezzahmad19@gmail.com', '9a6adcd75bcceb71c908ac209d4fdefc'),
(1, 'ezzahmad19@gmail.com', 'bb9310db30389850e19431509e9fcd0a'),
(9, 'ezzahmad19@yahoo.com', '24c540e3df4b0c884da2cf4baada490d'),
(1, 'ezzahmad19@gmail.com', '64f3f7443041a7a6114a65739cb79466'),
(1, 'ezzahmad19@gmail.com', 'f4ed052c1b43520beb322b09115f751e'),
(1, 'ezzahmad19@gmail.com', 'bf258e1f0fb6ddac81613e284bed6f84'),
(1, 'ezzahmad19@gmail.com', '5d4eebaa2bb28921965fa0c69c288361'),
(1, 'ezzahmad19@gmail.com', '41005be6859200c1597cf3a6dd78c51d'),
(1, 'ezzahmad19@gmail.com', '563e3ae6f929edd7143ec021dfcbfaf1'),
(1, 'ezzahmad19@gmail.com', 'ce33aeec3025883fdf286871fd906d43'),
(1, 'ezzahmad19@gmail.com', 'e9b4a76b37543f64863531d40e704434'),
(1, 'ezzahmad19@gmail.com', '7093b46d9a133ddf532d95658f920291'),
(1, 'ezzahmad19@gmail.com', '957fb082961d53db80c20b1d6bc8af7c'),
(1, 'ezzahmad19@gmail.com', 'dfd13bced33c1508380bc326702b1de9'),
(1, 'ezzahmad19@gmail.com', '1fbbe7a577018ea8707daf28121b1445'),
(1, 'ezzahmad19@gmail.com', 'e5539b7adf8f4b1c8486a81a8144fef1'),
(1, 'ezzahmad19@gmail.com', '25cc1a2fb52c39b8e9f859113871604c'),
(1, 'ezzahmad19@gmail.com', '5a49d4df399d6057eda928d71447fc3e'),
(1, 'ezzahmad19@gmail.com', '12c6e5031d91bfe87b11c5b004d1e8b5'),
(1, 'ezzahmad19@gmail.com', '573d788b42ded76eec4047a9dc8863df'),
(1, 'ezzahmad19@gmail.com', '01b9cb8f0776b541c42f55d25e9f4aa3'),
(1, 'ezzahmad19@gmail.com', '5c41353d0064231981f3ac2a6b35bfe5'),
(1, 'ezzahmad19@gmail.com', 'd8b186196d9ec22e808d578292678925'),
(1, 'ezzahmad19@gmail.com', 'aac94f0ad77f2cdbd399744d6e8b3e7a'),
(1, 'ezzahmad19@gmail.com', '7df5f60508e2021da612607fc7bd9bc2'),
(1, 'ezzahmad19@gmail.com', 'a46391c67a174701c16436cb950dce13'),
(1, 'ezzahmad19@gmail.com', 'e8cdcf6bb909b5054c25482a3b218477'),
(1, 'ezzahmad19@gmail.com', 'd3b488ecbed8c29f4ce0f3f573a37507'),
(1, 'ezzahmad19@gmail.com', '37684116cdaf0d3f92554c274cca92f6'),
(1, 'ezzahmad19@gmail.com', '8c5021948f078b1475068127837be8e4'),
(1, 'ezzahmad19@gmail.com', 'c1a78441f8c860af657b9932b3d4bf92'),
(1, 'ezzahmad19@gmail.com', '6596e393e9ebdea9a448ff7f3127c22b'),
(1, 'ezzahmad19@gmail.com', 'eae9a67913b78f228b6c093ac0c7d502'),
(1, 'ezzahmad19@gmail.com', 'c71cd94a03cbb894e97d0f1a8a6cc166'),
(1, 'ezzahmad19@gmail.com', '84e4f84327997345204a862a959d93c2'),
(1, 'ezzahmad19@gmail.com', '6c71e2bfaf9fa8d35a1d6dfc8ceba8b8'),
(1, 'ezzahmad19@gmail.com', 'a0f649748f86a253e649c7503069582d'),
(1, 'ezzahmad19@gmail.com', 'eb658537ac49c2ca824e41cb05284232'),
(1, 'ezzahmad19@gmail.com', 'ea13dbcec02bcadf83f9329e0e5dfb0e'),
(1, 'ezzahmad19@gmail.com', 'b915845ea338475f4f12cfeeef7d41ad'),
(1, 'ezzahmad19@gmail.com', '40fbb51d09570f8670689285658179c1'),
(1, 'ezzahmad19@gmail.com', 'b7d5199de87dfb2ed910038c50e5e9c8'),
(1, 'ezzahmad19@gmail.com', '9fa04e1c9c4b67e0938dcd32e2ce5f61'),
(1, 'ezzahmad19@gmail.com', '37a4d1d7dcc346ad41927b010b4d0cfa'),
(1, 'ezzahmad19@gmail.com', '4e89fafea4e2ca5d900e83292700599c'),
(1, 'ezzahmad19@gmail.com', 'fb190af1380826eea719b41377d747bd'),
(1, 'ezzahmad19@gmail.com', '2e67ae0634ad899a1804b8c1d9a5dd6f'),
(1, 'ezzahmad19@gmail.com', 'cf0e40e355a32e74ce15029a6db4da70'),
(1, 'ezzahmad19@gmail.com', '1a554ada3bb70cd6e4ceb82cf985ecfa'),
(1, 'ezzahmad19@gmail.com', '3102781d476c4945f08829d0bbaf1097'),
(1, 'ezzahmad19@gmail.com', '681e508e3422df09a4e54a93a56bc2ff'),
(1, 'ezzahmad19@gmail.com', '7a5507c57f009471300f85511658a0e7'),
(1, 'ezzahmad19@gmail.com', 'd4baa4610d1c6abcb0bb52360de74163'),
(1, 'ezzahmad19@gmail.com', 'ca9b19a0eeaac7767895403188552fd3'),
(1, 'ezzahmad19@gmail.com', '2fa2219ee33bf89a656506c2897ac1fe'),
(1, 'ezzahmad19@gmail.com', '821d3f207f90b45dd966171314e64a3d'),
(1, 'ezzahmad19@gmail.com', '54582c73e772be6f61512ad64983d098'),
(1, 'ezzahmad19@gmail.com', 'a8f3837069e26a4f494614044eeee4de'),
(1, 'ezzahmad19@gmail.com', 'f3259aa06d26f172daccb23407197520'),
(1, 'ezzahmad19@gmail.com', '2424109674f5c7963f964d7448ce836e'),
(1, 'ezzahmad19@gmail.com', 'c354432c3e4d118b5b118b882b6fa78e'),
(1, 'ezzahmad19@gmail.com', 'c561779899c52ea5885c20057addfbbe'),
(1, 'ezzahmad19@gmail.com', 'ec5189f1c4fff22e21f8b591ae739092'),
(1, 'ezzahmad19@gmail.com', '2e33cf7b64c37446a805599b2887db05'),
(1, 'ezzahmad19@gmail.com', 'c5ce7e85175fc0bb3008f252d07a6b39'),
(1, 'ezzahmad19@gmail.com', 'cc98126ba4c4f3108a8e7bff87c7b0af'),
(1, 'ezzahmad19@gmail.com', '48638c67fb91137a97467e7216d63705'),
(1, 'ezzahmad19@gmail.com', '9b7573fb9ff67d3758368fe0dae85d6c'),
(1, 'ezzahmad19@gmail.com', '0c8f6f97dbaf927f50f9a0c1f23f9865'),
(1, 'ezzahmad19@gmail.com', '818dfc2740a987256f263e5b8e24bbe0'),
(1, 'ezzahmad19@gmail.com', '00c484bb50349c7afbbe40375ade3922'),
(1, 'ezzahmad19@gmail.com', 'ef165b07b77b941326a928afaf377a12'),
(1, 'ezzahmad19@gmail.com', '62c248d4fee8f21b8da4494896c155b8'),
(1, 'ezzahmad19@gmail.com', '4526cc55a8230ab61ba4880177ed2d25'),
(1, 'ezzahmad19@gmail.com', '3ef364da06518df8c9db0f2ee21e6748'),
(1, 'ezzahmad19@gmail.com', '049e99d171ac06d17a93fbfb77df1b50'),
(1, 'ezzahmad19@gmail.com', '2927c6573ae57edddc83e1d47128c090'),
(1, 'ezzahmad19@gmail.com', '01096d68fa1c0b28dcfef52caaf67e7f'),
(1, 'ezzahmad19@gmail.com', 'bf4acd2dbd67c25d165ef5aeab2fe4af'),
(1, 'ezzahmad19@gmail.com', '7eb25a60b0def46967f6967e139945ac'),
(1, 'ezzahmad19@gmail.com', '3ce390fb16847294eb224ea70dc72f7f'),
(1, 'ezzahmad19@gmail.com', '6520d9dd7769c68e3f01ae5d5f8324ba'),
(1, 'ezzahmad19@gmail.com', 'd0d4460aa05e67b57ea969d122226d76'),
(1, 'ezzahmad19@gmail.com', 'fee497882059bce67c558efcbd7a363f'),
(1, 'ezzahmad19@gmail.com', 'f0561641532971250c978bb94df29baf'),
(1, 'ezzahmad19@gmail.com', 'dc3a51d4b5890f20bc26f2cd0655b665'),
(1, 'ezzahmad19@gmail.com', 'b17ff2a137fe86b51ed3ae2f75a268db'),
(1, 'ezzahmad19@gmail.com', '73200dc37ff33aac02165cae2f057e7c'),
(1, 'ezzahmad19@gmail.com', '1e222fabbbfbc976f368acd5eeaef105'),
(1, 'ezzahmad19@gmail.com', 'a428ca4585ea02b5e547117be8d4eed2'),
(1, 'ezzahmad19@gmail.com', '7785782a63f5e5b777350eb6a8f288e3'),
(1, 'ezzahmad19@gmail.com', 'f379d5ef1523dfd59bcfac1645bd1da0'),
(1, 'ezzahmad19@gmail.com', 'b33f8071c33cb428bba021a6daaac988'),
(1, 'ezzahmad19@gmail.com', '7638c7aac65e09fae53d1f9b2da4c27e'),
(1, 'ezzahmad19@gmail.com', '307271067860cd63422beb22f1ac4cf6'),
(1, 'ezzahmad19@gmail.com', 'c8d750fd9dcde3a203f09b550df41f13'),
(1, 'ezzahmad19@gmail.com', 'b3affcbd64c48a3713b882404b36e79a'),
(1, 'ezzahmad19@gmail.com', 'd255cf5d978cf851838600ed74be737a'),
(1, 'ezzahmad19@gmail.com', 'f7d10e07f898c28eaaceb2ab66731051'),
(1, 'ezzahmad19@gmail.com', 'e78d160cf55e41e7e3e076cd80556ed0'),
(1, 'ezzahmad19@gmail.com', '0e2298dc7b58bc16fe0ee316031992c7'),
(1, 'ezzahmad19@gmail.com', '6065a34d5ee811827632bdb30a61780e'),
(1, 'ezzahmad19@gmail.com', 'a0a0160753ab134c7e7f0e422266e028'),
(1, 'ezzahmad19@gmail.com', '5bf39ce68f4c6aa12918261d04337d40'),
(1, 'ezzahmad19@gmail.com', '433921359491f45670498b8f6844289a'),
(1, 'ezzahmad19@gmail.com', '4d52fa60079f0a408e73e5dcc5bd81ed'),
(1, 'ezzahmad19@gmail.com', '94b213cc5e14c221e29d78fc9fa6a579'),
(1, 'ezzahmad19@gmail.com', '490678ec3c43395bdb3d14f89cc7e100'),
(1, 'ezzahmad19@gmail.com', '61917a685e106a4d1a5a33e254fdeb2d'),
(1, 'ezzahmad19@gmail.com', 'e4a03de25b3ac94008f5ea5d44b7c0a0'),
(1, 'ezzahmad19@gmail.com', '3262ede9347646800cd8068a56d1463e'),
(1, 'ezzahmad19@gmail.com', 'dbe70f06f06e7946f71239bd519c84cc'),
(1, 'ezzahmad19@gmail.com', '1b975a873b3b75dad97fd3ab8fc530e6'),
(1, 'ezzahmad19@gmail.com', '5c5601ebd61e5e32f0bdcfb58cce4091'),
(1, 'ezzahmad19@gmail.com', '47d93971d51f8ed23c0f77993a862cbb'),
(1, 'ezzahmad19@gmail.com', '46a1abe3f204303de119c59a7e95cb1e'),
(1, 'ezzahmad19@gmail.com', '975b772b6314fe9d113945d8920359be'),
(1, 'ezzahmad19@gmail.com', '0cd836c762b90351d3da1b2692c0391c'),
(1, 'ezzahmad19@gmail.com', 'c21b782adc9c58b43668a25888e894df'),
(1, 'ezzahmad19@gmail.com', '6c2677be5d4dd585444cb2a979603b54'),
(1, 'ezzahmad19@gmail.com', '3e1bccc7362d92856bceff9466e5334d'),
(1, 'ezzahmad19@gmail.com', 'e09985cb62da298202f9a0b609b82237'),
(1, 'ezzahmad19@gmail.com', 'd27c8428be04d6ef9ae2f896a0ec4298'),
(1, 'ezzahmad19@gmail.com', 'd69b75f66d0278fa2df89ab636b15b98'),
(1, 'ezzahmad19@gmail.com', 'ec974a066de7293a8256d4b82d06a068'),
(1, 'ezzahmad19@gmail.com', '3cfb79193ff9ae38b17aebf5b8df4272'),
(1, 'ezzahmad19@gmail.com', 'a2072c4ddae1dac48fb3986b268f66f1'),
(1, 'ezzahmad19@gmail.com', 'af4ca090169215248057d8f668e6536e'),
(1, 'ezzahmad19@gmail.com', 'a4015fbeb6624a97860658e7cccc3ff2'),
(1, 'ezzahmad19@gmail.com', 'b9c25a7a55ef58493656227fa88e2a4e'),
(1, 'ezzahmad19@gmail.com', 'd6d3186f482479ccd1ef6bc7e23b1423'),
(1, 'ezzahmad19@gmail.com', 'f723c7741fc7094adbd8914e632d1bf5'),
(1, 'ezzahmad19@gmail.com', '62126fadddba3a2687b7b228a8b34e11'),
(1, 'ezzahmad19@gmail.com', 'c025c2bb27cb225477fae1ad899d2c7a'),
(1, 'ezzahmad19@gmail.com', 'a5547fc60fda1fc6b46fb8e8b551b191'),
(1, 'ezzahmad19@gmail.com', 'b959f59cdec0fea7243f758f7e4507ef'),
(1, 'ezzahmad19@gmail.com', '7e9356b608153ddc0432995d4b79f7e1'),
(1, 'ezzahmad19@gmail.com', '0b4849388308f68be41031bb251aea97'),
(1, 'ezzahmad19@gmail.com', '3d61fb61bfc675f5c8c6b99730c564a1'),
(1, 'ezzahmad19@gmail.com', '6ef84954906e00c195053c91851713f8');

-- --------------------------------------------------------

--
-- Table structure for table `uesr_add`
--

CREATE TABLE `uesr_add` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uesr_add`
--

INSERT INTO `uesr_add` (`id`, `user_id`, `section_name`, `subject`, `url`) VALUES
(1, 1, 'whould work', 'yahh', 'yahhh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `them` int(2) NOT NULL DEFAULT '1',
  `facebook_account` varchar(255) NOT NULL,
  `Linkedin_account` varchar(255) NOT NULL,
  `Gmail_account` varchar(255) NOT NULL,
  `google_account` varchar(255) NOT NULL,
  `birth_day` date NOT NULL,
  `advice` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `secoundName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `token`, `them`, `facebook_account`, `Linkedin_account`, `Gmail_account`, `google_account`, `birth_day`, `advice`, `gender`, `secoundName`) VALUES
(1, 'ezzahmad19@gmail.com', '21a7fa8e52b2ed3e322e2b3d2b72b3fc', 'ahmad', 'b1k6,gtf.v', 1, '123', 'AHMA', '', '', '0000-00-00', 'ahmadsaid', '', ''),
(71, 'ezzahmad19@yahoo.com', '21a7fa8e52b2ed3e322e2b3d2b72b3fc', 'ahmad', '', 1, '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_openion`
--

CREATE TABLE `users_openion` (
  `msg_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `id` (`id`);

--
-- Indexes for table `control_sec`
--
ALTER TABLE `control_sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control_sec_link`
--
ALTER TABLE `control_sec_link`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `following`
--
ALTER TABLE `following`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `links_ibfk_1` (`user_id`);

--
-- Indexes for table `link_rate`
--
ALTER TABLE `link_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mech_sec`
--
ALTER TABLE `mech_sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mech_sec_link`
--
ALTER TABLE `mech_sec_link`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page-lib`
--
ALTER TABLE `page-lib`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `power_sec`
--
ALTER TABLE `power_sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `power_sec_link`
--
ALTER TABLE `power_sec_link`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `programming_sec`
--
ALTER TABLE `programming_sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programming_sec_link`
--
ALTER TABLE `programming_sec_link`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `public_links`
--
ALTER TABLE `public_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `public_link_groups`
--
ALTER TABLE `public_link_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `public_path`
--
ALTER TABLE `public_path`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suber_user`
--
ALTER TABLE `suber_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`user_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `uesr_add`
--
ALTER TABLE `uesr_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_openion`
--
ALTER TABLE `users_openion`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_sec`
--
ALTER TABLE `control_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `control_sec_link`
--
ALTER TABLE `control_sec_link`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `following`
--
ALTER TABLE `following`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `link_rate`
--
ALTER TABLE `link_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `mech_sec`
--
ALTER TABLE `mech_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mech_sec_link`
--
ALTER TABLE `mech_sec_link`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page-lib`
--
ALTER TABLE `page-lib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `power_sec`
--
ALTER TABLE `power_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `power_sec_link`
--
ALTER TABLE `power_sec_link`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `programming_sec`
--
ALTER TABLE `programming_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `programming_sec_link`
--
ALTER TABLE `programming_sec_link`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `public_links`
--
ALTER TABLE `public_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `public_link_groups`
--
ALTER TABLE `public_link_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `public_path`
--
ALTER TABLE `public_path`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `suber_user`
--
ALTER TABLE `suber_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `uesr_add`
--
ALTER TABLE `uesr_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `users_openion`
--
ALTER TABLE `users_openion`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `todo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_openion`
--
ALTER TABLE `users_openion`
  ADD CONSTRAINT `users_openion_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
