<?php
                   $id=$_POST['Student_ID'];
                  $s_name = $_POST['Student_Name'];
                   $f_name=$_POST["fathers_name"];
                   $m_name=$_POST["mothers_name"];
                 

                
                $connection = mysqli_connect("localhost","root","");
		        $db = mysqli_select_db($connection,"student_records");
		        $queary = "INSERT INTO `fees` (`Receipt_No`, `Student_ID`, `Tuition_Fee`, `Date_of_Receipts`) VALUES ('$id','$s_name','$f_name','$m_name'); ";
		        $queary_run = mysqli_query($connection,$queary);
                 
?>
<script type="text/javascript">
  alert("Record Add Successfully");
  window.location.href="admin_deshboard.php";
  


</script>

