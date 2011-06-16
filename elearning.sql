-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 13 มี.ค. 2009  น.
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `elearning`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `bookmark`
-- 

CREATE TABLE `bookmark` (
  `bookmarkid` int(11) NOT NULL auto_increment,
  `memberid` int(50) NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY  (`bookmarkid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- dump ตาราง `bookmark`
-- 

INSERT INTO `bookmark` VALUES (1, 2, 3);
INSERT INTO `bookmark` VALUES (2, 0, 1);
INSERT INTO `bookmark` VALUES (11, 30, 30);
INSERT INTO `bookmark` VALUES (5, 1, 28);
INSERT INTO `bookmark` VALUES (7, 1, 2);
INSERT INTO `bookmark` VALUES (8, 13, 1);
INSERT INTO `bookmark` VALUES (9, 13, 3);
INSERT INTO `bookmark` VALUES (10, 14, 32);
INSERT INTO `bookmark` VALUES (12, 31, 39);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `comment`
-- 

CREATE TABLE `comment` (
  `commentid` int(11) NOT NULL auto_increment,
  `comment` varchar(500) character set tis620 NOT NULL,
  `commentdate` datetime NOT NULL,
  `username` varchar(20) NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY  (`commentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- 
-- dump ตาราง `comment`
-- 

INSERT INTO `comment` VALUES (2, 'eeee', '2009-02-28 20:19:10', 'newnew', 4);
INSERT INTO `comment` VALUES (3, 'fefrf', '2009-02-28 20:19:41', 'newnew', 4);
INSERT INTO `comment` VALUES (4, 'rgthythth', '2009-02-28 20:19:45', 'newnew', 4);
INSERT INTO `comment` VALUES (5, 'rrrrrrrr', '2009-02-28 20:19:50', 'newnew', 4);
INSERT INTO `comment` VALUES (6, 'eeeeee', '2009-02-28 20:20:01', 'newnew', 4);
INSERT INTO `comment` VALUES (7, 'ffffffffffffffff', '2009-02-28 20:20:05', 'newnew', 4);
INSERT INTO `comment` VALUES (8, 'rrrrrrrrrrrr', '2009-02-28 20:20:08', 'newnew', 4);
INSERT INTO `comment` VALUES (9, 'qqqqqqqq', '2009-02-28 20:23:33', 'newnew', 4);
INSERT INTO `comment` VALUES (10, 'sssssssssssssss', '2009-02-28 20:23:40', 'newnew', 4);
INSERT INTO `comment` VALUES (11, 'rrrrrrrrrr', '2009-02-28 20:25:02', 'newnew', 4);
INSERT INTO `comment` VALUES (13, 'zzzzzzzzzzzzzzzzzz', '2009-02-28 23:39:38', 'admin', 2);
INSERT INTO `comment` VALUES (15, 'ccccccccccccccc', '2009-03-02 12:50:15', 'newnew', 28);
INSERT INTO `comment` VALUES (16, 'zzzzzz', '2009-03-02 12:50:22', 'newnew', 28);
INSERT INTO `comment` VALUES (18, 'xxxxxxxxxxxxxxx', '2009-03-03 20:24:45', 'newnew', 40);
INSERT INTO `comment` VALUES (19, 'xxxxxxxxxxxxxxxxxxxxxx', '2009-03-03 20:24:49', 'newnew', 40);
INSERT INTO `comment` VALUES (20, 'xxxxxxxxxxxx', '2009-03-03 20:24:52', 'newnew', 40);
INSERT INTO `comment` VALUES (21, 'xxxxxxxxxxxxxxxxxxxxxx', '2009-03-03 20:24:55', 'newnew', 40);
INSERT INTO `comment` VALUES (22, 'xxxxxxxxxxxxxxxxxx', '2009-03-03 20:24:59', 'newnew', 40);
INSERT INTO `comment` VALUES (23, 'xxxxxxxxxxxxxx', '2009-03-03 20:25:04', 'newnew', 40);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `elearning`
-- 

CREATE TABLE `elearning` (
  `eid` int(5) NOT NULL auto_increment,
  `etypeid` int(2) NOT NULL,
  `etopic` varchar(50) character set tis620 NOT NULL,
  `edetail` varchar(500) character set tis620 NOT NULL,
  `eowner` varchar(50) character set tis620 NOT NULL,
  `eadddate` datetime NOT NULL,
  `evote` int(10) NOT NULL,
  `estatus` varchar(10) character set tis620 NOT NULL,
  `erate` int(2) NOT NULL,
  `eaddip` varchar(18) NOT NULL,
  PRIMARY KEY  (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

-- 
-- dump ตาราง `elearning`
-- 

INSERT INTO `elearning` VALUES (1, 1, 'PHP learningaaaaaaaaaaaaaaaaaaaaa', 'sdsdvfdgbgngb gfjngjk,oh.l.kljkhrf bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'm', '2009-01-30 16:14:21', 14, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (2, 1, 'Java ', '-', 'm', '2009-01-30 16:15:08', 66, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (3, 1, 'การเขียนภาษา PHP', 'dddddddddddd', '11', '2009-02-27 16:57:09', 223, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (4, 1, 'xxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'newnew', '2009-02-10 23:20:51', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (40, 3, 'ทดสอบการนำเสนอ', 'ทดสอบการนำเสนอ', 'aya34', '2009-03-03 16:46:02', 4, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (7, 1, 'xxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'admin', '2009-02-10 23:51:17', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (22, 3, 'dsdsd', 'ssdsds', 'newnew', '2009-02-28 16:31:15', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (21, 1, 'aqaqaq', 'aqaqaqa', 'newnew', '2009-02-28 16:19:06', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (10, 1, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', '2009-02-11 01:32:25', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (11, 1, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', '2009-02-11 01:37:23', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (12, 1, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', '2009-02-11 01:40:27', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (13, 1, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', '2009-02-11 01:46:43', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (20, 1, 'aaqaqaqaqaqaqa', 'aqaqaq', 'newnew', '2009-02-28 16:16:47', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (15, 1, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', '2009-02-11 01:49:46', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (23, 3, 'dsdsd', 'ssdsds', 'newnew', '2009-02-28 16:34:32', 0, 'noaccept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (24, 1, 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'newnew', '2009-02-28 16:42:54', 0, 'noaccept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (25, 1, 'aaaaaaaaaaaazz', 'aaaaaaaaaaaaaazz', 'newnew', '2009-02-28 16:44:11', 0, 'noaccept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (26, 1, 'aaaaaaaaaaaazz', 'aaaaaaaaaaaaaazz', 'newnew', '2009-02-28 16:45:20', 0, 'noaccept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (27, 1, 'aaaqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqq', 'newnew', '2009-02-28 16:54:01', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (28, 1, 'aaaqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqq', 'newnew', '2009-02-28 16:55:52', 2, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (29, 2, 'ดอกไม้', 'ดอกไม้วรรณคดี', 'myminty', '2009-03-01 00:34:07', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (30, 3, 'พลาสติก', 'พลาสติก', 'myminty', '2009-03-01 00:49:22', 4, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (31, 2, 'เปียโน', 'ชนิดเปียโน', 'myminty', '2009-03-01 00:57:55', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (32, 2, 'Down and Up', 'ภาษาอังกฤษ', 'myminty', '2009-03-01 00:59:03', 5, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (33, 1, 'ภัยอินเตอร์เนต', 'ในปัจจุบันการโจมตีในเครือข่ายมีวิธีการที่แยบยลซับซ้อนมากขึ้น มีการแฝงตัวผ่านเข้าสู่เครื่องผู้ใช้งานได้หลายช่องทาง โดยผู้ที่เป็นพาหะไม่มีโอกาสทราบได้เลยว่า ตัวเองเป็นผู้ถูกยืมมือไปทำร้ายผู้อื่น จนกระทั่งมีการแจ้งเตือนหรือถูกปิดกั้นการใช้งานไปแล้ว ค่อยทราบทีหลัง กว่าจะแก้ไขได้ก็ลำบาก (โดยเฉพาะในกลุ่ม User error คือคลิก OK เป็นอย่างเดียว) นี่จึงเป็นที่มาของบทความนี้ ที่จะทยอยอัพเดทให้เรียนรู้และป้องกันตนเองได้', 'myminty', '2009-03-02 01:51:55', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (34, 2, 'การศึกษา', 'การศึกษาในปัจจุบันมีปัญหา จึงทำให้เกิดวิกฤตทางปัญญา แล้วพาให้เกิดวิกฤตชาติ. การแก้วิกฤตต้องทำหลายอย่าง รวมทั้งการรักษาสมุฏฐานด้วยยุทธศาสตร์ทางปัญญา และการปฏิรูปการศึกษาเพื่อความเข้มแข็งทางปัญญาโดยรอบด้านโดยเร็ว. การปฏิรูปการศึกษาจึงเป็นวาระเร่งด่วนของชาติ.', 'myminty', '2009-03-02 01:53:13', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (35, 2, 'แบบฝึกหัดคณิตศาสตร์1', 'แบบฝึกหัดคณิตศาสตร์พื้นฐาน', 'myminty', '2009-03-02 01:54:48', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (36, 1, 'เทคนิคการเพิ่ม User ในลินุกส์', 'เทคนิคการเพิ่ม User ในลินุกส์', 'myminty', '2009-03-02 01:55:27', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (37, 2, 'ทวีปอเมริกาเหนือ', 'อเมริกาเหนือเป็นทวีปที่ตั้งอยู่ทางซีกโลกเหนือ และเป็นดินแดนที่มีลักษณะภูมิประเทศเป็นที่ราบอันกว้างใหญ่ เหมาะแก่การตั้งถิ่นฐาน การประกอบอาชีพ และการคมนาคมขนส่ง ทั้งยังเป็นแหล่งที่อุดมสมบูรณ์ด้วยทรัพยากรธรรมชาติ ประชากรส่วนใหญ่เป็นผู้สืบเชื้อสายมาจากพวกผิวขาวชาวยุโรปและได้รับการศึกษาดี ทำให้อเมริกาเหนือเป็นทวีปที่เจริญก้าวหน้ามากในทุกๆ ด้าน', 'myminty', '2009-03-02 01:58:49', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (38, 3, 'เทคโนโลยีสารสนเทศ', 'ความก้าวหน้าทางด้านวิทยาศาสตร์และเทคโนโลยี ทำให้มีการพัฒนาคิดค้นสิ่งอำนวยความสะดวกสบายต่อการดำชีวิตเป็นอันมาก เทคโนโลยีได้เข้ามาเสริมปัจจัยพื้นฐานการดำรงชีวิตได้เป็นอย่างดี เทคโนโลยีทำให้การสร้างที่พักอาศัยมีคุณภาพมาตรฐาน สามารถผลิตสินค้าและให้บริการต่าง ๆ เพื่อตอบสนองความต้องการของมนุษย์มากขึ้น เทคโนโลยีทำให้ระบบการผลิตสามารถผลิตสินค้าได้เป็นจำนวนมากมีราคาถูกลง สินค้าได้คุณภาพ เทคโนโลยีทำให้มีการติดต่อสื่อสารกันได้สะดวก การเดินทางเชื่อมโยงถึงกันทำให้ประชากรในโลกติดต่อรับฟังข่าวสารกันได้ตลอดเวลา', 'myminty', '2009-03-02 02:00:03', 0, 'accept', 0, '127.0.0.1');
INSERT INTO `elearning` VALUES (39, 2, 'แกรนด์แคนยอน ', '  เป็นทัศนียภาพที่สะกดสายตา เมื่อได้มองดูลานกว้างของภูเขาหินผา ที่กว้างใหญ่ไกล อันเต็มไปด้วยเสน่ห์ของผาหินที่ตั้งตระหง่าน และหุบเหวที่ดูน่าเกรงขาม มีสีสันออกไปทางส้ม แดง เหลือง แซมด้วยสีน้ำตาล และดำ อันเป็นลวดลายที่เป็นเอกลักษณ์ของ แกรนด์ แคนยอน ', 'myminty', '2009-03-02 12:09:53', 2, 'accept', 0, '127.0.0.1');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `elearningtype`
-- 

CREATE TABLE `elearningtype` (
  `etypeid` int(2) NOT NULL auto_increment,
  `etypename` varchar(50) character set tis620 NOT NULL,
  PRIMARY KEY  (`etypeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `elearningtype`
-- 

INSERT INTO `elearningtype` VALUES (1, 'คอมพิวเตอร์');
INSERT INTO `elearningtype` VALUES (2, 'ความรู้ทั่วไป');
INSERT INTO `elearningtype` VALUES (3, 'เทคโนโลยี');
INSERT INTO `elearningtype` VALUES (5, 'เรื่องทั่วๆไป');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `filedb`
-- 

CREATE TABLE `filedb` (
  `fileid` int(11) NOT NULL auto_increment,
  `filename` varchar(80) NOT NULL,
  `extenfile` varchar(10) NOT NULL,
  `filetype` varchar(10) NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY  (`fileid`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=58 ;

-- 
-- dump ตาราง `filedb`
-- 

INSERT INTO `filedb` VALUES (26, '2009-02-28-pic55Image(323).jpg', 'jpg', 'pic', 28);
INSERT INTO `filedb` VALUES (25, '2009-02-28-pic59Image(323).jpg', 'jpg', 'fileother', 28);
INSERT INTO `filedb` VALUES (24, '2009-02-28-pic38Image(236).jpg', 'jpg', 'pic', 27);
INSERT INTO `filedb` VALUES (17, '2009-02-11-pic324New Text Document (2).jpg', 'jpg', '', 17);
INSERT INTO `filedb` VALUES (18, '2009-02-11-pic324New Text Document.txt', 'txt', '', 17);
INSERT INTO `filedb` VALUES (19, '2009-02-11-pic324New Text Document.txt', 'txt', '', 17);
INSERT INTO `filedb` VALUES (54, '2009-03-03-56เปียโนแบบต่างๆ.doc', 'doc', 'fileother', 40);
INSERT INTO `filedb` VALUES (53, '2009-03-03-56เปียโน.JPG', 'JPG', 'pic', 40);
INSERT INTO `filedb` VALUES (23, '2009-02-11-pic68829NewTextDocument(2).jpg', 'jpg', '', 19);
INSERT INTO `filedb` VALUES (27, '2009-03-0154ดอก.JPG', 'JPG', 'pic', 29);
INSERT INTO `filedb` VALUES (28, '2009-03-0154ดอกไม้ในวรรณคดี.doc', 'doc', 'fileother', 29);
INSERT INTO `filedb` VALUES (29, '2009-03-0168115243.jpg', 'jpg', 'pic', 30);
INSERT INTO `filedb` VALUES (30, '2009-03-0168พลาสติก.doc', 'doc', 'fileother', 30);
INSERT INTO `filedb` VALUES (31, '2009-03-0157เปียโน.JPG', 'JPG', 'pic', 31);
INSERT INTO `filedb` VALUES (32, '2009-03-0157เปียโนแบบต่างๆ.doc', 'doc', 'fileother', 31);
INSERT INTO `filedb` VALUES (33, '2009-03-0179down.JPG', 'JPG', 'pic', 32);
INSERT INTO `filedb` VALUES (34, '2009-03-0179DownandUp.pdf', 'pdf', 'fileother', 32);
INSERT INTO `filedb` VALUES (35, '2009-03-02-14warm.jpg', 'jpg', 'pic', 33);
INSERT INTO `filedb` VALUES (36, '2009-03-02-14ภัยจากการก่อกวน.doc', 'doc', 'fileother', 33);
INSERT INTO `filedb` VALUES (37, '2009-03-02-66111[1].pdf', 'pdf', 'fileother', 34);
INSERT INTO `filedb` VALUES (38, '2009-03-02-271.doc', 'doc', 'fileother', 35);
INSERT INTO `filedb` VALUES (39, '2009-03-02-46secure_crt_04.gif', 'gif', 'pic', 36);
INSERT INTO `filedb` VALUES (40, '2009-03-02-46เทคนิคการเพิ่มUserในลินุกส์.doc', 'doc', 'fileother', 36);
INSERT INTO `filedb` VALUES (41, '2009-03-02-950010.gif', 'gif', 'pic', 37);
INSERT INTO `filedb` VALUES (42, '2009-03-02-95ทวีปอเมริกาเหนือ.doc', 'doc', 'fileother', 37);
INSERT INTO `filedb` VALUES (43, '2009-03-02-95ทวีปอเมริกาเหนือ2.doc', 'doc', 'fileother', 37);
INSERT INTO `filedb` VALUES (44, '2009-03-02-77banner.jpg', 'jpg', 'pic', 38);
INSERT INTO `filedb` VALUES (45, '2009-03-02-77เทคโนโลยีสารสนเทศ.doc', 'doc', 'fileother', 38);
INSERT INTO `filedb` VALUES (46, '2009-03-02-15123663.jpg', 'jpg', 'pic', 39);
INSERT INTO `filedb` VALUES (47, '2009-03-02-15แกรนด์แคนยอนอภิมหาผาหิน.doc', 'doc', 'fileother', 39);
INSERT INTO `filedb` VALUES (50, '2009-03-02-84แบบทดสอบเพื่อคัดเลือกเข้าแข่งขันPHPรอบแรก.doc', 'doc', 'fileother', 42);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `member`
-- 

CREATE TABLE `member` (
  `memberid` int(5) NOT NULL auto_increment,
  `membername` varchar(50) character set tis620 NOT NULL,
  `lastname` varchar(50) character set tis620 NOT NULL,
  `gender` varchar(10) character set tis620 NOT NULL,
  `address` varchar(80) character set tis620 NOT NULL,
  `province` int(20) NOT NULL,
  `email` varchar(20) character set tis620 NOT NULL,
  `username` varchar(20) character set tis620 NOT NULL,
  `password` varchar(10) character set tis620 NOT NULL,
  `status` varchar(10) character set tis620 NOT NULL,
  PRIMARY KEY  (`memberid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

-- 
-- dump ตาราง `member`
-- 

INSERT INTO `member` VALUES (1, 'พลากร', 'นาคพงษ์', 'male', '54/1 ม. 2', 5, 'new@hotmail.com', 'newnew', 'newnew', '1');
INSERT INTO `member` VALUES (5, 'aaaaaaaa', 'aaa', 'male', 'aaaa', 1, 'aaaa@ddd.ddd', 'naaaa', 'aaaaaaaaaa', '1');
INSERT INTO `member` VALUES (4, 'aaaaaaaa', 'aaa', 'male', 'aaaa', 1, 'aaaa@ddd.ddd', 'naaaa', 'aaaaaaaaaa', '1');
INSERT INTO `member` VALUES (6, 'aaaaaaaa', 'aaa', 'male', 'aaaa', 1, 'aaaa@ddd.ddd', 'naaaa', 'aaaaaaaaaa', '1');
INSERT INTO `member` VALUES (9, 'aaaaaaaa', 'aaa', 'male', 'aaaa', 1, 's@g.jj', 'newwww', 'dd', '1');
INSERT INTO `member` VALUES (10, 'aaaaaaaa', 'aaa', 'male', 'aaaa', 1, 's@g.jj', 'newwwws', 's', '1');
INSERT INTO `member` VALUES (11, 'aaaaaaaa', 'aaa', 'male', 'aaaa', 1, 's@g.jj', 'gggg', 'f', '1');
INSERT INTO `member` VALUES (12, 'aaaaaaaa', 'aaa', 'male', 'aaaa', 1, 's@g.jj', 'ggg', 'f', '1');
INSERT INTO `member` VALUES (13, 'พลากร', 'นาคพงษ์', 'male', '379  หมู่  5  ต.นครชุม  อ.เมือง', 5, 'webmasterza@gmail.co', 'admin', 'admin', 'admin');
INSERT INTO `member` VALUES (14, 'อาทิตยา', 'วงค์อาษา', 'female', '41/2 ต.หนองหาร', 55, 'myminty@hotmail.com', 'myminty', 'myminty', '1');
INSERT INTO `member` VALUES (29, 'พลากร', 'นาคพงษ์', 'male', '379  หมู่ 5', 1, 'new@hotmail.com', 'test1', 'test1', '1');
INSERT INTO `member` VALUES (15, 'panda', 'panda', 'male', 'panda', 1, 'myminty@hotmail.com', 'panda', 'panda', '1');
INSERT INTO `member` VALUES (31, 'john', 'wasan', 'male', '14หมู่6', 13, 'free-jai@hotmail.com', 'john', 'jj', '1');
INSERT INTO `member` VALUES (21, 'rrrr', 'rrrr', 'male', 'rrrr', 1, 'test@eee.com', 'rrr', 'rrr', '1');
INSERT INTO `member` VALUES (30, 'รจนา', 'คำวงษ์', 'female', '361 ม. 5 ต.หนองหาร อ.สันทราย', 14, 'aya@hotmail.com', 'aya34', 'aya345', '1');
INSERT INTO `member` VALUES (28, 'พพพพพ', 'พพพพพพพพพพพ', 'male', 'พพพพพพพพพ', 1, 'test@eee.com', 'qqq', 'qqq', '1');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `privatemessage`
-- 

CREATE TABLE `privatemessage` (
  `messageid` int(11) NOT NULL auto_increment,
  `message` varchar(500) character set tis620 NOT NULL,
  `messagedate` datetime NOT NULL,
  `sender` varchar(25) character set tis620 NOT NULL,
  `receiver` varchar(25) character set tis620 NOT NULL,
  PRIMARY KEY  (`messageid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `privatemessage`
-- 

INSERT INTO `privatemessage` VALUES (1, 'ระบบดีแล้วครับ', '2009-03-03 23:36:01', '', 'admin');
INSERT INTO `privatemessage` VALUES (2, 'ssssssssssssss', '2009-03-04 00:36:23', 'admin', 'aya34');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `province`
-- 

CREATE TABLE `province` (
  `id` int(2) NOT NULL,
  `provincename` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- dump ตาราง `province`
-- 

INSERT INTO `province` VALUES (1, 'กรุงเทพมหานคร');
INSERT INTO `province` VALUES (2, 'กระบี่');
INSERT INTO `province` VALUES (3, 'กาญจนบุรี');
INSERT INTO `province` VALUES (4, 'กาฬสินธุ์');
INSERT INTO `province` VALUES (5, 'กำแพงเพชร');
INSERT INTO `province` VALUES (6, 'ขอนแก่น');
INSERT INTO `province` VALUES (7, 'จันทบุรี');
INSERT INTO `province` VALUES (8, 'ฉะเชิงเทรา');
INSERT INTO `province` VALUES (9, 'ชลบุรี');
INSERT INTO `province` VALUES (10, 'ชัยนาท');
INSERT INTO `province` VALUES (11, 'ชัยภูมิ');
INSERT INTO `province` VALUES (12, 'ชุมพร');
INSERT INTO `province` VALUES (13, 'เชียงราย');
INSERT INTO `province` VALUES (14, 'เชียงใหม่');
INSERT INTO `province` VALUES (15, 'ตรัง');
INSERT INTO `province` VALUES (16, 'ตราด');
INSERT INTO `province` VALUES (17, 'ตาก');
INSERT INTO `province` VALUES (18, 'นครนายก');
INSERT INTO `province` VALUES (19, 'นครปฐม');
INSERT INTO `province` VALUES (20, 'นครพนม');
INSERT INTO `province` VALUES (21, 'นครราชสีมา');
INSERT INTO `province` VALUES (22, 'นครศรีธรรมราช');
INSERT INTO `province` VALUES (23, 'นครสวรรค์');
INSERT INTO `province` VALUES (24, 'นนทบุรี');
INSERT INTO `province` VALUES (25, 'นราธิวาส');
INSERT INTO `province` VALUES (26, 'น่าน');
INSERT INTO `province` VALUES (27, 'หนองคาย');
INSERT INTO `province` VALUES (28, 'หนองบัวลำภู');
INSERT INTO `province` VALUES (29, 'บุรีรัมย์');
INSERT INTO `province` VALUES (30, 'ปทุมธานี');
INSERT INTO `province` VALUES (31, 'ประจวบคีรีขันธ์');
INSERT INTO `province` VALUES (32, 'ปราจีนบุรี');
INSERT INTO `province` VALUES (33, 'ปัตตานี');
INSERT INTO `province` VALUES (34, 'พระนครศรีอยุธยา');
INSERT INTO `province` VALUES (35, 'พังงา');
INSERT INTO `province` VALUES (36, 'พัทลุง');
INSERT INTO `province` VALUES (37, 'พิจิตร');
INSERT INTO `province` VALUES (38, 'พิษณุโลก');
INSERT INTO `province` VALUES (39, 'เพชรบุรี');
INSERT INTO `province` VALUES (40, 'เพชรบูรณ์');
INSERT INTO `province` VALUES (41, 'แพร่');
INSERT INTO `province` VALUES (42, 'พะเยา');
INSERT INTO `province` VALUES (43, 'ภูเก็ต');
INSERT INTO `province` VALUES (44, 'มหาสารคาม');
INSERT INTO `province` VALUES (45, 'แม่ฮ่องสอน');
INSERT INTO `province` VALUES (46, 'มุกดาหาร');
INSERT INTO `province` VALUES (47, 'ยะลา');
INSERT INTO `province` VALUES (48, 'ยโสธร');
INSERT INTO `province` VALUES (49, 'ร้อยเอ็ด');
INSERT INTO `province` VALUES (50, 'ระนอง');
INSERT INTO `province` VALUES (51, 'ระยอง');
INSERT INTO `province` VALUES (52, 'ราชบุรี');
INSERT INTO `province` VALUES (53, 'ลพบุรี');
INSERT INTO `province` VALUES (54, 'ลำปาง');
INSERT INTO `province` VALUES (55, 'ลำพูน');
INSERT INTO `province` VALUES (56, 'เลย');
INSERT INTO `province` VALUES (57, 'ศรีสะเกษ');
INSERT INTO `province` VALUES (58, 'สกลนคร');
INSERT INTO `province` VALUES (59, 'สงขลา');
INSERT INTO `province` VALUES (60, 'สตูล');
INSERT INTO `province` VALUES (61, 'สมุทรปราการ');
INSERT INTO `province` VALUES (62, 'สมุทรสงคราม');
INSERT INTO `province` VALUES (63, 'สมุทรสาคร');
INSERT INTO `province` VALUES (64, 'สระแก้ว');
INSERT INTO `province` VALUES (65, 'สระบุรี');
INSERT INTO `province` VALUES (66, 'สิงห์บุรี');
INSERT INTO `province` VALUES (67, 'สุโขทัย');
INSERT INTO `province` VALUES (68, 'สุพรรณบุรี');
INSERT INTO `province` VALUES (69, 'สุราษฏร์ธานี');
INSERT INTO `province` VALUES (70, 'สุรินทร์');
INSERT INTO `province` VALUES (71, 'อ่างทอง');
INSERT INTO `province` VALUES (72, 'อุดรธานี');
INSERT INTO `province` VALUES (73, 'อุทัยธานี');
INSERT INTO `province` VALUES (74, 'อุตรดิตถ์');
INSERT INTO `province` VALUES (75, 'อุบลราชธานี');
INSERT INTO `province` VALUES (76, 'อำนาจเจริญ');
