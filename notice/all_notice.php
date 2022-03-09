<?php
require '../db_connect.php';
require '../dashboard/header.php';
$id=$_GET['id'];
$query="SELECT * FROM notices WHERE id='$id'";
$noticesR=mysqli_query($db_connect, $query);
$noticeR=mysqli_fetch_assoc($noticesR);

#all notice query
$noticeQuery="SELECT * FROM notices";
$noticesL=mysqli_query($db_connect, $noticeQuery);
//print_r($notice);
?>
<section class="mt-3">
    <div class="row" style="--bs-gutter-x: 0">
        <div class="col-lg-1"></div>
        <div class="col-lg-3 padding-0">
            <div class="features-middle">
                <div class="noticed">
                    <h3>
                        <img src="images/pin.png" class="img-fluid" width="30" alt="">ALL NOTICES
                    </h3>
                </div>
                <div class="table-1 ">
                    <?php
                    foreach($noticesL as $idx=>$notice){
                    ?>
                    <div class="row hover-0">

                        <div class="col-2  border custom">
                            <h4> <?=date_format(date_create($notice['start_date']), "d-m-Y")?> </h4>
                        </div>
                        <div class="col-10 border lr">
                            <a href="/sjr-academy/notice/all_notice.php?id=<?=$notice['id']?>"><?=$notice['title']?></a>
                        </div>

                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class=" bg-primary d-flex align-items-center p-1 mb-2 rounded">
                <img style="width: 50px;" src="../assets/pin.png">
                <h3 class="text-white">NOTICE</h3>
            </div>
            <div class="p-2 rounded" style="background-color: #E8F5E9; box-sizing:border-box;">
                <div class="row border" style="--bs-gutter-x: 0">
                    <div style="border-right: 1px solid #ddd;" class="col-md-2  p-2">Notice Title</div>
                    <div class="col-md-10 border-left p-2"><?=$noticeR['title']?></div>
                </div>
                <div class="row border" style="--bs-gutter-x: 0">
                    <div style="border-right: 1px solid #ddd;" class="col-md-2  p-2">Date</div>
                    <div class="col-md-10 border-left p-2"><?=date_format(date_create($noticeR['start_date']), "d-m-Y")?></div>
                </div>
                <div class="row border" style="--bs-gutter-x: 0">
                    <div style="border-right: 1px solid #ddd;" class="col-md-2  p-2">Description</div>
                    <div class="col-md-10 border-left p-2"><?=$noticeR['description']?></div>
                </div>
                <div class="p-2">
                    <embed src="/sjr-academy/admin/uploads/notice/<?=$noticeR['link']?>" style="width: 100%; height:800px;">
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</section>
<?php
require '../dashboard/footer.php';
?>