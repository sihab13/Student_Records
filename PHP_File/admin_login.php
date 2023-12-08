<!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
</head>
<style>
		center{
			background-color:#ADD8E6 ; 
			width: 600px;
			height: 500px; 
			margin-left: 400px;
			margin-top: 100px; }

	</style>
<body>
	<center><br><br>
		<h3>  Admin Login Page </h3> <br>
		<form action="" method="POST">
			Email: <input type="text" name="email" required ><br><br>
			Password: <input type="password" name="password" required ><br><br>
			<input type="submit" name="submit" >
			
			
		</form>
		<ul>
				 <a href="admin_id_verification_for_Forget_Password.php">Forget Password </a> <br>
			     <a href="admin_id_verification.php">Sign Up</a>
				

			</ul>

		<?php
		session_start();
		
		if(isset($_POST['submit'])){

		  $connection = mysqli_connect("localhost","root","");
		  $db = mysqli_select_db($connection,"student_records");
		  $queary = "select * from admin where Email = '$_POST[email]'";
		  $queary_run = mysqli_query($connection,$queary);
		  while($row = mysqli_fetch_assoc($queary_run)){
		  	if($row['Email'] ==$_POST['email']){
		  		if($row['Password']== $_POST['password']){

		  			$_SESSION['email']=$row['Email'];
		  			 $_SESSION['a_name']=$row['admin_name'];
		  			 $_SESSION['a_id']=$row['Admin_ID'];
		  			
		  			header("Location: admin_deshboard.php"); }
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
