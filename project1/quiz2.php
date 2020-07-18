<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);

if(isset($testid))
{
//$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz2.php");
}

if(!isset($_SESSION[tid]))
{
	header("location: front.php");
}
?>
<html>
<head>
<title>Online Quiz</title>
<link href="style/quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<header><?php include "header.php" ?></header>


<section>
<?php
$rs=mysql_query("select * from addque where test_id=$tid",$cn) or die(mysql_error());

if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysql_query("delete from userans where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
}
else
{	

	//$ans is options value
	//$submit is button for next
		if($submit=='Next Question' && isset($ans))
		{

			//select rows acording to $_SESSION[qn]
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);
				mysql_query("insert into userans(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[3]','$row[4]','$row[5]','$row[6]', '$row[7]','$row[8]','$ans')") or die(mysql_error());
				if($ans==$row[8])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into userans(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[3]','$row[4]','$row[5]','$row[6]', '$row[7]','$row[8]','$ans')") or die(mysql_error());
				if($ans==$row[8])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";

				//mk
				mysql_query("update test set total_que='$_SESSION[qn]' where test_id='$tid'");
				
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				$date=date("Y-m-d");
				mysql_query("insert into result(login,test_id,test_date,score) values('$_SESSION[user]',$tid,'$date',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysql_query("select * from addque where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=front.php> Start Again</a>";

exit;
}
mysql_data_seek($rs,$_SESSION[qn]);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=quiz2.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tr><td><span class=style2>Que ".  $n .": $row[3]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[4]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[6]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[7]";

if($_SESSION[qn]<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
</section>

<footer><?php include "footer.php" ?></footer>
</body>
</html>