<?php
require '../dashboard/header.php';
$classId=$_GET['id'];
#all class query
$classQuery="SELECT * FROM classes";
$classes=mysqli_query($db_connect, $classQuery);
#sigle class query
$id=$_GET['id'];
$SclassQuery="SELECT * FROM classes WHERE id='$id'";
$Sclass=mysqli_query($db_connect, $SclassQuery);
$classR=mysqli_fetch_assoc($Sclass);

#class notice query
$noticeQuery="SELECT * FROM notices WHERE class='$id'";
$notices=mysqli_query($db_connect, $noticeQuery);

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
<section class="mt-3">
    <div class="row" style="--bs-gutter-x: 0">
        <div class="col-lg-1"></div>
        <div class="col-lg-3 padding-0">
            <div class="features-middle">
                <div class="noticed">
                    <h3 class="p-3">
                        ALL CLASSES
                    </h3>
                </div>
                <div class="table-1  bg-primary">
                    <?php
                    foreach($classes as $class){
                    ?>
                    <div class="row hover-0">
                        <div class="col-12 border p-3 mb-1 ">
                            <a class=" text-white" href="/sjr-academy/class/class_details.php?id=<?=$class['id']?>"><?=$class['class_name']?></a>
                        </div>

                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="bg-primary d-flex align-items-center p-1 mb-2 rounded">
                <img style="width: 45px;" src="../images/class.png">
                <h3 class="text-white ms-5"><?=$classR['class_name']?></h3>
            </div>
            <div class="text-white bg-secondary rounded p-2 ps-5 mb-2">
                <h4>
                    All Notices
                </h4>
            </div>
            <div class="table-1 ">
                <?php
                foreach($notices as $idx=>$notice){
                ?>
                <div class="row hover-0">

                    <div class="col-2 p-2  border custom">
                        <h4> <?=date_format(date_create($notice['start_date']), "d-m-Y")?> </h4>
                    </div>
                    <div class="col-10 p-2 border lr">
                        <a href="/sjr-academy/notice/notice.php?id=<?=$notice['id']?>"><?=$notice['title']?></a>
                    </div>

                </div>
                <?php } ?>
            </div>
            
            <div class="text-white bg-secondary rounded p-2 ps-5 mt-3 mb-2">
                <h4>
                    Faculty Members
                </h4>
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
                            <div class="col-lg-4 col-sm-12">
                                <div class="section-B">
                                    <p><i class="fas fa-envelope"></i><?=$member['email']?></p>
                                    <p><i class="fa fa-phone-square" aria-hidden="true"></i><?="+88 ".$member['phone']?></p>
                                    <p><i class="fa fa-hand-o-right" aria-hidden="true"></i><?="Joining Date: ".date_format(date_create($member['join_date']), "d-m-Y")?></p>
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
            <div class="text-white bg-secondary rounded p-2 ps-5 mt-3 mb-2">
                <h4>
                    Contact Informations
                </h4>
            </div>
            <div class="table-1 mb-2">
                <tr>
                    <td><i class="fa fa-phone-square" aria-hidden="true"></i> </td>
                    <td class="ms-2"> Mobile: </td>
                    <td><?="+88 ".$classR['phone']?></td>
                </tr>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</section>
<?php
require '../dashboard/footer.php';
?>