<style>
.head1{color:red;weight:bold;font-size:35px;}
th{color:brown;font-weight:bold}
td{color:red}

ltable{}
h1{color:blue;text-align:center}
</style>
<html>
<body>
<?php
include('header.php');
?>
<table align="center">
<tr><th><h1>User's Score</h1></th></tr>
<form method="post" action="user score.php">
<tr><th>Search User <input type="text" value="" name="key"> <input type="submit" name="search" value="Search"></th></tr>
</form>
<tr><th>
<?php
extract($_POST);
	include("../database.php");
//dispay view 
$result=mysql_query("select *from userscore order by test_date") or die("Query failed: ".mysql_error());

echo "<style>#tr{border:1px solid red}</style>";
echo "<table cellpadding=7 align=center style='border:1px solid green'>";
echo "<tr>";
echo "<th id=tr>Username</th> <th id=tr>Subject</th> <th id=tr>Test</th> <th id=tr>Test Date</th> <th id=tr>Score</th> <th id=tr>Total Question</th>";
echo "</tr>";

if(isset($_POST['search']))
{
$k=$_POST['key'];
$key=mysql_query("select *from userscore where username like '%$k%' order by test_date");
while($row=mysql_fetch_array($key))
{
echo "<tr>";
echo "<td id=tr>", $row['username'], "</td><td id=tr>", $row['subject'], "</td><td id=tr>", $row['test'], "</td><td id=tr>",$row['test_date'],"</td><td id=tr>", $row['score'], "</td><td id=tr>", $row['total_que'],  "</td>";
echo "</tr>";
}
}
else
{
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td id=tr>", $row['username'], "</td><td id=tr>", $row['subject'], "</td><td id=tr>", $row['test'], "</td><td id=tr>",$row['test_date'],"</td><td id=tr>", $row['score'], "</td><td id=tr>", $row['total_que'],  "</td>";
echo "</tr>";
}
}

echo "</table>";
?>
</th></tr>
</table>
</body>
</html>