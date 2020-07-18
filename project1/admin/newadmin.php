<!-- new admin 
html l4 -->
<?php 
session_start();
?>
<html>
<head>
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="../style/signup.css">
<script src="../js/signup.js"></script>
<style>
div.section{
margin:5px;
padding:5px;
border:#0000FF solid 1px;
height:320px;
background:#33FFFF;
text-align:center;
}

div.footer{
margin:5px;
padding:5px;
border:#FF00FF solid 1px;
}

div.header{
margin:5px;
padding:5px;
border:#6699FF solid 1px; 
}
div.article{
margin:5px;
padding:5px;
border:#FFFF00 solid 1px; 
}
</style>
<?php
extract($_POST);
include "../database.php";
?>
<body>
<!-- header start -->
<div class="header"><?php
include "header.php";
?></div>

<!-- page start -->
<div class="section">
<div class="article">
<table align="center" border="0">
<tr><th colspan="2"><h1>Create New Admin</h1></th></tr>
<form method="post" action="newadmin.php" name="form1" onSubmit="return check();">
<tr><th>Login id</th><td><input type="text" name="c_id" placeholder="Enter Userid" pattern=".{8,}" title="must contain atleast 8 charaters" required=""></td></tr>

<!-- conditon -->
<tr><th></th><th><?php
if(isset($signup))
{
$rs=mysql_query("select *from admin where user='$c_id'");
if(mysql_num_rows($rs)>0)
{
echo "<font color=red>$c_id Already exist</font>";
}
else{
echo "&nbsp;";
}
}
?>
</th></tr>

<tr><th>Password</th><td><input type="password" name="pass" placeholder="Enter Passoword" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}" title="must contain at least 8 or more characters, and at least one number and one uppercase and lowercase latter" required=""></td></tr>
<tr><th>Confirm Password</th><td><input type="password" name="cpass" placeholder="Enter Confirmation Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}" title="must contain at least 8 or more characters, and at least one number and one uppercase and lowercase latter" required=""></td></tr>
<tr><th>Name</th><td><input type="text" name="name" placeholder="Enter Name" pattern="[A-Z][a-z].{2,35}" title="must contain atleast one uppercase latter, and atleast 2 characters and less then 36" required=""></td></tr>
<tr><th>Address</th><td><textarea name="addr" cols="23" rows="3" placeholder="Enter Address" pattern=".{,150}" title="Address Contain only 150 characters" required=""></textarea></td></tr>
<tr><th>Phone</th><td><input type="text" name="phone" placeholder="Enter Phone Number" pattern="[0-9]{10}" title="Please Enter Valid phone" required=""></td></tr>
<tr><th>Email</th><td><input type="email" name="email" placeholder="Enter Email Id" required=""></td></tr>
<tr><td></td><td colspan="2"><input type="submit" name="signup" value="Signup" id="sub"></td></tr>
<tr><td align="center" colspan="2"><a href="front.php">Login</a></td></tr>
</table>
</form>
</div>
</div>

<!-- footer start -->
<div class="footer"><?php
if(isset($signup))
{
//insertion of data
mysql_query("INSERT INTO `admin`(`f`, `user`, `name`, `email`, `mobile`, `pass`, `address`) VALUES ('T','$c_id','$name','$email','$phone','$cpass','$addr')");
$name='';
$email='';
$phone='';
$cpass='';
$addr='';
}

include "../footer.php";
?></div>
</body>
</html>
