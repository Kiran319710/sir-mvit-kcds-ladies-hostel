<?php
	session_start();
    unset($_SESSION["uname"]);
    header("location:login.php");
?>