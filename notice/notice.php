<?php
require '../db_connect.php';
require '../dashboard/header.php';
$id=$_GET['id'];
$query="SELECT * FROM notices WHERE id='$id'";
$notices=mysqli_query($db_connect, $query);
$notice=mysqli_fetch_assoc($notices);
//print_r($notice);
?>
<section>
    <div class="row" style="--bs-gutter-x: 0">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class=" bg-primary d-flex align-items-center p-1 mt-3 mb-2 rounded">
                <img style="width: 50px;" src="../assets/pin.png">
                <h3 class="text-white">NOTICE</h3>
            </div>
            <div class="p-2 rounded" style="background-color: #E8F5E9; box-sizing:border-box;">
                <div class="row border" style="--bs-gutter-x: 0">
                    <div style="border-right: 1px solid #ddd;" class="col-md-2  p-2">Notice Title</div>
                    <div class="col-md-10 border-left p-2"><?=$notice['title']?></div>
                </div>
                <div class="row border" style="--bs-gutter-x: 0">
                    <div style="border-right: 1px solid #ddd;" class="col-md-2  p-2">Date</div>
                    <div class="col-md-10 border-left p-2"><?=date_format(date_create($notice['start_date']), "d-m-Y")?></div>
                </div>
                <div class="row border" style="--bs-gutter-x: 0">
                    <div style="border-right: 1px solid #ddd;" class="col-md-2  p-2">Description</div>
                    <div class="col-md-10 border-left p-2"><?=$notice['description']?></div>
                </div>
                <div class="p-2">
                    <embed src="/sjr-academy/admin/uploads/notice/<?=$notice['link']?>" style="width: 100%; height:800px;">
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</section>
<?php
require '../dashboard/footer.php';
?>