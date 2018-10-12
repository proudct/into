<?php
include 'connect.php';

$sql ="UPDATE users SET
email = '".$_POST["email"]."',
password = '".$_POST["password"]."'
WHERE id = '".$_POST["id"]."'
";

 
 $query = $con->query($sql);

 if(!$query){
     echo "<script>";
     echo "alert(\"อัพเดทข้อมูลไม่สำเร็จ \");";
     echo $sql;
     echo "</script>";
      } 
      else {
 
 echo "<script>";
     echo "alert(\"อัพเดทข้อมูลสำเร็จ \");";
     echo "window.location = 'index.php';"; //ไปหน้าเเรกของพนักงาน
     echo "</script>";
 }
 
 mysqli_close($con);
 ?>
