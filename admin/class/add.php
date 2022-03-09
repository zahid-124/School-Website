<?php
session_start();
require '../db_connect.php';
require '../dashboard/header.php';

#class query
$classQuery="SELECT * FROM classes";
$classes=mysqli_query($db_connect, $classQuery);
?>
<div class="row" style="--bs-gutter-x: 0">
    <div class="col-lg-8">
        <div class="card" style="overflow: auto;">
            <div class="card-header">
                <h3>All classes</h3>
            </div>
            <div class="card-body">
                <table class="table table-stripped" style="">
                    <thead class="thead-dark">
                        <tr>
                            <th>SL</th>
                            <th>Class Name</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($classes as $idx=>$class) {?>
                        <tr>
                            <td><?=$idx+1?></td>
                            <td><?=$class['class_name']?></td>
                            <td><?=$class['phone']?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/sjr-academy/admin/class/edit.php?id=<?=$class['id']?>" type="button" class="btn btn-primary text-white">Edit</a>
                                    <a href="/sjr-academy/admin/class/delete.php?id=<?=$class['id']?>" type="button" class="btn btn-danger text-white">Delete</a>
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
            <div class="card-header"><h4>Add class</h4></div>
            <div class="card-body">
                <form action="post.php" method="POST">
                    <div class="form-group">
                        <label for="class_name">Class Name:</label>
                        <input type="text" class="form-control" id="class_name" name="class_name" autocomplete="true">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" autocomplete="true">
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