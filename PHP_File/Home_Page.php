<!DOCTYPE html>
<html>
<head>
	<title>Login Page </title>
</head>
<style>
		center{
			background-color:#ADD8E6 ; 
			background-image: url("121.jpg");
			width: 600px;
			height: 500px; 
			margin-left: 400px;
			margin-top: 100px; }

	</style>
<body>
	<center> <br><br>
		<h3>STUDENT RECORD KEEPING SYSTEM </h3> <br>
		<form action="" method="POST">
			<input type="submit" name="admin_login" value="Admin Login">
			<input type="submit" name="student_login" value="Student Login">
			
		</form>
		<?php
		if(isset($_POST['admin_login']))
		{
			header("Location: admin_login.php");
		}

		if(isset($_POST['student_login']))
		{
			header("Location: student_login.php");
		}
		?>

</center>

</body>
</html>