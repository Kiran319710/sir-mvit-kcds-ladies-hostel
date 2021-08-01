<?php
$con = mysqli_connect("localhost","root","","sas");

if($con)
{
	echo "connection Established";
}
else
{
	echo "Not Connected";	
}

?>