<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start();
require "../database.php";

//Subjects
$subject=mysql_query("select *from subject where user='$_SESSION[admin]'");
//counter
$cnt=mysql_fetch_array(mysql_query("select count(test_id)+1 from test"));

if(isset($_POST['smt'])){
//check either test already exist
$check=mysql_fetch_array(mysql_query("select *from test where sub='$_POST[subid]' and test_name='$_POST[addtest]'"));



if($check==true){
function result(){
echo "$_POST[addtest] of $_POST[subid] Already Exist.";
}
}
else{
mysql_query("insert into test(test_id,sub,test_name,total_que) values($cnt[0],'$_POST[subid]','$_POST[addtest]',$_POST[totalque]);");
function result(){
echo "$_POST[addtest] of $_POST[subid] Added Sucessfully.";
}
}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>addtest</title>
<script src="../js/addtest.js"></script>
<link rel="stylesheet" href="../style/new subject.css">
<style type="text/css">

</style>
</head>

<body>
<!-- header -->
<header><?php include "header.php"; ?></header>

<!--content -->
<section>
<article id="ph">Add Test</article>

<!-- Select Subject -->
<article>
<table align="center">
<tr><th class="head">Select Subject</th>
<form method="post" action="#" onSubmit="return check();" name="form">
<td>
<select name="subid" required="subid">
<option value="">--Select--</option>
<?php
while($row=mysql_fetch_array($subject)){
echo "<option value='$row[sub]'>$row[sub]</option>";
}
?>
</select>
</td></tr>
<!--Add test -->
<tr><th class="head">Add test</th>
<td><input type="text" name="addtest" placeholder="Enter Test" required="addtest"></td>
</tr>

<tr><th></th> <td align="center">
<?php
if(isset($_POST['smt'])){
result();
}
?>
</td></tr>
<tr><th class="head">Total Question</th>
<td><select name="totalque" required="totalque">
<option value="">--Select--</option>
<?php
$i=10;
while($i<=100){
echo "<option value='$i'>$i</option>";
$i=($i+10);
}
?>
</select>
</td></tr>
<tr><th></th> <td align="right"><input type="submit" name="smt" value="Add"></td></tr>
</form>
</table>
</article></section>
<!-- footer -->
<footer><?php include "../footer.php"; ?></footer>

</body>
</html>
