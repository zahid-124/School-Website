<?php
require '../dashboard/header.php'
?>
<section class="mt-3 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="aboutus" style="background-color: white">
                    <div class="bg-primary text-white text-center p-3 mb-2 rounded-3">
                        <h4>Student Login</h4>
                    </div>
                    <div class="p-2 text-justify rounded" >
                        <div class="card" style="background-color: #F1F8E9;">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="id">Student ID:</label>
                                        <input type="text" class="form-control" id="id">
                                    </div>
                                    <div class="form-group">
                                        <label for="id">Registration:</label>
                                        <input type="text" class="form-control" id="id">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<?php
require '../dashboard/footer.php'
?>