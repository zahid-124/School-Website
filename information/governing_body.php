<?php
require '../dashboard/header.php';
#designation query
$designationQry="SELECT * FROM designations ORDER BY value DESC";
$designations=mysqli_query($db_connect, $designationQry);
$idToDesgnation= array();
foreach($designations as $designation){
    $did=$designation['id'];
    $idToDesgnation[$did]=$designation['designation_name'];
}
#category query
$categoryQry="SELECT * FROM employee_categories";
$categories=mysqli_query($db_connect, $categoryQry);
$idToCategory= array();
foreach($categories as $category){
    $cid=$category['id'];
    $idToCategory[$cid]=$category['category_name'];
}
?>
<section class="mt-3 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                 <div class="about-right">
                     <div class="about-right-head">
                         <h3> গভার্নিং বডি তালিকা (জ্যেষ্ঠতার ক্রমানুসারে)</h3>
                     </div>
                     <div class="about-right-body">
                        <?php foreach($designations as $designation){
                             $designationId=$designation['id'];
                             $memberQry="SELECT * FROM employees WHERE designation='$designationId' ORDER BY join_date";
                             $members=mysqli_query($db_connect, $memberQry);

                             foreach($members as $member){
                                 $categoryId=$member['category'];
                                 if($idToCategory[$categoryId]=="Governing Body"){
                                 ?>

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
                            }
                        ?>
                         
                     </div>
                 </div>
             </div>
             <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<?php
require '../dashboard/footer.php';
?>