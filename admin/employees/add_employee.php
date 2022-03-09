<?php
require '../db_connect.php';
require '../dashboard/header.php';

#designation query
$designationQuery="SELECT * FROM designations";
$designations=mysqli_query($db_connect, $designationQuery);
#category query
$categoryQuery="SELECT * FROM employee_categories";
$categories=mysqli_query($db_connect, $categoryQuery);
#class query
$classQuery="SELECT * FROM classes";
$classes=mysqli_query($db_connect, $classQuery);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 mt-5">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Add Employee</h3>
                    </div>
                    <div class="card-body">
                        <form action="employee_post.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="name">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="-1">--Select--</option>
                                    <?php foreach($categories as $category) {?>
                                    <option value="<?=$category['id']?>"><?=$category['category_name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation:</label>
                                <select class="form-control" id="designation" name="designation">
                                    <option value="-1">--Select--</option>
                                    <?php foreach($designations as $designation) {?>
                                    <option value="<?=$designation['id']?>"><?=$designation['designation_name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="class">Teaching Class:</label>
                                <select class="form-control" id="class" name="class">
                                    <option value="-1">--Select--</option>
                                    <?php foreach($classes as $class) {?>
                                    <option value="<?=$class['id']?>"><?=$class['class_name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subject">Teaching Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                            <div class="form-group">
                                <label for="join_date">Join Date</label>
                                <input type="date" class="form-control" id="join_date" name="join_date">
                            </div>
                            <div class="form-group">
                                <label for="cv">CV</label>
                                <input type="file" class="form-control" id="cv" name="cv">
                            </div>
                            <div class="form-group">
                                <label for="photo">Profile Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<?php
require '../dashboard/footer.php';
?>