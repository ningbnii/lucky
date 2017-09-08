/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : dandan

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-09-08 16:23:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `source`
-- ----------------------------
DROP TABLE IF EXISTS `source`;
CREATE TABLE `source` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `periods` char(6) NOT NULL COMMENT '期数',
  `num1` tinyint(1) NOT NULL,
  `num2` tinyint(1) NOT NULL,
  `num3` tinyint(1) NOT NULL,
  `sum` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of source
-- ----------------------------
INSERT INTO `source` VALUES ('1', '844116', '6', '7', '0', '13');
INSERT INTO `source` VALUES ('2', '844117', '1', '4', '4', '9');
INSERT INTO `source` VALUES ('3', '844118', '8', '6', '6', '20');
INSERT INTO `source` VALUES ('4', '844119', '5', '1', '3', '9');
INSERT INTO `source` VALUES ('5', '844120', '8', '1', '0', '9');
INSERT INTO `source` VALUES ('6', '844121', '3', '9', '5', '17');
INSERT INTO `source` VALUES ('7', '844122', '2', '2', '1', '5');
INSERT INTO `source` VALUES ('8', '844123', '0', '1', '1', '2');
INSERT INTO `source` VALUES ('9', '844124', '9', '1', '2', '12');
INSERT INTO `source` VALUES ('10', '844125', '5', '0', '1', '6');
INSERT INTO `source` VALUES ('11', '844126', '7', '5', '7', '19');
INSERT INTO `source` VALUES ('12', '844127', '5', '3', '4', '12');
INSERT INTO `source` VALUES ('13', '844128', '5', '2', '9', '16');
INSERT INTO `source` VALUES ('14', '844129', '2', '2', '1', '5');
INSERT INTO `source` VALUES ('15', '844130', '9', '2', '6', '17');
INSERT INTO `source` VALUES ('16', '844131', '5', '2', '3', '10');
INSERT INTO `source` VALUES ('17', '844132', '4', '7', '3', '14');
INSERT INTO `source` VALUES ('18', '844133', '9', '2', '4', '15');
INSERT INTO `source` VALUES ('19', '844134', '0', '9', '7', '16');
INSERT INTO `source` VALUES ('20', '844135', '6', '0', '1', '7');
INSERT INTO `source` VALUES ('21', '844136', '3', '6', '0', '9');
INSERT INTO `source` VALUES ('22', '844137', '6', '5', '1', '12');
INSERT INTO `source` VALUES ('23', '844138', '4', '6', '1', '11');
INSERT INTO `source` VALUES ('24', '844139', '8', '9', '9', '26');
INSERT INTO `source` VALUES ('25', '844140', '8', '6', '7', '21');
INSERT INTO `source` VALUES ('26', '844141', '4', '2', '4', '10');
INSERT INTO `source` VALUES ('27', '844142', '4', '3', '5', '12');
INSERT INTO `source` VALUES ('28', '844143', '3', '6', '8', '17');
INSERT INTO `source` VALUES ('29', '844144', '7', '6', '1', '14');
INSERT INTO `source` VALUES ('30', '844145', '8', '9', '0', '17');
INSERT INTO `source` VALUES ('31', '844146', '5', '5', '9', '19');
INSERT INTO `source` VALUES ('32', '844147', '0', '2', '6', '8');
INSERT INTO `source` VALUES ('33', '844148', '9', '0', '3', '12');
INSERT INTO `source` VALUES ('34', '844149', '4', '2', '3', '9');
INSERT INTO `source` VALUES ('35', '844150', '1', '4', '3', '8');
INSERT INTO `source` VALUES ('36', '844151', '8', '8', '9', '25');
INSERT INTO `source` VALUES ('37', '844152', '2', '0', '3', '5');
INSERT INTO `source` VALUES ('38', '844153', '9', '0', '1', '10');
INSERT INTO `source` VALUES ('39', '844154', '3', '2', '1', '6');
