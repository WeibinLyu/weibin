-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-08-30 21:00:25
-- 服务器版本： 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `formatPaper`
--

-- --------------------------------------------------------

--
-- 表的结构 `assignmentBook`
--

CREATE TABLE IF NOT EXISTS `assignmentBook` (
  `id` tinyint(4) NOT NULL,
  `chooserId` tinyint(4) NOT NULL,
  `subjectId` tinyint(4) NOT NULL,
  `topicType` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `paperContent` text NOT NULL,
  `paperRequireAndData` text NOT NULL,
  `paperPreliminaryWork` text NOT NULL,
  `referenceDocumentation` text NOT NULL,
  `equipment` text NOT NULL,
  `taskAssignmentDate` date NOT NULL,
  `taskStartData` date NOT NULL,
  `taskEndData` date DEFAULT NULL,
  `enterpriseOrGoup` varchar(50) NOT NULL,
  `chiefOpnion` text,
  `acadmyGroupOpnion` text,
  `pdfExist` enum('0','1') DEFAULT '0',
  `route` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `assignmentBook`
--

INSERT INTO `assignmentBook` (`id`, `chooserId`, `subjectId`, `topicType`, `date`, `paperContent`, `paperRequireAndData`, `paperPreliminaryWork`, `referenceDocumentation`, `equipment`, `taskAssignmentDate`, `taskStartData`, `taskEndData`, `enterpriseOrGoup`, `chiefOpnion`, `acadmyGroupOpnion`, `pdfExist`, `route`) VALUES
(1, 5, 1, 'sssssss', '0000-00-00', '<p>ssssssssssss</p>\r\n', '<p>ssssssssssss</p>\r\n', '<p>sssssssssssssssss</p>\r\n', '<p>ssssssssssssssss</p>\r\n', '<p>ssssssssssssssss</p>\r\n', '0000-00-00', '0000-00-00', '0000-00-00', 'ssssssssssss', '', '', '1', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `chooseSubject`
--

CREATE TABLE IF NOT EXISTS `chooseSubject` (
  `id` tinyint(4) NOT NULL,
  `subjectId` tinyint(4) NOT NULL,
  `chooserId` tinyint(4) NOT NULL,
  `grade` tinyint(4) DEFAULT '0',
  `success` enum('0','1','2') DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `chooseSubject`
--

INSERT INTO `chooseSubject` (`id`, `subjectId`, `chooserId`, `grade`, `success`) VALUES
(33, 1, 5, 0, '2'),
(34, 1, 4, 0, '0');

-- --------------------------------------------------------

--
-- 表的结构 `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `id` tinyint(4) NOT NULL,
  `subjectId` tinyint(4) NOT NULL,
  `chooserId` tinyint(4) NOT NULL,
  `paperDate` date NOT NULL COMMENT '日期',
  `paperContent` text NOT NULL COMMENT '主要内容',
  `paperFocus` text NOT NULL COMMENT '重点难点',
  `referenceDocumentation` text COMMENT '参考文献',
  `equipment` text COMMENT '所需设备',
  `plan` text COMMENT '实施方案',
  `paperSchedule` text COMMENT '进度计划',
  `preSubmit` text COMMENT '预期提交的毕业设计资料',
  `teacherOpnion` text COMMENT '指导教师意见',
  `groupOpnion` text COMMENT '开题小组意见',
  `acadmyGroupnion` text COMMENT '院(系、部)意见',
  `pdfExist` enum('0','1') DEFAULT '0',
  `route` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `proposal`
--

INSERT INTO `proposal` (`id`, `subjectId`, `chooserId`, `paperDate`, `paperContent`, `paperFocus`, `referenceDocumentation`, `equipment`, `plan`, `paperSchedule`, `preSubmit`, `teacherOpnion`, `groupOpnion`, `acadmyGroupnion`, `pdfExist`, `route`) VALUES
(1, 1, 5, '0000-00-00', 'student', 'student', 'student', 'student', 'student', 'student', 'student', 'student', 'student', 'student', '0', 'student');

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` tinyint(4) NOT NULL,
  `roleName` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `roleName`) VALUES
(4, '学生'),
(2, '学院管理员'),
(1, '用户管理员'),
(3, '老师');

-- --------------------------------------------------------

--
-- 表的结构 `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` tinyint(4) NOT NULL,
  `subjectName` varchar(30) NOT NULL,
  `createrId` tinyint(4) NOT NULL,
  `content` text NOT NULL,
  `isReviewed` tinyint(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `subject`
--

INSERT INTO `subject` (`id`, `subjectName`, `createrId`, `content`, `isReviewed`) VALUES
(1, 'oooooooooo', 2, 'xxxxxxxxxxxxxx', 2);

-- --------------------------------------------------------

--
-- 表的结构 `subjectApplication`
--

CREATE TABLE IF NOT EXISTS `subjectApplication` (
  `id` tinyint(4) NOT NULL,
  `subjectName` varchar(60) NOT NULL COMMENT '题目名称',
  `subjectType` enum('0','1','2','3','4') NOT NULL DEFAULT '0' COMMENT '题目类型',
  `subjectDifficulty` enum('0','1') NOT NULL DEFAULT '0' COMMENT '题目难度',
  `machineTime` int(11) DEFAULT NULL COMMENT '上机时数',
  `task` varchar(60) DEFAULT NULL COMMENT '课题',
  `vertical` enum('0','1') NOT NULL DEFAULT '0' COMMENT '横纵向',
  `taskName` varchar(60) NOT NULL COMMENT '课题名称',
  `taskSource` varchar(60) NOT NULL COMMENT '课题来源',
  `reform` varchar(60) DEFAULT NULL COMMENT '教学，实验改革',
  `other` varchar(60) DEFAULT NULL COMMENT '其他',
  `assignment` text NOT NULL COMMENT '任务',
  `SARequire` text NOT NULL COMMENT '要求',
  `basicKnowledge` text NOT NULL COMMENT '要掌握的基础知识',
  `referenceDocuments` text NOT NULL COMMENT '参考文献',
  `equipment` text NOT NULL COMMENT '所需设备'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `subjectApplication`
--

INSERT INTO `subjectApplication` (`id`, `subjectName`, `subjectType`, `subjectDifficulty`, `machineTime`, `task`, `vertical`, `taskName`, `taskSource`, `reform`, `other`, `assignment`, `SARequire`, `basicKnowledge`, `referenceDocuments`, `equipment`) VALUES
(1, 'xxxxxxxxx', '0', '0', 10, 'xxxxxxxxxxxx', '0', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxx'),
(7, '666666666666', '0', '0', 66, '666666666666', '0', '666666666666', '66666666666', '6666666666', '666666666666', '6666666666666', '666666666666666', '666666666666666', '66666666666', '6666666666666');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `realName` varchar(20) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `studentId` varchar(30) DEFAULT NULL,
  `studentProfessional` varchar(30) DEFAULT NULL,
  `studentAcademy` varchar(60) DEFAULT NULL,
  `teacherWorkAddress` varchar(60) DEFAULT NULL,
  `teacherProfessionalTitle` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `realName`, `role`, `email`, `studentId`, `studentProfessional`, `studentAcademy`, `teacherWorkAddress`, `teacherProfessionalTitle`) VALUES
(0, 'alan', '$2y$13$5HwEn2W0XEe9dFOAZp/nIOaLfMMQqh8dDBMvBZzGG8N6sHBdfRA/2', '张三', 1, '0', '1300310211', '1', '1', '1', '1'),
(1, 'admin', '$2y$13$JlXG03jXNkU.5VQoLA1Sr.FQ4rQ.1XjdX4m/xlQODX0/X3x2byT2O', '李四', 2, '898601566@qq.com', '', '', '', '科技楼', '教授'),
(2, 'teacher', '$2y$13$ODsms3IoZcIXXSKrZTdzDO8ueNxpeN2Y7UggFG7u7JNR/NpcQHqMy', '王五', 3, '1', '1', '', '1', '1', '1'),
(4, 'student', '$2y$13$tli7EwcFAcwLSAlsgQX2s.iLtCgtkqlg1IGaGG220wJVhQcffKAGq', '你猜', 4, 'student@guet.com', '1300333333', 'IT6', '计算机科学与工程学院', '', ''),
(5, 'student1', '$2y$13$qMHntDQ2GVjAoTEY01fbiuuk2iF1znYsf2IahOQHUGOJaJDtKS5c2', 'student1', 4, '898601566@qq.com', '1300333331', 'student1', 'student1', '', ''),
(6, 'teacher1', '$2y$13$ixzZsIHZ2gnghqQOv61hiumlbcGaXwLAVQw.F4UiWvisCbo0I0EEC', 'teacher1', 3, 'teacher1@guet.com', '', '', 'teacher1', 'teacher1', 'teacher1'),
(8, 'student3', '$2y$13$wm8cl.pKn8pTfVtBnB7PeO5uWaRqrXf.99NyDKFRkuN/BwakZJRJm', 'student3', 4, 'student3', 'student3', 'student3', '', '', ''),
(17, 'student2', '$2y$13$ZqvCxWFqmtbdKbEHU7UdpeSvubmG61K7/16XgtEl6LkW2GV4HrgWq', 'student4', 4, 'student4', '1300333330', 'student4', 'student4', '', '');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `VassignmentBook`
--
CREATE TABLE IF NOT EXISTS `VassignmentBook` (
`userId` tinyint(4)
,`realName` varchar(20)
,`studentId` varchar(30)
,`studentAcademy` varchar(60)
,`studentProfessional` varchar(30)
,`id` tinyint(4)
,`chooserId` tinyint(4)
,`subjectId` tinyint(4)
,`topicType` varchar(50)
,`date` date
,`paperContent` text
,`paperRequireAndData` text
,`paperPreliminaryWork` text
,`referenceDocumentation` text
,`equipment` text
,`taskAssignmentDate` date
,`taskStartData` date
,`taskEndData` date
,`enterpriseOrGoup` varchar(50)
,`chiefOpnion` text
,`acadmyGroupOpnion` text
,`subjectName` varchar(30)
,`content` text
,`teacherName` varchar(20)
,`teacherWorkAddress` varchar(60)
,`teacherProfessionalTitle` varchar(60)
);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `Vproposal`
--
CREATE TABLE IF NOT EXISTS `Vproposal` (
`userId` tinyint(4)
,`realName` varchar(20)
,`studentId` varchar(30)
,`studentAcademy` varchar(60)
,`studentProfessional` varchar(30)
,`id` tinyint(4)
,`subjectId` tinyint(4)
,`chooserId` tinyint(4)
,`paperDate` date
,`paperContent` text
,`paperFocus` text
,`referenceDocumentation` text
,`equipment` text
,`plan` text
,`paperSchedule` text
,`preSubmit` text
,`teacherOpnion` text
,`groupOpnion` text
,`acadmyGroupnion` text
,`pdfExist` enum('0','1')
,`route` varchar(200)
,`subjectName` varchar(30)
,`teacherName` varchar(20)
,`teacherWorkAddress` varchar(60)
,`teacherProfessionalTitle` varchar(60)
,`subjectType` enum('0','1','2','3','4')
);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `VRole`
--
CREATE TABLE IF NOT EXISTS `VRole` (
`id` tinyint(4)
,`role` tinyint(4)
,`roleName` varchar(20)
);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `VsubjectApplication`
--
CREATE TABLE IF NOT EXISTS `VsubjectApplication` (
`id` tinyint(4)
,`subjectName` varchar(60)
,`subjectType` enum('0','1','2','3','4')
,`subjectDifficulty` enum('0','1')
,`machineTime` int(11)
,`task` varchar(60)
,`vertical` enum('0','1')
,`taskName` varchar(60)
,`taskSource` varchar(60)
,`reform` varchar(60)
,`other` varchar(60)
,`assignment` text
,`SARequire` text
,`basicKnowledge` text
,`referenceDocuments` text
,`equipment` text
,`realName` varchar(20)
,`teacherProfessionalTitle` varchar(60)
,`teacherWorkAddress` varchar(60)
,`userId` tinyint(4)
);

-- --------------------------------------------------------

--
-- 视图结构 `VassignmentBook`
--
DROP TABLE IF EXISTS `VassignmentBook`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `VassignmentBook` AS select `user`.`id` AS `userId`,`user`.`realName` AS `realName`,`user`.`studentId` AS `studentId`,`user`.`studentAcademy` AS `studentAcademy`,`user`.`studentProfessional` AS `studentProfessional`,`assignmentBook`.`id` AS `id`,`assignmentBook`.`chooserId` AS `chooserId`,`assignmentBook`.`subjectId` AS `subjectId`,`assignmentBook`.`topicType` AS `topicType`,`assignmentBook`.`date` AS `date`,`assignmentBook`.`paperContent` AS `paperContent`,`assignmentBook`.`paperRequireAndData` AS `paperRequireAndData`,`assignmentBook`.`paperPreliminaryWork` AS `paperPreliminaryWork`,`assignmentBook`.`referenceDocumentation` AS `referenceDocumentation`,`assignmentBook`.`equipment` AS `equipment`,`assignmentBook`.`taskAssignmentDate` AS `taskAssignmentDate`,`assignmentBook`.`taskStartData` AS `taskStartData`,`assignmentBook`.`taskEndData` AS `taskEndData`,`assignmentBook`.`enterpriseOrGoup` AS `enterpriseOrGoup`,`assignmentBook`.`chiefOpnion` AS `chiefOpnion`,`assignmentBook`.`acadmyGroupOpnion` AS `acadmyGroupOpnion`,`subject`.`subjectName` AS `subjectName`,`subject`.`content` AS `content`,`teacher`.`realName` AS `teacherName`,`teacher`.`teacherWorkAddress` AS `teacherWorkAddress`,`teacher`.`teacherProfessionalTitle` AS `teacherProfessionalTitle` from (((`user` join `assignmentBook`) join `subject`) join `user` `teacher`) where ((`assignmentBook`.`subjectId` = `subject`.`id`) and (`assignmentBook`.`chooserId` = `user`.`id`) and (`teacher`.`id` = `subject`.`createrId`)) WITH CASCADED CHECK OPTION;

-- --------------------------------------------------------

--
-- 视图结构 `Vproposal`
--
DROP TABLE IF EXISTS `Vproposal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Vproposal` AS select `user`.`id` AS `userId`,`user`.`realName` AS `realName`,`user`.`studentId` AS `studentId`,`user`.`studentAcademy` AS `studentAcademy`,`user`.`studentProfessional` AS `studentProfessional`,`proposal`.`id` AS `id`,`proposal`.`subjectId` AS `subjectId`,`proposal`.`chooserId` AS `chooserId`,`proposal`.`paperDate` AS `paperDate`,`proposal`.`paperContent` AS `paperContent`,`proposal`.`paperFocus` AS `paperFocus`,`proposal`.`referenceDocumentation` AS `referenceDocumentation`,`proposal`.`equipment` AS `equipment`,`proposal`.`plan` AS `plan`,`proposal`.`paperSchedule` AS `paperSchedule`,`proposal`.`preSubmit` AS `preSubmit`,`proposal`.`teacherOpnion` AS `teacherOpnion`,`proposal`.`groupOpnion` AS `groupOpnion`,`proposal`.`acadmyGroupnion` AS `acadmyGroupnion`,`proposal`.`pdfExist` AS `pdfExist`,`proposal`.`route` AS `route`,`subject`.`subjectName` AS `subjectName`,`teacher`.`realName` AS `teacherName`,`teacher`.`teacherWorkAddress` AS `teacherWorkAddress`,`teacher`.`teacherProfessionalTitle` AS `teacherProfessionalTitle`,`subjectApplication`.`subjectType` AS `subjectType` from ((((`user` join `proposal`) join `subject`) join `user` `teacher`) join `subjectApplication`) where ((`proposal`.`subjectId` = `subject`.`id`) and (`proposal`.`chooserId` = `user`.`id`) and (`teacher`.`id` = `subject`.`createrId`) and (`subject`.`id` = `subjectApplication`.`id`)) WITH CASCADED CHECK OPTION;

-- --------------------------------------------------------

--
-- 视图结构 `VRole`
--
DROP TABLE IF EXISTS `VRole`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `VRole` AS select `user`.`id` AS `id`,`user`.`role` AS `role`,`role`.`roleName` AS `roleName` from (`user` join `role`) where (`user`.`id` = `role`.`id`) WITH CASCADED CHECK OPTION;

-- --------------------------------------------------------

--
-- 视图结构 `VsubjectApplication`
--
DROP TABLE IF EXISTS `VsubjectApplication`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `VsubjectApplication` AS select `subjectApplication`.`id` AS `id`,`subjectApplication`.`subjectName` AS `subjectName`,`subjectApplication`.`subjectType` AS `subjectType`,`subjectApplication`.`subjectDifficulty` AS `subjectDifficulty`,`subjectApplication`.`machineTime` AS `machineTime`,`subjectApplication`.`task` AS `task`,`subjectApplication`.`vertical` AS `vertical`,`subjectApplication`.`taskName` AS `taskName`,`subjectApplication`.`taskSource` AS `taskSource`,`subjectApplication`.`reform` AS `reform`,`subjectApplication`.`other` AS `other`,`subjectApplication`.`assignment` AS `assignment`,`subjectApplication`.`SARequire` AS `SARequire`,`subjectApplication`.`basicKnowledge` AS `basicKnowledge`,`subjectApplication`.`referenceDocuments` AS `referenceDocuments`,`subjectApplication`.`equipment` AS `equipment`,`user`.`realName` AS `realName`,`user`.`teacherProfessionalTitle` AS `teacherProfessionalTitle`,`user`.`teacherWorkAddress` AS `teacherWorkAddress`,`user`.`id` AS `userId` from ((`user` join `subjectApplication`) join `subject`) where ((`subjectApplication`.`id` = `subject`.`id`) and (`subject`.`createrId` = `user`.`id`));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignmentBook`
--
ALTER TABLE `assignmentBook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chooseSubject`
--
ALTER TABLE `chooseSubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjectId` (`subjectId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roleName` (`roleName`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjectName` (`subjectName`);

--
-- Indexes for table `subjectApplication`
--
ALTER TABLE `subjectApplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignmentBook`
--
ALTER TABLE `assignmentBook`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chooseSubject`
--
ALTER TABLE `chooseSubject`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subjectApplication`
--
ALTER TABLE `subjectApplication`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- 限制导出的表
--

--
-- 限制表 `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`subjectId`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
