 <!DOCTYPE html>
<html>
<head>
	<title>Student Login </title>
	<style>
		center{
			background-color:#ADD8E6 ; 
			width: 600px;
			height: 500px; 
			margin-left: 400px;
			margin-top: 100px; }

	</style>
</head>
<body>
	<center><br><br>
		<h3>  Student Login Page </h3> <br>
		<form action="" method="POST">
			Email:<input type="text" placeholder="enter your email id" name="email" required ><br><br>
			Password: <input type="password" placeholder="Enter your password" name="password" required ><br><br>
			<input type="submit" name="submit" value="Log in">
			</form>
			<ul>
				 <a href="student_id_verification_for_Forget_Password.php">Forget Password </a> <br>
			     <a href="student_id_verification.php">Sign Up</a>
				

			</ul>
		

		<?php
		session_start();
		if(isset($_POST['submit'])){

		  $connection = mysqli_connect("localhost","root","");
		  $db = mysqli_select_db($connection,"student_records");
		  $queary = "select * from student where Email = '$_POST[email]'";
		  $queary_run = mysqli_query($connection,$queary);
		  while($row = mysqli_fetch_assoc($queary_run)){
		  	if($row['Email'] ==$_POST['email']){
		  		if($row['Password']== $_POST['password']){
		  			 $_SESSION['email']=$row['Email'];
		  			 $_SESSION['s_name']=$row['Student_Name'];
		  			 $_SESSION['s_id']=$row['Student_ID'];
		  			header("Location: student_deshboard.php"); }
		  			else {
		  				echo "wrong Password"; }
            
            }
		  	else {
		  		echo "wrong Email ID";
		  	}



		  }
		}

		?>
		
</center>

</body>
</html>
