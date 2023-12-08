<?php
                  $id=$_POST['Student_ID'];
                 $s_name = $_POST['Student_Name'];
                   $f_name=$_POST["fathers_name"];
                   $m_name=$_POST["mothers_name"];
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"student_records");
      $queary = "INSERT INTO `results` (`Student_ID`, `SGPA`, `CGPA`, `Semester`) VALUES ('$id','$s_name','$f_name','$m_name'); ";
      $queary_run = mysqli_query($connection,$queary);
               
                 
                 
?>

<script type="text/javascript">
  alert("Result Add Successfully");
  window.location.href="admin_deshboard.php";
  


</script>