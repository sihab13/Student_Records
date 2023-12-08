<!DOCTYPE html>
<html>
<head>
	<title>Admin Deshboard</title>
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
	$s_roll = $_SESSION['a_id'];
	?>
</head>
<body>

	<div id="header">
		 <a href="Home_Page.php"> <input type="submit" value="Home"> </a>
		 <center>Welcome to Admin Deshboard </b><br> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Name: <?php echo $_SESSION['a_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp; Email: <?php echo $_SESSION['email']; ?></center>

	</div>
	<div id="left_side">
		<form action="" method="post">
			<table>
				<tr>
					<td> <br>
						<input type="submit" name="student_list" value="Student List">
					</td>
					</tr>

				<tr>
					<td>
						<input type="submit" name="search_student" value="Search Student">
					</td>
					</tr>
				<tr>

					<td>
						<input type="submit" name="edit_student" value="Edit Student">
					</td>
					

				</tr>
				<tr>

					<td>
						<input type="submit" name="new_student" value="Add New Student">
					</td>
					

				</tr>
				<tr>

					<td>
						<input type="submit" name="delete_student" value="Delete Student">
					</td>
					

				</tr>
				<tr>

					<td>
						<input type="submit" name="a_s_result" value="ADD Student Results">
					</td>
					

				</tr>
				<tr>

					<td>
						<input type="submit" name="s_result" value="Edit & Delete Student Results">
					</td>
					

				</tr>
				<tr>

					<td>
						<input type="submit" name="a_s_fee" value="ADD Student Fees">
					</td>
					

				</tr>
				<tr>

					<td>
						<input type="submit" name="s_fee" value="Edit & Delete Student Fee">
					</td>
					

				</tr>



			</table>
			


		</form>
	</div>

	<div id="right_side"><br><br><br>
		<div id="demo">


		


		<?php
		if(isset($_POST['student_list']))
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
					<tr>
						<th>Student ID</th>
		        		<th>Student Name </th>
		        		<th>Father's Name </th>
		        		<th>Email</th>
		        		<th> Date Of Birth </th>
		        		<th colspan="2" align="center">Operation </th>
		        		
						



					</tr>
			 <?php
			$connection = mysqli_connect("localhost","root","");
		    $db = mysqli_select_db($connection,"student_records");
	        $queary = "select * from student;";
	        $queary_run = mysqli_query($connection,$queary);
		    $num=mysqli_num_rows($queary_run);
		    echo "<b> Total Student=  $num </b>";
		   
		    if($num!=0)
		    {
		    	
		    	while ($result=mysqli_fetch_assoc($queary_run)) {
		    		echo "
		    		<tr>
		    		<td>".$result['Student_ID']."</td>
		    		<td>".$result['Student_Name']."</td>
		    		<td>".$result['fathers_name']."</td>
		    		<td>".$result['Email']."</td>
		    		<td>".$result['date_of_birth']."</td>
		    		<td><a href='edit_update_student_admin.php?s_id=$result[Student_ID]'>Edit/Update</td>
		    		<td><a href='delete_student_admin.php?s_id=$result[Student_ID]'>Delete</td>
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
		if(isset($_POST['search_student']))
		{
			?>
			<center>
				<form action="" method="POST">
					Enter Student ID: 
					<input type="text" name="roll_no" placeholder="Enter Student ID.....">
					<input type="submit" name="s_roll" value="search" >
					</form>
				    </center>
			
			<?php 
		}
			if(isset($_POST['s_roll'])){ 
				 $connection = mysqli_connect("localhost","root","");
		         $db = mysqli_select_db($connection,"student_records");
		         $queary = "select * from student where Student_ID = '$_POST[roll_no]'";
		         $queary_run = mysqli_query($connection,$queary);
		         while($row = mysqli_fetch_assoc($queary_run)){
		         	?>
		         	<center>
		         	<table>
		         		<tr>
		         			<td><b> Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row['Student_ID'] ?>" disabled> 
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
		         			<td><b> Password : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text"  value="<?php echo $row['Password'] ?>" disabled> 
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
		if(isset($_POST['edit_student']))
		{
			?>
			<center>
				<form action="" method="POST">
					Enter Student ID: 
					<input type="text" name="roll_no" placeholder="Enter Student ID.....">
					<input type="submit" name="s_roll_for_edit" value="search" >
					</form>
				    </center>
			
			<?php 
		}
			if(isset($_POST['s_roll_for_edit'])){ 
				 $connection = mysqli_connect("localhost","root","");
		         $db = mysqli_select_db($connection,"student_records");
		         $queary = "select * from student where Student_ID = '$_POST[roll_no]'";
		         $queary_run = mysqli_query($connection,$queary);
		         while($row = mysqli_fetch_assoc($queary_run)){
		         	?>
		         	<center>
		         		<form action="admin_edit-student.php" method="POST" >
		         			
		         		
		         	<table>
		         		<tr>
		         			<td><b> Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_ID" value="<?php echo $row['Student_ID'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Student Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_Name"  value="<?php echo $row['Student_Name'] ?>" > 
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
		         				<input type="text" name="mothers_name" value="<?php echo $row["mothers_name"] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Email : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="email" name="Email" value="<?php echo $row['Email'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Password : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Password" value="<?php echo $row['Password'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Contact Number : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Contact_Number" value="<?php echo $row['Contact_Number'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Gender : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Gender" value="<?php echo $row['Gender'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> 	Date of Birth : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="date" name="date_of_birth" value="<?php echo $row['date_of_birth'] ?>" > 
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
		         				<textarea rows="3" cols="40" name="Address" ><?php echo $row['Address'] ?> </textarea>  
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
		if(isset($_POST['new_student']))
		{
			?>
			<center>
				<form action="admin_admit-student.php" method="POST">
					<b> ADMISSION FROM </b> <br> <br> 
					<table>
		         		<tr>
		         			<td><b> ** Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_ID" required  > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> ** Student Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_Name" required> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> ** Father's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="fathers_name" required > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> ** Mother's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="mothers_name" required > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b>&nbsp; &nbsp; Email : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="email" name="Email"  > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> &nbsp; &nbsp; Contact Number : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Contact_Number" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td> Gender: </td> 
			                <td>
			                <input type="radio" name="Gender" value="Male"> Male
			                <input type="radio" name="Gender" value="Female"> Female
			                </td>
		         		</tr>
		         		<tr>
		         			<td><b> ** Date of Birth : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="date" name="date_of_birth" required > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td> Blood group: </td> 
			                 <td> <select name="blood_group">
			                 <option>A+</option>
			                 <option>A-</option>
			                 <option>B+</option>
			                 <option>B-</option>
			                 <option>O+</option>
			                 <option>O-</option>
			                 <option>AB+</option>
			                 <option>AB-</option>
			                 </select><br><br> </td>
		         		</tr>
		         		<tr>
		         			<td><b> &nbsp; &nbsp;	Address : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<textarea rows="3" cols="40" name="Address" > </textarea>  
		         			</td>
		         		</tr>

		         		<tr>
		         			<td> <center>
		         				<input type="submit"  value="Submit" > 
		         				</center>
		         			</td>
		         		</tr>
		         	</table>
		         	</form>
				    </center>
				    <?php

			}

		?>







        <?php
		if(isset($_POST['delete_student']))
		{
			?>
			<center>
				<form action="" method="POST">
					Enter Student ID: 
					<input type="text" name="roll_no" placeholder="Enter Student ID.....">
					<input type="submit" name="s_roll_for_delete" value="search" >
					</form>
				    </center>
			
			<?php 
		}
			if(isset($_POST['s_roll_for_delete'])){ 
				 $connection = mysqli_connect("localhost","root","");
		         $db = mysqli_select_db($connection,"student_records");
		         $queary = "select * from student where Student_ID = '$_POST[roll_no]'";
		         $queary_run = mysqli_query($connection,$queary);
		         while($row = mysqli_fetch_assoc($queary_run)){
		         	?>
		         	<center>
		         		<form action="admin_delete-student.php" method="POST" >
		         			
		         		
		         	<table>
		         		<tr>
		         			<td><b> Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_ID" value="<?php echo $row['Student_ID'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Student Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_Name"  value="<?php echo $row['Student_Name'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Father's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="fathers_name" value="<?php echo $row["fathers_name"] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td>
		         				<input type="submit"  value="Delete" > 
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
		if(isset($_POST['a_s_result']))
		{
			?>
			<center>
				<form action="admin_add_student_result.php" method="POST">
					<b> STUDENT RESULTS </b> <br> <br> 
					<table>
		         		<tr>
		         			<td><b> * Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_ID" required  > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> * SGPA : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_Name" required> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> * CGPA : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="fathers_name" required > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> * Semester : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="mothers_name" required > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td> <center>
		         				<input type="submit"  value="Add Result" > 
		         				</center>
		         			</td>
		         		</tr>
		         	</table>
		         	</form>
				    </center>
				    <?php

			}

		?>







		<?php
		if(isset($_POST['s_result']))
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
					<tr>
						<th>Student ID</th>
		        		<th>SGPA</th>
		        		<th>CGPA </th>
		        		<th>Semester</th>
		        		
		        		<th colspan="2" align="center">Operation </th>
		        		
						



					</tr>
			 <?php
			$connection = mysqli_connect("localhost","root","");
		    $db = mysqli_select_db($connection,"student_records");
	        $queary = "select * from results;";
	        $queary_run = mysqli_query($connection,$queary);
		    $num=mysqli_num_rows($queary_run);

		   
		    if($num!=0)
		    {
		    	
		    	while ($result=mysqli_fetch_assoc($queary_run)) {
		    		echo "
		    		<tr>
		    		<td>".$result['Student_ID']."</td>
		    		<td>".$result['SGPA']."</td>
		    		<td>".$result['CGPA']."</td>
		    		<td>".$result['Semester']."</td>
		    		<td><a href='edit_update_result_admin.php?s_id=$result[Student_ID]'>Edit/Update</td>
		    		<td><a href='delete_result_admin.php?s_id=$result[Student_ID]'>Delete</td>
		    		
		 
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
		if(isset($_POST['a_s_fee']))
		{
			?>
			<center>
				<form action="admin_fee_student.php" method="POST">
					 STUDENT FEES  <br> <br> 
					<table>
		         		<tr>
		         			<td><b> * Receipt No : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_ID" required  > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> * Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_Name" required> 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> * Tuition Fee : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="fathers_name" required > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> * Date of Receipts : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="date" name="mothers_name" required > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td> <center>
		         				<input type="submit"  value="Add Fees" > 
		         				</center>
		         			</td>
		         		</tr>
		         	</table>
		         	</form>
				    </center>
				    <?php

			}

		?>





	<?php
		if(isset($_POST['s_fee']))
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
					<tr>
						<th>Receipt No </th>
						<th>Student ID</th>
		        		<th>Tuition Fee </th>
		        		<th>Date of Receipts</th>
		 
		        		<th colspan="2" align="center">Operation </th>
		        		
						



					</tr>
			 <?php
			$connection = mysqli_connect("localhost","root","");
		    $db = mysqli_select_db($connection,"student_records");
	        $queary = "select * from fees;";
	        $queary_run = mysqli_query($connection,$queary);
		    $num=mysqli_num_rows($queary_run);
		    
		   
		    if($num!=0)
		    {
		    	
		    	while ($result=mysqli_fetch_assoc($queary_run)) {
		    		echo "
		    		<tr>
		    		<td>".$result['Receipt_No']."</td>
		    		<td>".$result['Student_ID']."</td>
		    		<td>".$result['Tuition_Fee']."</td>
		    		<td>".$result['Date_of_Receipts']."</td>
		    		
		    		<td><a href='edit_update_fees_admin.php?s_id=$result[Receipt_No]'>Edit/Update</td>
		    		<td><a href='delete_fees_admin.php?s_id=$result[Receipt_No]'>Delete</td>
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




	</div>
</body>
</html>