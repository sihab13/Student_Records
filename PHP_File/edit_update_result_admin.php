                   <?php
                   $s_id=$_GET['s_id'];

				 $connection = mysqli_connect("localhost","root","");
		         $db = mysqli_select_db($connection,"student_records");
		         $queary = "select * from results where Student_ID = '$s_id'";
		         $queary_run = mysqli_query($connection,$queary);
		         while($row = mysqli_fetch_assoc($queary_run)){
		            ?>


		         	<center>
		         		<form action="admin_edit-resut.php" method="POST" >
		         	<table>
		         		<tr>
		         			<td><b> Student ID : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_ID" value="<?php echo $row['Student_ID'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> SGPA : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="Student_Name" value="<?php echo $row['SGPA'] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> CGPA : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="fathers_name"  value="<?php echo $row["CGPA"] ?>" > 
		         			</td>
		         		</tr>
		         		<tr>
		         			<td><b> Semester : &nbsp; &nbsp; </b></td>
		         			<td>
		         				<input type="text" name="mothers_name"  value="<?php echo $row["Semester"] ?>" > 
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