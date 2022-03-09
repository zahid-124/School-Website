<?php
session_start();
require '../db_connect.php';
require '../dashboard/header.php';

#notice query
$noticeQuery="SELECT * FROM notices";
$notices=mysqli_query($db_connect, $noticeQuery);
#class query
$classQuery="SELECT * FROM classes";
$classes=mysqli_query($db_connect, $classQuery);
$idToClass=array();
foreach($classes as $class){
    $cid=$class['id'];
    $idToClass['$cid']=$class['class_name'];
}
?>
<div class="row" style="--bs-gutter-x: 0">
    <div class="col-lg-8">
        <div class="card" style="overflow: auto;">
            <div class="card-header">
                <h3>All Notices</h3>
            </div>
            <div class="card-body">
                <table class="table table-stripped" style="">
                    <thead class="thead-dark">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>Ending Date</th>
                            <th>Descriptions</th>
                            <th>PDF</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($notices as $idx=>$notice) {
                           $classId=$notice['class']; ?>
                        <tr>
                            <td><?=$idx+1?></td>
                            <td><?=$notice['title']?></td>
                            <td><?=date_format(date_create($notice['start_date']), "d-m-Y")?></td>
                            <td><?=date_format(date_create($notice['end_date']), "d-m-Y")?></td>
                            <td><?=$notice['description']?></td>
                            <td class="text-center" >
                                <div><embed src= "/sjr-academy/admin/uploads/notice/<?=$notice['link']?>" width= "75" height= "100">
                                </div>
                                <a target="_blank" href="/sjr-academy/admin/uploads/notice/<?=$notice['link']?>">
                                    view</a>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/sjr-academy/admin/notice/edit.php?id=<?=$notice['id']?>" type="button" class="btn btn-primary text-white">Edit</a>
                                    <a href="/sjr-academy/admin/notice/delete.php?id=<?=$notice['id']?>" type="button" class="btn btn-danger text-white">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <?php
            if(isset($_SESSION['error'])){ ?>
                <h3>
                    <div class="alert alert-danger text-bold mb-1 rounded border border-danger text-center">
                        <?=$_SESSION['error']?>
                    </div>
                </h3>
            <?php }
            unset($_SESSION['error']);
            ?>
            <div class="card-header"><h4>Add Notice</h4></div>
            <div class="card-body">
                <form action="post.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" autocomplete="true">
                    </div>
                    <div class="form-group">
                        <label for="sdate">Start Date:</label>
                        <input type="date" class="form-control" id="sdate" name="sdate">
                    </div>
                    <div class="form-group">
                        <label for="edate">Ending Date:</label>
                        <input type="date" class="form-control" id="edate" name="edate">
                    </div>
                    <div class="form-group">
                        <label class="form-lebel" for="class">Class:</label>
                        <select class="form-control" name="class" id="class">
                            <option value="-1">--Select--</option>
                            <?php
                            foreach($classes as $class){
                            ?>
                            <option value="<?=$class['id']?>"><?=$class['class_name']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description:</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload PDF</label>
                        <input type="file" class="form-control-file" name="file">
                    </div>
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require '../dashboard/footer.php'
?>