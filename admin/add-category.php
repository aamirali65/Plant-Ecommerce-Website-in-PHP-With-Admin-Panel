<?php
include('main.php');
include('sidebar.php');

?>
       <div class="page-wrapper">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                        <div class="card card-body mt-5">
                            <h3 class="box-title m-b-0">Categories</h3>
                            <p class="text-muted m-b-30 font-13"> Add Categories </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="cat" >
                                        </div>
                                        <div class="btnz float-right">
                                        <a href="manage-category.php" class="btn btn-danger waves-effect waves-light m-r-10">Back</a>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10" name="btn">Add</button>
                                        </div>
                                    </form>
                                    <?php
                                      if(isset($_POST['btn'])){
                                        include('config.php');
                                        $cat = $_POST['cat'];
                                        $query = mysqli_query($con,"INSERT INTO `categories`(`cat_id`, `name`, `date`) VALUES ('','$cat',current_timestamp())");
                                        if($query == 1){
                                            echo '<script>alert("Your Data inserted Successfully");window.location.href="manage-category.php"</script>';
                                        }
                                        else{
                                            echo '<script>alert("Failed to insert data");window.location.href="add-category.php"</script>';
                                         }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
       </div>