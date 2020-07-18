<!-- showtest -->

<?php
session_start();
error_reporting(1);
$_SESSION['footer']="";
include "database.php";
extract($_GET);

//Tests
$rs=mysql_query("select *from test where sub='$subid'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>showtest</title>
<link rel="stylesheet" href="style/showtest.css">
</head>
<body>
<!-- header -->
<header><?php include "header.php"; ?></header>

<!-- content -->
<section>
<article id="ph"><?php echo $subid ?></article>

<article>
<ol>
<?php
while($row=mysql_fetch_array($rs)){
echo "<li><a href='quiz2.php?testid=$row[test_id]' class='topics'>$row[test_name]</a></li>";
}
?>
</ol>				
</article>
</section>

<!--footer -->
<footer><?php include "footer.php"; ?></footer>
</body>
</html>