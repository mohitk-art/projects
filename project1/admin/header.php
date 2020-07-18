<!--headrer for admin page -->
<!-- header stylesheet -->
<?php
@$_SESSION['admin']; 
  error_reporting(1);
include "../database.php";

//Query
$desc=mysql_fetch_array(mysql_query("select * from admin where user='$_SESSION[admin]'"));

//check either user is hod or teacher
$mk1=mysql_query("select *from admin where f='A' and user='$_SESSION[admin]'");
?>

<link rel="stylesheet" type="text/css" href="../style/header.css">
<style>
.dropdown-content{
    display: none;
    position: absolute;
}

.dropdown:hover .dropdown-content{
  display:block;
}

.dropdown-content button{
	display: block;
	margin: 5px 5px;
	text-decoration:none;
}
</style>
<table width="100%" border="0">
<tr>
<th id="h1" colspan="2">
<!--
<span id=fence><embed src="../image/fence.swf" id=fence align="left" valign=top ></embed></span>
-->
</th>
</tr>
<tr><td align="left">
<?php
if(isset($_SESSION['admin']))
{

echo "<font id='u'> Admin: </font> <font id='o'>",$desc['name'],"</font>";

}
else{
echo "&nbsp;";
}
?>
</td>
<th align="right">
<?php if(isset($_SESSION['admin'])) { ?>

<nav>
<table align="right"><tr>
<!--Head admin login -->
<?php if(mysql_num_rows($mk1)>0){ ?>

<td><a href="newadmin.php" target="_blank"><button>New Admin</button></a></td>

<?php } ?>

<td><a href='profile.php'><button>Profile</button></a> <a href='signout.php'><button>Signout</button></a></td>

<?php
if(mysql_num_rows($mk1)>0){
?>
<td><a href='StatusA.php'><button>Status</button></a></td>

<?php } else{ ?>

<td><a href='Status.php'><button>Status</button></a></td>

<?php } ?>

<td>
<span class="dropdown">
<a href='newsub.php'><button>New Subject</button></a>
<span class="dropdown-content">
<a href='addsub.php'><button>Add Subject</button></a>
<a href='addtest.php'><button>Add Test</button></a>
<a href='addque.php'><button>Add Question</button></a>
</span>
</span>
</td>
</tr></table>
</nav>

<?php }
else{
echo "&nbsp;";
}
?>
</th></tr>
</table>