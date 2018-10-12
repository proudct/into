<?php
include 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."' ";
$query = mysqli_query($con,$sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);



if($result['email'] != $email && $result['password'] != $password){
    echo "<script>";
    echo "alert(\" ไม่ได้รับการอนุมัติ\");";
     echo "window.history.back()";
    echo "</script>";
    
    }
else{
    echo "<script>";
    echo "alert(\" ยินดีต้อนรับ คุณ $email \");";
     echo "window.location = 'index.php'";
    echo "</script>";
    // $_SESSION["email"] = $result['email'];
}

?>