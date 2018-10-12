<?php
include 'connect.php';

$sql = "INSERT INTO users (email,password) VALUES(
'".$_POST[email]."',
'".$_POST[password]."' 
)";

$query = $con->query($sql);

if(!$query){
    echo "<script>";
    echo "alert(\"บันทึกข้อมูลไม่สำเร็จ \");";
    echo $sql;
    echo "</script>";
     } else {

echo "<script>";
    echo "alert(\"บันทึกข้อมูลสำเร็จ \");";
    echo "window.location = 'index.php';"; 
    echo "</script>";
}

mysqli_close($con)

?>