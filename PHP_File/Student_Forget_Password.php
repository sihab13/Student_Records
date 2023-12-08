<!DOCTYPE html>
<html>
<head>
	<title>Student Reistration</title>
</head>
<body>
	<center><br><br>
	
	<?php
	session_start();
	echo "Wellcome , ";
	$Email=$_SESSION['Email'];
	$connection = mysqli_connect("localhost","root","");
		  $db = mysqli_select_db($connection,"student_records");
		  $queary = "select * from student where Email = '$Email'";
		  $queary_run = mysqli_query($connection,$queary);
		  while($row = mysqli_fetch_assoc($queary_run))
		  	{
		  		if($row['Email'] == $Email)
		  	{
		  		echo $row['Student_Name'];
				
		  	}
		  }
	 

	?>
	<h2>Reset Your Password</h2>
	<div>
		<form action="" method="POST">
 
			<label> Password : </label> 
			
			<input type="password" name="pass" placeholder="Enter a new password" required><br><br>
			<label> Confrom Password : </label> 
			<input type="password" name="c_pass" placeholder="Confrom your Password..... " required><br><br>                                               
			<input type="submit" name="reg" value="Reset Password">
			<a href="admin_login.php"><input type="button" name="back" value="Back to Login">
			


		</form>
	</div>
	
	<?php
		if(isset($_POST['reg']))
		{
			 $pass= $_POST['pass'];
			 $c_pass= $_POST['c_pass'];
			if($pass == $c_pass){
				$connection = mysqli_connect("localhost","root","");
		        $db = mysqli_select_db($connection,"student_records");
		        $queary = "UPDATE student SET Password= '$pass' WHERE Email ='$Email';";
		        $queary_run = mysqli_query($connection,$queary);
				echo "<br><br> **Password Reset Successfully**";
			}
			else
			{
				echo "<br> **Password are not matching";
			}
		}


?>





	
	</center>

</body>
</html>