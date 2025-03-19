<?php
session_start();
require '../db_connect.php';
$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT COUNT(id) AS cnt FROM admin where email='$email' and password='$password'";
$res=mysqli_query($db_connect, $query);
$fetch=mysqli_fetch_assoc($res);
if($fetch['cnt']>0) {
    $_SESSION['login']=$email;
    header("location:../notice/notice.php");
}
else {
    $_SESSION['loginMsg']="Email or Password is Wrong!!";
    header("location:login.php");
}
?>