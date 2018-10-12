<?php
include  'connect.php';

if(move_uploaded_file($_FILES["xx"]["tmp_name"],"img/".$_FILES["xx"]["name"]))
{
    $sql = "INSERT INTO images (name) VALUES
    ('".$_FILES["xx"]["name"]."')";
    $query = $con->query($sql);


if(!$query){
echo "<script>";
echo "alert(\"บันทึกรูปไม่สำเร็จ \");";
echo $sql;
echo "</script>";
}
else {

echo "<script>";
echo "alert(\"บันทึกรูปสำเร็จ \");";
echo "window.location = 'index.php';"; 
echo "</script>";
}


}


mysqli_close($con);

?>