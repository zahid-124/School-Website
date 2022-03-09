<?php
require '../db_connect.php';
require '../dashboard/header.php';

#class query
$classQuery="SELECT * FROM classes";
$classes=mysqli_query($db_connect, $classQuery);
#designation query
$classId=$_GET['id'];
$designationQry="SELECT * FROM designations ORDER BY value DESC";
$designations=mysqli_query($db_connect, $designationQry);
$idToDesgnation= array();
foreach($designations as $designation){
    $did=$designation['id'];
    $idToDesgnation[$did]=$designation['designation_name'];
}
?>
<section id="about" class="mb-2 mt-2">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-4 ">
                 <div class="box-shadow">
                 <div class="about-left">
                     <div class="about-left-heading">
                         <h3> 
                            <img src="images/departments.png" width="30" alt=""> 
                            CLASSES</h3>
                     </div>
                 </div>
                 <div class="about-left-body">
                     <?php foreach($classes as $class){ ?>
                     <p>
                         <a href="faculty_member.php?id=<?=$class['id']?>">
                             <img src="images/sms.png" width="15" alt="">
                             <span> <?=$class['class_name']?></span>
                         </a>
                     </p>
                     <?php }?>
                 </div>
                </div>
             </div>
             <div class="col-lg-9 col-md-8">
                 <div class="about-right">
                     <div class="about-right-head">
                         <h3> শিক্ষক/কর্মকর্তা তালিকা (জ্যেষ্ঠতার ক্রমানুসারে)</h3>
                     </div>
                     <div class="about-right-body">
                        <?php foreach($designations as $designation){
                             $designationId=$designation['id'];
                             $memberQry="SELECT * FROM employees WHERE designation='$designationId' and class='$classId' ORDER BY join_date";
                             $members=mysqli_query($db_connect, $memberQry);

                             foreach($members as $member){ ?>

                            <div class="about-right-item">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="section-A">
                                            <h3><?=$member['name']?></h3>
                                            <p class="mt-2"><?=$idToDesgnation[$member['designation']]?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 extra">
                                        <div class="section-B">
                                            <p><i class="fas fa-envelope"></i><?=$member['email']?></p>
                                            <p><i class="fa fa-phone-square" aria-hidden="true"></i><?="+88 ".$member['phone']?></p>
                                            <p><i class="fab fa-youtube"></i>  YouTube Lecture = 0</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 extra1">
                                        <div class="section-C">
                                            <img src="../admin/uploads/photo/<?=$member['photo']?>" width="70" alt="">
                                            <a href="#">Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php }
                            }
                        ?>
                         
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
<?php
require '../dashboard/footer.php';
?>