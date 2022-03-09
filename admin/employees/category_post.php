<?php
require '../db_connect.php';
$category_name=$_POST['category_name'];

$query="INSERT INTO employee_categories(category_name) VALUES('$category_name')";
$insert=mysqli_query($db_connect, $query);
if($insert){
    header('location:add_category.php');
}
else{
    header('location:add_category.php');
}
?>