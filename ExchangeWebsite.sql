-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2021 年 04 月 24 日 00:29
-- 伺服器版本： 8.0.22-0ubuntu0.20.04.3
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ExchangeWebsite`
--

-- --------------------------------------------------------

--
-- 資料表結構 `User_info`
--

CREATE TABLE `User_info` (
  `User_No` int NOT NULL,
  `User_ID` varchar(200) NOT NULL,
  `User_password` varchar(200) NOT NULL,
  `Create_Time` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `User_info`
--

INSERT INTO `User_info` (`User_No`, `User_ID`, `User_password`, `Create_Time`) VALUES
(1, 'Ben_123', 'Password123', 1619245592);

-- --------------------------------------------------------

--
-- 資料表結構 `User_record`
--

CREATE TABLE `User_record` (
  `User_No` int NOT NULL,
  `value` varchar(30) NOT NULL,
  `time` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `User_setting`
--

CREATE TABLE `User_setting` (
  `User_No` int NOT NULL,
  `First_select` varchar(5) NOT NULL,
  `Second_select` varchar(5) NOT NULL,
  `Third_select` varchar(5) NOT NULL,
  `fourth_select` varchar(5) NOT NULL,
  `five_select` varchar(5) NOT NULL,
  `six_select` varchar(5) NOT NULL,
  `seven_select` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
