<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$conn=mysql_connect("localhost","root","") or die("Server not Connected");
mysql_select_db("quiz",$conn) or die("Database not Connected");
?>
<script>window.confirm("Do you Want to Drop The Tables")</script>
<table>
<tr><td>
<?php
mysql_query("drop table mst_admin");
?>
</td></tr><tr><td>
<?php
mysql_query("drop table mst_result");
?>
</td></tr><tr><td>
<?php
mysql_query("drop table mst_subject");
?>
</td></tr><tr><td>
<?php
mysql_query("drop table mst_test");
?>
</td></tr><tr><td>
<?php
mysql_query("drop table mst_user");
?>
</td></tr><tr><td>
<?php
mysql_query("drop table mst_useranswer");
?>
</td></tr><tr><td>
<?php
mysql_query("drop view s_and_t");
?>
</td></tr><tr><td>
<?php
mysql_query("drop view userscore");
?>
</td></tr><tr><td>
<?php
mysql_query("drop table mst_question");
?>
</td></tr>
</table>
<script>alert("Process done")</script>
</body>
</html>
