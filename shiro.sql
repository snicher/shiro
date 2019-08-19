/*
Navicat MySQL Data Transfer

Source Server         : Ave
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : shiro

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2019-08-19 15:37:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `gender` varchar(2) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `photo` text,
  `dateadd` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES ('4', 'awp@mail.com', '1234', 'andi w', 'L', '082223456050', 'Karyawan Swasta', '3x4_99.jpg', null);
INSERT INTO `m_user` VALUES ('6', 'awp2@mail.com', '1234', 'test', 'P', '082223881872', 'Karyawan Swasta', 'aa_12.jpg', null);
INSERT INTO `m_user` VALUES ('8', 'awp@mail.com', '1234', 'asistenperencana1', 'L', '086', 'Pegawai Negeri', 'inp_photo_52.jpg', null);
SET FOREIGN_KEY_CHECKS=1;
