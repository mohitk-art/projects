<!-- User Signup -->

<html>
<head>
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="style/signup.css">
<script src="js/signup.js"></script>
<?php
extract($_POST);
include "database.php";
?>
<body>
<table width="100%">
<!-- header start -->
<tr><td><?php
include "header.php";
?></td></tr>

<!-- page start -->
<tr><td>

<table align="center" border="0">
<tr><th colspan="2"><h1>Create New User</h1></th></tr>
<form method="post" action="signup.php" name="form1" onSubmit="return check();">
<tr><th>Login id</th><td><input type="text" name="c_id" placeholder="Enter Userid" pattern=".{8,}" title="must contain atleast 8 charaters" required=""></td></tr>

<!-- conditon -->
<tr><th></th><th><?php
if(isset($signup))
{
$rs=mysql_query("select *from userid where id='$c_id'");
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
<tr><th>Address</th><td><textarea name="addr" cols="23" rows="3" placeholder="Enter Address" pattern=".{,150}" title="Address Contain only 150 characters"></textarea></td></tr>
<tr><th>Phone</th><td><input type="text" name="phone" placeholder="Enter Phone Number" pattern="[0-9]{10}" title="Please Enter Valid phone" required=""></td></tr>
<tr><th>Email</th><td><input type="email" name="email" placeholder="Enter Email Id" required=""></td></tr>
<tr><td></td><td colspan="2"><input type="submit" name="signup" value="Signup" id="sub" formenctype="multipart/form-data"></td></tr>
<tr><td align="center" colspan="2"><a href="front.php">Login</a></td></tr>
</table>
</form>
</td></tr>

<!-- footer start -->
<tr><td><?php
if(isset($signup))
{
//insertion of data
mysql_query("INSERT INTO `userid`(`id`, `name`, `email`, `mobile`, `pass`, `address`) VALUES ('$c_id','$name','$email','$phone','$cpass','$addr')");
}

include "footer.php";
?></td></tr>
</table>
</body>
</html>
