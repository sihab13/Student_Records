<?php
                 $id=$_POST['Student_ID'];
                 $connection = mysqli_connect("localhost","root","");
		             $db = mysqli_select_db($connection,"student_records");
		             $queary = " DELETE FROM student WHERE Student_ID ='$id' ;";
		        $queary_run = mysqli_query($connection,$queary);
                 
?>

<script type="text/javascript">
  alert("Delete successfully");
  window.location.href="admin_deshboard.php";
  


</script>