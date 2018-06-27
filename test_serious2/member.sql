CREATE TABLE `member` (
  `UserID` int(3) unsigned zerofill NOT NULL auto_increment,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL default 'USER',
  PRIMARY KEY  (`UserID`),
  UNIQUE KEY `Username` (`Username`) )
  INSERT INTO `member` VALUES (001, 'user', 'user', 'giraffe', 'USER')
    INSERT INTO `member` VALUES (001, 'user', 'user', 'giraffe', 'ADMIN')
