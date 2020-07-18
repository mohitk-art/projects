<html>
<head>
<link rel="stylesheet" href="../style/addque.css" />
<style>
</style>
<script src="../js/addque.js"></script>

<?php
session_start();
require "../database.php";

//Subjects
$subject=mysql_query("select *from subject where user='$_SESSION[admin]'");

//counter
$cnt=mysql_fetch_array(mysql_query("select count(que_id)+1 from addque"));

//Add Question
if(isset($_POST['addbtn'])){
$date=date("Y-m-d");
mysql_query("INSERT INTO `addque`(`que_id`, `test_id`, `sub`, `que_des`, `a1`, `a2`, `a3`, `a4`, `true_ans`,date) VALUES ($cnt[0],$_POST[testlist],'$_SESSION[subid]','$_POST[question]','$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]',$_POST[true_ans],'$date');");

$_POST['subid']="";
$_POST['testlist']="";
$_POST['question']="";
$_POST['true_ans']="";
$_POST['a1']="";
$_POST['a2']="";
$_POST['a3']="";
$_POST['a4']="";
$date="";
}


if(isset($_POST['subid'])){
function content1(){
$_SESSION['subid']=$_POST['subid'];
?>
<article id="ph">Add Question</article>
<article>
<form method="post" action="#" onSubmit="return check()" name="form">
<table align="center">
<tr><th class="head">Select Test</th>
<td><select name="testlist" class="slt" required="testlist">
<option value="">--Select--</option>
<?php
$test=mysql_query("select *from test where sub='$_POST[subid]';");
while($row=mysql_fetch_array($test)){
echo "<option value='$row[test_id]'>$row[test_name]</option>";
}
?>
</select></td></tr>

<!--Question -->
<tr><th class="head">Question</th>
<td><input type="text" name="question" id="que" required="question"></td></tr>

<!--Answere 1-->
<tr><th class="head">Answere 1</th>
<td><input type="text" name="a1" class="ans" required="a1"></td></tr>

<!--Answere 2-->
<tr><th class="head">Answere 2</th>
<td><input type="text" name="a2" class="ans" required="a2"></td></tr>

<!--Answere 3-->
<tr><th class="head">Answere 3</th>
<td><input type="text" name="a3" class="ans" required="a3"></td></tr>

<!--Answere 4-->
<tr><th class="head">Answere 4</th>
<td><input type="text" name="a4" class="ans" required="a4"></td></tr>

<!--True Answere -->
<tr><th class="head">True Answere</th>
<td><select class="slt" name="true_ans" required="true_ans">
<option value="">--Select--</option>
<option value="1">Answere 1</option>
<option value="2">Answere 2</option>
<option value="3">Answere 3</option>
<option value="4">Answere 4</option>
 </select>
</td></tr>

<tr><th></th> <td><input type="submit" name="addbtn" value="submit"></td></tr>
</table>
</form>
</article>


<?php
}//end of content1 function
}// end of subid isset condition
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>add question</title>


<?php function content(){ ?>
<article id="ph">Add Question</article>
<article>
<form method="post" action="#" onSubmit="return check()">
<table align="center">
<tr><th class="head">Select Subject</th>
<td><select name="subid" class="slt" required="sub">
<option value="">--Select--</option>
<?php
global $subject;
while($row=mysql_fetch_array($subject)){
echo "<option value='$row[sub]'>$row[sub]</option>";
}
?>
</select>
<input type="submit" name="nxt" value="Next" class="nxt">
</td></tr>
</form>
</table>
</article>
<?php 
if(isset($_POST['nxt'])){
}
} //end content function 
?>
</head>

<body>
<!--header -->
<header><?php include "header.php"; ?></header>

<section>
<!--content -->
<?php
if(isset($_POST['subid'])){
 content1();
 }
 else{
 content();
 }
  ?></td></tr>
</section>

<!--footer -->
<footer><?php include "../footer.php"; ?></footer>
</body>
</html>