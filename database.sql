CREATE DATABASE `chat`;
use `chat`;

DROP TABLE IF EXISTS `chat`.`msg`;
CREATE TABLE  `chat`.`msg` (
  `msgId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `msgUser` varchar(80) NOT NULL,
  `msgMessage` longtext NOT NULL,
  `msgDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`msgId`)
) ENGINE=InnoDB ;