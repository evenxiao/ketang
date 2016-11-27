/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : ketang

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-11-24 08:10:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL COMMENT '用户名',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `phone` char(11) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', 'admin', '456123', '1383294824', '3iirweirweopr@qq.com', '1', '2016-11-06 02:31:31', '2016-11-13 14:17:37');
INSERT INTO `tb_admin` VALUES ('2', 'awen', '222222', '13716463139', '2402934@qq.com', '2', '0000-00-00 00:00:00', '2016-11-13 20:57:31');
INSERT INTO `tb_admin` VALUES ('3', 'xiaoming', '111111', '13243248888', '18491111@qq.com', '2', '0000-00-00 00:00:00', '2016-11-13 20:57:19');
INSERT INTO `tb_admin` VALUES ('4', '小明', '222222', '14729249324', '3240092094@qq.com', '2', '2016-11-14 00:43:00', '2016-11-14 00:43:26');

-- ----------------------------
-- Table structure for tb_attach
-- ----------------------------
DROP TABLE IF EXISTS `tb_attach`;
CREATE TABLE `tb_attach` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '附件名称',
  `attach_url` varchar(255) NOT NULL COMMENT '附件地址',
  `content_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '附件对应的内容ID，tb_content表ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `content_id` (`content_id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='附件表';

-- ----------------------------
-- Records of tb_attach
-- ----------------------------

-- ----------------------------
-- Table structure for tb_cate
-- ----------------------------
DROP TABLE IF EXISTS `tb_cate`;
CREATE TABLE `tb_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '版块名称',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '版块类型 1 视频 2文章',
  `pid` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '父版块ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2 无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `cateindex` (`type`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='版块表';

-- ----------------------------
-- Records of tb_cate
-- ----------------------------
INSERT INTO `tb_cate` VALUES ('1', '教育', '1', '0', '1', '2016-11-15 00:41:15', '0000-00-00 00:00:00');
INSERT INTO `tb_cate` VALUES ('2', '科技', '0', '0', '1', '2016-11-15 00:58:12', '0000-00-00 00:00:00');
INSERT INTO `tb_cate` VALUES ('3', '游戏1', '1', '0', '2', '2016-11-15 00:58:12', '2016-11-15 01:14:15');
INSERT INTO `tb_cate` VALUES ('4', '训练', '2', '0', '2', '2016-11-15 00:58:12', '2016-11-15 01:12:46');
INSERT INTO `tb_cate` VALUES ('5', '小说', '1', '0', '1', '2016-11-15 01:02:06', '0000-00-00 00:00:00');
INSERT INTO `tb_cate` VALUES ('6', '体育', '2', '0', '1', '2016-11-15 01:02:06', '0000-00-00 00:00:00');
INSERT INTO `tb_cate` VALUES ('7', '心理', '2', '0', '1', '2016-11-15 01:15:57', '0000-00-00 00:00:00');
INSERT INTO `tb_cate` VALUES ('8', '犯罪', '1', '0', '1', '2016-11-15 01:15:57', '0000-00-00 00:00:00');
INSERT INTO `tb_cate` VALUES ('9', '艺术', '1', '0', '1', '2016-11-15 01:16:49', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for tb_comment
-- ----------------------------
DROP TABLE IF EXISTS `tb_comment`;
CREATE TABLE `tb_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nick_name` varchar(255) NOT NULL DEFAULT '游客' COMMENT '评论人昵称',
  `content` text NOT NULL COMMENT '评论内容',
  `content_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论内容ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0 待审核 1 有效 2无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `content_id` (`content_id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of tb_comment
-- ----------------------------

-- ----------------------------
-- Table structure for tb_config
-- ----------------------------
DROP TABLE IF EXISTS `tb_config`;
CREATE TABLE `tb_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned NOT NULL COMMENT '匹配类型 1 系统配置 2banner 3友链 4导航',
  `config_name` varchar(255) NOT NULL DEFAULT '' COMMENT '匹配项名称',
  `show_name` varchar(255) NOT NULL DEFAULT '' COMMENT '显示名称',
  `config_value` varchar(255) NOT NULL COMMENT '匹配项值',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效 3已恢复',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示 1 显示 2不显示',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='垃圾箱表';

-- ----------------------------
-- Records of tb_config
-- ----------------------------
INSERT INTO `tb_config` VALUES ('1', '4', '首页', '', '/', '1', '2', '2016-11-18 01:09:14', '0000-00-00 00:00:00');
INSERT INTO `tb_config` VALUES ('2', '4', '视频', '', '/video/list', '1', '1', '2016-11-18 01:09:14', '0000-00-00 00:00:00');
INSERT INTO `tb_config` VALUES ('3', '3', '百度', '', 'www.baidu.com', '1', '1', '2016-11-18 01:27:21', '0000-00-00 00:00:00');
INSERT INTO `tb_config` VALUES ('4', '3', 'QQ', '', 'www.qq.com', '1', '2', '2016-11-18 01:27:21', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for tb_content
-- ----------------------------
DROP TABLE IF EXISTS `tb_content`;
CREATE TABLE `tb_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '版块ID',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容、简介',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '类型：1视频 2文章',
  `author` varchar(255) NOT NULL COMMENT '发布人',
  `teacher` varchar(255) NOT NULL COMMENT '讲课人',
  `score` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评分',
  `score_times` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评分次数',
  `maker_team` varchar(255) NOT NULL COMMENT '制作单位',
  `total_time` varchar(30) NOT NULL COMMENT '总时长',
  `click_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点播/点击次数',
  `thumb_img` varchar(255) NOT NULL COMMENT '缩略图',
  `source_file` varchar(255) NOT NULL COMMENT '视频资料文件地址',
  `source_from` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 直接上传 2 外链',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否热门 0 不是 1 是 ',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否最新 0 不是 1 是 ',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2 无效 3 草稿',
  `comment_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论总数',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '发布时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `searchindex` (`cate_id`,`title`,`status`),
  KEY `hotnew` (`is_new`,`is_hot`) USING BTREE,
  KEY `type` (`type`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='内容表';

-- ----------------------------
-- Records of tb_content
-- ----------------------------
INSERT INTO `tb_content` VALUES ('1', '0', '张一个视频文件', '', '1', '孝文', '', '0', '0', '', '30分钟', '0', 'C:\\fakepath\\IMG_20130124_171517.jpg', '', '1', '1', '2', '1', '0', '2016-11-14 01:43:52', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('2', '0', '第二个视频文件', '', '1', '小明', '', '0', '0', '', '50分钟', '0', 'C:\\fakepath\\IMG_20130124_171517.jpg', '', '1', '2', '1', '3', '0', '2016-11-13 01:43:56', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('3', '0', '我是买家，如何找货1', '&lt;p&gt;我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1&lt;/p&gt;', '1', '小明', '', '0', '0', '', '120键名', '0', '', '', '1', '1', '2', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('4', '0', '再来测试视频', '&lt;p&gt;再来测试视频再来测试视频再来测试视频再来测试视频再来测试视频再来测试视频再来测试视频再来测试视频再来测试视频再来测试视频&lt;/p&gt;', '1', '239从不', '', '0', '0', '', '190分钟', '0', '', '', '1', '1', '2', '3', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('5', '0', '视频上传测试', 'KindEditor', '1', '小文', '', '0', '0', '', '120分钟', '0', '/Resources/lib/kindeditor/attached/image/20161121/20161121015927_84608.png', '/Resources/lib/kindeditor/attached/file/20161121/20161121020103_65692.mp4', '1', '2', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('6', '0', '学习视频', '学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频学习视频', '1', '仍工', '', '0', '0', '', '120分钟', '0', '/Resources/lib/kindeditor/attached/image/20161121/20161121015927_84608.png', '/Resources/lib/kindeditor/attached/file/20161121/20161121015129_34815.mp4', '1', '1', '2', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('7', '0', '', 'KindEditor', '1', '', '', '0', '0', '', '', '0', '', '', '1', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('8', '0', '我是买家，如何找货1', '我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1', '1', '123哥', '', '0', '0', '', '120分钟', '0', '/Resources/lib/kindeditor/attached/image/20161121/20161121015927_84608.png', '/Resources/lib/kindeditor/attached/file/20161121/20161121015129_34815.mp4', '1', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('9', '0', '我是买家，如何找货1', '&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;&lt;span style=&quot;color:#333333;&quot;&gt;我是买家，如何找货1&lt;/span&gt;', '1', '2342作者', '', '0', '0', '', '60分钟', '0', '/Resources/lib/kindeditor/attached/image/20161122/20161122010832_30470.png', '/Resources/lib/kindeditor/attached/file/20161121/20161121015129_34815.mp4', '1', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('10', '0', '铝材行业创新问题', '&lt;div class=&quot;row cl&quot; style=&quot;margin-left:-15px;color:#333333;font-family:&amp;quot;font-size:14px;background-color:#FFFFFF;&quot;&gt;\r\n	&lt;span class=&quot;c-red&quot; style=&quot;color:red;&quot;&gt;铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题铝材行业创新问题&lt;/span&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;row cl&quot; style=&quot;margin-left:-15px;color:#333333;font-family:&amp;quot;font-size:14px;background-color:#FFFFFF;&quot;&gt;\r\n	&lt;span class=&quot;c-red&quot; style=&quot;color:red;&quot;&gt;&lt;/span&gt;\r\n&lt;/div&gt;', '1', '肖文', '', '0', '0', '', '120min', '0', '/Resources/lib/kindeditor/attached/image/20161122/20161122010832_30470.png', '/Resources/lib/kindeditor/attached/file/20161122/20161122013436_59345.mp4', '1', '1', '1', '1', '0', '2016-11-22 01:35:13', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('11', '0', '心理视频', '心理视频心理视频心理视频心理视频心理视频心理视频心理视频心理视频', '1', '肖语言', '', '0', '0', '', '120分钟', '0', '/Resources/lib/kindeditor/attached/image/20161122/20161122010832_30470.png', '/Resources/lib/kindeditor/attached/file/20161122/20161122013436_59345.mp4', '1', '1', '1', '1', '0', '2016-11-22 01:37:09', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('12', '0', '我是买家，如何找货1', '&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;\r\n&lt;pre&gt;&lt;span style=&quot;color:#660000;background-color:#ffe4ff;&quot;&gt;$tagData&lt;/span&gt;&lt;/pre&gt;', '1', '231', '', '0', '0', '', '314', '0', '/Resources/lib/kindeditor/attached/image/20161122/20161122010832_30470.png', '/Resources/lib/kindeditor/attached/file/20161122/20161122013436_59345.mp4', '1', '1', '1', '1', '0', '2016-11-22 01:39:07', '0000-00-00 00:00:00');
INSERT INTO `tb_content` VALUES ('13', '0', '我是买家，如何找货1', '我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1我是买家，如何找货1', '1', '12902', '', '0', '0', '', '120', '0', '/Resources/lib/kindeditor/attached/image/20161122/20161122010832_30470.png', '/Resources/lib/kindeditor/attached/file/20161122/20161122013436_59345.mp4', '1', '1', '1', '1', '0', '2016-11-22 01:47:17', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for tb_dustbin
-- ----------------------------
DROP TABLE IF EXISTS `tb_dustbin`;
CREATE TABLE `tb_dustbin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` varchar(255) NOT NULL COMMENT '内容ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效 3已恢复',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='垃圾箱表';

-- ----------------------------
-- Records of tb_dustbin
-- ----------------------------

-- ----------------------------
-- Table structure for tb_score_log
-- ----------------------------
DROP TABLE IF EXISTS `tb_score_log`;
CREATE TABLE `tb_score_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `score` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '分数',
  `content_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '内容ID',
  `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_score_log
-- ----------------------------

-- ----------------------------
-- Table structure for tb_tag
-- ----------------------------
DROP TABLE IF EXISTS `tb_tag`;
CREATE TABLE `tb_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '标签名称',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效',
  `order_num` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '排序号 优先级 从小到大',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='标签表';

-- ----------------------------
-- Records of tb_tag
-- ----------------------------
INSERT INTO `tb_tag` VALUES ('7', '搞笑', '1', '0', '2016-11-14 00:11:37', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('8', '娱乐', '1', '0', '2016-11-14 00:11:37', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('9', '犯罪', '1', '0', '2016-11-14 00:11:37', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('10', '心理', '1', '0', '2016-11-14 00:11:37', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('11', '才艺', '1', '0', '2016-11-14 00:22:07', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('12', '训练', '1', '0', '2016-11-14 00:22:07', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('13', '学习1', '2', '0', '2016-11-14 00:22:07', '2016-11-14 00:33:49');
INSERT INTO `tb_tag` VALUES ('14', '音乐', '1', '0', '2016-11-14 00:34:27', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('15', '推理', '1', '0', '2016-11-22 01:30:27', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('16', '法律', '1', '0', '2016-11-22 01:30:27', '0000-00-00 00:00:00');
INSERT INTO `tb_tag` VALUES ('17', '哲学', '1', '0', '2016-11-22 01:30:27', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for tb_tag_content
-- ----------------------------
DROP TABLE IF EXISTS `tb_tag_content`;
CREATE TABLE `tb_tag_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` varchar(255) NOT NULL COMMENT '标签ID',
  `content_id` varchar(255) NOT NULL COMMENT '内容ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `status` (`tag_id`,`content_id`,`status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='标签与内容关系表';

-- ----------------------------
-- Records of tb_tag_content
-- ----------------------------
INSERT INTO `tb_tag_content` VALUES ('1', '9', '13', '1', '2016-11-22 01:47:17', '0000-00-00 00:00:00');
INSERT INTO `tb_tag_content` VALUES ('2', '10', '13', '1', '2016-11-22 01:47:17', '0000-00-00 00:00:00');
INSERT INTO `tb_tag_content` VALUES ('3', '11', '13', '1', '2016-11-22 01:47:17', '0000-00-00 00:00:00');
