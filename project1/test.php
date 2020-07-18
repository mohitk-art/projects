<!-- test -->
<!DOCTYPE html>
<html>
<head>
	<title>sublist</title>
<link rel="stylesheet" href="style/showtest.css">
<style type="text/css">
body{
background:url(images/body1.jpg);
background-position:center;
background-size:100% 100%;
background-attachment:fixed;
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
background:url(images/slides.jpg);
background-repeat:no-repeat;
background-position:center;
background-size:100% 100%;
}

header{
margin:5px;
padding:5px;
background:url(images/footer6.jpg);
background-size:100% 100%;
}
</style>
<?php
session_start();
error_reporting(1);
include "database.php";
$_SESSION['footer']="";
$query=mysql_query("select *from subject;");
?>

</head>

<body>
<!-- header -->
<header><?php include "header.php"; ?></header>

	<!--content -->
<section>
<article id="ph">Select Subject</article>

<article>
<ol>
	<?php
			while($row=mysql_fetch_array($query)){
				echo "<li><a href='showtest.php?subid=$row[sub]' class='subject'>$row[sub]</li>";
			}
			?>
</ol>
</article>
</section>
	<!--footer -->
<footer><?php include "footer.php"; ?></footer>
</body>
</html>