<?php
require '../dashboard/header.php';
$id=$_GET['id'];
#class query
$classQuery="SELECT * FROM classes where id='$id'";
$classes=mysqli_query($db_connect, $classQuery);
$class=mysqli_fetch_assoc($classes);
?>
<section class="bg-primary text-center text-white" style="padding: 100px; margin: 10px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="line-height: 50px;"><?=ucwords(strtolower($class['class_name']))." "?>Admission is Not<br> Available Current Now</h1>
        </div>
    </div>
</section>
<?php
require '../dashboard/footer.php';
?>