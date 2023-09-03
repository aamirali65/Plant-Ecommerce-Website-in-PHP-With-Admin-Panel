<?php
include('main.php');
include('sidebar.php');
include('config.php');
?>
<?php
$u_id = $_GET['id'];
$query1 = mysqli_query($con,"Select * from accessories WHERE id = '$u_id'");
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
                                        <h3 class="card-title">Add Accessories</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" id="firstName" class="form-control" name="name" value="<?php echo $row['name']?>">
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Price</label>
                                                    <input type="text" id="firstName" class="form-control" name="price"value="<?php echo $row['price']?>">
                                                 </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Stock</label>
                                                    <input type="number" id="firstName" class="form-control" name="stock" value="<?php echo $row['stock']?>">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" id="firstName" class="form-control" name="img" value="value="<?php echo $row['img']?>">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Description</label>
                                                    <textarea class="form-control" rows="5" name="purpose"><?php echo $row['purpose']?></textarea>
                                                </div>
                                            </div>
                
                                        </div>
                                         <div class="form-actions float-right">
                                             <a href="manage-accessories.php" class="btn btn-inverse">Cancel</a>
                                             <button type="submit" class="btn btn-primary" name="btn"> <i class="fa fa-check"></i> Update</button>
                                    </div>
                                </form>
                                <?php
                                }}
                                ?>
                                <?php
                                 if(isset($_POST['btn'])){
                                  
                                 $name = $_POST['name'];
                                 $price = $_POST['price'];
                                 $stock = $_POST['stock'];
                                 $des = $_POST['purpose'];
                                 $file = $_FILES['img'];
                                 $imgname = $file['name'];
                                 $imgpath = $file['tmp_name'];
                                 $location = 'img/accessories/'.$imgname;
                                 move_uploaded_file($imgpath,$location);
                                 $query = mysqli_query($con,"UPDATE `accessories` SET `name`='$name',`img`='$imgname',`price`='$price',`purpose`='$des',`stock`='$stock' WHERE id = '$u_id'");
                                   if($query == 1){
                                    echo '<script>alert("Your Data updated");window.location.href="manage-accessories.php"</script>';
                                }
                                else{
                                    echo '<script>alert("Failed to update data");window.location.href="add-accessories.php"</script>';
                                 }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
       </div>