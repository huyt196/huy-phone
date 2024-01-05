-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 11:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `created` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(5) DEFAULT NULL,
  `ordering` int(10) DEFAULT NULL,
  `category_phone_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `description`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `category_phone_id`) VALUES
(1, 'Sợi Bamboo là gì? Tại sao Áo Sơ Mi sợi Bamboo lại được ưa chuộng như vậy', 'Sợi bamboo hay còn gọi là sợi tre,có thành phần chủ yếu từ cây tre, tre được biết đến là loại cây dễ trồng, sinh trưởng nhanh, đặc biệt không cần phun thuốc hoá học khi trồng nên khi được sử dụng làm sợi thì loại sợi này được coi là sợi tương đối an toàn!', 'abc.jpg', NULL, '', '2024-01-02', 'admin', 0, 2, 4),
(2, 'Trung Quốc chỉ trích Hà Lan vì hạn chế xuất khẩu máy làm chip', 'Ông Uông đưa ra phát biểu khi được đề nghị bình luận về thông tin chính phủ Hà Lan đã thu hồi một phần giấy phép xuất khẩu máy quang khắc DUV của công ty ASML sang Trung Quốc. Động thái của Hà Lan được tiến hành sau khi chính phủ Mỹ năm ngoái công bố quy ', '8qg3cl16.png', '2024-01-02', 'admin', '2024-01-02', 'admin', 1, 2, 4),
(3, 'Triển lãm Tech Expo 2023 thu hút nghìn người tham dự', 'Triển lãm Tech Expo, nằm trong khuôn khổ chuỗi sự kiện Tech Awards 2023, bắt đầu diễn ra từ sáng 5/1 tại Trung tâm Hội chợ và Triển lãm Sài Gòn SECC, quận 7, TP HCM. Từ sáng sớm, sự kiện thu hút hàng trăm lượt khách tham quan. Tính đến trưa, lượng khách đ', '2jyt7rpd.jpg', '2024-01-05', 'admin', NULL, NULL, 1, 1, 4),
(4, 'Nhà máy sản xuất chip của Samsung có thể tự động hóa hoàn toàn', 'Cảm biến thông minh được thiết kế để đo tính đồng nhất của plasma trên tấm bán dẫn. Điều này đặc biệt quan trọng vì kết quả của quá trình sản xuất chất bán dẫn bị ảnh hưởng đáng kể bởi tính đồng nhất của plasma, nên việc quản lý và đo lường chính xác kết ', 'mez64t9r.jpg', '2024-01-05', 'admin', NULL, NULL, 1, 1, 4),
(5, 'Twitter mất hơn 70% giá trị sau khi về tay Musk', '\"Dòng tiền của chúng tôi vẫn âm do doanh thu quảng cáo giảm gần 50% cộng với gánh nặng nợ nần chồng chất\", ông viết trên X khi đó.\r\n\r\nĐỉnh điểm là vào tháng 11, khi các công ty lớn như Disney và IBM hủy hợp đồng do Musk đã tán thành một bài đăng chống Do ', 'yfmj75e0.jpg', '2024-01-05', 'admin', NULL, NULL, 1, 1, 4),
(6, 'Những nhân viên \'đi không được, ở không xong\' tại Amazon', 'Garrison nói ban lãnh đạo bắt đầu thiếu minh bạch về tương lai của anh từ giữa năm 2023. Khi CEO Amazon Andy Jassy công bố kế hoạch RTO, nhóm của Garrison và nhiều bộ phận khác được trấn an rằng họ sẽ không chịu ảnh hưởng. Công việc của Garrison luôn được', '4bqw9stm.jpg', '2024-01-05', 'admin', NULL, NULL, 1, 1, 4),
(7, 'Microsoft mang ứng dụng chat AI lên iPhone, iPad', 'Copilot là ứng dụng chat bằng AI của Microsoft và được hỗ trợ bởi công nghệ mới nhất từ OpenAI bao gồm GPT-4 và Dall-E 3. Chúng giúp phần mềm phản hồi nhanh, xử lý nội dung phức tạp và chính xác hơn cũng như khả năng tạo ra hình ảnh từ các mô tả bằng văn ', 'pdq8sm5f.jpg', '2024-01-05', 'admin', NULL, NULL, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `special` tinyint(1) DEFAULT 0,
  `sale_off` int(3) DEFAULT 0,
  `picture` text DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `description`, `price`, `special`, `sale_off`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `category_id`) VALUES
(12, 'UnrealScript Game Programming Cookbook', 'Designed for high-level game programming, UnrealScript is used in tandem with the Unreal Engine to provide a scripting language that is ideal for creating your very own unique gameplay experience. By learning how to replicate some of the advanced techniques used in today\'s modern games, you too can take your game to the next level and stand out from the crowd.\r\n\r\nBy providing a series of engaging and practical recipes, this \"UnrealScript Game Programming Cookbook\" will show you how to leverage the advanced functionality within UDK. You\'ll be shown how to implement a wide variety of practical features using the high-level scripting language ranging from designing your own HUD, creating your very own custom tailored weapons, to generating pathfinding solutions, and even meticulously crafting your own AI.', '25000', 0, 20, 'mj5oqp18.jpg', '2013-12-12', 'admin', '2013-12-25', 'admin', 1, 3, 4),
(13, 'Functional Programming in Scala', 'Functional programming (FP) is a programming style emphasizing functions that return consistent and predictable results regardless of a program\'s state. As a result, functional code is easier to test and reuse, simpler to parallelize, and less prone to bugs. Scala is an emerging JVM language that offers strong support for FP. Its familiar syntax and transparent interoperability with existing Java libraries make Scala a great place to start learning FP.\r\n\r\nFunctional Programming in Scala is a serious tutorial for programmers looking to learn FP and apply it to the everyday business of coding. The book guides readers from basic techniques to advanced topics in a logical, concise, and clear progression. In it, you\'ll find concrete examples and exercises that open up the world of functional programming.', '35000', 0, 3, '7kyub3oi.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 1, 1, 3),
(14, 'iOS 7 Programming Fundamentals', 'If you\'re getting started with iOS development, or want a firmer grasp of the basics, this practical guide provides a clear view of its fundamental building blocks—Objective-C, Xcode, and Cocoa Touch. You\'ll learn object-oriented concepts, understand how to use Apple\'s development tools, and discover how Cocoa provides the underlying functionality iOS apps need to have. Dozens of example projects are available at GitHub.\r\n\r\nOnce you master the fundamentals, you\'ll be ready to tackle the details of iOS app development with author Matt Neuburg\'s companion guide.', '45000', 0, 0, 'm3brd79l.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 2, 2),
(15, 'iOS 7 Programming Cookbook', 'Overcome the vexing issues you\'re likely to face when creating apps for the iPhone, iPad, or iPod touch. With new and thoroughly revised recipes in this updated cookbook, you\'ll quickly learn the steps necessary to work with the iOS 7 SDK, including solutions for bringing real-world physics and movement to your apps with UIKit Dynamics APIs.\r\n\r\nYou\'ll learn hundreds of techniques for storing and protecting data, sending and receiving notifications, enhancing and animating graphics, managing files and folders, and many other options. Each recipe includes sample code you can use right away.', '44000', 0, 0, 'qx5m9u6t.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 1, 3, 3),
(16, 'Advanced Programming in the UNIX Environment, 3rd Edition', 'For more than twenty years, serious C programmers have relied on one book for practical, in-depth knowledge of the programming interfaces that drive the UNIX and Linux kernels: W. Richard Stevens\' Advanced Programming in the UNIX Environment. Now, once again, Rich\'s colleague Steve Rago has thoroughly updated this classic work. The new third edition supports today\'s leading platforms, reflects new technical advances and best practices, and aligns with Version 4 of the Single UNIX Specification.\r\n\r\nSteve carefully retains the spirit and approach that have made this book so valuable. Building on Rich\'s pioneering work, he begins with files, directories, and processes, carefully laying the groundwork for more advanced techniques, such as signal handling and terminal I/O. He also thoroughly covers threads and multithreaded programming, and socket-based IPC.', '36000', 1, 2, '2yo48fgm.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 1, 3, 3),
(17, 'jMonkeyEngine 3.0 Beginner', 'jMonkeyEngine 3.0 is a powerful set of free Java libraries that allows you to unlock your imagination, create 3D games and stunning graphics. Using jMonkeyEngine\'s library of time-tested methods, this book will allow you to unlock its potential and make the creation of beautiful interactive 3D environments a breeze.\r\n\r\njMonkeyEngine 3.0 Beginner\'s Guide teaches aspiring game developers how to build modern 3D games with Java. This primer on 3D programming is packed with best practices, tips and tricks and loads of example code. Progressing from elementary concepts to advanced effects, budding game developers will have their first game up and running by the end of this book.', '36000', 0, 12, 'cq7k0i4j.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 3, 2),
(18, 'Scala Cookbook', 'Save time and trouble when using Scala to build object-oriented, functional, and concurrent applications. With more than 250 ready-to-use recipes and 700 code examples, this comprehensive cookbook covers the most common problems you\'ll encounter when using the Scala language, libraries, and tools. It\'s ideal not only for experienced Scala developers, but also for programmers learning to use this JVM language.\r\n\r\nAuthor Alvin Alexander (creator of DevDaily.com) provides solutions based on his experience using Scala for highly scalable, component-based applications that support concurrency and distribution.', '46000', 0, 0, 'zpg6a0uw.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 10, 4),
(19, 'PostgreSQL Server Programming', 'Learn how to work with PostgreSQL as if you spent the last decade working on it. PostgreSQL is capable of providing you with all of the options that you have in your favourite development language and then extending that right on to the database server. With this knowledge in hand, you will be able to respond to the current demand for advanced PostgreSQL skills in a lucrative and booming market.\r\n\r\nPostgreSQL Server Programming will show you that PostgreSQL is so much more than a database server. In fact, it could even be seen as an application development framework, with the added bonuses of transaction support, massive data storage, journaling, recovery and a host of other features that the PostgreSQL engine provides.', '54000', 0, 5, 'x3et42jv.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 3, 2),
(20, 'Programming Drupal 7 Entities', 'Writing code for manipulating Drupal data has never been easier! Learn to dice and serve your data as you slowly peel back the layers of the Drupal entity onion. Next, expose your legacy local and remote data to take full advantage of Drupal\'s vast solution space.\r\n\r\nProgramming Drupal 7 Entities is a practical, hands-on guide that provides you with a thorough knowledge of Drupal\'s entity paradigm and a number of clear step-by-step exercises, which will help you take advantage of the real power that is available when developing using entities.', '58000', 0, 4, 'zosatu07.jpg', '2013-12-12', 'admin', '2023-11-23', 'admin', 1, 3, 2),
(21, 'Moving from C to C++', 'The author says it best, I hope to move you, a little at a time,from understanding C to the point where C++ becomes your mindset. This remarkable book is designed to streamline the process of learning C++ in a way that discusses programming problems, why they exist, and the approach C++ has taken to solve such problems.\r\n\r\nYou can\'t just look at C++ as a collection of features; some of the features make no sense in isolation. You can only use the sum of the parts if you are thinking about design, not simply coding. To understand C++, you must understand the problems with C and with programming in general. This book discusses programming problems, why they are problems, and the approach C++ has taken to solve such problems. Thus, the set of features that I explain in each chapter will be based on the way that I see a particular type of problem being solved in C++.', '36000', 0, 3, '901wh8tx.jpg', '2013-12-12', 'admin', '2023-11-23', 'admin', 1, 3, 2),
(22, 'C Programming for Arduino', 'Physical computing allows us to build interactive physical systems by using software & hardware in order to sense and respond to the real world. C Programming for Arduino will show you how to harness powerful capabilities like sensing, feedbacks, programming and even wiring and developing your own autonomous systems.\r\n\r\nC Programming for Arduino contains everything you need to directly start wiring and coding your own electronic project. You\'ll learn C and how to code several types of firmware for your Arduino, and then move on to design small typical systems to understand how handling buttons, leds, LCD, network modules and much more.', '38000', 0, 0, 'siochmyg.jpg', '2013-12-12', 'admin', '2023-11-23', 'admin', 1, 2, 3),
(23, 'Advanced Network Programming - Principles and Techniques', 'The field of network programming is so large, and developing so rapidly, that it can appear almost overwhelming to those new to the discipline.\r\n\r\nAnswering the need for an accessible overview of the field, this text/reference presents a manageable introduction to both the theoretical and practical aspects of computer networks and network programming. Clearly structured and easy to follow, the book describes cutting-edge developments in network architectures, communication protocols, and programming techniques and models, supported by code examples for hands-on practice with creating network-based applications.', '43000', 1, 20, 'vradhky9.jpg', '2013-12-12', 'admin', '2023-11-23', 'admin', 1, 3, 3),
(24, 'Programming Logics', 'This Festschrift volume, published in memory of Harald Ganzinger, contains 17 papers from colleagues all over the world and covers all the fields to which Harald Ganzinger dedicated his work during his academic career.\r\n\r\nThe volume begins with a complete account of Harald Ganzinger\'s work and then turns its focus to the research of his former colleagues, students, and friends who pay tribute to him through their writing. Their individual papers span a broad range of topics, including programming language semantics, analysis and verification, first-order and higher-order theorem proving, unification theory, non-classical logics, reasoning modulo theories, and applications of automated reasoning in biology.', '32000', 0, 1, 'sbx52yne.jpg', '2013-12-12', 'admin', '2023-12-08', 'admin', 1, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `books` text NOT NULL,
  `prices` text NOT NULL,
  `quantities` text NOT NULL,
  `names` text NOT NULL,
  `pictures` text NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `books`, `prices`, `quantities`, `names`, `pictures`, `status`, `date`) VALUES
('AQnv7mB', 'admin', '[\"13\"]', '[\"33950\"]', '[\"1\"]', '[\"Functional Programming in Scala\"]', '[\"7kyub3oi.jpg\"]', 0, '2023-12-27 13:20:45'),
('ePfD6au', 'admin', '[\"13\",\"19\"]', '[\"33950\",\"51300\"]', '[\"1\",\"1\"]', '[\"Functional Programming in Scala\",\"PostgreSQL Server Programming\"]', '[\"7kyub3oi.jpg\",\"x3et42jv.jpg\"]', 0, '2013-12-18 11:20:51'),
('GoFw4UN', 'admin', '[\"13\",\"24\",\"16\",\"23\"]', '[\"33950\",\"31680\",\"35280\",\"34400\"]', '[\"2\",\"3\",\"3\",\"1\"]', '[\"Functional Programming in Scala\",\"Programming Logics\",\"Advanced Programming in the UNIX Environment, 3rd Edition\",\"Advanced Network Programming - Principles and Techniques\"]', '[\"7kyub3oi.jpg\",\"sbx52yne.jpg\",\"2yo48fgm.jpg\",\"vradhky9.jpg\"]', 0, '2013-12-25 06:41:06'),
('iKYZHlr', 'admin', '[\"13\",\"24\",\"16\"]', '[\"33950\",\"31680\",\"35280\"]', '[\"1\",\"2\",\"2\"]', '[\"Functional Programming in Scala\",\"Programming Logics\",\"Advanced Programming in the UNIX Environment, 3rd Edition\"]', '[\"7kyub3oi.jpg\",\"sbx52yne.jpg\",\"2yo48fgm.jpg\"]', 0, '2013-12-18 06:04:48'),
('pVRyqlQ', 'admin', '[\"13\",\"16\"]', '[\"33950\",\"35280\"]', '[\"1\",\"1\"]', '[\"Functional Programming in Scala\",\"Advanced Programming in the UNIX Environment, 3rd Edition\"]', '[\"7kyub3oi.jpg\",\"2yo48fgm.jpg\"]', 0, '2023-11-23 08:46:07'),
('QlxcASP', 'admin', '[\"16\"]', '[\"35280\"]', '[\"1\"]', '[\"Advanced Programming in the UNIX Environment, 3rd Edition\"]', '[\"2yo48fgm.jpg\"]', 0, '2023-12-27 13:03:12'),
('RAxfemG', 'admin', '[\"13\"]', '[\"33950\"]', '[\"1\"]', '[\"Functional Programming in Scala\"]', '[\"7kyub3oi.jpg\"]', 0, '2023-12-27 13:03:34'),
('tAi43sb', 'admin', '[\"13\"]', '[\"33950\"]', '[\"1\"]', '[\"Functional Programming in Scala\"]', '[\"7kyub3oi.jpg\"]', 0, '2023-11-23 08:45:43'),
('zdebsc3', 'admin', '[\"13\"]', '[\"33950\"]', '[\"1\"]', '[\"Functional Programming in Scala\"]', '[\"7kyub3oi.jpg\"]', 0, '2013-12-18 06:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` text DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(1, 'Văn Học - Tiểu Thuyết', 'hft8q1c3.jpg', '2013-12-09', 'admin', '2023-12-08', 'admin', 0, 10),
(2, 'Kinh Tế', '3snfyg8u.jpg', '2013-12-09', 'admin', '2013-12-21', 'admin', 1, 4),
(3, 'Tin học', 'zahorwby.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 10),
(4, ' Kỹ Năng Sống', 'bntdur5l.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 1),
(5, 'Thiếu Nhi', 'kt5h9ica.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 10),
(6, ' Thường Thức - Đời Sống', 'tv8basyz.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 2),
(7, 'Ngoại Ngữ - Từ Điển', 'zruvqadp.jpg', '2013-12-09', 'admin', '2023-12-08', 'admin', 0, 5),
(8, 'Truyện Tranh', '5hd9kq6s.jpeg', '2013-12-09', 'admin', '2023-11-23', 'admin', 1, 10),
(9, ' Văn Hoá - Nghệ Thuật', 'btkjrfal.jpg', '2013-12-06', 'admin', '2023-12-08', 'admin', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categoryphone`
--

CREATE TABLE `categoryphone` (
  `id` int(50) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modified` date NOT NULL,
  `modified_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(10) NOT NULL,
  `ordering` int(10) NOT NULL,
  `menu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoryphone`
--

INSERT INTO `categoryphone` (`id`, `name`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `menu_id`) VALUES
(1, 'Iphone', 'xun8mjy6.png', '2023-12-20', 'admin', '2024-01-05', 'admin', 1, 1, 3),
(2, 'samsung', 'f9whz15l.jpg', '2023-12-20', 'admin', '2024-01-05', 'admin', 1, 1, 3),
(3, 'phụ kiện Apple', 'oq5j9w6z.png', '2023-12-31', 'admin', '2024-01-05', 'admin', 1, 1, 4),
(4, 'cong nghe', 'w56dlupj.jpg', '2024-01-05', 'admin', '2024-01-05', 'admin', 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modified` date NOT NULL,
  `modified_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `ordering` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `phone`, `title`, `content`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(1, 'nguyen quang huy', 'nquanghuy@mail.com', '982605974', 'lam theo ten', 'có việc gì khó khăn', '2023-11-01', 'admin', '2023-12-08', 'admin', 1, 2),
(2, 'minh hoang', 'hoang@gmail.com', '982605974', 'toi han', 'có gì mà làm', '2023-11-02', 'admin', '2023-12-08', 'admin', 1, 2),
(3, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'adadad', 'asasasasa', '2023-12-30', 'zomhuygunz1@gmail.com', '0000-00-00', '', 0, 1),
(4, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'adadad', 'asasasasa', '2023-12-30', 'zomhuygunz1@gmail.com', '0000-00-00', '', 0, 1),
(5, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'adadad', 'asasasasa', '2023-12-30', 'zomhuygunz1@gmail.com', '0000-00-00', '', 0, 1),
(6, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'adadad', 'asasasasa', '2023-12-30', 'zomhuygunz1@gmail.com', '0000-00-00', '', 0, 1),
(7, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'adadad', 'asasasasa', '2023-12-30', 'zomhuygunz1@gmail.com', '0000-00-00', '', 0, 1),
(8, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'adadad', 'asasasasa', '2023-12-30', 'zomhuygunz1@gmail.com', '0000-00-00', '', 0, 1),
(9, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'adadad', 'asasasasa', '2023-12-30', 'zomhuygunz1@gmail.com', '0000-00-00', '', 0, 1),
(10, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'adadad', 'asasasasa', '2023-12-30', 'zomhuygunz1@gmail.com', '0000-00-00', '', 0, 1),
(11, 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'Gửi lại lần 2', 'Gửi lại lần 2 abc', '2023-12-30', 'zomhuygunz1@gmail.com', '2023-12-31', 'admin', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `star` int(11) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` date DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `name`, `work`, `star`, `avatar`, `content`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(2, 'Nguyen Van B', 'Lap trinh vien BackEnd', 5, 'isdnxpbj.png', 'Nhân viên ở đây thân thiện, nhiệt tình', '2023-11-28', 'admin@gmail.com', '2023-12-10', 'admin', 0, 3),
(6, 'nguyễn Quang Huy', 'Nguoi mau, dien vien', 5, 'j3x7ks5u.jpg', 'vừa mới ghé qua để bảo hành con 13 pro max bị lỗi face id, nhân viên làm việc nhiệt tình, vui vẻ và thân mến.', '2023-11-28', 'admin@gmail.com', '2023-12-10', 'admin', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(50) NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL,
  `ordering` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(19, 'Ứng dụng di động Payoneer được hỗ trợ trên thiết bị nào?', 'Ứng dụng di động Payoneer hiện được hỗ trợ trên các thiết bị iOS và Android. Bạn có thể sử dụng các liên kết này để tải ứng dụng cho thiết bị của mình: iOS, Android.', '2023-12-13', 'admin', NULL, NULL, 1, 1),
(20, 'Tôi có thể thực hiện những thao tác nào với ứng dụng di động?', 'Ứng dụng di động Payoneer cho phép bạn dễ dàng quản lý tài khoản Payoneer của mình mọi lúc mọi nơi. Bạn có thể nhanh chóng kiểm tra tất cả số dư tài khoản hoặc thẻ, cũng như các giao dịch mới nhất của bạn, từ trang chủ của ứng dụng.', '2023-12-13', 'admin', NULL, NULL, 1, 2),
(21, 'Làm cách nào để xem chi tiết và giao dịch cho một số dư cụ thể?', 'Từ Trang chủ, bấm vào bất kỳ tài khoản số dư nào của bạn để xem chi tiết số dư và các giao dịch mới nhất cho số dư đó. Để xem tất cả các giao dịch cho một số dư cụ thể, hãy nhấn Giao dịch trong menu và lọc theo số dư mong muốn.', '2023-12-13', 'admin', NULL, NULL, 0, 1),
(22, 'Ứng dụng di động có hỗ trợ phương thức đăng nhập an toàn, bằng vân tay không?', 'Có! Bạn có thể đăng nhập nhanh chóng và an toàn bằng Touch ID trên thiết bị iOS hoặc sử dụng phương thức đăng nhập bằng vân tay trên thiết bị Android. Bạn có thể thiết lập Touch ID hoặc đăng nhập bằng vân tay bằng cách chọn Đăng nhập nhanh từ menu Cài đặt', '2023-12-13', 'admin', NULL, NULL, 1, 2),
(23, 'Ứng dụng di động có hỗ trợ thông báo đẩy không?', 'Có! Chúng tôi sẽ gửi thông báo đẩy đến thiết bị di động của bạn để thông báo cho bạn về các khoản thanh toán đến từ khách hàng và thị trường, cũng như các khoản tiền rút về tài khoản ngân hàng của bạn. Và chúng tôi vẫn đang không ngừng làm việc để thêm nh', '2023-12-13', 'admin', NULL, NULL, 0, 2),
(24, 'Nếu tôi muốn đăng nhập với tư cách người dùng khác, làm cách nào để tôi chuyển đổi tài khoản?', 'Để chuyển đổi tài khoản, trước tiên hãy đăng xuất (từ trang Cài đặt). Sau đó nhấn vào biểu tượng tùy chọn (ba dấu chấm) ở đầu màn hình đăng nhập và chọn Chuyển tài khoản. Đăng nhập lại với tên người dùng mong muốn.', '2023-12-13', 'admin', NULL, NULL, 0, 2),
(25, 'Tôi có thể rút về tài khoản ngân hàng của mình từ ứng dụng di động không?', 'Hiện tại thao tác rút tiền về ngân hàng chưa thể thực hiện được trên ứng dụng. Chúng tôi đang nỗ lực để cung cấp chức năng bổ sung trong các phiên bản sắp tới.', '2023-12-13', 'admin', '2023-12-21', 'admin', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `group_acp` tinyint(1) DEFAULT 0,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(45) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `privilege_id` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `group_acp`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `privilege_id`, `picture`) VALUES
(1, 'Admin', 1, '2013-11-11', 'admin', '2023-11-23', 'admin', 1, 5, '1,2,3,4,5,6,7,8,9,10', ''),
(2, 'Manager', 1, '2013-11-07', 'admin', '2023-12-21', 'admin', 0, 4, '1,2,3,4,6,7,8,9,10', ''),
(3, 'Member', 0, '2013-11-12', 'admin', '2023-11-23', 'admin', 1, 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(10) NOT NULL,
  `created` date DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordering` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `status`, `created`, `created_by`, `modified`, `modified_by`, `ordering`) VALUES
(1, 'Trang chủ', 1, '2023-12-21', 'admin', '2023-12-21', 'admin', 2),
(2, 'Giới thiệu', 1, '2023-12-21', 'admin', '2023-12-21', 'admin', 1),
(3, 'Bộ sưu tập', 1, '2023-12-21', 'admin', NULL, NULL, 1),
(4, 'Phụ kiện', 1, '2023-12-21', 'admin', NULL, NULL, 1),
(5, 'Blog', 1, '2023-12-21', 'admin', NULL, NULL, 1),
(6, 'Faq', 1, '2023-12-21', 'admin', NULL, NULL, 1),
(7, 'Liên Hệ', 1, '2023-12-21', 'admin', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` varchar(255) DEFAULT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Note` text NOT NULL,
  `OrderDate` datetime DEFAULT NULL,
  `TotalAmount` decimal(12,0) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `Fullname`, `Email`, `PhoneNumber`, `Address`, `Note`, `OrderDate`, `TotalAmount`, `Status`) VALUES
(13, 'S5U49X0VFA', 'Nguyễn huy', 'zomhuygunz1@gmail.com', '0379511465', 'Bình Đại', 'aasasa', '2023-12-30 12:08:47', '4990000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ID` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Price` decimal(12,0) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Subtotal` decimal(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`ID`, `OrderID`, `ProductID`, `Price`, `Quantity`, `Subtotal`) VALUES
(13, 13, 16, '4990000', 1, '4990000');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`, `status`) VALUES
(1, 'Chờ xác nhận', 1),
(2, 'Đã đóng gói', 1),
(3, 'Đang vận chuyển', 1),
(4, 'Đang giao hàng', 1),
(5, 'Thành công', 1),
(6, 'Đã hủy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(50) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `special` tinyint(1) DEFAULT NULL,
  `sale_off` int(3) DEFAULT NULL,
  `picture` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` date DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `ordering` int(10) DEFAULT 10,
  `category_phone_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `name`, `description`, `price`, `special`, `sale_off`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `category_phone_id`) VALUES
(1, 'Iphone 15 Pro Max', 'iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạ', '3400000', 1, 3300000, 'iphone15pm.jpg', '2023-12-08', 'admin', '2023-12-31', 'admin', 1, 1, 1),
(2, 'SamSung S22 Utral', 'Samsung Galaxy S23 Ultra 5G 512GB là một sản phẩm công nghệ không còn xa lạ với những người yêu công nghệ. Máy vừa được giới thiệu với nhiều tính năng và công nghệ nổi bật, đánh dấu một bước tiến đột phá của Samsung trong năm 2023, nhằm tạo nên một thương', '22000000', NULL, 21000000, '4fpwzkvq.jpg', '2023-12-08', 'admin', '2024-01-04', 'admin', 1, 1, 2),
(3, 'IPhone 12', 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.', '13590000', 1, 12590000, 'zmxk8fnp.jpg', '2023-12-08', 'admin', '2023-12-31', 'admin', 1, 1, 1),
(4, 'Iphone13 Pro Max', 'Con chip Apple A15 Bionic siêu mạnh được sản xuất trên quy trình 5 nm giúp iPhone 13 đạt hiệu năng ấn tượng, với CPU nhanh hơn 50%, GPU nhanh hơn 30% so với các đối thủ trong cùng phân khúc.', '23590000', NULL, 22590000, 'vzy0abgs.jpg', '2023-12-10', 'admin', '2024-01-04', 'admin', 1, 1, 1),
(5, 'Iphone 14', 'Con chip Apple A15 Bionic siêu mạnh được sản xuất trên quy trình 5 nm giúp iPhone 14 đạt hiệu năng ấn tượng, với CPU nhanh hơn 50%, GPU nhanh hơn 30% so với các đối thủ trong cùng phân khúc.', '18590000', 1, 19590000, '5d6kac7h.jpg', '2023-12-10', 'admin', '2024-01-04', 'admin', 1, 1, 1),
(6, 'Iphone12 Pro Max', 'Năm nay, công nghệ màn hình trên 12 Pro Max cũng được đổi mới và trang bị tốt hơn cùng kích thước lên đến 6.7 inch, lớn hơn so với điện thoại iPhone 12 thường. Với công nghệ màn hình OLED cho khả năng hiển thị hình ảnh lên đến 2778 x 1284 pixels. Bên cạnh', '23590000', 1, 24590000, '0ejuv5do.jpg', '2023-12-10', 'admin', '2024-01-04', 'admin', 1, 1, 1),
(7, 'Iphone 15', 'Với iPhone 15, bạn sẽ được tận hưởng những trải nghiệm cao cấp trên một thiết bị bền bỉ và thanh lịch. Sản phẩm gây ấn tượng với màn hình Dynamic Island, camera độ phân giải siêu cao cùng nhiều chế độ quay chụp xuất sắc. Nhờ cổng USB-C, trải nghiệm kết nố', '21590000', 1, 22590000, 'auscf6gh.jpg', '2023-12-10', 'admin', '2023-12-29', 'admin', 1, 1, 1),
(8, 'Samsung Galaxy A25', 'Giảm ngay 150.000đ khi mua kèm SIM số đẹp Vinaphone Happy - Ưu đãi 2GB Data/ngày - Miễn phí 1000 phút nội mạng.', '6690000', 1, 7690000, '4dwz35no.jpg', '2023-12-10', 'admin', '2023-12-29', 'admin', 1, 1, 2),
(9, 'Samsung Galaxy A04s ', 'Galaxy A04s ra mắt với màn hình 90Hz mượt mà nhất phân khúc cùng dung lượng pin khủng 5000mAh. Kết hợp với nhiều tính năng hấp dẫn, “hậu bối” nổi bật thuộc dòng điện thoại Galaxy A series này hứa hẹn sẽ thăng hạng trải nghiệm cho giới trẻ.', '3690000', NULL, 2690000, 'spzuhwml.jpg', '2023-12-10', 'admin', '2024-01-04', 'admin', 1, 2, 2),
(10, 'Samsung Galaxy A54 ', 'Điện thoại Galaxy A54 5G với màn hình Super AMOLED kích thước 6.4 inch và độ phân giải Full HD+ (1080 x 2340 pixels). Điều này giúp người dùng có trải nghiệm hình ảnh sống động, sắc nét.\r\n\r\nBên cạnh đó, màn hình của Galaxy A54 5G còn được trang bị tốc độ ', '11690000', 1, 9690000, 'ony6aljf.jpg', '2023-12-10', 'admin', '2023-12-31', 'admin', 1, 2, 2),
(11, 'Samsung Galaxy A34', 'Samsung Galaxy A34 5G đặc biệt ở chỗ sở hữu các phiên bản màu thời trang và trẻ trung. Bao gồm màu Đen, Xanh, Bạc điện thoại sẽ chắc chắn thu hút ánh nhìn của nhiều người. Đồng thời, máy cũng có viền bezel 2 cạnh được làm mỏng tối ưu, đem đến thiết kế đầy', '7690000', 1, 6690000, 'e7aou02y.jpg', '2023-12-10', 'admin', '2024-01-04', 'admin', 1, 2, 2),
(12, 'Samsung Galaxy A05', 'Samsung Galaxy A05 khoác lên mình vẻ ngoài vô cùng nổi bật với những đường nét bo cong nhẹ nhàng, tinh tế. Được trau chuốt kỹ lưỡng về mặt thiết kế cũng như rất chú trọng về độ bền của sản phẩm, chính vì vậy, toàn bộ khung viền của chiếc điện thoại thông ', '3690000', 1, 2690000, 'qcosvewi.jpg', '2023-12-10', 'admin', '2023-12-31', 'admin', 1, 1, 2),
(13, 'Samsung Galaxy S20 FE', 'Ngày nay, việc chụp ảnh, quay video và chia sẻ những “tác phẩm” của mình là cách tốt nhất để thể hiện cá tính riêng. Đó là lý do tại sao Galaxy S20 FE có camera selfie 32MP cải tiến và camera cấp chuyên nghiệp cho phép bạn chụp ngay những bức ảnh hoàn hảo', '8790000', 1, 6790000, 'mpkha0rs.jpg', '2023-12-10', 'admin', '2023-12-31', 'admin', 1, 1, 2),
(14, 'Samsung Galaxy A15', 'Vào dịp cuối năm 2023, Samsung tiếp tục mang đến cho người dùng mẫu điện thoại Samsung Galaxy A thế hệ mới, đây là phiên bản nâng cấp của Galaxy A14 với tên gọi Samsung Galaxy A15. Máy sở hữu phong cách thiết kế hiện đại, màn hình Super AMOLED sắc nét cùn', '6590000', 1, 5590000, 'uirwatcj.jpg', '2023-12-29', 'admin', '2024-01-04', 'admin', 1, 2, 2),
(15, ' Samsung Galaxy M54 5G', 'Phải công nhận một điều là các mẫu điện thoại Samsung Galaxy M đều mang trong mình một hiệu năng vượt trội và Galaxy M54 5G không phải là một ngoại lệ. Máy đã có sự nâng cấp so với người đàn anh của mình khi được trang bị con chip Exynos 1380 8 nhân đầy m', '11590000', 1, 10590000, '7imrnesd.jpg', '2023-12-29', 'admin', '2024-01-04', 'admin', 1, 2, 2),
(16, 'Samsung Galaxy A14', 'Samsung tiếp tục chứng tỏ sự nỗ lực của mình trong việc cải thiện dòng sản phẩm phân khúc cấp thấp trong năm 2023 bằng việc ra mắt mẫu smartphone Samsung Galaxy A14 4G. Với thiết kế độc đáo và hiện đại, sản phẩm này đáp ứng đầy đủ tiêu chí \"ngon - bổ - rẻ', '4990000', 1, 3990000, 'm59wkro4.jpg', '2023-12-29', 'admin', '2023-12-31', 'admin', 1, 2, 2),
(17, 'Samsung Galaxy S21 FE', 'Samsung Galaxy S21 FE 5G (6GB/128GB) được Samsung ra mắt với dáng dấp thời thượng, cấu hình khỏe, chụp ảnh đẹp với bộ 3 camera chất lượng, thời lượng pin đủ dùng hằng ngày và còn gì nữa? Mời bạn khám phá qua nội dung sau ngay.', '10590000', 1, 9590000, '5fdyl3wi.jpg', '2023-12-29', 'admin', '2023-12-31', 'admin', 1, 3, 2),
(18, 'Samsung Galaxy Z Flip5 5G', 'Samsung Galaxy Z Flip5 tiếp tục theo đuổi phong cách gập độc đáo đã trở thành thương hiệu của dòng sản phẩm \"Z Flip\". Với thiết kế nhỏ gọn và hình dáng hộp phấn khi gập lại, chiếc điện thoại này rất dễ dàng cất đi trong túi áo hoặc túi xách.\r\n\r\n', '20590000', 1, 19590000, '10pe4z8g.jpg', '2023-12-29', 'admin', '2023-12-31', 'admin', 1, 2, 2),
(19, 'Tai nghe AirPods Pro 2023 USB-C', 'AirPods Pro 2023 là một sản phẩm tai nghe true wireless được nâng cấp đáng kể so với phiên bản cũ. Các tính năng mới nổi bật như cổng sạc USB-C, khả năng chống nước IPX4, chất lượng âm thanh được cải thiện và chống ồn mạnh mẽ sẽ mang lại trải nghiệm tốt h', '6990000', NULL, 5990000, '1vsxlbwa.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 2, 3),
(20, ' Tai nghe EarPods 2023 USB-C', 'Tai nghe có dây Apple EarPods 2023 tự hào mang đến một kiểu dáng và thiết kế đặc biệt, phá cách so với những chiếc tai nghe truyền thống hình tròn mà chúng ta thường thấy. Sự độc đáo của EarPods chính là sự kết hợp tinh tế giữa công nghệ và hình dạng tự n', '649000', NULL, 549000, 'wznxqgs2.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 2, 3),
(21, 'Tai nghe AirPods Pro 2022', 'Thế hệ AirPods Pro 2 được cải tiến nhằm chuyên nghiệp hóa trải nghiệm người dùng theo cách trọn vẹn hơn. Sự hiện diện của chip H2 giúp sản phẩm xử lý âm thanh xuất sắc, những nâng cấp về kỹ nghệ chống ồn, công nghệ xuyên âm và thời lượng pin cho cảm nhận ', '6990000', NULL, 5990000, 'gelo4c8a.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 2, 3),
(22, 'Sạc dự phòng MagSafe Battery Pack', 'Ngoài ra, khi gắn MagSafe Battery Pack vào iPhone, bạn có thể nhanh chóng theo dõi mức pin còn lại của bộ sạc dự phòng trong widget Battery. Một tính năng nhỏ nhưng vô cùng tiện lợi, cho phép bạn biết lúc nào cần sạc lại phụ kiện của mình.', '3990000', NULL, 2990000, '3lwgxos1.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 2, 3),
(23, 'Dây sạc Apple Magsafe Charger to USB-C Cable 1m', 'Phát huy công nghệ sạc được Apple sáng tạo và hỗ trợ trên các dòng iPhone thế hệ mới, bộ cáp sạc MagSafe Charger to USB-C tận dụng cơ chế từ tính độc đáo để tự động cố định chặt vào mặt lưng máy và truyền tải năng lượng nhanh chóng. Sự gọn nhẹ, tiện lợi c', '1990000', NULL, 590000, 'm5yxhiw2.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 2, 3),
(24, 'Tai nghe chụp tai Beats Studio3 Wireless', 'Với hàng loạt các tính năng như khử ồn chủ động Pure ANC, hiệu chỉnh âm thanh thời gian thực và thời lượng pin lên đến 22 giờ, Beats Studio3 chắc chắn sẽ là một chiếc tai nghe bluetooth hoàn hảo cho những người đang tìm kiếm trải nghiệm nghe cao cấp.', '6990000', NULL, 5990000, 'qg716mn8.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 2, 3),
(25, 'Tai nghe AirPods 3 2022 Hộp sạc dây', 'Phiên bản AirPods 3 hộp sạc dây đem đến lựa chọn với mức giá phải chăng và mô hình hoạt động quen thuộc khi chỉ hỗ trợ sạc cáp qua cổng Lightning. Ngoài ra, sản phẩm sở hữu mọi công nghệ tương tự như phiên bản AirPods 3 tiêu chuẩn, đem đến trải nghiệm đeo', '5990000', NULL, 4990000, 'syr6fmui.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 3),
(26, 'Cáp USB-C to Magsafe 3 Cable Apple 2m', 'Tương thích với: \r\n\r\nMacBook Air (M2, 2022)\r\nMacBook Pro (14‑inch, 2023)\r\nMacBook Pro (14‑inch, 2021)\r\nMacBook Pro (16‑inch, 2023)\r\nMacBook Pro (16‑inch, 2021)', '1190000', NULL, 1090000, '2i98npev.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 3),
(27, 'Củ sạc Apple Power Adapter 140W Type-C', 'Được sản xuất chính hãng bởi Apple, bộ sạc 140W USB-C Power Adapter ghi nhận khả năng sạc nhanh cho MacBook Pro 16 inch (2021) và nhiều sản phẩm nằm trong hệ sinh thái của Táo khuyết. Nhờ công nghệ điều tiết dòng điện thông minh, thiết bị này sẽ giúp bạn ', '3990000', NULL, 2990000, 'a853n2jl.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 3),
(28, 'Chuột Magic Mouse 2 2021', 'Bạn sẽ khó lòng tìm được sản phẩm chuột không dây nào có thiết kế tinh tế và thời trang hơn Magic Mouse 2 2021 trên thị trường. Sản phẩm sở hữu kiểu dáng đầy phong cách với bề mặt Multi-Touch cảm ứng, hỗ trợ thực hiện thao tác cử chỉ nhẹ nhàng. Với thời l', '2990000', NULL, 1990000, 'lscmhwg8.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 3),
(29, 'Dây Đeo AirTag Leather Key Ring', 'Dây đeo Leather Key Ring chính hãng Apple sẽ giúp bạn dễ dàng treo AirTag lên các vật dụng mình muốn để định vị khi cần. Đây là giải pháp chứa đựng và hỗ trợ sử dụng AirTag từ chính đội ngũ Apple, đồng thời cũng là cách để bạn biến thiết bị định vị của mì', '990000', NULL, 790000, '8has2xwn.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 3),
(30, 'Tai nghe AirPods Max', 'Là chiếc AirPods đầu tiên trong lịch sử Apple đi theo phong cách thiết kế over-ear chuyên dụng, AirPods Max đem tới sự cân bằng hoàn hảo giữa trải nghiệm âm thanh trung thực và tính tiện dụng đặc trưng của dòng tai nghe đến từ Táo khuyết.', '12990000', NULL, 11990000, '3huep6gj.png', '2023-12-31', 'admin', NULL, NULL, 1, 1, 3),
(31, 'Bao da iPad 10.2 & Air 3 10.5 inch Apple', 'Apple Smart Cover Cactus là bao da thông minh dành cho iPad 10.2 với màu xanh Cactus độc đáo, thiết kế mỏng nhẹ, khả năng bảo vệ hoàn hảo, tự động tắt/mở máy và dựng iPad với nhiều tư thế. Sản phẩm chính hãng từ Apple mang đến chất lượng và sự yên tâm tro', '1990000', NULL, 990000, 'vz24dphi.png', '2023-12-31', 'admin', NULL, NULL, 1, 1, 3),
(32, 'Vỏ Bút cảm ứng Apple Pencil Case', 'Ngoài phần vỏ da bọc lấy Apple Pencil phòng tránh hư hại, bộ Case Saddle Brown này còn có thêm một phần viền da bên ngoài tạo thành điểm tì trên mặt phẳng, tránh cho chiếc bút bị lăn đi khi đặt trên mặt bàn, từ đó hạn chế những trường hợp thất lạc ngoài ý', '690000', NULL, 590000, 'ln18rz94.jpg', '2023-12-31', 'admin', '2023-12-31', 'admin', 1, 1, 3),
(33, 'Dây đeo Apple Watch 44mm nylon Khaki', 'Sản phẩm chỉ là dây đeo bạn nha, không phải đồng hồ ạ. Thông tin của dây đã có trong mục thông số kỹ thuật trên web bạn nhé. Để được hỗ trợ chi tiết thêm bạn vui lòng để lại thông tin liên hệ (Tên, số điện thoại), bên mình sẽ chủ động liên hệ hỗ trợ cho b', '990000', NULL, 590000, '0geyx1w8.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 3),
(34, 'IPhone 14 Plus', 'Sau nhiều thế hệ điện thoại của Apple thì cái tên “Plus” cũng đã chính thức trở lại vào năm 2022 và xuất hiện trên chiếc iPhone 14 Plus 128GB, nổi trội với ngoại hình bắt trend cùng màn hình kích thước lớn để đem đến không gian hiển thị tốt hơn cùng cấu h', '21990000', NULL, 20990000, 'v853qi76.jpg', '2023-12-31', 'admin', '2023-12-31', 'admin', 1, 1, 1),
(35, 'iPhone 15', 'Dynamic Island là tên gọi của phần khuyết trên màn hình iPhone 15. Phần khuyết này có hình dạng giống như một viên thuốc, bao gồm camera TrueDepth và các cảm biến cần thiết cho các tính năng như Face ID và Animoji.', '22990000', NULL, 21990000, 'cs0tb7j6.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 1),
(36, 'iPhone 14 Pro ', 'Apple trong sự kiện ngày 8/9 đã giới thiệu đến người dùng mẫu iPhone 14 Pro 256GB mang những cải tiến về mặt thiết kế cũng như cấu hình phần cứng, hứa hẹn một sản phẩm mạnh mẽ đáp ứng mọi nhu cầu của bạn.', '22990000', NULL, 21990000, 't4fkqg69.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 1),
(37, ' iPhone 14 Pro Max', 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho ngư', '23990000', NULL, 21990000, 'tlb9c2y3.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 1),
(38, 'iPhone 13', 'Trong khi sức hút đến từ bộ 4 phiên bản iPhone 12 vẫn chưa nguội đi, thì hãng điện thoại Apple đã mang đến cho người dùng một siêu phẩm mới iPhone 13 với nhiều cải tiến thú vị sẽ mang lại những trải nghiệm hấp dẫn nhất cho người dùng.', '21990000', NULL, 17990000, 'mhxi8qu1.jpg', '2023-12-31', 'admin', NULL, NULL, 1, 1, 2),
(39, 'iPhone 11', 'Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', '21990000', NULL, 11990000, 'c6x5o823.jpg', '2023-12-31', 'admin', '2024-01-04', 'admin', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `module` varchar(45) NOT NULL,
  `controller` varchar(45) NOT NULL,
  `action` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `name`, `module`, `controller`, `action`) VALUES
(1, 'Hiển thị danh sách người dùng', 'admin', 'user', 'index'),
(2, 'Thay đổi status của người dùng', 'admin', 'user', 'status'),
(3, 'Cập nhật thông tin của người dùng', 'admin', 'user', 'form'),
(4, 'Thay đổi status của người dùng sử dụng Ajax', 'admin', 'user', 'ajaxStatus'),
(5, 'Xóa một hoặc nhiều người dùng', 'admin', 'user', 'trash'),
(6, 'Thay đổi vị trí hiển thị của các người dùng', 'admin', 'user', 'ordering'),
(7, 'Truy cập menu Admin Control Panel', 'admin', 'index', 'index'),
(8, 'Đăng nhập Admin Control Panel', 'admin', 'index', 'login'),
(9, 'Đăng xuất Admin Control Panel', 'admin', 'index', 'logout'),
(10, 'Cập nhật thông tin tài khoản quản trị', 'admin', 'index', 'profile');

-- --------------------------------------------------------

--
-- Table structure for table `rss`
--

CREATE TABLE `rss` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT '0',
  `ordering` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rss`
--

INSERT INTO `rss` (`id`, `link`, `status`, `ordering`) VALUES
(1, 'https://vnexpress.net/rss/tin-moi-nhat.rss', '0', 6),
(3, 'https://vnexpress.net/rss/the-thao.rss', '0', 9),
(16, 'https://vnexpress.net/rss/giai-tri.rss', '0', 12),
(18, 'https://vnexpress.net/rss/phap-luat.rss', '0', 10),
(20, 'https://vnexpress.net/rss/oto-xe-may.rss', '0', 35),
(21, 'https://vnexpress.net/rss/gia-dinh.rss', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` date DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordering` int(10) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  `category_phone_id` int(10) NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `description`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `ordering`, `status`, `category_phone_id`, `class`) VALUES
(1, 'Giảm 50% chỉ trong hôm nay!', 'Sỡ Hữu Iphone Mới', 'xzrd96ni.jpg', '2023-12-24', 'admin', '2024-01-04', 'admin', 1, 1, 1, 'col-lg-7 col-9'),
(2, 'Giảm 50% mọi sản phẩm', 'Năng Động Cùng SamSung', 'kavwr4t5.png', '2023-12-24', 'admin', '2024-01-04', 'admin', 1, 1, 2, 'col-lg-6');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(45) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(45) DEFAULT NULL,
  `register_date` datetime DEFAULT '0000-00-00 00:00:00',
  `register_ip` varchar(25) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `fullname`, `password`, `created`, `created_by`, `modified`, `modified_by`, `register_date`, `register_ip`, `status`, `ordering`, `group_id`) VALUES
(1, 'nvan', 'nvan@gmail.com', 'Nguyễn Văn An', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '1', '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 4, 1),
(2, 'nvb', 'nvb@gmail.com', 'Nguyễn Văn B', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '1', '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 3, 2),
(3, 'nvc', 'nvc@gmail.com', 'Nguyễn Văn C', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '1', '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 2, 3),
(4, 'admin', 'admin@gmail.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '1', '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 1, 2),
(5, 'nguyenvana1', 'lthlan54@gmail.com', 'Admin 3', '3b269d99b6c31f1467421bbcfdec7908', '0000-00-00', NULL, '0000-00-00', NULL, '2013-11-19 18:11:45', '127.0.0.1', 0, 10, 0),
(6, 'nguyenvana2', 'lthlan55@gmail.com', 'Admin 3', '3b269d99b6c31f1467421bbcfdec7908', '0000-00-00', NULL, '2023-11-23', 'admin', '2013-11-19 18:11:09', '127.0.0.1', 0, 6, 0),
(7, 'nguyenvana4', 'lthlan56@gmail.com', '', '3b269d99b6c31f1467421bbcfdec7908', '0000-00-00', NULL, '2023-11-23', 'admin', '2013-11-19 18:11:08', '127.0.0.1', 0, 5, 0),
(8, 'nguyenvana12', 'lthlan541@gmail.com', 'Admin 3', '3b269d99b6c31f1467421bbcfdec7908', '0000-00-00', NULL, '2023-11-23', 'admin', '2013-11-19 18:11:06', '127.0.0.1', 0, 12, 1),
(9, 'nguyenvana122', 'lthlan5412@gmail.com', '', '3b269d99b6c31f1467421bbcfdec7908', '2013-12-02', '4', '2023-11-23', 'admin', '0000-00-00 00:00:00', NULL, 1, 1, 3),
(10, 'admin01', 'admin01@gmail.com', 'Admin 123', 'e5c0fe73b84c06f43393b87a9c6acaa1', '0000-00-00', NULL, '2023-11-23', 'admin', '2013-12-03 08:12:23', '127.0.0.1', 1, 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryphone`
--
ALTER TABLE `categoryphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rss`
--
ALTER TABLE `rss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categoryphone`
--
ALTER TABLE `categoryphone`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rss`
--
ALTER TABLE `rss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
