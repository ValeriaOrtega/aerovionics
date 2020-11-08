	SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
	SET time_zone = "+00:00";
	CREATE TABLE `tablaslogin` (
	  `user` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
	  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
	INSERT INTO `tablaslogin` (`user`,`password`) VALUES('','');
	ALTER TABLE `tablaslogin`
	  ADD PRIMARY KEY (`user`);
	