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
$query2=mysql_query("select *from userscore");
?>
<link rel="stylesheet" href="../style/status.css">

<style type="text/css">
#d{
	border: yellow solid 1px;
color:red;
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
<body>
	<!-- header -->
<header><?php include "header.php"; ?></header>

<!--content -->
<section>
<!-- User Details -->
<article class="th" align="center"><h1>User Details</h1></article>

<table align="center" cellpadding="15" id="sdt" cellspacing="10">
		<tr> <th class="r">User</th> <th class="r">Email</th> <th class="r">Mobile</th></tr>
<?php
while($a=mysql_fetch_array($query1)){
	echo "<tr><td id='d'>$a[id]</td> <td id='d'>$a[email]</td> <td id='d'>$a[mobile]</td></tr>";
}
?>
	</table>

<article class="th" align="center"><h1>User Score</h1></article>
<table align="center" cellpadding="15" id="sdt" cellspacing="10">
	<tr><th class="r">User name</th>
		<th class="r">subject</th>
		<th class="r">Test</th>
		<th class="r">Score</th>
		<th class="r">Total Question</th>
		<th class="r">Test Data</th></tr>
<?php
while($row1=mysql_fetch_array($query2)){
echo "<tr>
<td id='d'>$row1[0]</td>
<td id='d'>$row1[1]</td>
<td id='d'>$row1[2]</td>
<td id='d'>$row1[3]</td>
<td id='d'>$row1[4]</td>
<td id='d'>$row1[5]</td></tr>";
}
?>
</table>
</section>

<!-- footer -->
<footer><?php include "../footer.php" ?></footer>
</body>
</html>