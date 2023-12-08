 <!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
	
</head>
<body>
	<center><br><br>
		<h1> Verify Your Identity </h1> <br>
		<form action="" method="POST">
			ID:<input type="int" placeholder="enter your Student id" name="s_id" required ><br><br>
			Date of Birth: <input type="date" placeholder="Enter Your date of Birth" name="bath_date" required ><br><br>
			<input type="submit" name="submit" value="Verify Your id ">
			</form>
<?php

		session_start();


		if(isset($_POST['submit'])){
          $connection = mysqli_connect("localhost","root","");
		  $db = mysqli_select_db($connection,"student_records");
		  $queary = "select * from student where Student_ID = '$_POST[s_id]'";
		  $queary_run = mysqli_query($connection,$queary);
		  while($row = mysqli_fetch_assoc($queary_run)){
		  	if($row['Student_ID'] ==$_POST['s_id']){
		  		if($row['date_of_birth']== $_POST['bath_date']){
		  			$_SESSION['s_id']=$row['Student_ID'];
		  			header("Location: Student_Sign_Up.php"); }
		  			else {
		  				echo "Date of Birth does not match with Student ID"; }
            
            }
		  	
		  	else { 

		  		echo "wrong Student ID"; 
		  	}



		  }

		}

?>
		

	
</center>

</body>
</html>
