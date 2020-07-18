<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>php</title>
</head>
<body>
<?php
$com=myql_connect('localhost','root','');
mysql_select_db('form');

if(isset($_REQUEST['su']))
{
$a=$_POST['na'];
$b=$_POST['la'];
$c="INSERT INTO FORM(Name,Last_Name,Email_Id,Password";
$q="SELECT * FROM FORM info WHERE Name='$a' and Last_Name='$b'";
$r=mysql_query($q);
if(mysql_num_rows($r)>0)
{
echo "welcome";
}
else
{
echo "please register first";
}
?>
</body>
</html>
