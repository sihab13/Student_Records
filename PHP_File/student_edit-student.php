<?php
                 $id=$_POST['Student_ID'];
                 $s_name = $_POST['Student_Name'];
                   $f_name=$_POST["fathers_name"];
                   $m_name=$_POST["mothers_name"];
                   
                   $c_no=$_POST["Contact_Number"];
                   
                   $Gender=$_POST["Gender"];
                   $b_g=$_POST["blood_group"];
                   $address=$_POST["Address"];
                 

                
                $connection = mysqli_connect("localhost","root","");
		        $db = mysqli_select_db($connection,"student_records");
		        $queary = " UPDATE student SET Student_Name ='$s_name',fathers_name= '$f_name', mothers_name= '$m_name',Contact_Number= '$c_no',	Gender='$Gender',blood_group='$b_g',Address='$address' WHERE Student_ID ='$id' ;";
		        $queary_run = mysqli_query($connection,$queary);
                 
?>

<script type="text/javascript">
  alert("Edited data save successfully");
  window.location.href="student_deshboard.php";
  


</script>

