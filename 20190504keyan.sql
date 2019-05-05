/*
Navicat MySQL Data Transfer

Source Server         : phptools
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : keyan

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-05-04 23:50:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ky_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `ky_auth_group`;
CREATE TABLE `ky_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组ID',
  `title` char(100) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1正常 0禁用',
  `rules` char(80) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id，多个用逗号隔开',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '回收站1 删除 0否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户组表';

-- ----------------------------
-- Records of ky_auth_group
-- ----------------------------
INSERT INTO `ky_auth_group` VALUES ('1', '超级管理员', '1', '34,37,35,38,39,32,33,46,50,49,48,47,40,45,44,43,42,41,26,31,30,29,28,27,10,11,12', '0');
INSERT INTO `ky_auth_group` VALUES ('2', '校级科研秘书', '1', '34,37,35,38,39,32,33,26,27,10,11,12,13,4,9,8,7,6,5,19,20,14,15,1,3,2', '0');
INSERT INTO `ky_auth_group` VALUES ('3', '院级科研秘书', '1', '34,37,35,38,32,33,26,27,10,11,4,8,5,19,20,14,15,1,3,2', '0');
INSERT INTO `ky_auth_group` VALUES ('4', '普通科研教师', '1', '34,37,35,38,32,33,26,27,10,11,4,8,5,19,20,14,15,1,3,2', '0');

-- ----------------------------
-- Table structure for ky_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `ky_auth_group_access`;
CREATE TABLE `ky_auth_group_access` (
  `uid` smallint(5) unsigned NOT NULL COMMENT '用户id',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户组明细表';

-- ----------------------------
-- Records of ky_auth_group_access
-- ----------------------------
INSERT INTO `ky_auth_group_access` VALUES ('1', '1');
INSERT INTO `ky_auth_group_access` VALUES ('2', '2');
INSERT INTO `ky_auth_group_access` VALUES ('3', '3');
INSERT INTO `ky_auth_group_access` VALUES ('4', '4');

-- ----------------------------
-- Table structure for ky_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `ky_auth_rule`;
CREATE TABLE `ky_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '节点（规则）ID',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '权限唯一标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态1正常 0禁用',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式',
  `pid` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '父id',
  `level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '权限级别',
  `sort` int(5) unsigned NOT NULL DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COMMENT='规则（权限）表';

-- ----------------------------
-- Records of ky_auth_rule
-- ----------------------------
INSERT INTO `ky_auth_rule` VALUES ('1', 'Index', '首页', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('2', 'Index/index', '首页显示', '1', '1', '', '1', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('3', 'Index/welcome', '我的桌面', '1', '1', '', '1', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('4', 'Gonggao', '通知公告', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('5', 'Gonggao/lst', '公告列表', '1', '1', '', '4', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('6', 'Gonggao/add', '增加公告', '1', '1', '', '4', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('7', 'Gonggao/edit', '编辑公告', '1', '1', '', '4', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('8', 'Gonggao/read', '阅读公告', '1', '1', '', '4', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('9', 'Gonggao/istop', '公告置顶', '1', '1', '', '4', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('10', 'Downloadfile', '下载文件', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('11', 'Downloadfile/lst', '显示下载文件列表', '1', '1', '', '10', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('12', 'Downloadfile/add', '上传下载文件', '1', '1', '', '10', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('13', 'Downloadfile/del', '删除下载文件', '1', '1', '', '10', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('14', 'User', '科研人员管理', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('15', 'User/lst', '显示科研人员列表', '1', '1', '', '14', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('16', 'User/add', '新增科研人员信息', '1', '1', '', '14', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('17', 'User/edit', '编辑科研人员信息', '1', '1', '', '14', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('18', 'User/del', '删除科研人员信息', '1', '1', '', '14', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('19', 'Department', '组织部门管理', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('20', 'Department/lst', '部门列表显示', '1', '1', '', '19', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('22', 'Department/add', '新增部门信息', '1', '1', '', '19', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('23', 'Department/edit', '编辑部门信息', '1', '1', '', '19', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('24', 'Department/del', '删除部门信息', '1', '1', '', '19', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('25', 'Department/checkBmName', '检测部门名称是否可用', '1', '1', '', '19', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('26', 'Jigou', '研究机构管理', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('27', 'Jigou/lst', '研究机构显示', '1', '1', '', '26', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('28', 'Jigou/add', '增加研究机构', '1', '1', '', '26', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('29', 'Jigou/edit', '编辑研究机构信息', '1', '1', '', '26', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('30', 'Jigou/del', '删除研究机构信息', '1', '1', '', '26', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('31', 'Jigou/checkJgName', '检测研究机构名称是否可用', '1', '1', '', '26', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('32', 'Zxxm', '纵向项目管理', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('33', 'Zxxm/lst', '纵向项目显示', '1', '1', '', '32', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('34', 'Hxxmht', '横向合同管理', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('35', 'Hxxmht/lst', '合同列表显示', '1', '1', '', '34', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('37', 'Hxxmht/add', '合同信息新增', '1', '1', '', '34', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('38', 'Hxxmht/edit', '合同信息编辑', '1', '1', '', '34', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('39', 'Hxxmht/del', '合同信息删除', '1', '1', '', '34', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('40', 'AuthGroup', '角色管理', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('41', 'AuthGroup/lst', '角色列表显示', '1', '1', '', '40', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('42', 'AuthGroup/add', '角色新增', '1', '1', '', '40', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('43', 'AuthGroup/edit', '角色编辑', '1', '1', '', '40', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('44', 'AuthGroup/del', '角色删除', '1', '1', '', '40', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('45', 'AuthGroup/change', '角色启用状态变更', '1', '1', '', '40', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('46', 'AuthRule', '权限管理', '1', '1', '', '0', '0', '50');
INSERT INTO `ky_auth_rule` VALUES ('47', 'AuthRule/lst', '权限列表显示', '1', '1', '', '46', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('48', 'AuthRule/add', '新增权限', '1', '1', '', '46', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('49', 'AuthRule/edit', '编辑权限', '1', '1', '', '46', '1', '50');
INSERT INTO `ky_auth_rule` VALUES ('50', 'AuthRule/del', '删除权限', '1', '1', '', '46', '1', '50');

-- ----------------------------
-- Table structure for ky_count
-- ----------------------------
DROP TABLE IF EXISTS `ky_count`;
CREATE TABLE `ky_count` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `count_id` varchar(20) NOT NULL DEFAULT '' COMMENT '经费编号',
  `xm_name` varchar(100) NOT NULL DEFAULT '' COMMENT '项目名称',
  `leader` varchar(20) NOT NULL DEFAULT '' COMMENT '项目负责人姓名',
  `bmid` int(11) NOT NULL COMMENT '所属单位id',
  `dz_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '到账日期',
  `dz_counts` float unsigned NOT NULL DEFAULT '0' COMMENT '到账金额',
  `zc_counts` float unsigned NOT NULL DEFAULT '0' COMMENT '支出经费',
  `count_source` varchar(30) NOT NULL DEFAULT '' COMMENT '经费来源',
  `zcpd_id` varchar(40) NOT NULL DEFAULT '' COMMENT '支出凭单号',
  `type` tinyint(1) unsigned NOT NULL COMMENT '经费类别1纵向项目 2横向项目',
  `status` tinyint(1) unsigned NOT NULL COMMENT '审核状态1学校审核通过 0待审核 2驳回',
  `is_dz` tinyint(1) NOT NULL DEFAULT '0' COMMENT '到账登记 1到账 0未到账',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '逻辑删除 1是 0否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2223 DEFAULT CHARSET=utf8 COMMENT='科研经费信息表';

-- ----------------------------
-- Records of ky_count
-- ----------------------------
INSERT INTO `ky_count` VALUES ('1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('2', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('3', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('4', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('5', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('11', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('22', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('33', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('44', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('55', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('111', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('333', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('444', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('555', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '1', '1', '0');
INSERT INTO `ky_count` VALUES ('2222', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0');

-- ----------------------------
-- Table structure for ky_department
-- ----------------------------
DROP TABLE IF EXISTS `ky_department`;
CREATE TABLE `ky_department` (
  `bm_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `bm_pid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '上级部门',
  `bm_name` varchar(30) NOT NULL DEFAULT '' COMMENT '部门名称',
  `bm_build_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '部门成立日期',
  `bm_leader` varchar(20) NOT NULL DEFAULT '' COMMENT '部门负责人姓名',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '部门更新时间',
  `bm_tel` varchar(20) NOT NULL DEFAULT '' COMMENT '部门联系电话',
  `bm_connector` varchar(20) NOT NULL DEFAULT '' COMMENT '部门联系人姓名',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '逻辑删除1是 0否',
  `delete_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  `bm_level` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '部门级别',
  `weight` int(11) unsigned NOT NULL DEFAULT '999' COMMENT '权重',
  PRIMARY KEY (`bm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='部门信息表';

-- ----------------------------
-- Records of ky_department
-- ----------------------------
INSERT INTO `ky_department` VALUES ('1', '0', '党群部门', '1556812800', '党群部门负责人', '1556814146', '1556814146', '党群部门电话', '党群部门联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('2', '0', '行政部门', '1556812800', '行政部门负责人', '1556814164', '1556814164', '行政部门电话', '行政部门联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('3', '0', '教学部门', '1556812800', '教学部门负责人', '1556814177', '1556814177', '教学部门电话', '教学部门联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('4', '0', '业务部门', '1556812800', '业务部门负责人', '1556814188', '1556814188', '业务部门电话', '业务部门联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('5', '1', '党委办公室', '1556899200', '党委办公室负责人', '1556814249', '1556814249', '党委办公室电话', '党委办公室联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('6', '1', '纪检监察', '1556899200', '纪检监察负责人', '1556814259', '1556814259', '纪检监察电话', '纪检监察联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('7', '1', '党委组织部（党校）', '1556899200', '党委组织部（党校）负责人', '1556814273', '1556814273', '党委组织部（党校）电话', '党委组织部（党校）联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('8', '1', '党委宣传部', '1556899200', '党委宣传部负责人', '1556814342', '1556814342', '党委宣传部电话', '党委宣传部联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('9', '1', '党委统战部', '1556899200', '党委统战部负责人', '1556814353', '1556814353', '党委统战部电话', '党委统战部联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('10', '1', '学生工作部（处）', '1556899200', '学生工作部（处）负责人', '1556814375', '1556814375', '学生工作部（处）电话', '学生工作部（处）联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('11', '1', '武装部', '1556899200', '武装部负责人', '1556814389', '1556814389', '武装部电话', '武装部联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('12', '1', '离退休干部工作处', '1556899200', '离退休干部工作处负责人', '1556814399', '1556814399', '离退休干部工作处电话', '离退休干部工作处联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('13', '1', '团委', '1556899200', '团委负责人', '1556814412', '1556814412', '团委电话', '团委联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('14', '1', '工会', '1556899200', '工会负责人', '1556814425', '1556814425', '工会电话', '工会联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('15', '2', '校长办公室', '1556899200', '校长办公室负责人', '1556814444', '1556814444', '校长办公室电话', '校长办公室联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('16', '2', '科学技术处', '1556899200', '科学技术处负责人', '1556814469', '1556814469', '科学技术处电话', '科学技术处联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('17', '3', '研究生院', '1556899200', '研究生院负责人', '1556814482', '1556814482', '研究生院电话', '研究生院联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('18', '3', '材料科学与工程学院	', '1556899200', '材料科学与工程学院负责人', '1556814498', '1556814498', '材料科学与工程学院	电话', '材料科学与工程学院	联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('19', '3', '陶瓷美术学院', '1556899200', '陶瓷美术学院负责人', '1556814511', '1556814511', '陶瓷美术学院电话', '陶瓷美术学院联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('20', '3', '信息工程学院', '1556899200', '信息工程学院负责人', '1556814524', '1556814524', '信息工程学院电话', '信息工程学院联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('21', '4', '现代教育技术中心', '1556899200', '现代教育技术中心负责人', '1556814565', '1556814565', '现代教育技术中心电话', '现代教育技术中心联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('22', '20', '计算机科学与技术教研室', '1557072000', '计算机科学与技术教研室负责人', '1556814608', '1556814608', '计算机科学与技术教研室电话', '计算机科学与技术教研室联系人', '0', '0', '0', '999');
INSERT INTO `ky_department` VALUES ('23', '20', '信息与计算科学教研室', '1557072000', '信息与计算科学教研室负责人', '1556814622', '1556814622', '信息与计算科学教研室电话', '信息与计算科学教研室联系人', '0', '0', '0', '999');

-- ----------------------------
-- Table structure for ky_downloadfile
-- ----------------------------
DROP TABLE IF EXISTS `ky_downloadfile`;
CREATE TABLE `ky_downloadfile` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '文件编号',
  `df_title` varchar(100) NOT NULL DEFAULT '' COMMENT '下载文件标题',
  `df_uploader` varchar(20) NOT NULL DEFAULT '' COMMENT '文件上传人',
  `create_time` int(11) unsigned NOT NULL COMMENT '上传时间',
  `download_counts` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '文件下载次数',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '逻辑删除 1是 0否',
  `filepath` varchar(100) NOT NULL DEFAULT '' COMMENT '文件路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='下载文件信息表';

-- ----------------------------
-- Records of ky_downloadfile
-- ----------------------------
INSERT INTO `ky_downloadfile` VALUES ('1', '测试', '黄龙辉', '1556344560', '2', '0', '20190427/f32d1b307b6c4c6f3cad52a0812175e3.jpeg');
INSERT INTO `ky_downloadfile` VALUES ('2', '测试', 'Admin', '1556724856', '0', '0', '20190501/f3e480a2e2f0e988fafc55535e0dc79c.txt');

-- ----------------------------
-- Table structure for ky_gonggao
-- ----------------------------
DROP TABLE IF EXISTS `ky_gonggao`;
CREATE TABLE `ky_gonggao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '公告ID',
  `gg_title` varchar(100) NOT NULL DEFAULT '' COMMENT '公告标题',
  `gg_poster` varchar(20) NOT NULL DEFAULT '' COMMENT '发布人',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '公告发布时间',
  `read_counts` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '查阅人数',
  `is_top` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否置顶(0-否1-是)',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '阅读状态0-未阅读1-已阅读',
  `filepath` varchar(255) NOT NULL DEFAULT '' COMMENT '附件路径',
  `is_delete` tinyint(1) unsigned NOT NULL COMMENT '是否刪除0-否1-是',
  `gg_content` text NOT NULL COMMENT '公告内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='公告通知信息表';

-- ----------------------------
-- Records of ky_gonggao
-- ----------------------------
INSERT INTO `ky_gonggao` VALUES ('1', '测试', '黄龙辉', '1556314614', '2', '0', '0', '', '0', '<p>测试公告内容</p>');
INSERT INTO `ky_gonggao` VALUES ('2', '测试公告1111111', '黄龙辉', '1556314746', '1', '0', '0', '20190427/04b21e90778890fec2762ede60e56eec.jpeg', '1', '<p>测试公告内容1111122</p>');
INSERT INTO `ky_gonggao` VALUES ('3', '景德镇陶瓷大学高岭讲坛管理办法（试行）', '黄龙辉', '1556343650', '4', '1', '0', '', '0', '<p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; font-weight: bold; text-align: center; font-size: 18px; font-family: Tahoma, Verdana, Simsun; white-space: normal; background-color: rgb(241, 239, 231);\">景德镇陶瓷大学高岭讲坛管理办法（试行）</p><hr/><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; text-align: center; font-size: 12px; font-family: Tahoma, Verdana, Simsun; white-space: normal; background-color: rgb(241, 239, 231);\">来源： 2019-02-22 08:54:34</p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; text-align: center;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-size: 24px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 黑体;\">景德镇陶瓷</span></strong><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 黑体;\">大学高岭讲坛</span></strong><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 黑体;\">管理办法（试行）</span></strong></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; text-align: center;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 20px;\">（2016年2月讨论稿）</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; text-align: center;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">为进一步加强学校</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">高岭讲坛</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">管理的规范化、制度化建设，保证学术讲座的水准，推动学术讲座的积极开展，促进学术氛围的形成和教师专业水平的提升，创建良好的学术交流平台和治学环境，扩大师生的学术视野，提高学校教学和科研水平，特制定本办法。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">第一条</span>&nbsp;&nbsp;</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">高岭讲坛</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">是面向全校师生举办的开放性学术研讨活动，其内容应能反映相关学科领域学术研究的新成果和研究进展，或能反映社会实践活动中具有学术价值的观点及经验总结。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">第</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">二</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">条</span>&nbsp;&nbsp;</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">高岭讲坛</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">主讲人资格。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">“高岭讲坛”的主讲人应具备正高专业技术职务，是国内外知名专家学者、社会知名人士、或大型企事业单位的高级管理人员。在其所从事的相关领域具有较高的学术造诣、丰富的实践经验和一定的知名度与影响力。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">第</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">三</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">条</span>&nbsp;&nbsp;<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">组织管理与程序要求。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">1.学术讲座实行统一归口管理。“高岭讲坛”由科学技术处受理，提交分管校领导审定后，由科学技术处负责统筹安排；</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">2.“高岭讲坛”主办方为景德镇陶瓷</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">大学</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">，承办方为各教学院部或科研创新平台（研究所、工程中心、重点实验室、学科基地等）。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">校领导邀请出席（主持）的，由学校办公室负责布置讲座会场，协调讲座程序，协调相关单位落实工作；</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">科学技术处负责信息发布、联络新闻宣传单位，以及非校领导邀请出席（主持）的讲座会场布置和协调工作。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">学校承办的，由团委、研究生院等部门根据需要负责通知讲座受众人员到会与考勤。各教学院部或科研创新平台（研究所、工程中心、重点实验室、学科基地等）承办的，自行负责邀请、接待讲座人，并通知讲座受众人员到会与考勤。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">3</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">.“高岭讲坛”主讲人为本校学者的学术讲座，承办单位应提前3天将学术讲座计划（含讲座主讲人、内容、时间和联系人）</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">、讲座申请表</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">报送科学技术处。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">聘请校外学者来校举办学术讲座的，承办单位应至少提前</span>1周向科学技术处提出申请，并</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">填写高岭讲坛讲座申请表。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">境外（含港、澳、台）学者来校进行讲座，原名上应提前</span>1个月报国际合作与交流处和保卫处，按规定审批后安排。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">4</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">.哲学社会科学方面的讲座，主讲人无论是校内，还是校外学者，均需按《景德镇陶瓷学院哲学社会科学报告会、研讨会、讲座、论坛管理办法》执行，报党委宣传部审定后，按第</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">2</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">条执行。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">5</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">.每场学术讲座时间一般为60分钟至120分钟。主讲人须提前认真准备讲座内容和宣讲PPT。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">6</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">.承办单位应提前对讲座内容进行审核，要求讲座突出学术性，避免出现不当言论或伪科学内容。人文社科性学术讲座，其内容还需提前交由校宣传部审核。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">7</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">.“高岭讲坛”学术讲座由科学技术处在学校网站上统一公布消息。一般性学术讲座由承办单位自主在学校网站上公布消息。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">8</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">.举办学术讲座时，承办单位应做好记录，清点参加人数，填写《景德镇陶瓷学院学术讲座情况登记表》，并做好相关服务工作；</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">9</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">.“高岭讲坛”学术讲座结束之后，承办单位应及时负责收集整理学术讲座档案资料（包括讲稿、图片或音像、新闻稿件，以及学术讲座情况登记表等）送交科学技术处存档，并及时通过宣传部在学校网站发布相关新闻报道。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">第五条</span>&nbsp;&nbsp;<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">经费管理。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">1.“高岭讲坛”学术讲座经费由科学技术处根据上年度经费使用情况及本年度预计开展的学术活动向学校编制预算，经批准后由学校下达预算计划。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">2.“高岭讲坛”费用由科学技术处著名专家学术报告经费预算中列支；一般性学术讲座费用由承办教学科研单位学科建设费年度学术讲座经费预算中列支。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">学术讲座费用支出具体包括酬金、交通费、住宿费、招待费、宣传费等。费用审批程序按学校财务制度的相关规定执行。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">3.酬金标准</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">（</span>1）校外主讲人根据讲座人职称、职务及讲座的学术水平等情况一事一议确定酬金。原则上按以下标准执行：</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">①</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">在相关领域内具有一定知名度，具有副高级职称，或相当级别的企事业单位管理人员和技术人员：</span>1000元/场；</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">②</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">具有正高级职称的资深学者、大型企事业单位高级管理人员和高级技术人员：</span>1500-2000元/场；</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">③</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">国内外著名专家、学者：</span>2000-3000元/场；</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">④</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">两院院士：</span>5000元/场。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">（</span>2）校内主讲人：</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">①</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">博士或副高级职称教师：</span>500元/场；</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">②</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">一般正高级职称教师：</span>1000元/场；</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">③</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">国内外著名专家、学者、艺术大师：</span>1500-2000元/场；</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">以上金额均为税后劳务报酬。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\">4.校外主讲人由主办单位或承办单位负责接待和安排食宿。在景德镇市区内可安排学校车辆接送。</span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 38px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">第六条</span>&nbsp;<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">本办法由科学技术处负责解释。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 35px; text-indent: 37px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">第七条</span>&nbsp;<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">本办法自公布之日起执行。</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 31px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 31px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; text-align: center; line-height: 31px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 景德镇陶瓷</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">大学</span></span></p><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; line-height: 31px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">二</span>O一</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">六</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">年</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">二</span></span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: 宋体; font-size: 19px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px;\">月</span></span></p><p><br/></p>');
INSERT INTO `ky_gonggao` VALUES ('4', '测试公告', '黄龙辉', '1556343731', '0', '0', '0', '', '0', '<p>测试</p>');
INSERT INTO `ky_gonggao` VALUES ('5', '测试公告', '黄龙辉', '1556343734', '0', '0', '0', '', '0', '<p>测试</p>');
INSERT INTO `ky_gonggao` VALUES ('6', '测试公告', '黄龙辉', '1556343756', '0', '0', '0', '', '0', '<p>测试</p>');
INSERT INTO `ky_gonggao` VALUES ('7', '1', '黄龙辉', '1556359966', '0', '0', '0', '20190427/ad95914c4f007e83145e4c1072c86805.jpeg', '0', '<p>在这里输入你的公告内容</p>');
INSERT INTO `ky_gonggao` VALUES ('8', '大大', 'Admin', '1556724301', '3', '0', '0', '20190501/60915e883f86b8bc37c8a2d8ac3bdc19.docx', '0', '<p>在这里输入你的公告内容</p>');

-- ----------------------------
-- Table structure for ky_hxpro
-- ----------------------------
DROP TABLE IF EXISTS `ky_hxpro`;
CREATE TABLE `ky_hxpro` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `hxxm_id` varchar(20) NOT NULL DEFAULT '' COMMENT '横向项目编号',
  `hxxm_name` varchar(100) NOT NULL DEFAULT '' COMMENT '横向项目名称',
  `hxxm_leader` varchar(20) NOT NULL DEFAULT '' COMMENT '横向项目负责人',
  `hxxm_xkfl` varchar(20) NOT NULL DEFAULT '' COMMENT '横向项目学科分类',
  `hxxm_cdbmid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '横向项目承担部门id',
  `hxxm_status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '项目状态0待审核 1通过 2驳回',
  `hxxm_zffs` tinyint(1) unsigned NOT NULL COMMENT '横向项目支付方式',
  `hxxm_ht` varchar(255) NOT NULL COMMENT '横向项目合同',
  `hxxm_qdtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '横向项目签订日期',
  `hxxm_ht_count` float unsigned NOT NULL DEFAULT '0' COMMENT '合同金额',
  `hxxm_finishtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '交付日期',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '逻辑删除 1-是 0-否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='横向项目信息表';

-- ----------------------------
-- Records of ky_hxpro
-- ----------------------------
INSERT INTO `ky_hxpro` VALUES ('1', '1', '1', '1', '1', '11', '11', '1', '1', '1', '1', '1', '0', '1556362501', '0');

-- ----------------------------
-- Table structure for ky_hxxm_ht
-- ----------------------------
DROP TABLE IF EXISTS `ky_hxxm_ht`;
CREATE TABLE `ky_hxxm_ht` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ht_id` varchar(50) NOT NULL DEFAULT '' COMMENT '合同编号',
  `hxxm_id` varchar(20) NOT NULL DEFAULT '0' COMMENT '横向项目id',
  `ht_name` varchar(100) NOT NULL DEFAULT '' COMMENT '合同名称',
  `ht_leader` varchar(20) NOT NULL COMMENT '合同负责人',
  `ht_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '合同类别',
  `jh_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '计划类别',
  `ht_sxdate` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '合同生效日期',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '合同状态0待审核 1通过 2驳回',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `is_delete` tinyint(1) unsigned NOT NULL COMMENT '逻辑删除 1是 0否',
  `filepath` varchar(255) NOT NULL DEFAULT '' COMMENT '合同附件存储路径',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='横向项目合同信息表';

-- ----------------------------
-- Records of ky_hxxm_ht
-- ----------------------------
INSERT INTO `ky_hxxm_ht` VALUES ('1', '121111', '123456', '科技合同进款通知', '张三', '1', '1', '1556294400', '0', '1556361291', '1556361291', '0', '20190427/cf370b3873716419cc76a9bd3922c9ef.doc');
INSERT INTO `ky_hxxm_ht` VALUES ('2', '222222', '1234567', '测试', '测试', '2', '2', '1556294400', '0', '1556361343', '1556361343', '0', '20190427/a85357fb627a9382a93b822386a47dbb.xlsx');

-- ----------------------------
-- Table structure for ky_jigou
-- ----------------------------
DROP TABLE IF EXISTS `ky_jigou`;
CREATE TABLE `ky_jigou` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `jg_id` varchar(20) NOT NULL DEFAULT '' COMMENT '科研机构编号ID',
  `jg_name` varchar(50) NOT NULL DEFAULT '' COMMENT '机构名称',
  `jg_leader` varchar(20) DEFAULT '' COMMENT '科研机构负责人',
  `jg_jibie` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '科研机构级别',
  `jg_people` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '科研机构人数',
  `jg_pro_count` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '机构科研项目数',
  `jg_cg_count` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '机构科研成果数',
  `jg_hj_count` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '机构科研获奖数',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '逻辑删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='机构信息表';

-- ----------------------------
-- Records of ky_jigou
-- ----------------------------
INSERT INTO `ky_jigou` VALUES ('1', '001', '国家日用及建筑陶瓷工程技术研究中心', '张三', '0', '100', '50', '20', '20', '0');
INSERT INTO `ky_jigou` VALUES ('2', '002', '中国轻工业陶瓷研究所', '李四', '0', '100', '55', '30', '30', '0');
INSERT INTO `ky_jigou` VALUES ('3', '003', '华夏建陶研发中心', '3', '0', '3', '3', '3', '3', '0');
INSERT INTO `ky_jigou` VALUES ('4', '004', '古陶瓷研究所', '4', '0', '4', '4', '4', '4', '0');
INSERT INTO `ky_jigou` VALUES ('5', '005', '中国陶瓷文化研究所', '5', '0', '5', '5', '5', '5', '0');
INSERT INTO `ky_jigou` VALUES ('6', '006', '江西省陶瓷企业信息化工程技术研究中心', '6', '0', '6', '6', '6', '6', '0');
INSERT INTO `ky_jigou` VALUES ('7', '007', '国家陶瓷产品质量监督检验中心（江西）', '7', '0', '7', '7', '7', '7', '0');

-- ----------------------------
-- Table structure for ky_paper
-- ----------------------------
DROP TABLE IF EXISTS `ky_paper`;
CREATE TABLE `ky_paper` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `paper_name` varchar(100) NOT NULL DEFAULT '' COMMENT '论文题目',
  `paper_ename` varchar(100) NOT NULL DEFAULT '' COMMENT '论文英文题目',
  `first_author` varchar(20) NOT NULL DEFAULT '' COMMENT '第一作者',
  `publish_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '发表时间',
  `paper_fbkw` varchar(50) NOT NULL DEFAULT '' COMMENT '发表刊物',
  `paper_fbkw_jibie` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '刊物级别',
  `sr_name` varchar(50) NOT NULL DEFAULT '' COMMENT '收录名称',
  `paper_xkml` varchar(50) NOT NULL DEFAULT '' COMMENT '学科门类',
  `paper_source` varchar(100) NOT NULL DEFAULT '' COMMENT '项目来源',
  `firstsub` varchar(255) NOT NULL COMMENT '一级学科',
  `paper_type` varchar(255) NOT NULL DEFAULT '0' COMMENT '论文类型',
  `issn_num` varchar(20) NOT NULL DEFAULT '' COMMENT 'ISSN号',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '逻辑删除',
  `bmid` smallint(5) unsigned NOT NULL COMMENT '所属单位id',
  `status` tinyint(1) unsigned NOT NULL COMMENT '审核状态 0待审核 1通过 2驳回',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='论文成果信息表';

-- ----------------------------
-- Records of ky_paper
-- ----------------------------

-- ----------------------------
-- Table structure for ky_user
-- ----------------------------
DROP TABLE IF EXISTS `ky_user`;
CREATE TABLE `ky_user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '教工号',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '教工密码',
  `sex` tinyint(1) unsigned NOT NULL COMMENT '性别1男 2女',
  `nickname` varchar(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `title` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '职称0空 1教授 2副教授 3讲师 4助教',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `phone` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  `birthday` int(11) unsigned NOT NULL COMMENT '出生日期',
  `political_status` varchar(20) NOT NULL DEFAULT '' COMMENT '政治面貌',
  `degree` varchar(20) NOT NULL COMMENT '最后学位',
  `eduction` varchar(20) NOT NULL DEFAULT '' COMMENT '最后学历',
  `role` tinyint(1) unsigned NOT NULL COMMENT '所属角色人员类别1root 2院级',
  `login_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '登录时间',
  `logout_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '退出时间',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `delete_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '逻辑删除1是 0否',
  `bmid` smallint(5) unsigned NOT NULL COMMENT '所属部门id',
  `discriptines` varchar(10) NOT NULL DEFAULT '' COMMENT '学科门类',
  `discriptines_one` varchar(50) NOT NULL DEFAULT '' COMMENT '一级学科',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态1启用 0停用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='科研人员信息表';

-- ----------------------------
-- Records of ky_user
-- ----------------------------
INSERT INTO `ky_user` VALUES ('1', 'admin', 'admin', '1', 'Admin', '1', 'admin@qq.com', '13687048540', '1556899200', '中共党员', '学士', '本科', '1', '1556981245', '1556980261', '1556979359', '1556981245', '0', '0', '20', '', '', '1');
INSERT INTO `ky_user` VALUES ('2', 'jci_ky', 'jci_ky', '1', '校级科研秘书jci', '2', 'jci_ky@qq.com', '15779478453', '1556899200', '中共党员', '学士', '本科', '2', '1556980562', '1556981237', '1556980078', '1556980562', '0', '0', '16', '', '', '1');
INSERT INTO `ky_user` VALUES ('3', 'jci_info', 'jci_info', '1', '院级科研秘书jci_info', '3', 'jci_info@qq.com', '15779478455', '1556899200', '中共党员', '学士', '本科', '3', '0', '0', '1556980148', '1556980148', '0', '0', '20', '', '', '1');
INSERT INTO `ky_user` VALUES ('4', 'user', 'user', '1', '科研人员user', '4', 'user@qq.com', '15779478456', '1556899200', '中共党员', '学士', '本科', '4', '0', '0', '1556980242', '1556980242', '0', '0', '23', '', '', '1');

-- ----------------------------
-- Table structure for ky_zlcg
-- ----------------------------
DROP TABLE IF EXISTS `ky_zlcg`;
CREATE TABLE `ky_zlcg` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `zl_name` varchar(100) NOT NULL DEFAULT '' COMMENT '专利名称',
  `zl_owner` varchar(50) NOT NULL DEFAULT '' COMMENT '专利权人',
  `zl_type` varchar(20) NOT NULL DEFAULT '' COMMENT '专利类型',
  `zl_status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '专利状态',
  `zl_apply_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '专利申请日期',
  `zl_apply_num` varchar(20) NOT NULL DEFAULT '' COMMENT '专利申请号',
  `zl_inventor` varchar(20) NOT NULL DEFAULT '' COMMENT '专利发明人',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '回收站',
  `zl_ownerbmid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '专利所属部门id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='专利成果（著作权）信息表';

-- ----------------------------
-- Records of ky_zlcg
-- ----------------------------
INSERT INTO `ky_zlcg` VALUES ('1', '景德镇银行联网供电系统', '张三，李四，黄龙辉', '软件', '0', '1556812800', '20190504', 'Admin', '0', '1');

-- ----------------------------
-- Table structure for ky_zxpro
-- ----------------------------
DROP TABLE IF EXISTS `ky_zxpro`;
CREATE TABLE `ky_zxpro` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `zxxm_id` varchar(20) NOT NULL DEFAULT '' COMMENT '纵向项目编号',
  `zxxm_name` varchar(100) NOT NULL DEFAULT '' COMMENT '纵向项目名称',
  `zxxm_leader` varchar(20) NOT NULL DEFAULT '' COMMENT '纵向项目负责人姓名',
  `zxxm_member` varchar(255) NOT NULL DEFAULT '' COMMENT '纵向项目成员',
  `zxxm_bmid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '纵向项目所属部门id',
  `zxxm_type` tinyint(1) unsigned NOT NULL COMMENT '项目分类1 2 3 4',
  `zxxm_jibie` tinyint(1) unsigned NOT NULL COMMENT '纵向项目级别',
  `zxxm_status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '项目状态0待审核 1审核通过 2驳回',
  `zxxm_source` varchar(20) NOT NULL DEFAULT '' COMMENT '纵向项目来源',
  `zxxm_lx_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '纵向项目立项时间',
  `zxxm_plan_finishtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '纵向项目计划完成时间',
  `zxxm_jx_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '纵向项目结项时间',
  `zxxm_cgxs` tinyint(1) NOT NULL DEFAULT '0' COMMENT '纵向项目成果形式0无成果 1论文',
  `zxxm_counts` float unsigned NOT NULL COMMENT '纵向项目经费',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `is_delete` tinyint(1) unsigned NOT NULL COMMENT '逻辑删除1是 0否',
  `delete_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='纵向项目信息表';

-- ----------------------------
-- Records of ky_zxpro
-- ----------------------------
INSERT INTO `ky_zxpro` VALUES ('1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0');
INSERT INTO `ky_zxpro` VALUES ('2', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1554894152', '1554894152', '0', '0');
INSERT INTO `ky_zxpro` VALUES ('3', '纵向项目编号', '纵向项目名称', '黄龙辉', '黄龙辉', '1', '0', '0', '0', '省级', '2019', '2019', '2019', '0', '100', '1554894273', '1554894273', '0', '0');
INSERT INTO `ky_zxpro` VALUES ('4', '1', '2', '3', '4', '5', '6', '0', '7', '8', '2019', '2019', '2019', '9', '10', '1554894419', '1554894419', '0', '0');
INSERT INTO `ky_zxpro` VALUES ('5', '编号', '名称', '负责人', '成员', '0', '0', '0', '0', '来源', '2019', '2019', '2019', '0', '0', '1554894727', '1554894727', '0', '0');

-- ----------------------------
-- Table structure for ky_zzcg
-- ----------------------------
DROP TABLE IF EXISTS `ky_zzcg`;
CREATE TABLE `ky_zzcg` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `zz_name` varchar(50) NOT NULL DEFAULT '' COMMENT '著作题目',
  `zz_ename` varchar(100) NOT NULL DEFAULT '' COMMENT '著作英文题目',
  `zz_first_author` varchar(20) NOT NULL,
  `zz_publish_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '著作出版时间',
  `zz_publish_depart` varchar(50) NOT NULL DEFAULT '' COMMENT '著作出版单位',
  `zz_publish_addr` varchar(100) NOT NULL DEFAULT '' COMMENT '著作出版地',
  `zz_lang` varchar(10) NOT NULL DEFAULT '' COMMENT '著作语种',
  `zz_xkml` varchar(50) DEFAULT '' COMMENT '著作学科门类',
  `is_fisrtSub` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否一级学科',
  `zz_counts` int(11) NOT NULL DEFAULT '0' COMMENT '著作总字数',
  `isbn_num` varchar(20) NOT NULL DEFAULT '' COMMENT 'ISBN号',
  `zz_type` varchar(20) NOT NULL DEFAULT '' COMMENT '著作类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='著作成果信息表';

-- ----------------------------
-- Records of ky_zzcg
-- ----------------------------
