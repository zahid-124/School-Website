<?php
require '../db_connect.php';
$name=$_POST['designation_name'];
$value=$_POST['value'];

$query="INSERT INTO designations(designation_name, value) VALUES('$name','$value')";
$result=mysqli_query($db_connect, $query);
if($result){
    header("location:add_teachers_designation.php");
}
else{
    header("location:add_teachers_designation.php");
}
?>