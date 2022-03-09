<?php
session_start();
require '../db_connect.php';
require '../dashboard/header.php';

#class query
$classQuery="SELECT * FROM employee_categories";
$employee_categories=mysqli_query($db_connect, $classQuery);
?>
<div class="row" style="--bs-gutter-x: 0">
    <div class="col-lg-8">
        <div class="card" style="overflow: auto;">
            <div class="card-header">
                <h3>All Employee Categories</h3>
            </div>
            <div class="card-body">
                <table class="table table-stripped" style="">
                    <thead class="thead-dark">
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($employee_categories as $idx=>$category) {?>
                        <tr>
                            <td><?=$idx+1?></td>
                            <td><?=$category['category_name']?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/sjr-academy/admin/employees/edit.php?id=<?=$category['id']?>" type="button" class="btn btn-primary text-white">Edit</a>
                                    <a href="/sjr-academy/admin/employees/delete.php?id=<?=$category['id']?>" type="button" class="btn btn-danger text-white">Delete</a>
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
            <div class="card-header"><h4>Add Category</h4></div>
            <div class="card-body">
                <form action="category_post.php" method="POST">
                    <div class="form-group">
                        <label for="category_name">Category Name:</label>
                        <input type="text" class="form-control" id="category_name" name="category_name" autocomplete="true">
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