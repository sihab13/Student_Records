<!DOCTYPE html>
<html>
<head>
	<title>Student Deshboard</title>
	<style type="text/css">
		#header{

			height:10% ;
			width:100%;
			top: 2%;
			background-color: green;
			position: fixed;
			color: white;
		    }
		#left_side{
			height: 75%;
			width: 15%;
			top: 15% ;
			position:fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;

			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			color: red;
			border: solid 1px black;
			top: 15%




		}

	</style>
	<?php
	session_start();
	$s_roll = $_SESSION['s_id'];




	?>
</head>
<body>

	<div id="header">
		<a href="Home_Page.php"> <input type="submit" value="Home"> </a>
		<center> <b> Welcome to Student Deshboard </b><br> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Name: <?php echo $_SESSION['s_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp; Email: <?php echo $_SESSION['email']; ?>  </center>
	</div>
	<div id="left_side">
		<form action="" method="post">
			<table>
				<br>
				<tr>
					<td>
						<input type="submit" name="Profile" value="Profile">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="edit_profile" value="Edit Profile">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="resut" value="Results">
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" name="fees" value="Fees">
					</td>
				</tr>				


			</table>
			


		</form>
	</div>

	<div id="right_side">
		<?php

			if(isset($_POST['Profile'])){ 
				 $connection = mysqli_connect("localhost","root","");
		         $db = mysqli_select_db($connection,"student_records");
		         $queary = "select * from student where Student_ID = '$s_roll'";
		         $queary_run = mysqli_query($connection,$queary);
		         while($row = mysqli_fetch_assoc($queary_run))
		         {
		         ?>
		         
		         	<center>
		         	<table>
		         		<br><br>
		         		<tr>
		         			<td><b> Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value=" <?php echo $row['Student_ID'] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Student Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row['Student_Name'] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Father's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row["fathers_name"] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Mother's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row["mothers_name"] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Email : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row['Email'] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Contact Number : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row['Contact_Number'] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Gender : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row['Gender'] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Date of Birth : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row['date_of_birth'] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Blood Group : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row['blood_group'] ?>" disabled> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Address : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<textarea rows="3" cols="40" disabled> <?php echo $row['Address'] ?> </textarea>  
		         			</td>
		         		</tr>
		         	</table>
		         	</center>
		         	<?php
		         }
				 
		         	
		         }
		         ?>





	<?php

			if(isset($_POST['edit_profile'])){ 
				 $connection = mysqli_connect("localhost","root","");
		         $db = mysqli_select_db($connection,"student_records");
		         $queary = "select * from student where Student_ID = '$s_roll'";
		         $queary_run = mysqli_query($connection,$queary);
		         while($row = mysqli_fetch_assoc($queary_run))
		         {
		         ?>
		         
		         	<center>
		         	
		         	<form action="student_edit-student.php" method="POST" >
		         		<table>
		         			<br><br>
		         		<tr>
		         			<td><b> Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_ID" value=" <?php echo $row['Student_ID'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Student Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_Name" value="<?php echo $row['Student_Name'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Father's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="fathers_name" value="<?php echo $row["fathers_name"] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Mother's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="mothers_name"  value="<?php echo $row["mothers_name"] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Contact Number : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Contact_Number"  value="<?php echo $row['Contact_Number'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Gender : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Gender" value="<?php echo $row['Gender'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Blood Group : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="blood_group" value="<?php echo $row['blood_group'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Address : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<textarea rows="3" cols="40" name="Address"> <?php echo $row['Address'] ?> </textarea>  
		         			</td>
		         		</tr>
		         		<tr>
		         			<td>
		         				<input type="submit"  value="save" > 
		         			</td>
		         		</tr>
		         	</table>
		         </form>
		         	</center>
		         	<?php
		         }
				 
		         	
		         }
		         ?>




	 

    <?php
		if(isset($_POST['resut']))
		{
			?>
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<center>
				<table border="2" cellspacing="7">
					<tr> <br><br>
						<th> SGPA </th>
		        		<th> CGPA </th>
		        		<th>Semester </th>
						</tr>
			 <?php
			$connection = mysqli_connect("localhost","root","");
		    $db = mysqli_select_db($connection,"student_records");
	        $queary = "select * from results where Student_ID = '$s_roll';";
	        $queary_run = mysqli_query($connection,$queary);
		    $num=mysqli_num_rows($queary_run);
		    echo "<b>Student ID : $s_roll<b>";
		   
		    if($num!=0)
		    {
		    	
		    	while ($result=mysqli_fetch_assoc($queary_run)) {
		    		echo "
		    		<tr>
		    		<td>".$result['SGPA']."</td>
		    		<td>".$result['CGPA']."</td>
		    		<td>".$result['Semester']."</td>
		    		
		    		";
		    		
		    	}
		    }

		    else
		    {
		    	echo "No record found";


		    }




				?>
			</table>
			</center>
			</body>
			</html>
			<?php

			



		} 
		?>





   	 




	<?php
		if(isset($_POST['fees']))
		{
			?>
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<center>
				<table border="2" cellspacing="7">
					<tr> <br><br>
						<th> Receipt No </th>
		        		<th>Tuition Fee </th>
		        		<th>Date </th>
						</tr>
			 <?php
			$connection = mysqli_connect("localhost","root","");
		    $db = mysqli_select_db($connection,"student_records");
	        $queary = "select * from fees where Student_ID = '$s_roll'";
	        $queary_run = mysqli_query($connection,$queary);
		    $num=mysqli_num_rows($queary_run);
		    echo "<b>Student ID : $s_roll<b>";
		   
		    if($num!=0)
		    {
		    	
		    	while ($result=mysqli_fetch_assoc($queary_run)) {
		    		echo "
		    		<tr>
		    		<td>".$result['Receipt_No']."</td>
		    		<td>".$result['Tuition_Fee']."</td>
		    		<td>".$result['Date_of_Receipts']."</td>
		    		
		    		";
		    		
		    	}
		    }

		    else
		    {
		    	echo "No record found";


		    }




				?>
			</table>
			</center>
			</body>
			</html>
			<?php

			



		} 
		?>




		
	</div>
</body>
</html>
