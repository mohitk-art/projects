<?php session_start();
if($_SESSION['footer']==""){ ?>

<link rel='stylesheet' href='style/footer.css'>
<?php } else if($_SESSION['footer']=="A"){ ?>

<link rel='stylesheet' href='../style/footer.css'>

<?php } ?>

<table border="0" width="100%">
<tr>

<td width="30%" rowspan="3" id="icon" valign="top">

<!-- icon start -->
<table 	class="fit">
		<tr>
		<td id="fbg"><img src="facebook icon.png" class="img"></td>
		<td id="tbg"><img src="twitter icon2.jpg" class="img"></td>
		<td id="ybg"><img src="youtube icon.jpg" class="img"></td>
		</tr>
</table>
<!-- end of icon -->
</td>

<!-- copyright -->
<th rowspan="3" align="center" valign="center"><marquee id="marquee" scrollamount="6">Desined by Mohit, Neelu, Abhishek and Suman</marquee></th>

<td width="40%" rowspan="3" align="class" valign="center">
<!-- follow us start -->
&nbsp
</td>
</tr>
</table>