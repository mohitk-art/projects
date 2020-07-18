<!--user status -->
<html>
<head>
	<title>user status</title>
<?php
include "database.php";
session_start();

$rs = mysql_query("select * from userscore where username='$_SESSION[user]'");
?>
<link rel="stylesheet" href="style/status.css">
<style type="text/css">
#d{
	border: yellow solid 1px;
color:red;
}
</style>
</head>
<body>
<header><?php include "header.php" ?></header>

<section>

<article align="center" class="th"><h1>User Detail</h1></article>

	<table align="center" cellpadding="15" cellspacing="10" id="sdt">
		<tr><th class="r">Your Id</th>
		<th class="r">Subject</th>
		<th class="r">Test</th>
		<th class="r">Score</th>
		<th class="r">Total Question</th>
		<th class="r">Date</th></tr>
<?php
while($row = mysql_fetch_array($rs)){
echo "<tr><td id='d'>$row[0]</td>
<td id='d'>$row[1]</td>
<td id='d'>$row[2]</td>
<td id='d'>$row[3]</td>
<td id='d'>$row[4]</td>
<td id='d'>$row[5]</td></tr>";
}
?>
</table>
</section>

<footer><?php include "footer.php" ?></footer>
</body>
</html>
