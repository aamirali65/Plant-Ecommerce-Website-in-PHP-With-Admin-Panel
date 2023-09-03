<?php
include('main.php');
include('sidebar.php');
include('config.php');
?>
<?php
$u_id = $_GET['id'];
$query1 = mysqli_query($con,"Select * from plants WHERE id = '$u_id'");
if ($query1){
    while($row = mysqli_fetch_assoc($query1)){
?>
       <div class="page-wrapper">
        <div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info mt-5">
                            <div class="card-body">
                            <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h3 class="card-title">Edit Plants</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" id="firstName" value="<?php echo $row['pname']?>" class="form-control" name="name">
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select class="form-control custom-select text-dark" name="category" tabindex="1">
                                                    <option selected hidden>Select Category</option>
                                                    <?php
                                                include 'config.php';
                                                $query1 = mysqli_query($con , 'SELECT * FROM `categories`');
                                               if($query1){
                                                while($res = mysqli_fetch_assoc($query1)){
                                                  
                                                ?>
                                                <option value="<?php echo $res['cat_id']?>" selected="<?php $row['cname']?>"><?php echo $res['name']?></option>
                                             <?php 
                                                }}?>
                                                
                                                    </select>
                                                 </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                    <label class="control-label">Price</label>
                                                    <input type="text" id="firstName" value="<?php echo $row['price']?>" class="form-control" name="price">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label">Stock</label>
                                                    <input type="number" id="firstName" value="<?php echo $row['stocks']?>" class="form-control" name="stock">
                                                 </div>
                                                
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" id="firstName" class="form-control" name="img">
                                                 </div>
                                            </div>
                
                                        </div>
                                         <div class="form-actions float-right">
                                             <a href="manage-plants.php" class="btn btn-inverse">Cancel</a>
                                             <button type="submit" class="btn btn-primary" name="btn"> <i class="fa fa-check"></i> Edit</button>
                                    </div>
                                </form>
                                <?php
                                }}
                                ?>
                                <?php
                                 if (isset($_POST['btn'])) {
                                    $name = $_POST['name'];
                                    $cat = $_POST['category'];
                                    $price = $_POST['price'];
                                    $stock = $_POST['stock'];
                                
                                    $file = $_FILES['img'];
                                    $imgname = $file['name'];
                                    $imgpath = $file['tmp_name'];
                                    $location = 'img/plants/' . $imgname;
                                
                                    // Check if an image was uploaded
                                    if (!empty($imgname)) {
                                        move_uploaded_file($imgpath, $location);
                                        $sql = "UPDATE `plants` SET `pname`='$name', `img`='$imgname', `price`='$price', `stocks`='$stock', `cname`='$cat' WHERE id = '$u_id'";
                                    } else {
                                        $sql = "UPDATE `plants` SET `pname`='$name', `price`='$price', `stocks`='$stock', `cname`='$cat' WHERE id = '$u_id'";
                                    }
                                
                                    $result = mysqli_query($con, $sql);
                                
                                    if ($result) {
                                        echo '<script>alert("Plant information updated Successfully"); window.location.href="manage-plants.php";</script>';
                                    } else {
                                        echo '<script>alert("Failed to update plant information"); window.location.href="edit-plants.php";</script>';
                                    }
                                }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
       </div>