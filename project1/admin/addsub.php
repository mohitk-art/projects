<html>
<head>
<?php 
include "../database.php";
session_start();
extract($_POST);
if(isset($Add)){
//check either subject already erxist
$cnd=mysql_fetch_array(mysql_query("select *from subject where sub='$addsub';"));

$count=mysql_fetch_array(mysql_query("select count(sub_id)+1 from subject"));

if($cnd==true){
function result(){
echo "$_POST[addsub] Subject Already Exist";
}
}
else{
if($addsub!=""){
$date=date("Y-m-d");
mysql_query("insert into subject(sub_id,sub,user,date) values($count[0],'$addsub','$_SESSION[admin]','$date');");
function result(){
echo "Subject $_POST[addsub] Added Successfully.";
}
$addsub="";
$date="";
}
}

}
?>
<link rel="stylesheet" href="../style/new subject.css">
<style type="text/css">
</style>

<script src="../js/adddsub.js"></script>
</head>
<body>
<!--header -->
<header><?php include "header.php"; ?></header>

	<!-- coontent -->
	<section>
	<article id="ph">Add Subject</article>
		<form method="post" action="addsub.php" onSubmit="return check();" name="form">
		<article align='center'><input type="text" name="addsub" placeholder="Enter Subject Name"></article>
		
		<article align='center'><?php 
		if(isset($Add)){
		result(); 
		}
		?></article>

			<article align='center'><input type="submit" name="Add" id="btn"></article>
				</form>
</section>

<!--footer -->
	<footer><?php include "../footer.php"; ?></footer>
</body>
</html>