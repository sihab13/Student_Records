<?php
                  $id=$_POST['Student_ID'];
                 $s_name = $_POST['Student_Name'];
                   $f_name=$_POST["fathers_name"];
                   $m_name=$_POST["mothers_name"];
                   $email=$_POST["Email"];
                   $c_no=$_POST["Contact_Number"];
                   $birth=$_POST["date_of_birth"];
                   $Gender=$_POST["Gender"];
                   $b_g=$_POST["blood_group"];
                   $address=$_POST["Address"];

                $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,"student_records");
            $queary = "INSERT INTO `student` (`Student_ID`, `fathers_name`, `mothers_name`, `Student_Name`, `date_of_birth`, `Gender`, `blood_group`, `Address`, `Contact_Number`, `Email`, `Password`) VALUES ('$id','$f_name','$m_name','$s_name','$birth','$Gender','$b_g','$address','$c_no','$email',''); ";
            $queary_run = mysqli_query($connection,$queary);
                 
                 
?>
<script type="text/javascript">
  alert("Admission Successfully");
  window.location.href="admin_deshboard.php";
  


</script>