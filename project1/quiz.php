<?php
session_start();
error_reporting(1);
include "database.php";
$_SESSION['footer']="";
extract($_POST);
extract($_SESSION);
extract($_GET);

//test id from showtest page
$_SESSION['tid']=$testid;


if(isset($_POST['nxt'])){

}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quiz</title>
<link rel="stylesheet" href="style/showtest.css">
</head>

<body>
<header><?php include "header.php"; ?></header>

<section>
<article id="ph">Give Exam</article>
<!--Question -->
<?php $i=1; 
while($i<=10){ 

//questions
$query=mysql_query("select *from addque where test_id='$tid' and que_id='$i'");

$row=mysql_fetch_array($query);

	?>
<article id="ques"><?php echo $i.". ".$row['que_des']; ?></article>

<!--Options -->
<article id="ops">
<form method="post" action="quiz.php">
<?php

echo "<input type='radio' name='op' value='1'>".$row['a1'];
echo "<input type='radio' name='op' value='2'>".$row['a2'];
echo "<input type='radio' name='op' value='3'>".$row['a3'];
echo "<input type='radio' name='op' value='4'>".$row['a4'];
echo "<input type='submit' value='Next' name='nxt'>";

if(isset($_POST['nxt'])){

mysql_query("INSERT INTO `userans`(`userid`, `que_id`, `test_id`, `sub`, `yourans`, `trueans`) VALUES ('$_SESSION[user]',$row[que_id],$tid,'$sid','$_POST[op]','$row[true_ans]');");

}
unset($_POST['nxt']);
?>
</form>
</article> 
<?php $i++; } ?>
</section>

<footer><?php include "footer.php"; ?></footer>
</body>
</html>
