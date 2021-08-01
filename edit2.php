
<?php
	include("conn.php");
	$id=$_GET["id"];

	$query=mysqli_query($conn, "select * from student where id=$id");
	$row=mysqli_fetch_row($query);
	$fname=$row[0];
	$lanme=$row[1];
	$email=$row[2];
	$password=$row[3];
	$homeaddress=$row[4];
	$phonenumber=$row[5];
	$course=$row[6];
	$semester=$row[7];
	$usn=$row[8];
	
?>
	<form>
							
	<input type="hidden"  value="<?php echo $id;?>" name="id">
							
								<input type="text"  value="<?php echo $fname ;?>" name="">
								<input type="text"  value="<?php echo $lname ;?>" name="">
								<input type="text"  value="<?php echo $email ;?>" name="">
								<input type="password" value="<?php echo $password; ?>" name="">                          
								<input type="text"  value="<?php echo $homeaddress ;?>" name="">
                                <input type="text" value="<?php echo $phonenumber ;?>" name="">
                                <input type="password" value="<?php echo $course; ?>" name="">                  
                              <input type="text"  value="<?php echo $semester ;?>" name="">
                                <input type="text" value="<?php echo $usn ;?>" name="">
                                
								
                             
		<input type="text" name="course" value="" >
                             
		<input type="text" name="semester" value="">
                             
								<input type="text" name="usn" value="">
                               
								<input type="submit" id="login" value="Submit Your Request">
							</form>