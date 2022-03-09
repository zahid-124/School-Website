<?Php
require '../db_connect.php';
$id=$_GET['id'];
$query="SELECT link FROM notices WHERE id='$id'";
$qryRes=mysqli_query($db_connect, $query);
$link=mysqli_fetch_assoc($qryRes);
$location="/sjr-academy/admin/uploads/notice/".$link['link'];
echo $location;
unlink("../admin/uploads/notice/".$link['link']);
$deletQry="DELETE FROM notices WHERE id='$id'";
$delRes=mysqli_query($db_connect, $deletQry);
if($delRes){
    header('location:notice.php');
}
else{
    header('location:notice.php');
}
?>