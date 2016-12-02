-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 10:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lsportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `b_id` int(10) UNSIGNED NOT NULL,
  `b_date` varchar(50) NOT NULL,
  `b_author` varchar(50) NOT NULL,
  `b_title` varchar(100) NOT NULL,
  `b_content` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`b_id`, `b_date`, `b_author`, `b_title`, `b_content`) VALUES
(1, 'Jun 7, 2016', 'Liam Stewart', 'What is Ginge Digital Studios?', 'Ginge is a team of emerging designers and  programmers offering a unique approach to web design and development, graphic design, and digital marketing by creating custom digital solutions that will promote your business. Whether it''s a website redesign for an established company, or a full package to help a new business grow, Ginge will take on the challenge.\n<br><br>\n<a href="https://www.ginge.ca">Ginge</a> aims to create relationships with our clients that are personal and engaging. We believe that the creative process should facilitate conversation and be an enjoyable experience for everyone involved!\n<br><br>\nI founded the company originally in early March of 2012 under the name GingeTech. I created a small anti-bullying website at the beginning of 2012 with my brother after that I was in love with website development. I worked at another website development company for two and half years, later leaving and returning to my own company and re-branding it to <a href="https://www.ginge.ca" target="_blank">Ginge Digital Studios</a>.\n<br><br>\nThe team consists of very talented and unique individuals I have hand picked to work with:\n<br>\n	<br>Liam Stewart (me) -Executive Director\n	<br><a href="https://jillianmatthies.ca/" target="_blank">Jillian Matthies</a> - Project Manager\n	<br><a href="http://laurenkoza.com/" target="_blank">Lauren Koza</a> - Interactive Designer\n	<br>Gavin Riddolls - New Business Developer\n<br><br>\nGinge is always growing and looking for new talented individuals, so get in touch with us at <a href="https://www.ginge.ca/contact" target="_blank">hello@ginge.ca</a> or careers@ginge.ca'),
(2, 'Aug 31, 2016', 'Liam Stewart', 'The 5 Simplest WordPress Site Speed Optimizations for Beginners', 'WordPress is a super awesome open source software! I personally use it for a lot of my personal projects, as well as my clients over at <a href="https://www.ginge.ca" target="_blank">Ginge Digital Studios</a>.\n<br><br>\nSo what can you do to make your website faster? Here are a few simple ways to speed up your WordPress Website and make your visitors happy!\n<br><br>\n<h4>Minify your HTML, CSS, and Javascript<em> (Make cute little baby files)</em></h4>\nMinifying a file isnt any crazy compression algorithm - Minifying is  basically removing the spaces (white space) from text files -  This includes your HTML, CSS, and Javascript.\n<br><br>\nWhile spaces and tabs make code more readable for humans, servers and internet browsers dont need it to be readable to the human eye to execute.\n<br><br>\nInstead of going through each file and removing spaces in your code, plugin''s like <a title="WP Minify" href="http://wordpress.org/plugins/wp-minify/" target="_blank">WP Minify </a>and W3 Total Cache (Mentioned up in caching section) can handle this at runtime.\n<br><br>\n<h4>Cache like no tomorrow <em>(trust me)</em></h4>\nGot static images, CSS and Javascript on your website that you dont regularly change? Browser side caching is now your friend. I know, first step and your already have a friend. Look at you!\n<br><br>\nBasically caching involves storing files from your site so the file is only loaded the first time the user visits the website - instead of every time that user visits your website. This speeds up load times for your users and cuts down bandwidth use on your server - saving you resources and money.\n<br><br>\nA popular caching plugin for WordPress is <a title="W3 Total Cache" href="http://wordpress.org/plugins/w3-total-cache/" target="_blank">W3 Total Cache </a> - I personally use this one on all my websites! The W3 Total Cache plugin requires some technical experience and skills - so dont worry if you arent a server expert. An alternative plugin is <a title="WP Super Cache" href="http://wordpress.org/plugins/wp-super-cache/" target="_blank">WP Super Cache</a> which is a more user-friendly plugin built by the great people at <a href="https://automattic.com/" target="_blank">Automattic</a> (the company behind WordPress).\n<br><br>\n<h4>Reduce your HTTP Requests</h4>\nWhen someone visits a page on your site, the required files are sent to that person''s browser, such as images, CSS, and Javascript files. So if you have an HTML file, three CSS files, four Javascript files and eight images, making a total of 16 files required to load the web page -  Thats a lot!\n<br><br>\nBy reducing the number of files requested in your site''s pages, you can reduce the amount of HTTP requests that are called to render a page, speeding up load times.\n<br><br>\nOne way to do this is by having a simple and clean website design. W3 Total Cache has a minify section which allows you to combine your CSS and Javscript into one file which also helps cut down on HTTP requests.\n<br><br>\n<h4>Compress your Images</h4>\nImages are usually the largest files that need to be loaded on a web page so if they aren''t compressed they will slow down your websites load time.\n<br><br>\nThere are tons of WordPress plugins to compress images. I recommend the free version of <a title="WP Smush.it" href="http://wordpress.org/plugins/wp-smushit/" target="_blank">WP Smush.it</a>, now managed and supported by WPMU DEV, automatically removes meta data and removes unused colors from indexed images. You can always go pro if you want, however the free version is great for starting!\n<br><br>\n<h4>Optimize Database <em>(Time to take out the trash)</em></h4>\nWhen you optimize your WordPress database tables it will help free up space and keep your database running smoothly and efficiently.\n<br><br>\nI recommend <a title="WP-Optimize" href="http://wordpress.org/plugins/wp-optimize/" target="_blank">WP-Optimize</a>, a database optimization, and website cleanup tool. This plugin also lets you remove comments in the spam queue, unapproved comments, and items in the trash.\n<br><br>\n<h4>Yay! You sped up your WordPress site!</h4>\nSo there you have it, 5 ways to improve your site load time and make your website awesome! Optimizing your site helps with site speed, resulting in users exploring your website and engaging with your content.\n<br><br>\nSo get out there and speed up your website and use <a href="https://tools.pingdom.com/" target="_blank">Pingdom Tools</a> to check the improvements!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `p_id` int(10) UNSIGNED NOT NULL,
  `p_name` varchar(150) NOT NULL,
  `p_desc` varchar(2000) NOT NULL,
  `p_img` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `p_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `b_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `p_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
