/*
Navicat MySQL Data Transfer

Source Server         : hhhh
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-02-28 18:39:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '孙老师', 'C语言', '创业板', '10:00', '10/2/2018');
INSERT INTO `class` VALUES ('2', '陈老师', '单片机', '爱爱爱', '10:00', '11/3/2018');
INSERT INTO `class` VALUES ('3', '杨老师', '智慧与学识', '无敌班', '09:00', '15/2/2018');

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦今天大家一起来上课啦');

-- ----------------------------
-- Table structure for text
-- ----------------------------
DROP TABLE IF EXISTS `text`;
CREATE TABLE `text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `dateline` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of text
-- ----------------------------
INSERT INTO `text` VALUES ('1', '啊啊啊啊', '啊啊啊啊啊', '啊啊啊啊', '啊啊撒倒萨第三方a', '1519723478');
INSERT INTO `text` VALUES ('2', '', '', '', '', '1519723531');
INSERT INTO `text` VALUES ('3', '弗兰科萨凌空垫射放', '萨芬罗杰斯房价肯定撒解放开绿灯撒', '大龄考生发了肯定撒雷克萨德', '算法雷克萨德妇女来看那倒是倒萨来看努力克服的是倒萨', '1519723546');
INSERT INTO `text` VALUES ('4', '弗兰科萨凌空垫射放', '萨芬罗杰斯房价肯定撒解放开绿灯撒', '大龄考生发了肯定撒雷克萨德', '算法雷克萨德妇女来看那倒是倒萨来看努力克服的是倒萨', '1519723550');
INSERT INTO `text` VALUES ('5', '啊啊啊啊', '20170605', '阿婶打算倒萨', ' 萨芬撒范德萨的萨芬倒萨f', '1519725036');
INSERT INTO `text` VALUES ('6', 'hello', '20180228', '', '我是帅哥', '1519781596');
