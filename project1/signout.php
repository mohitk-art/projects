<?php
//user's signout
session_start();
error_reporting(1);
session_destroy();
header("Location: /");
?>
