<?php
include 'connect.php';
$id = null;
if(isset($_GET["id"])){
    $id = $_GET["id"];
}

$sql = "DELETE FROM users WHERE id = '".$id."' ";
$query = mysqli_query($con,$sql);

if(!$query) {
    echo "<script>";
                  echo "alert(\"ลบข้อมูลไม่สำเร็จ \");";
                  echo $sql; //ไปหน้าเเรกของพนักงาน
                  echo "</script>";
                   } else {
              
              echo "<script>";
                  echo "alert(\"ลบข้อมูลสำเร็จ \");";
                   echo "window.location = 'index.php';"; //ไปหน้าเเรกของพนักงาน
                  echo "</script>";
      }

mysqli_close($con);
?>