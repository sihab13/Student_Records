                   <?php
                   $s_id=$_GET['s_id'];

				 $connection = mysqli_connect("localhost","root","");
		         $db = mysqli_select_db($connection,"student_records");
		         $queary = "select * from student where Student_ID = '$s_id'";
		         $queary_run = mysqli_query($connection,$queary);
		         while($row = mysqli_fetch_assoc($queary_run)){
		            ?>


		         	<center>
		         		<form action="admin_edit-student2.php" method="POST" >
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
		         				<input type="text" name="Student_Name" value="<?php echo $row['Student_Name'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Father's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="fathers_name"  value="<?php echo $row["fathers_name"] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Mother's Name : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="mothers_name"  value="<?php echo $row["mothers_name"] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Email : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Email" value="<?php echo $row['Email'] ?>" > 
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
		         			<td><b> 	Date of Birth : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="date_of_birth" value="<?php echo $row['date_of_birth'] ?>" > 
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
		         				<input type="submit"  value="Update" > 
		         			</td>
		         		</tr>
		         	</table>
		         </form>
		         	</center>
		         	 <?php
		         	}


		         	?>