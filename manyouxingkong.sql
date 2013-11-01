-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 11 月 01 日 17:45
-- 服务器版本: 5.1.69
-- PHP 版本: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `manyouxingkong`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ctime` int(11) NOT NULL,
  `etime` int(11) NOT NULL,
  `regip` varchar(15) NOT NULL,
  `lasttime` int(11) NOT NULL,
  `lastip` varchar(15) NOT NULL,
  `group` int(1) NOT NULL,
  `salt` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='系统管理员表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `phone`, `ctime`, `etime`, `regip`, `lasttime`, `lastip`, `group`, `salt`) VALUES
(1, 'admin', '7d61f71f34b0305aabc5d1cdd9d2a777', '', '', 0, 0, '', 0, '', 0, 'abc'),
(4, 'admin2', '01ca466d6544441faa5da28e44acb813', 'admin2@admin.com', '123456', 1383126516, 1383126574, '::1', 1383126516, '::1', 2, 'vD;!g');

-- --------------------------------------------------------

--
-- 表的结构 `attach`
--

CREATE TABLE IF NOT EXISTS `attach` (
  `attach_id` int(11) NOT NULL AUTO_INCREMENT,
  `attach_url` varchar(200) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`attach_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='附件表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- 表的结构 `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, 'admin', NULL, 'N;'),
('createUser', 0, '添加管理员', NULL, 'N;'),
('userManagement', 1, '用户管理', NULL, 'N;');

-- --------------------------------------------------------

--
-- 表的结构 `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `clase`
--

CREATE TABLE IF NOT EXISTS `clase` (
  `clase_id` int(11) NOT NULL AUTO_INCREMENT,
  `clase_name` varchar(50) NOT NULL,
  `grade_id` int(11) NOT NULL,
  PRIMARY KEY (`clase_id`),
  KEY `grade_id` (`grade_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='班级' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `clase`
--

INSERT INTO `clase` (`clase_id`, `clase_name`, `grade_id`) VALUES
(1, '班级1', 2),
(2, '班级2', 5);

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `report_title` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `Lecturer` varchar(50) NOT NULL,
  `ctime` int(11) NOT NULL,
  `student_num` int(11) NOT NULL,
  `attention` int(11) NOT NULL,
  `typeids` varchar(50) NOT NULL COMMENT '逗号分割',
  `starttime` int(11) NOT NULL,
  `desc` text NOT NULL,
  `introduce` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `reviewer` varchar(20) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `resourceids` text NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='课程' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `course_module_desc`
--

CREATE TABLE IF NOT EXISTS `course_module_desc` (
  `course_id` int(11) NOT NULL,
  `module_title_id` int(11) NOT NULL,
  `module_desc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `course_module_title`
--

CREATE TABLE IF NOT EXISTS `course_module_title` (
  `module_title_id` int(14) NOT NULL AUTO_INCREMENT,
  `module_title` int(20) NOT NULL,
  PRIMARY KEY (`module_title_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `course_notice`
--

CREATE TABLE IF NOT EXISTS `course_notice` (
  `course_id` int(11) NOT NULL,
  `notice` text NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `course_statistics`
--

CREATE TABLE IF NOT EXISTS `course_statistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `student_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `course_student_relationship`
--

CREATE TABLE IF NOT EXISTS `course_student_relationship` (
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `course_task`
--

CREATE TABLE IF NOT EXISTS `course_task` (
  `course_task_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `join_num` int(11) NOT NULL,
  `attention_num` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `attachids` varchar(200) NOT NULL,
  PRIMARY KEY (`course_task_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `course_type`
--

CREATE TABLE IF NOT EXISTS `course_type` (
  `course_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`course_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `user_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `action` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `credit_rule`
--

CREATE TABLE IF NOT EXISTS `credit_rule` (
  `action` varchar(20) NOT NULL,
  `action_desc` varchar(50) NOT NULL,
  `point` int(11) NOT NULL,
  PRIMARY KEY (`action`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `Lecturer_id` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `experience_title` varchar(50) NOT NULL,
  `experience_content` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `isopen` tinyint(1) NOT NULL,
  PRIMARY KEY (`experience_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `expert`
--

CREATE TABLE IF NOT EXISTS `expert` (
  `expert_id` int(11) NOT NULL AUTO_INCREMENT,
  `realname` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `achieve` text NOT NULL,
  `quote text` text NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`expert_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='名师专家表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `extend_read`
--

CREATE TABLE IF NOT EXISTS `extend_read` (
  `extend_read_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `report_id` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`extend_read_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='拓展阅读' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `ctime` int(11) NOT NULL,
  `asker` int(11) NOT NULL,
  `answer_content` text NOT NULL,
  `answer_time` int(11) NOT NULL,
  `answerer` varchar(20) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='意见反馈表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `poster_id` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `clicknum` int(11) NOT NULL,
  `replynum` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `forum_reply`
--

CREATE TABLE IF NOT EXISTS `forum_reply` (
  `forum_id` int(11) NOT NULL,
  `reply_content` text NOT NULL,
  `replyer_id` int(11) NOT NULL,
  `reply_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_name` varchar(50) NOT NULL,
  `school_id` int(11) NOT NULL,
  PRIMARY KEY (`grade_id`),
  KEY `school_id` (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='年级' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `grade`
--

INSERT INTO `grade` (`grade_id`, `grade_name`, `school_id`) VALUES
(1, '一年级', 3),
(2, '二年级', 2),
(3, '一年级', 2),
(4, '三年级', 3),
(5, '二年级', 3),
(6, '三年级', 2),
(7, '四年级', 3);

-- --------------------------------------------------------

--
-- 表的结构 `help_center`
--

CREATE TABLE IF NOT EXISTS `help_center` (
  `content` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `question` varchar(50) NOT NULL,
  `asker_id` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `question_answer`
--

CREATE TABLE IF NOT EXISTS `question_answer` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `respondent_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `answer_time` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `expert_id` int(11) NOT NULL,
  `desc` text NOT NULL,
  `ctime` int(11) NOT NULL,
  `etime` int(11) NOT NULL,
  `ord` int(11) NOT NULL,
  `attention` int(11) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='讲座报告' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `report_attation`
--

CREATE TABLE IF NOT EXISTS `report_attation` (
  `report_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `report_video`
--

CREATE TABLE IF NOT EXISTS `report_video` (
  `report_video_id` int(11) NOT NULL AUTO_INCREMENT,
  `report_id` int(11) NOT NULL,
  `attach_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ctime` int(11) NOT NULL,
  `etime` int(11) NOT NULL,
  `ord` int(11) NOT NULL,
  PRIMARY KEY (`report_video_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='讲座视频列表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(50) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='学校' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `school`
--

INSERT INTO `school` (`school_id`, `school_name`) VALUES
(2, '杨浦第一小学'),
(3, '杨浦第二小学'),
(4, '第一小学');

-- --------------------------------------------------------

--
-- 表的结构 `seminar_statistics`
--

CREATE TABLE IF NOT EXISTS `seminar_statistics` (
  `id` int(11) NOT NULL,
  `expert_id` int(11) NOT NULL,
  `lecture_name` varchar(50) NOT NULL,
  `video_num` int(11) NOT NULL,
  `focus_num` int(11) NOT NULL,
  `related_course_num` int(11) NOT NULL,
  `online_date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `user_id` int(11) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `clase_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='学生表';

-- --------------------------------------------------------

--
-- 表的结构 `student_statistics`
--

CREATE TABLE IF NOT EXISTS `student_statistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `visit_module` varchar(20) NOT NULL,
  `online_time` int(11) NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `system_log`
--

CREATE TABLE IF NOT EXISTS `system_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `visit_terminal` varchar(20) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `visit_starttime` int(11) NOT NULL,
  `visit_endtime` int(11) NOT NULL,
  `visit_module` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `task_complete`
--

CREATE TABLE IF NOT EXISTS `task_complete` (
  `task_complete_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `complete_time` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  PRIMARY KEY (`task_complete_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `user_id` int(11) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `school` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='教师表';

-- --------------------------------------------------------

--
-- 表的结构 `teacher_statistics`
--

CREATE TABLE IF NOT EXISTS `teacher_statistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `course_num` int(11) NOT NULL,
  `forum_num` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  `test_num` int(11) NOT NULL,
  `online_duration` int(11) NOT NULL,
  `last_visit_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `teaching_statistics`
--

CREATE TABLE IF NOT EXISTS `teaching_statistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `file_num` int(11) NOT NULL,
  `forum_num` int(11) NOT NULL,
  `task_num` int(11) NOT NULL,
  `qa_num` int(11) NOT NULL,
  `test_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer_table` varchar(50) NOT NULL,
  `answer_id` int(11) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `test_empty_answer`
--

CREATE TABLE IF NOT EXISTS `test_empty_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(10) NOT NULL,
  `answer_num` char(1) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `test_judgment`
--

CREATE TABLE IF NOT EXISTS `test_judgment` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` tinyint(1) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `test_multiple_answer`
--

CREATE TABLE IF NOT EXISTS `test_multiple_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(10) NOT NULL,
  `answer_num` int(11) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `test_paper`
--

CREATE TABLE IF NOT EXISTS `test_paper` (
  `test_paper_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_paper_title` varchar(20) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`test_paper_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `test_paper_relationship`
--

CREATE TABLE IF NOT EXISTS `test_paper_relationship` (
  `test_paper_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `test_short_answer`
--

CREATE TABLE IF NOT EXISTS `test_short_answer` (
  `answer_id` int(11) NOT NULL,
  `answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `test_single_answer`
--

CREATE TABLE IF NOT EXISTS `test_single_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` char(1) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `ctime` int(11) NOT NULL,
  `etime` int(11) NOT NULL,
  `lasttime` int(11) NOT NULL,
  `lastip` int(15) NOT NULL,
  `type` int(1) NOT NULL,
  `total_points` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `phone`, `ctime`, `etime`, `lasttime`, `lastip`, `type`, `total_points`) VALUES
(1, 'user1', 'user1', 'aaa@163.com', 'aaa', 111, 1383209546, 111, 111, 1, 111),
(2, 'user2', 'user2', 'user2', '111', 111, 11, 11, 11, 1, 111),
(3, 'user3', 'user3', 'user3@user3.com', '123456', 1383206872, 1383206872, 0, 0, 1, 0),
(4, 'user4', 'user2', 'user@173.com', '123456', 1383210789, 1383210789, 0, 0, 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `work_task`
--

CREATE TABLE IF NOT EXISTS `work_task` (
  `work_task_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `forum_num` int(11) NOT NULL,
  `task_num` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  PRIMARY KEY (`work_task_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `school` (`school_id`);

--
-- 限制表 `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- 限制表 `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
