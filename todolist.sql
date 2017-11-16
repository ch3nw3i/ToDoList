/*
Navicat MySQL Data Transfer

Source Server         : testDB
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : todolist

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-11-16 12:00:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `taskinfo`
-- ----------------------------
DROP TABLE IF EXISTS `taskinfo`;
CREATE TABLE `taskinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quadrant` tinyint(1) NOT NULL,
  `remind` datetime DEFAULT NULL,
  `project` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '项目',
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '标签',
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtask` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_remind` tinyint(4) DEFAULT '0' COMMENT '1 表示提醒，0 表示不提醒',
  `is_finished` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 表示完成，0 表示未完成',
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 表示删除，0 表示未删除',
  `gmt_create` datetime NOT NULL,
  `gmt_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of taskinfo
-- ----------------------------
INSERT INTO `taskinfo` VALUES ('1', 'PHP期末项目', '2', 'admin', '1', '2017-11-13 15:34:22', 'PHP期末项目', 'PHP@项目', '厦软校区', '分析需求@设计@编码@测试', 'PHP期末项目简介', '0', '0', '0', '2017-11-14 10:19:09', '0000-00-00 00:00:00');
INSERT INTO `taskinfo` VALUES ('3', '课堂派作业', '2', 'admin', '3', null, null, null, null, null, null, '0', '0', '0', '2017-11-14 15:32:43', '2017-11-14 15:32:46');
INSERT INTO `taskinfo` VALUES ('4', '子查询', '2', 'admin', '4', null, null, null, null, null, null, '0', '0', '0', '2017-11-14 15:33:10', '2017-11-14 15:33:17');
INSERT INTO `taskinfo` VALUES ('5', 'J2EE 毕业设计', '2', 'admin', '2', null, 'J2EE毕业设计', 'J2EE', null, null, null, '0', '0', '0', '2017-11-14 15:59:33', '2017-11-14 15:59:35');
INSERT INTO `taskinfo` VALUES ('7', 'abc', '2', 'admin', '4', '2017-11-15 16:55:25', '', '', '', '', '', '0', '0', '0', '2017-11-15 16:55:25', '2017-11-15 16:55:25');
INSERT INTO `taskinfo` VALUES ('8', '不重要-很紧急', '2', 'admin', '3', '2017-11-15 17:07:56', '我是项目', '我是标签标签。。。', 'location地点', '零零落落', '加加减减', '1', '0', '0', '2017-11-15 17:07:56', '2017-11-15 17:07:56');
INSERT INTO `taskinfo` VALUES ('9', 'abc', '2', 'admin', '1', '2017-11-15 17:27:34', '', '', '', '', '', '0', '0', '0', '2017-11-15 17:27:34', '2017-11-15 17:27:34');
INSERT INTO `taskinfo` VALUES ('10', '$_SESSION', '22', 'test', '2', '2017-11-16 08:42:23', '', '', '', '', '', '0', '0', '0', '2017-11-16 08:42:23', '2017-11-16 08:42:23');
INSERT INTO `taskinfo` VALUES ('11', '很重要-很紧急', '22', 'test', '1', '2017-11-16 08:43:50', '', '', '', '', '', '0', '0', '0', '2017-11-16 08:43:50', '2017-11-16 08:43:50');
INSERT INTO `taskinfo` VALUES ('12', '不重要-很紧急', '22', 'test', '3', '2017-11-16 08:43:58', '', '', '', '', '', '0', '0', '0', '2017-11-16 08:43:58', '2017-11-16 08:43:58');

-- ----------------------------
-- Table structure for `userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 表示删除，0 表示未删除',
  `gmt_create` datetime NOT NULL COMMENT '主动创建的时间',
  `gmt_modified` datetime NOT NULL COMMENT '被动更新的时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('2', 'admin', '123', '17750597523@163.com', '陈炜', '男', '0', '2017-11-14 13:20:00', '2017-11-16 08:10:18');
INSERT INTO `userinfo` VALUES ('3', 'root', '123', null, null, null, '0', '2017-11-14 13:20:00', '0000-00-00 00:00:00');
INSERT INTO `userinfo` VALUES ('13', 'chen', '123', null, null, null, '0', '2017-11-14 13:20:00', '0000-00-00 00:00:00');
INSERT INTO `userinfo` VALUES ('14', 'haha', 'haha', null, null, null, '0', '2017-11-14 13:20:00', '0000-00-00 00:00:00');
INSERT INTO `userinfo` VALUES ('18', 'ch3nw3i', '123456', null, null, null, '0', '2017-11-14 13:20:00', '0000-00-00 00:00:00');
INSERT INTO `userinfo` VALUES ('19', 'chenwei', '123456', '17750597523@163.com', '陈炜', '男', '0', '2017-11-14 13:20:00', '0000-00-00 00:00:00');
INSERT INTO `userinfo` VALUES ('20', 'girl', '123', 'girl@163.com', '女孩', '女', '0', '2017-11-15 00:05:30', '2017-11-15 00:05:30');
INSERT INTO `userinfo` VALUES ('21', 'test1', 'test', 'test1@111.com', 'testtest', '女', '0', '2017-11-15 00:08:07', '2017-11-15 00:08:07');
INSERT INTO `userinfo` VALUES ('22', 'test', '321', '123@163.com', '123', '男', '0', '2017-11-16 08:33:05', '2017-11-16 08:33:05');
INSERT INTO `userinfo` VALUES ('23', '123', '123', 'hahhah', 'hahah', '男', '0', '2017-11-16 09:12:00', '2017-11-16 09:12:12');
