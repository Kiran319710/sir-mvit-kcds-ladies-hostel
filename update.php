<?php
include("conn.php");
 $id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$homeaddress=$_POST["homeaddress"];
$phonenumber=$_POST["phonenumber"];
$course=$_POST["course"];
$semester=$_POST["semester"];
$usn=$_POST["usn"];
mysqli_query($conn, "UPDATE `student` SET `name` = '$name', `class` = '$class', `usn` = '$usn' WHERE `student`.`id` = $id");
//header("location:fetch.php");
?>