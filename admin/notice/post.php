<?php
session_start();
require '../db_connect.php';
$title=$_POST['title'];
$description=$_POST['description'];
$class=$_POST['class'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$file1=$_FILES['file'];

if(empty($file1) || $file1['name']==""){
    $_SESSION['error']="Select a file";
    header('location:notice.php');
}

else{
    $file=$_FILES["file"];
    $fileName=$file['name'];
    $name_explode=explode('.',$fileName);
    $extension=end($name_explode);
    $allow=array('pdf');

    if(in_array($extension,$allow)){
        if($file['size']<=500000000000){
            $query="INSERT INTO notices(start_date, end_date, title, class, description, link)
            values('$sdate', '$edate', '$title', '$class', '$description', '$fileName')";

            $insert=mysqli_query($db_connect,$query);

            if($insert){
                $last_id=mysqli_insert_id($db_connect);
                $file_name=$last_id.'.'.$extension;
                $newLocation="../uploads/notice/".$file_name;
                move_uploaded_file($file['tmp_name'],$newLocation);

                $updateQuery="UPDATE notices SET link='$file_name' where id=$last_id";
                $updateResult=mysqli_query($db_connect,$updateQuery);
                //echo "Insert successfull";
                $_SESSION['msg']="Notice added successfull";
                header("location:notice.php");
            }
            else{
                $_SESSION['msg']="notice added unsuccessfull";
                header("location:notice.php");
            }
        }
        else{
            $_SESSION['error']="File size should be less than 5KB.";
            header('location:notice.php');
        }
    }
    else{
        $_SESSION['error']=$extension." format is not allowed";
        header('location:notice.php');
    }
    

}
?>