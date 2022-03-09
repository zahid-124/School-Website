<?php
$host_name='localhost';
$user_name='root';
$password='';
$db_name='sjr_academy';

$db_connect=mysqli_connect($host_name, $user_name, $password, $db_name);
if(!$db_connect){
    echo 'error!! database not connected';
}

?>