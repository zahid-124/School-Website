<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:login/login.php");
}
require 'dashboard/header.php'
?>
<?php
require 'dashboard/footer.php'
?>