<?php
require '../db_connect.php';
$class_name=$_POST['class_name'];
$phone=$_POST['phone'];

$query="INSERT INTO classes(class_name,phone) VALUES('$class_name', '$phone')";
$insert=mysqli_query($db_connect, $query);
if($insert){
    header('location:add.php');
}
else{
    header('location:add.php');
}
?>