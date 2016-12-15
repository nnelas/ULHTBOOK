-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 15-Dez-2016 às 11:11
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ULHTBOOK_8`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_a` int(11) NOT NULL DEFAULT '0',
  `user_b` int(11) NOT NULL DEFAULT '0',
  `friend_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `friends`
--

INSERT INTO `friends` (`id`, `user_a`, `user_b`, `friend_type`) VALUES
(1, 2, 3, 'friend');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `datebirthday` text NOT NULL,
  `hometown` text NOT NULL,
  `school` text NOT NULL,
  `urlpic` text NOT NULL,
  `datereg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `name`, `email`, `datebirthday`, `hometown`, `school`, `urlpic`, `datereg`) VALUES
(1, 'admin', 'admin', 'Administrador', '', '', '', '', '', '2016-12-14'),
(2, 'nunonelas', 'nunonelas', 'Nuno Nelas', '', '1995-07-26', 'Sacavem', 'Universidade Lusofona de Humanidades e Tecnologias', 'https://scontent.flis6-1.fna.fbcdn.net/v/t1.0-9/14494887_1287194794637684_8866843434364589308_n.jpg?oh=6a82e52ab437dec2294ef2965cdbc00a&oe=58B605FC', '2016-12-14'),
(3, 'jorgeloureiro', 'jorgeloureiro', 'Jorge Loureiro', '', '1996-10-25', 'Vila Franca de Xira', 'Universidade Lusofona de Humanidades e Tecnologias', 'https://scontent.flis6-1.fna.fbcdn.net/v/t1.0-9/13124686_1061366347267303_9117273829400434009_n.jpg?oh=a113fbfa2b03545a3664a1e4c23d5223&oe=58B1DCC3', '2016-12-14'),
(4, 'nunocoelho', 'nunocoelho', 'Nuno Coelho', '', '1995-03-11', 'Lisboa', 'Universidade Lusofona de Humanidades e Tecnologias', 'https://scontent.flis6-1.fna.fbcdn.net/v/t1.0-9/10426135_700458536690318_6186350579245602161_n.jpg?oh=ff372d7f06d75d16ee5bf867fe03df76&oe=58F701EC', '2016-12-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
