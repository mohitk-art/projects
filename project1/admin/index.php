<?php
//admin front
session_start();
$_SESSION['footer']="A";
include "../database.php";
extract($_POST);
?>
<html>
<head>
<?php
if(isset($submit))
{
//condition
$rs=mysql_query("select * from admin where user='$userid' and pass='$pass';") or die("Query Failed1: ".mysql_error());
if(mysql_num_rows($rs) < 1)
{
$found=true;
function check(){
echo "<font color=red>Invalid Usar or Password";
}
}
else{
$_SESSION['admin']=$userid;
$found=false;
function check(){
echo "<font color=green>You have loged in</font>";
}
}
}
?>
<link rel="stylesheet" href="../style/front.css">
<title>home</title>
</head>
<body>

<!-- header -->
<header><?php include "header.php"; ?></header>

<!-- button -->
<nav>
<a href="../" formmethod="post" target="_blank"><button>User Login</button></a>
</nav>

<!-- if logged in -->
<?php if(isset($_SESSION['admin'])){ ?>
<!-- page content -->
<section>
<font color="green"><b>You Have Logged in</b></font>
</section>

<!-- footer -->
<footer><?php include "../footer.php" ?></footer>
<?php return false; } ?>


<!-- content -->
<section>
<table border="0" align="center">
<tr><th colspan="2"><h1 id="ph">Admin Login</h1></th></tr>
<form method="post" action="/admin/index.php" name="form1" onSubmit="return check();">
<tr><th id="t">User Id</th><td><input type='text' name='userid' value="" placeholder="Enter User Id" autofocus required="userid"></td></tr>
<tr><th colspan="2">
<?php
if(isset($submit))
{
check();
}
?>
</th></tr>
<tr><th id="t">Password</th><td><input type='password' name='pass' value="" placeholder="Enter Password" required="pass"></td></tr>
<tr><td>&nbsp;</td><th align="left"><input type='submit' name="submit" value="login" id="b"></th></tr>
</form>
</table>
</section>

<!--footer -->
<footer><?php include "../footer.php"; ?></footer>
</body>
</html>
