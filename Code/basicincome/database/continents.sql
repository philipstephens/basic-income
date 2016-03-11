CREATE TABLE IF NOT EXISTS `continents` (
  `continents_id` char(2) NOT NULL UNIQUE,
  `contname` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`continents_id`)
);

-- ----------------------------
-- Records of continents
-- ----------------------------
INSERT INTO `continents` (`continents_id`, `contname`) VALUES ('AF', 'Africa');
INSERT INTO `continents` (`continents_id`, `contname`) VALUES ('AN', 'Antarctica');
INSERT INTO `continents` (`continents_id`, `contname`) VALUES ('AS', 'Asia');
INSERT INTO `continents` (`continents_id`, `contname`) VALUES ('EU', 'Europe');
INSERT INTO `continents` (`continents_id`, `contname`) VALUES ('NA', 'North America');
INSERT INTO `continents` (`continents_id`, `contname`) VALUES ('OC', 'Oceania');
INSERT INTO `continents` (`continents_id`, `contname`) VALUES ('SA', 'South America');
