-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-12-16 03:47:03
-- サーバのバージョン： 10.4.14-MariaDB
-- PHP のバージョン: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `dictionary`
--
CREATE DATABASE IF NOT EXISTS `dictionary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dictionary`;

-- --------------------------------------------------------

--
-- テーブルの構造 `tango`
--

CREATE TABLE `tango` (
  `id` int(11) NOT NULL,
  `japanese` varchar(50) NOT NULL,
  `english` varchar(50) NOT NULL,
  `russian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `tango`
--

INSERT INTO `tango` (`id`, `japanese`, `english`, `russian`) VALUES
(1, 'りんご', 'apple', 'яблоко'),
(2, 'ぶどう', 'grape', 'Виноград'),
(3, '学生', 'student', 'студент'),
(4, '水', 'water', 'вода'),
(5, '教師', 'teacher', 'учитель'),
(6, '牛', 'cow', 'корова'),
(7, '辞書', 'dictionary', 'толковый словарь'),
(8, 'オレンジ', 'orange', 'апельсин'),
(9, '狩人', 'hunter', 'охотник'),
(10, '勉強する', 'study', 'изучение'),
(11, '学生', 'student', 'студент'),
(12, '学ぶ', 'learn', 'учиться'),
(13, '教える', 'teach', 'учат'),
(14, '朝日', 'sun', 'солнце'),
(15, '寒い', 'cold', 'холодно'),
(16, '暖かい', 'warm', 'теплый'),
(17, '腹立つ', 'angry', 'сердитый'),
(18, '鳥', 'bird', 'птица'),
(19, 'すいか', 'watermelon', 'арбуз'),
(20, '指', 'finger', 'Палец'),
(21, '頭', 'head', 'голова'),
(22, '動物園', 'zoo', 'зоопарк'),
(23, '足', 'foot', 'фут'),
(24, '集団', 'group', 'группа'),
(25, '働く', 'work', 'Работа'),
(26, '動向', 'trend', 'тенденция'),
(27, '探索', 'search', 'поиск'),
(28, 'もも', 'peach', 'персик'),
(29, '写真', 'photo', 'Фото'),
(30, '単語', 'word', 'слово'),
(31, '長靴', 'boot', 'ботинок'),
(32, '飛ぶ', 'fly', 'летать'),
(33, '魚', 'fish', 'рыбы'),
(34, '時計', 'clock', 'Часы'),
(35, '車', 'car', 'автомобиль'),
(36, '犬', 'dog', 'собака'),
(37, '鉛筆', 'pencil', 'карандаш'),
(38, '木', 'tree', 'дерево'),
(39, '回転', 'turn', 'перемена'),
(40, '左', 'left', 'слева'),
(41, '右', 'right', 'правильно'),
(42, '心臓', 'heart', 'сердце');
--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `tango`
--
ALTER TABLE `tango`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
