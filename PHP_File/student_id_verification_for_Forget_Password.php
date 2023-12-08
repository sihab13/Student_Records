 <!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
	
</head>
<body>
	<center><br><br>
		<h3>Forget Password</h3>
		
		<form action="" method="POST">
			Email:<input type="text" placeholder="enter your Email......" name="Email" required ><br><br>
			Date of Birth: <input type="date" placeholder="Enter Your date of Birth..." name="bath_date" required ><br><br>
			<input type="submit" name="submit" value="Next ">
			</form>
<?php

		session_start();


		if(isset($_POST['submit'])){
          $connection = mysqli_connect("localhost","root","");
		  $db = mysqli_select_db($connection,"student_records");
		  $queary = "select * from student where Email = '$_POST[Email]'";
		  $queary_run = mysqli_query($connection,$queary);
		  while($row = mysqli_fetch_assoc($queary_run)){
		  	if($row['Email'] ==$_POST['Email']){
		  		if($row['date_of_birth']== $_POST['bath_date']){
		  			$_SESSION['Email']=$row['Email'];
		  			header("Location: Student_Forget_Password.php"); }
		  			else {
		  				echo "Date of Birth does not match with Email"; }
            
            }
		  	
		  	else { 

		  		echo "wrong Email."; 
		  	}



		  }

		}

?>
		

	
</center>

</body>
</html>
