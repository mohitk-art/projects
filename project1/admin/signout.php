<?php
//admin's signout
session_start();
session_destroy();
header("Location: /admin");
?>
