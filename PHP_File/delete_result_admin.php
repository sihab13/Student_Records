<?php
                 $s_id=$_GET['s_id'];
                 $connection = mysqli_connect("localhost","root","");
		             $db = mysqli_select_db($connection,"student_records");
		             $queary = " DELETE FROM results WHERE Student_ID ='$s_id';";
		        $queary_run = mysqli_query($connection,$queary);
                 
?>

<script type="text/javascript">
  alert("Delete successfully");
  window.location.href="admin_deshboard.php";
  


</script>