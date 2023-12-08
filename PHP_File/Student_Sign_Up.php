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
		  $queary = "select * from student where Student_ID = $s_id";
		  $queary_run = mysqli_query($connection,$queary);
		  while($row = mysqli_fetch_assoc($queary_run))
		  	{
		  		if($row['Student_ID'] == $s_id)
		  	{
		  		echo $row['Student_Name'];
				echo "<br> Father's Name : ";
				echo $row["fathers_name"];
		  	}
		  }


	?>
	<h2>Registration From</h2>
	<div>
		<form action="" method="POST">
			<label> Email: </label> 
			<input type="email" name="email" placeholder="Enter your Email......." required><br><br>
			<label> Contact Number : </label> 
			<input type="int" name="phone" placeholder="Enter your Phone Number...." required><br><br>
			<label> Gender: </label> 
			<input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female
			<br><br>
			
			<label> Blood group: </label> 
			<select name="group">
			<option>A+</option>
			<option>A-</option>
			<option>B+</option>
			<option>B-</option>
			<option>O+</option>
			<option>O-</option>
			<option>AB+</option>
			<option>AB-</option>
			</select><br><br>

			<label> Address: </label> 
			<input type="text" name="address" placeholder="state,city,zip code......" required><br><br>    
			<label> Password : </label> 
			
			<input type="password" name="pass" placeholder="Enter a password" required><br><br>
			<label> Confrom Password : </label> 
			<input type="password" name="c_pass" placeholder="Confrom your Password..... " required><br><br>                                               
			<input type="submit" name="reg" value="Registration">
			<a href="student_login.php"><input type="button" name="back" value="Back to Login">
			


		</form>

<?php
		if(isset($_POST['reg']))
		{
			 $email= $_POST['email'];
			 $phone= $_POST['phone'];
			 $gender= $_POST['gender'];
			 $group= $_POST['group'];
			 $address= $_POST['address'];
			 $pass= $_POST['pass'];
			 $c_pass= $_POST['c_pass'];
			if($pass == $c_pass){
				$connection = mysqli_connect("localhost","root","");
		        $db = mysqli_select_db($connection,"student_records");
		        $queary = "UPDATE student SET Email ='$email',Contact_Number ='$phone',Gender ='$gender',blood_group='$group',Address='$address',Password= '$pass' WHERE Student_ID ='$s_id';";
		        $queary_run = mysqli_query($connection,$queary);
				echo "<br><br> **Registration Successful**";
			}
			else
			{
				echo "<br> **Password are not matching";
			}
		}


?>




	</div>
	</center>

</body>
</html>