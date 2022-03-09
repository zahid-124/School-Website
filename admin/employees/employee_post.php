<?php
require '../db_connect.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$designation=$_POST['designation'];
$class=$_POST['class'];
$subject=$_POST['subject'];
$join_date=$_POST['join_date'];
$category=$_POST['category'];
$cv=$_FILES['cv'];
$photo=$_FILES['photo'];

if(!(empty($cv) || $cv['name']=="") && !(empty($photo) || $photo['name']=="")){


    $cvName=$cv['name'];
    $imgName=$photo['name'];
    $cv_name_explode=explode('.',$cvName);
    $photo_name_explode=explode('.',$imgName);
    $cv_extension=end($cv_name_explode);
    $photo_extension=end($photo_name_explode);
    $cv_allow=array('jpg','JPG','JPEG','jpeg','png','pdf','docx','doc');
    $photo_allow=array('jpg','JPG','JPEG','jpeg','png','gif','svg', 'PNG');

    if(in_array($cv_extension,$cv_allow) && in_array($photo_extension,$photo_allow)){
        if($cv['size']<=5000000 && $photo['size']<=5000000){
            $insertQry="INSERT INTO employees(name, phone, email, designation, class, subject, join_date, category) VALUES('$name', '$phone', '$email', '$designation', '$class', '$subject', '$join_date', '$category')";
            $insertRes=mysqli_query($db_connect, $insertQry);

            $last_id=mysqli_insert_id($db_connect);
            $cv_name=$last_id.'.'.$cv_extension;
            $img_name=$last_id.'.'.$photo_extension;
            $cv_newLocation="../uploads/cv/".$cv_name;
            $photo_newLocation="../uploads/photo/".$img_name;
            move_uploaded_file($cv['tmp_name'],$cv_newLocation);
            move_uploaded_file($photo['tmp_name'],$photo_newLocation);

            $updateQuery="UPDATE employees SET cv='$cv_name', photo='$img_name' where id=$last_id";
            $updateResult=mysqli_query($db_connect,$updateQuery);

            $_SESSION['success']="successfully uploaded";
            header('location:add_employee.php');
        }
        else{
            $_SESSION['file_err']="cv or photo size should be less than 5MB.";
            header('location:add_employee.php');
        }
    }
    else{
        $_SESSION['file_err']="File format is not allowed";
        header('location:add_employee.php');
    }
}
else{
    $_SESSION['file_err']="Select files first";
    header('location:add_employee.php');
}

?>