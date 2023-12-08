<?php
                 $id=$_POST['Student_ID'];
                 $s_name = $_POST['Student_Name'];
                   $f_name=$_POST["fathers_name"];
                   $m_name=$_POST["mothers_name"];
                   
                 

                
                $connection = mysqli_connect("localhost","root","");
		        $db = mysqli_select_db($connection,"student_records");
		        $queary = " UPDATE results SET SGPA ='$s_name',CGPA= '$f_name', Semester= '$m_name' WHERE Student_ID ='$id' ;";
		        $queary_run = mysqli_query($connection,$queary);
                 
?>


<script type="text/javascript">
  alert("Edited data save successfully");
  window.location.href="admin_deshboard.php";
  


</script>