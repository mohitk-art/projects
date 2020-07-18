<?php
session_start();
include "../database.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New subject</title>

<link rel="stylesheet" href="../style/new subject.css">
<style type="text/css">
</style>
</head>

<body align="center">
<!-- header -->
<header><?php include "header.php"; ?></header>

<!--content -->
<section>
<table align="center" style="margin-top: 50px; ">
<tr><td><a href="addsub.php">New Subject</a></td></tr>
<tr><td><a href="addtest.php">New Test</a></td></tr>
<tr><td><a href="addque.php">Add Question</a></td></tr>
</table>
</section>

<!--footer -->
<footer><?php include "../footer.php"; ?></footer>
</body>
</html>
