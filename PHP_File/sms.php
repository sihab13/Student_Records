<!DOCTYPE html>
<html>
<head>
	<title> NOT Working</title>
</head>
<body>

	<?php
		
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
			if(isset($_POST['s_roll'])){ 
				echo $_POST['roll_no'];
				 
		         	
		         }
		         ?>
				

			
			
			<?php
		}

		?>

</body>
</html>