/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : very_cms

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-08-01 17:34:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `very_adv`
-- ----------------------------
DROP TABLE IF EXISTS `very_adv`;
CREATE TABLE `very_adv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advname` varchar(50) NOT NULL,
  `showpage` varchar(20) NOT NULL,
  `advimage` varchar(100) NOT NULL,
  `stime` date NOT NULL,
  `etime` date NOT NULL,
  `mtime` datetime NOT NULL,
  `system` varchar(10) NOT NULL,
  `apphome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of very_adv
-- ----------------------------
INSERT INTO `very_adv` VALUES ('8', '广告1', '首页幻灯', '/very_cms/advimage/20150731/20150731211905aa.jpg', '2015-07-30', '2015-08-31', '2015-07-31 21:19:05', 'Android', 'ccccc');
INSERT INTO `very_adv` VALUES ('9', '第二个', '首页幻灯', '/very_cms/advimage/20150731/20150731211933aa.jpg', '2015-07-30', '2015-08-18', '2015-07-31 21:19:33', 'Android', 'ccxc');
INSERT INTO `very_adv` VALUES ('10', '广告展示', '首页', '/very_cms/advimage/20150731/20150731212515aa.jpg', '2015-07-30', '2015-08-18', '2015-07-31 21:25:15', 'Android', '问问');

-- ----------------------------
-- Table structure for `very_app`
-- ----------------------------
DROP TABLE IF EXISTS `very_app`;
CREATE TABLE `very_app` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `appname` varchar(30) NOT NULL,
  `appshowname` varchar(30) DEFAULT NULL,
  `apptype` bigint(20) NOT NULL COMMENT '关联type表id',
  `appversion` varchar(15) NOT NULL COMMENT '版本',
  `appsystem` varchar(10) NOT NULL COMMENT '系统:1安卓;2ios;3wp;4html5',
  `applanguage` varchar(20) NOT NULL,
  `appsize` varchar(10) NOT NULL COMMENT '应用大小',
  `apphome` varchar(50) DEFAULT NULL COMMENT '应用存放地址',
  `appimage` varchar(50) DEFAULT NULL,
  `time` datetime NOT NULL,
  `come` varchar(20) NOT NULL,
  `money` varchar(5) NOT NULL DEFAULT '1' COMMENT '1:免费;2:收费',
  `summary` text COMMENT '简介',
  `upsummary` text COMMENT '更新简介',
  `downloadnum` bigint(20) DEFAULT NULL COMMENT '下载次数',
  `tag` tinyint(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_name` (`appname`) USING BTREE,
  KEY `idx_down` (`downloadnum`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of very_app
-- ----------------------------
INSERT INTO `very_app` VALUES ('20', '一个测试应用', '生活', '14', '4.0', 'Android', '中文', '', 'http://www.baidu.com', '/very_cms/appimage/20150731/20150731211032aa.jpg', '2015-07-31 21:10:32', '那里', '否', '<p>这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用这是一个测试的应用<img alt=\"aa.jpg\" src=\"/very_cms/ueditorimage/image/20150731/1438348245275403.jpg\" title=\"1438348245275403.jpg\"/></p><p><br/></p><p><br/></p>', '                                                                        			这个版本挺好的									                                                                                                ', '22', '0');
INSERT INTO `very_app` VALUES ('21', '第二个测试应用', '音乐', '14', '5.5', 'Android', '中文', '', 'http://www.youku.com', '/very_cms/appimage/20150731/20150731211242aa.jpg', '2015-07-31 21:12:42', 'come', '否', '<p>第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用第二个测试应用<img alt=\"aa.jpg\" src=\"/very_cms/ueditorimage/image/20150731/1438348328124645.jpg\" title=\"1438348328124645.jpg\"/><br/></p>', '当秋天							', '1', '0');
INSERT INTO `very_app` VALUES ('22', '苹果', '呀', '14', '2.0', 'IOS', '中文', '', 'http://www.baidu.com', '/very_cms/appimage/20150731/20150731211420aa.jpg', '2015-07-31 21:14:20', 'ccc', '否', '<p>苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果<img style=\"width: 377px; height: 276px;\" alt=\"aa.jpg\" src=\"/very_cms/ueditorimage/image/20150731/1438348439100332.jpg\" title=\"1438348439100332.jpg\" height=\"276\" width=\"377\"/></p>', '							苹果苹果', '0', '0');
INSERT INTO `very_app` VALUES ('23', '标签游戏', '没有', '14', '2.2', 'Android', '中文', '', '是是是', '/very_cms/appimage/20150731/20150731212337aa.jpg', '2015-07-31 21:23:37', '第三方', '否', '<p>标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏标签游戏<img alt=\"aa.jpg\" src=\"/very_cms/ueditorimage/image/20150731/1438349015123152.jpg\" title=\"1438349015123152.jpg\"/></p>', '							标签游戏标签游戏', '0', '1');
INSERT INTO `very_app` VALUES ('24', '标签新闻1', '阿萨德发', '14', '阿道夫', 'Android', '中文', '', '萨芬', '/very_cms/appimage/20150731/20150731212418aa.jpg', '2015-07-31 21:24:18', '', '否', '<p>标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1标签新闻1<img alt=\"aa.jpg\" src=\"/very_cms/ueditorimage/image/20150731/1438349056162531.jpg\" title=\"1438349056162531.jpg\"/></p>', '							标签新闻1标签新闻1', '0', '1');

-- ----------------------------
-- Table structure for `very_comment_app`
-- ----------------------------
DROP TABLE IF EXISTS `very_comment_app`;
CREATE TABLE `very_comment_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_user` varchar(20) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_app` bigint(20) NOT NULL COMMENT '评论的哪个应用',
  `comment_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of very_comment_app
-- ----------------------------
INSERT INTO `very_comment_app` VALUES ('1', '143834850310', '真好呀		', '22', '2015-07-31 21:15:03');

-- ----------------------------
-- Table structure for `very_comment_news`
-- ----------------------------
DROP TABLE IF EXISTS `very_comment_news`;
CREATE TABLE `very_comment_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_user` varchar(20) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_news` bigint(20) NOT NULL COMMENT '评论的哪个应用',
  `comment_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of very_comment_news
-- ----------------------------

-- ----------------------------
-- Table structure for `very_html`
-- ----------------------------
DROP TABLE IF EXISTS `very_html`;
CREATE TABLE `very_html` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(20) NOT NULL,
  `nick_name` varchar(20) NOT NULL,
  `mtime` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3360 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of very_html
-- ----------------------------
INSERT INTO `very_html` VALUES ('2355', '18_p', '产品', '1438265493');
INSERT INTO `very_html` VALUES ('2377', '5_p', '产品', '1438265528');
INSERT INTO `very_html` VALUES ('2378', '8_p', '产品', '1438265528');
INSERT INTO `very_html` VALUES ('2379', '9_p', '产品', '1438265529');
INSERT INTO `very_html` VALUES ('2380', '10_p', '产品', '1438265529');
INSERT INTO `very_html` VALUES ('2381', '11_p', '产品', '1438265529');
INSERT INTO `very_html` VALUES ('2382', '12_p', '产品', '1438265529');
INSERT INTO `very_html` VALUES ('2383', '13_p', '产品', '1438265529');
INSERT INTO `very_html` VALUES ('2384', '14_p', '产品', '1438265529');
INSERT INTO `very_html` VALUES ('2385', '15_p', '产品', '1438265529');
INSERT INTO `very_html` VALUES ('2386', '16_p', '产品', '1438265530');
INSERT INTO `very_html` VALUES ('2387', '17_p', '产品', '1438265530');
INSERT INTO `very_html` VALUES ('2388', '19_p', '产品', '1438265530');
INSERT INTO `very_html` VALUES ('2389', '1_n', '新闻', '1438265530');
INSERT INTO `very_html` VALUES ('2390', '2_n', '新闻', '1438265530');
INSERT INTO `very_html` VALUES ('2391', '3_n', '新闻', '1438265530');
INSERT INTO `very_html` VALUES ('2392', '4_n', '新闻', '1438265530');
INSERT INTO `very_html` VALUES ('2393', '5_n', '新闻', '1438265530');
INSERT INTO `very_html` VALUES ('2395', 'html5', '应用分类', '1438265531');
INSERT INTO `very_html` VALUES ('2397', 'wp', '应用分类', '1438265531');
INSERT INTO `very_html` VALUES ('2400', 'html5d', '排行榜', '1438265532');
INSERT INTO `very_html` VALUES ('2401', 'html5n', '排行榜', '1438265532');
INSERT INTO `very_html` VALUES ('2404', 'wpd', '排行榜', '1438265532');
INSERT INTO `very_html` VALUES ('2405', 'wpn', '排行榜', '1438265533');
INSERT INTO `very_html` VALUES ('2407', 'html5_zx', '咨询列表', '1438265533');
INSERT INTO `very_html` VALUES ('2408', 'ios_zx', '咨询列表', '1438265533');
INSERT INTO `very_html` VALUES ('2497', '25_p', '产品', '1438416804');
INSERT INTO `very_html` VALUES ('3346', 's20150801', '首页', '1438421437');
INSERT INTO `very_html` VALUES ('3347', '20_p', '产品', '1438421437');
INSERT INTO `very_html` VALUES ('3348', '21_p', '产品', '1438421437');
INSERT INTO `very_html` VALUES ('3349', '22_p', '产品', '1438421438');
INSERT INTO `very_html` VALUES ('3350', '23_p', '产品', '1438421438');
INSERT INTO `very_html` VALUES ('3351', '24_p', '产品', '1438421438');
INSERT INTO `very_html` VALUES ('3352', '6_n', '新闻', '1438421438');
INSERT INTO `very_html` VALUES ('3353', 'android', '应用分类', '1438421438');
INSERT INTO `very_html` VALUES ('3354', 'ios', '应用分类', '1438421438');
INSERT INTO `very_html` VALUES ('3355', 'androidd', '排行榜', '1438421438');
INSERT INTO `very_html` VALUES ('3356', 'androidn', '排行榜', '1438421439');
INSERT INTO `very_html` VALUES ('3357', 'iosd', '排行榜', '1438421439');
INSERT INTO `very_html` VALUES ('3358', 'iosn', '排行榜', '1438421439');
INSERT INTO `very_html` VALUES ('3359', 'android_zx', '咨询列表', '1438421439');

-- ----------------------------
-- Table structure for `very_news`
-- ----------------------------
DROP TABLE IF EXISTS `very_news`;
CREATE TABLE `very_news` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `come` varchar(20) DEFAULT NULL,
  `author` varchar(20) NOT NULL,
  `newtype` varchar(20) NOT NULL,
  `newimage` varchar(100) NOT NULL,
  `newsystem` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of very_news
-- ----------------------------
INSERT INTO `very_news` VALUES ('6', '测试新闻', '<p>这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻<img alt=\"aa.jpg\" src=\"/very_cms/ueditorimage/image/20150731/1438348948129151.jpg\" title=\"1438348948129151.jpg\"/></p>', '2015-07-31 21:22:32', '好人', '好人', '福利新闻', '/very_cms/newimage/20150731/20150731212232aa.jpg', 'Android');

-- ----------------------------
-- Table structure for `very_type`
-- ----------------------------
DROP TABLE IF EXISTS `very_type`;
CREATE TABLE `very_type` (
  `type_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(15) NOT NULL,
  `type_time` datetime NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of very_type
-- ----------------------------
INSERT INTO `very_type` VALUES ('1', '生活', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('2', '音乐', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('3', '上午', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('4', '地图', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('5', '工具', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('6', '摄影', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('7', '社交', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('8', '新闻', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('9', '健康', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('10', '天气', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('11', '旅行', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('12', '效率', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('13', '阅读', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('14', '单机', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('15', '网游', '0000-00-00 00:00:00');
INSERT INTO `very_type` VALUES ('16', '测试游戏', '0000-00-00 00:00:00');
