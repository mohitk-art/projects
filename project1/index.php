<?php
//user login
session_start();
$_SESSION['footer']="";
include "database.php";
extract($_POST);

//Extra
$extra=mysql_fetch_array(mysql_query("select *from extra;"));

if(isset($submit))
{
//condition
$rs=mysql_query("select *from userid where id='$userid' and pass='$pass';");
if(mysql_num_rows($rs) > 0){
$found=true;
$_SESSION['user']=$userid;
function check()
{
echo "<font color=green>You Have Logged in</font>";
}
}
else{
$found=false;
function check()
{
echo "<font  color=red>Invalid Username or Password</font>";
}
}
}
?>

<html>
<head>
<title>home</title>
<link rel="stylesheet" href="style/front.css">
<style>
.marqi{
height:150px;
width:150px;
border-radius:20px;
}

.fmarq{
height:150px;
border:0px;
}
</style>

</head>

<body>
<!-- header -->
<header><?php include "header.php"; ?></header>


<!-- button -->
<table width="100%"><tr>
<td id="adds"><marquee><?php echo "$extra[info]"; ?></marquee></td> 
<td id="btns"><nav><a href="admin/" target="_blank"><button>Admin Login</button></a>
</nav></td>
</tr></table>


<!-- if logged in -->
<?php if(isset($_SESSION['user'])){ ?>

<section>
<!-- page content -->
<font color="green"><b>You Have Logged in</b></font>
</section>
<!--footer -->
<footer><?php $_SESSION['footer']==""; include "footer.php"; ?></footer>
<?php return false; } ?>


<!-- content -->
<section>
<table align="center" width="100%"><tr>
<!--left slides -->
<td id="leftspan"><?php include "left-slide.php"; ?></td>

<!-- center -->
<td id="centerspan" valign="top">
<table border="0" align="center">
<tr><th colspan="2" id="ph">User Login</th></tr>
<form method="post" action="/" name="form1" onSubmit="return check();">
<tr><th id="t">User Id</th><td><input type='text' name='userid' value="" placeholder="Enter User Id" required="userid" autofocus></td></tr>
<tr><th colspan="2">
<?php
if(isset($submit))
{
check();
}
?>
</th></tr>
<tr><th id="t">Password</th><td><input type='password' name='pass' value="" placeholder="Enter Password" required="pass"></td></tr>
<tr><td>&nbsp;</td><th align="left" height="50" valign="top"><input type='submit' name="submit" value="login" id="b"></th></tr>
</form>
<tr><th colspan="2"><a href="signup.php" id="signup" target="_blank">Create new User Id</a></th></tr>
</table>
</td>


<!--right sides -->
<td id="rightspan"><?php include "right-slide.php"; ?></td>
</tr></table>
</section>

<!--marque images -->
<section class="fmarq">
<marquee behavior="alternate" scrollamount="15">
<img src="images/section1.jpg" class="marqi" />
<img src="images/section2.jpg" class="marqi" />
<img src="images/section3.jpg" class="marqi" />
<img src="images/section4.jpg" class="marqi" />
<img src="images/section5.jpg" class="marqi" />
<img src="images/header1.jpg" class="marqi" />
<img src="images/header2.jpg" class="marqi" />
<img src="images/section3.jpg" class="marqi" />
<img src="images/section4.jpg" class="marqi" />
<img src="images/section5.jpg" class="marqi" />
<img src="images/abc.jpg" class="marqi" />
<img src="images/bg1.jpg" class="marqi" />
</marquee>
</section>


<!--footer -->
<footer><?php $_SESSION['footer']==""; include "footer.php"; ?></footer>
</body>
</html>
