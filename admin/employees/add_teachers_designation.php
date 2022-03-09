<?php
session_start();
require '../db_connect.php';
require '../dashboard/header.php';

#designation query
$designationQuery="SELECT * FROM designations";
$designations=mysqli_query($db_connect, $designationQuery);
?>
<div class="row" style="--bs-gutter-x: 0">
    <div class="col-lg-8">
        <div class="card" style="overflow: auto;">
            <div class="card-header">
                <h3>All Designations</h3>
            </div>
            <div class="card-body">
                <table class="table table-stripped">
                    <thead class="thead-dark">
                        <tr>
                            <th>SL</th>
                            <th>Designation Name</th>
                            <th>Designation Value</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($designations as $idx=>$designation) {?>
                        <tr>
                            <td><?=$idx+1?></td>
                            <td><?=$designation['designation_name']?></td>
                            <td><?=$designation['value']?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/sjr-academy/admin/employees/edit.php?id=<?=$designation['id']?>" type="button" class="btn btn-primary text-white">Edit</a>
                                    <a href="/sjr-academy/admin/employees/delete.php?id=<?=$designation['id']?>" type="button" class="btn btn-danger text-white">Delete</a>
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
            <div class="card-header"><h4>Add Designation</h4></div>
            <div class="card-body">
                <form action="designation_post.php" method="POST">
                    <div class="form-group">
                        <label for="designation_name">Designation Name:</label>
                        <input type="text" class="form-control" id="designation_name" name="designation_name" autocomplete="true">
                    </div>
                    <div class="form-group">
                        <label for="value">Designation Value:</label>
                        <input type="number" class="form-control" id="value" name="value" autocomplete="true">
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