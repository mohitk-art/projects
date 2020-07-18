<?php
//server connecton
$conn=mysql_connect("localhost","root","") or die("Server not Connected");
//create database
mysql_query("create database quiz");
table();

function table()
{
global $conn;

//select dataase
mysql_select_db("quiz",$conn) or die("Database not connected");

//create Admin table
mysql_query("CREATE TABLE IF NOT EXISTS `mst_admin` (`id` int(11) NOT NULL AUTO_INCREMENT,`loginid` varchar(50) NOT NULL,`pass` varchar(50) NOT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;") or die("mst_admin table not created");

mysql_query("insert into mst_admin(loginid,pass) values('mohit','mohit123');") or die("mst_admin's values not inserted");

//create question table
mysql_query("CREATE TABLE IF NOT EXISTS `mst_question` (
  `que_id` int(5) NOT NULL AUTO_INCREMENT,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;
") or die("mst_question table not created");

//create result table
mysql_query("CREATE TABLE IF NOT EXISTS `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
") or die("mst_result table not created");

// create subject table
mysql_query("CREATE TABLE IF NOT EXISTS `mst_subject` (
  `sub_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
") or die("mst_subject table not created");

//create test table
mysql_query("
CREATE TABLE IF NOT EXISTS `mst_test` (
  `test_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;
") or die("mst_test table not created");

//create user table
mysql_query("CREATE TABLE IF NOT EXISTS `mst_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;
") or die("mst_uset table not created");

//create useranswer table
mysql_query("CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
") or die("mst_useranswer not created");

//create s_and_t view
mysql_query("create view s_and_t as select t.*, s.sub_name from mst_test t,mst_subject s where t.sub_id=s.sub_id;") or die("s_and_t view not created".mysql_error());

//create userscore view
mysql_query("create view userscore as select r.login'username', sat.sub_name'subject', sat.test_name'test', r.score'score', sat.total_que'total_que' ,r.test_date'test_date' from mst_result r, s_and_t sat where sat.test_id=r.test_id;
") or die("userscore view not created");

}
?>