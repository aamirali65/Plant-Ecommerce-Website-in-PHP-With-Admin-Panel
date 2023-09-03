<?php
include('main.php');
include('sidebar.php');

?>
       <div class="page-wrapper">
        <div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info mt-5">
                            <div class="card-body">
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h3 class="card-title">Add Accessories</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" id="firstName" class="form-control" name="name">
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Price</label>
                                                    <input type="text" id="firstName" class="form-control" name="price">
                                                 </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Stock</label>
                                                    <input type="number" id="firstName" class="form-control" name="stock">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" id="firstName" class="form-control" name="img">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Description</label>
                                                    <textarea class="form-control" rows="5" name="purpose"></textarea>
                                                </div>
                                            </div>
                
                                        </div>
                                         <div class="form-actions float-right">
                                             <button type="button" class="btn btn-inverse">Cancel</button>
                                             <button type="submit" class="btn btn-primary" name="btn"> <i class="fa fa-check"></i> Add</button>
                                    </div>
                                </form>
                                <?php
                                 if(isset($_POST['btn'])){
                                    include('config.php');
                                 $name = $_POST['name'];
                                 $price = $_POST['price'];
                                 $stock = $_POST['stock'];
                                 $des = $_POST['purpose'];
                                 $file = $_FILES['img'];
                                 $imgname = $file['name'];
                                 $imgpath = $file['tmp_name'];
                                 $location = 'img/accessories/'.$imgname;
                                 move_uploaded_file($imgpath,$location);
                                 $query = mysqli_query($con,"INSERT INTO `accessories`(`id`, `name`, `img`, `price`, `purpose`, `stock`) VALUES
                                  ('','$name','$imgname','$price','$des','$stock')");
                                   if($query == 1){
                                    echo '<script>alert("Your Data inserted Successfully");window.location.href="manage-accessories.php"</script>';
                                }
                                else{
                                    echo '<script>alert("Failed to insert data");window.location.href="add-accessories.php"</script>';
                                 }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
       </div>