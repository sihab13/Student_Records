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
	 $s_id=$_SESSION['s_id'];
	$connection = mysqli_connect("localhost","root","");
		  $db = mysqli_select_db($connection,"student_records");
		  $queary = "select * from admin where Admin_ID = $s_id";
		  $queary_run = mysqli_query($connection,$queary);
		  while($row = mysqli_fetch_assoc($queary_run))
		  	{
		  		if($row['Admin_ID'] == $s_id)
		  	{
		  		echo $row['admin_name'];
				
		  	}
		  }
	 

	?>
	<h2>Registration From</h2>
	<div>
		<form action="" method="POST">
			<label> Email: </label> 
			<input type="email" name="email" placeholder="Enter your email...." required><br><br>
 
			<label> Password : </label> 
			
			<input type="password" name="pass" placeholder="Enter a password" required><br><br>
			<label> Confrom Password : </label> 
			<input type="password" name="c_pass" placeholder="Confrom your Password..... " required><br><br>                                               
			<input type="submit" name="reg" value="Registration">
			<a href="admin_login.php"><input type="button" name="back" value="Back to Login">
			


		</form>
	</div>
	
	<?php
		if(isset($_POST['reg']))
		{
			 $email= $_POST['email'];
			 $pass= $_POST['pass'];
			 $c_pass= $_POST['c_pass'];
			if($pass == $c_pass){
				$connection = mysqli_connect("localhost","root","");
		        $db = mysqli_select_db($connection,"student_records");
		        $queary = "UPDATE admin SET Email ='$email',Password= '$pass' WHERE Admin_ID ='$s_id';";
		        $queary_run = mysqli_query($connection,$queary);
				echo "<br><br> **Registration Successful**";
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