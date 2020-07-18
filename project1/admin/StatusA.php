<!--Admin Status -->
<!DOCTYPE html>
<html>
<head>
	<title>Status</title>
<?php
session_start();
include "../database.php";

$query=mysql_query("select *from admin where f='T'");
$query1=mysql_query("select *from userid");
$query2=mysql_fetch_array(mysql_query("select * from extra;"));


if(isset($_POST['info'])){
mysql_query("update extra set info='$_POST[info]';");
function rs(){
	echo "<br>you Entered $_POST[info]";
}
}

?>
<link rel="stylesheet" href="../style/status.css">
<style>
article{
	margin: 5px;
}

section{
margin:5px;
padding:5px;
background-size: 500px 100%;
background-repeat:no-repeat;
background-position:center;
text-shadow:white 1px 1px;
box-shadow:1px 1px 1px 1px skyblue;
}

footer{
margin:5px;
padding:5px;
background:url(../images/slides.jpg);
background-repeat:no-repeat;
background-position:center;
background-size:100% 100%;
}

header{
margin:5px;
padding:5px;
background:url(../images/footer6.jpg);
background-size:100% 100%;
}
</style>
</head>
<body align="center">
	<!-- header -->
	<header><?php include "header.php"; ?></header>

<!--content -->
<section>
	
	<!-- extra -->
<article id='th'><h1>Information</h1></article>
	<article>
	<form method="post" action="StatusA.php">
	<input list="brows" name="info" required>
	<datalist id="brows" name="infod">
	<?php echo "<option value='$query2[info]'>" ?>
	</datalist>
	<?php
	 if(isset($_POST['info'])){
	 rs();
	}
	  ?>
	</form>
</article>




	<article class="th">Staff Details</article>

	<table border="" align="center" cellpadding="15" id="sdt" cellspacing="10">
		<tr> <th class="r">User</th> <th class="r">Email</th> <th class="r">Mobile</th></tr>
<?php
while($a=mysql_fetch_array($query)){
	echo "<tr><td>$a[user]</td> <td>$a[email]</td> <td>$a[mobile]</td></tr>";
}
?>
	</table>


<!-- User Details -->
<article class="th">User Details</article>

<table border="" align="center" cellpadding="15" id="sdt" cellspacing="10">
		<tr> <th class="r">User</th> <th class="r">Email</th> <th class="r">Mobile</th></tr>
<?php
while($a=mysql_fetch_array($query1)){
	echo "<tr><td>$a[id]</td> <td>$a[email]</td> <td>$a[mobile]</td></tr>";
}
?>
	</table>


<!-- footer -->
<footer><?php include "../footer.php" ?></footer>
</body>
</html>