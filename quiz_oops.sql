-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 06:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_oops`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'php'),
(2, 'c'),
(3, 'python'),
(5, 'sql');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, 'What does PHP stands for..', 'personal home page', 'priority home page', 'personal hypertext page', 'none of them', 0, 1),
(2, 'How we declare the variable in PHP?', 'int a;\r\n', '%int a;', '$a;', 'int $a;', 2, 1),
(3, 'PHP is .........language.', 'client side', 'server side', 'markup language', 'none of them', 1, 1),
(4, 'foreach loop is used for..', 'to extract data from database in linklist formate', 'to extract data from database in array formate', 'to show the details in web page', 'none of them', 2, 1),
(5, '\"...\" is used to show the ______tags in PHP code.', 'JQuery', 'JAVA_Script', 'CSS', 'HTML', 3, 1),
(6, 'C is the_______language.', 'interface', 'Machine level ', 'High level ', 'Low level ', 1, 2),
(7, 'Which function is used to accept the value from user in c?', 'printf();', 'print();', 'scanf;', 'scanf();', 3, 2),
(8, 'which is the correct expression for \"for loop\" in c?', 'for(i++;i<10;i=0)', 'for(i<10;i=1;i++)', 'for(i=0;i<10;i++){\r\n}', 'none of them', 2, 2),
(9, 'int a=10;\r\nprintf(\"the value of a:%d\");\r\n\r\nwhat is the output of this code.', '10;', 'the value of a:10', 'a:10', 'error', 3, 2),
(10, 'which expression is correct..', 'for(i;i<10;i++)', 'for(;i<10;i++)', 'for(;;i<10)', 'none of them', 0, 2),
(11, 'from random import random\r\nfor i in range()5;\r\n  print(random())\r\nwhat type of error will accrued?\r\n', 'indentation error', 'prototype eroor', 'missing element error', 'none of them', 0, 51),
(12, 'how to take input from user in python', 'input(\"enter a number\")', 'input(enter number)', 'input(\"enter a number\");', 'None of them', 2, 3),
(13, 'from which the developer of python is takes the of \"python \" of language', 'comedy film', 'horror film', 'romantic film', 'none of them', 0, 3),
(14, 'pyhton meaning is..', 'mouse', 'coffee cup', 'snake', 'mangoes', 1, 3),
(15, 'how to import the code in python', 'import programme maths.pi', 'import math as m ', 'import m', 'math import', 1, 3),
(16, 'what does SQL is stands for..', 'share query language', 'structure question language', 'structure query language', 'structure query line', 2, 5),
(17, 'how many subsection of SQL', 'THREE', 'twoo', 'four', 'five', 0, 5),
(18, 'what query is used to remove database?', 'drop Database product;', 'delete  Database product;', 'remove database product', 'none of them', 0, 5),
(19, 'DML is stands for..', 'data merquery language', 'data manipulation language', 'data manageable language', 'data manificient language', 2, 5),
(20, 'which query statement is used delete the tabl..', 'DELETE product', 'drop table product;', 'DELETE Table product;', 'remove table product', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(31) NOT NULL,
  `email` varchar(31) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(2, 'shivani', 'shibusk99914031@gmail.com', '12345', 'shivani.jpeg'),
(3, 'deepak', 'shibusk99914031@gmail.com', '12345', 'shivani.jpeg'),
(4, 'saloni', 'saloni@gmail.com', '12345', 'bg.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
