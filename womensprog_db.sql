-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- المزود: 127.0.0.1
-- أنشئ في: 18 يونيو 2017 الساعة 01:39
-- إصدارة المزود: 5.5.27
-- PHP إصدارة: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `womensprog_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `activites_model_tbl`
--

CREATE TABLE IF NOT EXISTS `activites_model_tbl` (
  `activ_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activ_discrip` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `activ_place` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `activ_duration` int(11) NOT NULL,
  `activ_organisers` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `activ_date` date NOT NULL,
  `activ_male_up18` int(11) NOT NULL,
  `activ_female_up18` int(11) NOT NULL,
  `activ_male_don18` int(11) NOT NULL,
  `activ_female_don18` int(11) NOT NULL,
  `needs_male_up18` int(11) NOT NULL,
  `needs_female_don18` int(11) NOT NULL,
  `needds_female_up18d` int(11) NOT NULL,
  `needs_male_don18` int(11) NOT NULL,
  `activ_notes` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activ_type_id` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `activ_prog_id` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`activ_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- إرجاع أو استيراد بيانات الجدول `activites_model_tbl`
--

INSERT INTO `activites_model_tbl` (`activ_id`, `user_id`, `activ_discrip`, `activ_place`, `activ_duration`, `activ_organisers`, `activ_date`, `activ_male_up18`, `activ_female_up18`, `activ_male_don18`, `activ_female_don18`, `needs_male_up18`, `needs_female_don18`, `needds_female_up18d`, `needs_male_don18`, `activ_notes`, `activ_type_id`, `activ_prog_id`) VALUES
(1, 0, 'نشاط تدريبي', 'مركز البرامج النسائية رفحشسيسي', 33, 'وكالة الغوث', '2017-03-22', 40, 211, 15, 222, 22, 1234, 32, 15, 'هلا هلا مهلاتش', '0', '0'),
(3, 0, 'نشاط تعليمي', 'مركز البرامج النسائية رفح', 90, 'وكالة الغوث', '2017-03-21', 432, 21, 15, 0, 21, 0, 444, 15, 'هلا هلا مهلاش', '0', '0'),
(4, 0, 'نشاط تعليميشسنيت', 'جمعية بسمة أمل', 32, 'محدش ههههه', '2017-03-21', 845, 2126, 5, 0, 2321, 22, 999, 5, 'هلا هلا هلا تيشن ', '0', '0'),
(5, 0, 'هو انتا بتتكلم ', 'مركز البرامج النسائية ', 90, 'محدش ههههه لووز', '2017-03-21', 55, 32, 55, 12, 56, 0, 0, 55, 'تيشن تيشن تيشن تيشن ', '0', '0'),
(6, 0, 'سوسوسسسس', 'مركز البرامج النسائية ', 80, 'محدش هههههشسيي', '2017-03-17', 51, 121, 65, 212, 55, 0, 0, 32, 'هلا هلا هلا تيشن', '2', '2'),
(7, 0, 'نشاط تعليميزر', 'مركز البرامج النسائية رفح', 904, 'محدش ههههه', '2017-03-26', 454, 54, 51, 12, 15, 15, 2, 12, 'هلا هلا هلا', '0', '2'),
(9, 30, 'نشاط  تربوي', 'مركز البرامج النسائية ', 90, 'وكالة الغوث', '2017-03-13', 12, 21, 23, 15, 21, 15, 3, 15, 'يملتسيبمنلتيسنتلكنمسيتبلكنتسبيل', '0', '1'),
(11, 3, 'سيسيسي', 'مركز البرامج النسائية رفحشسيسي', 31, 'بيسليبلبيل', '2017-04-11', 34, 12, 6, 31, 1, 11, 1, 11, 'ليبليبليلتلبتسلالابلسبيلسيبسيبسيب', '2', '2'),
(12, 61, 'هههههههههههههههههههههههه', 'مركز البرامج النسائية رفحشسيسي', 31, 'بيسليبلبيل', '2017-06-20', 32, 321, 12, 15, 32, 23, 45, 12, 'sssssssssssssssssssssssssssss', '2', '1'),
(13, 61, 'هههههههههههههههههههههههه', 'مركز البرامج النسائية رفحشسيسي', 34, 'بيسليبلبيل', '0000-00-00', 645, 23, 24, 21, 45, 321, 2, 21, 'ليبليبليلتلبتسلالابلسبيلسيبسيبسيب', '2', '1'),
(14, 3, 'ششيسسشي', 'ليسبيسبسيب', 34, 'بيسليبلبيل', '2017-06-16', 54, 21, 12, 12, 32, 23, 21, 12, 'شسيشسي4شس65ي6ش5س4ي6ش5س4ي65شس4ي', 'تربوي', 'الجندر');

-- --------------------------------------------------------

--
-- بنية الجدول `disability_tbl`
--

CREATE TABLE IF NOT EXISTS `disability_tbl` (
  `dis_id` int(11) NOT NULL AUTO_INCREMENT,
  `dis_nature_case` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `disability_tbl`
--

INSERT INTO `disability_tbl` (`dis_id`, `dis_nature_case`) VALUES
(1, 'إعاقة حركية'),
(2, 'إعاقة ذهنية');

-- --------------------------------------------------------

--
-- بنية الجدول `eco_situation_tbl`
--

CREATE TABLE IF NOT EXISTS `eco_situation_tbl` (
  `eco_id` int(11) NOT NULL AUTO_INCREMENT,
  `eco_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`eco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- إرجاع أو استيراد بيانات الجدول `eco_situation_tbl`
--

INSERT INTO `eco_situation_tbl` (`eco_id`, `eco_name`) VALUES
(1, 'ممتاز'),
(2, 'جيد'),
(3, 'متوسط'),
(4, 'سيئ');

-- --------------------------------------------------------

--
-- بنية الجدول `edu_level_tbl`
--

CREATE TABLE IF NOT EXISTS `edu_level_tbl` (
  `edu_id` int(11) NOT NULL AUTO_INCREMENT,
  `edu_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`edu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- إرجاع أو استيراد بيانات الجدول `edu_level_tbl`
--

INSERT INTO `edu_level_tbl` (`edu_id`, `edu_name`) VALUES
(1, 'إبتدائي'),
(2, 'إعدادي'),
(3, 'ثانوية'),
(4, 'دبلوم متوسط'),
(5, 'بكالوريوس'),
(6, 'ماجستير');

-- --------------------------------------------------------

--
-- بنية الجدول `initiatives_model_tbl`
--

CREATE TABLE IF NOT EXISTS `initiatives_model_tbl` (
  `initiat_id` int(11) NOT NULL AUTO_INCREMENT,
  `initiat_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `initiat_date` date NOT NULL,
  `initiat_activ` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `initiat_sponsor` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `initiat_place` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `initiat_days` int(11) NOT NULL,
  `initiat_parici` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `initiat_costs` int(11) NOT NULL,
  `initiat_trainer` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `initiat_mael_up18` int(11) NOT NULL,
  `initiat_mael_don18` int(11) NOT NULL,
  `initiat_dis_mael_up18` int(11) NOT NULL,
  `initiat_dis_mael_don18` int(11) NOT NULL,
  `initiat_femael_up18` int(11) NOT NULL,
  `initiat_femael_don18` int(11) NOT NULL,
  `initiat_dis_femael_up18` int(11) NOT NULL,
  `initiat_dis_femael_don18` int(11) NOT NULL,
  `initiat_note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `initiat_sigdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`initiat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- إرجاع أو استيراد بيانات الجدول `initiatives_model_tbl`
--

INSERT INTO `initiatives_model_tbl` (`initiat_id`, `initiat_title`, `initiat_date`, `initiat_activ`, `initiat_sponsor`, `initiat_place`, `initiat_days`, `initiat_parici`, `initiat_costs`, `initiat_trainer`, `initiat_mael_up18`, `initiat_mael_don18`, `initiat_dis_mael_up18`, `initiat_dis_mael_don18`, `initiat_femael_up18`, `initiat_femael_don18`, `initiat_dis_femael_up18`, `initiat_dis_femael_don18`, `initiat_note`, `initiat_sigdate`, `user_id`) VALUES
(5, 'مبادرة سامح', '2017-04-21', 'المسامح كريم', 'IOCC', 'مركز البرامج النسائية', 23, 'قناة الأقصى', 654, 'محمود أحمد', 45, 454, 3, 548, 4, 21, 5, 54, 'لا يوجد', '2017-04-17 13:06:32', 3),
(6, 'مبادرة فكر', '2017-04-28', 'ثقافية', 'مركز البرامج النسائية', 'الكلية الجامعية للعلوم والتكنلوجيا', 45, 'قناة الأقصى', 54, 'محمود أحمد', 21, 12, 32, 15, 21, 12, 211, 11, 'لا يوجد', '2017-04-17 13:17:17', 3),
(7, 'alaa ', '2017-05-18', 'تثقيفة', 'Jwc', 'كلية العلوم والتكنلوجيا', 30, 'مركز البرامج ', 200, 'الجامعة', 11, 12, 21, 12, 10, 20, 12, 21, 'سصصصصصصصصصصصصصصصصصصصص', '2017-05-19 15:55:07', 0),
(8, 'مبادرة سامح', '2017-06-21', 'المسامح كريم', 'مركز البرامج النسائية', 'مركز البرامج النسائية', 54, 'مركز البرامج ', 545, 'محمود أحمد', 54, 12, 32, 12, 21, 21, 21, 32, 'بلابلبسليسبلسيبيبلابلبسليسبلسيبيبلابلبسليسبلسيبيبلابلبسليسبلسيبي', '2017-06-14 23:45:59', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `reg_status_tbl`
--

CREATE TABLE IF NOT EXISTS `reg_status_tbl` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_name` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `reg_status_tbl`
--

INSERT INTO `reg_status_tbl` (`reg_id`, `reg_name`) VALUES
(1, 'لاجئ'),
(2, 'مواطن');

-- --------------------------------------------------------

--
-- بنية الجدول `social_status_tbl`
--

CREATE TABLE IF NOT EXISTS `social_status_tbl` (
  `soci_id` int(11) NOT NULL AUTO_INCREMENT,
  `soci_name_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`soci_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- إرجاع أو استيراد بيانات الجدول `social_status_tbl`
--

INSERT INTO `social_status_tbl` (`soci_id`, `soci_name_status`) VALUES
(1, 'أعزب/آنسة'),
(2, 'مطلق/ة'),
(3, 'أرملة'),
(4, 'متزوج/ة');

-- --------------------------------------------------------

--
-- بنية الجدول `status_work_tbl`
--

CREATE TABLE IF NOT EXISTS `status_work_tbl` (
  `work_id` int(11) NOT NULL AUTO_INCREMENT,
  `work_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`work_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `status_work_tbl`
--

INSERT INTO `status_work_tbl` (`work_id`, `work_name`) VALUES
(1, 'يعمل'),
(2, 'لا يعمل');

-- --------------------------------------------------------

--
-- بنية الجدول `subscriber_tbl`
--

CREATE TABLE IF NOT EXISTS `subscriber_tbl` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_fulllname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sub_gender` int(11) NOT NULL,
  `id_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `full_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `sub_tel` int(11) NOT NULL,
  `sub_phone` int(11) NOT NULL,
  `sub_age` date NOT NULL,
  `sub_no_logistics` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `persondis` int(11) NOT NULL,
  `natffiliation_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dis_id` int(11) NOT NULL,
  `dis_note` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `reg_id` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `soci_id` int(11) NOT NULL,
  `eco_id` int(11) NOT NULL,
  `edu_id` int(11) NOT NULL,
  `workplace_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `familymemb` int(11) NOT NULL,
  `malememb` int(11) NOT NULL,
  `femalememb` int(11) NOT NULL,
  `newsDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=84 ;

--
-- إرجاع أو استيراد بيانات الجدول `subscriber_tbl`
--

INSERT INTO `subscriber_tbl` (`sub_id`, `sub_fulllname`, `sub_gender`, `id_number`, `full_address`, `age`, `reg_date`, `sub_tel`, `sub_phone`, `sub_age`, `sub_no_logistics`, `persondis`, `natffiliation_name`, `dis_id`, `dis_note`, `reg_id`, `work_id`, `soci_id`, `eco_id`, `edu_id`, `workplace_name`, `familymemb`, `malememb`, `femalememb`, `newsDate`, `user_id`) VALUES
(32, 'منى محمد عيسى الغلاييني ', 1, '8926209598169', 'رفح', 19, '2017-03-24', 592414826, 21450963, '1997-06-28', '202020', 1, '0', 0, 'ss', 0, 0, 0, 0, 0, '0', 10, 5, 5, '2017-05-20 21:29:20', 10),
(36, 'علاء إيهاب كلاب', 2, '480264541652', 'رفح  شارع النصص ', 19, '2017-03-22', 2147483647, 2140963, '2017-03-24', '1-0091235', 2, '0', 0, 'شنتستيم', 0, 0, 0, 0, 0, '0', 4, 2, 2, '2017-06-08 15:19:51', 3),
(41, 'محمد علي', 1, '0516516516122', 'شارع النص رفح', 25, '2017-03-08', 2147483647, 21462322, '2017-03-07', '1-00812352222', 11, '11', 11, 'ss', 3, 3, 1, 1, 1, '1', 1, 1, 1, '2017-05-20 21:29:22', 10),
(44, 'سمر زهير خليفة', 0, '40265482321555', 'رفح - شارع النص - صيدلة بيروت', 25, '2017-03-18', 594521566, 2140269, '1990-09-11', '1-0085232', 0, '0', 0, '', 0, 0, 0, 0, 0, '0', 10, 6, 4, '2017-06-08 15:19:55', 3),
(46, 'ياسر محمد الجرمي', 0, '965654684984', 'خانيونس', 0, '2017-03-21', 592239632, 2140696, '1992-03-12', '1-002532', 0, '0', 0, '', 0, 0, 0, 0, 0, '0', 0, 0, 0, '2017-05-20 21:29:28', 52),
(50, 'يوسف أحمد ', 0, '41156123132', 'خانيونس - البلد', 0, '2017-03-19', 597657385, 2148542, '1986-06-15', '1-0082231', 0, '0', 0, '', 0, 0, 0, 0, 0, '0', 0, 0, 0, '2017-05-20 21:29:31', 52),
(51, 'حسن يوسف الشافعي', 0, '40265483321', 'رفح - بدر', 0, '2017-02-28', 594512385, 2150196, '1991-01-01', '1-0125412', 0, '0', 0, '', 0, 0, 0, 0, 0, '0', 0, 0, 0, '2017-05-20 21:29:34', 52),
(53, 'محمد ياسر جهاد', 0, '4096515652', 'رفح - الشرقية', 0, '2017-03-19', 598152315, 2148954, '1978-08-21', '444444', 0, '0', 0, '', 0, 0, 0, 0, 0, '0', 0, 0, 0, '2017-05-20 21:29:37', 52),
(54, 'عبد الله خليل يوسف1', 0, '8095654218', 'رفح - البلد', 20, '0000-00-00', 599845218, 2157845, '1989-07-15', '1-012568', 0, '0', 0, '', 0, 0, 0, 0, 0, '0', 0, 0, 0, '2017-05-20 21:29:40', 10),
(57, 'عاطف فايز الجمل', 0, '804549442', 'رفح - الشابورة', 0, '2017-03-19', 597705124, 2134345, '1994-01-18', '1-0084552', 0, '0', 0, '', 1, 2, 1, 4, 0, '0', 0, 0, 0, '2017-05-20 21:29:42', 9),
(58, 'أحمد صبري أبو حبيب', 0, '803775892', 'رفح - تل السلطان   عند الشؤون', 0, '2017-03-19', 598337676, 2152040, '1992-08-13', '1-02263733', 0, '0', 0, '', 1, 1, 4, 1, 5, '0', 0, 0, 0, '2017-05-20 21:29:48', 58),
(59, 'حسن يوسف الشافعي', 0, '804549442', 'رفح - تل السلطان  ', 0, '2017-03-19', 598452318, 2140849, '2017-03-05', '1-0055161', 0, '0', 0, '', 1, 1, 0, 3, 5, '0', 0, 0, 0, '2017-05-20 21:29:54', 10),
(61, 'عاطف محمد خليل', 0, '608542156218', 'خانيونس - البلد', 0, '2017-03-21', 2147483647, 21485651, '2017-03-13', '1-0084552', 0, '0', 0, '', 1, 1, 1, 1, 6, '1', 8, 5, 0, '2017-05-20 21:29:58', 58),
(62, 'محمود بارود', 0, '8051562118', 'رفح - تل السلطان  ', 20, '2017-03-20', 598451231, 2148952, '1988-08-09', '1-0092213', 0, '0', 0, '', 0, 0, 0, 0, 0, '0', 8, 6, 0, '2017-05-20 21:30:04', 51),
(63, 'علاء إيهاب كلاب', 0, '40965124856', 'رفح - الشرقية', 19, '2017-03-31', 595414826, 2140963, '2017-03-05', '1-0082231', 0, '0', 0, '', 1, 2, 1, 4, 4, '0', 7, 4, 3, '2017-05-20 22:21:03', 33),
(64, 'خميس خمس خمسات', 0, '804549442', 'خانيونس', 45, '2017-03-30', 59845231, 2185165, '1972-01-25', '1-0092213', 0, '0', 1, '', 1, 2, 1, 4, 3, '0', 11, 5, 6, '2017-06-08 22:55:02', 3),
(65, 'محمد أحمد', 0, '8045185621321', 'رفح تل السلطان شارع النص', 23, '2017-03-22', 598451238, 2185232, '2017-03-03', '1-0041562', 0, '2', 0, '', 1, 1, 4, 3, 5, '2', 2, 1, 1, '2017-05-20 22:20:25', 34),
(66, 'محمد يونس', 2, '4084651518', 'رفخ', 25, '0000-00-00', 595848122, 2165824, '2017-03-01', '2-0045162', 0, '1', 1, 'سشنتيشهبتشيهتبخشيهتبهشختب', 1, 1, 1, 1, 1, '1', 8, 4, 4, '2017-05-20 22:20:21', 56),
(69, 'يوسف خليل محمد', 0, '4056546540', 'خانيونس', 39, '1978-04-17', 595414826, 2142653, '0000-00-00', '1-098061', 0, '0', 0, '', 0, 0, 0, 0, 0, '0', 12, 6, 6, '2017-05-16 16:14:57', 3),
(70, 'Alaa Ehab Kullab', 1, '40984984984', 'Gaza', 19, '2017-05-10', 595414826, 2142363, '2017-05-10', '1', 2, '0', 0, 'asdasdasd', 0, 0, 0, 0, 0, '0', 1, 1, 2, '2017-06-08 22:46:55', 34),
(71, 'سمسم سمسم', 1, '646504504', 'رفح', 24, '2017-05-01', 595566454, 215421, '2017-05-01', '1-056465', 1, '1', 0, '', 1, 1, 1, 1, 5, '1', 3, 2, 1, '2017-06-08 22:47:47', 34),
(73, 'يوسف خليل', 2, '51321231321', 'خانيونس', 28, '2017-05-16', 592239632, 2142363, '2017-05-16', '1-056565', 2, '2', 0, '', 2, 1, 2, 1, 1, '1', 1, 1, 0, '2017-06-08 22:47:24', 34),
(74, 'محمد كلاب', 2, '50565656565', 'رفح', 19, '2017-06-08', 599738432, 2142363, '2017-06-01', '1-05646565', 2, '1', 0, '', 2, 1, 1, 1, 1, '1', 7, 4, 3, '2017-06-08 22:46:52', 34),
(75, 'عبد الله كلاب', 2, '444444654654', 'خانيونس', 22, '2017-06-26', 597657385, 2142362, '2017-06-26', '1-056465', 2, 'مش عارف', 0, '', 1, 1, 1, 1, 5, 'مركز البرامج النسائية', 5, 3, 2, '2017-06-08 21:29:27', 3),
(76, 'محمد محمد', 2, '654654654654', 'رفح', 23, '2017-06-20', 2147483647, 214454, '2017-06-03', '1-05646532', 2, 'سشيسشي', 0, '', 1, 2, 1, 4, 3, '', 3, 1, 2, '2017-06-08 22:54:58', 3),
(77, 'محمد يوسف', 2, '5465465464', 'رفح', 25, '2016-05-18', 54654654, 124465, '2017-06-03', '1-056465', 2, 'sadasd', 0, '', 1, 1, 1, 1, 1, '54654', 0, 65, 6, '2017-06-08 22:28:11', 62),
(78, 'sdkjasdlkjh', 1, '123456', 'رفح', 22, '2016-05-14', 2147483647, 215654654, '2017-06-02', '1-05646554', 2, 'asdsad', 0, '', 2, 1, 1, 1, 4, 'sadas', 11, 6, 5, '2017-06-08 22:32:33', 62),
(80, 'يوسف خليل يوسف', 2, '444444654654', 'رفح', 21, '2017-06-22', 2147483647, 21655, '2017-06-21', '6545664', 2, 'sad546', 0, '', 1, 1, 1, 1, 1, 'sa5da65sd4', 654654, 5, 3, '2017-06-08 22:49:54', 34),
(81, 'sadaskdjlk', 2, '654654', 'خانيونس', 65, '2017-05-20', 1651646464, 241564654, '2016-06-01', '1-05646565', 2, '3sadsad', 0, '', 1, 1, 1, 1, 1, '54654', 5, 3, 2, '2017-06-08 22:49:22', 34),
(82, 'يوسف خليل ', 2, '414654654654', 'رفح', 23, '2014-09-30', 2147483647, 2142363, '2011-09-27', '1-0564658', 2, 'dsadasdasd', 0, '', 1, 1, 1, 1, 1, 'sdasd', 21, 12, 9, '2017-06-08 22:51:50', 34),
(83, 'مي  خليل يوسف', 1, '123456789', 'خانيونس', 25, '2017-06-23', 5414826, 2142363, '2017-06-23', '5424151', 2, 'sadasd', 0, '', 1, 1, 1, 1, 1, 'dskfjlskdjf', 11, 4, 8, '2017-06-17 22:21:39', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `tbl_messages`
--

CREATE TABLE IF NOT EXISTS `tbl_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reciverid` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Isread` int(11) NOT NULL DEFAULT '0',
  `sendDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sendername` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `senderfile` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `senderimg` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `senderid` int(11) NOT NULL,
  `message` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mail_status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=191 ;

--
-- إرجاع أو استيراد بيانات الجدول `tbl_messages`
--

INSERT INTO `tbl_messages` (`id`, `reciverid`, `title`, `Isread`, `sendDate`, `sendername`, `senderfile`, `senderimg`, `senderid`, `message`, `email`, `mail_status`) VALUES
(97, 1, 'بيايبليبل', 1, '2017-05-10 06:12:06', 'toto', '', '', 3, 'djfksdjflkjdslfkjdslkfjdslkfj', 'toto2016@gmail.com', 0),
(107, 3, 'ghjghjghj', 1, '2017-05-26 20:14:07', 'adminal', '', '', 1, 'lmbnbmbnmnbm', 'asd@a.com', 0),
(108, 52, 'grertret', 0, '2017-05-27 00:49:28', 'adminal', '', '', 1, 'ertertvcccdfdh', 'asd@a.com', 0),
(109, 1, 'kljrkjre', 0, '2017-05-27 01:02:04', 'toto', '', '', 3, 'ilkuelieuwqioeuqwoieuqwe', 'toto2016@gmail.com', 0),
(111, 1, 'rewwt', 0, '2017-05-27 01:07:54', 'toto', '', '', 3, 'f43334444444444444444444444', 'toto2016@gmail.com', 0),
(112, 1, 'wwwtr', 0, '2017-05-27 01:08:10', 'toto', '', '', 3, 'gfddddddddddddddddddddddddggggggggggggggggg', 'toto2016@gmail.com', 0),
(113, 1, 'fccccccccccccccc', 1, '2017-05-27 01:08:27', 'toto', '', '', 3, 'fdgggggggggggggggggggggggggggggggggggggggggg', 'toto2016@gmail.com', 0),
(114, 1, '455555555555', 0, '2017-05-27 01:08:46', 'toto', '', '', 3, 'yttttttyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 'toto2016@gmail.com', 0),
(115, 1, 'bbbbbbbbbbbbbbbbbbvvvvvvv', 0, '2017-05-27 01:09:03', 'toto', '', '', 3, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'toto2016@gmail.com', 0),
(116, 3, 'fkdsgjklgj', 1, '2017-05-27 07:11:05', 'adminal', '', '', 1, 'lkjlkjldskjklfjsdf', 'asd@a.com', 0),
(117, 3, 'kldfjklj', 1, '2017-05-27 07:11:20', 'adminal', '', '', 1, 'fldhiogoidfuiosufg', 'asd@a.com', 0),
(118, 0, 'dfijiojoi', 1, '2017-05-27 07:11:32', 'adminal', '', '', 1, 'iojfsoimsiojsodif', 'asd@a.com', 0),
(119, 52, 'شكر لبك', 0, '2017-05-27 07:53:15', 'adminal', '', '', 1, 'سيمنسيبمتسيمبنتسي', 'asd@a.com', 0),
(120, 3, 'اااااااااااااا', 1, '2017-05-27 07:53:53', 'adminal', '', '', 1, 'ااالللللللللللللللللللللللللللللللللللللللل', 'asd@a.com', 0),
(121, 3, 'هنهن', 1, '2017-05-27 07:54:18', 'adminal', '', '', 1, 'هنننننننننننننننننننننننننننننننننننننننننن', 'asd@a.com', 0),
(123, 56, 'السلام عليكم', 1, '2017-05-27 08:18:28', 'adminal', '', '', 1, 'فثغفقغقفغقفغفقغ', 'asd@a.com', 0),
(124, 1, 'شكرا للرد على رسالتي', 0, '2017-05-27 08:25:07', 'aaa', '', '_9402_by_reeejoice.jpg', 56, 'تم بحمد لله الرد على رسالتي وشكرا للرد على رسالتي', 'toto2016@gmail.com', 0),
(127, 51, 'skljkljalkj', 1, '2017-05-27 21:20:27', 'adminal', '', '6ca1262749c0cc5a2acada6c96ff9db3.jpg', 1, 'kljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsf  kljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkljdsfkl', 'asd@a.com', 0),
(128, 34, 'السلام عليكم', 1, '2017-05-28 16:00:11', 'adminal', '', '6ca1262749c0cc5a2acada6c96ff9db3.jpg', 1, 'asdasfuihakjdfh jhfds jhasdasfuihakjdfh jhfds jhasdasfuihakjdfh jhfds jh\r\nasdasfuihakjdfh jhfds jhasdasfuihakjdfh jhfds jh\r\nasdasfuihakjdfh jhfds jh\r\nasdasfuihakjdfh jhfds jh\r\nasdasfuihakjdfh jhfds jh', 'asd@a.com', 0),
(133, 51, 'السلام عليكم', 1, '2017-05-28 16:21:56', 'adminal', '', '6ca1262749c0cc5a2acada6c96ff9db3.jpg', 1, ' السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم  السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم ا', 'asd@a.com', 0),
(142, 52, 'kdsjg;ksdgks;djf', 0, '2017-06-01 12:58:21', 'adminal', '17948525_289304371515549_1319716908_o.jpg,17965037_289304391515547_1118527280_n.jpg,17965499_289304404848879_687374604_n.jpg,17965781_289304371515549_1319716908_n.jpg', '6ca1262749c0cc5a2acada6c96ff9db3.jpg', 1, '6rg56f4g6fd4g6df54g', 'asd@a.com', 0),
(155, 52, 'kjffd;klgd', 0, '2017-06-03 11:16:58', 'adminal', '785c411054f80c4db9b6047d53625f16.pdf', '3491f98c744bdb29b8d968b81bb7fddc.jpg', 1, 'kljdskfljskldjflsjfd', 'asd@a.com', 0),
(156, 34, 'jkhjh', 0, '2017-06-03 12:30:10', 'adminal', 'd78b826d5b7c2629f5ca4c81ca36c6cb.xlsx', '3491f98c744bdb29b8d968b81bb7fddc.jpg', 1, 'kjhkjhkjh', 'asd@a.com', 0),
(158, 3, 'asdasdasd', 1, '2017-06-08 12:06:09', 'adminal', '9dc33481c3339774427f01645cd6f7c2.jpg', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'dfffddddddddddddddddddddddddddddddddd', 'sa@a.com', 0),
(159, 10, 'klsadjkasldj', 1, '2017-06-08 15:47:43', 'toto', 'f7946833223803e1c05189c896cfaf84.jpg', '_9402_by_reeejoice.jpg', 3, 'kjsdlkjfskldjflksjdf', 'toto2016@gmail.com', 0),
(160, 3, 'fsgsfgssssssssssss', 1, '2017-06-08 15:48:58', 'adminal', '', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'sssssssssssssssssssssssssssssssss', 'sa@a.com', 0),
(161, 3, 'alaaaa', 1, '2017-06-08 15:55:40', 'adminal', '', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'alsaaaaaaaaa', 'sa@a.com', 0),
(162, 3, 'sssss', 1, '2017-06-08 15:56:03', 'toto', '', '_9402_by_reeejoice.jpg', 3, 'sadasdasda', 'toto2016@gmail.com', 0),
(164, 56, 'aaaaaaaaaa', 1, '2017-06-08 16:07:39', 'adminal', '', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'ssssssssssssssssssssssss', 'sa@a.com', 0),
(165, 10, 'dddddd', 1, '2017-06-08 16:08:23', 'aaa', '59b3d6f43fb2b5bc8dac128dad407a80.docx', '_9402_by_reeejoice.jpg', 56, 'sssssssssssssssssssssssssssssdddddddddd', 'aek200979@hotmail.com', 0),
(166, 61, 'السلام عليكم', 1, '2017-06-08 17:37:53', 'toto', 'fa2e42b4092ba45dc0a358751b7f4ce4.txt', '_9402_by_reeejoice.jpg', 3, 'السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم \r\nالسلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم \r\nالسلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم \r\nالسلام علي', 'toto2016@gmail.com', 0),
(167, 56, 'kj;lkdjfkjlkjlkjlkjlkjsdf;klsdjf;l', 1, '2017-06-08 17:44:11', 'adminal', '3f917df4144c66ec2c68feee940de951.png', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'lklksajdl;kjasd1 &amp;&amp; $k-&gt;Isread ==1 &amp;&amp; $k-&gt;Isread ==1 &amp;&amp; $k-&gt;Isread ==1 &amp;&amp; $k-&gt;Isread ==1 &amp;&amp; $k-&gt;Isread ==1 &amp;&amp; $k-&gt;Isread ==1 &amp;&amp; $k-&gt;Isread ==\r\n1 &amp;&amp; $k-&gt;Isread ==1', 'sa@a.com', 0),
(168, 56, 'سشيشسيشسيشسي', 1, '2017-06-08 17:48:37', 'adminal', 'ea8c68d93a8e06d60e6b9265f9c1f5a9.jpg', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'سشششششششششششششششششششششششششششششششششششششششششششس\r\nس\r\n\r\nس\r\nس\r\nس\r\nسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسس\r\nسسشي سش\r\nي شس\r\nيشس\r\n س\r\nشي\r\nشسي\r\nشس \r\nسشي\r\n شسي سشيشسيشسيلللللللللللل', 'sa@a.com', 0),
(169, 10, 'السلام عليكم', 1, '2017-06-10 11:52:18', 'toto', '', '_9402_by_reeejoice.jpg', 3, 's;kljdaskl;jdas;jdkas;jd', 'toto2016@gmail.com', 0),
(172, 10, 'السلام عليكم', 1, '2017-06-11 21:07:14', 'toto', '121d205c70ba430069ac97e6d6863576.jpg', '_9402_by_reeejoice.jpg', 3, 'asdasd السلام عليكم السلام عليكم السلام عليكم asdasd السلام عليكم السلام عليكم السلام عليكم asdasd السلام عليكم السلام عليكم السلام عليكم asdasd السلام عليكم السلام عليكم السلام عليكم asdasd السلام عليكم السلام عليكم السلام عليكم asdasd السلام عليكم ', 'toto2016@gmail.com', 0),
(173, 10, 'aaaaa', 1, '2017-06-11 21:07:40', 'toto', '', '_9402_by_reeejoice.jpg', 3, ' aaaaa aaaaaaaaaaaaaaa sadsssssبلللللللللللللللللللللللللللللليفففففففففففففففففففففتا  aaaaa aaaaaaaaaaaaaaa sadsssssبلللللللللللللللللللللللللللللليفففففففففففففففففففففتا  aaaaa aaaaaaaaaaaaaaa sadsssssبلللللللللللللللللللللللللللللليففففففففففففف', 'toto2016@gmail.com', 0),
(174, 3, 'السلام عليكم', 1, '2017-06-11 22:55:36', 'adminal', '', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, '\r\nIn this post we are going to learn how to convert HTML Divison tag to editable html form by using Jquery and save changes of html form data into mysql table by using PHP programming with Ajax Jquery without page refresh. Suppose you work on some ap', 'sa@a.com', 0),
(176, 10, 'السلام عليكم', 1, '2017-06-12 16:28:43', 'toto', '', '_9402_by_reeejoice.jpg', 3, 'asdasdasdasdالسلام عليكم السلام عليكم asdasdasdasdالسلام عليكم السلام عليكم asdasdasdasdالسلام عليكم السلام عليكم asdasdasdasdالسلام عليكم السلام عليكم asdasdasdasdالسلام عليكم السلام عليكم asdasdasdasdالسلام عليكم السلام عليكم ', 'toto2016@gmail.com', 0),
(177, 10, 'شكرا لك', 1, '2017-06-12 16:32:33', 'aaa', '', '_9402_by_reeejoice.jpg', 56, 'شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالتي شكرا للرد على رسالت', 'aek200979@hotmail.com', 0),
(178, 10, 'مفيش كتير رسايل ', 1, '2017-06-13 22:01:59', 'toto', '', '_9402_by_reeejoice.jpg', 3, 'مفيش كتير رسايل هههه  مفيش كتير رسايل هههه مفيش كتير رسايل هههه مفيش كتير رسايل هههه  مفيش كتير رسايل هههه مفيش كتير رسايل هههه مفيش كتير رسايل هههه  مفيش كتير رسايل هههه مفيش كتير رسايل هههه مفيش كتير رسايل هههه  مفيش كتير رسايل هههه مفيش كتير رسايل', 'toto2016@gmail.com', 0),
(179, 3, 'شكرا وهي المرفق رجعنه', 1, '2017-06-14 13:25:45', 'adminal', 'e7705b0d10181fad04a13dec19e3a559.xls', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'ههههههههههههههههههههههههههههههههههههههههههههههههههههههههههههه \r\nيا معلم', 'sa@a.com', 0),
(180, 10, 'شكرا عزيزي المدير', 1, '2017-06-14 13:27:46', 'toto', '', '_9402_by_reeejoice.jpg', 3, 'مشكلتنا على طول الصراع مع اسرائيل لم تكن في قصر النفس وإنما في قصر النظر\r\nونحن نستعد للدخول في العشر الأخيرة من #رمضان حيث ترتفع الهمم وتزيد الطاعات والطموحات في جنات كعرض الأرض والسموات، أتذكر مجددا #أبي -رحمه الله- الذي رغم ضعف صحته كان يسابق في هذ', 'toto2016@gmail.com', 0),
(182, 3, 'kdsjg;ksdgks;djf', 1, '2017-06-14 13:29:32', 'adminal', '', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'ونحن نستعد للدخول في العشر الأخيرة من #رمضان حيث ترتفع الهمم وتزيد الطاعات والطموحات في جنات كعرض الأرض والسموات، أتذكر مجددا #أبي -رحمه الله- الذي رغم ضعف صحته كان يسابق في هذه الأيام للخيرات كالشباب أو أشد، فكان يطرق باب إحياء الليل بالقيام والتلاو', 'sa@a.com', 0),
(183, 3, 'kdsjg;ksdgks;djf', 1, '2017-06-14 13:29:32', 'adminal', '', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'ونحن نستعد للدخول في العشر الأخيرة من #رمضان حيث ترتفع الهمم وتزيد الطاعات والطموحات في جنات كعرض الأرض والسموات، أتذكر مجددا #أبي -رحمه الله- الذي رغم ضعف صحته كان يسابق في هذه الأيام للخيرات كالشباب أو أشد، فكان يطرق باب إحياء الليل بالقيام والتلاو', 'sa@a.com', 0),
(184, 10, 'adpfjadfjadfj', 1, '2017-06-14 13:31:43', 'toto', '', '_9402_by_reeejoice.jpg', 3, 'adpfjadfjadfjadpfjadfjadfjadpfjadfjadfjadpfjadfjadfjadpfjadfjadfj', 'toto2016@gmail.com', 0),
(185, 3, 'ad@a.com', 1, '2017-06-14 13:32:08', 'adminal', '1e05e316f41134f7948db7bea03448cb.jpg', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'adpfjadfjadfjadpfjadfjadfjadpfjadfjadfj', 'sa@a.com', 0),
(186, 3, 'adpfjadfjadfj', 1, '2017-06-14 18:01:50', 'adminal', '', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'sadasdsadassgdddddddddddddddddddd', 'sa@a.com', 0),
(187, 10, 'شكا للتواصل معي ', 1, '2017-06-14 18:17:28', 'toto', '', '_9402_by_reeejoice.jpg', 3, 'سيتم الرد على الموضوع خلال فترة قصيرة الان سأرسل مرفق للتأكيد', 'toto2016@gmail.com', 0),
(188, 10, 'شسيشسيسيشسيا', 1, '2017-06-14 18:22:54', 'toto', 'da6cb00c2165f5e9e3f5db2beefdb0bf.jpg', '_9402_by_reeejoice.jpg', 3, 'نتيباسيتناسيبتمسيابميسابنسشيب', 'toto2016@gmail.com', 0),
(189, 3, 'السلام عليكم', 1, '2017-06-15 08:37:00', 'super', 'ddde21e1983cb67ce5bbac16543044a1.jpg', '14695357_10154618654895948_6444289248157386759_n.jpg', 10, 'السلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكمالسلام عليكم', 'sa@a.com', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `regdate` datetime NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tell` int(11) NOT NULL,
  `addres` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imgsrc` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Isread` int(1) NOT NULL DEFAULT '0',
  `parentid` int(11) NOT NULL,
  `parent_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- إرجاع أو استيراد بيانات الجدول `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `regdate`, `last_login`, `email`, `tell`, `addres`, `imgsrc`, `Isread`, `parentid`, `parent_name`, `nickname`) VALUES
(3, 'toto', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-06-13 02:07:52', '2017-06-17 21:24:20', 'toto2016@gmail.com', 5414826, 'gaza', '2ee3d810fa57e12a74ac6e8325eff5c4.jpg', 1, 10, '', 'مركز البرامج النسائية - رفح'),
(9, 'moner', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2016-12-16 23:32:03', '2017-06-08 17:31:30', 'mmsa@lolo.ps', 591123549, 'Rafah', '', 1, 0, '', ''),
(10, 'super', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2016-12-17 02:43:30', '2017-06-17 23:38:59', 'sa@a.com', 5414826, 'Khanyonus', '4f1e3660ad53e4aa2d5673728acb193f.jpg', 2, 0, '', 'عبد الله عباس'),
(31, 'moute', 'e10adc3949ba59abbe56e057f20f883e', '2017-05-20 02:22:00', '2017-06-08 13:08:29', 'mmsa@lolo.ps', 597710991, 'رفح', '', 1, 3, '', ''),
(33, 'ahmed', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-04-15 00:00:00', '2017-06-08 17:31:32', 'ahmed@a.com', 595414826, 'Rafah', '', 1, 0, '', ''),
(34, 'root', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-04-15 14:24:32', '2017-06-08 22:45:27', 'aghost79@gmail.com', 595414826, '2asd', '', 1, 10, '', ''),
(56, 'aaa', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-04-22 17:56:04', '2017-06-08 16:06:25', 'aek200979@hotmail.com', 435234, 'رفح - تل السلطان شارع النص ', '_9402_by_reeejoice.jpg', 1, 0, '', ''),
(58, 'adham', 'e10adc3949ba59abbe56e057f20f883e', '2017-05-23 19:29:31', '2017-06-08 12:11:37', 'aghost79@gmail.com', 592239632, 'Rafah', '', 1, 0, '', ''),
(61, 'aa', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-06-17 23:52:16', '2017-06-17 23:31:36', 'aek200979@hotmail.com', 5414826, 'Rafah', '', 4, 3, '', 'علاء كلاب'),
(65, 'alaa', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-06-13 01:08:30', '2017-06-12 23:08:30', 'aek200979@hotmail.com', 595414826, '244623', '', 0, 10, 'adminal', ''),
(67, 'محمد', 'a59ab8cb2968a4fe12ej2cdcfa2732698676e3dc3s', '2017-06-13 01:20:08', '2017-06-12 23:20:08', 'aghost79@gmail.com', 592239632, 'gaza', '', 0, 3, 'toto', ''),
(68, 'roott', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-06-13 01:51:59', '2017-06-12 23:51:59', 'alwardtt95@gmail.com', 595414826, 'gazas', '', 0, 3, 'toto', 'محمود أحمد'),
(69, 'asd', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-06-17 22:11:54', '2017-06-17 20:11:54', 'aek200979@hotmail.com', 5414826, 'رفح', '', 0, 10, 'adminal', 'محمد كلاب'),
(73, 'شسي', 'a59aba6662b201e2178j2dbaef3857fcb79c39dc3s', '2017-06-14 12:46:50', '2017-06-14 10:46:50', 'aek200979@hotmail.com', 324234234, 'dszsadsad', '', 0, 3, 'toto', 'admiسشي'),
(91, 'mohea', 'a59abe10adc3949ba59j2bbe56e057f20f883edc3s', '2017-06-14 13:36:15', '2017-06-14 11:36:15', 'aghost79@gmail.com', 959565456, 'رفح - تل السلطان شارع النص', '', 1, 10, 'adminal', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
