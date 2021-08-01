<?php
	session_start();
	$uname = $_REQUEST["username"];
	$pwd = $_REQUEST["password"];
	
	if($uname=="kiran" && $psd=="123")
	{
		$_SESSION["uname"]=$uname;
		header("location:student-data.php");
	}
	else
	header("location:adminlogin.php");
	
?>