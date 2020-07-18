<!--headrer for user page -->
<!-- header stylesheet -->
<?php
@$_SESSION['user']; 
  error_reporting(1);
  include "database.php";
$mk=mysql_query("select *from userid where id='$_SESSION[user]'");
$desc=mysql_fetch_array($mk);
?>

<link rel="stylesheet" type="text/css" href="style/header.css">
<style>
nav ul {
    margin: 0px;
    padding: 0px;
}

nav ul li {
    display: inline;
    /*margin: 2px; */
}
</style>
<table width="100%" border="0">
<tr>
<th id="h1" colspan="2">
<!--
<span id=fence><embed src="image/fence.swf" id=fence align="left" valign=top ></embed></span>
-->
</th>
</tr>
<tr><td align="left">
<?php 
if(isset($_SESSION['user']))
{
echo "<font id='u'> User: </font> <font id='o'>",$desc['name'],"</font>";
}
else{
echo "&nbsp;";
}
?>
</td>
<th valign="bottom" align="right">
<?php
if(isset($_SESSION['user']))
{
?>

<nav>
<ul>
<li><a href=test.php><button>Quiz Online</button></a></li>
<li><a href='profile.php'><button>Profile</button></a></li>
<li><a href='signout.php'><button>Signout</button></a></li>
<li><a href='status.php'><button>Status</button></a></li>
</ul>
</nav>

<?php
}
else{
echo "&nbsp;";
}
?>
</th></tr>
</table>
</body>
</html>