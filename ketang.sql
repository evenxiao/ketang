-- phpMyAdmin SQL Dump
-- version 4.4.15.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-01-19 17:46:59
-- 服务器版本： 5.5.48-log
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ketang`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(10) unsigned NOT NULL,
  `user_name` varchar(255) NOT NULL COMMENT '用户名',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `phone` char(11) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='管理员表';

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `user_name`, `password`, `phone`, `email`, `status`, `create_time`, `update_time`) VALUES
(1, 'admin', '456123', '1383294824', '3iirweirweopr@qq.com', 1, '2016-11-06 02:31:31', '2016-11-13 14:17:37'),
(2, 'awen', '222222', '13716463139', '2402934@qq.com', 2, '0000-00-00 00:00:00', '2016-11-13 20:57:31'),
(3, 'xiaoming', '111111', '13243248888', '18491111@qq.com', 2, '0000-00-00 00:00:00', '2016-11-13 20:57:19'),
(4, '小明', '222222', '14729249324', '3240092094@qq.com', 2, '2016-11-14 00:43:00', '2016-11-14 00:43:26');

-- --------------------------------------------------------

--
-- 表的结构 `tb_attach`
--

CREATE TABLE IF NOT EXISTS `tb_attach` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL COMMENT '附件名称',
  `attach_url` varchar(255) NOT NULL COMMENT '附件地址',
  `content_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '附件对应的内容ID，tb_content表ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='附件表';

--
-- 转存表中的数据 `tb_attach`
--

INSERT INTO `tb_attach` (`id`, `title`, `attach_url`, `content_id`, `status`, `create_time`, `update_time`) VALUES
(8, '机场项目需求书.docx', 'video/2016-12-25/机场项目需求书.docx', 23, 1, '2016-12-25 01:00:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tb_cate`
--

CREATE TABLE IF NOT EXISTS `tb_cate` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '版块名称',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '版块类型 1 视频 2文章',
  `pid` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '父版块ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2 无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '修改时间'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='版块表';

--
-- 转存表中的数据 `tb_cate`
--

INSERT INTO `tb_cate` (`id`, `name`, `type`, `pid`, `status`, `create_time`, `update_time`) VALUES
(10, '训练射击', 1, 0, 2, '2016-12-22 11:07:57', '2017-01-18 13:49:21'),
(11, '安全教育', 1, 0, 1, '2016-12-22 11:07:57', '2016-12-26 10:02:33'),
(12, '走访调研', 2, 0, 1, '2016-12-22 11:09:54', '0000-00-00 00:00:00'),
(13, '学习感悟', 2, 0, 1, '2016-12-22 11:09:54', '2016-12-26 09:59:00'),
(14, '民警感悟', 2, 0, 1, '2017-01-18 10:22:19', '0000-00-00 00:00:00'),
(15, '调研文案', 2, 0, 1, '2017-01-18 11:08:24', '2017-01-18 13:48:09');

-- --------------------------------------------------------

--
-- 表的结构 `tb_comment`
--

CREATE TABLE IF NOT EXISTS `tb_comment` (
  `id` int(10) unsigned NOT NULL,
  `nick_name` varchar(255) NOT NULL DEFAULT '游客' COMMENT '评论人昵称',
  `content` text NOT NULL COMMENT '评论内容',
  `content_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论内容ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0 待审核 1 有效 2无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='评论表';

--
-- 转存表中的数据 `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `nick_name`, `content`, `content_id`, `status`, `create_time`, `update_time`) VALUES
(18, '游客8376', '测试数据', 22, 1, '2016-12-25 09:09:33', '2016-12-25 09:10:29'),
(19, '游客8290', '122312231', 24, 1, '2016-12-28 11:06:24', '2016-12-28 11:06:48'),
(20, '游客1943', '测试评论', 27, 1, '2017-01-16 01:33:22', '2017-01-16 01:34:04');

-- --------------------------------------------------------

--
-- 表的结构 `tb_config`
--

CREATE TABLE IF NOT EXISTS `tb_config` (
  `id` int(10) unsigned NOT NULL,
  `type` tinyint(1) unsigned NOT NULL COMMENT '匹配类型 1 系统配置 2banner 3友链 4导航',
  `config_name` varchar(255) NOT NULL DEFAULT '' COMMENT '匹配项名称',
  `show_name` varchar(255) NOT NULL DEFAULT '' COMMENT '显示名称',
  `config_value` varchar(255) NOT NULL COMMENT '匹配项值',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效 3已恢复',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示 1 显示 2不显示',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='垃圾箱表';

--
-- 转存表中的数据 `tb_config`
--

INSERT INTO `tb_config` (`id`, `type`, `config_name`, `show_name`, `config_value`, `status`, `is_show`, `create_time`, `update_time`) VALUES
(1, 4, '首页', '', '/', 1, 1, '2016-11-18 01:09:14', '2016-12-25 19:32:55'),
(2, 4, '视频', '', '/video/list', 1, 1, '2016-11-18 01:09:14', '0000-00-00 00:00:00'),
(3, 3, '百度', '', 'www.baidu.com', 1, 1, '2016-11-18 01:27:21', '0000-00-00 00:00:00'),
(4, 3, 'QQ', '', 'www.qq.com', 1, 2, '2016-11-18 01:27:21', '0000-00-00 00:00:00'),
(5, 2, '/Resources/lib/kindeditor/attached/image/20161214/20161214155317_16641.jpg', '', '#', 2, 1, '2016-12-14 15:53:35', '2016-12-26 10:03:13'),
(6, 5, '/Resources/lib/kindeditor/attached/image/20161214/20161214161328_77035.png', '', 'http//www.2345.com', 2, 1, '2016-12-14 16:13:49', '2016-12-26 10:13:37'),
(7, 5, '/Resources/lib/kindeditor/attached/image/20161214/20161214162155_90024.png', '', '#', 2, 1, '2016-12-14 16:22:05', '2016-12-26 10:13:33'),
(8, 5, '/Resources/lib/kindeditor/attached/image/20161214/20161214162520_62218.png', '', '#', 2, 1, '2016-12-14 16:25:25', '2016-12-26 16:23:40'),
(9, 2, '/Resources/lib/kindeditor/attached/image/20161222/20161222191744_39929.png', '', '#', 2, 1, '2016-12-22 19:18:04', '2016-12-26 10:03:17'),
(10, 2, '/Resources/lib/kindeditor/attached/image/20161222/20161222191820_23848.png', '', '#', 1, 1, '2016-12-22 19:18:25', '0000-00-00 00:00:00'),
(11, 2, '/Resources/lib/kindeditor/attached/image/20161222/20161222192227_65555.jpg', '', '#', 2, 1, '2016-12-22 19:22:32', '2016-12-25 19:53:15'),
(12, 4, '测试导航', '', 'www.baidu.com', 1, 1, '2016-12-25 19:32:44', '0000-00-00 00:00:00'),
(13, 3, '百度', '', 'www.baidu.com', 1, 1, '2016-12-25 19:35:43', '0000-00-00 00:00:00'),
(14, 5, '/Resources/lib/kindeditor/attached/image/20161214/20161214162520_62218.png', '', '', 1, 1, '2016-12-26 10:13:03', '0000-00-00 00:00:00'),
(15, 5, '/Resources/lib/kindeditor/attached/image/20161214/20161214162155_90024.png', '', '', 1, 1, '2016-12-26 10:14:05', '0000-00-00 00:00:00'),
(16, 5, '/Resources/lib/kindeditor/attached/image/20161214/20161214161328_77035.png', '', '', 2, 1, '2016-12-26 10:20:22', '2016-12-26 16:35:15'),
(17, 5, '/Resources/lib/kindeditor/attached/image/20161214/20161214161328_77035.png', '', '', 1, 1, '2016-12-26 10:20:39', '0000-00-00 00:00:00'),
(18, 2, '/Resources/lib/kindeditor/attached/image/20161228/20161228103217_47802.jpg', '', '', 1, 1, '2016-12-28 10:32:21', '0000-00-00 00:00:00'),
(19, 2, '/Resources/lib/kindeditor/attached/image/20161228/20161228103239_17241.jpg', '', '', 1, 1, '2016-12-28 10:32:42', '0000-00-00 00:00:00'),
(20, 5, '/Resources/lib/kindeditor/attached/image/20170118/20170118141006_42181.jpg', '', 'http://www.taobao.com', 1, 1, '2017-01-18 14:10:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tb_content`
--

CREATE TABLE IF NOT EXISTS `tb_content` (
  `id` int(10) unsigned NOT NULL,
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
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='内容表';

--
-- 转存表中的数据 `tb_content`
--

INSERT INTO `tb_content` (`id`, `cate_id`, `title`, `content`, `type`, `author`, `teacher`, `score`, `score_times`, `maker_team`, `total_time`, `click_num`, `thumb_img`, `source_file`, `source_from`, `is_hot`, `is_new`, `status`, `comment_num`, `create_time`, `update_time`) VALUES
(15, 10, '05式9毫米警用转轮手枪使用教学', '&lt;p&gt;\r\n	&lt;span style=&quot;font-family:&amp;quot;font-size:14px;&quot;&gt;主要围绕05式9毫米警用转轮手枪的使用方式进行示范教学，主要分为安全与规范用枪和实弹射击教学两个部分。&lt;/span&gt; \r\n&lt;/p&gt;', 1, '特警支队 吴敬文', '', 0, 0, '', '20', 4, '/Resources/lib/kindeditor/attached/image/20161222/20161222111221_79892.jpg', '/Resources/lib/kindeditor/attached/file/20161222/20161222111237_81070.mp4', 1, 1, 1, 1, 0, '2016-12-26 10:39:06', '0000-00-00 00:00:00'),
(16, 11, '道路交通大整治培训视频', '&lt;span style=&quot;font-family:&amp;quot;font-size:14px;&quot;&gt;根据市局道路交通大整治工作的相关要求，结合分局实际情况，特制作本培训视频，供增援民警学习参考，更加合法合规的开展执法勤务工作。&lt;/span&gt;', 1, '董敏俊', '', 0, 0, '', '20', 4, '/Resources/lib/kindeditor/attached/image/20161222/20161222154843_88810.jpg', '/Resources/lib/kindeditor/attached/file/20161222/20161222154910_67472.mp4', 1, 1, 1, 1, 0, '2016-12-22 15:49:58', '0000-00-00 00:00:00'),
(17, 12, '探索警务保障工作新途径——关于社会化服务工作的思考', '&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	近年来，随着机场分局新办公大楼的落成和各类先进技术设施的投入使用，对公安后勤服务的专业化、规范化提出了更高的要求。如何通过更为高效、先进、专业的方法，提升警务保障水平，成为分局警务保障部门近来一直在思考并力求解决的课题。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	伊巴卡全场砍下21分7篮板4助攻3抢断4盖帽的全面数据，内线两次封盖庄神的强攻，成为场上最大的亮点。经过一段时间的适应和调整，伊巴卡已经完全融入魔术的战术体系，成为全队发挥最稳定的那个人。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	一、公安机关后勤社会化服务工作的引进\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公安机关后勤引进社会服务，是指公安机关各单位为保障公安职能活动的正常开展，使用国家财政经费，以规范的方式和程序，向具有一定资质的社会服务企业（机构）购买后勤服务的行为。公安机关后勤引进社会服务应遵循“依法守信、公开公平、统一标准、规范运作、等价有偿、优质高效”的原则。警务保障处作为职能部门，负责为分局物色资质较好地社会化服务单位，通过招投标或政府采购的形式与社会化服务单位签订正式合同，并对今后社会化服务单位的工作进行指导、监督和管理。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公安机关后勤引进社会服务的范围主要包括：设施设备服务（包括设施设备的日常管理、维修和保养），物业管理服务（包括保洁服务、会务服务等），餐饮服务（包括分局每日正常的用餐保障；重大节日、重要活动和各类应急任务的餐饮保障；会议用餐保障；以及食堂的卫生保洁和餐具的清洁），车辆管理服务（包括车辆的日常管理以及维修保养等）、绿化服务（包括办公室内绿化布置和机关大院各区域绿化环境的日常养护。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二、引进后勤社会化服务工作所取得的主要成效\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（一）优化了服务管理手段，提高了服务保障能力2009年之前，分局的后勤服务保障主要依靠机关内部人员提供。由于历史原因，公安后勤整体队伍存在年龄偏高、文化偏低、专业技术人才欠缺等问题，无法适应现代公安工作快节奏、高效率的实际保障需要。2009年改革后，分局开始逐年引入社会化服务企业，借助社会资源提供服务保障，包括承担楼宇管理职责的世德物业公司、提供餐饮保障的高校餐饮公司、承担车辆管理职责的强生公司、这些企业因专门从事某项工作，本身具备一套较为系统和规范的管理模式，特别在设备管理、能源材耗管理上具有较强的专业经验和科学合理的操作程序，因此往往能提供更加优质的服务。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	同时，实行后勤服务化，有利于进一步提高机关行政效率和资金使用效益，将公安后勤服务保障能力提高到一个新的层次和水平，社会化服务单位提供的服务相比原来\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	同时，实行后勤服务化，有利于进一步提高机关行政效率和资金使用效益，将公安后勤服务保障能力提高到一个新的层次和水平，社会化服务单位提供的服务相比原来“自我保障”时期，其质量、水平、工作效率都有了较大程度的提高。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二、引进后勤社会化服务工作所取得的主要成效\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	改革前，因受传统习惯思维影响，大部分民警对公安后勤工作的思想认识还停留在把后勤部门看做是“打杂的、体力活”阶段，甚至把后勤岗位看成是养“老弱病残”的部门，后勤人员整体素质和队伍建设得不到足够的重视。后勤服务社会化改革对传统后勤观念进行了一次深刻的革命，新的后勤体制和机制的建立使人们站在一个新的起点和高度，重新认识机关后勤的地位、作用和要求。对于后勤岗位民警来讲，大部分人都认识到在新形势下自己原来的经验、能力、知识方面的薄弱和不足，增强了努力学习、尽快提高业务素质的意识和紧迫感；对于各级领导来讲，更是进一步树立了“后勤管理也是专业化、知识化管理”和“人才兴后勤”的观念，强化了市场、竞争、科学、法治、规范、效率、成本等现代后勤意识，并开始注重将知识型、复合型管理人才安排到后勤岗位，不断提升整个后勤岗位民警的管理水平和管理层次。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	三、公安机关后勤社会化服务工作的发展趋势\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	“管理精细化、保障合法化、服务社会化”是警务保障工作改革的目标和总体发展方向。用社会专业服务公司取代机关自我保障是市场经济条件下公安机关后勤服务发展的必然趋势。就目前机场分局的现状而言，由于经费投入、立式条件、基础设施建设情况、领导思想观念等因素的限制，导致后勤社会化服务工作尚未成熟，很多方面还有待进一步的深化发展和不断推进。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（一）实施精细化管理，全面提高后勤管理与服务水平\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	后勤精细化管理就是指后勤的管理者紧紧围绕“以人为本”的管理理念，以精细的态度，在后勤服务各方面落实细节管理，提高工作标准，减少或避免工作失误与不足，实现后勤管理效益的最大化和最优化。加强规范化服务、精细化管理是分局后勤管理实现新目标，迈向新高度，接受新挑战的要求。管理精细化的核心问题是管理思想、管理组织、管理方法的精细化，它具体反映在后勤工作的规范化、程序化、标准化中。具体而言，包括制度建设的规范、管理机制的健全、工作程序的完善、服务标准的建立等。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（二）以合同管理为核心，探索社会化管理的新方法\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	引入社会竞争机制，由社会力量承担后勤服务任务，逐步实现社会化服务。市场经济体制的建立与完善为公安机关后勤社会化改革提供了有利的环境条件。近几年，机场分局在后勤社会化改革中紧紧抓住机遇，解放思想，创造条件，从分局长远发展出发，将自办后勤交给社会行业部门承担管理与服务，逐步实现后勤社会化。要做好社会化服务的管理工作，必须要以合同管理为核心。各项服务工作以合同形式规范双方的权利义务，今年共签订了厨房设施设备维修、厨余垃圾处理、卡机维护、空调系统保、物业管理、绿化养护、电梯维保等13项合同。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（三）以科学发展观为核心，推进后勤服务社会化改革\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	社会化推进工作必须立足现实、着眼长远、循序渐进，要善于运用和掌握市场经济法则，择优引进社会服务企业，要“花钱买优质服务”，确保机关后勤服务质量。同时，要进一步引进高素质的专业性、知识性、经营性管理人才，要以科学发展观指导机关后勤服务社会化改革的深入推进，坚持“管理科学化、保障法治化、服务社会化”的机关后勤总体改革方向，勇于创新，积极实践，突破瓶颈，深化改革，进一步完善公安机关后勤管理体制，规范公安机关后勤保障制度，加快公安机关后勤服务社会化进程，使全局机关后勤的服务保障模式始终与全市经济社会发展和公安业务发展形势相适应。\r\n&lt;/p&gt;', 2, '机场公安分局', '', 4, 1, '', '', 4, '/Resources/lib/kindeditor/attached/image/20161214/20161214162520_62218.png', '', 1, 1, 1, 1, 0, '2016-12-22 16:52:39', '2016-12-28 10:51:35'),
(18, 13, '探索警务保障工作新途径——关于社会化服务工作的思考', '&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	近年来，随着机场分局新办公大楼的落成和各类先进技术设施的投入使用，对公安后勤服务的专业化、规范化提出了更高的要求。如何通过更为高效、先进、专业的方法，提升警务保障水平，成为分局警务保障部门近来一直在思考并力求解决的课题。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	伊巴卡全场砍下21分7篮板4助攻3抢断4盖帽的全面数据，内线两次封盖庄神的强攻，成为场上最大的亮点。经过一段时间的适应和调整，伊巴卡已经完全融入魔术的战术体系，成为全队发挥最稳定的那个人。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	一、公安机关后勤社会化服务工作的引进\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公安机关后勤引进社会服务，是指公安机关各单位为保障公安职能活动的正常开展，使用国家财政经费，以规范的方式和程序，向具有一定资质的社会服务企业（机构）购买后勤服务的行为。公安机关后勤引进社会服务应遵循“依法守信、公开公平、统一标准、规范运作、等价有偿、优质高效”的原则。警务保障处作为职能部门，负责为分局物色资质较好地社会化服务单位，通过招投标或政府采购的形式与社会化服务单位签订正式合同，并对今后社会化服务单位的工作进行指导、监督和管理。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公安机关后勤引进社会服务的范围主要包括：设施设备服务（包括设施设备的日常管理、维修和保养），物业管理服务（包括保洁服务、会务服务等），餐饮服务（包括分局每日正常的用餐保障；重大节日、重要活动和各类应急任务的餐饮保障；会议用餐保障；以及食堂的卫生保洁和餐具的清洁），车辆管理服务（包括车辆的日常管理以及维修保养等）、绿化服务（包括办公室内绿化布置和机关大院各区域绿化环境的日常养护。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二、引进后勤社会化服务工作所取得的主要成效\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（一）优化了服务管理手段，提高了服务保障能力2009年之前，分局的后勤服务保障主要依靠机关内部人员提供。由于历史原因，公安后勤整体队伍存在年龄偏高、文化偏低、专业技术人才欠缺等问题，无法适应现代公安工作快节奏、高效率的实际保障需要。2009年改革后，分局开始逐年引入社会化服务企业，借助社会资源提供服务保障，包括承担楼宇管理职责的世德物业公司、提供餐饮保障的高校餐饮公司、承担车辆管理职责的强生公司、这些企业因专门从事某项工作，本身具备一套较为系统和规范的管理模式，特别在设备管理、能源材耗管理上具有较强的专业经验和科学合理的操作程序，因此往往能提供更加优质的服务。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	同时，实行后勤服务化，有利于进一步提高机关行政效率和资金使用效益，将公安后勤服务保障能力提高到一个新的层次和水平，社会化服务单位提供的服务相比原来\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	同时，实行后勤服务化，有利于进一步提高机关行政效率和资金使用效益，将公安后勤服务保障能力提高到一个新的层次和水平，社会化服务单位提供的服务相比原来“自我保障”时期，其质量、水平、工作效率都有了较大程度的提高。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二、引进后勤社会化服务工作所取得的主要成效\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	改革前，因受传统习惯思维影响，大部分民警对公安后勤工作的思想认识还停留在把后勤部门看做是“打杂的、体力活”阶段，甚至把后勤岗位看成是养“老弱病残”的部门，后勤人员整体素质和队伍建设得不到足够的重视。后勤服务社会化改革对传统后勤观念进行了一次深刻的革命，新的后勤体制和机制的建立使人们站在一个新的起点和高度，重新认识机关后勤的地位、作用和要求。对于后勤岗位民警来讲，大部分人都认识到在新形势下自己原来的经验、能力、知识方面的薄弱和不足，增强了努力学习、尽快提高业务素质的意识和紧迫感；对于各级领导来讲，更是进一步树立了“后勤管理也是专业化、知识化管理”和“人才兴后勤”的观念，强化了市场、竞争、科学、法治、规范、效率、成本等现代后勤意识，并开始注重将知识型、复合型管理人才安排到后勤岗位，不断提升整个后勤岗位民警的管理水平和管理层次。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	三、公安机关后勤社会化服务工作的发展趋势\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	“管理精细化、保障合法化、服务社会化”是警务保障工作改革的目标和总体发展方向。用社会专业服务公司取代机关自我保障是市场经济条件下公安机关后勤服务发展的必然趋势。就目前机场分局的现状而言，由于经费投入、立式条件、基础设施建设情况、领导思想观念等因素的限制，导致后勤社会化服务工作尚未成熟，很多方面还有待进一步的深化发展和不断推进。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（一）实施精细化管理，全面提高后勤管理与服务水平\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	后勤精细化管理就是指后勤的管理者紧紧围绕“以人为本”的管理理念，以精细的态度，在后勤服务各方面落实细节管理，提高工作标准，减少或避免工作失误与不足，实现后勤管理效益的最大化和最优化。加强规范化服务、精细化管理是分局后勤管理实现新目标，迈向新高度，接受新挑战的要求。管理精细化的核心问题是管理思想、管理组织、管理方法的精细化，它具体反映在后勤工作的规范化、程序化、标准化中。具体而言，包括制度建设的规范、管理机制的健全、工作程序的完善、服务标准的建立等。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（二）以合同管理为核心，探索社会化管理的新方法\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	引入社会竞争机制，由社会力量承担后勤服务任务，逐步实现社会化服务。市场经济体制的建立与完善为公安机关后勤社会化改革提供了有利的环境条件。近几年，机场分局在后勤社会化改革中紧紧抓住机遇，解放思想，创造条件，从分局长远发展出发，将自办后勤交给社会行业部门承担管理与服务，逐步实现后勤社会化。要做好社会化服务的管理工作，必须要以合同管理为核心。各项服务工作以合同形式规范双方的权利义务，今年共签订了厨房设施设备维修、厨余垃圾处理、卡机维护、空调系统保、物业管理、绿化养护、电梯维保等13项合同。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（三）以科学发展观为核心，推进后勤服务社会化改革\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	社会化推进工作必须立足现实、着眼长远、循序渐进，要善于运用和掌握市场经济法则，择优引进社会服务企业，要“花钱买优质服务”，确保机关后勤服务质量。同时，要进一步引进高素质的专业性、知识性、经营性管理人才，要以科学发展观指导机关后勤服务社会化改革的深入推进，坚持“管理科学化、保障法治化、服务社会化”的机关后勤总体改革方向，勇于创新，积极实践，突破瓶颈，深化改革，进一步完善公安机关后勤管理体制，规范公安机关后勤保障制度，加快公安机关后勤服务社会化进程，使全局机关后勤的服务保障模式始终与全市经济社会发展和公安业务发展形势相适应。\r\n&lt;/p&gt;', 2, '小语言', '', 0, 0, '', '', 3, '/Resources/lib/kindeditor/attached/image/20170105/20170105171331_15888.jpg', '', 1, 1, 0, 1, 0, '2017-01-05 17:13:49', '0000-00-00 00:00:00'),
(19, 13, '关于调动民警工作积极性的一些想法', '&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公安工作的开展情况，很大程度上取决于每一个民警个体的工作积极性。公安民警一方面要严厉打击违法犯罪活动，同时又要服务好广大群众，工作强度和工作压力远远高于与其他政府机关公务员。特别是在当前我国社会经济文化高速发展的转型期，政府和公民对公安民警的要求越来越高，民警身上的压力越来越大，很多公安民警对工作产生了不同程度的职业倦怠。 因此，如何了解民警的心理、懂得民警的需求，充分调动民警的工作积极性，成为公安队伍建设的一项重要课题。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	一、民警需求的理论研究\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（一）美国心理学家马斯洛的《人类动机理论》一书为人类需求理论奠定了基础。需求理论认为人的需求是客观存在的，而且人的所有有目的的行为都与人的需求密切联系在一起，因此激励就必须以需求为起点。他在书中阐述了人的基本需要可以分为五个层次：生理需要、安全需要、归属需要、尊重需要和自我实现需要。 这五种需要逐级递进，当满足了一层次的需要后，个体会向更高层次的需要发展。组织及其管理者者的任务就在于采取相应的措施方法，来满足不同人的不同需求，以引导和激励人的行为，最终实现组织的目标。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（二）耶鲁大学的克莱顿.奥尔德弗教授在马斯洛需要层次理论的基础上，进一步提出了生存——关系——成长（ERG)理论。他认为人有三种核心需要：生存需要（包括生理需求和安全需求）、关系需要(社交、人际关系、相互尊重的需要〉、成长需要（自尊和自我实现的需要）。这一理论的提出具有重要的意义，ERG理论提出各种需要可以同时具有激励作用；如果较高层次的需要未得到有效满足，就会退而求其次，加强低一层次的需要追求。 奥尔德弗的ERG理论是对马斯洛需要层次理论的修正与完善，在实践中更具灵活性和操作性。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	不管是马斯洛需要层次理论还是奥尔德弗的ERG理论，都指出了满足个体各层次的需要是个体行为的主要目的和源动力。因此，公安队伍建设工作要紧紧围绕积极回应和满足民警各层次的个人需要，才能有效地激发民警的工作热情、调动民警的积极性。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二、民警个人的需求状况\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	2012年10月，市局团委对全市1358名青年民警进行了问卷调查，并访谈了17个分县局的105位民警后完成了《2012年上海市公安分县局青年民警思想状况调查报告》（沪公团〔2012〕41号）。报告为我们了解当前民警队伍的思想状况提供了有力的参考。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	在谈到当前的困扰时，有21.6%的从警3至10年的青年选择了“当前岗位可作为空间有限”，比例居各警龄段之首；在被要求按照“实际情况和能力”决定去向时，青年民警选择离开公安从事“其他公务员工作”、“更能体现自我价值工作”的比例随着警龄增加而递增，其中，32%的工作满10年的青年选择“其他公务员”，高居首位。纵观各年龄段的青年民警，尤其是从警时间越长的青年，表现出自我实现的需求较为强烈。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	当被问到“除了升职、提薪外，有哪些是最能提升你工作幸福指数”的问题时，超过6成的青年民警选择了“在工作量无法减少的客观条件下，能让工作强度变得有弹性”，超过5成选择了“有个好领导”和“每年能按个人意愿安排至少一趟假期内的旅游”，远超其他选项。在关于弹性工作的调查中，有近28%的民警认为“安排不合理，存在干耗现象”的情况一直困扰着自己。调查中可以看到大多数青年民警在休息与工作这个问题上懂得顾全大局，但是对舒缓压力和获得尊重的需求有着更大的渴望。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	在问及“真正长期导致你有压力感的是什么”时，“复杂的人际关系”选项高居前列，可见对和谐的团队氛围和归属感的需求十分强烈。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	市局团委的这份调查报告虽然只抽取了35周岁以下的青年民警作为调查对象，但民警对于归属的需要、获得尊重的需要、自我实现的需要等心理需求只会随着年龄的增长不断增强，因此，对于研究整个公安队伍的基本需求也具有参考意义。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	三、激发民警的工作热情\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	通过以上研究可以看出，公安队伍激励机制要真正发挥作用，就要从民警个人的多层次需要出发，通过对民警个体需求的认同、认可，并为民警满足自身需求提供实现途径，采取多种激励方法，丰富激励内容，才能激发民警的内的在动力，调动起民警的工作积极性。为此，本文试着从民警需求的角度出发，谈一谈调动民警工作积极性的一些探索措施：\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（一）尊重民警生理需要，提升民警幸福感\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	在实际工作中，广大公安民警面对着过大的工作和精神压力，一直处于超负荷工作的状态中，缺乏生理的休息时间，缺少心理的压力释放，在很大程度上影响着民警的身心健康。北京市公安局一份调查显示，有72.56％的公安民警自感工作量“较重”或“非常重”，每天工作超过8小时的人数比例高达77.13％，有69.37％的公安民警每周加班10小时以上，能正常休假的人数比例只占16.41％，甚至有20.57％的公安民警从未休过假。 职业的特殊性决定了警察常常超负荷工作，警察压力与权利保障滞后的冲突就会导致警察身心能量逐渐被职业耗尽，产生倦怠心理。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（但是要在现有公安工作的任务压力下，保证民警的休息权，减轻民警工作压力和心理压力，就需要大幅度增加警力来达到合理的警民比例（截止2012年，上海市常住人口为2380万人，民警人数为4.77万人，警民比例约为万分之二十，而发达国家平均的警民比例为万分之三十以上 ，如要达到发达国家水平，上海至少还需增加三分之一的警力）这在短期内是难以实现的。因此我们还是要把目光放到如何善用警力、科学用警上来。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	一是在警力的使用上要注重成本管理的理念。从我国固有的行政管理习惯来看，政府部门的人力使用往往只看“政治账”，不算“经济账”，没有把人力也作为一种有限的资源来看待，在公安队伍管理中，也普遍存在这种情况。公安工作高风险、高强度、高负荷的特点，使民警长期处于生理和心理的紧张状态，警力资源的使用原已透支，因此，引入成本管理的理念就显得格外重要。科学用警，就是要讲究警力投入和社会效益的产出，避免不必要的警力投入、一哄而上的全警出动。在投入警力之前，先盘点现有的警力资源，再科学测算警务工作需求量，精打细算，像花钱一样用警力，避免无谓的警力浪费。在工作分配上，要注重工作量和工作范围的结合，工作量大的岗位要适当缩小工作范围，工作量小的岗位要适当扩大工作范围，真正以公安业务量为标准，调整各层级公安机关警力配比标准，避免出现不同部门、不同岗位民警之间的忙闲不均现象。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二是创新队伍管理，提升幸福指数。英国行为科学家亚当斯1965年提出公平理论，其基本要点是：人的工作积极性不仅与个人实际报酬多少有关，而且与人们对报酬的分配是否感到公平更为密切。人们总会自觉或不自觉地将自己付出的劳动代价及其所得到的报酬与他人进行比较，并对公平与否做出判断。这种公平感能够直接影响员工的工作动机和行为。 薪酬保障和职务晋升是基层民警的一个重要需要，但公安民警属于国家公务员系统，公安机关的薪酬水平与编制体系均受公务员制度的制约。公安民警与其他公务员相比，工作负荷和危险程度远远高出其他公务员，但收入却相差无几；在人事管理上由于公安机关的民警人数远高于其他行政单位，但行政级别套用的职务体系却与其他行政单位相同，受职位限制，晋升尤为困难。与其他同级别的公务员相比较，很容易使公安民警感到自己的辛勤工作未得到相应的回报，产生倦怠情绪。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公安机关的薪酬、编制问题各级政府都在认真调研，寻求解决办法，但在短时间内也是无法立即改变的。不过市局团委的调查报告却可以给我们一些启发：面对“除了升职、提薪外，有哪些是最能提升你工作幸福指数”的问题，青年民警的要求很简单。无法增加薪酬、无法增加职位，那不如就“奖幸福”。比如：工作出色的民警可以享受更多的“优先权”，优先获得学习、培训、晋升的机会、优先考虑其休假申请；取得成绩的民警奖励更大的“工作弹性”，让民警根据需要弹性安排自己的休息时间，或者可以适当晚一些上班，早一些下班；表现突出的民警可以增加休假，请假5天给7天，协调上有难度的组织上帮忙解决，等等。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	把“弹性工作”、“休假旅行”等内容提升到幸福感的层面来运作，既激励了先进、激发了干劲，同时也必然带来很好的示范效应，因为“幸福感”比起职级、金钱、荣誉来的更具普遍意义。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（二）强化手足亲情意识，提升民警归属感\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	心理学研究表明，归属感强烈的人会对自己从事的工作产生激情，责任感增强。相反，就会倍感孤独和寂寞，工作没有积极性。产生归属感的前提是深刻感知到自己在群体或组织中的存在和认可。为此，队伍建设要强化手足亲情意识，让民警切身地感受到组织的温暖和个人在团队中的重要存在，努力为民警的心灵归属创造良好的人文环境。加强民警归属感，可以从两方面着手：\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	一是关注民警心理，了解民警需求。各级领导，尤其是基层领导能在工作生活上给予民警悉心关注、真诚交流、热心帮助是对民警最直接的认可和激励，是帮助民警融入队伍、安心工作、甘于付出、实现自我的开门钥匙，最后都将表现在民警对工作、对他人、对自身的积极态度上。各级领导干部应充分关注民警心理状况，经常与民警沟通交流，细致地做好心理疏导，及时发现和解决心理问题，让民警感受组织、团队的温暖。创造团结向上、互帮互助、荣辱与共的团队氛围，能够增强民警彼此之间的相互交流，充分激发民警的工作热情，加强与领导之间的沟通，增加工作透明度，从而激发出更高的工作热情，并使之转化为更强的战斗力。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二是民警在有困难时都能得到帮助。积极帮助成员解决实际困难，这是产生归属感的基础。因此，队伍建设工作要从民警的心理、工作、家庭等各方面入手，力所能及地帮助民警解决各种困难。俗话说的好，一个成功的警察背后往往有一个辛酸的家庭，公安民警全身心投入工作中时，必定减少了对家庭的付出。激励手段实施中要注重与民警家属的沟通交流，努力解决民警家庭在各方面遇到的问题，积极为民警创造一个和谐轻松的家庭环境。有时候民警未必需要组织给予多大的物质或人力帮助，一份来自组织的真诚关心足矣。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（三）强化民主氛围，尊重民警意见\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公安管理心理学研究发现，如果公安部门的领导能够充分运用民主激励，引导民警参与民主管理，让民警感受信任，那么这个公安实战单位的凝聚力就会不断增强，也会切实行使好各种管理权力。在工作中健全民主议事机制，是充分发挥民警个人聪明才智，有效调动工作积极性的一种有效方式，更为重要的是体现了对民警的尊重。因此，管理部门在进行各种决策时应多倾听民意，广泛征求民警的意见建议，努力形成工作共识，提高办事情、做决策的执行力。否则，再好的思路、再好的办法，在执行上也会大打折扣。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（四）加强理念教育，推动民警自我激励\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	加强人民警察理想信念教育，能为民警自我尊重提供强大的精神支撑，也为民警自我激励、自我鞭策提供动力。人是要有一点精神的，也就是说人要有理想信念。理想信念是人生的支柱和前进的灯塔。理想信念一旦形成，就有了正确的方向和强大的精神支柱，就会矢志不渝地献身于伟大的事业而不畏任何艰险。我们的公安队伍建设，应当以理想信念为引导，立足于机场公安本职岗位，强化民警的自我激励，以“铸造卫士魂、争当排头兵”为目标，激励民警牢固树立服务意识、不断提高道德理论修养、提高服务能力、加强自我监督约束，引导民警进入一个自我尊重、相互尊重的良性循环方式中。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（五）多措并举，为民警自我实现搭建平台\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	一是以“人”为本，关爱民警个人职业发展。在公安队伍管理工作中，要将每一名公安民警作为独立的客体来看待，客观评估民警个人的优势和弱点，有针对性地帮助民警进行职业发展规划。将每个公安民警的成长作为一项长期的人力资源投资进行考量，设计出较为系统、合理的人才选拔、培养、管理和使用机制，按民警个人能力和职业兴趣，将培养对象分为指挥人才、专业人才、技术人才三类，分类进行有目的性地培养，同时倾听民警需求，注重民警的价值取向，最大限度开发民警的潜能。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二是健全选人用人机制，激励个人成长进步。每个人都有进步的愿望和追求，个人进步是实现自我价值的重要体现。而公务机关个人进步的实现往往只能通过职级晋升一条路，虽然目前公安机关开展了非职务晋升工作，但僧多粥少的局面仍然没有被打破，民警获得进步和认可的渠道仍然较少。为此，我们还应该探索更多符合公安基层工作特点的非晋升评价体系，建立“能手、标兵、人才、专家”等称号与奖励制度以及与之配套的用人培养机制，搭建丰富的职业成才构架。通过不断丰富民警自我实现的方式，使优秀人才脱颖而出，才能使民警感觉到被认可和尊重，对民警队伍产生激励作用。同时还应积极营造公平、公开、民主、竞争选人用人环境，使民警对获得的进步更加珍惜，倍受周围认可，由此产生的正向效应会更深远。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	三是加强榜样激励，点燃“草根”热情。管理学的正面激励理论认为，对个体的某种行为给予褒奖，就会增加这种行为出现的概率。但公安机关现行激励机制在先进典型成名后，往往在较长时间内使其集各种荣誉、奖励于一身，形成多者越多、少者恒少的不良循环。激励过分集中在少数人身上，既不利于调动广大民警的积极性，且先进典型本身可能也会产生思维定势，不利于其取得更大成绩。因此，在树立典型发挥榜样作用的同时，也要兼顾整体，以调动全体民警的积极性。美国在建国初期宣扬的“美国梦”，就是一个尽其所能宣扬“草根”奋斗故事的模式，有效激励了来自不同种族、不同地域、不同文化的人群。我们的队伍建设工作也可以对此充分借鉴，努力渲染一个个故事，从小小的“草根”处挖掘，给予每一个小人物“被认可”的机会，而不必纠结于提炼“工作法”和拔高“价值观”，用更为大家所接受的方式去激励队伍；把我们的核心价值观、公安理念拆解到一个个故事中，传递到队伍里的每一颗心中。目前分局已经基本建立了一事一奖机制，在分局网页“队伍建设”栏目中对民警先进事例进行通报表扬。但个人感觉通报表扬的内容基本还局限于极为突出的事例，有很多基层民警在工作中无私奉献、默默付出的事例还没被发掘。建议各基层部门应进一步发掘民警的先进事例，分局也同时放宽通报表扬的门槛，很多时候民警的辛苦付出未必会有轰轰烈烈的结果，但并不代表这些事例就不值得被认可、被表扬。只有对民警日常认真、负责态度的认可和表扬，才能激励民警更用心地工作，才能在关键时刻有出色表现。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	建立与完善警察激励机制是公安队伍建设的必然要求与重要内容，希望本文从民警需求角度出发的一些想法，能够对调动民警工作积极性，激发民警工作热情的研究提供一些帮助。\r\n&lt;/p&gt;', 2, '机场公安', '', 0, 0, '', '', 0, '', '', 1, 1, 0, 1, 0, '2016-12-22 16:58:22', '0000-00-00 00:00:00'),
(20, 12, '浅谈全警消防模式下派出所消防工作存在的问题与对策', '&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公安部73号令明确了公安派出所履行消防监督三级管理职责，分局根据机场地区实际情况，于2011年制定了《二级消防监督工作的实施意见》，进一步规范了分局各派出所、警务区消防监督执法，这些规定对消除火灾隐患，进一步推进消防工作社会化，都起到了积极的作用。但在实际工作中，往往派出所、警务区的消防监督检查工作只是停留在表面和形式上，工作职责不尽落实，管理形式较为简单粗放，列管单位存在的火灾隐患得不到及时有效消除。笔者结合工作实践，浅谈对公安派出所消防监督工作的体会和感受。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	一、当前派出所、警务区消防工作存在的问题\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（一）消防工作责任不落实，完成任务多应付\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	自推进“全警消防”战略以来，公安派出所消防工作水平得到了提高，派出所各警种按要求开展消防监督工作的局面初步形成。但仍有个别派出所，对于日常监督检查、完成指令性工作任务等有些浮于表面或流于形式。消防监督检查不够深入，消防工作核心“主业”地位还不牢固，消防工作尚未形成所领导、专（兼）职民警、责任区警长、辖区民警联动机制。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（二）消防民警作用不明显，消防业务不专业\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	派出所设置消防专（兼）职民警岗位已3年，消防专（兼）职民警的设立从一定程度上解决了派出所、警务区无专人从事消防监督管理的难题。2011年，分局根据市局要求各派出所、警务区设立了1—2名兼职消防民警，但往往是其他岗位兼消防，从工作量上是兼顾消防的现象。同时，个别派出所消防管理仅依靠消防民警唱“独角戏”，辖区民警只是“蜻蜓点水”，使得派出所消防工作体系出现了断层。消防民警与责任区警长、辖区民警之间甚至出现了不愿消防民警到责任区内开展消防检查的现象，使得消防民警难以有效开展工作。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（三）信息资源共享不互通，辖区情况难掌握\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	由于受警务模式的约束和影响，消防民警对辖区情况做不到了如指掌，与辖区民警直接沟通少；而大部分辖区民警对于辖区情况熟悉，但消防专业知识少，不易发现火灾隐患，即使发现了隐患有的也认为整改隐患是消防民警的责任，信息出现严重的阻断，导致信息上不来，要求下不去。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	绝大部分航空货运销售代理人在安全管理制度的建设和落实中缺少积极性和主动性，内部安全管理制度不健全，货物安全控制措施不到位，特别是在快递行业，跨区域或者全国性配送服务的快递企业大多为民营企业，大部分以加盟形式进行扩张。上海地区快递企业共有1000余家，品牌规模以上近20家。例如此次被航协取消航空货运代理资质的圆通、韵达公司均采取加盟形式，总部对加盟网点监督手段少、制度难落实，对收取的货物没有进行安全控制，未能有效防止将危险品作为普通货物运输的安全隐患。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（四）监督管理压力不递减，辖区民警难作为\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	随着派出所工作任务的不断“扩容”，工作压力并不是层层递减，而是逐步压在了辖区民警身上，公安工作千头万绪，辖区民警精力明显不济、难以招架。另外，辖区民警消防业务知识欠缺，无系统性、有效性地学习和培训消防知识，仓促上阵导致大多数民警在工作中无法“有的放矢”，难以发现和督改火灾隐患，对消防违法行为的查处效率不高。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（五）业务指导培训效果不理想，二级管理难贯彻\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	随着世博安保、清剿、党的十八大战役、冬春行动等重大保卫、专项行动的持续开展，一茬接着一茬地工作使得防火监督员长期处于超负荷工作状态。防火监督员对辖区重点单位、区域、保卫对象的监管工作，不可避免地出现了对派出所指导工作的疏漏和缺失。靠每月一、二次的“驻所作业”仅是“杯水车薪”，民警的轮值轮训和脱产培训等往往又把消防培训排列在外，日常业务培训也是理论讲述多、实务操作少，培训与实践存在脱节。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二、推进当前派出所全警消防的对策\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（一）统一思想，设岗定人，盘活资源\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	派出所、警务区消防工作不能仅仅只依靠兼职消防民警，分管领导、责任区警长、辖区民警等都应是消防工作的“实践者”，做好二级消防工作，应当依靠派出所、警务区全体民警，合力开创、共同努力。一是要端正思想态度。坚持从《消防法》、沪公发〔2011〕127号和沪公机[2011]157号文出发，明确消防工作是派出所、警务区唱“主角”，分管领导要切实把消防工作当成派出所、警务区工作的重要内容来抓，树立起 “一盘棋”的全局意识，将消防工作置于和治安防范、打击破案等警务工作同等重要的地位。二是要设岗定人，选择合适的民警担任消防民警。要选择想干事、能干事、会干事的同志担任专（兼）职消防民警。同时，各派出所、警务区在调整专（兼）职消防民警时，尽量听取防火部门的意见和建议，以保证队伍的稳定性。三是要按照责任区警务模式设置专管民警。推行各责任区设立1名以消防工作为主业的民警，各责任区消防民警业务上受分管所长领导，真正做到分工合理、执行顺畅，充分发挥派出所、警务区消防监督的管理优势，以确保社会消防环境的安全稳定。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（二）全警定责，立好方圆，架好体系\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	全警消防、多警联勤，派出所、警务区是根基，也是关键。派出所、警务区各警种要明确消防工作也是公安业务之一。一是要明确辖区民警消防管理范围。要以辖区单位名册为基础，明确辖区民警的管辖单位范围和排查整改隐患的职责，对辖区新增单位辖区民警必须及时列入单位名册，并逐级上报；引导辖区民警以消防工作为抓手，突破治安、内保等相关工作的棘手问题，相辅相衬，相互兼顾、互不偏废。二是要明确专（兼）职消防民警的任务。要防止消防民警与辖区民警出现忙闲不均的现象，分局目前正在建立的“消防工作室”就要求各派出所、警务区根据各自辖区情况，设定消防重点列管标准，符合标准的均由消防民警负责到底，其余均有辖区民警负责，防止出现辖区社会单位既由消防民警又由辖区民警的交错管理情况。三是要确立派出所、警务区消防管理体系。分管领导应在制度上保障所内专（兼）职消防民警队伍的相对稳定，需调整时应与防火部门及时沟通，做到交接有序，形成统一管理、统一安排；要健全所内消防工作制度和职责，不断完善消防档案、社会单位基础台帐，以达到“纵向到底，横向到边”的“大消防”监管体系，促进消防监督管理工作的不断深入开展。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（三）导向管理，用好平台、树好典范\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	二级消防管理要求派出所、警务区的消防工作必须由单位主要领导亲自负责，副所长具体分管，只有这样消防管理才能出实效。一是要发挥考核“指挥棒”作用。明确分管领导、专（兼）职消防民警、责任区警长的工作责任，将考核引入责任区层面，由专（兼）职消防民警指导辖区民警开展消防检查工作，责任区警长督促辖区民警开展消防工作。防火部门与派出所、警务区联合开展定期、不定期督查，实地检查与台账检查结合，日常检查与季度、年终考评结合，坚持因地制宜，量身定做考核标准；坚持以问题管理为导向，突出重点，主动管理，鼓励创新，攻坚克难，服务全局。二是要发挥“民警讲坛”平台。健全培训指导制度，防火部门应加大对派出所、警务区领导、专（兼）职消防民警、责任区警长、辖区民警的分层次培训力度，开展针对性强、实用性强的消防业务培训，扩大“驻所作业”频次，及时掌握信息，使专（兼）职消防民警真正在消防业务上“专”起来，为派出所消防监督管理工作提供有力支撑。三是要发挥模范“引路人”效应。借势“消防工作室”建立的东风，加强工作交流，及时推广工作经验，手把手传帮带，完善“全警消防”工作机制和“多警联勤”执法机制，以点带面，切实将先进经验转化为常态机制，不断完善派出所消防监督管理工作体系。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	（四）业务先指导，驻所作业、开好例会，当好桥梁\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	防火部门作为派出所、警务区消防工作的业务指导职能部门，必须切实加强业务指导，坚持以“问题管理”为导向，扎实推动“全警消防”战略。一是要深入开展“驻所作业”。防火监督员应每周不少于一次半天时间，开展派出所“驻所作业”； “驻所作业”应包含每周执法例会分析、跟班监督检查、执法业务专题指导、执法办案带训等环节，并将开展驻所作业的工作情况一一记录在案。二是要坚持联席会议制度。防火部门坚持每季度由治安支队、交警支队、各派出所、警务区分管所长参加的联席会议。在分析通报本季度工作开展情况和同时对下季度工作打算进行部署，特别是强调近期的重点消防工作。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	　派出所、警务区消防管理工作是“全警消防”工作的核心。防火部门在指导帮助派出所、警务区开展消防工作时，要找准薄弱环节，明确对策、创新管理手段、敦促派出所、警务区切实履行消防监督职责，为辖区稳定的社会环境作出应有的贡献。\r\n&lt;/p&gt;', 2, '公安新人', '', 0, 0, '', '', 1, '', '', 1, 1, 0, 1, 0, '2016-12-22 17:17:10', '0000-00-00 00:00:00'),
(21, 11, '浅析机上非法干扰事件处置（上）', '&lt;span style=&quot;font-family:&amp;quot;font-size:14px;&quot;&gt;主要由东航培训部徐睿教官就飞机上非法干扰事件的处置结合东航的实际工作情况展开授课。&lt;/span&gt;', 1, '东航培训部 徐睿', '', 0, 0, '', '30', 6, '/Resources/lib/kindeditor/attached/image/20161222/20161222172107_30805.jpg', '/Resources/lib/kindeditor/attached/file/20161222/20161222154910_67472.mp4', 1, 1, 1, 1, 0, '2016-12-22 17:21:35', '0000-00-00 00:00:00'),
(22, 12, '从案到人”和“从人到案”两条腿走出机场刑侦路', '&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		由于刑事侦查工作最基本的目的就是侦查破案，所以刑事侦查永恒的主题只能是：提高破案的效能。除了客观上的物质装备、人员素质和管理水平以外，我们主观上的侦查观念和侦察模式也一直是影响着破案效能的一个关键因素。随着航空业飞速发展，近年来，上海机场的治安形势和犯罪特点也随之变化，刑事侦查工作如何适应现代航空港的形势，找到真正适应当前我们侦查工作任务的战略战术，努力提高破案的效能，是一个不得不与时俱进的课题，探索在新形势下，符合机场特点的侦查观念和侦查模式已逐渐成为一项当务之急。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		一、“从案到人”和“从人到案”两条腿走路的重要性和必要性\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		随着我国改革开放和市场经济，以及航空业的高速发展，人员的流动性不断加大，智能手机和网络等新技术也日新月异，机场刑事犯罪形势发生了很大变化，案件总量不减，而且时常发生有影响的案件，犯罪手段不断更新，如果依然沿袭传统的以“从案到人”为主的侦破方式，会导致破案总量上不去，也会导致有些案件隐匿积蓄，到时集中爆发，会给工作带来被动，造成机场治安控制能力减弱，影响机场整体形象。目前，很多侦查员都存在有案便动，无案无事的思想和情况，因此，我们要更新观念，打破传统的思维方式和侦查模式，树立“以人为本”的侦破思想。不单要将传统的“从案到人”的侦查观念和模式继承好，争取结合实际有所发扬、有所创新；还要将“从人到案”的侦破理念逐步的全面贯彻落实到整个侦查破案工作中去，将从人群中发现犯罪嫌疑人，作为每一个刑事侦查人员必须有的一个意识，让“从案到人”和“从人到案”不偏不废，两条腿走路，使两者相辅相成，辩证和有机的结合起来。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		近年来，在分局领导的指挥指导下，上海机场的刑侦工作发挥出巨大的战斗威力，收到显著的社会效果，领导也是一再强调“从案到人”和“从人到案”两者的重要性，但是由于受传统侦查观念的影响，部分刑侦人员的思想认识和观念滞后于形势的发展，在工作中存有较多问题和薄弱环节。相对“从案到人”的传统办法而言，对“从人到案”的侦破思路存在较为轻视的现象，特别是掌握对敌斗争主动权方面，落后于形势的要求。主要表现是思想认识滞后，侦查观念存有障碍，往往是从一个案件上手，就案论案，拼拼杀杀几板斧，破不了就丢到一边，在破案中诸多民警摸排搜集到的大量信息资料也随之丢到一边，再发生案子再如法炮制。还有一些理念和思路落实不到现实斗争中，如果我们不愿意或不善于改变思路，不做深做细的刑侦基础工作，只能是一年到头疲于奔命，而效果有限。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		二、 将“从案到人”做强做细做足\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		事件的客观性决定了我们无法离开犯罪现场和案件的基本情况去谈破案，所以“从案到人”的侦查观念和模式是侦查工作的基本方法。实践证明大多数案件还是“从案到人”来开展工作，来侦查破案。所以不是要摒弃“从案到人”，而是要深化工作，想办法做强做细做足，要以刑事案件侦破的实际斗争需要出发，结合现今的科技、理念和思路，在充分继承的基础上不断创新、不断改进、不断发展。只有这样，我们的刑事侦查工作才能真正做到可持续发展和与时俱进。本人认为要加强以下几方面工作：\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（一）重视、加强现场勘查\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		现场勘查是刑事侦查的首要环节，一是为侦查破案提供重要信息、线索；二是为认定案件事实和犯罪行为提供证据，最终达到揭露、证实犯罪，提高办案质量的目的。就如虹桥“11.29”抢劫案，正是在被抢车辆上提取到一枚指纹，才跳出了犯罪嫌疑人，同时也证明了犯罪嫌疑人接触过这辆车，是破此案的关键所在。如果现场勘查意识不强，勘查工作不细，不仅会给侦查破案带来难度，也会给办案带来困难。而现场勘查工作恰恰是机场刑侦的薄弱环节，目前，支队两场各只有一名兼职技术员，专业人员少再加上实践少，我们的现场勘查工作确实不够到位。因此必须抓好现场勘查工作，一是要仔细勘查现场，静下心来不放过任何蛛丝马迹；二是要丰富现场勘查的手段和方法，推进现场勘查的现代化、规范化建设；三是建立起重大、复杂、疑难案件邀请总队专家制度，提高刑事技术服务侦破工作的支撑力；四是要通过配齐配强技术力量、改善装备、量化考评责任，积极推行现场勘查责任制，按照现场勘查细则，实现现场勘查规范化、制度化。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（二）抓好走访排查环节\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		现在搞侦查工作，很多同志依赖痕迹、监控、技侦，“三板斧”上去，没线索就没了方向，走访是侦查工作历来的好传统，今年“8.26”雪菊诈骗案就是辗转苏州、义乌、郑州、厦门、泉州等地，靠大量走访工作，才排摸出犯罪嫌疑人身份以及其犯罪脉络。所以，在侦查办案中，侦查人员的作风要扎实，真正做到沉下去，扎得深，变被动调查为能动调查，绝不能走马观花、浮于表面、浅尝辄止，应付差事。其次，要讲究工作方法。绝不能先入为主，主观臆断。既要听正面的肯定的意见，也要听反面的否定的意见。要善于捕捉被访问人员不敢或不愿多说的线索，打消思想顾虑，通过晓之以理、动之以情的工作，让其吐露真情，探知隐含信息。侦查员在现场走访工作中，应重点记录被侵害物品详细特征，例如手机串码，银行卡、交通卡、超市卖场消费卡等卡号，为布控提供依据。对于一时无法获取的信息，要做好日后的回访工作。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（三）认真、及时查证线索\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		对每一条线索、每一个细节都应查细、查深、查准、查实，不能支离破碎，似是而非，有果无因，有头无尾。遇到新情况需要深入调查的应及时深入追溯下去，以免时过境迁、贻误战机。现在的案件地域跨度大，人员流动性大，在我们办理的很多案子就是晚一步就要付出数倍的代价，证据、线索和嫌犯不等人，所以要及时调取监控录像等有保存时限的线索，细致查看，寻找嫌疑人遗留的蛛丝马迹。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（四）抓好案情分析环节\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		案情分析至关重要，由此产生的决策决定着整个侦查活动的全过程，直接关系到侦查工作有无效率和效率的高低。首先，要全面客观地反映现场客观态势。要把现场勘验和现场访问的情况全部显现出来，让全体参战人员了然于胸，便于大家充分掌握信息材料，立足现场，开动脑筋。其次，案情分析要“唯物”。这种分析必须是建立在现场痕迹物证和现场访问线索基础上的判断推理，必须是合乎逻辑规则的判断推理，通过侦查工作的逐步深入，对案情不断予以深化，从而达到案件定性准确、侦查方向正确、侦查范围缩小、刻画嫌疑科学、侦查途径优化的要求，避免侦查工作撒大网，走弯路，旷日持久，僵持不下。再次，要启发侦查人员集思广益，仁者见仁，智者见智。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（五）积极探索侦查破案的新战法新技法\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		借鉴成型做法和先进经验，将刑事技术、视频技术、网侦技术、技侦技术和传统侦查手段有机结合起来，互相支撑，互为补充，实现快速破案、精确打击的目标，牢牢把握打击犯罪的主动权。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		现在话单分析尤为重要，话单中可以反映众多关联信息，侦查员要重点掌握此项技能，通过电话话单分析方法实现手机信息的深度应用。今年的非法拘禁案和“8.26”雪菊诈骗案，通过深度分析，生成网络关系图，梳理团伙脉络，分析出团伙成员间主次、分合、上下关系，最后成功锁定对象。但目前，支队只有少数侦查员掌握该项技能，离实战要求相去甚远。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（六）抓好审讯环节\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		锁定、抓获犯罪嫌疑人不等于办案结束，取得口供是重中之重，要靠完整的证据链定罪确实难度很大，所以口供还是证据之王，由于现今社会信息开放，犯罪嫌疑人抗审能力不断提升，经常是，百般抵赖，拒不交代，摆出一副死猪不怕开水烫的姿态，如河南信阳籍“机扒”对象、广西桂林籍扒窃对象，由于属犯罪高危地区，常常是团伙、家族式犯罪，反侦察能力和抗审能力特别强，有些侦查员审讯不做准备，东一榔头西一棒，审讯拿不下来，很容易前功尽弃。一定要培养侦查员做足准备的习惯，合理组织讯问力量，了解案件情况，分析犯罪嫌疑人的心理，制订讯问计划。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		三、建立“从人到案”工作机制\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		所谓“从人到案”，是相对于“从案到人”而言，即通过“以人为本”采取扎实有效的基础工作，主动从人群当中发现并抓获混迹其中的各类刑事犯罪嫌疑人，继而达到破案之目的。机场的“人”主要是旅客和工作人员，很多犯罪存在人员特点，工作特点，而有些单位为掩饰“家丑”往往不报案，无法有效打击犯罪，所以建立“从人到案”工作机制非常必要。本人认为要做好以下几方面工作：\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（一）排查高危人群\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		“从人到案”的第一步就是圈定高危人群范围，这个是基础，这步工作的准确与否直接决定后续工作的成效。高危人群分两种，一种是高危工作人员，如各单位托运行李装卸工是旅客托运行李盗窃的高危人员；货运公司装卸员工是货运区货物盗窃的高危人员；航空货运公司的操作员是利用偷逃货物体积、重量进行职务侵占的高危人员；东航营销委是利用机票进行职务侵占的高危人员。另一种是高危地区人员，如河南信阳和江西丰城是机上盗窃的高危人员；如广西桂林是候机楼扒窃的高危人员。要结合以往案件线索对作案可能性进行综合分析，圈定高危人员。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（二）外围调查\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		在初步圈定高危人员的基础上，要进行外围调查和深入排摸，紧紧抓住犯罪嫌疑人吃、住、行、销、乐等环节开展工作，如货币兑换、资金往来、短信和通话情况、朋友圈子、消费情况等等。去年，东航地面部一装卸员工在银行兑换40000日币，在没有接报的情况下，经工作，犯罪嫌疑人交代了盗窃旅客托运行李的事实，取得了实战效果，但这种情况实在是凤毛麟角，多数侦查员还是意识不强，认为这种付出很可能是无用功，不愿去做，做也是应付了事，工作不深不细。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（三）阵地控制\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		因为机场范围内没有典当行、废品回收、二手货回收等可能发生销赃的地点，所以一般认为阵地控制这一块没什么工作可做，其实我们可以发散思维，选择性地确立阵地，如机场周边店铺，再如以前办案中发现过的销赃店铺，特别是后者，可以利用店主曾经收过赃物的软肋进行工作，今年3月和9月，一个以前案件中的店主向我们反映有机场员工卖电子产品，据此情报，破获案件6起。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（四）情报收集\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		利用情报破案一直是机场分局的短板，没有很好的激励机制，也没有较专业的人才，也没有人沉下去做此类工作，习惯了现实现报，不能耐得住性子潜心经营，很难获取有价值线索。情报收集一是对人，物色、发展能为我所用的人，而且要物色接触得到犯罪信息的有一定活动能力的人；二是对信息，要将高危人员的信息梳理、预警，如通过民航、铁路、宾旅馆系统对机上盗窃人员乘坐飞机，扒窃人员到达上海进行预警，采取相应防范和抓捕措施。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（五）审理工作\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		审理工作相当重要，是深挖案件，扩大战果的重要手段，公安部也认识到预审工作的重要性，今年发文要求加强案件审理工作，但恰恰这方面工作是我们的支队的薄弱环节，我们没有专业审理队，也没有专业人才，往往只是简单地材料加工，就事论事，就案论案，基本就是移送案件，没有扩案，没有深挖。所以要优化审理队伍结构，加强人员培训，建立激励机制。\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		（六）建章立制\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n		一是要建立长效机制。刑侦基础工作不可能一蹴而就，更不是一劳永逸的事情，而是一项长期的、不断更新变化的基础业务建设，因此，一定要树立长远观念，建立长效机制；二是要完善考核机制。从有利于打建并重方面考虑，有目的的把办案民警引导到强化基础业务建设上来，应在考核上建立“两元目标”，即既考核破案工作，又考核基础业务，保证打建工作的有机结合；三是要加强协调机制。建情也好，阵地控制也好，都不是单一某个部门的事，我们刑侦部门一定要高度重视，善于借助外力，最大限度最大范围地与各有关业务单位搞好配合，真正形成信息大循环、工作大协调局面；四是要强化激励机制。深化激励机制，方式上要把物质奖励、记功、晋级等激励方法同精神鼓励、宣传教育等激励方法结合起来。\r\n	&lt;/p&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;text-indent:2em;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;', 2, '公安新人', '', 4, 1, '', '', 5, '', '', 1, 1, 0, 1, 1, '2016-12-22 17:24:53', '2016-12-25 09:09:33'),
(23, 10, '64式、77式、92式手枪分解结合', '&lt;span style=&quot;font-family:&amp;quot;font-size:14px;&quot;&gt;主要讲解64式、77式、92式手枪的分解结合方法，以便于日常枪支养护和进一步了解枪支结构。&lt;/span&gt;', 1, '特警支队 夏嘉霖', '', 9, 3, '', '30', 1, '/Resources/lib/kindeditor/attached/image/20161222/20161222172948_63096.jpg', '/Resources/lib/kindeditor/attached/file/20161222/20161222154910_67472.mp4', 1, 1, 1, 1, 0, '2016-12-22 17:30:42', '2016-12-26 09:52:09'),
(24, 12, '机场分局保安管理服务的调研报', '&lt;p&gt;\r\n	什么是保安管理？为了规范保安服务活动，加强对从事保安服务的单位和保安员的管理，保护人身安全和财产安全，维护社会治安，称之为保安管理。在保安服务业不断扩大的同时，2009年9月28日,温家宝总理公布中华人民共和国国务院令564号《保安服务管理条例》通过。并自2010年1月1日起施行。《保安服务管理条例》是保安服务业发展历史上极具意义的法律文件，此条例明确表明了保安服务业的业务范围、成立条件、职权职责等重大问题，《条例》的正式实施为我国保安服务行业发展指明了前进的方向，为我国保安行业在新时期的发展和完善以及国际先进保安服务水平的接轨奠定了基础。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	市局治安总队保安管理处在《保安服务管理条例》施行的同时，为了规范上海市保安服务市场，根据《中华人民共和国行政许可法》、《保安服务管理条例》、《公安机关实施保安服务管理条例办法》等法律、行政法规和规章的规定，针对上海市保安服务现状制定了《上海市保安服务公司申请设立及备案实施办法》《上海市保安员服装标志装备使用管理办法》《上海市保安员考试发证管理办法》《上海市保安培训机构审批和管理办法》《上海市从事武装守护押运服务的保安服务公司申请设立及备案实施办法》《上海市自行招用保安员单位备案管理实施办法》等规范性文件，结合上海地区实际情况，极大地帮助公安机关开展日常保安管理工作，加强上海地区的保安管理力量。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	目前分局未成立保安管理部门，由治安支队负责机场地区的保安监管工作。治安支队开展以下工作：对机场地区保安从业单位进行登记备案；掌握保安从业单位的合法经营情况；掌握保安从业单位跨省、市区活动、备案情况；对未能取得备案资质的单位进行登记；全面清理整治机场地区不符合市局要求的保安从业单位；保安员信息采集备案，梳理保安员信息，确保保安员队伍的纯净性；组织开展保安员培训考试；整顿公安机关相似服装标识；监督检查保安从业单位保安员持证上岗情况及岗位执勤情况。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	自保安管理工作开展以来，先后通过开展对机场地区保安从业单位进行普及教育培训，组织排摸排查保安从业单位，完善保安从业单位资料、建立保安员指纹等人体生物信息，对上报自招保安员单位开展审核审查工作，完善机场地区保安从业单位的保安台帐等工作，有效的掌握了机场地区从事保安服务单位的动态，截止至2013年10月，机场地区共有保安从业单位22家，其中专业保安公司2家，自招保安员单位20家，有效采集保安员信息2844人（其中444人已梳理离职）。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	在全面规范专业保安公司，自招保安单位发放备案证的基础上，根据市局文件精神，分局通过长期滚动排摸工作，对机场地区保安从业单位进行了全面的清理，着重对辖区内重点单位进行梳理，经过治安支队多次组织开展保安工作会议，对保安从业单位进行培训，不断加强保安单位的责任意识，同时部署相关工作要求，共同创造机场地区保安管理的良好环境。截止2013年10月，机场地区共有47家保安从业单位已报分局备案，7家未能取得保安资质的单位进行登记，在47家保安从业单位中分局管辖专业保安公司2家，自招保安员单位20家。外单位管辖专业保安公司20家，自招保安员单位5家。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	为了全面加强保安从业人员素质，提高保安队伍整体力量，规范保安员正常上岗等一系列问题，市局根据上海市保安从业单位保安员的特点制定了《关于对农民工保安员培训考试报名情况进一步开展排摸统计的通知》的通知，通知要求全面排摸全市农民工保安员的基本情况，并组织开展保安员培训考试工作。分局根据市局要求，结合机场地区实际情况定制了《上海机场地区保安员培训考试工作方案》，为做好上海机场地区保安员资格考试发证工作，切实提升保安员的履职能力、认知能力，有效提高保安服务质量，加强保安服务防范意识。分局开展了保安从业单位的排摸工作，通过滚动排摸手段建立长效机制，对保安从业单位保安员信息及生物信息进行采集。通过梳理将通过保安员培训考试的保安员名单交给保安员培训学校进行第二次梳理，同时分局又积极与保安员培训学校联系，邀请保安培训学校上门培训，动员各保安从业单位保安员利用空闲的时间进行保安培训，从而提高自身知识，并通过参加考试方式来验证。截止2013年10月，机场地区保安员参加保安培训1700余人，通过考试取得保安员证1691人。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	根据市局一系列的加强保安从业单位排摸、清理整治上海地区保安市场、保安从业单位违法违规情况等工作，分局在通过长期的排摸下，部署警力对机场地区保安从业单位定期开展日常监督检查和夜间检查，在检查的过程中发现一家保安从业单位持外省市保安证明进行保安服务活动，不符合保安管理相关规定，属违规操作，在多次与保安从业单位进行交谈后，对其提出转型成自招保安员单位的整改意见，并要求其尽快完成人员信息录入及指纹等人体生物信息的采集工作。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	为整顿保安员服装乱象，提升保安队伍的整体形象，根据市局《上海市保安员服装标志装备使用管理办法》的文件精神，分局多次组织开展保安工作会议，积极推进保安员服装的换发，进一步推动上海保安队伍规范化、职业化建设。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	目前保安管理工作还存在不少问题如：保安服务活动跨区域性，违法违规现象的隐蔽性，加大了治安部门检查的难度。保安队伍管理松懈，保安员法制观念淡薄，道德素养和履职意识差，个别保安员的违法乱纪损害了保安队伍的整体形象。保安员服饰的五花八门、鱼龙混杂，着装混乱现象比较突出。保安服务监管系统信息的不规范性，造成检查时人员不能与系统统一，不能做到对保安从业单位动态监管。\r\n&lt;/p&gt;', 2, '机长小刘', '', 4, 1, '', '', 8, '/Resources/lib/kindeditor/attached/image/20161226/20161226161621_54784.jpg', '', 1, 1, 2, 1, 1, '2016-12-26 16:22:39', '2016-12-28 11:06:24'),
(25, 11, '测试的视频', '测试的视频简介', 1, '阿萨斯', '', 0, 0, '', '啊实打实', 11, '/Resources/lib/kindeditor/attached/image/20161214/20161214155317_16641.jpg', '/Resources/lib/kindeditor/attached/file/20161226/20161226205733_67754.mp4', 1, 1, 1, 1, 0, '2016-12-26 20:58:40', '0000-00-00 00:00:00'),
(26, 11, '开发测试视频', '开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频开发测试视频vvvv', 1, '小文', '', 0, 0, '', '120', 9, '/Resources/lib/kindeditor/attached/image/20161226/20161226161621_54784.jpg', '/Resources/lib/kindeditor/attached/file/20161222/222.mp4', 1, 1, 1, 1, 0, '2016-12-28 10:23:16', '0000-00-00 00:00:00'),
(27, 12, '测试1', '&lt;span class=&quot; newTimeFactor_before_abs m&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2016年8月1日&amp;nbsp;-&amp;nbsp;&lt;/span&gt;fullPage.&lt;em&gt;js&lt;/em&gt; 是一个基于 &lt;em&gt;jQuery&lt;/em&gt; 的&lt;em&gt;插件&lt;/em&gt;,它能够很方便、很轻松的制作出全屏网站,主要功能有:支持鼠标&lt;em&gt;滚动&lt;/em&gt; 支持前进后退和键盘控制 多个回调函数 支持手机、平板触摸...&lt;br /&gt;', 2, '我', '', 4, 1, '', '', 9, '/Resources/lib/kindeditor/attached/image/20161214/20161214155317_16641.jpg', '', 1, 1, 1, 1, 1, '2017-01-16 01:29:59', '2017-01-16 01:33:28'),
(28, 12, '上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知', '上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知上海市人民政府印发《关于本市深化改革推进出租汽车行业健康发展的实施意见》的通知', 2, '孝文', '', 0, 0, '', '', 1, '', '', 1, 1, 1, 1, 0, '2017-01-17 13:52:46', '0000-00-00 00:00:00'),
(29, 14, '民警感悟-我的心得分享', '&lt;p&gt;\r\n	&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;自虹桥西警务区成立以来，从我们受理的虹桥机场航空“托盗”案件来看，2010年共受理“托盗”案件23起，2011年共受理“托盗”案件25起，2012年共受理“托盗”案件34起（不含排除掉的6起），2013年共受理“托盗”案件32起（不含排除掉的9起），2014年前11个月共受理“托盗”案件15起（不含排除掉的11起），前四年呈持续增长的态势。今年以来，为有效打防此类案件，切实维护旅客的财产安全，虹桥西警务区结合“平安机场建设”专项行动，主动转变工作思路、创新工作方法，专题研究案件发案规律及原因，细化制定打防措施，健全完善针对“托盗”案件的打防机制，使得此类案件得到有效遏制，这也为我们今后加强此类案件的打击防范提供了参考。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;自虹桥西警务区成立以来，从我们受理的虹桥机场航空“托盗”案件来看，2010年共受理“托盗”案件23起，2011年共受理“托盗”案件25起，2012年共受理“托盗”案件34起（不含排除掉的6起），2013年共受理“托盗”案件32起（不含排除掉的9起），2014年前11个月共受理“托盗”案件15起（不含排除掉的11起），前四年呈持续增长的态势。今年以来，为有效打防此类案件，切实维护旅客的财产安全，虹桥西警务区结合“平安机场建设”专项行动，主动转变工作思路、创新工作方法，专题研究案件发案规律及原因，细化制定打防措施，健全完善针对“托盗”案件的打防机制，使得此类案件得到有效遏制，这也为我们今后加强此类案件的打击防范提供了参考。\r\n&lt;/p&gt;', 2, '小明', '', 0, 0, '', '', 5, '/Resources/lib/kindeditor/attached/image/20170118/20170118110251_23664.jpg', '', 1, 1, 1, 1, 0, '2017-01-18 11:03:08', '0000-00-00 00:00:00'),
(30, 14, '关于学习智能交通管理的分享', '&lt;p&gt;\r\n	&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享。。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp; &amp;nbsp;关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享关于学习智能交通管理的分享。。\r\n&lt;/p&gt;', 2, '大牛', '', 0, 0, '', '', 1, '/Resources/lib/kindeditor/attached/image/20161226/20161226161621_54784.jpg', '', 1, 1, 1, 1, 0, '2017-01-18 11:06:36', '0000-00-00 00:00:00'),
(31, 15, '走访调研学习提高', '&lt;p&gt;\r\n	&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高。。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高走访调研学习提高。。。。。\r\n&lt;/p&gt;', 2, '小语言', '', 0, 0, '', '', 3, '', '', 1, 1, 1, 1, 0, '2017-01-18 11:09:32', '0000-00-00 00:00:00'),
(32, 11, '上海市网络预约出租汽车经营服务管理若干规定', '&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定上海市网络预约出租汽车经营服务管理若干规定发。', 1, '未央', '', 0, 0, '', '30', 1, '/Resources/lib/kindeditor/attached/image/20161214/20161214161328_77035.png', '/Resources/lib/kindeditor/attached/file/20161226/20161226205733_67754.mp4', 1, 1, 1, 3, 0, '2017-01-18 11:27:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tb_dustbin`
--

CREATE TABLE IF NOT EXISTS `tb_dustbin` (
  `id` int(10) unsigned NOT NULL,
  `content_id` varchar(255) NOT NULL COMMENT '内容ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效 3已恢复',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='垃圾箱表';

-- --------------------------------------------------------

--
-- 表的结构 `tb_score_log`
--

CREATE TABLE IF NOT EXISTS `tb_score_log` (
  `id` int(10) NOT NULL,
  `score` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '分数',
  `content_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '内容ID',
  `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_score_log`
--

INSERT INTO `tb_score_log` (`id`, `score`, `content_id`, `add_time`) VALUES
(1, 4, 22, '2016-12-25 09:08:58'),
(2, 4, 23, '2016-12-25 18:53:38'),
(3, 3, 23, '2016-12-25 18:56:39'),
(4, 2, 23, '2016-12-26 09:52:09'),
(5, 4, 17, '2016-12-28 10:51:35'),
(6, 4, 24, '2016-12-28 11:06:07'),
(7, 4, 27, '2017-01-16 01:33:28');

-- --------------------------------------------------------

--
-- 表的结构 `tb_tag`
--

CREATE TABLE IF NOT EXISTS `tb_tag` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '标签名称',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效',
  `order_num` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '排序号 优先级 从小到大',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='标签表';

--
-- 转存表中的数据 `tb_tag`
--

INSERT INTO `tb_tag` (`id`, `name`, `status`, `order_num`, `create_time`, `update_time`) VALUES
(7, '搞笑', 2, 0, '2016-11-14 00:11:37', '2016-12-25 09:01:09'),
(8, '娱乐', 2, 0, '2016-11-14 00:11:37', '2016-12-25 09:00:16'),
(9, '犯罪', 2, 0, '2016-11-14 00:11:37', '2016-12-25 09:00:51'),
(10, '心理', 2, 0, '2016-11-14 00:11:37', '2016-12-25 09:01:16'),
(11, '才艺', 2, 0, '2016-11-14 00:22:07', '2016-12-25 09:01:29'),
(12, '训练', 2, 0, '2016-11-14 00:22:07', '2016-12-25 09:01:22'),
(13, '学习1', 2, 0, '2016-11-14 00:22:07', '2016-11-14 00:33:49'),
(14, '音乐', 2, 0, '2016-11-14 00:34:27', '2016-12-25 09:01:35'),
(15, '推理', 2, 0, '2016-11-22 01:30:27', '2016-12-25 09:01:39'),
(16, '法律', 1, 0, '2016-11-22 01:30:27', '0000-00-00 00:00:00'),
(17, '哲学', 1, 0, '2016-11-22 01:30:27', '0000-00-00 00:00:00'),
(18, '测试标签', 1, 0, '2016-12-25 09:07:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tb_tag_content`
--

CREATE TABLE IF NOT EXISTS `tb_tag_content` (
  `id` int(10) unsigned NOT NULL,
  `tag_id` varchar(255) NOT NULL COMMENT '标签ID',
  `content_id` varchar(255) NOT NULL COMMENT '内容ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 有效 2无效',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8 COMMENT='标签与内容关系表';

--
-- 转存表中的数据 `tb_tag_content`
--

INSERT INTO `tb_tag_content` (`id`, `tag_id`, `content_id`, `status`, `create_time`, `update_time`) VALUES
(100, '9', '15', 2, '2016-12-22 11:13:36', '2016-12-26 10:39:06'),
(101, '10', '15', 2, '2016-12-22 11:13:36', '2016-12-26 10:39:06'),
(102, '12', '15', 2, '2016-12-22 11:13:36', '2016-12-26 10:39:06'),
(103, '11', '16', 1, '2016-12-22 15:49:58', '0000-00-00 00:00:00'),
(104, '12', '16', 1, '2016-12-22 15:49:58', '0000-00-00 00:00:00'),
(105, '15', '17', 2, '2016-12-22 16:33:54', '2016-12-22 16:52:17'),
(106, '15', '17', 2, '2016-12-22 16:52:17', '2016-12-22 16:52:39'),
(107, '9', '17', 1, '2016-12-22 16:52:39', '0000-00-00 00:00:00'),
(108, '15', '17', 1, '2016-12-22 16:52:39', '0000-00-00 00:00:00'),
(109, '10', '18', 2, '2016-12-22 16:56:22', '2017-01-05 17:13:49'),
(110, '12', '18', 2, '2016-12-22 16:56:22', '2017-01-05 17:13:49'),
(111, '9', '21', 1, '2016-12-22 17:21:35', '0000-00-00 00:00:00'),
(112, '10', '21', 1, '2016-12-22 17:21:35', '0000-00-00 00:00:00'),
(113, '12', '21', 1, '2016-12-22 17:21:35', '0000-00-00 00:00:00'),
(114, '10', '22', 1, '2016-12-22 17:24:53', '0000-00-00 00:00:00'),
(115, '11', '22', 1, '2016-12-22 17:24:53', '0000-00-00 00:00:00'),
(116, '9', '23', 1, '2016-12-22 17:30:42', '0000-00-00 00:00:00'),
(117, '10', '23', 1, '2016-12-22 17:30:42', '0000-00-00 00:00:00'),
(118, '12', '23', 1, '2016-12-22 17:30:42', '0000-00-00 00:00:00'),
(119, '16', '15', 1, '2016-12-26 10:39:06', '0000-00-00 00:00:00'),
(120, '17', '15', 1, '2016-12-26 10:39:06', '0000-00-00 00:00:00'),
(121, '17', '24', 1, '2016-12-26 16:22:39', '0000-00-00 00:00:00'),
(122, '18', '24', 1, '2016-12-26 16:22:39', '0000-00-00 00:00:00'),
(123, '16', '25', 1, '2016-12-26 20:58:40', '0000-00-00 00:00:00'),
(124, '17', '26', 2, '2016-12-27 11:41:29', '2016-12-27 13:58:47'),
(125, '18', '26', 2, '2016-12-27 11:41:29', '2016-12-27 13:58:47'),
(126, '17', '26', 2, '2016-12-27 13:58:47', '2016-12-28 10:23:16'),
(127, '18', '26', 2, '2016-12-27 13:58:47', '2016-12-28 10:23:16'),
(128, '17', '26', 1, '2016-12-28 10:23:16', '0000-00-00 00:00:00'),
(129, '18', '26', 1, '2016-12-28 10:23:16', '0000-00-00 00:00:00'),
(130, '18', '18', 1, '2017-01-05 17:13:49', '0000-00-00 00:00:00'),
(131, '17', '29', 1, '2017-01-18 11:03:08', '0000-00-00 00:00:00'),
(132, '18', '29', 1, '2017-01-18 11:03:08', '0000-00-00 00:00:00'),
(133, '17', '30', 2, '2017-01-18 11:05:30', '2017-01-18 11:06:36'),
(134, '18', '30', 2, '2017-01-18 11:05:30', '2017-01-18 11:06:36'),
(135, '17', '30', 1, '2017-01-18 11:06:36', '0000-00-00 00:00:00'),
(136, '18', '30', 1, '2017-01-18 11:06:36', '0000-00-00 00:00:00'),
(137, '17', '31', 1, '2017-01-18 11:09:32', '0000-00-00 00:00:00'),
(138, '18', '31', 1, '2017-01-18 11:09:32', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `tb_attach`
--
ALTER TABLE `tb_attach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_id` (`content_id`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `tb_cate`
--
ALTER TABLE `tb_cate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cateindex` (`type`,`status`) USING BTREE;

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_id` (`content_id`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `tb_config`
--
ALTER TABLE `tb_config`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `tb_content`
--
ALTER TABLE `tb_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `searchindex` (`cate_id`,`title`,`status`) USING BTREE,
  ADD KEY `hotnew` (`is_new`,`is_hot`) USING BTREE,
  ADD KEY `type` (`type`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `tb_dustbin`
--
ALTER TABLE `tb_dustbin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `tb_score_log`
--
ALTER TABLE `tb_score_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tag`
--
ALTER TABLE `tb_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `tb_tag_content`
--
ALTER TABLE `tb_tag_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`tag_id`,`content_id`,`status`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_attach`
--
ALTER TABLE `tb_attach`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_cate`
--
ALTER TABLE `tb_cate`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_config`
--
ALTER TABLE `tb_config`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_content`
--
ALTER TABLE `tb_content`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_dustbin`
--
ALTER TABLE `tb_dustbin`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_score_log`
--
ALTER TABLE `tb_score_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_tag`
--
ALTER TABLE `tb_tag`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_tag_content`
--
ALTER TABLE `tb_tag_content`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=139;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
