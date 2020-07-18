<?php session_start();
if($_SESSION['footer']==""){ ?>

<link rel='stylesheet' href='style/footer.css'>

<?php } else if($_SESSION['footer']=="A"){ ?>

<link rel='stylesheet' href='../style/footer.css'>

<?php } ?>

<style>
#ftable{height:80px;}
#fbtns{height:80px;}
</style>
<link rel='stylesheet' href='style/footer.css'>
<table border="1" width="100%">
<tr><td id="fbtns" width="30%">
<table border="0">
<tr valign="top"> 
<td id="fb"><img src="facebook icon.png" id="img"></td>
<td id="tw"><img src="twitter icon.png" id="img" ></td>
<td id="you"><img src="youtube icon.jpg" id="img"></td>
</tr>
</table>
</td>

<td id="fmrq" width="">
<marquee id="marquee" scrollamount="6">Copyright by &copy; Mohit, Neelu, Abhishek and Suman</marquee>
</td>

<td id="fcnct" width="30%">&nbsp;</td></tr>
</table>