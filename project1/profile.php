<html>
<!-- user profile page -->
<head><title>profile</title>
<link rel="stylesheet" href="style/profile.css">
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<?php
session_start();
error_reporting(1);
extract($_POST);
include "database.php";

$desc=mysql_fetch_array(mysql_query("select * from userid where id='$_SESSION[user]'"));

//Change Mobile
if (isset($smt)) {
mysql_query("update userid set mobile='$cmobile' where id='$_SESSION[user]'");
$cmobile="";
//header("Location: profile.php");
}

//Change Address
if(isset($smt1)){
mysql_query("update userid set address='$caddr' where id='$_SESSION[user]'");
$caddr="";
//header("Location: profile.php");
}

//Change Email
if(isset($smt2)){
	mysql_query("update userid set email='$cemail' where id='$_SESSION[user]'");
	$cemail="";
//header("Location: profile.php");
}

//Change Password
if(isset($smt3)){
	mysql_query("update userid set pass='$cpass' where id='$_SESSION[user]'");
$cpass="";
//header("Location: profile.php");
}
?>
<script type="text/javascript" src="js/profile.js"></script>
</head>
<body>
<!-- header -->
<header><?php include "header.php"; ?></header>
	
	


<!-- content page -->
<section>
<article id="ph">
Profile
</article>


<article>
<div>
<span id="mdata" class="datah">Mobile no: </span> <span class="data"><?php echo $desc['mobile'] ?></span> <span><button class="btn" id="mbtn">Change Mobile No</button></span>
</div>

<!-- Change Mobile Page -->
	<table id="mbtnp">
		<form method="post" action="profile.php" name="form1" onSubmit="return form1()">
	<tr><th>Change Mobile </th> <td><input type="text" name="cmobile" pattern="[0-9]{10}" title="Please Enter valid Phone No." required="cmobile"></td></tr>
	<tr><th></th> <td><input type="submit" name="smt" value="submit"></td></tr>
</form>
	</table>
</article>

<article>
<div>
<span id="adata" class="datah">Address: </span> <span class="data"><?php echo $desc['address'] ?></span> <span><button class="btn" name="abtn" id="abtn">Change Address</button></span>
</div>
<!-- Change Address Page -->
	<table id="abtnp">
		<form method="post" action="profile.php" name="form2" onSubmit="return form2()">
		<tr><th>Change Address</th> <td><input type="text" name="caddr" pattern=".{,150}" title="Address Contain only 150 characters" required="caddr"></td></tr>
		<tr><th></th> <td><input type="Submit" name="smt1"></td></tr>
		</form>
	</table>
</article>


<article>
<div>
<span id="edata" class="datah">Email: </span> <span class=data><?php echo $desc['email'] ?></span> <span><button class="btn" id="ebtn">Change Email</button></span>
</div>

<!-- Change Email Page -->
	<table id="ebtnp" class="datah">
		<form method="post" action="profile.php" name="form3" onSubmit="return form3()">
		<tr><th>Change Email</th> <td><input type="email" name="cemail" required="cemail"></td></tr>
		<tr><th></th> <td><input type="Submit" name="smt2"></td></tr>
		</form>
	</table>
</article>

<article>
<div>
<span id="pdata" class="datah">Password: </span> <span class=data></span> <span><button class="btn" id="passbtn">Change Password</button></span>
</div>

<!-- Change Password Page -->
	<table id="passbtnp">
		<form method="post" action="profile.php" name="form4" onSubmit="return form4()">
		<tr><th>Change Password</th> <td><input type="password" name="cpass" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}" title="must contain at least 8 or more characters, and at least one number and one uppercase and lowercase latter" required="cpass"></td></tr>
		<tr><th></th> <td><input type="Submit" name="smt3"></td></tr>
		</form>
	</table>
</article>
</section>

<!-- footer -->
<footer><?php include "footer.php"; ?></footer>
</body>
</html>