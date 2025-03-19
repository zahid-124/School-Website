<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:/sjr-academy/admin/login/login.php");
}
?>