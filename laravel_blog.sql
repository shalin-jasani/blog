-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2016 at 09:44 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  `image_path` varchar(30) NOT NULL,
  `active_from_date` date NOT NULL,
  `active_to_date` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `description`, `image_path`, `active_from_date`, `active_to_date`, `status`) VALUES
(1, 'Databse1               ', 'A database is a collection of information that is organized so that it can easily be accessed, managed, and updated. In one view, databases can be classified according to types of content: bibliographic, full-text, numeric, and images.', '', '2016-01-24', '2016-01-31', 'Deactive'),
(21, 'Mysql  ', 'MySQL is the world''s most popular open source database. With its proven performance, reliability and ease-of-use, MySQL has become the leading database choice for web-based applications, used by high profile web properties including Facebook, Twitter, YouTube, Yahoo! and many more.\r\n\r\nOracle drives MySQL innovation, delivering new capabilities to power next generation web, cloud, mobile and embedded applications.', '', '2016-01-25', '2017-01-25', 'Deactive'),
(23, 'Functions ', 'PHP User Defined Functions\r\n\r\nBesides the built-in PHP functions, we can create our own functions.\r\n\r\nA function is a block of statements that can be used repeatedly in a program.\r\n\r\nA function will not execute immediately when a page loads.\r\n\r\nA function will be executed by a call to the function.', '16-02-2016-1455594615.png', '2016-01-25', '2017-01-25', 'Active'),
(24, 'Comments', 'A comment in PHP code is a line that is not read/executed as part of the program. Its only purpose is to be read by someone who is looking at the code.\r\n\r\nComments can be used to:\r\n\r\n    Let others understand what you are doing\r\n    Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code\r\n', '25-01-2016-1453709846.jpg', '2016-01-25', '2017-01-25', 'Active'),
(25, 'javascript ', 'JavaScript is one of the 3 languages all web developers must learn:\r\n\r\n   1. HTML to define the content of web pages\r\n\r\n   2. CSS to specify the layout of web pages\r\n\r\n   3. JavaScript to program the behavior of web pages\r\n\r\nThis tutorial is about JavaScript, and how JavaScript works with HTML and CSS.', '16-02-2016-1455594585.jpg', '2016-01-25', '2017-01-25', 'Active'),
(26, 'css', '\r\n    CSS stands for Cascading Style Sheets\r\n    CSS describes how HTML elements are to be displayed on screen, paper, or in other media\r\n    CSS saves a lot of work. It can control the layout of multiple web pages all at once\r\n    External stylesheets are stored in CSS files\r\n', '25-01-2016-1453709949.jpeg', '2016-01-25', '2017-01-25', 'Active'),
(34, 'Laravel', 'Laravel is a free, open-source PHP web application framework, created by Taylor Otwell and intended for the development of web applications following the modelâ€“viewâ€“controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar', '05-02-2016-1454673281.png', '2016-02-05', '2017-02-05', 'Active'),
(35, 'Mysql', 'MySQL AB was a software company that was founded in 1995. It was acquired by Sun Microsystems in 2008; Sun was in turn acquired by Oracle Corporation in 2010. MySQL AB is the creator of MySQL, a relational database management system, as well as related products such as MySQL Cluster. The company was dually headquartered in Uppsala, Sweden and Cupertino, California with offices in other countries (Paris, Munich, Dublin, Milan, and Tokyo).', '05-02-2016-1454673346.png', '2016-02-05', '2017-02-05', 'Active'),
(36, 'Javascript', 'JavaScript is a high-level, dynamic, untyped, and interpreted programming language. It has been standardized in the ECMAScript language specification. Alongside HTML and CSS, it is one of the three essential technologies of World Wide Web content production; the majority of websites employ it and it is supported by all modern Web browsers without plug-ins. JavaScript is prototype-based with first-class functions, making it a multi-paradigm language, supporting object-oriented, imperative, and functional programming styles. It has an API for working with text, arrays, dates and regular expressions, but does not include any I/O, such as networking, storage, or graphics facilities, relying for these upon the host environment in which it is embedded.', '05-02-2016-1454673416.png', '2016-02-05', '2017-02-05', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `comment`, `user_id`, `article_id`) VALUES
(2, 'sfdsfs', 2, 1),
(3, 'sfjsdfjsjfsfjsdfjsfjsfosdfjsofjsjsjsjsd', 2, 1),
(4, 'dsfrgrf', 2, 1),
(5, 'dsfrgrf', 2, 1),
(6, 'qweqweqweqweqw', 2, 1),
(7, '131231231dfsdfsdfss xcvxfsf s sfsfsfs s sf sd', 3, 1),
(8, 'asdsfsdfdd', 3, 1),
(9, 'asdsfsdfdd', 3, 1),
(10, 'aedfsed', 3, 1),
(11, 'dfgtdrtf', 3, 1),
(12, 'hello', 3, 1),
(13, 'A database is a collection of information tha', 3, 1),
(14, 'A database is a collection of information that is organized so that it can easily be accessed, managed, and updated. In one view, databases can be classified according to types of content: bibliographic, full-text, numeric, and images. ', 3, 1),
(15, 'dew', 2, 1),
(16, 'ewdew', 2, 1),
(17, 'xfgf', 2, 25),
(18, 'asdasdasdasd', 2, 25),
(19, 'test comment', 3, 28),
(20, 'asdasdasdas', 3, 26),
(21, 'ASDASDASDASD', 3, 31),
(22, 'asdasd', 3, 31),
(23, 'dsfsfsdf', 3, 33),
(24, 'fsdfsf', 3, 33),
(27, 'fsdfsdf', 3, 25),
(28, 'fsdfsdf', 3, 25),
(29, 'fsdfsdf', 3, 25),
(30, 'dfgdfgdfg', 3, 36),
(31, 'dfgdfgdfg', 3, 36),
(32, 'dfsdfsdf', 1, 36),
(33, 'shalin', 1, 36),
(34, 'asdasddas', 3, 36),
(35, 'asdasdasd', NULL, 36),
(36, 'asdasd', NULL, 36),
(37, 'sdasdasdaqweqwe', NULL, 36),
(38, 'adasdasdasdasd123123123', 2, 36),
(39, 'wqeweqweqweqweqweqweqw', NULL, 36);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(250) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `remember_token`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$3bMSzbc2UhRuVTKT/YKm/emzlzDAfAKf8lxBM4raTluImsObor3Oq', '0kfSFXoWr8egMBqKCimyb5fwSwTE0TLqpOHCkIrp7czo9gU6xHNpniXl9Rcc', '2016-02-12 10:34:23'),
(2, 'shalin@gmail.com', '$2y$10$3bMSzbc2UhRuVTKT/YKm/emzlzDAfAKf8lxBM4raTluImsObor3Oq', '92ik9MAzFvJnAV5yyVhWDp0XNNivoZGaPR861HNMv1dCBSlWvochWtQ58RT1', '0000-00-00 00:00:00'),
(3, 'shalin.jasani@arsenaltech.com', '$2y$10$3bMSzbc2UhRuVTKT/YKm/emzlzDAfAKf8lxBM4raTluImsObor3Oq', '389ApDnpUSyxCsICC5YFHUDuarYCNsj8P59VCGi5ZAh16uJ9vjID1ogUWH3o', '2016-02-12 09:23:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comnt_login_idx` (`user_id`),
  ADD KEY `fk_comnt_blog_idx` (`article_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
